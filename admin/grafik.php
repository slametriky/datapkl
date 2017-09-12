<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ilmu-detil.blogspot.com">
    <title>Bootstrap Graph Using Highcharts </title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <script src="../assets/js/highcharts.js"></script>    
    <script src="../assets/js/jquery.min.js"></script>    
    <script>
        $(function () {
    var chart;     
    $(document).ready(function () {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'tes',
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'Grafik Mahasiswa Kerja Praktek di PT.Telkom Indonesia'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage}%</b>',
                percentageDecimals: 1
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                            enabled: true,
                            color: '#000000',
                            connectorColor: 'green',
                            formatter: function() 
                            {
                                return '<b>' + this.point.name + '</b>: ' + Highcharts.numberFormat(this.percentage, 2) +' % ';
                            }
                        }
                    }
                 },
            series: [{
                type: 'pie',
                name: 'Presentase Mahasiswa',
                data: [
                    <?php
                        include "../inc/koneksi.php";
                        $query = mysqli_query($con,"SELECT DISTINCT universitas from user");
                     
                        while ($row = mysqli_fetch_array($query)) {
                            $browsername = $row['universitas'];
                         
                            $data = mysqli_fetch_array(mysqli_query($con,"SELECT count(universitas) as jumlah  from user where universitas='$browsername'"));
                            $jumlah = $data['jumlah'];
                            ?>
                            [ 
                                '<?php echo $browsername ?>', <?php echo $jumlah; ?>
                            ],
                            <?php
                        }
                        ?>
                ]
            }]
        });
    });
     
});
    </script>        
</head>
<body>
<div class="container" style="margin-top:20px">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">Grafik Mahasiswa Kerja Praktek di PT. Telkom Indonesia</div>
                <div class="panel-body">
                    <div id ="tes"></div>
                </div> 
        </div>
    </div>
</div>

