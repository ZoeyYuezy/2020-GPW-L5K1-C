<?php
// Conncet db
include('includes/db.php');

//Query
$SQL = "SELECT number, month FROM nolc";
$result =mysqli_query ($connection, $SQL);

//prepare date in a loop
while ($row=mysqli_fetch_array($result)) {
       $labels .="'" . $row['month'] . "',";
       $data .= "'" . $row['number'] . "',";
       }
?>



    // ------------------------------------------------------- //
    // Bar Chart
    // ------------------------------------------------------ //
    var BARCHARTHOME = $('#barchart');
    var barChartHome = new Chart(BARCHARTHOME, {
        type: 'bar',
        options:
        {
            scales:
            {
                xAxes: [{
                    display: false
                }],
                yAxes: [{
                    display: false
                }],
            },
            legend: {
                display: false
            }
        },
        data: {
            labels: [<?php echo $labels; ?>],
            datasets: [
                {
                    label: "Number",
                    backgroundColor: [
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)'
                    ],
                    borderColor: [
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)'
                    ],
                    borderWidth: 1,
                    data: [<?php echo $data; ?>],
                }
            ]
        }
    });

<?php
//Query
$LINE = "SELECT number, year FROM flc";
$result =mysqli_query ($connection, $LINE);

//prepare date in a loop
while ($row=mysqli_fetch_array($result)) {
       $x .="'" . $row['year'] . "',";
       $y .= "'" . $row['number'] . "',";
       }

//Query
$CHART = "SELECT number, year FROM slc";
$result =mysqli_query ($connection, $CHART);

//prepare date in a loop
while ($row=mysqli_fetch_array($result)) {
       $l .="'" . $row['year'] . "',";
       $d .= "'" . $row['number'] . "',";
       }
?>


    // Line Chart
    // ------------------------------------------------------ //
    var legendState = true;
    if ($(window).outerWidth() < 576) {
        legendState = false;
    }

    var LINECHART = $('#lineChart');
    var myLineChart = new Chart(LINECHART, {
        type: 'line',
        options: {
            scales: {
                xAxes: [{
                    display: true,
                    gridLines: {
                        display: false
                    }
                }],
                yAxes: [{
                    display: true,
                    gridLines: {
                        display: false
                    }
                }]
            },
            legend: {
                display: legendState
            }
        },
        data: {
            labels: [<?php echo $x & $l; ?>],
            datasets: [
                {
                    label: "Fail Case",
                    fill: true,
                    lineTension: 0,
                    backgroundColor: "transparent",
                    borderColor: '#f15765',
                    pointBorderColor: '#da4c59',
                    pointHoverBackgroundColor: '#da4c59',
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    borderWidth: 1,
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBorderColor: "#fff",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 0,
                    data: [<?php echo $y; ?>],
                    spanGaps: false
                },
                {
                    label: "Successful Case",
                    fill: true,
                    lineTension: 0,
                    backgroundColor: "transparent",
                    borderColor: "#54e69d",
                    pointHoverBackgroundColor: "#44c384",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    borderWidth: 1,
                    pointBorderColor: "#44c384",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBorderColor: "#fff",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [<?php echo $d; ?>],
                    spanGaps: false
                }
            ]
        }
    });

   <?php
// Conncet db
include('includes/db.php');

//Query
$DOUG = "SELECT name, number FROM ecw";
$result =mysqli_query ($connection, $DOUG);

//prepare date in a loop
while ($row=mysqli_fetch_array($result)) {
       $p .="'" . $row['name'] . "',";
       $o .= "'" . $row['number'] . "',";
       }
?>                        
                                     
 // ------------------------------------------------------- //
    // Doughnut Chart
    // ------------------------------------------------------ //
    var DOUGHNUTCHARTEXMPLE  = $('#doughnutChartExample');
    var pieChartExample = new Chart(DOUGHNUTCHARTEXMPLE, {
        type: 'doughnut',
        options: {
            cutoutPercentage: 70,
        },
        data: {
            labels: [<?php echo $p; ?>],
            datasets: [
                {
                    data: [<?php echo $o; ?>],
                    borderWidth: 0,
                    backgroundColor: [
                        '#3eb579',
                        '#49cd8b',
                        "#54e69d",
                        "#71e9ad"
                    ],
                    hoverBackgroundColor: [
                        '#3eb579',
                        '#49cd8b',
                        "#54e69d",
                        "#71e9ad"
                    ]
                }]
            }
    });

    var pieChartExample = {
        responsive: true
    };
                                     
      <?php
// Conncet db
include('includes/db.php');

//Query
$PIE = "SELECT name, number FROM elc";
$result =mysqli_query ($connection, $PIE);

//prepare date in a loop
while ($row=mysqli_fetch_array($result)) {
       $i .="'" . $row['name'] . "',";
       $j .= "'" . $row['number'] . "',";
       }
?> 
                                     
     // ------------------------------------------------------- //
    // Pie Chart
    // ------------------------------------------------------ //
    var PIECHARTEXMPLE    = $('#pieChartExample');
    var pieChartExample = new Chart(PIECHARTEXMPLE, {
        type: 'pie',
        data: {
            labels: [<?php echo $i; ?>],
            datasets: [
                {
                    data: [<?php echo $j; ?>],
                    borderWidth: 0,
                    backgroundColor: [
                        '#44b2d7',
                        "#59c2e6",
                        "#71d1f2",
                        "#96e5ff"
                    ],
                    hoverBackgroundColor: [
                        '#44b2d7',
                        "#59c2e6",
                        "#71d1f2",
                        "#96e5ff"
                    ]
                }]
            }
    });

    var pieChartExample = {
        responsive: true
    };






 






