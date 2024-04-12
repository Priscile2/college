<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    College Engagement Tracker
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-200">

  <?php
  session_start();

  if (!isset($_SESSION['user_id'])) {
    header('Location: ../frontend/sign-in.php');
    exit();
  }
  ?>

  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">

    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Engagement Tracker</span>
      </a>
    </div>

    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="dashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="opportunities.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Opportunities</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="calendar.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Calender</span>
          </a>

        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="projects.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Projects</span>
          </a>

        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="profile.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>

      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn btn-outline-primary mt-4 w-100" href="https://apps.ashesi.edu.gh/exp_transcript/view/exp_transcript" type="button">Transcript</a>
        <a class="btn bg-gradient-primary w-100" href="../backend/logout.php" type="button">Logout</a>
      </div>
    </div>
  </aside>


  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">

          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="sign-in.php" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Total Events</p>
                <h4 class="mb-0" id="eventCount">20</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">20 </span>hours weekly</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Total Projects</p>
                <h4 class="mb-0" id="projectCount">10 </h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">Amazing </span>You are brilliant</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Total Engagements</p>
                <h4 class="mb-0" id="engagementCount">4</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">Yahh!!!</span> Stay focused</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>

              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Total hours at events </p>
                <h4 class="mb-0" id="hoursCount">6</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">Strong</span>You Got this</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-4 col-md-6 mt-4 mb-4">
          <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                <div class="chart">
                  <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 ">Weekly Engagements</h6>
              <p class="text-sm ">Stay Disciplined</p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm"> You can do this, and in time</p>
              </div>

            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4 mb-4">
          <div class="card z-index-2  ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                <div class="chart">
                  <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 "> Daily Sales </h6>
              <p class="text-sm "> (<span class="font-weight-bolder">+15%</span>) increase in today sales. </p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm"> updated 4 min ago </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-4 mb-3">
          <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                <div class="chart">
                  <canvas id="chart-line-tasks" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 ">Weekly Completed Tasks</h6>
              <p class="text-sm ">You are getting there</p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm">Stay Focused</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <h6>Your Engagements</h6>
            <div class="card mb-4">
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Enagement name</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Enagement type</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Location</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



  <script>
    // javascript for fetching opportunities
    document.addEventListener("DOMContentLoaded", function() {
      fetchEnagements();
    });

    function fetchEnagements() {
      fetch('http://localhost/finalProjectfrontend/backend/opp_api.php?action=list')
        .then(response => response.json())
        .then(data => {
          displayEnagagements(data);
        })
        .catch(error => console.error('Error fetching engagements:', error));
    }

    function displayEnagagements(engagements) {
      const tableBody = document.querySelector('table.table tbody');
      tableBody.innerHTML = ''; // Clear existing rows

      engagements.forEach(engagement => {
        const row = `
              <tr>
                  <td>
                      <div class="d-flex px-2 py-1">
                          <div>
                              <img src="../images/engagement.png" class="avatar avatar-sm me-3" alt="user image">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">${Engagements.engagement_name}</h6>
                              <p class="text-xs text-secondary mb-0">${opportunity.office}</p>
                          </div>
                      </div>
                  </td>
                  <td>
                          <div class="d-flex flex-column justify-content-center">
                              
                              <p class="text-xs text-secondary mb-0">${Engagements.engagement_type}</p>
                          </div>
                  </td>
                  <td class="text-xs text-secondary mb-0">${opportunity.location}</td>
                  <td class="text-xs text-secondary mb-0">${opportunity.deadline}</td>
                  <td class="align-middle text-center">
                      <a href="javascript:;" class="text-pink font-weight-bold text-xs" data-bs-toggle="modal" data-bs-target="#opportunityModal" style="color: #e91e63;">View</a>
                      
                      <button class="btn btn-primary btn-sm" onclick="pursueOpportunity(${opportunity.opportunity_id})">Pursue</button>
                  </td>
              </tr>
              
          `;
        tableBody.innerHTML += row;
      });
    }


    //counting Calendar Events
    document.addEventListener('DOMContentLoaded', function() {
      fetchEventCount();
    });

    function fetchEventCount() {
      // The URL to your endpoint that returns the count of events
      const apiUrl = 'http://localhost/finalProjectfrontend/backend/countEvents.php';

      fetch(apiUrl)
        .then(response => {
          if (!response.ok) {
            throw new Error('Network response was not ok');
          }
          return response.json(); // Assuming the server responds with JSON
        })
        .then(data => {
          // Assuming the server responds with an object that has an event_count property
          console.log('Number of events:', data.event_count);
          // Directly update the innerText of the element with ID "eventCount"
          document.getElementById('eventCount').innerText = data.event_count;
        })
        .catch(error => {
          console.error('Error fetching event count:', error);
          // Optionally, display an error message in the UI
        });
    }


    //counting Calendar Events
    document.addEventListener('DOMContentLoaded', function() {
      fetchProjectCount();
    });

    function fetchProjectCount() {
      // The URL to your endpoint that returns the count of events
      const apiUrl = 'http://localhost/finalProjectfrontend/backend/countProjects.php';

      fetch(apiUrl)
        .then(response => {
          if (!response.ok) {
            throw new Error('Network response was not ok');
          }
          return response.json(); // Assuming the server responds with JSON
        })
        .then(data => {
          // Assuming the server responds with an object that has an event_count property
          console.log('Number of projects:', data.project_count);
          // Directly update the innerText of the element with ID "eventCount"
          document.getElementById('projectCount').innerText = data.project_count;
        })
        .catch(error => {
          console.error('Error fetching event count:', error);

        });
    }
    // Counting Engagements
    document.addEventListener('DOMContentLoaded', function() {
      fetchEngagementCount();
    });

    function fetchEngagementCount() {
      // The URL to your endpoint that returns the count of events
      const apiUrl = 'http://localhost/finalProjectfrontend/backend/countEngagements.php';

      fetch(apiUrl)
        .then(response => {
          if (!response.ok) {
            throw new Error('Network response was not ok');
          }
          return response.json(); // Assuming the server responds with JSON
        })
        .then(data => {
          // Assuming the server responds with an object that has an event_count property
          console.log('Number of engagements:', data.engagement_count);
          // Directly update the innerText of the element with ID "eventCount"
          document.getElementById('engagementCount').innerText = data.engagement_count;
        })
        .catch(error => {
          console.error('Error fetching event count:', error);

        });
    }

    document.addEventListener('DOMContentLoaded', function() {
  fetchHoursAtEvent();
});

