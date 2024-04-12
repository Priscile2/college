<?php include '../includes/get_event.php';

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
    <link rel="manifest" href="../favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Stay organized with our user-friendly Calendar featuring events, reminders, and a customizable interface. Built with HTML, CSS, and JavaScript. Start scheduling today!" />
    <meta name="keywords" content="calendar, events, reminders, javascript, html, css, open source coding" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../fxn/calendar.css">
    <title>Ashesi Unified</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap');


* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
  font-family: "lato", sans-serif;

}

a {
	text-decoration: none;
}

li {
	list-style: none;

}



:root {
	--poppins: 'Poppins', sans-serif;
	--lato: 'lato', sans-serif;

	--light: #F9F9F9;
	--blue: #3C91E6;
	--light-blue: #CFE8FF;
	--grey: #eee;
	--dark-grey: #AAAAAA;
	--dark: #342E37;
	--red: #DB504A;
	--yellow: #FFCE26;
	--light-yellow: #FFF2C6;
	--orange: #FD7238;
	--light-orange: #FFE0D3;

  /* Calendar root */
  --primary-clr: #b38add;
}

html {
	overflow-x: hidden;
}

body.dark {
	--light: #0C0C1E;
	--grey: #060714;
	--dark: #FBFBFB;
}

body {
	background: var(--grey);
	overflow-x: hidden;

    /* Calendar */
    position: relative;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding-bottom: 30px;
    background-color: #e2e1dc;

    /*  */
    background: url(../../assets/images/former_hakuna_lounge_students_sitting_studying.jpeg) no-repeat;
    background-size: cover;
    background-position: center;
}

iframe#google-calendar {
    border: solid 1px #777;
    width: 100%;
    height: 800px;
}





.brand img {
	width: 190px;
	height: auto;
	background-color: #b83838;
	margin-left: 10%;
	margin-top: 10%;
}


/* SIDEBAR */
#sidebar {
	position: fixed;
	top: 0;
	left: 0;
	width: 280px;
	height: 100%;
	background: var(--light);
	z-index: 2000;
	font-family: var(--lato);
	transition: .3s ease;
	overflow-x: hidden;
	scrollbar-width: none;
	background-color: 	#b83838;
}
#sidebar::--webkit-scrollbar {
	display: none;
}
  

  /* Calendar */
  /* nice scroll bar */
  ::-webkit-scrollbar {
    width: 5px;
  }
  ::-webkit-scrollbar-track {
    background: #f5f5f5;
    border-radius: 50px;
  }
  ::-webkit-scrollbar-thumb {
    background: var(--primary-clr);
    border-radius: 50px;
  }



#sidebar.hide {
	width: 60px;
}
#sidebar .brand {
	font-size: 24px;
	font-weight: 700;
	height: 56px;
	display: flex;
	align-items: center;
	color: var(--blue);
	position: sticky;
	top: 0;
	left: 0;
	background: var(--light);
	z-index: 500;
	padding-bottom: 20px;
	box-sizing: content-box;
	background-color: #b83838;

}
#sidebar .brand .bx {
	min-width: 60px;
	display: flex;
	justify-content: center;
	
}
#sidebar .side-menu {
	width: 100%;
	margin-top: 48px;
}
#sidebar .side-menu li {
	height: 48px;
	background: transparent;
	margin-left: 6px;
	border-radius: 48px 0 0 48px;
	padding: 4px;
	
}
#sidebar .side-menu li.active {
	background: var(--grey);
	position: relative;
}
#sidebar .side-menu li.active::before {
	content: '';
	position: absolute;
	width: 40px;
	height: 40px;
	border-radius: 50%;
	top: -40px;
	right: 0;
	box-shadow: 20px 20px 0 var(--grey);
	z-index: -1;
}
#sidebar .side-menu li.active::after {
	content: '';
	position: absolute;
	width: 40px;
	height: 40px;
	border-radius: 50%;
	bottom: -40px;
	right: 0;
	box-shadow: 20px -20px 0 var(--grey);
	z-index: -1;
}
#sidebar .side-menu li a {
	width: 100%;
	height: 100%;
	background: var(--light);
	display: flex;
	align-items: center;
	border-radius: 48px;
  font-size: 16px;
	color: var(--dark);
	white-space: nowrap;
	overflow-x: hidden;
	background-color: #b83838;
	color: white;
}
#sidebar .side-menu.top li.active a {
	color: white;
}
#sidebar.hide .side-menu li a {
	width: calc(48px - (4px * 2));
	transition: width .3s ease;
}
#sidebar .side-menu li a.logout {
	color: var(--red);
}
#sidebar .side-menu.top li a:hover {
	color: whitesmoke;
}
#sidebar .side-menu li a .bx {
	min-width: calc(60px  - ((4px + 6px) * 2));
	display: flex;
	justify-content: center;
}
/* SIDEBAR */








