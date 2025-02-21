/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function getCityCombo() {
    var comCity = '';
    $.post("database/comboxsql.php", {combo: 'select'},
            function (result) {
                $.each(result, function (index, combodata) {

                    comCity += ' <option value="' + combodata.city + '">' + combodata.city + '</option>';




                });


                $('#combox_city').html('').append(comCity);



            }, "json");
}

//////////////////////////bilpayment.php////////////////////to get tid &tname/////////////////////////

function  billPaymentTname_load(selected, callBack) {
    //alert('ok1');
    var comboData = '<option value="0">Select trainee name</option>';
    $.post("database/comboxsql.php", {request: 'select_tName'}, function (e) {
        if (e === undefined || e.length === 0 || e === null) {
            comboData += '<option value="0"> -- No Data Found -- </option>';
            $('#trname').html('').append(comboData);
            chosenRefresh();
        } else {
            $.each(e, function (index, qData) {
                if (selected !== undefined || e !== null || e.length !== 0) {
                    if (parseInt(selected) === parseInt(qData.id)) {
                        comboData += '<option value="' + qData.id + '" selected>' + qData.name + '</option>';
                    } else {
                        comboData += '<option value="' + qData.id + '">' + qData.name + '</option>';
                    }
                } else {
                    comboData += '<option value="' + qData.id + '">' + qData.name + '</option>';
                }
            });
            $('#trname').html('').append(comboData);
            chosenRefresh();
        }
        if (callBack !== undefined) {
            if (typeof callBack === 'function') {
                callBack();
            }
        }
    }, "json");
}

function  billPaymentTID_load(selected, callBack) {
    //alert('ok2');
    var comboData = '<option value="0">Select User type</option>';
    $.post("database/comboxsql.php", {request: 'select_tID'}, function (e) {
        if (e === undefined || e.length === 0 || e === null) {
            comboData += '<option value="0"> -- No Data Found -- </option>';
            $('#trid').html('').append(comboData);
            chosenRefresh();
        } else {
            $.each(e, function (index, qData) {
                if (selected !== undefined || e !== null || e.length !== 0) {
                    if (parseInt(selected) === parseInt(qData.id)) {
                        comboData += '<option value="' + qData.id + '" selected>' + qData.id + '</option>';
                    } else {
                        comboData += '<option value="' + qData.id + '">' + qData.id + '</option>';
                    }
                } else {
                    comboData += '<option value="' + qData.id + '">' + qData.id + '</option>';
                }
            });
            $('#trid').html('').append(comboData);
            chosenRefresh();
        }
        if (callBack !== undefined) {
            if (typeof callBack === 'function') {
                callBack();
            }
        }
    }, "json");
}

/////////////////////////////////////////MODIFICATION SECTION///////////////////////////////////////////

//////////////////////////////load user type to combobox///////////////////////////////////////////

function  usertype_load(selected, callBack) {
    //alert('ok2');
    var comboData = '<option value="0">Select User type</option>';
    $.post("database/comboxsql.php", {request: 'select_Utype'}, function (e) {
        if (e === undefined || e.length === 0 || e === null) {
            comboData += '<option value="0"> -- No Data Found -- </option>';
            $('#uType').html('').append(comboData);
            chosenRefresh();
        } else {
            $.each(e, function (index, qData) {
                if (selected !== undefined || e !== null || e.length !== 0) {
                    if (parseInt(selected) === parseInt(qData.type)) {
                        comboData += '<option value="' + qData.type + '" selected>' + qData.type + '</option>';
                    } else {
                        comboData += '<option value="' + qData.type + '">' + qData.type + '</option>';
                    }
                } else {
                    comboData += '<option value="' + qData.type + '">' + qData.type + '</option>';
                }
            });
            $('#uType').html('').append(comboData);
            chosenRefresh();
        }
        if (callBack !== undefined) {
            if (typeof callBack === 'function') {
                callBack();
            }
        }
    }, "json");
}

/////////////////////////////////get user count according to user type//////////////////////////////

function Change_count(total) {
    $.post("database/comboxsql.php",
            {request: 'getcount', key: total},
            function (e) {
                $.each(e, function (index, DataView) {
                    $('#count').val(DataView.total);
                });
            }, "json");
}

////////////////////////////////load user details according to user type////////////////////////////

function userdata() {

    var userDetails = $('#uType').val();
    $.post("database/comboxsql.php", {request: 'getData', key: userDetails}, function (tableData) {

        $.each(tableData, function (index, tblValue) {

            tableData += "<tr><td>" + tblValue.id + "</td><td>" + tblValue.fullname + "</td><td>" + tblValue.nic + "</td><td>" + tblValue.telephone_no + "</td><td>" + tblValue.address1 + "</td></tr>";

        });
        $('#userDetails tbody').html('').append(tableData);

    }, "json");
}

function chosenRefresh() {
    $("select").trigger("chosen:updated");
}