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
        ]<div class="container-fluid">
            <div class="row" style="height:50px">

            </div>

            <div class="row" style="height:250px">
                <div class="col-md-2"> 
                </div>
                <div class="col-md-2"> 
                    <div class="ih-item circle effect20 top_to_bottom">
                        <a href="userProfileTrainer.php">
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

                <div class="col-md-1"> 
                </div>

                <div class="col-md-2">                    
                    <div class="ih-item circle effect20 top_to_bottom">
                        <a href="markAttendanceView.php">
                            <div class="img"><img src="images/icon8.jpg" alt=""/></div>                                 
                            <div class="info">
                                <div class="info-back">
                                    <h3>MARK ATTENDANCE</h3>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </div>                   
                </div>

                <div class="col-md-1"> 
                </div>

                <div class="col-md-2">                     
                    <div class="ih-item circle effect20 top_to_bottom">
                        <a href="#" id="assignsessions">
                            <div class="img"><img src="images/session.jpg" alt=""/></div>                                 
                            <div class="info">
                                <div class="info-back">
                                    <h3>ASSIGN TRAINING SESSIONS</h3>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </div>                   
                </div>

                <div class="col-md-2"> 
                </div>              
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="background-color: #c7ddef; width: 800px" >
                        <div class="modal-header">
                            <img src="images/logo.png" alt="" id="logo" style=" height: 80px; margin-left: 50px;"/>

                            <h5 class="modal-title" id="exampleModalLabel">Mark sheet for practical sessions</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="col">
                                    <label for="trid" class="col-form-label">Trainee ID:</label>
                                    <div>                                        
                                        <select class="form-control-chosen " id="trid">
                                        </select>                                                                                        
                                    </div> 
                                </div>
                                 <div class="col">
                                    <label for="trname" class="col-form-label">Trainee Name:</label>
                                    <input type="text" class="form-control" id="trname">                             
                                 </div><div class="col">
                                    <label for="trnerid" class="col-form-label">Trainer ID:</label>
                                    <input type="text" class="form-control" id="trnerid" value=" <?php echo ($_SESSION['user_id']); ?>">                             
                                 </div>
                                
                                <div class="col">
                                    <label for="sedate" class="col-form-label">Date:</label>
                                    <input type="text" class="form-control" id="sedate" value='<?php echo date("Y-m-d") ?>' >
                                </div>
                               
                                <div class="col">
                                    <label for="setype" style="color: black">Course Title:</label>
                                    <div>                                        
                                        <select class="form-control " id="setype" required>
                                            <option value="">Enter Course Title </option>
                                            <option value="">Hair Cutting</option>
                                            <option value="">Bridal Dressing</option>
                                            <option value="">Normal Dressing</option>    
                                            <option value="">Bridal Makeup</option>
                                            <option value="">Normal Makeup</option>
                                            <option value="">Facial</option>    
                                        </select>                                                                                        
                                    </div>
                                </div>
                                <br/>

                                <div class="col" >
                                    <h5 class="title" id="title">Marking Criteria</h5>
                                    <br/>
                                    <div class="form-group row">
                                        <label for="inputmarks1" class="col-sm-2 col-form-label">Techniques:</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="inputmarks1" onkeypress="return isNumberKey(event)" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputmarks2" class="col-sm-2 col-form-label">Creativity:</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="inputmarks2" onkeypress="return isNumberKey(event)" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputmarks3" class="col-sm-2 col-form-label">Time Management:</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="inputmarks3" onkeypress="return isNumberKey(event)" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputmarks4" class="col-sm-2 col-form-label">Confidence:</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="inputmarks4" onkeypress="return isNumberKey(event)" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputmarks5" class="col-sm-2 col-form-label">Final Outcome:</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="inputmarks5" onkeypress="return isNumberKey(event)" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputtotalmarks" class="col-sm-2 col-form-label">Total Marks:</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="inputtotalmarks" placeholder="" disabled="">
                                        </div>
                                        <button type="button" class="btn btn-primary" id="btn_total_marks">Add Grade</button>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputgrade" class="col-sm-2 col-form-label">Grade:</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="inputgrade" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputcomment" class="col-sm-2 col-form-label">Comments:</label>
                                        <div class="col-sm-3">
                                            <input type="textArea" class="form-control" id="inputcomment" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="sendmarks">Enter Marks</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="height:50px">
            </div>
            <div class="row" style="height:250px">
                <div class="col-md-2"> 
                </div>

                <div class="col-md-2">                     
                    <div class="ih-item circle effect20 top_to_bottom">
                        <a href="viewAttendance_trainer.php">
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

                <div class="col-md-1"> 
                </div>

                <div class="col-md-2">                     
                    <div class="ih-item circle effect20 top_to_bottom">
                        <a href="manageSessionsViewTrainer.php">
                            <div class="img"><img src="images/session.jpg" alt=""/></div>                                 
                            <div class="info">
                                <div class="info-back">
                                    <h3>MANAGE SESSIONS</h3>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </div>                   
                </div>

                <div class="col-md-1"> 
                </div>

                <div class="col-md-2">                     
                    <div class="ih-item circle effect20 top_to_bottom">
                        <a href="AddSessionDetailsView.php">
                            <div class="img"><img src="images/icon7.jpg" alt=""/></div>                                 
                            <div class="info">
                                <div class="info-back">
                                    <h3>ADD COURSE DETAILS</h3>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </div>                   
                </div>

                <div class="col-md-2"> 
                </div>    
            </div>
        </div>

    </body>
    <script src="js/jQueryjs.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/sweetalert.js" type="text/javascript"></script>
    <script src="js/chosen.jquery.js" type="text/javascript"></script>
    <script src="js/comboxjs.js" type="text/javascript"></script>
    <script src="js/Session.js" type="text/javascript"></script>
    <script src="js/manageSessions.js" type="text/javascript"></script>
    <script type =text/javascript>

                                                $('#assignsessions').click(function () {
                                                    // alert("aaa");
                                                    $('#exampleModal').modal('show');
                                                    $('#exampleModal').on('shown.bs.modal', function (e) {
                                                    });
                                                });

