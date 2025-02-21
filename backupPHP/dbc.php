<?php


$user_registration = 1;  // set 0 or 1


class MainConfig {

    public static function connectDB() {
        //$link = mysqli_connect('localhost', 'root', '') or die("Couldn't make connection.");
        //$link = mysqli_connect('192.168.101.86/localhost', 'root', '') or die("Couldn't make connection.");
        $link = mysqli_connect('localhost', 'root', '') or die("Couldn't make connection.");
        mysqli_set_charset($link,'utf8');       
        $db = mysqli_select_db($link,'lakshisalon') or die("Couldn't select database");
        return $link;
    }

    public static function closeDB($link) {
        mysqli_close($link);
    }


}

?>