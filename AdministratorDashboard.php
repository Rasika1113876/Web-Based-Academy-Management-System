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
        <?php require_once './include/navbar_admin.php'; ?>
        <div class="row" style="height: 50px">

        </div>
        <div class="container-fluid">

            <div class="row" style="height:500px">
                <div class="col-md-2"> 
                </div>
                <div class="col-md-2"> 
                    <div class="row" style="height:200px">
                        <div class="ih-item circle effect20 top_to_bottom">
                            <a href="registeredUsersView.php">
                                <div class="img"><img src="images/userRegistration.jpg" alt=""/></div>                                 
                                <div class="info">
                                    <div class="info-back">
                                        <h3>USER REGISTRATION</h3>
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
                            <a href="AdministratorDashboard2.php">
                                <div class="img"><img src="images/lipstick.jpg" alt=""/></div>                                 
                                <div class="info">
                                    <div class="info-back">
                                        <h3>ADMINISTRATOR DASHBOARD2</h3>
                                        <p></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" style="background-color: #c7ddef; width: 800px" >
                            <!--                            <div class="modal-header">
                                                            <h2 class="modal-title" id="exampleModalLabel">Mark sheet for practical sessions</h2>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>-->
                            <div class="modal-body">
                                <div class="text-center">
                                    <h5 class="text-center" id="exampleModalLabel">DIPLOMA IN BEAUTY CULTURE</h5>
                                    <img src="images/logo.png" alt="" id="logo" style=" height: 80px; margin-left: 40px;"/>
                                    <h5 class="text-center" id="exampleModalLabel">ACADEMIC TRANSCRIPT</h5>                                    
                                </div>
                                <br/>
                                <form>
                                    <div class="col">                                       
                                        <div class="form-group row">
                                            <label for="traineeId" class="col-sm-3 col-form-label">Trainee ID:</label>
                                            <div class="col-sm-5">
                                                <select class="form-control-chosen " id="trid">
                                                </select>   
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="traineeName" class="col-sm-3 col-form-label">Trainee Name:</label>
                                            <div class="col-sm-5">
                                                <input type="text" readonly class="form-control" id="traineeName" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="batchNo" class="col-sm-3 col-form-label">Batch No:</label>
                                            <div class="col-sm-5">
                                                <input type="text" readonly class="form-control" id="batchNo" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="dob" class="col-sm-3 col-form-label">Date of Birth:</label>
                                            <div class="col-sm-5">
                                                <input type="text" readonly class="form-control" id="dob" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nic" class="col-sm-3 col-form-label">NIC:</label>
                                            <div class="col-sm-5">
                                                <input type="text" readonly class="form-control" id="nic" placeholder="">
                                            </div>
                                        </div>   
                                        <div class="form-group row">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                                <legend style="color: black;font-size: 18px;">Final Results</legend>
                                                <table class="table table-bordered table-striped table-hover datable" id="tbl_finalResults" style=" color: white; background-color: #444;">
                                                    <thead>
                                                        <tr>
                                                            <th>Course Title</th>
                                                            <th>Total Marks</th>
                                                            <th>Grade</th>                                                     
                                                        </tr>
                                                    </thead>
                                                    <tbody >
                                                    </tbody>                                                             
                                                </table>   
                                            </div>
                                            <div class="col-md-2"></div>
                                        </div>  
                                        <div class="form-group row">
                                            <label for="finalMarks" class="col-sm-3 col-form-label">Final Marks:</label>
                                            <div class="col-sm-5">
                                                <input type="text" readonly class="form-control" id="finalMarks" placeholder="">
                                            </div>
                                        </div>  
                                        <div class="form-group row">
                                            <label for="finalGrade" class="col-sm-3 col-form-label">Final Grade:</label>
                                            <div class="col-sm-5">
                                                <input type="text" readonly class="form-control" id="finalGrade" placeholder="">
                                            </div>
                                        </div> 
                                        <div class="form-group row">
                                            <label for="issuedDate" class="col-sm-3 col-form-label">Date:</label>
                                            <div class="col-sm-5">
                                                <input type="date" class="form-control" id="issuedDate" placeholder="" value='<?php echo date("Y-m-d") ?>'>
                                            </div>
                                        </div>
                                    </div>                                                      
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" id="printcertificate">Print Certificate</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--                certificate modal-->


                <div class="modal fade" id="CertificateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" style="width: 800px; height:1000px; background-image: url('images/certificate background3.jpg');" >
                            <!--                            <div class="modal-header" style="height: 150px">
                            
                                                        </div>-->
                            <div class="modal-body" style="">

                                <div class="row" style="height:250px">             
                                    <h5  id="exampleModalLabel" style="font-family: candara; font-size: 50px; color: black; margin-left: 25px"><img src="images/seal.png" alt="" id="logo" style=" height: 80px; margin-left: 30px; margin-top: 5px">CERTIFICATE</h5>                
                                    <h5  id="exampleModalLabel" style="font-family: optima; font-size: 30px; color: black; margin-left: 20px; margin-top: 25px">OF COMPLETION</h5>

                                    <!--                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>-->
                                    <div class="row" style="margin-left: 150px">
                                        <img src="images/border.png" alt="" id="logo">                                         
                                        <h3><b>LAKSHI HAIR & BEAUTY ACADEMY</b></h3>
                                    </div>

                                </div>

                                <!--                                <div class="row" style="height:200px">
                                                                    <h2> <font face="Broadway">LAKSHI</font></h2>
                                                                    <h3>HAIR & BEAUTY ACADEMY</h3>
                                                                </div>-->

                                <div class="row" style="height:400px">

                                    <div class="col-md-1">
                                    </div> 

                                    <div class="col-md-10">
                                        <div class="row" style="height:150px"></div>
                                        <h5  id="exampleModalLabel" style="margin-left: 350px; font-family: candara; font-size: 25px">THIS IS TO CERTIFY THAT</h5>
                                        <br/>
                                        <br/>
                                        <div class="form-group row">    
                                            <label for="title" class="col-sm-2 col-form-label" style="color: black; font-family: candara; font-size: 20px">MR/MS:</label>
                                            <div class="col-sm-10">                                                
                                                <input type="text" readonly class="form-control" id="traineeNamecertificate" placeholder="" style="font-family: blackletter">;
                                            </div>
                                        </div>                                       
                                        <br/>
                                        <br/>
                                        <h5 id="exampleModalLabel" style="font-family: candara; font-size: 30px">HAS SUCCESSFULLY COMPLETED DIPLOMA IN BEAUTY CULTURE & HAIR DRESSING </h5>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>                                      
                                    </div>

                                    <div class="col-md-1">
                                    </div> 
                                </div>
                            </div>
                            <form class="row" >
                                <div class="form-group col-md-2" style="margin-left: 120px">   
                                    <label for="insplan" style="color: black">Date</label>

                                </div>
                                <div class="form-group col-md-4">                                              
                                    <label for="insplan" style="color: black">Managing Director</label>
                                </div>
                                <div class="form-group col-md-4">                                                                                                 
                                    <label for="insplan" style="color: black">Course Mentor</label>
                                </div>                      
                            </form>
                            <!--                            <div class="modal-footer">                               
                                                            <button type="button" class="btn btn-primary" id="sendmarks">Enter Marks</button>
                                                        </div>-->
                        </div>
                    </div>
                </div>


                <!--end of certificate modal-->


                <div class="col-md-1"> 
                </div>
                <div class="col-md-2"> 
                    <div class="row" style="height:200px">
                        <div class="ih-item circle effect20 top_to_bottom">
                            <a href="Registration.php">
                                <div class="img"><img src="images/addUser.jpg" alt=""/></div>                                 
                                <div class="info">
                                    <div class="info-back">
                                        <h3>ADD USER</h3>
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
                            <a href="totalIncomeView_admin.php">
                                <div class="img"><img src="images/income.jpg" alt=""/></div>                                 
                                <div class="info">
                                    <div class="info-back">
                                        <h3>VIEW INCOME</h3>
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
                            <a href="#" id="assignsessions" >
                                <div class="img"><img src="images/certificate.jpg" alt=""/></div>                                 
                                <div class="info">
                                    <div class="info-back">
                                        <h3>ISSUE CERTIFICATES</h3>
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
                            <a href="backupPHP/run.php">
                                <div class="img"><img src="images/backup.png" alt=""/></div>                                 
                                <div class="info">
                                    <div class="info-back">
                                        <h3>RECOVERY</h3>
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
    <script src="js/comboxjs.js" type="text/javascript"></script>
    <script src="js/Session.js" type="text/javascript"></script>
    <script src="js/manageSessions.js" type="text/javascript"></script>
    <script src="js/sweetalert.js" type="text/javascript"></script>
    <script type =text/javascript>

        $('#printcertificate').click(function () {
            // alert("aaa");
            if (($('#finalMarks').val()) < 10) {
                swal("Not Eligible to Issue Certificate", "", "error");
            } else
                $('#CertificateModal').modal('show');
            $('#CertificateModal').on('shown.bs.modal', function (e) {
            });
        });

        $('#assignsessions').click(function () {
            // alert("aaa");
            $('#exampleModal').modal('show');
            $('#exampleModal').on('shown.bs.modal', function (e) {
            });
        });

        $(window).on('load', function () {
            // alert("window load");                                                  
            billPaymentTID_load();//......To load Trainee ID(trid)to combo box                                                   
        });

        ////////////////////////////to load trainee details to academic transcript///////////////

        $('#trid').change(function (e) {
            ///alert(aaaaaaaaa);
            //billPaymentTID_load($(this).val(), billPaymentTname_load($(this).val()));
            acTranscriptTdetails_load($(this).val());
            acTranscriptFresults_load($(this).val());
        });

        $(window).on('load', function () {
            //alert("aaa");
            assignGradeforFinalMarks();
        });

        function assignGradeforFinalMarks() {
            //alert('hi');                                         

            if (($('#finalMarks').val()) <= 24) {
                $('#finalGrade').val("F");
            } else if (($('#finalMarks').val()) <= 49) {
                $('#finalGrade').val("C");
            } else if (($('#finalMarks').val()) <= 74) {
                $('#finalGrade').val("B");
            } else {
                $('#finalGrade').val("A");
            }
        }


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
//
//      $(window).on('load', function () {
//            //alert("Window Loaded"); 
//            pageProtect()();
//        });
    </script>

</html>