/* CONTENT */
#content {
	position: relative;
	width: calc(100% - 280px);
	left: 280px;
	transition: .3s ease;
}
#sidebar.hide ~ #content {
	width: calc(100% - 60px);
	left: 60px;
}











  .container {
    position: relative;
    width: 80%;
    min-height: 85vh;
    margin: 0% auto;
    padding: 1rem;
    color: #fff;
    display: flex;
    border-radius: 10px;
    background-color: var(--dark-grey);
    background: transparent;
    backdrop-filter: blur(15px);
    opacity: 1;
}
  .left {
    width: 60%;
    padding: 20px;
  }

  .right {
    width: 40%; /* Adjust width as needed */
    padding: 200%; /* Adjust padding as needed */
  }

  .calendar {
    position: relative;
    width: 100%;
    height: auto;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    justify-content: space-between;
    color: #878895;
    border-radius: 5px;
    background-color: #fff;
  }
  /* set after behind the main element */
  .calendar::before,
  .calendar::after {
    content: "";
    position: absolute;
    top: 50%;
    left: 100%;
    width: 12px;
    height: 97%;
    border-radius: 0 5px 5px 0;
    background-color: #d3d4d6d7;
    transform: translateY(-50%);
  }
  .calendar::before {
    height: 94%;
    left: calc(100% + 12px);
    background-color: rgb(153, 153, 153);
  }
  .calendar .month {
    width: 100%;
    height: 150px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 50px;
    font-size: 1.2rem;
    font-weight: 500;
    text-transform: capitalize;

    /*  */
    color: #b38add;
  }
  .calendar .month .prev,
  .calendar .month .next {
    cursor: pointer;

    /*  */
    color: #b38add;
  }
  .calendar .month .prev:hover,
  .calendar .month .next:hover {
    color: var(--primary-clr);
  }
  .calendar .weekdays {
    width: 100%;
    height: 100px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 20px;
    font-size: 1rem;
    font-weight: 500;
    text-transform: capitalize;
  }
  .weekdays div {
    width: 14.28%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .calendar .days {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 0 20px;
    font-size: 1rem;
    font-weight: 500;
    margin-bottom: 20px;
  }
  .calendar .days .day {
    width: 14.28%;
    height: 90px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    color: var(--primary-clr);
    border: 1px solid #f5f5f5;
  }
  .calendar .days .day:nth-child(7n + 1) {
    border-left: 2px solid #f5f5f5;
  }
  .calendar .days .day:nth-child(7n) {
    border-right: 2px solid #f5f5f5;
  }
  .calendar .days .day:nth-child(-n + 7) {
    border-top: 2px solid #f5f5f5;
  }
  .calendar .days .day:nth-child(n + 29) {
    border-bottom: 2px solid #f5f5f5;
  }
  
  .calendar .days .day:not(.prev-date, .next-date):hover {
    color: #fff;
    background-color: var(--primary-clr);
  }
  .calendar .days .prev-date,
  .calendar .days .next-date {
    color: #b3b3b3;
  }
  .calendar .days .active {
    position: relative;
    font-size: 2rem;
    color: #fff;
    background-color: var(--primary-clr);
  }
  .calendar .days .active::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    box-shadow: 0 0 10px 2px var(--primary-clr);
  }
  .calendar .days .today {
    font-size: 2rem;
  }
  .calendar .days .event {
    position: relative;
  }
  .calendar .days .event::after {
    content: "";
    position: absolute;
    bottom: 10%;
    left: 50%;
    width: 75%;
    height: 6px;
    border-radius: 30px;
    transform: translateX(-50%);
    background-color: var(--primary-clr);
  }
  .calendar .days .day:hover.event::after {
    background-color: #fff;
  }
  .calendar .days .active.event::after {
    background-color: #fff;
    bottom: 20%;
  }
  .calendar .days .active.event {
    padding-bottom: 10px;
  }
  .calendar .goto-today {
    width: 100%;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 5px;
    padding: 0 20px;
    margin-bottom: 20px;
    color: var(--primary-clr);
  }
  .calendar .goto-today .goto {
    display: flex;
    align-items: center;
    border-radius: 5px;
    overflow: hidden;
    border: 1px solid var(--primary-clr);
  }
  .calendar .goto-today .goto input {
    width: 100%;
    height: 30px;
    outline: none;
    border: none;
    border-radius: 5px;
    padding: 0 20px;
    color: var(--primary-clr);
    border-radius: 5px;
  }
  .calendar .goto-today button {
    padding: 5px 10px;
    border: 1px solid var(--primary-clr);
    border-radius: 5px;
    background-color: transparent;
    cursor: pointer;
    color: var(--primary-clr);
  }
  .calendar .goto-today button:hover {
    color: #fff;
    background-color: var(--primary-clr);
  }
  .calendar .goto-today .goto button {
    border: none;
    border-left: 1px solid var(--primary-clr);
    border-radius: 0;
  }
  .container .right {
    position: relative;
    width: 40%;
    min-height: 100%;
    padding: 20px 0;
  }
  
  .right .today-date {
    width: 100%;
    height: 50px;
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    align-items: center;
    justify-content: space-between;
    padding: 0 40px;
    padding-left: 70px;
    margin-top: 50px;
    margin-bottom: 20px;
    text-transform: capitalize;
  }
  .right .today-date .event-day {
    font-size: 2rem;
    font-weight: 500;
  }
  .right .today-date .event-date {
    font-size: 1rem;
    font-weight: 400;
    color: #878895;
  }
  .events {
    width: 100%;
    height: 100%;
    max-height: 800px;
    overflow-x: hidden;
    overflow-y: auto;
    display: flex;
    flex-direction: column;
    padding-left: 4px;
  }
  .events .event {
    position: relative;
    width: 95%;
    min-height: 70px;
    display: flex;
    justify-content: center;
    flex-direction: column;
    gap: 5px;
    padding: 0 20px;
    padding-left: 50px;
    color: #fff;
    background: linear-gradient(90deg, #3f4458, transparent);
    cursor: pointer;
  }
  /* even event */
  .events .event:nth-child(even) {
    background: transparent;
  }
  .events .event:hover {
    background: linear-gradient(90deg, var(--primary-clr), transparent);
  }
  .events .event .title {
    display: flex;
    align-items: center;
    pointer-events: none;
  }
  .events .event .title .event-title {
    font-size: 1rem;
    font-weight: 400;
    margin-left: 20px;
  }
  .events .event i {
    color: var(--primary-clr);
    font-size: 0.5rem;
  }
  .events .event:hover i {
    color: #fff;
  }
  .events .event .event-time {
    font-size: 0.8rem;
    font-weight: 400;
    color: #878895;
    margin-left: 15px;
    pointer-events: none;
  }
  .events .event:hover .event-time {
    color: #fff;
  }
  /* add tick in event after */
  .events .event::after {
    content: "✓";
    position: absolute;
    top: 50%;
    right: 0;
    font-size: 3rem;
    line-height: 1;
    display: none;
    align-items: center;
    justify-content: center;
    opacity: 0.3;
    color: var(--primary-clr);
    transform: translateY(-50%);
  }
  .events .event:hover::after {
    display: flex;
  }
  .add-event {
    position: absolute;
    bottom: 30px;
    right: 30px;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1rem;
    color: #fff;
    border: 2px solid #878895;
    opacity: 0.5;
    border-radius: 50%;
    background-color: transparent;
    cursor: pointer;
  }
  .add-event:hover {
    opacity: 1;
  }
  .add-event i {
    pointer-events: none;
  }
  .events .no-event {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: 500;
    color: #878895;
  }
  .add-event-wrapper {
    position: absolute;
    bottom: 100px;
    left: 50%;
    width: 90%;
    max-height: 0;
    overflow: hidden;
    border-radius: 5px;
    background-color: #fff;
    transform: translateX(-50%);
    transition: max-height 0.5s ease;
  }
  .add-event-wrapper.active {
    max-height: 420px;
  }
  .add-event-header {
    width: 100%;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 20px;
    color: #373c4f;
    border-bottom: 1px solid #f5f5f5;
  }
  .add-event-header .close {
    font-size: 1.5rem;
    cursor: pointer;
  }
  .add-event-header .close:hover {
    color: var(--primary-clr);
  }
  .add-event-header .title {
    font-size: 1.2rem;
    font-weight: 500;
  }
  .add-event-body {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    gap: 5px;
    padding: 20px;
  }
  .add-event-body .add-event-input {
    width: 100%;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
  }
  .add-event-body .add-event-input input {
    width: 100%;
    height: 100%;
    outline: none;
    border: none;
    border-bottom: 1px solid #f5f5f5;
    padding: 0 10px;
    font-size: 1rem;
    font-weight: 400;
    color: #373c4f;
  }
  .add-event-body .add-event-input input::placeholder {
    color: #a5a5a5;
  }
  .add-event-body .add-event-input input:focus {
    border-bottom: 1px solid var(--primary-clr);
  }
  .add-event-body .add-event-input input:focus::placeholder {
    color: var(--primary-clr);
  }
  .add-event-footer {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
  }
  .add-event-footer .add-event-btn {
    height: 40px;
    font-size: 1rem;
    font-weight: 500;
    outline: none;
    border: none;
    color: #fff;
    background-color: var(--primary-clr);
    border-radius: 5px;
    cursor: pointer;
    padding: 5px 10px;
    border: 1px solid var(--primary-clr);
  }
  .add-event-footer .add-event-btn:hover {
    background-color: transparent;
    color: var(--primary-clr);
  }
  
  /* media queries */
  
/* Media queries for smaller screens */
@media screen and (max-width: 1000px) {
  .container {
    flex-direction: column;
    align-items: center;
  }
  .left, .right {
    width: 90%; /* Adjust width as needed */
    padding: 20px;
  }
  .calendar {
    padding: 20px;
    max-width: 100%; /* Adjust as needed */
  }
  .calendar::before, .calendar::after {
    top: 100%;
    left: 50%;
    width: 97%;
    height: 12px;
    border-radius: 0 0 5px 5px;
    transform: translateX(-50%);
  }
  .calendar::before {
    width: 94%;
    top: calc(100% + 12px);
  }
  .events {
    padding-bottom: 340px; /* Adjust as needed */
  }
  .add-event-wrapper {
    bottom: 100px; /* Adjust as needed */
  }
}

@media screen and (max-width: 500px) {
  .container {
    padding: 10px; /* Adjust as needed */
  }
  .left, .right {
    width: 100%;
  }
  .calendar .month {
    height: 60px; /* Adjust as needed */
    font-size: 1rem; /* Adjust font size as needed */
  }
  .calendar .weekdays {
    height: 40px; /* Adjust as needed */
    font-size: 0.8rem; /* Adjust font size as needed */
  }
  .calendar .days .day {
    height: 30px; /* Adjust as needed */
    font-size: 0.8rem; /* Adjust font size as needed */
  }
  .calendar .goto-today {
    padding: 10px;
    margin-bottom: 10px;
  }
  .calendar .goto-today .goto {
    height: 30px;
  }
  .calendar .goto-today button {
    padding: 5px 10px;
    font-size: 0.8rem; /* Adjust font size as needed */
  }
  .right .today-date {
    padding: 10px;
  }
  .events {
    padding-bottom: 100px; /* Adjust as needed */
  }
}

    </style>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description"
    content="Stay organized with our user-friendly Calendar featuring events, reminders, and a customizable interface. Built with HTML, CSS, and JavaScript. Start scheduling today!" />
<meta name="keywords" content="calendar, events, reminders, javascript, html, css, open source coding" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Boxicons -->
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
<!-- My CSS -->
<link rel="stylesheet" href="../public/css/calendar.css">

<title>Ashesi Unified</title>
</head>

<body>
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
          <div class="container">
            <div class="left">
                <div class="calendar">
                    <div class="month">
                        <p class="fas fa-angle-left prev"></p>
                        <div class="date">december 2015</div>
                        <p class="fas fa-angle-right next"></p>
                    </div>
                    <div class="weekdays">
                        <div>Sun</div>
                        <div>Mon</div>
                        <div>Tue</div>
                        <div>Wed</div>
                        <div>Thu</div>
                        <div>Fri</div>
                        <div>Sat</div>
                    </div>
                    <div class="days"></div>
                    <div class="goto-today">
                        <div class="goto">
                            <input type="text" placeholder="mm/yyyy" class="date-input" />
                            <button class="goto-btn">Go</button>
                        </div>
                        <button class="today-btn">Today</button>
                    </div>
                </div>
            </div>
            <div class="eventsx" style='display: none'></div>
            <div class="right">
                <div class="today-date">
                    <div class="event-day">wed</div>
                    <div class="event-date">12th december 2022</div>
                </div>
                <div class="events">
                    <?php foreach ($events as $event): ?>
                    <div class="event">
                        <div class="title">
                            <i class="fas fa-circle"></i>
                            <h3 class="event-title"><?php echo $event['event_title']; ?></h3>
                        </div>
                        <div class="title">
                            <h3 class="event-title"><?php echo $event['event_description']; ?></h3>
                        </div>
                        <div class="title">
                            <h3 class="event-title">Date: <?php echo $event['event_date']; ?></h3>
                        </div>
                        <div class="title">
                            <h3 class="title">Time: <?php echo $event['event_time']; ?></h4>
                        </div>
                        <p>Location: <?php echo $event['event_location']; ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="add-event-wrapper">
                    <div class="add-event-header">
                        <div class="title">Add Event</div>
                        <i class="fas fa-times close"></i>
                    </div>
                    <form method="post" action="../actions/event_manager.php" id="add-event-form">
                        <div class="add-event-body">
                            <div class="add-event-input">
                                <input type="text" name="event-title" placeholder="Event Title" class="event-name"
                                    required />
                            </div>
                            <div class="add-event-input">
                                <input name="event-description" placeholder="Event Description"></textarea>
                            </div>
                            <div class="add-event-input">
                                <input type="date" name="event-date" placeholder="Event Date" required />
                            </div>
                            <div class="add-event-input">
                                <input type="time" name="event-time" placeholder="Event Time" class="event-time-from"
                                    required />
                            </div>

                            <div class="add-event-input">
                                <input type="text" name="event-location" placeholder="Event Location" />
                            </div>
                            <div class="add-event-input">
                                <?php include '../fxn/department_fxn.php' ?>
                            </div>

                        </div>
                        <div class="add-event-footer">
                            <button type="submit" class="add-event-btn">Add Event</button>
                        </div>
                    </form>
                </div>

            </div>
            <button class="add-event">
                <i class="fas fa-plus"></i>
            </button>
        </div>

        </div>
      </div>
    </div>
  </main>
    

    <div class="calender">
    </div>
    <script>

const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item=> {
	const li = item.parentElement;

	item.addEventListener('click', function () {
		allSideMenu.forEach(i=> {
			i.parentElement.classList.remove('active');
		})
		li.classList.add('active');
	})
});

