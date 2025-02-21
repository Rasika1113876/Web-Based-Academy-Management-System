<?php

session_start();
?>
<?php

require_once '../include/db_connect.php';
$obj = new DataBase;

if (isset($_POST['userProfile'])) {
    if ($_POST['userProfile'] == 'getDetailsToUpdate') {
        //$selectbyID = $_POST['key'];

        $query = "SELECT `id`,`fullname`, `title`, `name`, `address1`, `address2`, `address3`, `nic`, `dob`, `telephone_no`, `email` FROM `registered_trainee` WHERE `email`='" . $_SESSION['user_name_r'] . "'";
        //echo $select_Query;
        $obj->runQuerySelect($query);
    }

    if ($_POST['userProfile'] == 'getUserDetails') {
//echo ($key1);
//$query = "SELECT `fullname`, `nic`, `dob`, `address1` FROM `registered_trainee` WHERE `id`='125'";
        $query = "SELECT  `fullname`, `nic`, `dob`, `address1`, `address2`, `address3`, `type`, `telephone_no`, `email`, `image_path` FROM `registered_trainee` WHERE `email`='" . $_SESSION['user_name_r'] . "'";

//echo ($query);
        $obj->runQuerySelect($query);
    }
    
    ////////////////////get details by ID///////////////////////
    
   
}