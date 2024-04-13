<?php
session_start();  // Start the session at the very beginning
$student_id= $_SESSION['student_id'] ;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project Calendar</title>
  <!-- Fonts and icons -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- FullCalendar -->
  <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.css' rel='stylesheet' />

  <style>
    #eventsContainer {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      /* Adjusts the space between event cards */
      justify-content: flex-start;
    }

    .event {
      flex: 0 1 calc(33.333% - 20px);
      /* Adjusts the width to fit 3 cards in a row minus the gap */
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      background-color: #f0f0f0;
      /* Default background, will be overridden by JS */
      color: #000;
      padding: 20px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      /* Optional: Adds rounded corners */
    }

    @media (max-width: 768px) {
      .event {
        flex: 0 1 calc(50% - 20px);
        /* Adjusts to show 2 cards per row on smaller screens */
      }
    }

    @media (max-width: 480px) {
      .event {
        flex: 0 1 100%;
        /* Adjusts to show 1 card per row on very small screens */
      }
    }
  </style>


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
          <a class="nav-link text-white" href="opportunities.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Opportunities</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white  active bg-gradient-primary" href="calendar.php">
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
        <a class="btn bg-gradient-primary w-100" href="../backend/logout.php" type="submit">Logout</a>
      </div>
    </div>
  </aside>

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
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
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Project Calendar</h6>
            </div>
            <div class="card-body p-3">
              <div id='calendar'></div>
            </div>
          </div>
          <!-- Modal Trigger Button -->
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEventModal">Add Event</button>
          <div id="eventList" class="row"></div>
        </div>
        <div id="eventsContainer">
          <!-- Events will be dynamically inserted here -->
        </div>

      </div>
    </div>
  </main>

  <!-- Modal Structure for Adding Events -->
  <div class="modal fade" id="addEventModal" tabindex="-1" aria-labelledby="addEventModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addEventModalLabel">Add New Event</h5>
          <button type="button" class="btn-close" id="addEventBtn" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="../backend/addingevent.php" method=POST id="addEventForm" >
            <div class="mb-3">
              <label for="eventTitle" class="form-label">Event name:</label>
              <input type="text" class="form-control" id="eventTitle" name="eventTitle" required>
            </div>
            <div class="mb-3">
              <label for="eventtype" class="form-label">Event type:</label>
              <input type="text" class="form-control" id="eventtype" name="eventtype" required>
            </div>

            <div class="mb-3">
              <label for="eventDate" class="form-label">Date:</label>
              <input type="date" class="form-control" id="eventDate" name="eventDate" required>
            </div>
            <div class="mb-3">
              <label for="eventTime" class="form-label">Start Time:</label>
              <input type="time" class="form-control" id="eventTime" name="eventTime" required>
            </div>
            <div class="mb-3">
              <label for="eTime" class="form-label">End Time:</label>
              <input type="time" class="form-control" id="endTime" name="endTime" required>
            </div>
            <div class="mb-3">
              <label for="eventTime" class="form-label">Event Description:</label>
              <input type="text" class="form-control" id="eventdesc" name="eventdesc" required>
            </div>
            <div class="mb-3">
              <label for="eventlocation" class="form-label">Location:</label>
              <input type="text" class="form-control" id="eventlocation" name="eventlocation" required>
            </div>
            <input type="hidden" id="eventId" name="event_id" value="">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" form="addEventForm" class="btn btn-primary">Add Event</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Core JS Files & FullCalendar -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.js'></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.js'></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const addEventForm = document.getElementById('addEventForm');

      addEventForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        // URL of the server-side script that will handle the form data and update the database
        const apiUrl = '../backend/addingevent.php';

        // Use FormData to easily extract form data
        const formData = new FormData(addEventForm);

        // Fetch API to send the form data to the server via POST request
        fetch(apiUrl, {
            method: 'POST',
            body: formData, // The form data
          })
          .then(response => {
            if (!response.ok) {
              throw new Error('Network response was not ok');
            }
            return response.json(); // Assuming the server responds with JSON
          })
          .then(data => {
            console.log(data); // Process success response
            alert('Event added successfully!');
            // Close the modal if desired, using Bootstrap's modal methods
            
            $('#addEventModal').modal('hide');
            quit()
          })
          .catch(error => {
            console.error('Error during fetch:', error);
            alert('Failed to add the event.');
          });
      });
    });


    document.addEventListener('DOMContentLoaded', function() {
      fetchEvents();
    });

    function fetchEvents() {
      // URL of the API endpoint
      const apiUrl = '../backend/fetchingEvents.php';

      fetch(apiUrl)
        .then(response => {
          if (!response.ok) {
            throw new Error('Network response was not ok');
          }
          return response.json(); // Parse the JSON from the response
        })
        .then(events => {
          // Call a function to process and display the events
          displayEvents(events);
        })
        .catch(error => {
          console.error('Error fetching events:', error);
          // Optionally, display an error message in the UI
          document.getElementById('eventsContainer').innerHTML = '<p>Error loading events.</p>';
        });
    }

    function displayEvents(events) {
      const container = document.getElementById('eventsContainer');
      container.innerHTML = '';

      if (events.length === 0) {
        container.innerHTML = '<p>No events found.</p>';
        return;
      }

      const currentDate = new Date(); // Get current date

      events.forEach(event => {
        const eventDate = new Date(event.event_date); // Convert event date to Date object

        // Check if the event date is in the present or future
        if (eventDate >= currentDate) {
          const eventElement = document.createElement('div');
          eventElement.classList.add('event');

          const backgroundColor = getRandomColor(); // Use the updated colors array with hex values
          eventElement.style.backgroundColor = backgroundColor;

          // Set text color based on background color luminance
          eventElement.style.color = isLight(backgroundColor) ? '#000' : '#FFF';

          eventElement.innerHTML = `
          <h2>${event.event_name}</h2>
          <p>Date: ${event.event_date} at ${event.event_time}</p>
          <p>Type: ${event.event_type}</p>
          <p>Location: ${event.location}</p>
          <p>Description: ${event.description}</p>
          <div class="event-actions">
              <i class="material-icons-round edit-event" style="cursor:pointer;" data-event-id="${event.event_id}">edit</i>
              <i class="material-icons-round delete-event" style="cursor:pointer;" data-event-id="${event.event_id}">delete</i>
          </div>
      `;

          container.appendChild(eventElement);
        }
      });

      // Add click listeners for edit and delete icons after they are all appended
      document.querySelectorAll('.edit-event').forEach(icon => {
        icon.addEventListener('click', function() {
          const eventId = this.getAttribute('data-event-id');
          editEvent(eventId);
        });
      });
      document.querySelectorAll('.delete-event').forEach(icon => {
        icon.addEventListener('click', function() {
          const eventId = this.getAttribute('data-event-id');
          deleteEvent(eventId);
        });
      });
    }


    //Deleting an Event

    function deleteEvent(eventId) {
      if (!confirm("Are you sure you want to delete this event?")) return;

      // Assuming the API URL to delete an event by ID
      const apiUrl = `../backend/deletingEvent.php?event_id=${eventId}`;

      fetch(apiUrl, {
          method: 'POST'
        })
        .then(response => response.json())
        .then(data => {
          alert(data.message || 'Event deleted successfully');
          fetchEvents(); // Refresh the event list
        })
        .catch(error => console.error('Error deleting event:', error));
    }








    const colors = [
      '#FFC0CB', // Pink
      '#0000FF', // Blue
      '#008000', // Green
      '#800080', // Purple
      '#FFFF00', // Yellow
      '#FF0000', // Red
      '#40E0D0', // Turquoise
      '#FF00FF' // Magenta
    ];


    function isLight(color) {
      // Convert hex to RGB
      let r, g, b;
      if (color.length === 4) {
        r = parseInt(color[1] + color[1], 16);
        g = parseInt(color[2] + color[2], 16);
        b = parseInt(color[3] + color[3], 16);
      } else {
        r = parseInt(color[1] + color[2], 16);
        g = parseInt(color[3] + color[4], 16);
        b = parseInt(color[5] + color[6], 16);
      }

      // Calculate luminance
      const luminance = 0.2126 * r + 0.7152 * g + 0.0722 * b;
      return luminance > 128;
    }



    // Function to generate a random color
    function getRandomColor() {
      const letters = '0123456789ABCDEF';
      let color = '#';
      for (let i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
      }
      return color;
    }
  </script>

</body>


</html>