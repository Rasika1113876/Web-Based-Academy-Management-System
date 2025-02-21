function TraineeLoad() {
    var tableData;
    //alert('aaa');
    $.post("database/regiView.php", {key: 'traineeselect'}, function (tableData) {

        $.each(tableData, function (index, tblValue) {

            tableData += "<tr><td>" + tblValue.id + "</td><td>" + tblValue.fullname + "</td><td>" + tblValue.nic + "</td><td>" + tblValue.telephone_no + "</td><td>" + tblValue.address1 + "</td><td><button type='button' class='btn btn-light view_unRegTrainee'  value=" + tblValue.id + "><img src='svg/Eye.svg' width='30' height='30'>View Details</button></td></tr>";

        });
        $('#tbl_reg_user tbody').html('').append(tableData);

        $('.view_unRegTrainee').click(function () {

            var c_id = $(this).val();
            //alert($(this).val());
            $('#viewusrModal').modal('show');
            $('#viewusrModal').on('shown.bs.modal', function (e) {

            });
            $.post("database/regiViewModel.php",
                    {city: 'select_by_Id', k_city_id: c_id},
                    function (e) {
                        $.each(e, function (index, table_row) {
                            $('#u_id').val(table_row.id);
                            $('#u_fnm').val(table_row.fullname);
                            $('#u_ttl').val(table_row.title);
                            $('#u_nm').val(table_row.name);
                            $('#u_add1').val(table_row.address1);
                            $('#u_add2').val(table_row.address2);
                            $('#u_add3').val(table_row.address3);
                            $('#u_nic').val(table_row.nic);
                            $('#u_dob').val(table_row.dob);
                            $('#u_tp').val(table_row.telephone_no);
                            $('#u_email').val(table_row.email);
                        });


                    }, "json");

//                  

        });

        $('#btn_register').click(function () {
            //alert('hi suppliers');
            var ac_id = $('#u_id').val();
            var ac_fnm = $('#u_fnm').val();
            var ac_ttl = $('#u_ttl').val();
            var ac_nm = $('#u_nm').val();
            var ac_add1 = $('#u_add1').val();
            var ac_add2 = $('#u_add2').val();
            var ac_add3 = $('#u_add3').val();
            var batch_nm = $('#batch_nm').val();
            var ac_nic = $('#u_nic').val();
            var ac_dob = $('#u_dob').val();
            var ac_tp = $('#u_tp').val();
            var ac_email = $('#u_email').val();



            $.post("database/regiView.php", {key: 'userRegister', Acid: ac_id, Acfnm: ac_fnm, Acttl: ac_ttl, Acnm: ac_nm, Acadd1: ac_add1, Acadd2: ac_add2, Acadd3: ac_add3, Batchnm: batch_nm, Acnic: ac_nic, Acdob: ac_dob, Actp: ac_tp, Acemail: ac_email,
            }, "json");
        });


    }, "json");
}

function TrainerLoad() {
    var tableData;
    //alert('aaa');
    $.post("database/regiView.php", {key: 'trainerselect'}, function (tableData) {

        $.each(tableData, function (index, tblValue) {

            tableData += "<tr><td>" + tblValue.id + "</td><td>" + tblValue.fullname + "</td><td>" + tblValue.nic + "</td><td>" + tblValue.telephone_no + "</td><td>" + tblValue.address1 + "</td><td><button type='button' class='btn btn-light view_unRegTrainee'  value=" + tblValue.id + "><img src='svg/Eye.svg' width='30' height='30'>View Details</button></td></tr>";

        });
        $('#tbl_reg_user tbody').html('').append(tableData);

        $('.view_unRegTrainee').click(function () {

            var c_id = $(this).val();
            //alert($(this).val());
            $('#viewusrModal').modal('show');
            $('#viewusrModal').on('shown.bs.modal', function (e) {

            });
            $.post("database/regiViewModel.php",
                    {city: 'select_by_Id', k_city_id: c_id},
                    function (e) {
                        $.each(e, function (index, table_row) {
                            $('#u_id').val(table_row.id);
                            $('#u_fnm').val(table_row.fullname);
                            $('#u_ttl').val(table_row.title);
                            $('#u_nm').val(table_row.name);
                            $('#u_add1').val(table_row.address1);
                            $('#u_add2').val(table_row.address2);
                            $('#u_add3').val(table_row.address3);
                            $('#u_nic').val(table_row.nic);
                            $('#u_dob').val(table_row.dob);
                            $('#u_tp').val(table_row.telephone_no);
                            $('#u_email').val(table_row.email);
                        });


                    }, "json");

//                  

        });

        $('#btn_register').click(function () {
            //alert('hi suppliers');
            var ac_id = $('#u_id').val();
            var ac_fnm = $('#u_fnm').val();
            var ac_ttl = $('#u_ttl').val();
            var ac_nm = $('#u_nm').val();
            var ac_add1 = $('#u_add1').val();
            var ac_add2 = $('#u_add2').val();
            var ac_add3 = $('#u_add3').val();
            var ac_nic = $('#u_nic').val();
            var ac_dob = $('#u_dob').val();
            var ac_tp = $('#u_tp').val();
            var ac_email = $('#u_email').val();



            $.post("database/regiView.php", {key: 'userRegister', Acid: ac_id, Acfnm: ac_fnm, Acttl: ac_ttl, Acnm: ac_nm, Acadd1: ac_add1, Acadd2: ac_add2, Acadd3: ac_add3, Acnic: ac_nic, Acdob: ac_dob, Actp: ac_tp, Acemail: ac_email,
            }, "json");
        });


    }, "json");
}

