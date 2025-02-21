<?php

session_start();
?>
<?php

require_once '../include/db_connect.php';
$obj = new DataBase;
//$link = $obj->sendLink();

if (isset($_POST['report'])) {
    if ($_POST['report'] == 'contact_details') {
        $query = "SELECT `id`, `fullname`, `address1`, `address2`, `address3`, `telephone_no`, `email`FROM `registered_trainee` WHERE `type`='trainee' AND `status`=1";
        $obj->runQuerySelect($query);
    }

    if ($_POST['report'] == 'personal_details') {
        $query = "SELECT `id`, `fullname`,`title`, `address1`, `address2`, `address3`, `nic`, `dob` FROM `registered_trainee` WHERE `type`='trainee' AND `status`=1";
        $obj->runQuerySelect($query);
    }
}
