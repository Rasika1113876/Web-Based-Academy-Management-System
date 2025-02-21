<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap_1.css" rel="stylesheet" type="text/css"/>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link href="css/sweetalert.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div class="container" col-md-12>
            <div class="row">
                <div class="col-md-4"> 
                    <form>
                         <div class="form-group">
                            <label for="exampleInputId">ID</label>
                            <input type="id" class="form-control" id="exampleInputId" aria-describedby="idlHelp" placeholder="Enter id">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your id with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="button" class="btn btn-success" id="regi_save">Submit</button>
                        <button type="button" class="btn btn-success" id="update_user">Update</button>
                    </form>
                </div> 
                <div class="col-md-8"> 
                    <table class="table table-bordered" id="system_users_table" >
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Client ID</th>
                                <th scope="col">Client Name</th>
                                <th scope="col">Client Address</th>
                                <th scope="col">Log Time</th>
                                <th scope="col">Action</th>
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
    <script src="js/loginview.js" type="text/javascript"></script>
    <script src="js/login.js" type="text/javascript"></script>
    <script src="js/login_update.js" type="text/javascript"></script>
    <script src="js/sweetalert.js" type="text/javascript"></script>
    <script type =text/javascript>



        $(window).on('load', function () {
            //alert("Window Loaded"); 
            tableLoad();
        });

        $('#regi_save').click(function () {
            registeredTraineeView();
            /*taking id of the textbox
             var temp=$('#exampleInputPassword1').val();
             alert(temp);*/
            //alert("hkhjkh");
        });
        //update button
         $('#update_user').click(function () {
           //alert("update");
           loginTraineeUpdate();
            /*taking id of the textbox
             var temp=$('#exampleInputPassword1').val();
             alert(temp);*/
            //alert("hkhjkh");
        });


    </script>
</html>
