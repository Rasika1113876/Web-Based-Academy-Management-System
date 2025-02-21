<?php
session_start();
?>

<?php

require_once '../include/db_connect.php';
$obj = new DataBase;

$query = "SELECT `request_id`, `senders_name`, `recipients_name`, `date`, `Message`,`status` FROM `request` WHERE `recipients_name`='" . $_SESSION['user_Name'] . "' ";


$obj->runQuerySelect($query);

