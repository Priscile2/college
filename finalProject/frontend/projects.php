<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Project Management</title>
  <!-- Fonts and icons -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- Material Dashboard CSS -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  
</head>
<body class="g-sidenav-show bg-gray-200">

  <!-- Sidenav -->
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
    <!-- Sidenav Header -->
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#" target="_blank">
        <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Project Management</span>
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
          <a class="nav-link text-white" href="opportunities.php">
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
          <a class="nav-link text-white active bg-gradient-primary " href="projects.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10 ">table_view</i>
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
        <a class="btn bg-gradient-primary w-100" type="button">Logout</a>
      </div>
    </div>
    <!-- Sidenav content here -->
  </aside>

  <!-- Main Content -->
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
    
    <!-- Content -->
    
      <div class="grid">
        <section>
        <div class="card">
        <div class="card-body">
            <hgroup>
            <h4>Your project dashboard</h4>
            </hgroup>
        </div>
        </div>

          <button id="addProjectBtn" class="btn btn-primary mt-2">Add New Project</button>
          <div id="projectList" class="row"></div>
  
          <template id="projectCardTemplate">
            <div class="col-md-6 project-card">
              <div class="card">
                <img src="../images/image.png" class="card-img-top" alt="Project">
                <div class="card-body">
                  <h5 class="card-title">Project Name</h5>
                  <p class="card-text">Project description...</p>
                  <button class="btn btn-secondary edit-btn">Edit</button>
                  <button class="btn btn-danger delete-btn">Delete</button>
                </div>
              </div>
            </div>
          </template>
        </section>
      </div>
      <!-- Your project management app content here -->
    </div>
  </div>

  <!-- Core JS Files -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>
<script>
    
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

          console.log("projectName", name);
          console.log("projectDesc", desc);

         const formData = new FormData();
         formData.append("user_id", 1);
         formData.append("name", name);
         formData.append("desc", desc);


         

          fetch('http://localhost/finalProjectfrontend/backend/pro.php', {
                method: 'POST',
                body: formData
                    
                
            })
            .then(response => response.json())
            .then(data => {
                console.log(data)
                if (data.status=="success") {
                    alert('Project added successfully');
                    // Optionally, refresh the page or update the UI here
                } else {
                    alert('Error updating profile');
                }
            });


            document.addEventListener("DOMContentLoaded", function() {
                    fetchProjects(); 
                });

                function fetchProjects() {
                    fetch('http://localhost/finalProjectfrontend/backend/pro.php?action=list')
                    .then(response => response.json())
                    .then(data => {
                        displayProjects(data); 
                    })
                    .catch(error => console.error('Error fetching projects:', error));
                }

                function displayProjects(projects) {
                    const tableBody = document.querySelector('table.table tbody');
                    tableBody.innerHTML = ''; // Clear existing rows

                    projects.forEach(project => { // Corrected variable name
                        const row = `
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">${project.project_name}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <p class="text-xs text-secondary mb-0">${project.project_description}</p>
                                    </div>
                                </td>
                            </tr>
                        `;
                        tableBody.innerHTML += row;
                    });
                }

      }
    
    
    document.addEventListener('DOMContentLoaded', function() {
    fetchProjects();

    function addProject(projectName, projectDesc) {
        const projectList = document.getElementById('projectList');
        const template = document.getElementById('projectCardTemplate').content.cloneNode(true);
        
        template.querySelector('.card-title').textContent = projectName;
        template.querySelector('.card-text').textContent = projectDesc;

        // Add the clone to the page
        projectList.appendChild(template);
    }

    function fetchProjects() {
        // Assuming 'fetchProjectsUrl' is the URL to fetch projects from your backend
        fetch('http://localhost/finalProjectfrontend/backend/fetchingprojects.php')
        .then(response => response.json())
        .then(data => {
            data.forEach(project => {
                addProject(project.project_name, project.project_description);
            });
        })
        .catch(error => console.error('Error fetching projects:', error));
    }
});



function deleteProject(projectId, template) {
    // Specify the URL for the DELETE request
    const url = `http://localhost/finalProjectfrontend/backend/deletingprojects.php?projectId=${projectId}`;


    // Make the DELETE request to the server
    fetch(url, {
        method: 'POST', // Set the request method to DELETE
        headers: {
            // If needed, set any required headers here
            'Content-Type': 'application/json',
            // Example Authorization header
            // 'Authorization': 'Bearer YOUR_TOKEN_HERE',
        }
    })
    .then(response => response.json())
    .then(data => {
        console.log(data); // Log the response from the server
        // Check the response. Assuming 'status' key indicates success or failure.
        if(data.status === 'success') {
            // Remove the project card from the UI
            template.remove();
            alert('Project successfully deleted.');
        } else {
            // Handle failure
            alert('Failed to delete project: ' + (data.message || 'Unknown error'));
        }
    })
    .catch(error => {
        // Handle any errors that occurred during the fetch
        console.error('Error:', error);
        alert('An error occurred while deleting the project.');
    });


    projects.forEach(project => {
    const card = document.createElement('div');
    card.className = 'project-card';
    // Add other card details here

    const deleteBtn = document.createElement('button');
    deleteBtn.innerText = 'Delete';
    deleteBtn.className = 'btn btn-danger';
    // Attach an event listener to the delete button
    deleteBtn.addEventListener('click', function() {
        // Call deleteProject with the project ID and the card element
        deleteProject(project.id, card);
    });

    // Append the delete button to the card
    card.appendChild(deleteBtn);

    // Append the card to the container
    document.getElementById('projectsContainer').appendChild(card);
});


}


    
</script>
</html>
