<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../include/db_connect.php';
$obj = new DataBase;

//elseif ($_POST['payment_bill'] == 'select_sales_chart') {
//        $que = "SELECT
//                Count(bill.r_id) AS TOTAL,
//                MONTH(bill.selling_date) AS mon_count
//                FROM
//                bill
//                WHERE
//                YEAR(bill.selling_date)=YEAR(CURRENT_DATE()WHERE
//                YEAR(bill.sell
//                MONTH(bill.selling_date)";ing_date)=YEAR(CURRENT_DATE)
//                GROUP BY
        $que="SELECT SUM( `paid_amount`) AS TOTAL, MONTH( `paid_date`) AS mon_count FROM `payment`  WHERE
                YEAR(`paid_date`)=YEAR(CURRENT_DATE())GROUP BY MONTH( `paid_date`)";
        $obj->runQuerySelect($que);
    