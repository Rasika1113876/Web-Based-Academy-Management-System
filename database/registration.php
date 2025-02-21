<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//$link = mysqli_connect('localhost', 'root', '') or die("Couldn't make connection.");
//mysqli_set_charset($link, 'utf8');//unicode
//date_default_timezone_set('Asia/Colombo');
//$db = mysqli_select_db($link, 'agri') or die("Couldn't select database");
//$db = mysqli_select_db($link, 'lakshisalon') or die("Couldn't select database");
// var_dump($link);
require_once '../include/db_connect.php';
$obj = new DataBase; 

$user_id = filter_input(INPUT_POST, 'Acid');
$user_type = filter_input(INPUT_POST, 'Actyp');
$user_fullname = filter_input(INPUT_POST, 'Acfnm');
$user_title = filter_input(INPUT_POST, 'Acttl');
$user_name = filter_input(INPUT_POST, 'Acnm');
$user_address1 = filter_input(INPUT_POST, 'Acadd1');
$user_address2 = filter_input(INPUT_POST, 'Acadd2');
$user_address3 = filter_input(INPUT_POST, 'Acadd3');
$user_nic = filter_input(INPUT_POST, 'Acnic');
$user_dob= filter_input(INPUT_POST, 'Acdob');
$user_telephoneno = filter_input(INPUT_POST, 'Actp');
$user_email = filter_input(INPUT_POST, 'Acemail');
$user_passward = filter_input(INPUT_POST, 'Acpwd');
$user_cpassward = filter_input(INPUT_POST, 'Accpwd');

//filter_input is a function,,INPUT_POST is a part of a function
//echo $trainee_email;
//echo $trainee_pwd;
//echo $trainee_address;
$password_sha = $obj->passwordEncryption($trainee_pwd);
$que = "INSERT INTO `registered_trainee`(`id`, `type`, `fullname`, `title`, `name`, `address1`, `address2`, `address3`, `nic`, `dob`, `telephone_no`, `email`, `passward`, `confirm_passward`) VALUES ('" . $user_id . "','" . $user_type . "','" . $user_fullname . "','" . $user_title . "','" . $user_name . "','" . $user_address1 . "','" . $user_address2 . "','" . $user_address3 . "','" . $user_nic . "','" . $user_dob . "','" . $user_telephoneno . "','" . $user_email . "','" . $password_sha . "','" . $password_sha . "')";
$obj->runQuery($que);
// echo($que);
//mysqli_query($link,$que);
//$temp= mysqli_query($link,$que);
//echo ($temp);
//echo json_encode($temp);

///$result = mysqli_query($link, $que);


    

        
