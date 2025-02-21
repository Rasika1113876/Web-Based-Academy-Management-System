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
    </head>
    <body>
        <?php require_once './include/navbar_admin2.php'; ?>
        <div class="row" style="height: 50px">

        </div>
        <div class="container-fluid">

            <div class="row" style="height:500px">
                <div class="col-md-2"> 
                </div>
                <div class="col-md-2"> 
                    <div class="row" style="height:200px">
                        <div class="ih-item circle effect20 top_to_bottom">
                            <a href="personalDetailsReport.php">
                                <div class="img"><img src="images/reports.jpg" alt=""/></div>                                 
                                <div class="info">
                                    <div class="info-back">
                                        <h3>PERSONAL DETAILS REPORTS</h3>
                                        <p></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row" style="height:100px">

                    </div>
                    <div class="row" style="height:200px">
                        <div class="ih-item circle effect20 top_to_bottom">
                            <a href="user_management_view.php">
                                <div class="img"><img src="images/addUser.jpg" alt=""/></div>                                 
                                <div class="info">
                                    <div class="info-back">
                                        <h3>USER MANAGEMENT</h3>
                                        <p></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>               

                <div class="col-md-1"> 
                </div>
                <div class="col-md-2"> 
                    <div class="row" style="height:200px">
                        <div class="ih-item circle effect20 top_to_bottom">
                            <a href="viewAttendance_admin.php">
                                <div class="img"><img src="images/attendance.png" alt=""/></div>                                 
                                <div class="info">
                                    <div class="info-back">
                                        <h3>VIEW ATTENDANCE</h3>
                                        <p></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!--                    ADD BATCH MODAL START-->
<!--                    <div class="modal fade" id="addBatchModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Message:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="reply-text" class="col-form-label">Reply:</label>
                                            <textarea class="form-control" id="reply-text"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" id="addBatchbtn">Add Batch</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    ADD BATCH MODAL END-->

                    <!--ADD INSTALLMENT PLANS MODAL START-->

                    <div class="modal fade" id="addInsPlanseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            <label for="insPlan" class="col-form-label">Installment Plan:</label>
                                            <input type="text" class="form-control" id="insPlan">
                                        </div>
                                        <div class="form-group">
                                            <label for="totCourseFee" class="col-form-label">Total Course Fee:</label>
                                            <input type="text" class="form-control" id="totCourseFee">
                                        </div> 
                                        <div class="form-group">
                                            <label for="noOfIns" class="col-form-label">No. of Installments:</label>
                                            <input type="text" class="form-control" id="noOfIns">
                                        </div>
                                        <div class="form-group">
                                            <label for="amountPerIns" class="col-form-label">Amount Per Installment:</label>
                                            <input type="text" class="form-control" id="amountPerIns">
                                        </div> 
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" id="addInsPlanbtn">ADD</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--ADD INSTALLMENT PLANS MODAL END-->
                    <div class="row" style="height:100px">

                    </div>
                    <div class="row" style="height:200px">
                        <div class="ih-item circle effect20 top_to_bottom">
                            <a href="contactDetailsReport.php">
                                <div class="img"><img src="images/reports.jpg" alt=""/></div>                                 
                                <div class="info">
                                    <div class="info-back">
                                        <h3>CONTACT DETAILS REPORTS</h3>
                                        <p></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"> 
                </div>
                <div class="col-md-2"> 
                    <div class="row" style="height:200px">
                        <div class="ih-item circle effect20 top_to_bottom">
                            <a href="manageSessionsViewAdmin.php">
                                <div class="img"><img src="images/session.jpg" alt=""/></div>                                 
                                <div class="info">
                                    <div class="info-back">
                                        <h3>SESSION DETAILS</h3>
                                        <p></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="row" style="height:100px">
                    </div>
                    <div class="row" style="height:200px">
                        <div class="ih-item circle effect20 top_to_bottom">
                            <a href="#" id="add_ins_plans">
                                <div class="img"><img src="images/installment.jpg" alt=""/></div>                                 
                                <div class="info">
                                    <div class="info-back">
                                        <h3>ADD INSTALLMENT PLANS</h3>
                                        <p></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"> 
                </div>
            </div>
        </div>

        <div class="row" style="height: 50px">

        </div>

    </body>
    <script src="js/jQueryjs.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>   
    <script src="js/Session.js" type="text/javascript"></script>
    <script src="js/user_management.js" type="text/javascript"></script>
    <script src="js/sweetalert.js" type="text/javascript"></script>
    <script type =text/javascript>
////LOAD ADD BATCH
//        $('#add_batch').click(function () {
//            // alert("aaa");
//            $('#addBatchModal').modal('show');
//            $('#addBatchModal').on('shown.bs.modal', function (e) {
//            });
//        });
////LOAD ADD BATCH END        


// INSTALLMENT PLANS LOAD      
        $('#add_ins_plans').click(function () {
            // alert("aaa");
            $('#addInsPlanseModal').modal('show');
            $('#addInsPlanseModal').on('shown.bs.modal', function (e) {
            });
        });

        $('#addInsPlanbtn').click(function () {
            addInsPlanLoad();
        });
//INSTALLMENT PLANS LOAD END
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

//      $(window).on('load', function () {
//            //alert("Window Loaded"); 
//            pageProtect()();
//        });
    </script>

</html><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

