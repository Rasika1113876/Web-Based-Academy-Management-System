<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/sweetalert.css" rel="stylesheet" type="text/css"/>
    </head>
    <body data-spy="scroll" data-target=".leftnavbar" data-offset="50" >
        <!--        <div class="container" col-md-12>-->
        <div class="row">
            <div class="col-md-1" id="leftcol" >

            </div>
            <div class="col-md-10" id="middlecol" >
                <?php require_once './include/navbar.php'; ?>
                <div class="row" id="contentBar" style="height: 1000px" >

                    <div class="col-md-9"> 
                        <!--                        <div class="row" style="height: 95px"></div>-->
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="images/bride1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/bride 2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/bride3.jpg" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/bride4.jpg" alt="Second slide">                                
                                </div>     
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3"> 
                        <div class="row" style="height: 125px"></div>  
                        <h4><font style="font-weight:600; color: white; font-size:18px;font-family: serif;">LOGIN</font><font color="#fff" face="Comic Sans MS, cursive" size="3">Registered Users</font></h4>
                        <br/>                        
                        <font color="#FFFFFF" size="3">If you have an account with us, please log in.</font>
                        <br/>
                        <br/>
                        <form>
                            <div class="form-group">
                                <label for="username" style="color:white">User Name</label>
                                <input type="email" class="form-control" id="exampleusername" name="email" placeholder="Enter User Name" >
                                <h6 id="email_error" style="color: red;"></h6>
                                <h6 id="email_right" style="color: #00FF00;"></h6>
<!--                                <small id="usernameHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>-->
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" style="color:white">Password</label>
                                <input type="password" class="form-control" id="examplePassword" placeholder="Password">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1" style="color:#FFFFFF">Check me out</label>
                            </div>
                            <button type="button" class="btn btn-primary" id="regi_save">Login</button>
                            <a style="color: white" href="RegisterAsaTrainee.php">Register As a Trainee</a>
                        </form>
                    </div>
                </div>
            </div> 

            <div class="col-md-1" id="rightcol">
            </div>

        </div>
        <!--        </div>-->
    </body>
    <script src="js/jQueryjs.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/sweetalert.js" type="text/javascript"></script>
    <script src="js/Session.js" type="text/javascript"></script>
    <script type =text/javascript>

        $('#regi_save').click(function () {
            //alert("aaa");
            var cus_username = $('#exampleusername').val();
            var cus_passward = $('#examplePassword').val();
            userLogin(cus_username, cus_passward);
        });

        //begin of the email validation
                                            $('#exampleusername').on('keyup', function () {
                                                if ($(this).val() !== "") {
                                                    var valid = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/.test(this.value) && this.value.length;
                                                    if (valid) {
                                                        $('#email_error').html('');
                                                        $('#email_right').html('<i class="glyphicon glyphicon-ok-sign"></i> Valid e-mail address...');
                                                        $('#regi_save').removeClass('d-none');
                                                    } else {
                                                        $('#email_right').html('');
                                                        $('#email_error').html('<i class="glyphicon glyphicon-warning-sign"></i> e-mail address is not valid...');
                                                        $('#regi_save').addClass('d-none');
                                                    }

                                                } else {
                                                    $('#em_val_ok').html('');
                                                    $('#em_val_err').html('');
                                                    $('#regi_save').removeClass('d-none');
                                                }
                                            });
//end of the email validation      


    </script>
</html>