<?php

require_once '../include/db_connect.php';
$obj = new DataBase;

if (isset($_POST['attendance'])) {
    if ($_POST['attendance'] == 'selectattendance') {
        $query = "SELECT `id`, `fullname` FROM `registered_trainee` WHERE `type`='trainee' AND `batch`='DBC1' AND `status`=1";
        $obj->runQuerySelect($query);
    } elseif (isset($_POST['k_bill_description'])) {

        $array = (array) ($_POST['k_bill_description']);

        foreach ($array as $item) {
            $values = '';
            $value = array_values($item);
            $values = "'" . implode("',' ", $value) . "'";

            $query = "INSERT INTO `attendence`(`Date`, `Trainer_id`, `Course_type`, `Trainee_id`, `Trainee_Name`, `Action`, `Reason`) VALUES (" . $values . ")";

            $obj->setResultJesonNoFeedback($query);
        }
        echo json_encode(array(array("msgType" => 1, "msg" => "Successfully Processed Data")));
    } elseif ($_POST['attendance'] == 'viewAttendenceLoad') {
        $c_date = $_POST['key'];
      
        $query = "SELECT `Trainee_id`, `Trainee_Name`, `Action`, `Reason` FROM `attendence` WHERE `Date`= '$c_date'
                            ";
//echo $select_Query;
        $obj->runQuerySelect($query);

//To get TrainerID & CourseTitle        
    } elseif ($_POST['attendance'] == 'TID&CTLoad') {
        $Date = $_POST['key1'];        

        $TIDCTLoad_Query = "SELECT
                            attendence.Trainer_id,
                            attendence.Course_type
                            FROM
                            attendence
                            WHERE
                            attendence.Date= '$Date' 
                             ";

        $obj->runQuerySelect($TIDCTLoad_Query);

 
    }
}

    