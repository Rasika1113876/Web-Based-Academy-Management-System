<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../include/db_connect.php';
$obj = new DataBase;

$id = filter_input(INPUT_POST,'id');
$query = "DELETE FROM `system_users` WHERE  `c_id` =".$id;
//echo $query;
$obj->runQuery($query);
