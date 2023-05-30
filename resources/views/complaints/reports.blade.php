@extends('layouts.dashboard.app')
@section('content')

    <head>
        <title>Reports</title>
        <link rel="stylesheet" type="text/css" href="reportpg.css">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            .container {
                padding: 5px;
                /* margin-top: 10px; */
                /* display: grid; */
                /* grid-template-columns: repeat(2, 1fr); */
                /* grid-gap: 20px; */
                margin-left: 330px;
                display: flex;

            }

            /* canvas {
                                            display: block;
                                            margin: 0 auto;
                                            max-width: 300%;
                                        } */

            html {
                font-size: 16px;
                font-family: arial, sans-serif;
            }

            body {
                background-image: url('../images/curve1.jpeg');

            }

            .container {

                /* flex-wrap: wrap; */
                /* justify-content: center; */
                /* margin-top: 10px; */
                /* margin-left: 20px; */
            }


            /*main cards styling*/
            /* .main-cards {
                                            float: right;
                                            display: grid;
                                            grid-template-columns: 2fr 2fr 2fr 2fr;
                                            gap: 30px;
                                            margin: 10px 0;
                                            margin-right: 20px;

                                        } */

            /* .cards {
                                            display: flex;
                                            position: static;
                                            right: 0;
                                            float: right;
                                            text-align: center;
                                            flex-direction: column;
                                            justify-content: space-around;
                                            padding: 10px;
                                            color: white;
                                            background: #CCA2BE;
                                            box-shadow: #905788;
                                            transition: transform 0.2s ease-in-out;
                                        }

                                        .cards:hover {
                                            transform: scale(1.1);
                                        } */

            .card {
                /* width: 20%; */
                /* margin: 10px; */
                justify-content: space-around;
                /* padding: 50px; */
                text-align: center;
                margin-right: 50px;
                margin-top: 25px;
                /* height: 120px; */
                /* padding: 20px; */
                color: white;
                background: #CCA2BE;
                box-shadow: #905788;
                transition: transform 0.2s ease-in-out;
            }

            .card:hover {
                transform: scale(1.1);
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="card">
                <h3>Status-Wise Reports</h3>
                <h4>{{ $allComplaintsCount }}</h4>
            </div>

            <div>
                <canvas id="status-chart"></canvas>
            </div>
        </div>
        <div class="container">
            <div class="card">
                <h3>Date Wise Reports</h3>
                <h4>{{ $datewiseComplaintsCount }}</h4>
            </div>

            <div>
                <canvas id="complaints-chart"></canvas>
            </div>
        </div>

        <div class="container">
            <div class="card">
                <h3>Category Wise Reports</h3>
                <h4>{{ $categoriesComplaintsCount }}</h4>
            </div>

            <div>
                <canvas id="category-chart"></canvas>
            </div>
        </div>

        <div class="container">
            <div class="card">
                <h3>District Wise Reports</h3>
                <h4>{{ $districtsComplaintsCount }}</h4>
            </div>

            <div id="districts-chart"></div>
        </div>

        </div>

        <script>
            var ctx = document.getElementById('status-chart').getContext('2d');
            var pendingCount = {{ $pendingCount }};
            var inProgressCount = {{ $inProgressCount }};
            var resolvedCount = {{ $resolvedCount }};
            var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'bar',

                // The data for our dataset
                data: {
                    labels: ['Completed', 'In Progress', 'Pending'],
                    datasets: [{
                        label: 'Status-Wise Complaints',
                        backgroundColor: ['rgb(223, 178, 223)', 'rgb(223, 178, 223)', 'rgb(223, 178, 223)'],
                        borderColor: 'rgb(223, 178, 223)',
                        data: [pendingCount, inProgressCount, resolvedCount]
                    }]
                },

                // Configuration options go here
                options: {}
            });


            var canvas = document.getElementById('complaints-chart');

            // Extract the registration dates from the data
            var complaints = {!! json_encode($complaints) !!};

            var uniqueDates = [];
            var dates = complaints.reduce(function(acc, complaint) {
                var date = complaint.registration_date;
                if (!uniqueDates.includes(date)) {
                    uniqueDates.push(date);
                    acc.push(date);
                }
                return acc;
            }, []);

            // Calculate the counts of complaints per date
            var counts = complaints.reduce(function(acc, complaint) {
                var date = complaint.registration_date;
                if (acc[date]) {
                    acc[date]++;
                } else {
                    acc[date] = 1;
                }
                return acc;
            }, {});

            // Convert the counts object to an array of values
            counts = Object.values(counts);

            // Define the chart data
            var chartData = {
                labels: dates,
                datasets: [{
                    label: 'Date-Wise Complaints',
                    data: counts,
                    backgroundColor: '#4B215F',
                    borderWidth: 1
                }]
            };

            // Create the chart
            var chart = new Chart(canvas, {
                type: 'bar',
                data: chartData,
                options: {
                    responsive: true,
                    scales: {
                        xAxes: [{
                            type: 'time',
                            time: {
                                unit: 'day',
                                tooltipFormat: 'MMM DD, YYYY'
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });



            var categories = {!! json_encode($categorywiseComplaints) !!};
            var categoryNames = categories.map(function(category) {
                return category.category;
            });

            var complaintCounts = categories.map(function(category) {
                return category.complaints_count;
            });

            var data = {
                labels: categoryNames,
                datasets: [{
                    label: "Category-Wise Report",
                    data: complaintCounts,
                    backgroundColor: ["rgb(139, 86, 139)", "rgb(139, 86, 139)", "rgb(139, 86, 139)",
                        "rgb(139, 86, 139)"
                    ],
                }]
            };

            // Get the canvas element and create the chart
            var ctx = document.getElementById("category-chart").getContext("2d");
            var chartc = new Chart(ctx, {
                type: "bar",
                data: data,
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });


            google.charts.load('current', {
    'packages': ['corechart']
});

// Set a callback function to run when the library is loaded
google.charts.setOnLoadCallback(drawChart);

// Define the callback function
function drawChart() {
    var districtwiseComplaints = {!! json_encode($districtwiseComplaints) !!};

    // Create an empty array to store the chart data
    var chartData = [
        ['District', 'Number of Complaints']
    ];

    // Iterate over the districtwiseComplaints data and populate the chart data array
    districtwiseComplaints.forEach(function(district) {
        chartData.push([district.district, district.complaints_count]);
    });

    // Set the chart options
    var chartOptions = {
        title: "District-wise Complaints",
        height: 150,
        legend: {
            position: 'none'
        },
        colors: ['#4B215F']
    };

    // Create the chart and attach it to the chart container
    var chart = new google.visualization.ColumnChart(document.getElementById("districts-chart"));
    chart.draw(google.visualization.arrayToDataTable(chartData), chartOptions);
}

        </script>
    </body>
@endsection
