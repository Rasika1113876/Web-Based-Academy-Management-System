<?php

session_start();
?>
<?php

require_once '../include/db_connect.php';
$obj = new DataBase;
//$link = $obj->sendLink();

if (isset($_POST['billpayment'])) {
    if ($_POST['billpayment'] == 'billpaymenthistory') {
        $selectbyID = $_POST['key'];

        $query = "SELECT `trainee_id`,`paid_date`, `paid_amount` FROM `payment`  WHERE `trainee_id`= '$selectbyID' 
                            ";
        //echo $select_Query;
        $obj->runQuerySelect($query);
    }


    if ($_POST['billpayment'] == 'loadinsplan') {

        $trinee_ID = filter_input(INPUT_POST, 'tr_id');
        $trainee_Name = filter_input(INPUT_POST, 'tr_name');
        $ins_Plan = filter_input(INPUT_POST, 'ins_plan');
        $selected_Date = filter_input(INPUT_POST, 's_date');
        $cashier_ID = filter_input(INPUT_POST, 'c_id');


//filter_input is a function,,INPUT_POST is a part of a function
//echo $trainee_email;
//echo $trainee_pwd;
//echo $trainee_address;

        $que = "INSERT INTO `installment_category`( `trainee_id`, `trainee_name`, `ins_plan`, `selected_date`, `cashier_id`) VALUES ('" . $trinee_ID . "','" . $trainee_Name . "','" . $ins_Plan . "','" . $selected_Date . "','" . $cashier_ID . "')";

        $obj->runQuery($que);
    }

    ////////////////////////load total course fee according to trainee selected//////////////////////////////////////
    if ($_POST['billpayment'] == 'get_totalFee') {
        $selectbyID = $_POST['key'];

        $query = "SELECT  `trainee_id`, `tot_course_fee` FROM `installment_category`  WHERE `trainee_id`= '$selectbyID' 
                            ";
        //echo $select_Query;
        $obj->runQuerySelect($query);
    }

//////////////////////////get due amount/////////////////////////////////////

    if ($_POST['billpayment'] == 'get_dueAmount') {
        $selectbyID = $_POST['dueAmount'];

        $query = "SELECT SUM(`paid_amount`)AS tot_paid FROM `payment` WHERE `trainee_id`= $selectbyID";
        //echo $select_Query;
        $obj->runQuerySelect($query);
    }

    if ($_POST['billpayment'] == 'get_insNo') {
        $selectbyID = $_POST['insNo'];

        $query = "SELECT COUNT(`trainee_id`)AS tot_ins FROM `payment` WHERE `trainee_id`= $selectbyID";
        //echo $select_Query;
        $obj->runQuerySelect($query);
    }


    if ($_POST['billpayment'] == 'get_insPlan') {
        $selectbyID = $_POST['key'];

        $query = "SELECT  `trainee_id`,  `ins_plan` FROM `installment_category` WHERE  `trainee_id`= '$selectbyID' 
                            ";
        //echo $select_Query;
        $obj->runQuerySelect($query);
    }


    if ($_POST['billpayment'] == 'paymentHIstorySelect') {
//        $query = "SELECT  `trainee_id`, `trainee_id` FROM `payment`";
        $query = "  SELECT payment.trainee_id, payment.trainee_name,payment.paid_amount,payment.paid_ins,payment.paid_date,payment.due_amount, installment_category.tot_course_fee FROM payment
                 INNER JOIN installment_category ON payment.trainee_id=installment_category.trainee_id";
        $obj->runQuerySelect($query);
    }


//    if ($_POST['billpayment'] == 'paymentHIstoryDelete') {
//        $query = "DELETE FROM `marksheet` WHERE `sheet_id`={$_POST['key1']};";
//        $obj->runQuery($query);
//    }

    if ($_POST['billpayment'] == 'paymentHIstorySelectByID') {
        $selectbyID = $_POST['key'];

        // $query = "SELECT `sheet_id`, `session_date`, `trainee_id`, `trainee_name`, `course_title`, `totalmarks`, `grade`, `comments` FROM `marksheet` WHERE `trainee_id`= '$selectbyID' OR `course_title`= '$selectbyID' OR `session_date`='$selectbyID'
        $query = "  SELECT payment.trainee_id, payment.trainee_name,payment.paid_amount,payment.paid_ins,payment.paid_date,payment.due_amount, installment_category.tot_course_fee FROM payment
                 INNER JOIN installment_category ON payment.trainee_id=installment_category.trainee_id WHERE payment.trainee_id = '$selectbyID'";
//echo $select_Query;
        $obj->runQuerySelect($query);
    }

    ////////////////////////////load total income///////////////////////////////////////

    if ($_POST['billpayment'] == 'getTotalIncome') {

        $query = "SELECT SUM( `paid_amount`) AS tot_Date ,`paid_date` FROM `payment` GROUP BY`paid_date`  
                            ";
        //echo $select_Query;
        $obj->runQuerySelect($query);
    }

    ////////////////////////load payment details to trainee dashboard//////////////////////////////

    if ($_POST['billpayment'] == 'paymentHistorytoTrainee') {
//        $selectbyID = $_POST['key'];

        $query = " SELECT payment.trainee_id, payment.trainee_name,payment.paid_amount,payment.paid_ins,payment.paid_date,payment.due_amount, installment_category.tot_course_fee FROM payment
                 INNER JOIN installment_category ON payment.trainee_id=installment_category.trainee_id WHERE payment.trainee_id='" . $_SESSION['user_id'] . "'";
        // echo ($query);
        $obj->runQuerySelect($query);
    }

    if ($_POST['billpayment'] == 'sendPaymentDetails') {
//        $selectbyID = $_POST['key'];

        $tr_id = filter_input(INPUT_POST, 'trainee_id');
        $tr_name = filter_input(INPUT_POST, 'trainee_name');
        $p_amount = filter_input(INPUT_POST, 'paid_amount');
        $ins_no = filter_input(INPUT_POST, 'ins_no');
        $due_amount = filter_input(INPUT_POST, 'due_amount');
        $paid_date = filter_input(INPUT_POST, 'paid_date');
        

//filter_input is a function,,INPUT_POST is a part of a function
//echo $trainee_email;
//echo $trainee_pwd;
//echo $trainee_address;

        $que = "INSERT INTO `payment`(`trainee_id`, `trainee_name`, `paid_amount`, `paid_ins`, `due_amount`,`paid_date`, `cashier_id`) VALUES ('" . $tr_id . "','" . $tr_name . "','" . $p_amount . "','" . $ins_no . "','" . $due_amount . "','" . $paid_date . "','" . $_SESSION['user_id'] . "')";
        $obj->runQuery($que);

        // echo ($query);      
    }
    
    //////////////////get trainee details to bill//////////////////////////
    
    if ($_POST['billpayment'] == 'printBill') {
        $selectbyID = $_POST['key'];

        $query = "SELECT  `id`,`nic`,`fullname` FROM `registered_trainee` WHERE `id`= '$selectbyID' 
                            ";
        //echo $select_Query;
        $obj->runQuerySelect($query);
    }
    
    if ($_POST['billpayment'] == 'paymentDetailsToReminders') {
       // $selectbyID = $_POST['key'];

        $query = "SELECT installment_category.trainee_id, installment_category.trainee_name, installment_category.tot_course_fee,installment_category.ins_plan,  installment_category.tot_course_fee-SUM(payment.paid_amount)AS due_amount,COUNT(payment.trainee_id) AS tot_paid_ins, SUM(payment.paid_amount) AS tot_paid_amount,payment.paid_date FROM installment_category  LEFT JOIN payment ON installment_category.trainee_id=payment.trainee_id GROUP BY payment.trainee_id";
        //echo $select_Query;
        $obj->runQuerySelect($query);
    }
    
    /////////////////////load trainee id to reminder modal//////////////////////////////
    
    if ($_POST['billpayment'] == 'select__reminder_by_Id') {
        $selectbyID = $_POST['reminderID'];

        $query = "SELECT  `trainee_id`, `trainee_name` FROM `payment` WHERE `trainee_id`= '$selectbyID' 
                            ";
        //echo $select_Query;
        $obj->runQuerySelect($query);
    }
    
    ////////////////////////////load reminder///////////////////////////////////////////////
    
     if ($_POST['billpayment'] == 'loadReminder') {
//        $selectbyID = $_POST['key'];

        $tr_id = filter_input(INPUT_POST, 'trid');
        $tr_name = filter_input(INPUT_POST, 'trnm');
        $nxt_amount = filter_input(INPUT_POST, 'nxtamount');
        $nxt_date = filter_input(INPUT_POST, 'nxtdate');
        $cash_id = filter_input(INPUT_POST, 'cashid');
      
//filter_input is a function,,INPUT_POST is a part of a function
//echo $trainee_email;
//echo $trainee_pwd;
//echo $trainee_address;

        $que = "INSERT INTO `reminders`(`trainee_id`, `trainee_name`, `nxtInsAmount`, `nxtInsDate`, `cashier_id`) VALUES('" . $tr_id . "','" . $tr_name . "','" . $nxt_amount . "','" . $nxt_date . "','" . $cash_id . "')";
        $obj->runQuery($que);

        // echo ($query);      
    }
    
    if ($_POST['billpayment'] == 'loadRemindertoDashboard') {
        

        $query="SELECT `reminder_id`, `trainee_id`, `trainee_name`, `nxtInsAmount`, `nxtInsDate`, `cashier_id`, `status` FROM `reminders` WHERE `trainee_name`='" . $_SESSION['user_Name'] . "' AND `status`= 0";
                            
        //echo $select_Query;
        $obj->runQuerySelect($query);
    }
}
