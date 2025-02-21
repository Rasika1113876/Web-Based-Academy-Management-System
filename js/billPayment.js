function paymentHIstoryLOad(selectbyID) {
    // var selectbyID = $('#trid').val();
    // alert();
    $.post("database/billpaymentsql.php",
            {billpayment: 'billpaymenthistory',
                key: selectbyID
            },
            function (data) {
                var table_value = " ";

                $.each(data, function (index, table_row) {
                    table_value += "<tr><td class='paidDate'>" + table_row.paid_date + "</td>\n\
                                    <td class='paidAmount'>" + table_row.paid_amount + "</td>\n\
                                    </tr>";
                });
                table_value += "";
                $('#tbl_paymentHistory tbody').html('').append(table_value);

//        $('.sessiondelete').click(function () {


            }, "json");
}

//////////////////////////////load installment plans///////////////////////////////////

function insPlanLoad() {

    var trinee_ID = $('#trid').val();
    var trainee_Name = $('#trname').val();
    var ins_Plan = $('#insPlanTypes').val();
    var selected_Date = $('#sDate').val();
    var cashier_ID = $('#cashierID').val();

    //alert(cus_email);
    //alert(cus_passward);


//$.post("path",{dataset})
    $.post("database/billpaymentsql.php", {billpayment: 'loadinsplan', tr_id: trinee_ID, tr_name: trainee_Name, ins_plan: ins_Plan, s_date: selected_Date, c_id: cashier_ID},
            function (e) {
//                requesttableLoad();
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

////////////////////////load total course fee according to trainee selected//////////////////////////////////////

function billPaymentTotFee_load(totalFee) {

//   var totalFee = $('#insplan').val();

    $.post("database/billpaymentsql.php",
            {billpayment: 'get_totalFee', key: totalFee},
            function (e) {
                $.each(e, function (index, DataView) {
                    $('#totalCourseFee').val(DataView.tot_course_fee);
                    $.post("database/billpaymentsql.php",
                            {billpayment: 'get_dueAmount', dueAmount: totalFee},
                            function (e) {
                                $.each(e, function (index, DataView1) {
                                    $('#dueAmount').val(parseInt($('#totalCourseFee').val()) - parseInt(DataView1.tot_paid));
                                });
                            }, "json");
                });




            }, "json");
}
////////////////////////load ins plan according to trainee selected//////////////////////////////////////

function billPaymentInsPlan_load(insPlan) {

    //var insPlan = $('#trid').val();

    $.post("database/billpaymentsql.php",
            {billpayment: 'get_insPlan', key: insPlan},
            function (e) {
                $.each(e, function (index, DataView) {
                    $('#insplan').val(DataView.ins_plan);
                });
            }, "json");

    $.post("database/billpaymentsql.php",
            {billpayment: 'get_insNo', insNo: insPlan},
            function (e) {
                $.each(e, function (index, DataView) {
                    $('#installmentNo').val(1 + parseInt(DataView.tot_ins));
                });
            }, "json");
}


///////////////////////////load & delete payment history view table////////////////////////////////////

function LoadPaymentHistory() {
    var tableData;
    $.post("database/billpaymentsql.php", {billpayment: 'paymentHIstorySelect'}, function (tableData) {

        $.each(tableData, function (index, tblValue) {

            tableData += "<tr><td>" + tblValue.trainee_id + "</td><td>" + tblValue.trainee_name + "</td><td>" + tblValue.tot_course_fee + "</td><td>" + tblValue.paid_ins + "</td><td>" + tblValue.paid_amount + "</td><td>" + tblValue.paid_date + "</td><td>" + tblValue.due_amount + "</td></tr>";
        });
        $('#tbl_viewPaymentHistory tbody').html('').append(tableData);

    }, "json");
}

///////////////////////search payment history of perticular trainee//////////////////////////


function LoadPaymentHistoryID() {
    //alert('gfhfhf');//To check the viewAttendence_load function

    var selectHistorybyID = $('#searchID').val();

    $.post("database/billpaymentsql.php",
            {billpayment: 'paymentHIstorySelectByID',
                key: selectHistorybyID
            },
            function (data) {
                var table_value = " ";

                $.each(data, function (index, table_row) {
                    table_value += "<tr><td class='tid'>" + table_row.trainee_id + "</td>\n\
                                    <td class='tname'>" + table_row.trainee_name + "</td>\n\
                                    <td class='tcfee'>" + table_row.tot_course_fee + "</td>\n\
                                    <td class='noins'>" + table_row.paid_ins + "</td>\n\
                                    <td class='pamount'>" + table_row.paid_amount + "</td>\n\
                                    <td class='pins'>" + table_row.paid_date + "</td>\n\
                                    <td class='damount'>" + table_row.due_amount + "</td>\
                                    </tr>";

                });
                table_value += "";
                $('#tbl_viewPaymentHistory tbody').html('').append(table_value);

            }, "json");
}

///////////////////////////load total income/////////////////////////////////////////////

function LoadTotalIncome() {
    var tableData;
    $.post("database/billpaymentsql.php", {billpayment: 'getTotalIncome'}, function (tableData) {

        $.each(tableData, function (index, tblValue) {

            tableData += "<tr><td>" + tblValue.paid_date + "</td><td>" + tblValue.tot_Date + "</td></tr>";
        });
        $('#tbl_totalIncome tbody').html('').append(tableData);

    }, "json");
}

//////////////////////////load paiment details to trainee dashboard///////////////////////////

function  LoadPaymentHistorytoTrainee() {
    var tableData;
    $.post("database/billpaymentsql.php", {billpayment: 'paymentHistorytoTrainee'}, function (tableData) {

        $.each(tableData, function (index, tblValue) {

            tableData += "<tr><td>" + tblValue.trainee_id + "</td><td>" + tblValue.trainee_name + "</td><td>" + tblValue.tot_course_fee + "</td><td>" + tblValue.paid_ins + "</td><td>" + tblValue.paid_amount + "</td><td>" + tblValue.paid_date + "</td><td>" + tblValue.due_amount + "</td></tr>";
        });
        $('#tbl_viewPaymentHistory tbody').html('').append(tableData);

    }, "json");
}

////////////////////////send payment details to DB///////////////////////////////////////////////////

function addPaymentDetails() {
    var trainee_id = $('#trid').val();
    //var trainee_name = $('#trname').val();
    var trainee_name = $("#trname option:selected").text();
    var paid_amount = $('#paidAmount').val();
    var ins_no = $('#installmentNo').val();
    var due_amount = (parseInt($('#dueAmount').val())) - (parseInt($('#paidAmount').val()))
    var paid_date = $('#paydate').val();
    //alert(cus_email);
    //alert(cus_passward);


//$.post("path",{dataset})
    $.post("database/billpaymentsql.php",
            {billpayment: 'sendPaymentDetails',
                trainee_id: trainee_id,
                trainee_name: trainee_name,
                paid_amount: paid_amount,
                ins_no: ins_no,
                due_amount: due_amount,
                paid_date: paid_date,
            },
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

////////////////////get Details to bill//////////////////////////////////////////////////
function getDetalsToBill(billTID) {
    $.post("database/billpaymentsql.php",
            {billpayment: 'printBill', key: billTID},
            function (e) {
                $.each(e, function (index, DataView) {
                    $('#t_nic').val(DataView.nic);
                    $('#t_name').val(DataView.fullname);

                });
            }, "json");
}

////////////////////////TO CLEAR FORM DATA///////////////////////////

function ClearPaymentDetails() {
//    $('#trid').val('');
//    $('#trname').val('');
//    $('#paydate').val('');                                     
//    $('#insplan').val('');
    $('#totalCourseFee').val('');
    $('#dueAmount').val('');
    $('#installmentNo').val('');
    $('#paidAmount').val('');
    $('#cash').val('');
    $('#balance').val('');
}

/////////////////////////view payment details to send reminders//////////////////////////

function LoadPaymentDetais() {
    //alert('gfhfhf');//To check the viewAttendence_load function

//    var selectHistorybyID = $('#searchID').val();

    $.post("database/billpaymentsql.php",
            {billpayment: 'paymentDetailsToReminders',
                // key: selectHistorybyID
            },
            function (data) {
                var table_value = " ";

                $.each(data, function (index, table_row) {
                    table_value += "<tr><td class='tid'>" + table_row.trainee_id + "</td>\n\
                                    <td class='tname'>" + table_row.trainee_name + "</td>\n\
                                    <td class='tcfee'>" + table_row.tot_course_fee + "</td>\n\
                                    <td class='numIns'>" + table_row.ins_plan + "</td>\n\
                                    <td class='noins'>" + table_row.tot_paid_ins + "</td>\n\
                                    <td class='pamount'>" + table_row.tot_paid_amount + "</td>\n\
                                    <td class='pins'>" + table_row.paid_date + "</td>\n\
                                    <td class='damount'>" + table_row.due_amount + "</td>\n\
                                    <td><button type='button' class='btn btn-primary loadReminder' value=" + table_row.trainee_id + ">Reminder</button></td>\n\
                                    </tr>";

                });
                table_value += "";
                $('#tbl_viewPaymentDetailstbl tbody').html('').append(table_value);

                $('.loadReminder').click(function () {
                    var temp = parseInt($(this).closest('tr').find('td').eq(3).html()) - parseInt($(this).closest('tr').find('td').eq(4).html());
                    var temp = parseInt($(this).closest('tr').find('td').eq(7).html()) / temp;
                    ////////////////////".closet means the row related to the button click////////////////////////////////////////////

                    var reminder_id = $(this).val();
                    // alert("aaa");
                    $('#exampleModalReminders').modal('show');
                    $('#exampleModalReminders').on('shown.bs.modal', function (e) {

                        $.post("database/billpaymentsql.php",
                                {billpayment: 'select__reminder_by_Id', reminderID: reminder_id},
                                function (e) {
                                    $.each(e, function (index, table_row) {
                                        $('#trid').val(table_row.trainee_id);
                                        $('#traineeName').val(table_row.trainee_name);
                                        $('#nextAmount').val(temp);
                                        // $('#nextDate').val(table_row.trainee_name);
                                    });


                                }, "json");
                    });
                });



            }, "json");
}

///////////////////load reminder////////////////////////////////////////////////////////

function reminderLoad() {

    var TRID = $('#trid').val();
    var TRNM = $('#traineeName').val();
    var NXTAMOUNT = $('#nextAmount').val();
    var NXTDATE = $('#nextDate').val();
    var CASHID = $('#cashierID').val();

    //alert(cus_email);
    //alert(cus_passward);


//$.post("path",{dataset})
    $.post("database/billpaymentsql.php", {billpayment: 'loadReminder', trid: TRID, trnm: TRNM, nxtamount: NXTAMOUNT, nxtdate: NXTDATE, cashid: CASHID},
            function (e) {
//                requesttableLoad();
                //alert(e);
                //if(data="true"){
                //alert("successfully added");
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

//////////////////////////load reminders to trainee's dashboard////////////////////////////////////////

function reminderLoadToTrainee() {
    var tableData;
    $.post("database/billpaymentsql.php", {billpayment: 'loadRemindertoDashboard'}, function (tableData) {

        $.each(tableData, function (index, tblValue) {

            
                tableData += "<tr ><td>" + tblValue.reminder_id + "</td><td>" + tblValue.nxtInsAmount + "</td><td>" + tblValue.nxtInsDate + "</td><td>" + tblValue.cashier_id + "</td></tr>";
            
//                tableData += "<tr><td>" + tblValue.reminder_id + "</td><td>" + tblValue.nxtInsAmount + "</td><td>" + tblValue.nxtInsDate + "</td><td>" + tblValue.cashier_id + "</td></tr>";
            
        });
        $('#view_reminders_tbl tbody').html('').append(tableData);
    }, "json");
}
