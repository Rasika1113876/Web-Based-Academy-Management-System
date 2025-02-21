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
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="script.js"></script>
    </head>
    <body>
        <?php require_once './include/navbar_trainer.php'; ?>
        <div class="row" style="height:50px">            
        </div>
        <div class="row">            
            <div class="col-md-1">                   
            </div>
            <div class="content-wrapper col-md-10" style="background-color: #c7ddef;">
                <div class="row" style="height:20px">            
                </div>
                <!-- Content Header (Page header) -->
                <legend style="color: black;font-size: 30px;">Profile</legend>
                <!--begin row 1-->
                <div class="row" style="height:200px">
                    <div class="col-md-1">                   
                    </div>
                    <div class="col-md-2">  
<!--                        <table class="table table-hover table-bordered" id="tbl_profileimage" s >
                            <thead class="">
                                <tr>                               
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>-->
                         <img id="profileimgLoad" src="images/icon1.jpg" alt="" class="img-thumbnail"/> 
                    </div>
                    <div class="col-md-9">                   
                    </div>
                </div>
                <!--end row 1-->
                <!--begin row 2-->

                <div class="row" style="height:50px">                
                </div>
                <div class="row" style="height:400px">

                    <div class="col-md-12"> 
                        <div class="row" style="height:30px">                
                        </div>
                        <div class="row"> 
                             <div class="col-md-1">                   
                            </div>
                            <div class="col-md-3">
                                <div class="card bg-light mb-3" style="width: 400px;">
                                    <div class="card-header">Personal Details</div>
                                    <div class="card-body row" style="height: 40px">
                                        <label for="staticFullname" class="col-sm-4 col-form-label" >Full Name:</label>
                                        <div class="col-sm-40">                                       
                                            <input type="text" readonly class="form-control-plaintext" id="staticFullname" value="">
                                        </div>
                                    </div>

                                    <div class="card-body row" style="height: 40px">
                                        <label for="inputmarks2" class="col-sm-4 col-form-label">NIC:</label>
                                        <div class="col-sm-40">                                        
                                            <input type="text" readonly class="form-control-plaintext" id="staticNIC" value="">
                                        </div>
                                    </div>
                                    <div class="card-body row" style="height: 40px">
                                        <label for="staticDOB" class="col-sm-4 col-form-label" >DOB:</label>
                                        <div class="col-sm-40">                                       
                                            <input type="text" readonly class="form-control-plaintext" id="staticDOB" value="">
                                        </div>
                                    </div>
                                    <div class="card-body row" style="height: 40px">
                                        <label for="staticAddress1" class="col-sm-4 col-form-label" >Address1:</label>
                                        <div class="col-sm-40">                                       
                                            <input type="text" readonly class="form-control-plaintext" id="staticAddress1" value="">
                                        </div>
                                    </div>

                                    <div class="card-body row" style="height: 40px">
                                        <label for="staticAddress2" class="col-sm-4 col-form-label" >Address2:</label>
                                        <div class="col-sm-40">
                                            <input type="text" readonly class="form-control-plaintext" id="staticAddress2" value="">
                                        </div>
                                    </div>

                                    <div class="card-body row" style="height: 40px">
                                        <label for="staticAddress3" class="col-sm-4 col-form-label" >Address3:</label>
                                        <div class="col-sm-40">
                                            <input type="text" readonly class="form-control-plaintext" id="staticAddress3" value="">
                                        </div>
                                    </div>

                                    <div class="card-body row">
                                        <label for="staticPosition" class="col-sm-4 col-form-label" >Position:</label>
                                        <div class="col-sm-40">
                                            <input type="text" readonly class="form-control-plaintext" id="staticPosition" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="modal fade" id="imageUploadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Upload Image</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="uploadimage" action="" method="post" enctype="multipart/form-data">
                                                <div id="image_preview"><img id="previewing" src="noimg.png" /></div>
                                                <hr id="line">
                                                <div id="selectImage">
                                                    <label>Select Your Image</label><br/>
                                                    <input type="file" name="cust_file" id="file" required />
                                                    <input type="submit" value="Upload" class="submit" />
                                                </div>
                                                <h4 id='loading' >loading..</h4>
                                                <div id="message"></div>
                                                 <div id="selectImage">                                                  
                                                    <input type="text" name="profUserID"  value=" <?php echo ($_SESSION['user_id']); ?>" />                                                   
                                                </div>
                                            </form>
                                        </div>
                                         <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal" value="Reload Page" onClick="document.location.reload(true)">Close</button>                                  
                                    </div>
                                    </div>                                  
                                </div>
                            </div>


                            <div class="col-md-1">                   
                            </div>
                            <div class="col-md-3">
                                <div class="card bg-light mb-3" style="width: 400px; height: 200px">
                                    <div class="card-header">Contact Details</div>
                                    <div class="card-body row" style="height: 40px">
                                        <label for="staticTelephoneno1" class="col-sm-4 col-form-label" >Contact No:</label>
                                        <div class="col-sm-40">
                                            <input type="text" readonly class="form-control-plaintext" id="staticTelephoneno1" value="">
                                        </div>
                                    </div>                                
                                    <div class="card-body row">
                                        <label for="staticEmail" class="col-sm-4 col-form-label" >Email:</label>
                                        <div class="col-sm-40">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="">
                                        </div>
                                    </div>  
                                </div>
                            </div>
                            
                            <div class="modal fade " id="editusrModal" style="width:100%;height: 100%;" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <font style="font-size: larger; color: black; font-weight: bold;">USER UPDATE FORM</font>
                                            <button type="button" class="close"  data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <div class="row ">                                        
                                                    <div class= "col-md-12 col-xs-12 ">
                                                        <div class="span6" style="margin-top: 0px; margin-right: 10px; margin-bottom: 25px;">
                                                            <div class="box">  
                                                                <div class="box-content box-nomargin">


                                                                    <div class="row" id="contentBar">
                                                                        <!--begin of the form-->
                                                                        <form class="col-md-12 row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="uid" style="color: black; font-weight: 500;">User ID:</label>
                                                                                    <input type="text" class="form-control" id="u_id" name="uid" readonly>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="fnm" style="color: black; font-weight: 500;">Full Name:</label>
                                                                                    <input type="text" class="form-control" id="u_fnm" name="fnm" >
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="ttl" style="color: black; font-weight: 500;">Title:</label>
                                                                                    <input type="text" class="form-control" id="u_ttl" name="ttl" >
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="nm" style="color: black; font-weight: 500;">Name with Initials:</label>
                                                                                    <input type="text" class="form-control" id="u_nm" name="nm" >
                                                                                </div>        
                                                                                <div class="form-group">
                                                                                    <label for="nic" style="color: black; font-weight: 500;">NIC:</label>
                                                                                    <input type="text" class="form-control" id="u_nic" name="nic" >
                                                                                </div>  
                                                                                <div class="form-group">
                                                                                    <label for="dob" style="color: black; font-weight: 500;">Date of Birth:</label>
                                                                                    <input type="text" class="form-control" id="u_dob" name="dob">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6"> 
                                                                                <div class="form-group">
                                                                                    <label for="add" style="color: black; font-weight: 500;">Address:</label>
                                                                                    <input type="text" class="form-control" id="u_add1" name="add1" >
                                                                                </div>
                                                                                <div class="form-group">                                    
                                                                                    <input type="text" class="form-control" id="u_add2" name="add2" >
                                                                                </div>
                                                                                <div class="form-group">                                    
                                                                                    <input type="text" class="form-control" id="u_add3" name="add3" >
                                                                                </div>  
                                                                                <div class="form-group">
                                                                                    <label for="tp" style="color: black; font-weight: 500;">Telephone No:</label>
                                                                                    <input type="text" class="form-control" id="u_tp" name="tp">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="email" style="color: black; font-weight: 500;">Email:</label>
                                                                                    <input type="email" class="form-control" id="u_email" name="email" >
                                                                                </div>                            
                                                                                <div class="form-group"> 
                                                                                    <button class="btn btn-success btn_update" id="btn_update" value="Reload Page" onClick="document.location.reload(true)"><i class="fa fa-save fa-lg"></i>&nbsp;UPDATE</button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                        <!--end of the form-->
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-1">                   
                            </div>
                            <div class="col-md-3">
                                <div class="card bg-light mb-3" style="width: 200px; height: 200px">
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary" id="update_detail">Update Details</button>
                                        <br/>
                                        <br/>
                                        <button type="button" class="btn btn-primary" id="uploadImage">Upload Image</button>
                                        <br/>
                                        <br/>
                                        <button type="button" class="btn btn-primary" id="sendMessage" onclick="window.location.href = 'ViewRequest_trainer.php';">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--end row 2-->

                <!--begin row 3-->
                <div class="row" style="height:50px">
                </div>
                <!--end row 3-->              
            </div>
            <div class="col-md-1">                   
            </div>
        </div>
        <!-- /.content-wrapper -->


    </body>
   <script src="js/jQueryjs.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/sweetalert.js" type="text/javascript"></script>
