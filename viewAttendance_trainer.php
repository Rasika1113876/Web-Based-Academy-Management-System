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
                        <input type="date" class="form-control" id="viewcourse_date"  placeholder="Enter Date" >
                    </div>
                    <div class="col">
                        <label for="date" style="color: white">Trainer ID:</label>
                        <input type="text" class="form-control" id="viewcourse_trainer_id" placeholder="">
                    </div>
                    <div class="col">
                        <label for="date" style="color: white">Course Title:</label>
                        <input type="text" class="form-control" id="viewcourse_title" placeholder="">
                    </div>
                    <div class="col" style="margin-left: 50px; margin-top: 30px">
                        <label for="date" style="color: white"></label>
                        <button type="button"class="btn btn-success" id="btn_viewattendance">View</button>
                        <button type="button"class="btn btn-success" id="btn_printattendance">print</button>
                    </div>
                </div>
            </form>
            <div class="row" style="height:50px">     
            </div>

            <div class="row">
                <div class="col-md-12"> 
                    <table class="table table-hover table-bordered" id="viewattendance_table" >
                        <thead class="">
                            <tr>
                                <th scope="col">Trainee ID</th>
                                <th scope="col">Trainee Name</th>
                                <th scope="col">Action</th>
                                <th scope="col">Reason</th>
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
    <script src="js/sweetalert.js" type="text/javascript"></script>
    <script src="js/markAttendaence.js" type="text/javascript"></script>
    <script src="js/Session.js" type="text/javascript"></script>
    <script type =text/javascript>

        $('#btn_viewattendance').click(function () {
            //alert('HI');
            viewAttendancetable();
            TrainerIDandCourseTitle_load();

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


