<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WELCOME LAKSHI SALON &ACADEMY</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <!--                <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->
        <!--        <link href="css/chosen-custom.css" rel="stylesheet" type="text/css"/>
                <link href="css/chosen-custom.css" rel="stylesheet" type="text/css"/>-->
        <link href="css/hover.css" rel="stylesheet" type="text/css"/>
        <link href="css/sweetalert.css" rel="stylesheet" type="text/css"/>
        <link href="css/component-chosen.css" rel="stylesheet" type="text/css"/>
    </head>
    <body data-spy="scroll" data-target=".leftnavbar" data-offset="50">
        <?php require_once './include/navbar_cashier.php'; ?>
        <div class="row">

            <!--begin of the left coloumn-->
            <div class="col-md-1" id="leftcol" >

            </div>
            <!--end of the left coloumn-->

            <!--begin of the middle coloumn-->
            <div class="col-md-10" id="middlecol" >

                <!--begin of the content--> 
                <div class="col-md-12" id="contentBar">
                    <div class="row" style="height: 120px;"></div>
                   
                    <div class="container">
                        <form class="row" >
                            <div class="form-group col-md-2">
                                <label for="trid" style="color: white">Trainee ID:</label>
                                <div>                                        
                                    <select class="form-control-chosen " id="trid">
                                    </select>                                                                                        
                                </div>                              
                            </div>
                            <div class="form-group col-md-3">
                                <label for="trname" style="color: white">Trainee Name:</label>
