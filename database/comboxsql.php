<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../include/db_connect.php';
$obj = new DataBase;

if (isset($_POST['request'])) {
    
    
    if ($_POST['request'] == 'select_tName') {
        //       $data_array = array();
        $que = "SELECT `id`, `name` FROM `registered_trainee` ";

        $obj->runQuerySelect($que);
    }

    if ($_POST['request'] == 'select_tID') {
        //       $data_array = array();
        $que = "SELECT `id`, `name` FROM `registered_trainee` ";

        $obj->runQuerySelect($que);
    }
/////////////////////////////////////////MODIFICATION SECTION///////////////////////////////////////////
    
    //////////////////////////////load user type to combobox///////////////////////////////////////////
    if ($_POST['request'] == 'select_Utype') {
        //       $data_array = array();
        $que = "SELECT `type` FROM `registered_trainee` GROUP BY ( `type`) ";

        $obj->runQuerySelect($que);
    }
    
    /////////////////////////////////get user count according to user type//////////////////////////////

        if ($_POST['request'] == 'getcount') {
            $selectbyID = $_POST['key'];

            $query = "SELECT COUNT(`type`)  As total from registered_trainee where `type`= '$selectbyID'"; 
                            
            $obj->runQuerySelect($query);
    }
    
    ////////////////////////////////load user details according to user type////////////////////////////
     if ($_POST['request'] == 'getData') {
        $selectbyID = $_POST['key'];

        $query = "SELECT `id`, `type`, `fullname`, `nic`, `telephone_no`, `address1` FROM `registered_trainee` WHERE `type` = '$selectbyID' 
                            ";
        //echo $select_Query;
        $obj->runQuerySelect($query);
    }
}