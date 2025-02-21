<?php

require_once '../include/db_connect.php';
$obj = new DataBase;

$send_name = filter_input(INPUT_POST, 'send_name');
$req_date = filter_input(INPUT_POST, 'req_date');
$recp_name = filter_input(INPUT_POST, 'recp_name');
$msg_text = filter_input(INPUT_POST, 'msg_text');


//filter_input is a function,,INPUT_POST is a part of a function
//echo $trainee_email;
//echo $trainee_pwd;
//echo $trainee_address;

$que = "INSERT INTO `request`(`senders_name`, `recipients_name`, `date`, `Message`) VALUES ('" . $send_name . "','" . $recp_name . "','" . $req_date . "','" . $msg_text . "')";

$obj->runQuery($que);