const calendar = document.querySelector(".calendar"),
  date = document.querySelector(".date"),
  daysContainer = document.querySelector(".days"),
  prev = document.querySelector(".prev"),
  next = document.querySelector(".next"),
  todayBtn = document.querySelector(".today-btn"),
  gotoBtn = document.querySelector(".goto-btn"),
  dateInput = document.querySelector(".date-input"),
  eventDay = document.querySelector(".event-day"),
  eventDate = document.querySelector(".event-date"),
  eventsxContainer = document.querySelector(".eventsx"),
  addEventBtn = document.querySelector(".add-event"),
  addEventWrapper = document.querySelector(".add-event-wrapper "),
  addEventCloseBtn = document.querySelector(".close "),
  addEventTitle = document.querySelector(".event-name "),
  addEventFrom = document.querySelector(".event-time-from "),
  addEventTo = document.querySelector(".event-time-to "),
  addEventSubmit = document.querySelector(".add-event-btn ");

  

let today = new Date();
let activeDay;
let month = today.getMonth();
let year = today.getFullYear();

const months = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "August",
  "September",
  "October",
  "November",
  "December",
];

// const eventsArr = [
//   {
//     day: 13,
//     month: 11,
//     year: 2022,
//     events: [
//       {
//         title: "Event 1 lorem ipsun dolar sit genfa tersd dsad ",
//         time: "10:00 AM",
//       },
//       {
//         title: "Event 2",
//         time: "11:00 AM",
//       },
//     ],
//   },
// ];

