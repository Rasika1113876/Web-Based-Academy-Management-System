<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/sweetalert.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php require_once './include/navbar_admin2.php'; ?>
        <div class="container" col-md-12>

            <div class="row" style="height:50px"> 
            </div>

            <div class="row" style="height:150px"> 
                <form class="form-inline">
                    <input class="form-control mr-sm-2" id="searchID" type="search" placeholder="Search ID" aria-label="Search">
                    <button class="btn btn-primary my-2 my-sm-0" type="button" id="searchid">Search</button>
                </form>
            </div>

            <div class="row">
                <div class="col-md-12"> 
                    <table class="table table-hover table-bordered" id="session_manage_tbl" >
                        <thead class="">
                            <tr>
                                <th scope="col">Sheet ID</th>
                                <th scope="col">Date</th>
                                <th scope="col">Trainee ID</th>
                                <th scope="col">Trainee Name</th>
                                <th scope="col">Course Title</th>
                                <th scope="col">Total Marks</th>
                                <th scope="col">Grade</th>
                                <th scope="col">Comments</th>
                                <th scope="col">Action</th>
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
    <script src="js/Session.js" type="text/javascript"></script>
    <script src="js/manageSessions.js" type="text/javascript"></script>
    <script type =text/javascript>


        $(window).on('load', function () {
            //alert("Window Loaded"); 
            sessionManage();
        });

        $('#searchid').click(function () {
//            alert("ggg"); 
            sessionManageID();
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


