<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WELCOME LAKSHI SALON &ACADEMY</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <!--        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->
        <link href="css/hover.css" rel="stylesheet" type="text/css"/>
        <link href="css/sweetalert.css" rel="stylesheet" type="text/css"/>
        <link href="css/component-chosen.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php require_once './include/navbar_cashier.php'; ?>
        <div class="container-fluid">
            <div class="row" style="height:100px">

            </div>

            <div class="row" style="height:250px">               
                <div class="col-md-2"> 
                </div>
                <div class="col-md-2"> 
                    <div class="ih-item circle effect20 top_to_bottom">
                        <a href="userProfileCashier.php">
                            <div class="img"><img src="images/icon1.jpg" alt=""/></div>                                 
                            <div class="info">
                                <div class="info-back">
                                    <h3>VIEW PROFILE</h3>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </div>        
                </div>

                <div class="col-md-1"> 
                </div>

                <div class="col-md-2">                     
                    <div class="ih-item circle effect20 top_to_bottom">
                        <a href="billPayment.php">
                            <div class="img"><img src="images/payment.webp" alt=""/></div>                                 
                            <div class="info">
                                <div class="info-back">
                                    <h3>ADD PAYMENT</h3>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </div>                
                </div>

                <div class="col-md-1"> 
                </div>

                <div class="col-md-2">                     
                    <div class="ih-item circle effect20 top_to_bottom">
                        <a href="sendReminders.php">
                            <div class="img"><img src="images/reminder.jpg" alt=""/></div>                                 
                            <div class="info">
                                <div class="info-back">
                                    <h3>REMINDERS</h3>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </div>                   
                </div>

                <div class="col-md-2"> 
                </div>                     
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content"  style="background-color: #c7ddef;">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">ADD INSTALLMENT PLAN</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="trid" class="col-form-label">Trainee ID:</label>
                                    <div>                                        
                                        <select class="form-control-chosen " id="trid">
                                        </select>                                                                                        
                                    </div> 
                                </div>
                                <div class="form-group">
                                    <label for="trname" class="col-form-label">Trainee Name:</label>
                                    <input type="text" class="form-control" id="trname">
                                </div>
                                <div class="form-group">
                                    <label for="insPlan" class="col-form-label">Installment Plan:</label>
                                    <div>                                        
                                        <select class="form-control " id="insPlanTypes" required>
                                            <option value="">Enter Installment Plan </option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>    
                                            <option value="4">4</option>                                           
                                        </select>                                                                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="sDate" class="col-form-label">Selected Date:</label>
                                    <input type="text" class="form-control" id="sDate" value='<?php echo date("Y-m-d") ?>'>
                                </div>
                                <div class="form-group">
                                    <label for="cashierID" class="col-form-label">Cashier ID:</label>
                                    <input type="text" class="form-control" id="cashierID" value=" <?php echo ($_SESSION['user_id']); ?>">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="addPlan">ADD</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="height:250px">               
                <div class="col-md-2"> 
                </div>

                <div class="col-md-2"> 
                    <div class="ih-item circle effect20 top_to_bottom">
                        <a href="paymentHistoryView.php">
                            <div class="img"><img src="images/payhistory.png" alt=""/></div>                                 
                            <div class="info">
                                <div class="info-back">
                                    <h3>PAYMENT HISTORY</h3>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-1"> 
                </div>

                <div class="col-md-2">                     
                    <div class="ih-item circle effect20 top_to_bottom">
                        <a href="#" id="addInsPlan">
                            <div class="img"><img src="images/installment.jpg" alt=""/></div>                                 
                            <div class="info">
                                <div class="info-back">
                                    <h3>ADD INSTALLMENT PLAN</h3>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </div>                   
                </div>

                <div class="col-md-1"> 
                </div>

                <div class="col-md-2">                     
                    <div class="ih-item circle effect20 top_to_bottom">
                        <a href="totalIncomeView_cashier.php">
                            <div class="img"><img src="images/income.jpg" alt=""/></div>                                 
                            <div class="info">
                                <div class="info-back">
                                    <h3>INCOME</h3>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </div>                         
                </div>

                <div class="col-md-2"> 
                </div>                      
            </div>
        </div>
    </body>
    <script src="js/jQueryjs.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/billPayment.js" type="text/javascript"></script>
    <script src="js/chosen.jquery.js" type="text/javascript"></script>
    <script src="js/comboxjs.js" type="text/javascript"></script>
    <script src="js/manageSessions.js" type="text/javascript"></script>
    <script src="js/Session.js" type="text/javascript"></script>
    <script src="js/sweetalert.js" type="text/javascript"></script>
    <script type =text/javascript>

        $('#addInsPlan').click(function () {
            // alert("aaa");
            $('#exampleModal').modal('show');
            $('#exampleModal').on('shown.bs.modal', function (e) {
            });
        });

        $('#addPlan').click(function () {
            insPlanLoad();
            /*taking id of the textbox
             var temp=$('#exampleInputPassword1').val();
             alert(temp);*/
            //alert("hkhjkh");
        });

        $(window).on('load', function () {
            // alert("window load");                                                  
            billPaymentTID_load();//......To load Trainee ID(trid)to combo box                                                   
        });

        $('#trid').change(function (e) {
            ///alert(aaaaaaaaa);
            //billPaymentTID_load($(this).val(), billPaymentTname_load($(this).val()));
            markSheetTname_load($(this).val());
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
