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

$key1 = filter_input(INPUT_POST, 'k_city_id');

$que = "SELECT `c_id`, `client_name`, `client_address`, `log_time` FROM `system_users` WHERE `c_id`=" . $key1;

$obj->runQuerySelect($que);

//$result = mysqli_query($link, $query);
//$data = array();
//while ($row = mysqli_fetch_assoc($result)) {
//$data[] = $row;
//}

//mysqli_free_result($result);
//mysqli_close($link);
//echo json_encode($data);