<!--                                <input type="text" class="form-control" id="trname" name="trname" disabled="">-->
                                <div>                                        
                                    <select class="form-control-chosen" id="trname">
                                    </select>                                                                                        
                                </div>                                  
                            </div>

                            <div class="form-group col-md-3">
                                <label for="paydate" style="color: white">Date:</label>
                                <input type="text" class="form-control" id="paydate" name="paydate" value='<?php echo date("Y-m-d") ?>'>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="insplan" style="color: white">Installment Plan:</label>
                                <input type="text" class="form-control" id="insplan" name="ins_plan" disabled="">
                            </div>

                            <div> 
                                <button type="button" class="btn btn-primary btnGo" id="btn_go" style="width: 80px; height: 40px; margin-top: 30px;"><img src='svg/si-glyph-hand1.svg' width='30' height='30'>&nbsp;GO</button>
                            </div>
                        </form>
                    </div>
                   

                    <div class="row" style="height: 20px;"></div>

                   
                    <div class="col-md-12" id="income_section" style="background-color: #c7ddef;">

                        <!--begin of first row-->
                        <div class="row" style="" >

                            <div class="col-md-6">
                                <!--begin of payment history tbl-->
                                <div class="scrollable" style="overflow-y: auto;  margin-top: 10px" >
                                    <!--                                    <fieldset style="margin-left: 30px; margin-bottom: 10px; width:88%;">-->
                                    <legend style="color: black;font-size: 18px;">Payment History</legend>
                                    <table class="table table-bordered table-striped table-hover datable" id="tbl_paymentHistory" style=" color: white; background-color: #444;">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Paid Amount</th>                                    
                                            </tr>
                                        </thead>
                                        <tbody >
                                        </tbody>                                                             
                                    </table>                                    
                                    <!--</fieldset>-->
                                </div>                            
                                <!--end of payment history tbl-->

                                
                                <div class="row" style="margin-top: 14px;">                                   
                                </div>
                                
                            </div> 

                            <div class="modal fade" id="ReciptModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content" style="background-color: #c7ddef; width: 600px" >
                                        <div class="modal-header">

                                            <div class="col-md-12" align="center" style="background-color:#999; height: 300px">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h2> <img src="images/logo.png" alt="" id="logo" style=" height: 80px; margin-left: 20px;"/><font face="Broadway">LAKSHI</font></h2>
                                                <h3>HAIR & BEAUTY ACADEMY</h3>
                                                <P>Head Office - 38 1/1,Church Road,Ratnapura</P>
                                                <p>Branches - 2nd Floor,Pizza Hut Building,Ratnapura</p>
                                                <p>Tel:071-4310800/0718171178</p>
                                                <p>E-mail:lakshisalon@yahoo.com</p>                                      
                                            </div>                                       

                                        </div>

                                        <div class="modal-body">
                                            <fieldset style="margin-left: 30px; margin-bottom: 10px; width:88%; color: black">

                                                <form class="row" >
                                                    <div class="form-group col-md-4" style="margin-left: 70px">
                                                        <label for="insplan" style="color: black">Date:</label>
                                                        <input type="text" class="form-control" id="insplan" name="ins_plan" value='<?php echo date("Y-m-d") ?>'>
                                                    </div>
                                                    <div class="form-group col-md-4" style="margin-left: 100px">
                                                        <label for="insplan" style="color: black">NIC. Number:</label>
                                                        <input type="text" class="form-control" id="t_nic" name="ins_plan">
                                                    </div>
                                                </form>

                                                <form>
                                                    <div class="form-group col-md-8" style="margin-left: 50px">
                                                        <label for="insplan" style="color: black">Received with thanks from:</label>
                                                        <input type="text" class="form-control" id="t_name" name="ins_plan">
                                                    </div>
                                                    <div class="form-group col-md-8" style="margin-left: 50px">
                                                        <label for="insplan" style="color: black">A sum of rupees (LKR):</label>
                                                        <input type="text" class="form-control" id="p_amount" name="ins_plan">
                                                    </div>
                                                    <div class="form-group col-md-8" style="margin-left: 50px">
                                                        <label for="insplan" style="color: black">Being payment for:</label>
                                                        <input type="text" class="form-control" id="insplan" name="ins_plan" value="DIPLOMA IN BEAUTY CULTURE & HAIR DRESSING">
                                                    </div>                            
                                                </form>

                                                <br/>
                                                <form class="row" >
                                                    <div class="form-group col-md-3" style="margin-left: 70px">
                                                        <input type="text" class="form-control" id="insplan" name="ins_plan" value=" <?php echo ($_SESSION['user_id']); ?>">
                                                        <label for="insplan" style="color: black">Authorized Signature:</label>
                                                    </div>                        
                                                </form>

                                                <form class="row" >
                                                    <div class="form-group col-md-4" style="margin-left: 70px">                                                                                                               
                                                        <div>                                        
                                                            <select class="form-control " id="paymentMode" required>
                                                                <option value="">Enter Payment Mode </option>
                                                                <option value="Credit Card">Credit Card</option>
                                                                <option value="Cash">Cash</option>
                                                                <option value="Cheque">Cheque</option>    
                                                                <option value="Other">Other</option> 
                                                            </select>                                                                                        
                                                        </div>
                                                        <label for="paymentMode" style="color: black">Payment Mode:</label>
                                                    </div>
                                                    <div class="form-group col-md-4" style="margin-left: 100px">                                                                      
                                                        <div>                                        
                                                            <select class="form-control " id="paymentMode" required>
                                                                <option value="">Enter Payment Type </option>
                                                                <option value="Registration">Registration Fee</option>
                                                                <option value="Course Fee">Course Fee</option>                                  
                                                                <option value="Other">Other</option> 
                                                            </select>                                                                                        
                                                        </div>
                                                        <label for="insplan" style="color: black">Payment Type:</label>
                                                    </div>
                                                </form>

                                            </fieldset>
                                        </div>
                                        <div class="modal-footer" style="background-color:#999";>                                           
                                            <button type="button" class="btn btn-primary" id="printBill">Print</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="col-md-6" style="" >

                                <div class="row" style="margin-top: 10px;">
                                    <form class="row">
                                        <!--<fieldset style="margin-left: 30px; margin-bottom: 10px;">-->
                                        <legend style="color: black; font-size: 18px;">Payment Details</legend>
                                        <div class="row col-md-12" >
                                            <div class="col-md-2"></div>
                                            <div class="form-group col-md-6">
                                                <label for="courseFee" style="color: black">Total Course Fee (Rs):</label>                                    
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control" id="totalCourseFee"  placeholder="" disabled="" >
                                            </div>
                                        </div>
                                        <div class="row col-md-12">
                                            <div class="col-md-2"></div>
                                            <div class="form-group col-md-6">
                                                <label for="dueAmount" style="color: black">Due Amount (Rs):</label>                                    
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control" id="dueAmount" value="0.00" placeholder="" disabled="" >
                                            </div>
                                        </div>
                                        <div class="row col-md-12">
                                            <div class="col-md-2"></div>
                                            <div class="form-group col-md-6">
                                                <label for="installmentNo" style="color: black">Installment No:</label>                                     
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control" id="installmentNo"  value="0" placeholder="" disabled="" >
                                            </div>
                                        </div>
                                        <div class="row col-md-12">
                                            <div class="col-md-2"></div>
                                            <div class="form-group col-md-6">
                                                <label for="paidAmount" style="color: black;">Payment (Rs):</label>                                     
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control" id="paidAmount"  value="0.00" placeholder="" onkeyup="sync()">
                                            </div>
                                        </div>                                       
                                        <div class="row col-md-12">
                                            <div class="col-md-2"></div>
                                            <div class="form-group col-md-6">
                                                <label for="cash" style="color: black">Cash (Rs):</label>                                    
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control" id="cash" value="0.00" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row col-md-12">
                                            <div class="col-md-2"></div>
                                            <div class="form-group col-md-6">
                                                <label for="balance" style="color: black">Balance (Rs):</label>                                    
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control" id="balance"  value="0.00" placeholder="" disabled="" >
                                            </div>
                                        </div>
                                        <div class="row col-md-12"> 
