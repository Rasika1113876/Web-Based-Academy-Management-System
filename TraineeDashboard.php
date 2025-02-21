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
        <?php require_once './include/navbar_trainee.php'; ?>
        ]<div class="container-fluid">
            <div class="row" style="height:50px">

            </div>
            <div class="row" style="height:250px">
                <div class="col-md-3"> 
                </div>

                <div class="col-md-2">                     
                    <div class="ih-item circle effect20 top_to_bottom">
                        <a href="userProfileTrainee.php">
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

                <div class="col-md-2"> 
                </div>

                <div class="col-md-2">                     
                    <div class="ih-item circle effect20 top_to_bottom">
                        <a href="traineePaymentHistoryView.php">
                            <div class="img"><img src="images/payhistory.png" alt=""/></div>                                 
                            <div class="info">
                                <div class="info-back">
                                    <h3>PAYMENT DETAILS</h3>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </div>                   
                </div>

                <div class="col-md-3"> 
                </div>    
            </div>           

            <div class="row" style="height:50px">

            </div>
            <div class="row" style="height:250px">
                <div class="col-md-3"> 
                </div>

                <div class="col-md-2">                     
                    <div class="ih-item circle effect20 top_to_bottom">
                        <a href="traineerSessionDetailsView.php">
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

                <div class="col-md-2"> 
                </div>

                <div class="col-md-2">                     
                    <div class="ih-item circle effect20 top_to_bottom" >
                        <a href="viewReminders.php">
                            <div class="img"><img src="images/reminder.jpg" alt=""/></div>                                 
                            <div class="info">
                                <div class="info-back">
                                    <h3>VIEW REMINDERS</h3>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </div>                   
                </div>

                <div class="col-md-3"> 
                </div>    
            </div>
        </div>




    </body>
    <script src="js/jQueryjs.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>   
    <script src="js/Session.js" type="text/javascript"></script>
    <script src="js/sweetalert.js" type="text/javascript"></script>
    <script type =text/javascript>



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
</html>

