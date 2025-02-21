<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//$link = mysqli_connect('localhost', 'root', '') or die("Couldn't make connection.");
//mysqli_set_charset($link, 'utf8');
//date_default_timezone_set('Asia/Colombo');
//$db = mysqli_select_db($link, 'lakshisalon') or die("Couldn't select database");

require_once '../include/db_connect.php';
$obj = new DataBase;

$user_id = filter_input(INPUT_POST, 'Acid');
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


$que ="UPDATE `registered_trainee` SET `fullname`='".$user_fullname."',`title`='".$user_title."',`name`='".$user_name."',`address1`='".$user_address1."',`address2`='".$user_address2."',`address3`='".$user_address3."',`nic`='".$user_nic."',`dob`='".$user_dob."',`telephone_no`='".$user_telephoneno."',`email`='".$user_email."' WHERE `registered_trainee`.`id`=".$user_id;
$obj->runQuery($que);
//echo ($quary);

//$result= mysqli_query($link, $quary);
//echo json_encode($result);