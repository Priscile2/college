<?php
session_start();  // Start the session at the very beginning
$student_id= $_SESSION['student_id'] ;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta tags and required links -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>College Engagement Tracker</title>
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-200">
  <!-- Your side navigation here -->
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
          <a class="nav-link text-white " href="dashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="opportunities.php">
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Opportunities</li>
          </ol>

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
        <div class="col-12">
          <h6>Opportunities Dashboard</h6>
          <div class="card mb-4">
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Opportunity</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Eligibility</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Location</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Deadline</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
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
  </main>

  <!-- Core JS Files -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Debug: Listen for when the modal is shown
    $('#opportunityModal').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget); // Button that triggered the modal
      var opportunityId = button.data('opportunity-id'); // Extract info from data-* attributes
      var modal = $(this);
      modal.find('.btn-primary').data('opportunity-id', opportunityId); // Set opportunity ID
      console.log("Modal shown for opportunity ID:", opportunityId);
    });

    var pursueButton = $("#pursueBtn"); // Changed to use jQuery for consistency
    pursueButton.on("click", function() {
      var opportunityId = $(this).data("opportunity-id");
      var opportunityRow = $(".opportunity-row[data-opportunity-id='" + opportunityId + "']"); // Changed to use jQuery for consistency

      if (opportunityRow.length) { // jQuery returns a collection, so check length for existence
        opportunityRow.css("backgroundColor", "#ffe4e1"); // Use jQuery's .css() method
        console.log("Pursued opportunity ID:", opportunityId);
      } else {
        console.log("No row found for opportunity ID:", opportunityId);
      }

      $('#opportunityModal').modal('hide'); // Hide the modal
    });
  });
</script>

<script>
  // javascript for fetching opportunities
  document.addEventListener("DOMContentLoaded", function() {
    fetchOpportunities();
  });

  function fetchOpportunities() {
    fetch('http://localhost/finalProjectfrontend/backend/opp_api.php?action=list')
      .then(response => response.json())
      .then(data => {
        displayOpportunities(data);
      })
      .catch(error => console.error('Error fetching opportunities:', error));
  }

  function displayOpportunities(opportunities) {
    const tableBody = document.querySelector('table.table tbody');
    tableBody.innerHTML = ''; // Clear existing rows

    opportunities.forEach(opportunity => {
      const row = `
              <tr>
                  <td>
                      <div class="d-flex px-2 py-1">
                          <div>
                              <img src="../images/Ashesi.png" class="avatar avatar-sm me-3" alt="user image">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">${opportunity.opportunity_name}</h6>
                              <p class="text-xs text-secondary mb-0">${opportunity.office}</p>
                          </div>
                      </div>
                  </td>
                  <td>
                          <div class="d-flex flex-column justify-content-center">
                              
                              <p class="text-xs text-secondary mb-0">${opportunity.eligibility}</p>
                          </div>
                  </td>
                  <td class="text-xs text-secondary mb-0">${opportunity.location}</td>
                  <td class="text-xs text-secondary mb-0">${opportunity.deadline}</td>
                  <td class="align-middle text-center">
                      
                      <button action= 'pursue' class="btn btn-primary btn-sm" onclick="pursueOpportunity(${opportunity.opportunity_id})">Pursue</button>
                  </td>
              </tr>
              
          `;
      tableBody.innerHTML += row;
    });


    
  }
  function pursueOpportunity(opportunityId) {
  // Assuming you have a way to identify the current user's ID
  const action = 'pursue';

  // Your backend endpoint URL
  const url = `http://localhost/finalProjectfrontend/backend/opp_api.php?action=${action}&opportunity_id=${opportunityId}`;

  // Data to be sent to the server
  const data = {
    action: action,
    opportunity_id: opportunityId
  };

  fetch(url, {
    method: 'POST', // Specify the method
    headers: {
      'Content-Type': 'application/json', // Specify the content type
    },
    body: JSON.stringify(data), // Convert the JavaScript object to a JSON string
  })
  .then(response => {
    // Handle the response
  })
  .catch(error => {
    // Handle errors
  });
}

</script>


</html>http://localhost/finalProjectfrontend/backend/opp_api.php?action=pursue&user_id=1&opportunity_id=1