<!--                                            <button type="button" class="btn btn-primary " id="btn_calNewDueAmount" style="font-size:13px;"><img src='svg/multifly.svg' width='20' height='20'>&nbsp;CALCULATE NEW DUE AMOUNT</button>-->
                                            <button type="button" class="btn btn-primary " id="btn_calBalance" style="font-size:13px; margin-left: 5px;"><img src='svg/add.svg' width='20' height='20'>&nbsp;CALCULATE BALANCE</button>
                                        </div>
                                        <!--</fieldset>-->
                                    </form>
                                </div>

                            </div>
                           

                        </div>
                        <!--end of first row-->

                        <!--begin of second row-->
                        <div class="row" style="height: 100px; background-color: #c7ddef; " >
                            <div class="col-md-6" style="background-color: #c7ddef;">
                                <div class="row">
                                </div>
                            </div>                              
                            <div class="col-md-2" style="margin-top: 10px;">
                                <button type="button" class="btn btn-primary " id="btn_savePaymentDetails" style="margin-left:0px; width: 113px;" ><img src="svg/save.svg" width="30" height="30">&nbsp;SAVE </button>
                            </div>
                            <div class="col-md-2"style="margin-top: 10px;">
                                <button type="button" class="btn btn-danger " id="btn_clr" style="margin-left: 0px; width: 113px;"><img src='svg/si-glyph-delete1.svg' width='30' height='30'>&nbsp;CLEAR </button>
                            </div>
                            <div class="col-md-2"style="margin-top: 10px;">
                                <button type="button" class="btn btn-primary " id="btn_printriceipt" style="margin-left: 0px; width: 113px;"><img src='svg/Print01.svg' width='35' height='30'>&nbsp;PRINT RECEIPT </button>
                            </div>                           
                        </div>
                        <!--end of second row-->

                    </div>
                    

                </div>
                <!--end of the content--> 

            </div>
            <!--end of the middle coloumn-->

            <!--begin of the right coloumn-->
            <div class="col-md-1" id="rightcol">
                <a href=""></a>
            </div>
            <!--end of the right coloumn-->
        </div>

    </body>

    <script src="js/jQueryjs.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/sweetalert.js" type="text/javascript"></script>
    <script src="js/chosen.jquery.js" type="text/javascript"></script>
    <script src="js/comboxjs.js" type="text/javascript"></script>
    <script src="js/billPayment.js" type="text/javascript"></script> 
    <script src="js/Session.js" type="text/javascript"></script>
    <script type =text/javascript>

                                                    $('#btn_printriceipt').click(function () {
                                                        // alert("aaa");
                                                        $('#ReciptModal').modal('show');
                                                        $('#ReciptModal').on('shown.bs.modal', function (e) {
                                                        });
                                                    });

                                                    $(window).on('load', function () {
                                                        // alert("window load");
                                                        billPaymentTname_load();     //......To load Trainee Names(trname)to combo box 
                                                        billPaymentTID_load();       //......To load Trainee ID(trid)to combo box
                                                        //billPaymentInsPlan_load();       //......To load Installment Plan(insplan)to combo box

                                                    });
                                                    $('.form-control-chosen').chosen({
                                                        allow_single_deselect: true,
                                                        width: '100%'
                                                    });
                                                    //......To get trname according to selected trid
                                                    $('#trname').change(function (e) {
                                                        //alert("aaa");
                                                        billPaymentTID_load($(this).val());
                                                    });

                                                    //.....To get trname,InsPlan & TOtFee and load paymentHistory tbl according to selected trid
                                                    $('#trid').change(function (e) {
                                                        //billPaymentTID_load($(this).val(), billPaymentTname_load($(this).val()));

                                                        billPaymentTname_load($(this).val());
                                                        billPaymentInsPlan_load($(this).val());
                                                        paymentHIstoryLOad($(this).val());
                                                        billPaymentTotFee_load($(this).val());
                                                        getDetalsToBill($(this).val());
                                                    });

