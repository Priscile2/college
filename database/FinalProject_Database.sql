-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 06, 2024 at 12:22 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `FP_Database`
--

-- --------------------------------------------------------

--
-- Table structure for table `CalendarEvents`
--

CREATE TABLE `CalendarEvents` (
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `event_type` enum('Deadline','Personal') NOT NULL,
  `description` text DEFAULT NULL,
  `event_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `CalendarEvents`
--

INSERT INTO `CalendarEvents` (`event_id`, `user_id`, `event_name`, `event_date`, `event_type`, `description`, `event_time`) VALUES
(1, 1, 'Deadline: UC Berkeley Study Abroad', '2024-09-09', 'Deadline', 'Deadline for UC Berkeley Study Abroad opportunity.', NULL),
(2, 1, 'Deadline: Work Study', '2024-09-05', 'Deadline', 'Deadline for Work Study opportunity.', NULL),
(3, 1, 'Deadline: Study Abroad Scholarship', '2024-06-01', 'Deadline', 'Deadline for Study Abroad Scholarship opportunity.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Engagements`
--

CREATE TABLE `Engagements` (
  `engagement_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `engagement_name` varchar(255) NOT NULL,
  `engagement_type` varchar(100) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `opportunity_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Engagements`
--

INSERT INTO `Engagements` (`engagement_id`, `user_id`, `engagement_name`, `engagement_type`, `start_date`, `end_date`, `opportunity_id`) VALUES
(12, 1, 'UC Berkeley Study Abroad', 'Opportunity', NULL, NULL, 4),
(13, 1, 'Work Study', 'Opportunity', NULL, NULL, 5),
(14, 1, 'Study Abroad Scholarship', 'Opportunity', NULL, NULL, 10);

-- --------------------------------------------------------

--
-- Table structure for table `Notifications`
--

CREATE TABLE `Notifications` (
  `notification_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `engagement_id` int(11) DEFAULT NULL,
  `message` text NOT NULL,
  `read_status` tinyint(1) DEFAULT 0,
  `notification_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Opportunities`
--

CREATE TABLE `Opportunities` (
  `opportunity_id` int(11) NOT NULL,
  `opportunity_name` varchar(255) NOT NULL,
  `eligibility` text DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `description` text DEFAULT NULL,
  `required_documents` text DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `office` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Opportunities`
--

INSERT INTO `Opportunities` (`opportunity_id`, `opportunity_name`, `eligibility`, `deadline`, `description`, `required_documents`, `location`, `created_at`, `updated_at`, `office`) VALUES
(4, 'UC Berkeley Study Abroad', 'Undergraduate GPA 3.0+', '2024-09-09', 'Explore the UC Berkeley campus and take part in a unique academic experience. Gain international exposure and earn credits towards your degree.', 'CV, Cover Letter, Transcript', 'California', '2024-04-04 18:21:31', '2024-04-04 18:21:31', 'ODIP Office'),
(5, 'Work Study', 'Student with no record of academic misconduct', '2024-09-05', 'Join the Warren Library team in a work-study position. Help manage library operations and support fellow students.', 'None', 'Warren Library', '2024-04-04 18:21:31', '2024-04-04 18:21:31', 'Warren Library'),
(6, 'Resident Assistant', 'From Sophomore year and in good academic standing', '2024-09-06', 'Become a Resident Assistant and play a key role in shaping the residential experience at Ashesi. Provide support and guidance to fellow students.', 'Video presentation, recommendation from previous RA, 3.0 GPA or better', 'Residence', '2024-04-04 18:21:31', '2024-04-04 18:21:31', 'SLE OFFICE'),
(7, 'International Research Conference', 'Postgraduate Students', '2024-05-30', 'Participate in an international research conference focusing on sustainable development.', 'Abstract submission, CV', 'Berlin, Germany', '2024-04-04 22:05:23', '2024-04-04 22:05:23', 'Graduate Studies Office'),
(8, 'Summer Internship Program', 'Undergraduate Students', '2024-03-15', 'A summer internship program at a leading tech company focusing on software development.', 'CV, Cover Letter, Transcript', 'Silicon Valley, USA', '2024-04-04 22:05:23', '2024-04-04 22:05:23', 'Career Services'),
(9, 'Volunteer Abroad Opportunity', 'All Students', '2024-04-20', 'A two-week volunteer program helping to build schools in underdeveloped communities.', 'CV, Motivation Letter', 'Nairobi, Kenya', '2024-04-04 22:05:23', '2024-04-04 22:05:23', 'Community Engagement Office'),
(10, 'Study Abroad Scholarship', 'Undergraduate Sophomores and Juniors', '2024-06-01', 'Scholarship for semester-long study abroad programs in partner universities.', 'Application Form, Academic Transcript, Recommendation Letter', 'Various Locations', '2024-04-04 22:05:23', '2024-04-04 22:05:23', 'International Office'),
(11, 'Leadership Workshop', 'All Students', '2024-07-15', 'A week-long workshop designed to enhance leadership skills in young leaders.', 'CV, Short Essay on Leadership Philosophy', 'London, UK', '2024-04-04 22:05:23', '2024-04-04 22:05:23', 'Student Affairs Office');

-- --------------------------------------------------------

--
-- Table structure for table `Projects`
--

CREATE TABLE `Projects` (
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Projects`
--

INSERT INTO `Projects` (`project_id`, `user_id`, `project_name`, `project_description`) VALUES
(1, 1, 'Cross-Platform Mobile App', 'Developing a cross-platform mobile app using Flutter'),
(2, 1, 'cook', 'cooook'),
(3, 1, 'cook', 'coooooook'),
(4, 1, 'project', 'projects'),
(5, 1, 'Code a website', 'In html,css,php'),
(6, 1, 'watersafe', 'instant purification');

-- --------------------------------------------------------

--
-- Table structure for table `ProjectUpdates`
--

CREATE TABLE `ProjectUpdates` (
  `update_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `progress_description` text DEFAULT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Students`
--

CREATE TABLE `Students` (
  `student_id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `yearGroup` year(4) NOT NULL,
  `major` enum('Computer Science','MIS','BA','Engineering') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Students`
--

INSERT INTO `Students` (`student_id`, `fname`, `lname`, `email`, `yearGroup`, `major`) VALUES
(1, 'Priscile', 'Nkenmeza', 'priscile.nzonbi@ashesi.edu.gh', '2025', 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `UserProfile`
--

CREATE TABLE `UserProfile` (
  `user_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `bio` text DEFAULT NULL,
  `receive_new_opportunity_email` tinyint(1) DEFAULT 0,
  `receive_deadline_email` tinyint(1) DEFAULT 0,
  `receive_monthly_update` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `UserProfile`
--

INSERT INTO `UserProfile` (`user_id`, `student_id`, `username`, `bio`, `receive_new_opportunity_email`, `receive_deadline_email`, `receive_monthly_update`, `created_at`, `updated_at`) VALUES
(1, 1, 'PriscileNkenmeza', 'A dedicated student with a passion for software development.', 1, 1, 1, '2024-04-04 21:43:02', '2024-04-04 21:43:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CalendarEvents`
--
ALTER TABLE `CalendarEvents`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `Engagements`
--
ALTER TABLE `Engagements`
  ADD PRIMARY KEY (`engagement_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `opportunity_id` (`opportunity_id`);

--
-- Indexes for table `Notifications`
--
ALTER TABLE `Notifications`
  ADD PRIMARY KEY (`notification_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `engagement_id` (`engagement_id`);

--
-- Indexes for table `Opportunities`
--
ALTER TABLE `Opportunities`
  ADD PRIMARY KEY (`opportunity_id`);

--
-- Indexes for table `Projects`
--
ALTER TABLE `Projects`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `ProjectUpdates`
--
ALTER TABLE `ProjectUpdates`
  ADD PRIMARY KEY (`update_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `Students`
--
ALTER TABLE `Students`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `UserProfile`
--
ALTER TABLE `UserProfile`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `student_id` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CalendarEvents`
--
ALTER TABLE `CalendarEvents`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Engagements`
--
ALTER TABLE `Engagements`
  MODIFY `engagement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `Notifications`
--
ALTER TABLE `Notifications`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Opportunities`
--
ALTER TABLE `Opportunities`
  MODIFY `opportunity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `Projects`
--
ALTER TABLE `Projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ProjectUpdates`
--
ALTER TABLE `ProjectUpdates`
  MODIFY `update_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Students`
--
ALTER TABLE `Students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `UserProfile`
--
ALTER TABLE `UserProfile`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `CalendarEvents`
--
ALTER TABLE `CalendarEvents`
  ADD CONSTRAINT `calendarevents_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `UserProfile` (`user_id`);

--
-- Constraints for table `Engagements`
--
ALTER TABLE `Engagements`
  ADD CONSTRAINT `engagements_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `UserProfile` (`user_id`),
  ADD CONSTRAINT `engagements_ibfk_2` FOREIGN KEY (`opportunity_id`) REFERENCES `Opportunities` (`opportunity_id`);

--
-- Constraints for table `Notifications`
--
ALTER TABLE `Notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `UserProfile` (`user_id`),
  ADD CONSTRAINT `notifications_ibfk_2` FOREIGN KEY (`engagement_id`) REFERENCES `Engagements` (`engagement_id`);

--
-- Constraints for table `Projects`
--
ALTER TABLE `Projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `UserProfile` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `ProjectUpdates`
--
ALTER TABLE `ProjectUpdates`
  ADD CONSTRAINT `projectupdates_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `Projects` (`project_id`) ON DELETE CASCADE;

--
-- Constraints for table `UserProfile`
--
ALTER TABLE `UserProfile`
  ADD CONSTRAINT `userprofile_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `Students` (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
