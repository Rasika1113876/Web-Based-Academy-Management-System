<?php
session_start();
?>

<html>
    <head> 
        <title>WELCOME LAKSHI SALON &ACADEMY</title>    
        <link href="css/bootstrap_1.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>   
        <div class="row">
            <div class="col-md-12 row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="row" style="">
                        <h2 style=" margin-left: 250px"> <img src="images/logo.png" alt="" id="logo" style=" height: 80px; margin-left: 20px;"/><font face="Broadway">LAKSHI</font></h2>
                        <h3 style=" margin-left: 20px; margin-top: 20px">HAIR & BEAUTY ACADEMY</h3>
                        <h4 style="margin-left: 80px;">Head Office - 38 1/1,Church Road,Ratnapura</h4>
                        <h4 style="margin-left: 80px">Branches - 2nd Floor,Pizza Hut Building,Ratnapura</h4>
                        <h4 style="margin-left: 80px">Tel:071-4310800/0718171178</h4>
                        <h4 style="margin-left: 80px">E-mail:lakshisalon@yahoo.com</h4>     
                    </div>
                    <br>
                    <div class="col-md-12" style="background-color:black;"><font style="font-weight: bolder; color: white; font-size:24px; margin-left: 300px;">TRAINEE CONTACT DETAILS REPORT</font></div>
                </div>
            </div>
        </div>

        <div class="row" style="height: 50px"></div>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8"> 
                <table class="table table-hover" id="contactDetailstbl" style="background-color: #FFFFFF; color: black" >
                    <thead class="">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address1</th>
                            <th scope="col">Address1</th>
                            <th scope="col">Address1</th>
                            <th scope="col">Telephone No</th>
                            <th scope="col">Email</th>                            
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                <div class="col-md-2"style="margin-top: 10px;">
                    <button type="button" class="btn btn-primary " id="printreportcontact" style="margin-left: 0px; width: 113px;"><img src='svg/Print01.svg' width='35' height='30'>&nbsp;PRINT REPORT </button>
                </div>   
            </div>
    </body>

    <script src="js/jQueryjs.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/sweetalert.js" type="text/javascript"></script>
    <script src="js/report.js" type="text/javascript"></script>
    <script type =text/javascript>

        $(window).on('load', function () {
            //alert("Window Loaded"); 
            contactDetailsReport();
        });

        $('#printreportcontact').click(function () {
            window.print();
        });

    </script> 
</html>