//         $('select').chosen({width: "100%"});
//         

                                                    ///calculate balance
                                                    $('#btn_calBalance').click(function () {
                                                        var payment = $('#paidAmount').val();
                                                        var cash = $('#cash').val();
                                                        var balance = parseFloat(cash) - parseFloat(payment);
                                                        var Balance = balance.toFixed(2);
                                                        $('#balance').val(Balance);
                                                    });

                                                    ///calculate NewDueAmount
                                                    $('#btn_calNewDueAmount').click(function () {
                                                        var TOtalCourseFee = $('#totalCourseFee').val();
                                                        var payment = $('#paidAmount').val();
                                                        var NewDueAmount = parseFloat(TOtalCourseFee) - parseFloat(payment);
                                                        var DueAmount = NewDueAmount.toFixed(2);
                                                        $('#newDueAmount').val(DueAmount);
                                                    });
//
//                                                    $('#btn_savePaymentDetails').click(function () {
////alert('aaaaa');
//                                                        addPaymentDetails();
//                                                    });


/////////////////////////////////get paid amount to bill//////////////////////////
                                                    function sync()
                                                    {
                                                        var n1 = document.getElementById('paidAmount');
                                                        var n2 = document.getElementById('p_amount');
                                                        n2.value = n1.value;
                                                    }

                                                    $('#printBill').click(function () {
                                                        window.print();
                                                    });

                                                    /////////////////////////////check empty fields//////////////////////////////////////

                                                    $('#btn_savePaymentDetails').click(function () {
                                                        //alert("OK");
                                                        if ((($('#trid').val()) === "Select") || (($('#trname').val()) === "Select")
                                                                || (($('#paydate').val()) === "") || (($('#insplan').val()) === "")
                                                                || (($('#totalCourseFee').val()) === "") || (($('#dueAmount').val()) === "")
                                                                || (($('#installmentNo').val()) === "") || (($('#paidAmount').val()) === "")
                                                                || (($('#cash').val()) === "") || (($('#balance').val()) === "")
                                                               )//check empty fields
                                                        {
                                                            swal("Failed to Save ", "Please Enter Empty Fields", "error");
                                                        } else {
                                                            //swal start
                                                            swal({
                                                                title: "Are you sure?",
                                                                text: "You want to save this record!",
                                                                type: "warning",
                                                                showCancelButton: true,
                                                                confirmButtonClass: "btn-warning",
                                                                confirmButtonText: "Yes, save it!",
                                                                cancelButtonText: "No, cancel !",
                                                                closeOnConfirm: false,
                                                                closeOnCancel: false
                                                            },
                                                                    function (isConfirm) {
                                                                        if (isConfirm) {
                                                                            swal("Saved!", "Your record has been saved.", "success");
                                                                             addPaymentDetails();//SAVE function
                                                                       } else {
                                                                            swal("Cancelled", "Your record has not been saved :)", "error");
                                                                        }
                                                                    });
                                                            
                                                                    //swal end 
                                                        }
                                                    });



                                                    //To Clear the form data
                                                    $('#btn_clr').click(function () {
                                                        //alert('hi');

                                                        //swal start
                                                        swal({
                                                            title: "Are you sure?",
                                                            text: "Your will not be able to recover this form data!",
                                                            type: "warning",
                                                            showCancelButton: true,
                                                            confirmButtonClass: "btn-danger",
                                                            confirmButtonText: "Yes, delete it!",
                                                            closeOnConfirm: false
                                                        },
                                                                function () {
                                                                    swal("DClearUserDataeleted!", "Your form data has been deleted.", "success");
                                                                    ClearPaymentDetails();
                                                                });
                                                        //swal end             
                                                    });


                                                    $('#LogOut').click(function () {

                                                        swal({
                                                            title: "Do you realy want to logout ?",
                                                            text: "You have to Log In again!",
                                                            type: "warning",
                                                            showCancelButton: true,
                                                            confirmButtonClass: "btn-danger",
                                                            confirmButtonText: "Log Out",
                                                            closeOnConfirm: false
                                                        },
                                                                function () {

                                                                    Logout();
                                                                });
                                                    });



    </script>
</html>



