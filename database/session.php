<?php

require_once '../include/db_connect.php';

$obj = new DataBase();


if (array_key_exists("logsystem", $_POST)) {
    if (filter_input(INPUT_POST, 'logsystem') == 'login') {
        if (isset($_POST['userName']) && !empty($_POST['userName']) && isset($_POST['passward']) && !empty($_POST['passward'])) {
        $u_name = filter_input(INPUT_POST, 'userName');
        $u_pwd = filter_input(INPUT_POST, 'passward');
//$u_type = filter_input(INPUT_POST, 'type');
//$que = "SELECT `id`, `email`, `passward`, `approved`, `type` FROM `registered_trainee` WHERE `email`='" . $u_name . "' LIMIT 1";
//echo($que);
//$obj->runQuerySelect($query);
        $ucount = 0;

//  echo $ucount."ojkj";


        $query_pass = "SELECT `id`, `name`, `email`, `passward`, `approved`, `type` FROM `registered_trainee` WHERE `email`='" . $u_name . "' LIMIT 1";
//echo $query_pass;
        $UserDetails = $obj->getResultArray($query_pass);
        $ucount = $obj->getCountByQuery($query_pass);
        if ($ucount > 0) {
//var_dump($UserDetails);
 $encriptedPass = $obj->passwordEncryption($pass);

            foreach ($UserDetails as $userdata) {
                $rel_pass = $userdata['passward'];
                
                if ($rel_pass ==$encriptedPass)  {
                    session_start();

                    $_SESSION['user_id'] = $userdata['id'];
                    $_SESSION['user_type'] = $userdata['type'];
                    $_SESSION['user_Name'] = $userdata['name'];
                    $_SESSION['user_name_r'] = $userdata['email'];
                    $_SESSION['user_name'] = $userdata['passward'];
                    $_SESSION['usrStatus'] = $userdata['approved'];

                    $_SESSION['server_ip'] = $_SERVER['REMOTE_ADDR'];

                    $_SESSION['HTTP_USER_AGENT'] = md5($_SERVER['HTTP_USER_AGENT']);


                    echo json_encode(array(array("msgType" => 0, "msg" => "Successfully Logged into the system", "type" => $_SESSION['user_type'])));
                } else {
                    echo json_encode(array(array("msgType" => 1, "msg" => "Password was incorrect.Please Check your Password")));
                }
            }
        } else {
            echo json_encode(array(array("msgType" => 2, "msg" => "User was not available in database,please check your username")));
        }
    } else {
        echo json_encode(array(array("msgType" => 3, "msg" => "Please enter username or password")));
    }
}


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if (array_key_exists("proccess", $_POST)) {

    session_start();
    unset($_SESSION['id']);
    unset($_SESSION['type']);
    unset($_SESSION['name']);
    unset($_SESSION['email']);
//unset($_SESSION['user_level']);
    unset($_SESSION['usrStatus']);
//unset($_SESSION['HTTP_USER_AGENT']);
    unset($_SESSION['server_ip']);
//unset($_SESSION['menue']);
    echo 0;
}

if (array_key_exists('pageProtect', $_POST)) {
    session_start();
    if (isset($_SESSION['HTTP_USER_AGENT']) && isset($_SESSION['usrStatus'])) {
        if ($_SESSION['HTTP_USER_AGENT'] != md5($_SERVER['HTTP_USER_AGENT'])) {
            echo 0;
        } else {
            if ($_SESSION['server_ip'] === $_SERVER['REMOTE_ADDR']) {
                echo 1;
            } else {
                echo 0;
            }
        }
    } else {
        echo 0;
    }
}

//////////////audit trail/////////////////////
if (array_key_exists('user_logs', $_POST)) {
    $user_id = filter_input(INPUT_POST, 'u_id');
    $u_activity = filter_input(INPUT_POST, 'u_activity');

    $query = "INSERT INTO `Audit`( `Action`, `User_Id`) VALUES  ('" . $user_id . "','" . $u_activity . "')";
    $obj->runQueryForLogs($query);
}  
}