function CashierLoad() {
    var tableData;
    //alert('aaa');
    $.post("database/regiView.php", {key: 'cashierselect'}, function (tableData) {

        $.each(tableData, function (index, tblValue) {

            tableData += "<tr><td>" + tblValue.id + "</td><td>" + tblValue.fullname + "</td><td>" + tblValue.nic + "</td><td>" + tblValue.telephone_no + "</td><td>" + tblValue.address1 + "</td><td><button type='button' class='btn btn-light view_unRegTrainee'  value=" + tblValue.id + "><img src='svg/Eye.svg' width='30' height='30'>View Details</button></td></tr>";

        });
        $('#tbl_reg_user tbody').html('').append(tableData);

        $('.view_unRegTrainee').click(function () {

            var c_id = $(this).val();
            //alert($(this).val());
            $('#viewusrModal').modal('show');
            $('#viewusrModal').on('shown.bs.modal', function (e) {

            });
            $.post("database/regiViewModel.php",
                    {city: 'select_by_Id', k_city_id: c_id},
                    function (e) {
                        $.each(e, function (index, table_row) {
                            $('#u_id').val(table_row.id);
                            $('#u_fnm').val(table_row.fullname);
                            $('#u_ttl').val(table_row.title);
                            $('#u_nm').val(table_row.name);
                            $('#u_add1').val(table_row.address1);
                            $('#u_add2').val(table_row.address2);
                            $('#u_add3').val(table_row.address3);
                            $('#u_nic').val(table_row.nic);
                            $('#u_dob').val(table_row.dob);
                            $('#u_tp').val(table_row.telephone_no);
                            $('#u_email').val(table_row.email);
                        });


                    }, "json");

//                  

        });

        $('#btn_register').click(function () {
            //alert('hi suppliers');
            var ac_id = $('#u_id').val();
            var ac_fnm = $('#u_fnm').val();
            var ac_ttl = $('#u_ttl').val();
            var ac_nm = $('#u_nm').val();
            var ac_add1 = $('#u_add1').val();
            var ac_add2 = $('#u_add2').val();
            var ac_add3 = $('#u_add3').val();
            var ac_nic = $('#u_nic').val();
            var ac_dob = $('#u_dob').val();
            var ac_tp = $('#u_tp').val();
            var ac_email = $('#u_email').val();



            $.post("database/regiView.php", {key: 'userRegister', Acid: ac_id, Acfnm: ac_fnm, Acttl: ac_ttl, Acnm: ac_nm, Acadd1: ac_add1, Acadd2: ac_add2, Acadd3: ac_add3, Acnic: ac_nic, Acdob: ac_dob, Actp: ac_tp, Acemail: ac_email,
            }, "json");
        });


    }, "json");
}

//TO SAVE UNREGISTERED USERS DETAILS IN DATABASE TABLE
$('#btn_register').click(function () {
    //alert('hi suppliers');
    var ac_id = $('#u_id').val();
    var ac_fnm = $('#u_fnm').val();
    var ac_ttl = $('#u_ttl').val();
    var ac_nm = $('#u_nm').val();
    var ac_add1 = $('#u_add1').val();
    var ac_add2 = $('#u_add2').val();
    var ac_add3 = $('#u_add3').val();
    var ac_nic = $('#u_nic').val();
    var ac_dob = $('#u_dob').val();
    var ac_tp = $('#u_tp').val();
    var ac_email = $('#u_email').val();



    $.post("database/regiView.php", {key: 'userRegister', Acid: ac_id, Acfnm: ac_fnm, Acttl: ac_ttl, Acnm: ac_nm, Acadd1: ac_add1, Acadd2: ac_add2, Acadd3: ac_add3, Acnic: ac_nic, Acdob: ac_dob, Actp: ac_tp, Acemail: ac_email,
    }, "json");
});
