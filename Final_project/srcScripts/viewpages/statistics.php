<?php
include "../settings/connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="icon" href="../img/logo/logo.png" />

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/magnific-popup.css">
  <link rel="stylesheet" href="../css/jquery-ui.css">
  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/aos.css">

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      padding: 0;
    }

    .container_i {
      max-width: 1200px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
      color: #333;
    }

    .chart-container {
      display: flex;
      justify-content: space-around;
      margin-bottom: 30px;
    }

    .chart-card {
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      overflow: hidden;
    }

    .chart-title {
      text-align: center;
      font-size: 24px;
      margin-bottom: 20px;
      color: #333;
    }
  </style>
</head>

<body>
  <div class="site-wrap">

    <!--Navigation Bar-->
    <div class="site-navbar bg-primary py-2">
      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="home.php" class="js-logo-clone"><img src="../img/logo/logo.png" style="width:50px; border-radius:50px;" alt="logo" /></a>
            </div>
          </div>


          <div class="d-flex align-items-center justify-content-between">
          <?php
            if (isset($_SESSION['id'])) {
              echo "<div class='logout' style='margin-right:15px;'><a href='../actions/logout.php' title='log out'>
            <img src='https://img.icons8.com/ios-glyphs/30/000000/export.png' alt='log out'/>
            </a></div>";
            } else {
              echo "<div class='login' style='margin-right:15px;'><a href='../login/login.php' title='log in'>
            <img src='https://img.icons8.com/ios-glyphs/30/000000/import.png' alt='log in'/>
            </a></div>";
            } ?>


            <div class="profile">
              <!-- profile -->
              <a href="
                        <?php
                        if (isset($_SESSION['id'])) {
                          echo "profile.php";
                        } else {
                          echo "../login/login.php";
                        }
                        ?>
                        "><img src="
                        <?php
                        if (isset($_SESSION['id'])) {
                          echo "../images/image.jpg";
                        } else {
                          echo "../images/image.png";
                        }
                        ?>
                        " alt="Image" class="rounded-circle" style="width:50px; border-radius:50px;"></a>
            </div>
          </div>



        
        </div>
      </div>
    </div>
    <!-- stats -->
    <div class="container_i">
      <h1>Student Statistics</h1>

      <div class="chart-container">
        <div class="chart-card">
          <div class="chart-title">Current Engagement</div>
          <canvas id="weeklySalesChart" width="400" height="400"></canvas>
        </div>

        <div class="chart-card">
          <div class="chart-title">Prescription Status</div>
          <canvas id="customerTrendChart" width="400" height="400"></canvas>
        </div>
      </div>

      <div class="chart-card">
        <div class="chart-title">Medication Purchase Distribution</div>
        <canvas id="topSellingDrugsChart" width="800" height="400"></canvas>
      </div>
    </div>
  
</body>

<script>
  // Sample data for the charts
  const weeklySalesData = {
    labels: <?php include "../actions/get_weekly_sales.php"; echo $weeks; ?>,
    datasets: [{
      label: 'Weekly Sales',
      data: <?php include "../actions/get_weekly_sales.php"; echo $sales; ?>,
      borderColor: '#4CAF50',
      backgroundColor: 'rgba(76, 175, 80, 0.2)',
      borderWidth: 2,
      pointRadius: 5,
      pointBackgroundColor: '#4CAF50',
      pointBorderColor: '#fff',
      pointHoverRadius: 8,
      fill: true
    }]
  };

  const customerTrendData = {
    labels: ['pending', 'approved', 'denied'],
    datasets: [{
      label: 'Customer Trend',
      data: <?php include '../actions/get_prescription_approved_count.php'; echo $count;?>,
      borderColor: '#2196F3',
      backgroundColor: [
        //blue
        'rgba(33, 150, 243, 0.6)',
        //green
        'rgba(76, 175, 80, 0.6)',
        //red
        'rgba(244, 67, 54, 0.6)' 
      ],
      borderWidth: 2,
      pointRadius: 5,
      pointBackgroundColor: '#2196F3',
      pointBorderColor: '#fff',
      pointHoverRadius: 8,
      fill: true
    }]
  };
var count= <?php include '../actions/get_weekly_sales.php'; echo $count ?>;
  const topSellingDrugsData = {
    labels:<?php include "../actions/get_weekly_sales.php"; echo $meds; ?>,
    datasets: [{
      label: 'Top Selling Drugs',
      data: <?php include "../actions/get_weekly_sales.php";
  
      echo $med_sales; ?>,
      backgroundColor: [
        //Generates colors based on the number of datasets
        <?php
        include "../actions/get_weekly_sales.php";
        for ($i = 0; $i < $count; $i++) {
          echo "'rgba(" . rand(0, 255) . "," . rand(0, 255) . "," . rand(0, 255) . ",0.6)',";
        }
        ?>
      ],
      borderWidth: 1
    }]
  };

  // Chart configuration
  const weeklySalesConfig = {
    type: 'line',
    data: weeklySalesData,
    options: {
      scales: {
        y: {
          beginAtZero: true,
          title: {
            display: true,
            text: 'Sales',
            color: '#333'
          },
          ticks: {
            color: '#333'
          }
        },
        x: {
          ticks: {
            color: '#333'
          }
        }
      },
      plugins: {
        legend: {
          display: false
        }
      }
    }
  };

  const customerTrendConfig = {
    type: 'bar',
    data: customerTrendData,
    options: {
      scales: {
        y: {
          beginAtZero: true,
          // title: {
          //   display: true,
          //   text: 'Customers',
          //   color: '#333'
          // },
          // ticks: {
          //   color: '#333'
          // }
        },
        // x: {
        //   ticks: {
        //     color: '#333'
        //   }
        // }
      },
      plugins: {
        legend: {
          display: false
        }
      }
    }
  };

  const topSellingDrugsConfig = {
    type: 'pie',
    data: topSellingDrugsData,
    options: {
      plugins: {
        legend: {
          position: 'right',
          labels: {
            font: {
              size: 14
            }
          }
        }
      }
    }
  };

  // Create the charts
  new Chart(document.getElementById('weeklySalesChart'), weeklySalesConfig);
  new Chart(document.getElementById('customerTrendChart'), customerTrendConfig);
  new Chart(document.getElementById('topSellingDrugsChart'), topSellingDrugsConfig);
</script>

</html>