/////////////////////////////////load sessions to session manage table/////////////////////////////////////////////////////////////
function sessionManage() {
    var tableData;
    $.post("database/manageSessions.php", {session: 'session_select'}, function (tableData) {

        $.each(tableData, function (index, tblValue) {

            tableData += "<tr><td>" + tblValue.sheet_id + "</td><td>" + tblValue.session_date + "</td><td>" + tblValue.trainee_id + "</td><td>" + tblValue.trainee_name + "</td><td>" + tblValue.course_title + "</td><td>" + tblValue.totalmarks + "</td><td>" + tblValue.grade + "</td><td>" + tblValue.comments + "</td><td><button type='button' class='btn btn-danger sessiondelete'value=" + tblValue.sheet_id + ">Delete</button></td></tr>";
        });
        $('#session_manage_tbl tbody').html('').append(tableData);
        $('.sessiondelete').click(function () {

        });

////////////////////////////////////Delete Sessions/////////////////////////////////////////////////////////////////////////////////////

        $('.sessiondelete').click(function () {
            //alert('OK...');
            //show Local Buyers Details in form of modal
            //$(' #usrModal').modal('show');

            var deletesession = $(this).val();
            swal({
                title: "Are you sure?",
                text: "Your will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            },
                    function () {
                        //alert($(this).val());
                        $.post("database/manageSessions.php",
                                {session: 'sessionDelete', key1: deletesession},
                                function (e) {
                                    swal("Deleted!", "Your imaginary file has been deleted.", "success");
                                    sessionManage();
                                }, "json");
                    });
        });

    }, "json");
}
//////////////////////////////////////////////////////////load session details according to perticular trainee ID/////////////////////
function sessionManageID() {
    //alert('gfhfhf');//To check the viewAttendence_load function

    var selectbyID = $('#searchID').val();

    $.post("database/manageSessions.php",
            {session: 'session_selectbyID',
                key: selectbyID
            },
            function (data) {
                var table_value = " ";

                $.each(data, function (index, table_row) {
                    table_value += "<tr><td class='TID'>" + table_row.sheet_id + "</td>\n\
                                    <td class='tname'>" + table_row.session_date + "</td>\n\
                                    <td class='action'>" + table_row.trainee_id + "</td>\n\
                                    <td class='reason'>" + table_row.trainee_name + "</td>\n\
                                    <td class='TID'>" + table_row.course_title + "</td>\n\
                                    <td class='tname'>" + table_row.totalmarks + "</td>\n\
                                    <td class='action'>" + table_row.grade + "</td>\n\
                                    <td class='reason'>" + table_row.comments + "</td>\n\
                                    <td><button type='button' class='btn btn-danger sessiondelete' value=" + table_row.sheet_id + ">Delete</button></td>\n\
                                    </tr>";

                });
                table_value += "";
                $('#session_manage_tbl tbody').html('').append(table_value);

                $('.sessiondelete').click(function () {
                    //alert('OK...');
                    //show Local Buyers Details in form of modal
                    //$(' #usrModal').modal('show');

                    var deletesession = $(this).val();
                    swal({
                        title: "Are you sure?",
                        text: "Your will not be able to recover this imaginary file!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonClass: "btn-danger",
                        confirmButtonText: "Yes, delete it!",
                        closeOnConfirm: false
                    },
                            function () {
                                //alert($(this).val());
                                $.post("database/manageSessions.php",
                                        {session: 'sessionDelete', key1: deletesession},
                                        function (e) {
                                            swal("Deleted!", "Your imaginary file has been deleted.", "success");
                                            sessionManage();
                                        }, "json");
                            });
                });

            }, "json");
}

/////////////////////////////////////////load session details to trainee dashboard//////////////////////////

function  sessionMansgetID() {
    var tableData;
    $.post("database/manageSessions.php", {session: 'session_selectbytraineeID'}, function (tableData) {

        $.each(tableData, function (index, tblValue) {

            tableData += "<tr><td>" + tblValue.sheet_id + "</td><td>" + tblValue.session_date + "</td><td>" + tblValue.trainee_id + "</td><td>" + tblValue.trainee_name + "</td><td>" + tblValue.course_title + "</td><td>" + tblValue.totalmarks + "</td><td>" + tblValue.grade + "</td><td>" + tblValue.comments + "</td></tr>";
        });
        $('#traineeSession_manage_tbl tbody').html('').append(tableData);
//        $('.sessiondelete').click(function () {


    }, "json");
}

/////////////////////////////////////////////////////////send marksheet details to db//////////////////////////

function addMarks() {
    var trainee_id = $('#trid').val();
    var trainee_name = $('#trname').val();
    var trainer_id = $('#trnerid').val();
    var session_date = $('#sedate').val();
    var session_type = $('#setype').val();
    var input_marks1 = $('#inputmarks1').val();
    var input_marks2 = $('#inputmarks2').val();
    var input_marks3 = $('#inputmarks3').val();
    var input_marks4 = $('#inputmarks4').val();
    var input_marks5 = $('#inputmarks5').val();
    var total_marks = $('#inputtotalmarks').val();
    var input_grade = $('#inputgrade').val();
    var input_comments = $('#inputcomment').val();
    //alert(cus_email);
    //alert(cus_passward);


//$.post("path",{dataset})
    $.post("database/insertMarks.php",
            {trainee_id: trainee_id,
                trainee_name: trainee_name,
                trainer_id: trainer_id,
                session_date: session_date,
                session_type: session_type,
                input_marks1: input_marks1,
                input_marks2: input_marks2,
                input_marks3: input_marks3,
                input_marks4: input_marks4,
                input_marks5: input_marks5,
                total_marks: total_marks,
                input_grade: input_grade,
                input_comments: input_comments},
            function (e) {
//                sessionManage();
//                //alert(e);
//                //if(data="true"){
//                //alert("successfully added");
//                $.each(e, function (index, msgData) {
//                    if (msgData.msgType === 1) {
//
//                        alert(msgData.msg);
//                    } else if (msgData.msgType === 2) {
//                        alert(msgData.msg);
//                        alert(msgData.qry);
//                    }
//                });


            }, "json");
}


//////////////////////////get marksheet to trainee name according to id//////////////////////////////

function markSheetTname_load(getTNameforMarksheet) {

    //var insPlan = $('#trid').val();

    $.post("database/manageSessions.php",
            {session: 'get_traineeID', key: getTNameforMarksheet},
            function (e) {
                $.each(e, function (index, DataView) {
                    $('#trname').val(DataView.name);
                });
            }, "json");
}

/////////////////////////load trainee details to Academic Transcript//////////////////////////////

function acTranscriptTdetails_load(TraineeDetails) {

    //var insPlan = $('#trid').val();

    $.post("database/manageSessions.php",
            {session: 'get_traineeDetails', key: TraineeDetails},
            function (e) {
                $.each(e, function (index, DataView) {
                    $('#traineeName').val(DataView.name);
                    $('#batchNo').val(DataView.batch);
                    $('#dob').val(DataView.dob);
                    $('#nic').val(DataView.nic);
                    $('#traineeNamecertificate').val(DataView.fullname);
                });
            }, "json");
}

///////////////////load final resuls to Academic Transcript///////////////////////////

function acTranscriptFresults_load(finalResults) {
    // var selectbyID = $('#trid').val();
    // alert();
    $.post("database/manageSessions.php",
            {session: 'get_finalResults', key: finalResults},
            function (data) {

                var table_value = " ";

                $.each(data, function (index, table_row) {
                    table_value += "<tr><td class='courseTitle'>" + table_row.course_title + "</td>\n\
                                    <td class='totalMarks'>" + table_row.totalmarks + "</td>\n\
                                    <td class='Grade'>" + table_row.grade + "</td>\n\
                                    </tr>";
                });
                table_value += "";
                $('#tbl_finalResults tbody').html('').append(table_value);

//        $('.sessiondelete').click(function () {
                $.each(data, function (index, DataView1) {
                    $('#finalMarks').val(((parseInt(DataView1.final_marks) / 120)) * 100);
                });

            },
            "json");


}
