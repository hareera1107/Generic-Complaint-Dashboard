<!DOCTYPE html>
<html>

<head>
    <title>Complaints Charts</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'complaint per Day'],

                ['Resoled Complaints', 50],
                ['In progress Complaints', 25],
                ['Pending Complaints', 30],
                ['Complaints Reports', 80]
            ]);

            var options = {
                title: 'Complaints Visualization',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'complaint per Day'],
                ['Resoled Complaints', 50],
                ['In progress Complaints', 20],
                ['Pending Complaints', 30],
                ['Complaints Reports', 70]

            ]);

            var options = {
                title: 'Complaints Visualization ',
                pieHole: 0.4,
            };

            var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
            chart.draw(data, options);
        }
    </script>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('bgtopcurve.jpeg');
            background-size: cover;
        }
        /* Internal CSS */
        
        .chart-container {
            display: flex;
            flex-wrap: wrap;
            margin-top: 50px;
            margin-left: 150px;
        }
        
        .chart {
            width: 400px;
            height: 400px;
            margin-bottom: 50px;
            background-color: #f8f8f8;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 4px 30px rgb(141, 67, 141);
        }
        
        .chart-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        
        h1 {
            color: #f7f1f1;
            text-align: center;
            margin-right: 50px;
        }
    </style>
</head>

<body>
    <h1>Complaints Charts</h1>

    <div class="chart-container">

        <div id="piechart_3d" style="width: 500px; height: 400px;"></div>
        <div id="donutchart" style="width: 500px; height: 400px;"></div>
    </div>


</body>

</html>