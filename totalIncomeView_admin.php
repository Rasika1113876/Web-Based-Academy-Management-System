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
        <?php require_once './include/navbar_admin.php'; ?>
        <div class="container" col-md-12>

            <div class="row" style="height:50px"> 
            </div>

            <div class="row" style="height:150px"> 
                <div class="col-md-12">
                    <div class="col-md-6">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" id="searchID" type="search" placeholder="Search ID" aria-label="Search">
                            <button class="btn btn-primary my-2 my-sm-0" type="button" id="searchid">Search</button>
                        </form>
                    </div>
                    
                    <div class="col-md-6">
                        <form class="form-inline">
                            <button class="btn btn-success my-2 my-sm-0" type="button" id="monthlyIncome" onclick="window.location.href = 'chartview.php';">Monthly Income</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12" style="background-color: #c7ddef;"> 
                    <!--                    <div class="scrollable" style="overflow-y: auto; height: 150px; margin-top: 10px">-->
                    <legend style="color: black;font-size: 18px;">Total Income</legend>
                    <table class="table table-bordered table-striped table-hover datable" id="tbl_totalIncome" style=" color: white; background-color: #444;">
                        <thead class="">
                            <tr>                                
                                <th scope="col">Date</th>
                                <th scope="col">Total Income</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                    <!--                    </div>-->
                </div>
            </div>
        </div>
    </body>
    <!--links-->
    <script src="js/jQueryjs.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/sweetalert.js" type="text/javascript"></script>
    <script src="js/billPayment.js" type="text/javascript"></script>
    <script src="js/Session.js" type="text/javascript"></script>

    <script type =text/javascript>


        $(window).on('load', function () {
            //alert("Window Loaded"); 
            LoadTotalIncome();
        });

//         $('#searchid').click(function () {
////            alert("ggg"); 
//            sessionManageID();
//        });



        $('#LogOut').click(function () {

            Logout();
        });
    </script>
</html>




