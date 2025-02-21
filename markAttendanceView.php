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
        <?php require_once './include/navbar_trainer.php'; ?>
        <div class="container" col-md-12>

            <div class="row" style="height:100px">     
            </div>

            <form>
                <div class="form-row">
                    <div class="col">
                        <label for="date" style="color: white">Date:</label>
                        <input type="text" class="form-control" id="course_date"  placeholder="" value='<?php echo date("Y-m-d")  ?>'>
                    </div>
                    <div class="col">
                        <label for="course_trainer_id" style="color: white">Trainer ID:</label>
                        <input type="text"  readonly class="form-control" id="course_trainer_id" placeholder="Enter Trainer ID" value=" <?php echo ($_SESSION['user_Name']); ?>">
                    </div>
                    <div class="col">
                        <label for="setype" style="color: white">Course Title:</label>
                        <div>                                        
                            <select class="form-control " id="course_typ" required>
                                <option value="">Enter Course Title </option>
                                <option value="Hair Cutting">Hair Cutting</option>
                                <option value="Bridal Dressing">Bridal Dressing</option>
                                <option value="Normal Dressing">Normal Dressing</option>    
                                <option value="Bridal Makeup">Bridal Makeup</option>
                                <option value="Normal Makeup">Normal Makeup</option>
                                <option value="Facial">Facial</option>    
                            </select>                                                                                        
                        </div>
                    </div>
                    <div class="col" style="margin-left: 50px; margin-top:30px">
                        <label for="date" style="color: white"></label>
                        <button type="button" class="btn btn-success" id="btn_attendance">OK</button>
                    </div>
                </div>
            </form>
            <div class="row" style="height:50px">     
            </div>

            <div class="row">
                <div class="col-md-12"> 
                    <table class="table table-hover table-bordered" id="attendance_table" >
                        <thead class="">
                            <tr>
                                <th scope="col">Trainee ID</th>
                                <th scope="col">Trainee Name</th>
                                <th scope="col"></th>
                                <th scope="col">Action</th>
                                <th scope="col">Reason</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
            
<!--             <form>
                <div class="form-row">
                    <div class="col">
                        <label for="" style="color: white">Total Absentees:</label>
                        <button type="button" class="btn btn-success" id="getTotalbtn">Get Total</button>
                        <input type="text" readonly class="form-control" id="tot_absent"  placeholder="" value=''>
                    </div>
                    <div class="col">
                        <label for="" style="color: white">Total Present Trainees:</label>
                        <input type="text"  readonly class="form-control" id="tot_present_trainees" placeholder="" value="">
                    </div>
                </div>
            </form>-->
        </div>
    </body>
    <!--links-->
    <script src="js/jQueryjs.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/sweetalert.js" type="text/javascript"></script>
    <script src="js/markAttendaence.js" type="text/javascript"></script>
    <script src="js/Session.js" type="text/javascript"></script>

    <script type =text/javascript>

      /////////////////////////load attendance table//////////////////////////////////////
        $(window).on('load', function () {
            //alert("Window Loaded"); 
            attendancetableLoad();
        });
        
        ////////////////////get total attendance///////////////////////////////////////////////
        $('#getTotalbtn').click(function () {
        var tot_attend = 0;
        var tot_absent = 0;
                                            $('#attendance_table tbody tr td:nth-child(3)').each(function () {
                                                //add item to array
                                                //tot_points += parseInt($(this).text());
                                              var statue=  $(this).closest('tr').find('td').find('.actiontext').val();
                                              if(statue==='Attend'){
                                                tot_attend ++;  
                                              }else{
                                                tot_absent ++;  
                                              }
                                            });

                                            $('#tot_absent').val( tot_absent);
//                                            SELECT COUNT( `Trainer_id`) FROM `attendence` WHERE `Action`=' Attend'
          });
          /////////////////////end of get total attendance/////////////////////////////////////

        $('#btn_attendance').click(function () {
            //alert("aaa");

            swal({
                title: "Do you realy want to save ?",
                text: "",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-primary",
                confirmButtonText: "Saved to DB",
                closeOnConfirm: true
            },
                    function () {

                        save_sheet_data();
                    });
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


        ////////////...............................//////////////
////////////.........VALIDATIONS...........//////////////
////////////...............................//////////////

//Input Numbers Only for input boxes

        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode;
            if (charCode != 46 && charCode > 31
                    && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }

        function myFunction() {
           // document.getElementById('course_date').value = Date();      
        }
    </script>
</html>
<!--echo "Today is " . date("Y-m-d") . "<br>-->