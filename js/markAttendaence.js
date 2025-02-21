
function attendancetableLoad() {
    var tableData;
    var presentCount=0;
    $.post("database/markAttendance.php", {attendance: 'selectattendance'}, function (tableData) {

        $.each(tableData, function (index, tblValue) {

            tableData += "<tr><td>" + tblValue.id + "</td><td>" + tblValue.fullname + "</td><td><button type='button' class='btn btn-primary attendbutton'value='Attend'>Attend</button> <button type='button' class='btn btn-secondary absentbutton'value='Absent'>Absent</button></td><td><input type='text' class='form-control actiontext'></td><td><input type='text' class='form-control reasontext'></td></tr>";
        });
        $('#attendance_table tbody').html('').append(tableData);

        $('.attendbutton').click(function () {
            //alert('aaa');
            
            $(this).closest('tr').find('td').find('.actiontext').val("Attend");
        });

        $('.absentbutton').click(function () {
            //alert('aaa');
            $(this).closest('tr').find('td').find('.actiontext').val("Absent");
        });


    }, "json");
}

////////////////save data in two tables in the db when save button click////////
function save_sheet_data() {

////////array of second $.post///////

    var bill_description = new Array();
    var course_date = $('#course_date').val();
    var course_trainer_id = $('#course_trainer_id').val();
    var course_typ = $('#course_typ').val();
    //var action = $('#ataction').val();
    //var reason = $('#atreason').val();



//Loop through the Table rows and build a JSON array.

    $("#attendance_table TBODY TR").each(function () {
        var row = $(this);
        var bill = {};
        bill.c_date = course_date;
        bill.c_tr_id = course_trainer_id;
        bill.c_type = course_typ;
        bill.descriptionId = row.find("TD").eq(0).html();
        bill.description = row.find("TD").eq(1).html();
        //bill.qty = row.find("TD").eq(3).html();
        bill.c_action = row.find("TD").eq(3).find('.actiontext').val();
        bill.c_reason = row.find("TD").eq(4).find('.reasontext').val();
        // bill.unitPpric = row.find("TD").eq(4).html();


        bill_description.push(bill);
    });



    $.post("database/markAttendance.php", {attendance: 'insert_attendance', k_bill_description: bill_description}, function (r) {

        //window.location = "print_bill.php?print_id=" + id;
        // paymentClear();
//    }, "json");

    }, "json");
}
///////////////////////////////////////////view attendence sheet////////////////////////////////////////////////////

//load viewAttendenceTable
function viewAttendancetable() {
    //alert('gfhfhf');//To check the viewAttendence_load function

    var Date = $('#viewcourse_date').val();

    $.post("database/markAttendance.php",
            {attendance: 'viewAttendenceLoad',
                key: Date
            },
            function (data) {
                var table_value = " ";

                $.each(data, function (index, table_row) {
                    table_value += "<tr><td class='TID'>" + table_row.Trainee_id + "</td>\n\
                                    <td class='tname'>" + table_row.Trainee_Name + "</td>\n\
                                    <td class='action'>" + table_row.Action + "</td>\n\
                                    <td class='reason'>" + table_row.Reason + "</td>\n\
                                    </tr>";

                });
                table_value += "";
                $('#viewattendance_table tbody').html('').append(table_value);

            }, "json");
}


//load the TrainerID and CourseTitle
function TrainerIDandCourseTitle_load() {

    var Date = $('#viewcourse_date').val();

    $.post("database/markAttendance.php",
            {attendance: 'TID&CTLoad',
                key1: Date
            },
            function (e) {
                $.each(e, function (index, DataView) {
                    $('#viewcourse_trainer_id').val(DataView.Trainer_id);
                    $('#viewcourse_title').val(DataView.Course_type);
                });
            }, "json");
}