//                                                $('#sendmarks').click(function () {
//                                                    //alert("aaa");
//                                                    addMarks();
//                                                });
//////////////////////////////////////////

                                                $('#sendmarks').click(function () {
                                                    //alert("OK");
                                                    if ((($('#trid').val()) === "") || (($('#sedate').val()) === "")
                                                            || (($('#trname').val()) === "") || (($('#setype').val()) === "select")
                                                            || (($('#inputmarks1').val()) === "") || (($('#inputmarks2').val()) === "")
                                                            || (($('#inputmarks3').val()) === "") || (($('#inputmarks4').val()) === "")
                                                            || (($('#inputmarks5').val()) === "") || (($('#inputtotalmarks').val()) === "")
                                                            || (($('#inputgrade').val()) === "") || (($('#inputcomment').val()) === ""))//check empty fields
                                                    {
                                                        swal("Failed to Save ", "Please Enter Empty Fields", "error");
                                                    } else {
                                                        //swal start
                                                        swal({
                                                            title: "Are you sure?",
                                                            text: "You want to save this record!",
                                                            type: "warning",
                                                            showCancelButton: true,
                                                            confirmButtonClass: "btn-warning",
                                                            confirmButtonText: "Yes, save it!",
                                                            cancelButtonText: "No, cancel !",
                                                            closeOnConfirm: false,
                                                            closeOnCancel: false
                                                        },
                                                                function (isConfirm) {
                                                                    if (isConfirm) {
                                                                        swal("Saved!", "Your record has been saved.", "success");
                                                                        addMarks();//SAVE function
                                                                    } else {
                                                                        swal("Cancelled", "Your record has not been saved :)", "error");
                                                                    }
                                                                });
                                                        //swal end 
                                                    }
                                                });

                                                $('#btn_total_marks').click(function () {
                                                    //alert("aaa");
                                                    assignGrade();
                                                });

                                                //////////////////////validation of marking criteria/////////////////////////////

                                                $('#inputmarks1').keyup(function (e) {
                                                    var temp = parseInt($(this).val());
                                                    // alert(temp);
                                                    ;
                                                    ;
                                                    if (temp > 4 || temp < 0) {
                                                        alert("xxxxxxxxx");
                                                    }
                                                });
                                                //////////////////////////////////////////////////
                                                ///////////////////CALCULATIONS///////////////////
                                                //////////////////////////////////////////////////

                                                //Begin Calculations
                                                $('#inputmarks1').keyup(function () {
                                                    var techniques = $('#inputmarks1').val();
                                                    var creativity = $('#inputmarks2').val();
                                                    var time = $('#inputmarks3').val();
                                                    var confidence = $('#inputmarks4').val();
                                                    var outcome = $('#inputmarks5').val();

                                                    var tot = parseInt(techniques) + parseInt(creativity) + parseInt(time) + parseInt(confidence) + parseInt(outcome);
                                                    $('#inputtotalmarks').val(tot);
                                                });

                                                $('#inputmarks2').keyup(function () {
                                                    var techniques = $('#inputmarks1').val();
                                                    var creativity = $('#inputmarks2').val();
                                                    var time = $('#inputmarks3').val();
                                                    var confidence = $('#inputmarks4').val();
                                                    var outcome = $('#inputmarks5').val();

                                                    var tot = parseInt(techniques) + parseInt(creativity) + parseInt(time) + parseInt(confidence) + parseInt(outcome);
                                                    $('#inputtotalmarks').val(tot);
                                                });

                                                $('#inputmarks3').keyup(function () {
                                                    var techniques = $('#inputmarks1').val();
                                                    var creativity = $('#inputmarks2').val();
                                                    var time = $('#inputmarks3').val();
                                                    var confidence = $('#inputmarks4').val();
                                                    var outcome = $('#inputmarks5').val();

                                                    var tot = parseInt(techniques) + parseInt(creativity) + parseInt(time) + parseInt(confidence) + parseInt(outcome);
                                                    $('#inputtotalmarks').val(tot);
                                                });

                                                $('#inputmarks4').keyup(function () {
                                                    var techniques = $('#inputmarks1').val();
                                                    var creativity = $('#inputmarks2').val();
                                                    var time = $('#inputmarks3').val();
                                                    var confidence = $('#inputmarks4').val();
                                                    var outcome = $('#inputmarks5').val();

                                                    var tot = parseInt(techniques) + parseInt(creativity) + parseInt(time) + parseInt(confidence) + parseInt(outcome);
                                                    $('#inputtotalmarks').val(tot);
                                                });

                                                $('#inputmarks5').keyup(function () {
                                                    var techniques = $('#inputmarks1').val();
                                                    var creativity = $('#inputmarks2').val();
                                                    var time = $('#inputmarks3').val();
                                                    var confidence = $('#inputmarks4').val();
                                                    var outcome = $('#inputmarks5').val();

                                                    var tot = parseInt(techniques) + parseInt(creativity) + parseInt(time) + parseInt(confidence) + parseInt(outcome);
                                                    $('#inputtotalmarks').val(tot);
                                                });
                                                //End Calculations

                                                //Begin AssignGrade
                                                function assignGrade() {
                                                    //alert('hi');                                         

                                                    if (($('#inputtotalmarks').val()) <= 5) {
                                                        $('#inputgrade').val("D");
                                                    } else if (($('#inputtotalmarks').val()) <= 10) {
                                                        $('#inputgrade').val("C");
                                                    } else if (($('#inputtotalmarks').val()) <= 15) {
                                                        $('#inputgrade').val("B");
                                                    } else {
                                                        $('#inputgrade').val("A");
                                                    }
                                                }
                                                //End AssignGrade

                                                //.............................

                                                function checkValue(val) {
                                                    var temp_val = parseInt(val);
                                                    if (val > 4) {

                                                        alert();
                                                    }
                                                }

////////////////////////////////////////////////////get trainee name according to trainee id///////////////////////

                                                $(window).on('load', function () {
                                                    // alert("window load");                                                  
                                                    billPaymentTID_load();//......To load Trainee ID(trid)to combo box                                                   
                                                });

                                                $('#trid').change(function (e) {
                                                    ///alert(aaaaaaaaa);
                                                    //billPaymentTID_load($(this).val(), billPaymentTname_load($(this).val()));
                                                    markSheetTname_load($(this).val());
                                                });
                                                //////////////////////////////////////////////////////////////////////////////////////////////////////////////////                                              


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
//        $('#LogOut').click(function () {
//
//            Logout();
//        });
    </script>
</html>