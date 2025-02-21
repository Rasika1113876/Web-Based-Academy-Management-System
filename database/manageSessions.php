<?php
  session_start();
  ?>
<?php
require_once '../include/db_connect.php';
$obj = new DataBase;
//$link = $obj->sendLink();

if (isset($_POST['session'])) {
    if ($_POST['session'] == 'session_select') {
        $query = "SELECT `sheet_id`, `session_date`, `trainee_id`, `trainee_name`, `course_title`, `totalmarks`, `grade`, `comments` FROM `marksheet`";
        $obj->runQuerySelect($query);
    }

    if ($_POST['session'] == 'sessionDelete') {
        $query = "DELETE FROM `marksheet` WHERE `sheet_id`={$_POST['key1']};";
        $obj->runQuery($query);
    }
    if ($_POST['session'] == 'session_selectbyID') {
        $selectbyID = $_POST['key'];

        $query = "SELECT `sheet_id`, `session_date`, `trainee_id`, `trainee_name`, `course_title`, `totalmarks`, `grade`, `comments` FROM `marksheet` WHERE `trainee_id`= '$selectbyID' OR `course_title`= '$selectbyID' OR `session_date`='$selectbyID'
                            ";
//echo $select_Query;
        $obj->runQuerySelect($query);
    }

    if ($_POST['session'] == 'session_selectbytraineeID') {
//        $selectbyID = $_POST['key'];

        $query = "SELECT `sheet_id`, `session_date`, `trainee_id`, `trainee_name`, `course_title`, `totalmarks`, `grade`, `comments` FROM `marksheet` WHERE `trainee_id`='" . $_SESSION['user_id'] . "'";
       // echo ($query);
        $obj->runQuerySelect($query);
    }
    
    ////////////////////////get tname to marksheet/////////////////////
    
       if ($_POST['session'] == 'get_traineeID') {
        $selectbyID = $_POST['key'];

        $query = "SELECT `id`, `name` FROM `registered_trainee`  WHERE `id`= '$selectbyID' 
                            ";
        //echo $select_Query;
        $obj->runQuerySelect($query);
}

///////////////////load trainee details to academic transcript///////////////////////////

 if ($_POST['session'] == 'get_traineeDetails') {
        $selectbyID = $_POST['key'];

        $query = "SELECT  `id`, `name`,`batch`, `nic`, `dob`, `fullname` FROM `registered_trainee`  WHERE `id`= '$selectbyID' 
                            ";
        //echo $select_Query;
        $obj->runQuerySelect($query);
}

 if ($_POST['session'] == 'get_finalResults') {
        $selectbyID = $_POST['key'];

        $query = "SELECT `trainee_id`, `course_title`, `totalmarks`, SUM(`totalmarks`)AS final_marks, `grade` FROM `marksheet` WHERE `trainee_id`= '$selectbyID' 
                            ";
        //echo $select_Query;
        $obj->runQuerySelect($query);
    }
}