<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Material Dashboard 2 by Creative Tim
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

<body class="g-sidenav-show bg-gray-200">
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
          <a class="nav-link text-white " href="engagements.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Engagements</span>
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
        <li class="nav-item">
          <a class="nav-link text-white " href="notifications.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">notifications</i>
            </div>
            <span class="nav-link-text ms-1">Notifications</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="profile.php">
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
        <a class="btn bg-gradient-primary w-100" type="button">Logout</a>
      </div>
    </div>
  </aside>

  <div class="main-content position-relative max-height-vh-100 h-100">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Profile</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Profile</h6>
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
    <div class="container-fluid px-2 px-md-4">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../images/IMG_2391-e1671020212100-1024x551.jpg');">
        <span class="mask  bg-gradient-primary  opacity-6"></span>
      </div>
      <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row gx-4 mb-2">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="../images/profile.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                Priscile Nkenmeza
              </h5>
              <p class="mb-0 font-weight-normal text-sm">
                Student at Ashesi
              </p>
            </div>
          </div>
          
        </div>
        <div class="row">
          <div class="row">
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <h6 class="mb-0">Platform Settings</h6>
                </div>
                <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Account</h6>
                  <ul class="list-group">
                    <li class="list-group-item border-0 px-0">
                      <div class="form-check form-switch ps-0">
                        <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault" checked>
                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault">Email me when a new Opportunity is released</label>
                      </div>
                    </li>
                    <li class="list-group-item border-0 px-0">
                      <div class="form-check form-switch ps-0">
                        <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault1">
                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault1">Email me when a dateline has come</label>
                      </div>
                    </li>
                    
                  </ul>
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder mt-4">Application</h6>
                  <ul class="list-group">
                    <li class="list-group-item border-0 px-0">
                      <div class="form-check form-switch ps-0">
                        <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault3">
                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault3">New activites and projects</label>
                      </div>
                    </li>
                    <li class="list-group-item border-0 px-0">
                      <div class="form-check form-switch ps-0">
                        <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault4" checked>
                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault4">Monthly updates</label>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <h6 class="mb-0">Profile Information</h6>
                    </div>
                    <div class="col-md-4 text-end">
                      <!-- Trigger/Button for Modal -->
                        <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="modal" data-bs-target="#editProfileModal" style="cursor: pointer;" data-bs-placement="top" title="Edit Profile"></i>

                        <!-- Modal -->
                        <div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editProfileModalLabel">Edit Profile Information</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="editProfileForm" action="" method="POST">
                                            <!-- Editable fields here -->
                                            <input type="textbox" id="descriptionInput" class="form-control my-2" placeholder="About you" value="Hi, I'm Priscile Nkenmeza, Decisions: if you can't decide, the answer is no...">
                                            <input type="text" id="nameInput" class="form-control my-2" placeholder="Full name" value="Priscile Nkenmeza">
                                            <input type="email" id="emailInput" class="form-control my-2" placeholder="Email" value="priscile@gmail.com">
                                            <input type="tel" id="phoneInput" class="form-control my-2" placeholder="Phone" value="+233549923288">
                                            <input type="text" id="locationInput" class="form-control my-2" placeholder="Location" value="USA">
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" id="saveEditBtn" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                  </div>
                </div>
                <div class="card-body p-3">
                  <p class="text-sm">
                    Hi, I'm Priscile Nkenmeza, Decisions: if you can't decide, the answer is no...
                  </p>
                  <hr class="horizontal gray-light my-4">
                  <ul class="list-group">
                    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full Name:</strong> &nbsp; Priscile Nkenmeza </li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile:</strong> &nbsp; +233 549923288</li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp;priscile.nzonbi@ashesi.edu.gh</li>
                    
                  </ul>
                </div>
              </div>
            </div>   
        </div>
      </div>
    </div>
   
  </div>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>

  
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // JavaScript to handle profile editing
        var saveBtn = document.getElementById('saveEditBtn');
    
        if (saveBtn) {
          saveBtn.addEventListener('click', function() {
            // Save the form data
            var descriptionValue = document.getElementById('descriptionInput') ? document.getElementById('descriptionInput').value : '';
            var nameValue = document.getElementById('nameInput').value;
            var emailValue = document.getElementById('emailInput').value;
            var phoneValue = document.getElementById('phoneInput').value;
            var locationValue = document.getElementById('locationInput').value;
    
            // Update the profile display with the new values
            if (document.getElementById('displayDescription')) {
              document.getElementById('displayDescription').textContent = descriptionValue;
            }
            document.getElementById('displayName').textContent = 'Name: ' + nameValue;
            document.getElementById('displayEmail').textContent = 'Email: ' + emailValue;
            document.getElementById('displayPhone').textContent = 'Phone: ' + phoneValue;
            document.getElementById('displayLocation').textContent = 'Location: ' + locationValue;
    
            // Close the modal using Bootstrap's jQuery method
            $('#editProfileModal').modal('hide');
          });
        }
      });
    
      // Function to add a new project card
      function addProject(projectName, projectDesc) {
          // Clone the template
          let template = document.getElementById('projectCardTemplate').content.cloneNode(true);
          // Set project name and description
          template.querySelector('.card-title').textContent = projectName;
          template.querySelector('.card-text').textContent = projectDesc;
          // Add event listeners for the buttons
          template.querySelector('.view-btn').addEventListener('click', function() {
              alert(projectDesc); // For demo purposes, replace with a modal or detailed view
          });
          template.querySelector('.edit-btn').addEventListener('click', function() {
              // Show edit form
              // Implement the show form logic
          });
          template.querySelector('.delete-btn').addEventListener('click', function() {
              // Remove project card
              // Implement the remove logic
          });
          // Append the new project card to the project list
          document.getElementById('projectList').appendChild(template);
      }
    
      // Event listener for the 'Add Project' button
      document.getElementById('addProjectBtn').addEventListener('click', function() {
          let projectName = prompt('Enter project name:');
          let projectDesc = prompt('Enter project description:');
          const projectImg = "../images/image.png"; 
          if(projectName && projectDesc) {
              addProject(projectName, projectDesc,projectImg);
          }
      });
    
      function addProject(name, desc, imgSrc) {
          const projectList = document.getElementById('projectList');
          const colDiv = document.createElement('div');
          colDiv.className = 'col-md-4 project-card';
          
          const cardDiv = document.createElement('div');
          cardDiv.className = 'card';
          
          const img = document.createElement('img');
          img.src = imgSrc;
          img.className = 'card-img-top';
          img.alt = 'Project Image';
          
          const cardBody = document.createElement('div');
          cardBody.className = 'card-body';
          
          const title = document.createElement('h5');
          title.className = 'card-title';
          title.textContent = name;
          
          const text = document.createElement('p');
          text.className = 'card-text';
          text.textContent = desc;
          
          const editBtn = document.createElement('button');
          editBtn.className = 'btn btn-secondary edit-btn';
          editBtn.textContent = 'Edit';
          editBtn.onclick = function() {
              const newName = prompt("Edit project name:", name);
              const newDesc = prompt("Edit project description:", desc);
              if (newName && newDesc) {
                  title.textContent = newName;
                  text.textContent = newDesc;
              }
          };
          
          const deleteBtn = document.createElement('button');
          deleteBtn.className = 'btn btn-danger delete-btn';
          deleteBtn.textContent = 'Delete';
          deleteBtn.onclick = function() {
              projectList.removeChild(colDiv);
          };
    
          cardBody.appendChild(title);
          cardBody.appendChild(text);
          cardBody.appendChild(editBtn);
          cardBody.appendChild(deleteBtn);
          cardDiv.appendChild(img);
          cardDiv.appendChild(cardBody);
          colDiv.appendChild(cardDiv);
          projectList.appendChild(colDiv);
      }
    
    
      document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('addProjectToPortfolioBtn').addEventListener('click', function() {
            const projectName = document.getElementById('newProjectName').value;
            const projectDesc = document.getElementById('newProjectDesc').value;
            
            if (!projectName || !projectDesc) {
                alert('Please fill out both the project name and description.');
                return;
            }
    
            // Here you can send the data to a server or local storage. 
            // This example will only add it to the local `portfolio.html` page.
            
            // Code to add the project to the `portfolio.html` page would go here.
            // For demonstration, we will just add it to the current page.
            
            const projectList = document.getElementById('projectList');
            const projectCard = document.createElement('div');
            projectCard.classList.add('col-md-4', 'mb-3');
            
            projectCard.innerHTML = `
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">${projectName}</h5>
                        <p class="card-text">${projectDesc}</p>
                    </div>
                </div>
            `;
    
            projectList.appendChild(projectCard);
            
            // Clear the fields
            document.getElementById('newProjectName').value = '';
            document.getElementById('newProjectDesc').value = '';
        });
    });
    
    
    document.addEventListener('DOMContentLoaded', function() {
        // Event listener for the 'Add to Portfolio' button
        document.addEventListener('click', function(event) {
            if (event.target.classList.contains('add-to-portfolio-btn')) {
                const cardBody = event.target.closest('.card-body');
                const projectTitle = cardBody.querySelector('.card-title').textContent;
                const projectDesc = cardBody.querySelector('.card-text').textContent;
    
                // Here you would typically send the data to your server for storage
                // For now, we'll just log it to the console
                console.log('Adding to portfolio:', projectTitle, projectDesc);
    
                // Optionally, update the UI to reflect the addition
                // For example, disable the button to prevent duplicate additions
                event.target.disabled = true;
                event.target.textContent = 'Added to Portfolio';
    
                // Here you could call a function to actually add the project to the portfolio page
                // addToPortfolio(projectTitle, projectDesc); // Define this function as needed
            }
        });
    
        // Function to dynamically add a new project card to the list (You can customize this as per your requirement)
        function addProject(projectName, projectDesc) {
            const projectList = document.getElementById('projectList');
            const template = document.getElementById('projectCardTemplate').content.cloneNode(true);
            
            template.querySelector('.card-title').textContent = projectName;
            template.querySelector('.card-text').textContent = projectDesc;
    
            // Add the clone to the page
            projectList.appendChild(template);
        }
    
        // Example usage:
        // addProject('New Project', 'This is a description of a new project.');
    
        // Other event listeners and functions as needed...
    });

    document.addEventListener('DOMContentLoaded', function () {
        var saveBtn = document.getElementById('saveEditBtn');
        saveBtn.addEventListener('click', function() {
            var description = document.getElementById('descriptionInput').value;
            var name = document.getElementById('nameInput').value;
            var email = document.getElementById('emailInput').value;
            var phone = document.getElementById('phoneInput').value;
            var location = document.getElementById('locationInput').value;
            
            // Example: Log to console (replace this with actual save logic)
            console.log('Saving data:', { description, name, email, phone, location });
    
            // Here, you'd typically send the data to a server
            // For example, using fetch or XMLHttpRequest to post the data
            
            // Close the modal after saving
            $('#editProfileModal').modal('hide');
        });
    });
</script>

</html>