function fetchHoursAtEvent() {
  const apiUrl = 'http://localhost/finalProjectfrontend/backend/hoursAtEvent.php';
  fetch(apiUrl)
    .then(response => response.json())  // Convert the response to JSON
    .then(data => {
      if (data.error) {
        console.error('Error:', data.error);
        document.getElementById('hoursCount').innerText = "Error fetching hours";
      } else {
        console.log('Total hours spent:', data.total_hours);
        document.getElementById('hoursCount').innerText = data.total_hours;
      }
    })
    .catch(error => {
      console.error('Failed to fetch hours:', error);
      document.getElementById('hoursCount').innerText = "Failed to fetch hours";
    });
}


    //Events per week.

    document.addEventListener('DOMContentLoaded', function() {
      fetchWeeklyEventData();
    });

    // Function to fetch weekly event data and update the chart
    function fetchWeeklyEventData() {
      const apiUrl = 'http://localhost/finalProjectfrontend/backend/weeklyEvents.php'; // Update this to your actual API URL

      fetch(apiUrl)
        .then(response => {
          if (!response.ok) {
            throw new Error('Network response was not ok');
          }
          return response.json();
        })
        .then(data => {
          // Assuming the data is in the format [{day: 'M', count: 10}, {day: 'T', count: 20}, ...]
          const labels = data.map(entry => entry.day);
          const counts = data.map(entry => entry.count);
          generateDailyEventsChart(labels, counts);
        })
        .catch(error => {
          console.error('Error fetching weekly event data:', error);
        });
    }

    // Function to generate the daily events chart
    function generateDailyEventsChart(labels, data) {
      var ctx = document.getElementById("chart-bars").getContext("2d");

      new Chart(ctx, {
        type: "bar",
        data: {
          labels: labels, // Labels for the days of the week
          datasets: [{
            label: "Events",
            tension: 0.4,
            borderWidth: 0,
            borderRadius: 4,
            borderSkipped: false,
            backgroundColor: "rgba(75,192,192,1)",
            data: data, // Event counts for each day
            maxBarThickness: 6
          }],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: true,
            }
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(255, 255, 255, .2)'
              },
              ticks: {
                suggestedMin: 0,
                suggestedMax: Math.max(...data) + 1, // Adjust the max value based on the data
                beginAtZero: true,
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: "Roboto",
                  style: 'normal',
                  lineHeight: 2
                },
                color: "#fff"
              },
            },
            x: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(255, 255, 255, .2)'
              },
              ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: "Roboto",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
          },
        },
      });
    }
  </script>
  </script>


  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

</body>

</html>