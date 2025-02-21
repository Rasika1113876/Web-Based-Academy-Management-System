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
                    <font style="font-weight:600; color: white; font-size:18px;font-family: serif;">REGISTER AS A USER</font>   
                    <br />
                </div>
                <div class="row" id="contentBar">
                    <form class="col-md-12 row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fuid" style="color: white">Trainee ID:</label>
                                <input type="text" class="form-control" id="fu_id" name="fuid" disabled="" >
                            </div>
                            <div class="form-group">
                                <label for="ttl" style="color: white">Title:</label>
                                <div>                                        
                                    <select class="form-control " id="fu_ttl" required>
                                        <option value="">Select Gender </option>
                                        <option value="Mr">Mr</option>
                                        <option value="Mrs">Mrs</option>
                                        <option value="Miss">Miss</option>                                                  
                                    </select>                                                                                        
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="fnm" style="color: white">Trainee Name:</label>
                                <input type="text" class="form-control" id="fu_fnm" name="fnm" placeholder="Enter Full Name" >
                            </div>
                            <div class="form-group">
                                <label for="nm" style="color: white">Session Type:</label>
                                <input type="text" class="form-control" id="fu_nm" name="nm" placeholder="Enter Name with Initials" >
                            </div>                                                           	
                             <div class="form-group">
                                <label for="ttl" style="color: white">No of attempts:</label>
                                <div>                                        
                                    <select class="form-control " id="fu_ttl" required>
                                        <option value="">Select Number </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>                                                  
                                    </select>                                                                                        
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="dob" style="color: white">Session Date:</label>
                                <input type="date" class="form-control" id="fu_dob" name="dob" placeholder="Enter date/month/year" >
                            </div>
                        </div>

                        <div class="col-md-6">
                        </div>

                    </form>

                </div>
            </div>
            <!--end of the sign up section-->


            <!--end of the content--> 

        </div>
    </body>
</html>

