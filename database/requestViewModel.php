<?php

require_once '../include/db_connect.php';
$obj = new DataBase;

if (isset($_POST['request'])) {
    if ($_POST['request'] == 'selectrequest') {
        $key1 = filter_input(INPUT_POST, 'req_id');
//echo ($request);
        $query = "SELECT `Message` FROM `request` WHERE `request_id`=" . $key1;
//echo ($query);
        $obj->runQuerySelect($query);
    }
 
    if ($_POST['request'] == 'requeststatus') {
         $key1 = filter_input(INPUT_POST, 'req_id');
        $query = "UPDATE `request` SET `status`= 1 WHERE `request_id`=" . $key1;
//echo ($query);
        $obj->runQuery($query);
    }
}