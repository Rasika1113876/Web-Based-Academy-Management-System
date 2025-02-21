   
   
   function chartLoad() {
       
       //alert("kk");
//////////******////////////
    var monthNumber = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    $.post("database/chartsql.php",
           {payment_bill: 'select_batch_chart'},
            function (tableData) {
               
////////******//////////////                
               
               
                ////////########################################//////////////          
                if (tableData === undefined || tableData.length === 0 || tableData === null) {

                } else {
                    $.each(tableData, function (index, tblValue) {
                        if (tblValue.mon_count == 1) {
                            monthNumber[0] = parseInt(tblValue.TOTAL);
                        } else if (tblValue.mon_count == 2) {
                            monthNumber[1] = parseInt(tblValue.TOTAL);
                        } else if (tblValue.mon_count == 3) {
                            monthNumber[2] = parseInt(tblValue.TOTAL);
                        } else if (tblValue.mon_count == 4) {
                            monthNumber[3] = parseInt(tblValue.TOTAL);
                        } else if (tblValue.mon_count == 5) {
                            monthNumber[4] = parseInt(tblValue.TOTAL);
                        } else if (tblValue.mon_count == 6) {
                            monthNumber[5] = parseInt(tblValue.TOTAL);
                        } else if (tblValue.mon_count == 7) {
                            monthNumber[6] = parseInt(tblValue.TOTAL);
                        } else if (tblValue.mon_count == 8) {
                            monthNumber[7] = parseInt(tblValue.TOTAL);
                        } else if (tblValue.mon_count == 9) {
                            monthNumber[8] = parseInt(tblValue.TOTAL);
                        } else if (tblValue.mon_count == 10) {
                            monthNumber[9] = parseInt(tblValue.TOTAL);
                        } else if (tblValue.mon_count == 11) {
                            monthNumber[10] = parseInt(tblValue.TOTAL);
                        } else if (tblValue.mon_count == 12) {
                            monthNumber[11] = parseInt(tblValue.TOTAL);
                        }


                    });
                  ////////########################################//////////////  
       
    /////////////////////////////begin highchart///////////////////////////////////////////////////
   Highcharts.chart('container2', {
                        chart: {
                            type: 'column'
                        },
                        title: {
                            text: 'Monthly Income'
                        },
                        subtitle: {
//                            text: 'Source: WorldClimate.com'
                        },
                        xAxis: {
                            categories: [
                                'Jan',
                                'Feb',
                                'Mar',
                                'Apr',
                                'May',
                                'Jun',
                                'Jul',
                                'Aug',
                                'Sep',
                                'Oct',
                                'Nov',
                                'Dec'
                            ],
                            crosshair: true
                        },
                        yAxis: {
                            min: 0,
                            title: {
//                                text: 'Income (Rs)'
                            }
                        },
                        tooltip: {
                            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                                    '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                            footerFormat: '</table>',
                            shared: true,
                            useHTML: true
                        },
                        plotOptions: {
                            column: {
                                pointPadding: 0.2,
                                borderWidth: 0
                            }
                        },
                        series: [{
                                name: 'Months',
                                data: monthNumber

                            }]
                    });
/////////////////////////////end highchart//////////////////////////////////////////////////////

  }

            }, "json");
           
           
           

   }

