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

$c_id = filter_input(INPUT_POST, 'c_id');
$email = filter_input(INPUT_POST, 'Email');
$passward = filter_input(INPUT_POST, 'Passward');


$que ="UPDATE `system_users` SET `client_name`='".$email."',`client_address`='".$passward."' WHERE `system_users`.`c_id`=".$c_id;
$obj->runQuery($que);
//echo ($quary);

//$result= mysqli_query($link, $quary);
//echo json_encode($result);