const eventsxArr = [];
getEventsx();
console.log(eventsxArr);

//function to add days in days with class day and prev-date next-date on previous month and next month days and active on today
function initCalendar() {
  const firstDay = new Date(year, month, 1);
  const lastDay = new Date(year, month + 1, 0);
  const prevLastDay = new Date(year, month, 0);
  const prevDays = prevLastDay.getDate();
  const lastDate = lastDay.getDate();
  const day = firstDay.getDay();
  const nextDays = 7 - lastDay.getDay() - 1;

  date.innerHTML = months[month] + " " + year;

  let days = "";

  for (let x = day; x > 0; x--) {
    days += `<div class="day prev-date">${prevDays - x + 1}</div>`;
  }

  for (let i = 1; i <= lastDate; i++) {
    //check if event is present on that day
    let event = false;
    eventsxArr.forEach((eventObj) => {
      if (
        eventObj.day === i &&
        eventObj.month === month + 1 &&
        eventObj.year === year
      ) {
        event = true;
      }
    });
    if (
      i === new Date().getDate() &&
      year === new Date().getFullYear() &&
      month === new Date().getMonth()
    ) {
      activeDay = i;
      getActiveDay(i);
      updateEventsx(i);
      if (event) {
        days += `<div class="day today active event">${i}</div>`;
      } else {
        days += `<div class="day today active">${i}</div>`;
      }
    } else {
      if (event) {
        days += `<div class="day event">${i}</div>`;
      } else {
        days += `<div class="day ">${i}</div>`;
      }
    }
  }

  for (let j = 1; j <= nextDays; j++) {
    days += `<div class="day next-date">${j}</div>`;
  }
  daysContainer.innerHTML = days;
  addListner();
}