<script src="js/profile.js" type="text/javascript"></script>
<script src="js/regi_update.js" type="text/javascript"></script>
<script src="js/Session.js" type="text/javascript"></script>
<script type =text/javascript>

    $('#uploadImage').click(function () {
        // alert("aaa");
        $('#imageUploadModal').modal('show');
        $('#imageUploadModal').on('shown.bs.modal', function (e) {
        });
    });

    $(window).on('load', function () {
        // alert("aaa");
        profileLoad();

    });

    $(window).on('load', function () {
        // alert("aaa");
        get_categorized_images();

    });

    $(document).ready(function (e) {
        $("#uploadimage").on('submit', (function (e) {
            e.preventDefault();
            $("#message").empty();
            $('#loading').show();
            $.ajax({
                url: "database/imageUploaddb.php", // Url to which the request is send
                type: "POST", // Type of request to be send, called as method
                data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                contentType: false, // The content type used when sending data to the server.
                cache: false, // To unable request pages to be cached
                processData: false, // To send DOMDocument or non processed data file it is set to false
                success: function (data)   // A function to be called if request succeeds
                {
                    $('#loading').hide();
                    $("#message").html(data);
                }
            });
        }));

        // Function to preview image after validation
        $(function () {
            $("#file").change(function () {
                $("#message").empty(); // To remove the previous error message
                var file = this.files[0];
                var imagefile = file.type;
                var match = ["image/jpeg", "image/png", "image/jpg"];
                if (!((imagefile == match[0]) || (imagefile == match[1]) || (imagefile == match[2])))
                {
                    $('#previewing').attr('src', 'noimage.png');
                    $("#message").html("<p id='error'>Please Select A valid Image File</p>" + "<h4>Note</h4>" + "<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
                    return false;
                } else
                {
                    var reader = new FileReader();
                    reader.onload = imageIsLoaded;
                    reader.readAsDataURL(this.files[0]);
                }
            });
        });
        function imageIsLoaded(e) {
            $("#file").css("color", "green");
            $('#image_preview').css("display", "block");
            $('#previewing').attr('src', e.target.result);
            $('#previewing').attr('width', '250px');
            $('#previewing').attr('height', '230px');
        }
        ;
    });
    
       
        /////////////////////update user details//////////////////////////////////////////////////////

     $('#update_detail').click(function () {
            
//          var u_id = $(this).val();
            //alert($(this).val());
            $('#editusrModal').modal('show');
            $('#editusrModal').on('shown.bs.modal', function (e) {
                $.post("database/Profile.php",
                     {userProfile: 'getDetailsToUpdate'},
                    function (e) {
                        $.each(e, function (index, table_row) {
                            $('#u_id').val(table_row.id);
                            $('#u_fnm').val(table_row.fullname);
                            $('#u_ttl').val(table_row.title);
                            $('#u_nm').val(table_row.name);
                            $('#u_add1').val(table_row.address1);
                            $('#u_add2').val(table_row.address2);
                            $('#u_add3').val(table_row.address3);
                            $('#u_nic').val(table_row.nic);
                            $('#u_dob').val(table_row.dob);
                            $('#u_tp').val(table_row.telephone_no);
                            $('#u_email').val(table_row.email);
                        });


                    }, "json");
            });

//                  
           
        });
        
        $('#btn_update').click(function () {
//           alert("update");
        registeredTraineeUpdate();
        /*taking id of the textbox
         var temp=$('#exampleInputPassword1').val();
         alert(temp);*/
        //alert("hkhjkh");
    });


    $('#LogOut').click(function () {

        Logout();
    });
</script>
</html>
