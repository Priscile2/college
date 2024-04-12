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
          <a class="nav-link text-white " href="dashboard.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="tables.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Tables</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="notifications.html">
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
          <a class="nav-link text-white active bg-gradient-primary" href="profile.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="sign-in.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Sign In</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="sign-up.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">assignment</i>
            </div>
            <span class="nav-link-text ms-1">Sign Up</span>
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
              <a href="sign-in.html" class="nav-link text-body font-weight-bold px-0">
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
                                        <form id="editProfileForm">
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
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <h6 class="mb-0">Conversations</h6>
                </div>
                <div class="card-body p-3">
                  <ul class="list-group">
                    <li class="list-group-item border-0 d-flex align-items-center px-0">
                      <div class="avatar me-3">
                        <img src="../images/IMG_2391-e1671020212100-1024x551.jpg" alt="kal" class="border-radius-lg shadow">
                      </div>
                      <div class="d-flex align-items-start flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Nick Daniel</h6>
                        <p class="mb-0 text-xs">Hi! I need more information..</p>
                      </div>
                      <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto" href="javascript:;">Reply</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-12 mt-4">
              <div class="mb-5 ps-3">
                <section class="projects mt-3">
                    <h5>Projects</h5>
                    <div id="projectList" class="row">
                        <!-- Project cards will be added here dynamically -->
                    </div>
                    <button id="addProjectBtn" class="btn btn-primary mt-2">Add Project</button>
                </section>

                <template id="projectCardTemplate">
                    <div class="col-md-6 project-card">
                        <div class="card">
                            <img src="../images/default-project-image.png" class="card-img-top" alt="Project">
                            <div class="card-body">
                                <h5 class="card-title">Project Name</h5>
                                <p class="card-text">Project description...</p>
                                <button class="btn btn-primary view-btn">View</button>
                                <button class="btn btn-secondary edit-btn">Edit</button>
                                <button class="btn btn-danger delete-btn">Delete</button>
                                <!-- Add "Add to Portfolio" button here -->
                                <button class="btn btn-info add-to-portfolio-btn" onclick="window.location='https:apps.ashesi.edu.gh/exp_transcript/view/exp_transcript';">Add to Portfolio</button>
                            </div>
                        </div>
                    </div>
                </template>

                <template id="editFormTemplate">
                    <form class="edit-form">
                        <div class="mb-3">
                            <label for="projectName" class="form-label">Project Name</label>
                            <input type="text" class="form-control" id="projectName">
                        </div>
                        <div class="mb-3">
                            <label for="projectDesc" class="form-label">Description</label>
                            <textarea class="form-control" id="projectDesc" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                        <button type="button" class="btn btn-secondary cancel-btn">Cancel</button>
                    </form>
                </template>
                
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
   //Updating the profile
   document.addEventListener('DOMContentLoaded', function() {
    var saveBtn = document.getElementById('saveEditBtn');
    if (saveBtn) {
        saveBtn.addEventListener('click', function() {
            var description = document.getElementById('descriptionInput').value;
            var name = document.getElementById('nameInput').value;
            var email = document.getElementById('emailInput').value;
            var phone = document.getElementById('phoneInput').value;
            var receiveNewOpportunityEmail = document.getElementById('flexSwitchCheckDefault').checked;
            var receiveDeadlineEmail = document.getElementById('flexSwitchCheckDefault1').checked;
            var receiveMonthlyUpdate = document.getElementById('flexSwitchCheckDefault4').checked;
            
            // Replace with your API endpoint
            fetch('http://localhost/finalProjectfrontend/backend/profile.php?action=updateProfile', {
                method: 'POST',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify({
                    user_id: 1, // Replace with actual user ID
                    name: name,
                    email: email,
                    phone: phone,
                    bio: description,
                    receive_new_opportunity_email: receiveNewOpportunityEmail,
                    receive_deadline_email: receiveDeadlineEmail,
                    receive_monthly_update: receiveMonthlyUpdate
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Profile updated successfully');
                    // Optionally, refresh the page or update the UI here
                } else {
                    alert('Error updating profile');
                }
            });
        });
    }
});
// Adding a new project
document.getElementById('addProjectBtn').addEventListener('click', function() {
    let projectName = prompt('Enter project name:');
    let projectDesc = prompt('Enter project description:');
    if (projectName && projectDesc) {
        fetch('http://localhost/finalProjectfrontend/backend/profile.php?action=addProject', {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify({
                user_id: 1, // Replace with actual user ID
                project_name: projectName,
                project_description: projectDesc
                // Add other necessary fields
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Project added successfully');
                // Optionally, re-fetch projects or directly add the project to the DOM
            } else {
                alert('Error adding project');
            }
        });
    }
});

//Fetching and displaying projects

document.addEventListener('DOMContentLoaded', function() {
    // Assuming 'userId' is available through some means (e.g., logged-in user session)
    var userId = 1; // Replace with dynamic user ID as appropriate
    fetchAndDisplayProjects(userId);

    // Define the fetchAndDisplayProjects function
    function fetchAndDisplayProjects(userId) {
        fetch(`http://localhost/finalProjectfrontend/backend/profile.php?action=listProjects&user_id=${userId}`)
            .then(response => response.json())
            .then(projects => {
                const projectList = document.getElementById('projectList');
                projectList.innerHTML = ''; // Clear existing projects
                projects.forEach(project => {
                    addProject(project.project_name, project.project_description, project.project_id);
                });
            })
            .catch(error => console.error('Error fetching projects:', error));
    }
});

//Adding projects to the DOM
function addProjectToDOM(name, description, projectId) {
    const projectList = document.getElementById('projectList');
    const projectCard = document.createElement('div');
    projectCard.classList.add('col-md-4', 'project-card');
    projectCard.innerHTML = `
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">${name}</h5>
                <p class="card-text">${description}</p>
                <button class="btn btn-primary view-btn">View</button>
                <button class="btn btn-secondary edit-btn" data-project-id="${projectId}">Edit</button>
                <button class="btn btn-danger delete-btn" data-project-id="${projectId}">Delete</button>
            </div>
        </div>
    `;
    projectList.appendChild(projectCard);
}

//Adding projects handlers

document.getElementById('addProjectForm').addEventListener('submit', function(e) {
    e.preventDefault();
    var projectName = document.getElementById('projectNameInput').value;
    var projectDescription = document.getElementById('projectDescriptionInput').value;
    var userId = '1'; // The user ID needs to be fetched or stored globally
    
    var formData = new FormData();
    formData.append('action', 'addProject');
    formData.append('user_id', userId);
    formData.append('project_name', projectName);
    formData.append('project_description', projectDescription);
    // Append other project details as necessary

    fetch('http://localhost/finalProjectfrontend/backend/profile.php.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);
        // Optionally refresh or update the project list
        fetchAndDisplayProjects(userId); // Assuming you've implemented this function
    })
    .catch(error => console.error('Error:', error));
});



document.getElementById('saveEditBtn').addEventListener('click', function() {
    var bio = document.getElementById('descriptionInput').value;
    var name = document.getElementById('nameInput').value;
    var email = document.getElementById('emailInput').value;
    var phone = document.getElementById('phoneInput').value;
    var userId = 1; // The user ID needs to be fetched or stored globally
    
    var formData = new FormData();
    formData.append('action', 'updateProfile');
    formData.append('user_id', userId); // Ensure you are passing the correct user ID
    formData.append('bio', bio);
    formData.append('phone_number', phone);
    formData.append('email', email);
    // Append other form data as necessary

    fetch('http://localhost/finalProjectfrontend/backend/profile.php.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);
        // Feedback to the user or reload parts of the page to reflect changes
        $('#editProfileModal').modal('hide'); // Close the modal if update is successful
    })
    .catch(error => console.error('Error:', error));
});
document.addEventListener('click', function(e) {
    if (e.target && e.target.classList.contains('edit-btn')) {
        const projectId = e.target.getAttribute('data-project-id');
        // Populate your edit form/modal with the project's current details
        // For demonstration, let's assume you have a modal with ID 'editProjectModal'
        const projectModal = document.getElementById('editProjectModal');
        const projectNameInput = projectModal.querySelector('#editProjectName');
        const projectDescriptionInput = projectModal.querySelector('#editProjectDescription');
        
        // Assuming function to fetch project details and populate the form
        fetchProjectDetails(projectId, projectNameInput, projectDescriptionInput);

        // When save changes button is clicked in the modal
        document.getElementById('saveProjectChanges').addEventListener('click', function() {
            var userId = '1'; // User ID needs to be fetched or stored globally
            var projectName = projectNameInput.value;
            var projectDescription = projectDescriptionInput.value;

            var formData = new FormData();
            formData.append('action', 'editProject');
            formData.append('user_id', userId);
            formData.append('project_id', projectId);
            formData.append('project_name', projectName);
            formData.append('project_description', projectDescription);
            // Append other project details as necessary

            fetch('http://localhost/finalProjectfrontend/backend/profile.php.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);
                // Optionally refresh or update the project list
                fetchAndDisplayProjects(userId); // Assuming you've implemented this function
                $('#editProjectModal').modal('hide'); // Close the modal if update is successful
            })
            .catch(error => console.error('Error:', error));
        });
    }
});
document.addEventListener('click', function(e) {
    if (e.target && e.target.classList.contains('delete-btn')) {
        const projectId = e.target.getAttribute('data-project-id');
        if (confirm('Are you sure you want to delete this project?')) {
            var userId = 1; // User ID needs to be fetched or stored globally

            var formData = new FormData();
            formData.append('action', 'deleteProject');
            formData.append('user_id', userId);
            formData.append('project_id', projectId);

            fetch('http://localhost/finalProjectfrontend/backend/profile.php.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);
                // Refresh the project list to reflect the deletion
                fetchAndDisplayProjects(userId);
            })
            .catch(error => console.error('Error:', error));
        }
    }
});



</script>
<scripts>
  

</scripts>

</html>