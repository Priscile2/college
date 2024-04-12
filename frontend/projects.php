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
                <button class="btn btn-secondary edit-btn" id="edit_project">Edit</button>
                <button class="btn btn-danger delete-btn" id="delete_project">Delete</button>
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
  // Event listener for the 'Add Project' button
  document.getElementById('addProjectBtn').addEventListener('click', function() {
    let projectName = prompt('Enter project name:');
    let projectDesc = prompt('Enter project description:');
    const projectImg = "../images/image.png";
    if (projectName && projectDesc) {

      addProject2(projectName, projectDesc, projectImg);
    }
  });

  function addProject2(name, desc, imgSrc) {

    const formData = new FormData();
    formData.append("user_id", 1);
    formData.append("name", name);
    formData.append("desc", desc);

    fetch('http://localhost/finalProjectfrontend/backend/pro.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.json())
      .then((data) => {
        console.log(data)
        if (data.status == "success") {
          alert("Project successfully added")
        } else {
          alert('Error updating profile');
        }
      });

  }
  //Function to add projects to the interface when retrived from the database.
  function addProject(projectId, projectName, projectDesc) {
    const projectList = document.getElementById('projectList');
    const template = document.getElementById('projectCardTemplate').content.cloneNode(true);
    const delete_btn = template.querySelector('.delete-btn');
    const edit_btn = template.getElementById('edit_project');

    template.querySelector('.card-title').textContent = projectName;
    template.querySelector('.card-text').textContent = projectDesc;
    delete_btn.setAttribute('data-project-id', projectId);
    edit_btn.setAttribute('data-project-id', projectId);


    projectList.appendChild(template);
  }
  //Function for Retriving projects from the database
  function fetchProjects() {
    fetch('http://localhost/finalProjectfrontend/backend/fetchingprojects.php')
      .then(response => response.json())
      .then(data => {
        data.forEach(project => {

          addProject(project.project_id, project.project_name, project.project_description);
        });
      })
      .catch(error => console.error('Error fetching projects:', error));
  };


  //Function for deleting and editing a project

  document.addEventListener('DOMContentLoaded', () => {

    fetchProjects()
    const projectCardsContainer = document.querySelector('body');



    projectCardsContainer.addEventListener('click', async (e) => {
      if (e.target.classList.contains('delete-btn')) {
        const projectCard = e.target.closest('.project-card');

        const projectId = e.target.getAttribute('data-project-id');
        // Correctly use template literals to include the project ID in the URL
        const apiEndpoint = `http://localhost/finalProjectfrontend/backend/deletingprojects.php?project_id=${projectId}`;

        try {
          const response = await fetch(apiEndpoint, {
            method: 'DELETE',
          });

          if (response.ok) {
            projectCard.remove();
            console.log('Project successfully deleted');


          } else {
            console.error('Failed to delete the project');
          }
        } catch (error) {
          console.error('Error deleting the project:', error);
        }
      } else if (e.target.classList.contains('edit-btn')) {

        const projectName = prompt('Enter new project name:');
        const projectDesc = prompt('Enter new project description:');
        const projectCard = e.target.closest('.project-card');

        const projectId = e.target.getAttribute('data-project-id');

        if (projectName && projectDesc) {
          // Prepare data to send to the backend
          const formData = new FormData();
          formData.append("project_id", projectId);
          formData.append("name", projectName);
          formData.append("desc", projectDesc);


          const apiEndpoint = `http://localhost/finalProjectfrontend/backend/editingprojects.php?project_id=${projectId},name=${projectName},desc=${projectDesc}`;

          try {

            const response = await fetch(apiEndpoint, {
                method: 'PUT',
                headers: {
                  'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                  project_id: projectId,
                  name: projectName,
                  desc: projectDesc
                })


              })
              .then(response => response.json())
              .then(data => console.log(data));
            if (response.ok) {
              console.log('Project successfully updated');
            } else {
              console.error('Failed to update the project')
            }
          } catch (error) {
            console.error('Error update the project:', error)
          }


        }

      }
    });
  });
</script>

</html>