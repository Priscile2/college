<script>
    document.addEventListener('DOMContentLoaded', function() {
      const apiUrl = 'http://localhost/finalProjectfrontend/backend/profile.php'; // Adjust this URL to match your actual API endpoint
      
      // Fetch and display projects
      function fetchProjects() {
        axios.get(`${apiUrl}?action=listProjects&user_id=1`) // Adjust the user_id accordingly
          .then(function(response) {
            const projects = response.data;
            const projectList = document.getElementById('projectList');
            projectList.innerHTML = ''; // Clear existing entries
            
            projects.forEach(project => {
              const projectElement = document.createElement('div');
              projectElement.className = 'col-md-6 project-card';
              projectElement.innerHTML = `
                <div class="card">
                  <img src="../images/image.png" class="card-img-top" alt="Project">
                  <div class="card-body">
                    <h5 class="card-title">${project.project_name}</h5>
                    <p class="card-text">${project.project_description}</p>
                    <button class="btn btn-primary view-btn">View</button>
                    <button class="btn btn-secondary edit-btn" data-id="${project.project_id}">Edit</button>
                    <button class="btn btn-danger delete-btn" data-id="${project.project_id}">Delete</button>
                  </div>
                </div>
              `;
              projectList.appendChild(projectElement);
            });

            // Attach event listeners for the new buttons
            attachEventListeners();
          })
          .catch(function(error) {
            console.log(error);
          });
      }

      // Function to attach event listeners to edit and delete buttons
      function attachEventListeners() {
        document.querySelectorAll('.edit-btn').forEach(button => {
          button.addEventListener('click', function() {
            const projectId = this.getAttribute('data-id');
            // Assuming you have an edit form in your HTML with ID 'editProjectForm' and input fields with IDs 'editProjectName' and 'editProjectDescription'
            function showEditForm(projectId) {
            // Fetch project details from the server
            axios.get(`${apiUrl}?action=getProjectDetails&project_id=${projectId}`)
                .then(function(response) {
                const project = response.data;
                // Populate the edit form with the project's details
                document.getElementById('editProjectName').value = project.project_name;
                document.getElementById('editProjectDescription').value = project.project_description;
                // Store the project ID in a hidden field or use a global variable
                document.getElementById('editProjectId').value = projectId;
                // Show the edit form (assuming it's initially hidden)
                $('#editProjectModal').modal('show'); // Using Bootstrap's modal functionality
                })
                .catch(function(error) {
                console.log(error);
                });
            }

            // Attach this function to the edit button's click event inside attachEventListeners function
            document.querySelectorAll('.edit-btn').forEach(button => {
            button.addEventListener('click', function() {
                const projectId = this.getAttribute('data-id');
                showEditForm(projectId); // Call the function to show the edit form
            });
            });

            // Function to handle edit form submission
            document.getElementById('editProjectForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const projectId = document.getElementById('editProjectId').value;
            const projectName = document.getElementById('editProjectName').value;
            const projectDescription = document.getElementById('editProjectDescription').value;
            
            // Submit the updated details to the server
            axios.post(apiUrl, {
                action: 'editProject',
                project_id: projectId,
                project_name: projectName,
                project_description: projectDescription
                // Include other fields as needed
            })
            .then(function(response) {
                console.log(response.data);
                $('#editProjectModal').modal('hide'); // Hide the modal
                fetchProjects(); // Refresh the project list to show the updated details
            })
            .catch(function(error) {
                console.log(error);
            });
            });

          });
        });

        document.querySelectorAll('.delete-btn').forEach(button => {
          button.addEventListener('click', function() {
            const projectId = this.getAttribute('data-id');
            axios.post(apiUrl, {
              action: 'deleteProject',
              project_id: projectId,
              user_id: 1 // Adjust the user_id accordingly
            })
            .then(function(response) {
              console.log(response.data);
              fetchProjects(); // Refresh the project list
            })
            .catch(function(error) {
              console.log(error);
            });
          });
        });
      }

      // Initial fetch of projects
      fetchProjects();

      /// Example function to handle profile update submission
        function updateProfile() {
            // Grab the form data
            const bio = document.getElementById('descriptionInput').value;
            const name = document.getElementById('nameInput').value;
            const email = document.getElementById('emailInput').value;
            const phone = document.getElementById('phoneInput').value;
            const receiveNewOpportunityEmail = document.getElementById('flexSwitchCheckDefault').checked ? 1 : 0;
            const receiveDeadlineEmail = document.getElementById('flexSwitchCheckDefault1').checked ? 1 : 0;
            const receiveMonthlyUpdate = document.getElementById('flexSwitchCheckDefault4').checked ? 1 : 0;

            // Assuming apiUrl is defined and points to your API endpoint
            axios.post(apiUrl, {
                action: 'updateProfile',
                user_id: 1, // Adjust accordingly. Ideally, this should be dynamically determined based on the logged-in user session.
                name: name,
                email: email,
                phone: phone,
                bio: bio,
                receive_new_opportunity_email: receiveNewOpportunityEmail,
                receive_deadline_email: receiveDeadlineEmail,
                receive_monthly_update: receiveMonthlyUpdate
            })
            .then(function(response) {
                console.log(response.data);
                // Handle success. You could show a message to the user, update the UI to reflect the new data, or reload parts of the page.
                if (response.data.success) {
                    alert('Profile updated successfully.');
                    // Optionally, refresh the page or parts of the UI here.
                } else {
                    // Handle failure. Show error message to the user.
                    alert('Failed to update profile. Please try again.');
                }
            })
            .catch(function(error) {
                console.log(error);
                alert('An error occurred while updating your profile.');
            });
        }

        // Attach this function to the save button's click event
        document.getElementById('saveEditBtn').addEventListener('click', function(event) {
            updateProfile(); // Call the update profile function when the button is clicked
            // Prevent the form from submitting if it's inside a form element
            event.preventDefault();
        });

      // Example usage
      document.getElementById('saveEditBtn').addEventListener('click', updateProfile);
    });


  </script>
</body>
</html>