<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Analytics Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        body, html {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

.dashboard {
    display: flex;
    height: 100vh;
}

.sidebar {
    min-width: 250px;
    background-color: #333;
    color: white;
    padding: 20px;
}

.sidebar a {
    color: white;
    text-decoration: none;
    display: block;
    padding: 10px;
}

.content {
    flex-grow: 1;
    padding: 20px;
}

@media (max-width: 768px) {
    .sidebar {
        min-width: 100px;
    }
}

    </style>
</head>
<body>
    <div class="dashboard">
        <div class="sidebar">
            <a href="#summary">Summary</a>
            <a href="#details">Details</a>
            <a href="#settings">Settings</a>
        </div>
        <div class="content">
            <h1>Dashboard</h1>
            <canvas id="analyticsSummaryChart"></canvas>
            <!-- Additional content can go here -->
        </div>
    </div>
    <script src="dashboard.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    fetchAnalyticsData();
});

function fetchAnalyticsData() {
    // Update the URL to the path of your PHP script that returns the analytics data
    fetch('getAnalytics.php')
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        createChart(data);
    })
    .catch(error => console.error('Error fetching analytics data:', error));
}

function createChart(data) {
    const ctx = document.getElementById('analyticsSummaryChart').getContext('2d');
    const summaryChart = new Chart(ctx, {
        type: 'pie', // Change to 'bar', 'line', etc. based on your preference
        data: {
            labels: ['Total Accepted', 'Total Rejected', 'Total Pending'],
            datasets: [{
                label: 'Student Application Status',
                data: [data.total_accepted, data.total_rejected, data.total_pending], // Ensure these keys match your JSON structure
                backgroundColor: [
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 206, 86, 0.2)'
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255,99,132,1)',
                    'rgba(255, 206, 86, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}

    </script>
</body>
</html>
