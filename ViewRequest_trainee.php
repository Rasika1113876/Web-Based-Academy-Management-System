<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WELCOME LAKSHI SALON &ACADEMY</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <!--        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->
        <link href="css/component-chosen.css" rel="stylesheet" type="text/css"/>
        <link href="css/hover.css" rel="stylesheet" type="text/css"/>
        <link href="css/sweetalert.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php require_once './include/navbar_trainee.php'; ?>
        <div class="container" col-md-12>

            <div class="row" style="height:150px">   
                <form class="form-inline">                  
                    <button type="button" class="btn btn-primary" id="send_Message">Send Message</button>
                </form>

            </div>

            <div class="row">
                <div class="col-md-12"> 
                    <table class="table table-hover table-bordered" id="request_table" >
                        <thead class="">
                            <tr>
                                <th scope="col">Request ID</th>
                                <th scope="col">Date</th>
                                <th scope="col">Sender's Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>

                    <div class="modal fade" id="requestModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Message:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
<!--                                        <div class="form-group">
                                            <label for="reply-text" class="col-form-label">Reply:</label>
                                            <textarea class="form-control" id="reply-text"></textarea>
                                        </div>-->
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<!--                                    <button type="button" class="btn btn-primary">Send message</button>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--                load send request modal   -->

                <div class="modal fade" id="sendMsgModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="sender-name" class="col-form-label">Sender:</label>
                                        <input type="text" class="form-control" id="sender-name"  value=" <?php echo ($_SESSION['user_Name']); ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="date" class="col-form-label">Date:</label>
                                        <input type="date" class="form-control" id="request_date" value='<?php echo date("Y-m-d") ?>'>
                                    </div>
                                    <div class="form-group">
                                        <label for="trname" style="color: black">Recipient:</label>
        <!--                                <input type="text" class="form-control" id="trname" name="trname" disabled="">-->
                                        <div>                                        
                                            <select class="form-control-chosen" id="trname">
                                            </select>                                                                                        
                                        </div>                                  
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Message:</label>
                                        <textarea class="form-control" id="message-text"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" id="sendmessage">Send message</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </body>
    <!--links-->
    <script src="js/jQueryjs.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/sweetalert.js" type="text/javascript"></script>
    <script src="js/chosen.jquery.js" type="text/javascript"></script>
    <script src="js/comboxjs.js" type="text/javascript"></script>
    <script src="js/request.js" type="text/javascript"></script>
    <script src="js/Session.js" type="text/javascript"></script>
    <script type =text/javascript>


        $(window).on('load', function () {
            //alert("Window Loaded"); 
            requesttableLoad();
        });

        $('#send_Message').click(function () {
            // alert("aaa");
            $('#sendMsgModal').modal('show');
            $('#sendMsgModal').on('shown.bs.modal', function (e) {
            });
        });


        $('#sendmessage').click(function () {
            requestLoad();
            /*taking id of the textbox
             var temp=$('#exampleInputPassword1').val();
             alert(temp);*/
            //alert("hkhjkh");
        });

        $(window).on('load', function () {
            // alert("window load");
            billPaymentTname_load();     //......To load Trainee Names(trname)to combo box 
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
