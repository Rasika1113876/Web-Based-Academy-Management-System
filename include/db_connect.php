<?php

class DataBase {
    
    function connect() {
        $link = mysqli_connect('localhost', 'root', '') or die("Couldn't make connection.");
         mysqli_set_charset($link, 'utf8'); //unicode
        date_default_timezone_set('Asia/Colombo');
        $db = mysqli_select_db($link, 'lakshisalon') or die("Couldn't select database");
        return $link;
    }

    function runQuerySelect($query) {
        $obj = new DataBase();
        $link = $obj->connect();

        $result = mysqli_query($link, $query);

        $data = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }

        mysqli_free_result($result);
        mysqli_close($link);
        echo json_encode($data);
    }

    function runQuery($query) {
        $obj = new DataBase();
        $link = $obj->connect();

        $result = mysqli_query($link, $query);


        mysqli_close($link);

        if ($result) {
            echo json_encode(array(array("msgType" => 1, "msg" => "Successfully Processed Data", "qry" => mysqli_error($link))));
        } else {
            echo json_encode(array(array("msgType" => 2, "msg" => "Sorry Could Not Be Processed Data", "qry" => mysqli_error($link))));
        }



//echo json_encode($result);
    }

    public function getCountByQuery($query) {

        $count = 0;

        $db_con = new Database();
        $con = $db_con->connect();
        $queryResult = mysqli_query($con, $query);

        $count = mysqli_num_rows($queryResult);
        mysqli_free_result($queryResult);
        mysqli_close($con);
//echo $count;
        return $count;
    }

    function getResultArray($query) {

        $data = array();
        $db_con = new Database;
        $con = $db_con->connect();
        $result = mysqli_query($con, $query);



        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        mysqli_free_result($result);
        mysqli_close($con);

        return $data;
    }

    public function passwordEncryption($pwd) {

        return hash('whirlpool', $pwd);
    }



//////////////////////
 function runQueryForLogs($query) {
        $obj = new DataBase();
        $link = $obj->connect();

        $result = mysqli_query($link, $query);


        mysqli_close($link);

        
 }
 
 function setResultJesonNoFeedback($query) {

        $obj = new DataBase();
        $link = $obj->connect();
        $result = mysqli_query($link, $query);

        if ($result) {
            
        } else {
            echo json_encode(array(array("msgType" => 2, "msg" => "Sorry Could Not Be Processed Data", "qry" => mysqli_error($link))));
        }
        mysqli_close($link);
    }

}