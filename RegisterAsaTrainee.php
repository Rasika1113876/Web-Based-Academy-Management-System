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

        <div class="col-md-12" id="contentBar">
            <?php require_once './include/navbar.php'; ?>
            <!--begin of the section 1-->
            <div class="container" id="section_1" style="height: 700px">
                <div class="row" style="height: 100px"></div>
                <div class="row" style="height: 100px; align-content: center;" >
                    <font style="font-weight:600; color: white; font-size:18px;font-family: serif;">REGISTER AS A TRAINEE</font>   
                    <br />
                </div>
                <div class="row" id="contentBar">
                    <form class="col-md-12 row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fuid" style="color: white">User ID:</label>
                                <input type="text" class="form-control" id="u_id" name="fuid" disabled="" >
                            </div>
                            <div class="form-group">
                                <label for="utp" style="color: white">User Type:</label>
                                <input type="text" class="form-control" id="u_typ" name="utp" placeholder="" value="Trainee">                               
                            </div>
                            <div class="form-group">
                                <label for="fnm" style="color: white">Full Name:</label>
                                <input type="text" class="form-control" id="u_fnm" name="fnm" placeholder="Enter Full Name" >
                            </div>
                            <div class="form-group">
                                <label for="ttl" style="color: white">Title:</label>
                                <div>                                        
                                    <select class="form-control " id="u_ttl" required>
                                        <option value="">Select Gender </option>
                                        <option value="Mr">Mr</option>
                                        <option value="Mrs">Mrs</option>
                                        <option value="Miss">Miss</option>                                                  
                                    </select>                                                                                        
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nm" style="color: white">Name with Initials:</label>
                                <input type="text" class="form-control" id="u_nm" name="nm" placeholder="Enter Name with Initials" >
                            </div>                                                           	
                            <div class="form-group">
                                <label for="add" style="color: white">Address:</label>
                                <input type="text" class="form-control" id="u_add1" name="add1" placeholder="Enter Address1" >
                            </div>
                            <div class="row" style="height:16px"></div>
                            <div class="form-group">                                    
                                <input type="text" class="form-control" id="u_add2" name="add2" placeholder="Enter Address2" >
                            </div>
                            <div class="row" style="height:16px"></div>
                            <div class="form-group">                                    
                                <input type="text" class="form-control" id="u_add3" name="add3" placeholder="Enter Address3" >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nic" style="color: white">NIC:</label>
                                <input type="text" class="form-control" id="u_nic" name="nic" maxlength="10" placeholder="Enter NIC Number" >
                                <h6 id="nic_val" style="color: red;"></h6>
                                <h6 id="nic_valok" style="color: #00FF00;"></h6>
                            </div>
                            <div class="form-group">
                                <label for="dob" style="color: white">Date of Birth:</label>
                                <input type="date" class="form-control" id="u_dob" name="dob" placeholder="Enter date/month/year" >
                            </div>
                            <div class="form-group">
                                <label for="tp" style="color: white">Telephone No:</label>
                                <input type="text" class="form-control" id="u_tp" name="tp" onkeypress="return isNumberKey(event)" maxlength="10" placeholder="Enter Telephone Number" >
                                <h6 id="phone_error" style="color: red;"></h6>
                                <h6 id="phone_right" style="color: #00FF00;"></h6>
                            </div>
                            <div class="form-group">
                                <label for="email" style="color: white">Email:</label>
                                <input type="email" class="form-control" id="u_email" name="email" placeholder="Enter email" >
                                <h6 id="email_error" style="color: red;"></h6>
                                <h6 id="email_right" style="color: #00FF00;"></h6>
                            </div>
                            <div class="form-group">
                                <label for="pwd" style="color: white">Password:</label>
                                <input type="password" class="form-control" id="u_pwd" name="pwd" placeholder="Enter password" >
                            </div>
                            <div class="form-group">
                                <label for="pwd" style="color: white">Confirm Password:</label>
                                <input type="password" class="form-control" id="u_cpwd" name="cpwd" placeholder="Re-Enter password" >
                                <h6 id="pwd_error" style="color: red;"></h6>
                                <h6 id="pwd_right" style="color: #00FF00;"></h6>
                            </div>
                            <div> 
                                <button type="button"class="btn btn-secondary" id="btn_signUp"><img src="svg/save.svg" width="30" height="30">&nbsp;SIGN UP</button>
                                <button class="btn btn-primary" id="btn_clear"><img src="svg/si-glyph-delete1.svg" width="30" height="30">&nbsp;CLEAR</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
            <!--end of the sign up section-->


            <!--end of the content--> 

        </div>
    </body>
     <script src="js/jQueryjs.js" type="text/javascript"></script>
    <script src="js/registration.js" type="text/javascript"></script>
<!--    <script src="js/regiview.js" type="text/javascript"></script>-->
<!--    <script src="js/regi_update.js" type="text/javascript"></script>-->
    <script src="js/sweetalert.js" type="text/javascript"></script>
    <script src="js/Session.js" type="text/javascript"></script> 
    <script type =text/javascript>


////
////                    $(window).on('load', function () {
////                        //alert("Window Loaded"); 
////                        regiLoad();
////
//                    });
//
//                                    $('#btn_signUp').click(function () {
//                                        registrationTraineeLoad();
//                                        /*taking id of the textbox
//                                         var temp=$('#exampleInputPassword1').val();
//                                         alert(temp);*/
//                                        //alert("hkhjkh");
//                                    });

