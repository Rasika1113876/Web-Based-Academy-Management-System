<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/highcharts.css" rel="stylesheet" type="text/css"/>
        <link href="css/sweetalert.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
          <?php require_once './include/navbar_admin.php'; ?>
         <div class="container" col-md-12>

            <div class="row" style="height:150px"> 
            </div>
        <div id = "container2" style = "min-width: 310px; height: 400px; margin: 0 auto" > </div>
         </div>
    </body>
    <script src = "js/jQueryjs.js" type = "text/javascript" ></script>
    <!--<script src="js/bootstrap.js" type="text/javascript"></script>-->
    <!--<script src="js/sweetalert.js" type="text/javascript"></script>-->
    <script src="charts/export-data.js" type="text/javascript"></script>
    <script src="charts/exporting.js" type="text/javascript"></script>
    <script src="charts/highcharts.js" type="text/javascript"></script>
    <script src="js/chart.js" type="text/javascript"></script>
    <script type =text/javascript>


        $(window).on('load', function () {
            //alert("Window Loaded"); 
            chartLoad();

        });
    </script>
</html>