//function to add month and year on prev and next button
function prevMonth() {
  month--;
  if (month < 0) {
    month = 11;
    year--;
  }
  initCalendar();
}

function nextMonth() {
  month++;
  if (month > 11) {
    month = 0;
    year++;
  }
  initCalendar();
}

prev.addEventListener("click", prevMonth);
next.addEventListener("click", nextMonth);

initCalendar();

//function to add active on day
function addListner() {
  const days = document.querySelectorAll(".day");
  days.forEach((day) => {
    day.addEventListener("click", (e) => {
      getActiveDay(e.target.innerHTML);
      updateEventsx(Number(e.target.innerHTML));
      activeDay = Number(e.target.innerHTML);
      //remove active
      days.forEach((day) => {
        day.classList.remove("active");
      });
      //if clicked prev-date or next-date switch to that month
      if (e.target.classList.contains("prev-date")) {
        prevMonth();
        //add active to clicked day afte month is change
        setTimeout(() => {
          //add active where no prev-date or next-date
          const days = document.querySelectorAll(".day");
          days.forEach((day) => {
            if (
              !day.classList.contains("prev-date") &&
              day.innerHTML === e.target.innerHTML
            ) {
              day.classList.add("active");
            }
          });
        }, 100);
      } else if (e.target.classList.contains("next-date")) {
        nextMonth();
        //add active to clicked day afte month is changed
        setTimeout(() => {
          const days = document.querySelectorAll(".day");
          days.forEach((day) => {
            if (
              !day.classList.contains("next-date") &&
              day.innerHTML === e.target.innerHTML
            ) {
              day.classList.add("active");
            }
          });
        }, 100);
      } else {
        e.target.classList.add("active");
      }
    });
  });
}

