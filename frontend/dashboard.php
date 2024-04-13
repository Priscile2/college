<?php
session_start();
$student_id= $_SESSION['student_id'] ;
?>
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
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                        </tr>
                      </thead>
                      <tbody id="tableBody">
                        
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
      fetchEngagements();
    });

    function fetchEngagements() {
      fetch('http://localhost/finalProjectfrontend/backend/fetchingEngagement.php')
        .then(response => {
          if (!response.ok) {
            throw new Error('Network response was not ok')
          }
          return response.json();
        })
        .then(data => {
          displayEngagements(data);
        })
        .catch(error => {
          console.error('Error fetching engagements:', error);
          document.getElementById('tableBody').innerHTML = `<tr><td colspan="4">Failed to fetch data. Please try again later.</td></tr>`; // Show error directly in table
        });
    }

    function displayEngagements(engagements) {
      const tableBody = document.getElementById('tableBody'); // Prefer using ID for specific targeting
      tableBody.innerHTML = ''; // Clear existing rows

      if (engagements.length === 0) {
        tableBody.innerHTML = '<tr><td colspan="4" class="text-center">No engagements found.</td></tr>';
        return;
      }

      engagements.forEach(engagement => {
        const row = `
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                        <div>
                            <img src="../images/Ashesi.png" class="avatar avatar-sm me-3" alt="user image">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">${engagement.engagement_name}</h6>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-column justify-content-center">
                        <p class="text-xs text-secondary mb-0">${engagement.engagement_type}</p>
                    </div>
                </td>
                <td class="text-xs text-secondary mb-0">${engagement.location || 'N/A'}</td>
                <td class="text-xs text-secondary mb-0">${engagement.deadline}</td>
            </tr>
        `;
        tableBody.innerHTML += row; // Append new row
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
        .then(response => response.json()) // Convert the response to JSON
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