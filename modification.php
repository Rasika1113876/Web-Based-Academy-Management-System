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
        <?php require_once './include/navbar_trainer.php'; ?>
        <div class="container" col-md-12>

            <div class="row" style="height:100px">     
            </div>

             <form class="row" >

                    <div class="form-group col-md-3">
                        <label for="trid" style="color: white">Employee Type:</label>
                        <div>                                        
                            <select class="form-control-chosen" id="uType">
                            </select>                                                                                        
                        </div>                              
                    </div>
                    <div class="col">
                        <label for="date" style="color: white">Count:</label>
                        <input type="text" style="width: 100px" class="form-control" id="count"  placeholder="" value=''>
                    </div>
                    <div class="col" style="margin-left: 50px; margin-top:30px">
                        <label for="date" style="color: white"></label>
                        <button type="button" class="btn btn-success" id="btn_view"><img src='svg/Eye.svg' width='30' height='30'>view</button>
                    </div>
               
            </form>
            
            <div class="row" style="height:50px">     
            </div>

            <div class="row">
                <div class="col-md-12"> 
                    <table class="table table-hover table-bordered" id="userDetails" >
                        <thead class="">
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>NIC</th>
                                <th>Telephone No</th>
                                <th>Address</th>                            
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
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
    <script src="js/regiview.js" type="text/javascript"></script>
    <script src="js/Session.js" type="text/javascript"></script>

    <script type =text/javascript>


        $(window).on('load', function () {
            // alert("window load");
            usertype_load();     //......To load Trainee Names(trname)to combo box 

        });

        $('#uType').change(function (e) {
            //alert("aaa");
            Change_count($(this).val());//...........To get count of each user type to a textbox
        });
     
         $('#btn_view').click(function () {
            //alert("Window Loaded"); 
            userdata();//...................To load user details according to user type

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
<!--echo "Today is " . date("Y-m-d") . "<br>-->