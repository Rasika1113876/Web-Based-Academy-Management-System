<?php

//

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../include/db_connect.php';
$obj = new DataBase;
$trainee_email = filter_input(INPUT_POST, 'Email');
$trainee_pwd = filter_input(INPUT_POST, 'Passward');
//filter_input is a function,,INPUT_POST is a part of a function
//echo $trainee_email;
//echo $trainee_pwd;
$password_sha = $obj->passwordEncryption($trainee_pwd);
$que = "INSERT INTO `system_users`(`client_name`,`client_address`) VALUES ('" . $trainee_email . "','" . $password_sha . "')";
$obj->runQuerySelect($que);

// echo($que);
//mysqli_query($link,$que);
//$temp= mysqli_query($link,$que);
//echo ($temp);
//echo json_encode($temp);




    

        
