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