<?php
session_start();
include 'connection.php';  // Make sure your connection settings are correct

$student_id= $_SESSION['student_id'] ;


$query = "SELECT * FROM CalendarEvents WHERE user_id = ? AND event_date >= CURDATE()";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $student_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $userId = $row['user_id'];
        $engagementName = $row['event_name'];
        $engagementType = $row['event_type'];
        $date = $row['event_date'];
        $time = $row['event_time'];
        $location = $row['location'];

        // Combine date and time for the datetime field
        $dateTime = $date . ' ' . $time;

        // Insert data into Engagements
        $insertStmt = $conn->prepare("INSERT INTO Engagements (user_id, engagement_name, engagement_type, date, time, location) VALUES (?, ?, ?, ?, ?, ?)");
        $insertStmt->bind_param("isssss", $userId, $engagementName, $engagementType, $date, $dateTime, $location);

        if (!$insertStmt->execute()) {
            echo "Error inserting data: " . $insertStmt->error;
        }

        $insertStmt->close();
    }
    echo "Current and future events have been added to engagements successfully.";
} else {
    echo "No current or future events found in CalendarEvents.";
}

$conn->close();
?>
