
    <nav class="navbar navbar navbar-expand-lg " style="height: 150px; background-color: #000">
        <!--    <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>-->
        <div class="collapse navbar-collapse" id="nav-content" style="" >   
            <ul class="navbar-nav" style="width: 1000px;">
                <li class="nav-item">
                    <img src="images/logo.png" alt="" id="logo" style=" height: 80px; margin-left: 50px;"/>
                </li>
                <li class="nav-item">
                    <br>
                    <div class="row" style="margin-left: 200px; width: 500px;" >
                        <font style="align-items: center; color: #ffffff; font-weight: bolder; font-size:35px; font-family: serif;" >USER PROFILE</font>
                    </div>
                </li>  
                <li>
                    <div class="row" style="margin-left: 300px; margin-top: 25px;" >
                        <form class="navbar-form">
                            <div class="form-group" style="color: white;">
                                <label for="Cid" style="color: white; font-family: serif;">You are logged in as <font style="color: #ffffff;">ADMINISTRATOR</font></label>
                                <br>
                                <?php echo ($_SESSION['user_id']); ?>
                                <?php echo ($_SESSION['user_name_r']); ?>
                            </div>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="row" style="margin-left: 50px; margin-top: 40px;" >
                             <!--                <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['name'] ?></a></li>-->
                    <button type='button' class='btn btn-secondary btnLogout' value='<?php echo ($_SESSION['user_id']); ?>' id="LogOut"><img src="svg/logout.svg" width="20" height="20"></button>
                    </div>
                    </li>
            </ul>
        </div>
    </nav>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

