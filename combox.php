
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    </head>
 <body>
        
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
                            <label for="exampleInputCity1">city</label>
                            <input type="city" class="form-control" id="exampleInputCity1" placeholder="City">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="button" class="btn btn-success" id="regi_save">Submit</button>
                        <button type="button" class="btn btn-success" id="update_user">Update</button>
                    </form>
                </div> 
            </div>
        </div>
     <select id="combox_city" class="form-control form-control-sm"></select>
</body>
<script src="js/jQueryjs.js" type="text/javascript"></script>
<script src="js/comboxjs.js" type="text/javascript"></script>
<script type="text/javascript">
 $(window).on('load', function () {
            //alert("Window Loaded");
            getCityCombo();
            });
</script>
</html>