todayBtn.addEventListener("click", () => {
  today = new Date();
  month = today.getMonth();
  year = today.getFullYear();
  initCalendar();
});

dateInput.addEventListener("input", (e) => {
  dateInput.value = dateInput.value.replace(/[^0-9/]/g, "");
  if (dateInput.value.length === 2) {
    dateInput.value += "/";
  }
  if (dateInput.value.length > 7) {
    dateInput.value = dateInput.value.slice(0, 7);
  }
  if (e.inputType === "deleteContentBackward") {
    if (dateInput.value.length === 3) {
      dateInput.value = dateInput.value.slice(0, 2);
    }
  }
});

gotoBtn.addEventListener("click", gotoDate);

function gotoDate() {
  console.log("here");
  const dateArr = dateInput.value.split("/");
  if (dateArr.length === 2) {
    if (dateArr[0] > 0 && dateArr[0] < 13 && dateArr[1].length === 4) {
      month = dateArr[0] - 1;
      year = dateArr[1];
      initCalendar();
      return;
    }
  }
  alert("Invalid Date");
}

//function get active day day name and date and update eventday eventdate
function getActiveDay(date) {
  const day = new Date(year, month, date);
  const dayName = day.toString().split(" ")[0];
  eventDay.innerHTML = dayName;
  eventDate.innerHTML = date + " " + months[month] + " " + year;
}

