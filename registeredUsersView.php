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
        <link href="css/hover1.css" rel="stylesheet" type="text/css"/>
        <link href="css/sweetalert.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php require_once './include/navbar_admin.php'; ?>
        <div class="container-fluid">
            <div class="row" style="height:150px">     
            </div>

            <div class="row">
                <div class="col-md-1">                   
                </div>
                <div class="col-md-1"> 
                    <table>
                        <tr>
                            <td>
                                <div class="ih-item circle effect20 top_to_bottom">
                                    <a href="#" id="trainerLoad">
                                        <div class="img"><img src="images/icon6.jpg" alt=""/></div>                                 
                                        <div class="info">
                                            <div class="info-back">
                                                <h3>TRAINER</h3>
                                                <p></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr style="height: 20px"></tr>
                        <tr>
                            <td>
                                <div class="ih-item circle effect20 top_to_bottom">
                                    <a href="#" id="traineeLoad">
                                        <div class="img"><img src="images/icon6.jpg" alt=""/></div>                                 
                                        <div class="info">
                                            <div class="info-back">
                                                <h3>TRAINEE</h3>
                                                <p></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr style="height: 20px"></tr>
                        <tr>
                            <td>
                                <div class="ih-item circle effect20 top_to_bottom">
                                    <a href="#" id="cashierLoad">
                                        <div class="img"><img src="images/icon6.jpg" alt=""/></div>                                 
                                        <div class="info">
                                            <div class="info-back">
                                                <h3>CHASHIER</h3>
                                                <p></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-1">                   
                </div>
                <div class="col-md-7">  
                    <table class="table table-bordered table-hover datable" id="tbl_reg_user">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>NIC</th>
                                <th>Telephone No</th>
                                <th>Address</th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>                                                             
                        </tbody>
                    </table>

                    <div class="modal fade " id="viewusrModal" style="width:100%;height: 100%;" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <font style="font-size: larger; color: black; font-weight: bold;">USER UPDATE FORM</font>
                                    <button type="button" class="close"  data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row ">                                        
                                            <div class= "col-md-12 col-xs-12 ">
                                                <div class="span6" style="margin-top: 0px; margin-right: 10px; margin-bottom: 25px;">
                                                    <div class="box">  
                                                        <div class="box-content box-nomargin">


                                                            <div class="row" id="contentBar">
                                                                <!--begin of the form-->
                                                                <form class="col-md-12 row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="uid" style="color: black; font-weight: 500;">User ID:</label>
                                                                            <input type="text" readonly class="form-control" id="u_id" name="uid" readonly>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="fnm" style="color: black; font-weight: 500;">Full Name:</label>
                                                                            <input type="text" readonly class="form-control" id="u_fnm" name="fnm" >
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="ttl" style="color: black; font-weight: 500;">Title:</label>
                                                                            <input type="text" readonly class="form-control" id="u_ttl" name="ttl" >
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="nm" style="color: black; font-weight: 500;">Name with Initials:</label>
                                                                            <input type="text" readonly class="form-control" id="u_nm" name="nm" >
                                                                        </div>        
                                                                        <div class="form-group">
                                                                            <label for="nic" style="color: black; font-weight: 500;">NIC:</label>
                                                                            <input type="text" readonly class="form-control" id="u_nic" name="nic" >
                                                                        </div>  
                                                                        <div class="form-group">
                                                                            <label for="dob" style="color: black; font-weight: 500;">Date of Birth:</label>
                                                                            <input type="text" readonly class="form-control" id="u_dob" name="dob">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6"> 
                                                                        <div class="form-group">
                                                                            <label for="add" style="color: black; font-weight: 500;">Address:</label>
                                                                            <input type="text" readonly class="form-control" id="u_add1" name="add1" >
                                                                        </div>
                                                                        <div class="form-group">                                    
                                                                            <input type="text" readonly class="form-control" id="u_add2" name="add2" >
                                                                        </div>
                                                                        <div class="form-group">                                    
                                                                            <input type="text" readonly class="form-control" id="u_add3" name="add3" >
                                                                        </div>  
                                                                         <div class="form-group">
                                                                            <label for="batch" style="color: black; font-weight: 500;">Batch Name:</label>
                                                                            <input type="text" class="form-control" id="batch_nm" name="batch" value="0">
                                                                        </div>    
                                                                        <div class="form-group">
                                                                            <label for="tp" style="color: black; font-weight: 500;">Telephone No:</label>
                                                                            <input type="text" readonly class="form-control" id="u_tp" name="tp">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="email" style="color: black; font-weight: 500;">Email:</label>
                                                                            <input type="email" readonly class="form-control" id="u_email" name="email" >
                                                                        </div>                                             
                                                                        <div class="form-group"> 
                                                                            <button class="btn btn-success btn_register" id="btn_register"><i class="fa fa-save fa-lg"></i>&nbsp;REGISTER</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                                <!--end of the form-->
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">                   
                </div>
            </div>
        </div>
    </body>
    <script src="js/jQueryjs.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
<!--    <script src="js/registration.js" type="text/javascript"></script>-->
    <script src="js/regiview.js" type="text/javascript"></script>
<!--    <script src="js/regi_update.js" type="text/javascript"></script>-->
    <script src="js/Session.js" type="text/javascript"></script>
    <script src="js/sweetalert.js" type="text/javascript"></script>
    <script type =text/javascript>




        $('#traineeLoad').click(function () {
            //alert("Window Loaded"); 
            TraineeLoad();

        });

        $('#trainerLoad').click(function () {
            //alert("Window Loaded"); 
            TrainerLoad();

        });

        $('#cashierLoad').click(function () {
            //alert("Window Loaded"); 
            CashierLoad();

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