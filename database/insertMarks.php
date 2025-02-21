<?php

require_once '../include/db_connect.php';
$obj = new DataBase;

$tra_id = filter_input(INPUT_POST, 'trainee_id');
$tr_nm = filter_input(INPUT_POST, 'trainee_name');
$tr_id = filter_input(INPUT_POST, 'trainer_id');
$se_date = filter_input(INPUT_POST, 'session_date');
$se_type = filter_input(INPUT_POST, 'session_type');
$in_marks1 = filter_input(INPUT_POST, 'input_marks1');
$in_marks2 = filter_input(INPUT_POST, 'input_marks2');
$in_marks3 = filter_input(INPUT_POST, 'input_marks3');
$in_marks4 = filter_input(INPUT_POST, 'input_marks4');
$in_marks5 = filter_input(INPUT_POST, 'input_marks5');
$to_marks = filter_input(INPUT_POST, 'total_marks');
$in_grade = filter_input(INPUT_POST, 'input_grade');
$in_comments = filter_input(INPUT_POST, 'input_comments');

//filter_input is a function,,INPUT_POST is a part of a function
//echo $trainee_email;
//echo $trainee_pwd;
//echo $trainee_address;

$que = "INSERT INTO `marksheet`(`trainee_id`, trainee_name, `trainer_id`, `session_date`, `course_title`, `cr_techniques`, `cr_creativity`, `cr_timemanagement`, `cr_confidance`, `cr_finaloutcome`, `totalmarks`, `grade`, `comments`) VALUES ('" . $tra_id . "','" . $tr_nm . "','" . $tr_id . "','" .  $se_date . "','" . $se_type . "','" . $in_marks1 . "','" . $in_marks3 . "','" . $in_marks4 . "','" . $in_marks5 . "','" . $in_marks5 . "','" . $to_marks . "','" . $in_grade . "','" . $in_comments . "')";
$obj->runQuery($que);
 //echo($que);