//                    //update button
//                    $('#update_user').click(function () {
////           alert("update");
//                        registeredTraineeUpdate();
//                        /*taking id of the textbox
//                         var temp=$('#exampleInputPassword1').val();
//                         alert(temp);*/
//                        //alert("hkhjkh");
//                    });


                                    //ADMIN LOGOUT
                                    $('#LogOut').click(function () {

                                        swal({
                                            title: "Do you realy want to logout ?",
                                            text: "You have to Log In again!",
                                            type: "warning",
                                            showCancelButton: true,
                                            confirmButtonClass: "btn-danger",
                                            confirmButtonText: "Logout",
                                            closeOnConfirm: false
                                        },
                                                function () {

                                                    Logout();
                                                });
                                    });

//To Clear the form data
                                    $('#btn_clear').click(function () {
                                        //alert('hi');

                                        //swal start
                                        swal({
                                            title: "Are you sure?",
                                            text: "Your will not be able to recover this form data!",
                                            type: "warning",
                                            showCancelButton: true,
                                            confirmButtonClass: "btn-danger",
                                            confirmButtonText: "Yes, delete it!",
                                            closeOnConfirm: false
                                        },
                                                function () {
                                                    swal("DClearUserDataeleted!", "Your form data has been deleted.", "success");
                                                    ClearUserData();
                                                });
                                        //swal end             
                                    });

//To check empty fields///////////////////////////////////////////////////

                                    $('#btn_signUp').click(function () {
                                        //alert("OK");
                                        if ((($('#u_typ').val()) === "Select") || (($('#u_fnm').val()) === "")
                                                || (($('#u_ttl').val()) === "Select") || (($('#u_nm').val()) === "")
                                                || (($('#u_add1').val()) === "") || (($('#u_add2').val()) === "")
                                                || (($('#u_add3').val()) === "") || (($('#u_nic').val()) === "")
                                                || (($('#u_dob').val()) === "") || (($('#u_tp').val()) === "")
                                                || (($('#u_email').val()) === "") || (($('#u_pwd').val()) === "")|| (($('#u_cpwd').val()) === ""))//check empty fields
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
                                                             registrationTraineeLoad();//SAVE function
                                                        } else {
                                                            swal("Cancelled", "Your record has not been saved :)", "error");
                                                        }
                                                    });
                                            //swal end 
                                        }
                                    });
////////////////////////////////////////////////////////////////////////
////////////...............VALIDATIONS...............///////////////////
////////////////////////////////////////////////////////////////////////

//begin of phone number validation
                                    $('#u_tp').on('keyup', function () {
                                        //alert('check');
                                        var phonecusregval = $(this).val().length;
                                        if (phonecusregval == '0' || phonecusregval == '10') {
                                            $('#btn_signUp').removeClass('d-none');
                                            if (phonecusregval == '10') {
                                                $('#phone_error').html('');
                                                $('#phone_right').html('<i class="glyphicon glyphicon-ok-sign"> Valid phone number</i> ');
                                            } else {
                                                $('#phone_error').html('');
                                                $('#btn_signUp').removeClass('d-none');
                                                $('#phone_right').html('<i class="glyphicon glyphicon-ok-sign"> No phone number entered. But you can save.! </i> ');
                                            }
                                        } else {
                                            $('#btn_signUp').addClass('d-none');
                                            $('#phone_error').html('<i class="glyphicon glyphicon-warning-sign"></i> Sorry... Invalid Phone Number');
                                            $('#phone_right').html('');
                                        }
                                    });

                                    function isNumberKey(evt) {
                                        var charCode = (evt.which) ? evt.which : event.keyCode;
                                        if (charCode != 46 && charCode > 31
                                                && (charCode < 48 || charCode > 57))
                                            return false;
                                        return true;
                                    }
//end of phone number validation

//begin of passsword validation
                                    $('#u_cpwd').on('keyup', function () {
                                        //alert("OK");
                                        setTimeout(function () {
                                            var pass1 = $('#u_pwd').val();
                                            var pass2 = $('#u_cpwd').val();
                                            if (pass1 != pass2) {
                                                $('#btn_signUp').addClass('d-none');
                                                $('#pwd_error').html("sorry...password does not match");
                                                //$('#pwd_right').slideUp();

                                            } else {
                                                $('#btn_signUp').removeClass('d-none');
                                                $('#pwd_error').html("");
                                                //$('#pwd_right').slideDown();
                                            }
                                        }, 500);
                                    });
//end of passsword validation

//begin of nic validation
                                    $('#u_nic').on('keyup', function () {
                                        var nic_no = document.getElementById('u_nic').value;
                                        if (/^[0-9]{9}[VvXx]{1}$/.test(nic_no) || nic_no.length < 1) {
                                            $('#nic_val').html('');
                                            $('#nic_valok').html('<i class="glyphicon glyphicon-ok-sign"></i> Valid NIC number.');
                                            $('#btn_signUp').removeClass('d-none');
                                        } else {
                                            $('#nic_valok').html('');
                                            $('#nic_val').html('<i class="glyphicon glyphicon-warning-sign"></i> NIC number is not Valid.');
                                            $('#btn_signUp').addClass('d-none');
                                        }
                                    });
//end of nic validation

//begin of the email validation
                                    $('#u_email').on('keyup', function () {
                                        if ($(this).val() !== "") {
                                            var valid = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/.test(this.value) && this.value.length;
                                            if (valid) {
                                                $('#email_error').html('');
                                                $('#email_right').html('<i class="glyphicon glyphicon-ok-sign"></i> Valid e-mail address...');
                                                $('#btn_signUp').removeClass('d-none');
                                            } else {
                                                $('#email_right').html('');
                                                $('#email_error').html('<i class="glyphicon glyphicon-warning-sign"></i> e-mail address is not valid...');
                                                $('#btn_signUp').addClass('d-none');
                                            }

                                        } else {
                                            $('#em_val_ok').html('');
                                            $('#em_val_err').html('');
                                            $('#btn_signUp').removeClass('d-none');
                                        }
                                    });
//end of the email validation      


    </script>
</html>


