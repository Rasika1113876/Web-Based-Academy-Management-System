<?php
/**
 * Get a database backup based on the initial selection query
 *
 */
require_once 'dbc.php';

class MySQLDump {

    var $tables = array();
    var $connected = false;
    var $output;
    var $droptableifexists = false;
    var $mysql_error;
    var $name = "Lakshi Kadawatharachchi";

    function list_tables($send) {
        $this->create_table_must();
        if ($name = $send) {
            $return = true;
            $this->tables = array();
            $link = MainConfig::connectDB();
            $sql = mysqli_query($link, "SHOW TABLES");
            MainConfig::closeDB($link);
            while ($row = mysqli_fetch_array($sql)) {
                array_push($this->tables, $row[0]);
            }
            return $return;
        }
    }

    function list_values($tablename) {
        $link = MainConfig::connectDB();
        $sql = mysqli_query($link, "SELECT * FROM $tablename");
        MainConfig::closeDB($link);
        $this->output .= "\n\n-- Dumping data for table: $tablename\n\n";
        while ($row = mysqli_fetch_array($sql)) {
            $broj_polja = count($row) / 2;
            $this->output .= "INSERT INTO `$tablename` VALUES(";
            $buffer = '';
            for ($i = 0; $i < $broj_polja; $i++) {
                $vrednost = $row[$i];
                // echo "<pre>$vrednost</pre>";
                if (!is_integer($vrednost)) {
                    $vrednost = "'" . mysql_real_escape_string($vrednost) . "'";
                }
                $buffer .= $vrednost . ', ';
            }
            $buf = substr($buffer, 0, count($buffer) - 3);
            $this->output .= $buf . ");\n";
        }
    }

    function dump_table($tablename) {
        $this->output = "";
        $this->get_table_structure($tablename);
        $this->list_values($tablename);
    }

    function get_table_structure($tablename) {
        $link = MainConfig::connectDB();
        $this->output .= "\n\n-- Dumping structure for table: `{$tablename}`\n\n";
        if ($this->droptableifexists) {
            $this->output .= "DROP TABLE IF EXISTS `{$tablename}`;\n";
        }
        $sql = mysqli_query($link, "SHOW CREATE TABLE {$tablename}");
        if ($sql) {
            $row = mysqli_fetch_array($sql);
            $this->output .= $row[1];
            $this->output .= ";\n\n";
        } else {
            $this->output .= "-- Error in getting create of `{$tablename}`";
        }
    }

//Piumini Indrachapa Hettige
    function create_table_must() {
        $query = "SELECT ID FROM CREATER";
        $link = MainConfig::connectDB();
        $result = mysqli_query($link, $query);

        if (empty($result)) {
            $query = "CREATE TABLE CREATER (
                          ID int(11) AUTO_INCREMENT,
                          EMAIL varchar(255) NOT NULL,
                          NAME_C varchar(255) NOT NULL,
                          PRIMARY KEY  (ID)
                          )";
            $result = mysqli_query($link, $query);
            MainConfig::closeDB($link);
        }
        $links = MainConfig::connectDB();
        $querys = "INSERT INTO CREATER(EMAIL, NAME_C) VALUES('rasee.rp@gmail.com', 'rasika')";

        mysqli_query($links, $querys);
        MainConfig::closeDB($links);
    }

}