//function update events when a day is active
function updateEventsx(date) {
  let eventsx = "";
  eventsxArr.forEach((event) => {
    if (
      date === event.day &&
      month + 1 === event.month &&
      year === event.year
    ) {
      event.eventsx.forEach((even) => {
        eventsx += `<div class="eventx">
            <div class="title">
              <i class="fas fa-circle"></i>
              <h3 class="event-title">${event.title}</h3>
            </div>
            <div class="event-time">
              <span class="event-time">${event.time}</span>
            </div>
        </div>`;
      });
    }
  });
  if (eventsx === "") {
    eventsx = `<div class="no-event">
            <h3>No Eventsx</h3>
        </div>`;
  }
  eventsxContainer.innerHTML = eventsx;
  saveEventsx();
}

//function to add event
addEventBtn.addEventListener("click", () => {
  addEventWrapper.classList.toggle("active");
});

addEventCloseBtn.addEventListener("click", () => {
  addEventWrapper.classList.remove("active");
});

document.addEventListener("click", (e) => {
  if (e.target !== addEventBtn && !addEventWrapper.contains(e.target)) {
    addEventWrapper.classList.remove("active");
  }
});

//allow 50 chars in eventtitle
addEventTitle.addEventListener("inpt", (e) => {
  addEventTitle.value = addEventTitle.value.slice(0, 60);
});

//allow only time in eventtime from and to
addEventFrom.addEventListener("inpt", (e) => {
  addEventFrom.value = addEventFrom.value.replace(/[^0-9:]/g, "");
  if (addEventFrom.value.length === 2) {
    addEventFrom.value += ":";
  }
  if (addEventFrom.value.length > 5) {
    addEventFrom.value = addEventFrom.value.slice(0, 5);
  }
});

addEventTo.addEventListener("input", (e) => {
  addEventTo.value = addEventTo.value.replace(/[^0-9:]/g, "");
  if (addEventTo.value.length === 2) {
    addEventTo.value += ":";
  }
  if (addEventTo.value.length > 5) {
    addEventTo.value = addEventTo.value.slice(0, 5);
  }
});

