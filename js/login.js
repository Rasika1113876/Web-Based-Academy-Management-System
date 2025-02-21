/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function registeredTraineeView() {

    var cus_email = $('#exampleInputEmail1').val();
    var cus_passward = $('#exampleInputPassword1').val();
    //alert(cus_email);
    //alert(cus_passward);


//$.post("path",{dataset})
    $.post("database/login.php", {Email: cus_email, Passward: cus_passward},
            function (e) {
                tableLoad();
                //alert(e);
                //if(data="true"){
                //alert("successfully added");
                $.each(e, function (index, msgData) {
                    if (msgData.msgType === 1) {

                        alert(msgData.msg);
                    } else if (msgData.msgType === 2) {
                        alert(msgData.msg);
                        alert(msgData.qry);
                    }
                });


            }, "json");
}
//dataset example{key_1:cus_email,key_2:cus_passward}


function loginTraineeUpdate() {
    var c_id = $('#exampleInputId').val();
    var cus_email = $('#exampleInputEmail1').val();
    var cus_passward = $('#exampleInputPassword1').val();
    $.post("database/login_update.php", {c_id: c_id, Email: cus_email, Passward: cus_passward},
            function (e) {
                tableLoad();
            }, "json");
}

function tableLoad() {
    var tableData;
    $.post("database/loginView.php", {payment: 'select'}, function (tableData) {

        $.each(tableData, function (index, tblValue) {

            tableData += "<tr><td>" + tblValue.c_id + "</td><td>" + tblValue.client_name + "</td><td>" + tblValue.client_address + "</td><td>" + tblValue.log_time + "</td><td><button type='button' class='btn btn-primary edit_detail_tbl'value=" + tblValue.c_id + ">Edit</button><button class='btn delete_tbl' value=" + tblValue.c_id + "><i class='fa fa-trash'></i></button></td></tr>";
        });
        $('#system_users_table tbody').html('').append(tableData);
        $('.edit_detail_tbl').click(function () {
            // alert($(this).val());
            var c_id = $(this).val();
            $.post("database/edit_login_table.php", {city: 'select_by_Id', k_city_id: c_id},
                    function (Data) {
                        if (Data === undefined || Data.length === 0 || Data === null) {
                            alertify.error("Internal Error Occured");
                        } else {

                            $.each(Data, function (index, DataView) {

                                $('#exampleInputEmail1').val(DataView.client_name);
                                $('#exampleInputPassword1').val(DataView.client_address);
                                $('#exampleInputId').val(DataView.c_id);
                            });
                        }

                    }, "json");
        });
        ////

        $('.delete_tbl').click(function () {

            var id_delete = $(this).val();
            
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

                        $.post("database/login_delete.php", {id: id_delete},
                                function (e) {
                                    swal("Deleted!", "Your imaginary file has been deleted.", "success");
                                    tableLoad();
                                    userLogWriter("369", "delete");
                                }, "json");
                    });
        });
    }, "json");
}



