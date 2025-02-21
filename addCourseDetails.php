
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
            <?php require_once './include/navbar_admin.php'; ?>
            <!--begin of the section 1-->
            <div class="container" id="section_1" style="height: 700px">
                <div class="row" style="height: 100px"></div>
                <div class="row" style="height: 100px; align-content: center;" >
                    <font style="font-weight:600; color: white; font-size:18px;font-family: serif;">ENTER COURSE DETAILS</font>   
                    <br />
                </div>
                <div class="row" id="contentBar">
                    <form class="col-md-12 row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="trid" style="color: white">Trainer ID:</label>
                                <input type="text" class="form-control" id="tr_id" name="trid" disabled="" >
                            </div>
                           
                            <div class="form-group">
                                <label for="trnm" style="color: white">Full Name:</label>
                                <input type="text" class="form-control" id="tr_nm" name="trnm" placeholder="" >
                            </div>
                            <div class="form-group">
                                <label for="coursettl" style="color: white">Course Title:</label>
                                <div>                                        
                            <select class="form-control " id="course_typ" required>
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
                            <div class="form-group">
                                <label for="nm" style="color: white">Number of attendance:</label>
                                <input type="text" class="form-control" id="at_nm" name="nm" placeholder="" >
                            </div>                                                           	
                        </div>

                        <div class="col-md-6">
                           
                            <div class="form-group">
                                <label for="c_date" style="color: white">Date:</label>
                                <input type="date" class="form-control" id="c_date" name="course date" placeholder="" >
                            </div>
                            <div class="form-group">
                                <label for="c_des" style="color: white">Description:</label>
                                <input type="text" class="form-control" id="c_des" name="c_des" placeholder="" >
                            </div>
                            <div> 
                                <button type="button"class="btn btn-secondary" id="btn_save"><img src="svg/save.svg" width="30" height="30">&nbsp;save</button>
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
    <script src="js/sweetalert.js" type="text/javascript"></script>
    <script type =text/javascript>

    </script>
</html>



