<?php
// Include your database connection script
include 'connection.php';

header('Content-Type: application/json');

// SQL query to count events for each day of the week within a specific date range
$sql = "SELECT 
            DAYNAME(event_date) AS day_of_week,
            COUNT(*) AS number_of_events
        FROM 
            calendarEvents
        WHERE 
            event_date BETWEEN '2024-04-08' AND '2024-04-14'
        GROUP BY 
            DAYOFWEEK(event_date)
        ORDER BY 
            DAYOFWEEK(event_date);";

$result = $conn->query($sql);

$eventsByDay = [];

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Adjust the structure to fit your frontend needs. For example:
        $dayShort = substr($row['day_of_week'], 0, 3); // Convert to short day names ('Mon', 'Tue', ...)
        $eventsByDay[] = ['day' => $dayShort, 'count' => (int)$row['number_of_events']];
    }

    echo json_encode([
        'success' => true,
        'data' => $eventsByDay
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'No events found or there was an error executing the query.'
    ]);
}

$conn->close();
?>