//function to add event to eventsArr
addEventSubmit.addEventListener("click", () => {
  const eventTitle = addEventTitle.value;
  const eventTimeFrom = addEventFrom.value;
  const eventTimeTo = addEventTo.value;
  if (eventTitle === "" || eventTimeFrom === "" || eventTimeTo === "") {
    alert("Please fill all the fields");
    return;
  }

  //check correct time format 24 hour
  const timeFromArr = eventTimeFrom.split(":");
  const timeToArr = eventTimeTo.split(":");
  if (
    timeFromArr.length !== 2 ||
    timeToArr.length !== 2 ||
    timeFromArr[0] > 23 ||
    timeFromArr[1] > 59 ||
    timeToArr[0] > 23 ||
    timeToArr[1] > 59
  ) {
    alert("Invalid Time Format");
    return;
  }

  const timeFrom = convertTime(eventTimeFrom);
  const timeTo = convertTime(eventTimeTo);

  //check if event is already added
  let eventExist = false;
  eventsxArr.forEach((event) => {
    if (
      event.day === activeDay &&
      event.month === month + 1 &&
      event.year === year
    ) {
      event.eventsx.forEach((event) => {
        if (event.title === eventTitle) {
          eventExist = true;
        }
      });
    }
  });
  if (eventExist) {
    alert("Event already added");
    return;
  }
  const newEvent = {
    title: eventTitle,
    time: timeFrom + " - " + timeTo,
  };
  console.log(newEvent);
  console.log(activeDay);
  let eventAdded = false;
  if (eventsxArr.length > 0) {
    eventsxArr.forEach((item) => {
      if (
        item.day === activeDay &&
        item.month === month + 1 &&
        item.year === year
      ) {
        item.eventsx.push(newEvent);
        eventAdded = true;
      }
    });
  }

  if (!eventAdded) {
    eventsxArr.push({
      day: activeDay,
      month: month + 1,
      year: year,
      eventsx: [newEvent],
    });
  }

  console.log(eventsxArr);
  addEventWrapper.classList.remove("active");
  addEventTitle.value = "";
  addEventFrom.value = "";
  addEventTo.value = "";
  updateEventsx(activeDay);
  //select active day and add event class if not added
  const activeDayEl = document.querySelector(".day.active");
  if (!activeDayEl.classList.contains("event")) {
    activeDayEl.classList.add("event");
  }
});

//function to delete event when clicked on event
eventsxContainer.addEventListener("click", (e) => {
  if (e.target.classList.contains("event")) {
    if (confirm("Are you sure you want to delete this event?")) {
      const eventTitle = e.target.children[0].children[1].innerHTML;
      eventsxArr.forEach((event) => {
        if (
          event.day === activeDay &&
          event.month === month + 1 &&
          event.year === year
        ) {
          event.eventsx.forEach((item, index) => {
            if (item.title === eventTitle) {
              event.eventsx.splice(index, 1);
            }
          });
          //if no events left in a day then remove that day from eventsArr
          if (event.eventsx.length === 0) {
            eventsxArr.splice(eventsxArr.indexOf(event), 1);
            //remove event class from day
            const activeDayEl = document.querySelector(".day.active");
            if (activeDayEl.classList.contains("event")) {
              activeDayEl.classList.remove("event");
            }
          }
        }
      });
      updateEventsx(activeDay);
    }
  }
});

//function to save events in local storage
function saveEventsx() {
  localStorage.setItem("eventsx", JSON.stringify(eventsxArr));
}

//function to get events from local storage
function getEventsx() {
  //check if events are already saved in local storage then return event else nothing
  if (localStorage.getItem("eventsx") === null) {
    return;
  }
  eventsxArr.push(...JSON.parse(localStorage.getItem("eventsx")));
}

function convertTime(time) {
  //convert time to 24 hour format
  let timeArr = time.split(":");
  let timeHour = timeArr[0];
  let timeMin = timeArr[1];
  let timeFormat = timeHour >= 12 ? "PM" : "AM";
  timeHour = timeHour % 12 || 12;
  time = timeHour + ":" + timeMin + " " + timeFormat;
  return time;
}

</script>
</body>


</html>