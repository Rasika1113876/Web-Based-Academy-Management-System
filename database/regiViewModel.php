<?php
session_start();
?>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../include/db_connect.php';
$obj = new DataBase;
 $key1 = filter_input(INPUT_POST, 'k_city_id');
//echo ($key1);
$query = "SELECT `id`,`fullname`, `title`, `name`, `address1`, `address2`, `address3`, `nic`, `dob`, `telephone_no`, `email` FROM `registered_trainee` WHERE `id`=" . $key1;
//echo ($query);
$obj->runQuerySelect($query);
