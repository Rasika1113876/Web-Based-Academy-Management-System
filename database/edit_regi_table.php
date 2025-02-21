<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$link = mysqli_connect('localhost', 'root', '') or die("Couldn't make connection.");
mysqli_set_charset($link, 'utf8');
date_default_timezone_set('Asia/Colombo');
$db = mysqli_select_db($link, 'lakshisalon') or die("Couldn't select database");



$key1 = filter_input(INPUT_POST, 'k_city_id');

$query = "SELECT `id`, `type`, `fullname`, `title`, `name`, `address1`, `address2`, `address3`, `nic`, `dob`, `telephone_no`, `email`, `passward`, `confirm_passward` FROM `registered_trainee` WHERE `id`=" . $key1;

$result = mysqli_query($link, $query);
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
$data[] = $row;
}

mysqli_free_result($result);
mysqli_close($link);
echo json_encode($data);
