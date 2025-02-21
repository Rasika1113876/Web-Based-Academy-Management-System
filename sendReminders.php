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
    <body>
        <?php require_once './include/navbar_cashier.php'; ?>
        <div class="container" col-md-12>

            <div class="row" style="height:50px"> 
            </div>

            <div class="row" style="height:150px"> 
                <form class="form-inline">
                    <input class="form-control mr-sm-2" id="searchID" type="search" placeholder="Search ID" aria-label="Search">
                    <button class="btn btn-primary my-2 my-sm-0" type="button" id="searchHistryID">Search</button>
                </form>
            </div>

            <div class="modal fade" id="exampleModalReminders" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content"  style="background-color: #c7ddef;">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Send Reminders</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="trid" class="col-form-label">Trainee ID:</label>
                                    <input type="text" class="form-control" id="trid">                                   
                                </div>
                                <div class="form-group">
                                    <label for="traineeName" class="col-form-label">Trainee Name:</label>
                                    <input type="text" class="form-control" id="traineeName">
                                </div>
                                <div class="form-group">
                                    <label for="insPlan" class="col-form-label">Next Installment Amount:</label>
                                    <input type="text" class="form-control" id="nextAmount">
                                </div>
                                <div class="form-group">
                                    <label for="sDate" class="col-form-label">Next Installment Date:</label>
                                    <input type="Date" class="form-control" id="nextDate">
                                </div>
                                <div class="form-group">
                                    <label for="cashierID" class="col-form-label">Cashier ID:</label>
                                    <input type="text" class="form-control" id="cashierID" value=" <?php echo ($_SESSION['user_id']); ?>">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="addreminder">SEND</button>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-md-12" style="background-color: #c7ddef;"> 
                    <!--                    <div class="scrollable" style="overflow-y: auto; height: 150px; margin-top: 10px">-->
                    <legend style="color: black;font-size: 18px;">Payment History</legend>
                    <table class="table table-bordered table-striped" id="tbl_viewPaymentDetailstbl" style=" color: white; background-color: #444;">
                        <thead class="">
                            <tr>                                
                                <th scope="col">Trainee ID</th>
                                <th scope="col">Trainee Name</th>
                                <th scope="col">Total Course Fee</th>
                                <th scope="col">No. of installments</th>
                                <th scope="col">Total Paid Installment</th>                                    
                                <th scope="col">Total Paid Amount</th>
                                <th scope="col">Date of starting payment</th>
                                <th scope="col">Due Amount</th> 
                                <th scope="col"></th> 
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
<!--links-->
<script src="js/jQueryjs.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/sweetalert.js" type="text/javascript"></script>
<script src="js/chosen.jquery.js" type="text/javascript"></script>
<script src="js/comboxjs.js" type="text/javascript"></script>
<script src="js/billPayment.js" type="text/javascript"></script>
<script src="js/Session.js" type="text/javascript"></script>

<script type =text/javascript>


    $(window).on('load', function () {
        //alert("Window Loaded"); 
        LoadPaymentDetais();
    });

    $('#addreminder').click(function () {
        swal({
            title: "Do you realy want to send ?",
            text: "",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-warning",
            confirmButtonText: "Send",
            closeOnConfirm: false
        },
                function () {

                    swal("Saved!", "Your record has been saved.", "success");
                    reminderLoad();
                });
        /*taking id of the textbox
         var temp=$('#exampleInputPassword1').val();
         alert(temp);*/
        //alert("hkhjkh");
    });
//         $('#searchHistryID').click(function () {
//           // alert("ggg"); 
//            LoadPaymentHistoryID();
//        });

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




<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

