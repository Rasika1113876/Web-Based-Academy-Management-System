<?php
session_start();
?>
<html>
    <head> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/main.css" rel="stylesheet" type="text/css"/>          
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../css/sweetalert.css" rel="stylesheet" type="text/css"/>
    </head>
    <!--To scroll the content of the body-->
    <body data-spy="scroll" data-target=".leftnavbar" data-offset="50" >

        <div class="container-fluid">  

            <!--begin of the top navigation bar-->

            <nav class="navbar navbar navbar-expand-lg " style="height: 150px; background-color: #000">
                <!--    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>-->
                <div class="collapse navbar-collapse" id="nav-content" style="" >   
                    <ul class="navbar-nav" style="width: 1000px;">
                        <li class="nav-item">
                            <img src="../images/logo.png" alt="" id="logo" style=" height: 80px; margin-left: 50px;"/>
                        </li>
                        <li class="nav-item">
                            <br>
                            <div class="row" style="margin-left: 200px; width: 700px;" >
                                <font style="align-items: center; color: #ffffff; font-weight: bolder; font-size:35px; font-family: serif;" >ADMINISTRATOR DASHBOARD</font>
                            </div>
                        </li>  
                        <li>
                            <div class="row" style="margin-left: 200px; margin-top: 25px;" >
                                <form class="navbar-form">
                                    <div class="form-group" style="color: white;">
                                        <label for="Cid" style="color: white; font-family: serif;">You are logged in as <font style="color: #ffffff;">ADMINISTRATOR</font></label>
                                        <br>
                                        <?php echo ($_SESSION['user_id']); ?>
                                        <?php echo ($_SESSION['user_name_r']); ?>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li>
                            <div class="row" style="margin-left: 50px; margin-top: 30px;" >

                                <button type='button' class='btn btn-secondary btnLogout' value='<?php echo ($_SESSION['user_id']); ?>' id="LogOut"><img src="../svg/logout.svg" width="20" height="20"></button>
                            </div>
                        </li>
                        <li>
                            <div class="row" style="margin-left: 25px; margin-top: 30px;" >
                                <button class="btn" style="background-color: #808083; height:35px" onclick="window.location.href = '../AdministratorDashboard.php';"><img src='../svg/si-glyph-arrow-backward.svg' width='35' height='30'></button>
                            </div>                    
                        </li>
                    </ul>
                </div>
            </nav>

            <!--end of the top navigation bar-->

            <!--begin of the paragraph-->
            <div class=" col-md-12 col-lg-12 col-xl-12 row">

                <!--begin of the left column-->
                <div class="col-md-2">

                </div>
                <!--end of the left column-->

                <!--begin of the middle column-->
                <div class="col-md-8">

                    <div class="row" style="height: 100px;"></div>
                    <!--begin of the paragraph-->
                    <div class="row">
                        <h3><font style="color: white;">Generate Backup</h3>
                        <br/>
                        <p><font size="+1" style="color: white;"> Click the button to run the daily data backup process. </p>
                        <p>After successful completion of the backup file, we advise you to copy the file to your secure data storage location.
                            In case of an emergency breakdown, you can provide us the backup file to restore your system to the previous state where the backup was taken.
                        </p>
                        <p>Example backup file name : lakshisalon_2018_2018-10-15.zip</p>
                        <p>&nbsp;</p>
                    </div>
                    <!--end of the paragraph-->

                    <div class="row">
                        <form method="POST">
                            <div class="form-horizontal">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group col-md-12">
                                            <button type="submit" class="btn btn-primary btn-lg" name="gen_btn">Generate Backup</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="wait" style="display:none;width:124px;height:124px;border:1px solid black;position:absolute;top:50%;left:50%;padding:2px;"><img src='./img/loading51.gif' width="124" height="124" /><br>Sending..</div>
                            </div>
                        </form>      
                    </div>

                </div>
                <!--end of the middle column-->

                <!--begin of the right column-->
                <div class="col-md-2">

                </div>
                <!--end of the right column-->
            </div>

            <div class="col-md-4">
                <?php
                if (array_key_exists('gen_btn', $_POST)) {
                    $bname = "lakshisalon" . date("Y-m-d") . time() . "-" . uniqid();

                    //include [require] mysql dump engine
                    require_once('MySQLDump.class.php');
                    $starttime = time();

                    $drop_table_if_exists = true; //should we drop table if exist?

                    $somecontent = "-- Developed By Rasika Rathnasekara  -- \n" .
                            "_______________________________________________________________________ \n" .
                            "---------------------------&&&&&&&&&&&&&&&&&------------------------------- \n" .
                            "=================================@  @ ######  & ============================= \n\n";


                    // no need for editing further
                    $backup = new MySQLDump(); //create new instance of MySQLDump

                    $backup->droptableifexists = $drop_table_if_exists; //set drop table if exists

                    $backup->list_tables("Rasika Rathnasekara"); //list all tables

                    $broj = count($backup->tables); //count all tables, $backup->tables will be array of table names
                    //echo "<pre>\n"; //start preformatted output
                    $somecontent .= "-- Dumping tables for database: \n"; //write "intro" ;)
                    $somecontent .= "\n\nSET FOREIGN_KEY_CHECKS=0; \n"; //write "intro" ;)
                    //dump all tables:
                    for ($i = 0; $i < $broj; $i++) {
                        $table_name = $backup->tables[$i]; //get table name
                        if ($table_name != 'at_system_users') {
                            $backup->dump_table($table_name); //dump it to output (buffer)
                            $somecontent .= $backup->output; //write output
                        }
                    }

                    $somecontent .= "\n\nSET FOREIGN_KEY_CHECKS=1; \n\n"; //write "intro" ;)
                    //create the zip archive
                    $zip = new ZipArchive;
                    $zipfilename = "backup/" . $bname . time() . ".zip";
                    $res = $zip->open($zipfilename, ZipArchive::CREATE);
                    if ($res === TRUE) {
                        $zip->addFromString(($bname . '.sql'), $somecontent);
                        $zip->close();
                        echo '<span class="label label-success">Successfully Backup You System</span>&nbsp;&nbsp';
                        echo '<a class="btn btn-link" href="' . $zipfilename . '">Backup File</a>';
                    } else {
                        echo 'span class="label label-important">Backup file creating failed due to some reason.<br/>Please contact developers for assistance.</span>';
                    }
                }
                ?>                              
            </div>
        </div>
        <?php //require_once './include/footerBar.php'; ?>
        <?php //require_once './include/systemFooter.php'; ?>
    </body>
    <script src="../js/bootstrap.js" type="text/javascript"></script>
    <script src="../js/jQueryjs.js" type="text/javascript"></script>
    <script src="../js/Session.js" type="text/javascript"></script>
    <script src="../js/sweetalert.js" type="text/javascript"></script>
    <script type="text/javascript">

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
                                                function Logout() {

                                                    $.post("../database/session.php", {proccess: 'logout'}, function (e) {
// timelyRedirect("index.php", 0);
                                                        window.location.replace("../index.php");
                                                    });
                                                }
                                        );
                                    });

//        $(window).on('load', function () {
//            //alert("Window Loaded"); 
//
//            $.post("../database/session.php", {pageProtect: 'data'}, function (e) {
//                if (e == 0) {
//
//                    window.location.replace("../index.php");
//                }
//            });
//
//
//
//        });



    </script>
</html>



