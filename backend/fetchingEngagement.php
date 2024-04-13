<?php
session_start();  // Start the session at the very beginning
include 'connection.php';
$student_id= $_SESSION['student_id'] ;
 // Ensure your database connection settings are correct

header('Content-Type: application/json');

// SQL to select engagements along with related opportunity details if available
$sql = "SELECT e.engagement_id, e.engagement_name, e.engagement_type, e.location, 
               e.date, o.office
        FROM Engagements e where user_id=$student_id
        LEFT JOIN Opportunities o ON e.opportunity_id = o.opportunity_id
        ORDER BY e.date ASC";  // Sorting by date descending to show recent engagements first

$result = $conn->query($sql);

$engagements = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $engagements[] = [
            'engagement_name' => $row['engagement_name'],
            'engagement_type' => $row['engagement_type'],
            'location' => $row['location'] ?? 'N/A',  // 
            'deadline' => $row['date'] ?? 'N/A',  // 
            'office' => $row['office'] ?? 'N/A'   // 
        ];
    }
    echo json_encode($engagements);
} else {
    echo json_encode([]);  // Return an empty array if no engagements found
}

$conn->close();
?>
