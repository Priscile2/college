<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .card {
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: all 0.3s ease-in-out;
            overflow: hidden; /* This will ensure the chart does not overflow the rounded corners */
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.2);
        }
        
        .update-info {
            font-size: 0.8rem;
            opacity: 0.7;
        }
        .chart-container {
            height: 200px; /* or any other height */
            width: 100%; /* Responsive width */
        }
        
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="cacard text-white bg-primary">
                    <div class="card-body">
                        <h5 class="card-title">Website Views</h5>
                        <p class="card-text">Last Campaign Performance</p>
                        <div class="chart" id="websiteViewsChart"></div>
                        <p class="update-info">Campaign sent 2 days ago</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card text-white bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Daily Sales</h5>
                        <p class="card-text">(+15%) increase in today sales.</p>
                        <div class="chart" id="dailySalesChart"></div>
                        <p class="update-info">Updated 4 min ago</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card text-white bg-dark">
                    <div class="card-body">
                        <h5 class="card-title">Completed Tasks</h5>
                        <p class="card-text">Last Campaign Performance</p>
                        <div class="chart" id="completedTasksChart"></div>
                        <p class="update-info">Just updated</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Include a chart library such as Chart.js to create the charts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const websiteViewsCtx = document.getElementById('websiteViewsChart').getContext('2d');
            new Chart(websiteViewsCtx, {
                type: 'bar',
                data: {
                    labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
                    datasets: [{
                        label: 'Website Views',
                        data: [65, 59, 80, 81, 56, 55, 40],
                        backgroundColor: 'rgba(0, 123, 255, 0.6)',
                        borderColor: 'rgba(0, 123, 255, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });
        
            const dailySalesCtx = document.getElementById('dailySalesChart').getContext('2d');
            new Chart(dailySalesCtx, {
                type: 'line',
                data: {
                    labels: ['Apr', 'Jun', 'Aug', 'Oct', 'Dec'],
                    datasets: [{
                        label: 'Daily Sales',
                        data: [50, 200, 150, 170, 220],
                        backgroundColor: 'rgba(40, 167, 69, 0.2)',
                        borderColor: 'rgba(40, 167, 69, 1)',
                        fill: true
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });
        
            const completedTasksCtx = document.getElementById('completedTasksChart').getContext('2d');
            new Chart(completedTasksCtx, {
                type: 'line',
                data: {
                    labels: ['Apr', 'Jun', 'Aug', 'Oct', 'Dec'],
                    datasets: [{
                        label: 'Completed Tasks',
                        data: [5, 15, 10, 20, 30],
                        backgroundColor: 'rgba(33, 37, 41, 0.3)',
                        borderColor: 'rgba(33, 37, 41, 1)',
                        fill: true
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });
        });
        

    </script>


</body>
</html>
