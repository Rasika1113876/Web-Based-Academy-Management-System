<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//$link = mysqli_connect('localhost', 'root', '') or die("Couldn't make connection.");
//mysqli_set_charset($link, 'utf8'); //unicode
//date_default_timezone_set('Asia/Colombo');
//$db = mysqli_select_db($link, 'lakshisalon') or die("Couldn't select database");
require_once '../include/db_connect.php';
$obj = new DataBase;
//$link = $obj->sendLink();

if (isset($_POST['key'])) {
    if ($_POST['key'] == 'traineeselect') {
        $query = "SELECT `id`, `fullname`, `nic`, `telephone_no`, `address1` FROM `registered_trainee` WHERE `type`='trainee' AND `status`=0";
        $obj->runQuerySelect($query);
    }

    if ($_POST['key'] == 'trainerselect') {
        $query = "SELECT `id`, `fullname`, `nic`, `telephone_no`, `address1` FROM `registered_trainee` WHERE `type`='trainer' AND `status`=0";
        $obj->runQuerySelect($query);
    }

    if ($_POST['key'] == 'cashierselect') {
        $query = "SELECT `id`, `fullname`, `nic`, `telephone_no`, `address1` FROM `registered_trainee` WHERE `type`='cashier' AND `status`=0";
        $obj->runQuerySelect($query);
    }

//$result = mysqli_query($link, $query);
//$data = array();
//while ($row = mysqli_fetch_assoc($result)) {
    //$data[] = $row;
//}
//var_dump( $data);
//echo json_encode($data);

    if ($_POST['key'] == 'userRegister') {
        $user_id = filter_input(INPUT_POST, 'Acid');
        $user_fullname = filter_input(INPUT_POST, 'Acfnm');
        $user_title = filter_input(INPUT_POST, 'Acttl');
        $user_name = filter_input(INPUT_POST, 'Acnm');
        $user_address1 = filter_input(INPUT_POST, 'Acadd1');
        $user_address2 = filter_input(INPUT_POST, 'Acadd2');
        $user_address3 = filter_input(INPUT_POST, 'Acadd3');
        $batch_name = filter_input(INPUT_POST, 'Batchnm');
        $user_nic = filter_input(INPUT_POST, 'Acnic');
        $user_dob = filter_input(INPUT_POST, 'Acdob');
        $user_telephoneno = filter_input(INPUT_POST, 'Actp');
        $user_email = filter_input(INPUT_POST, 'Acemail');



//filter_input is a function,,INPUT_POST is a part of a function
//echo $trainee_email;
//echo $trainee_pwd;
//echo $trainee_address;

        $que = "UPDATE `registered_trainee` SET `fullname`='" . $user_fullname . "',`title`='" . $user_title . "',`name`='" . $user_name . "',`address1`='" . $user_address1 . "',`address2`='" . $user_address2 . "',`address3`='" . $user_address3 . "',`batch`='" . $batch_name . "',`nic`='" . $user_nic . "',`dob`='" . $user_dob . "',`telephone_no`='" . $user_telephoneno . "',`email`='" . $user_email . "',`status`=1 WHERE `id`='" . $user_id . "' ";
        $obj->runQuery($que);
    }

    
   ////////////////////////////from user_management.js/////////////////////////////////////////
    
     if ($_POST['key'] == 'traineeselectformanage') {
        $query = "SELECT `id`, `fullname`, `nic`, `telephone_no`, `address1` FROM `registered_trainee` WHERE `type`='trainee' AND `status`=1";
        $obj->runQuerySelect($query);
    }

    if ($_POST['key'] == 'trainerselectformanage') {
        $query = "SELECT `id`, `fullname`, `nic`, `telephone_no`, `address1` FROM `registered_trainee` WHERE `type`='trainer' AND `status`=1";
        $obj->runQuerySelect($query);
    }

    if ($_POST['key'] == 'cashierselectformanage') {
        $query = "SELECT `id`, `fullname`, `nic`, `telephone_no`, `address1` FROM `registered_trainee` WHERE `type`='cashier' AND `status`=1";
        $obj->runQuerySelect($query);
    }
   if ($_POST['key'] == 'loadInsPans') {
        $ins_plan = filter_input(INPUT_POST, 'ins_plan');
        $tot_course_fee = filter_input(INPUT_POST, 'tot_course_fee');
        $no_of_ins = filter_input(INPUT_POST, 'no_of_ins');
        $amount_per_ins = filter_input(INPUT_POST, 'amount_per_ins');
  
//filter_input is a function,,INPUT_POST is a part of a function
//echo $trainee_email;
//echo $trainee_pwd;
//echo $trainee_address;
       
        $que = "INSERT INTO `installment_plan`( `ins_plan`, `total_course_fee`, `no_of_ins`, `amount_per_ins`) VALUES ('" . $ins_plan . "','" . $tot_course_fee . "','" . $no_of_ins . "','" . $amount_per_ins . "')";
        $obj->runQuery($que);
    }
}    