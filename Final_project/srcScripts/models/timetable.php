<?php
include '../config/connection.php';

function createTimetableEntry($student_id, $engagement_id, $date, $start_time, $end_time) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO Timetable (student_id, engagement_id, date, start_time, end_time) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("iisss", $student_id, $engagement_id, $date, $start_time, $end_time);
    return $stmt->execute();
}
//createTimetableEntry(8,3,'2023-03-06', '2023-02-02 21:50:00','2024-06-06 19:30:00');
function getTimetableByStudentAndDisplay($student_id) {
    global $conn;
    $stmt = $conn->prepare("
        SELECT t.date, t.start_time, t.end_time, e.type, e.date AS engagement_date, e.duration, e.reflection 
        FROM Timetable t
        INNER JOIN Engagements e ON t.engagement_id = e.engagement_id
        WHERE t.student_id = ?
    ");
    $stmt->bind_param("i", $student_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<h2>Timetable for Student ID: $student_id</h2>";
        echo "<table border='1'>";
        echo "<tr>
                <th>Date</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Engagement Type</th>
                <th>Engagement Date</th>
                <th>Duration (Hours)</th>
                <th>Reflection</th>
              </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . date("F j, Y", strtotime($row['date'])) . "</td>
                    <td>" . date("g:i a", strtotime($row['start_time'])) . "</td>
                    <td>" . date("g:i a", strtotime($row['end_time'])) . "</td>
                    <td>{$row['type']}</td>
                    <td>" . date("F j, Y", strtotime($row['engagement_date'])) . "</td>
                    <td>{$row['duration']}</td>
                    <td>{$row['reflection']}</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No timetable data found for student ID: $student_id.";
    }
}

getTimetableByStudentAndDisplay(8);


function updateTimetableEntry($timetable_id, $engagement_id, $date, $start_time, $end_time) {
    global $conn;
    $stmt = $conn->prepare("UPDATE Timetable SET engagement_id = ?, date = ?, start_time = ?, end_time = ? WHERE timetable_id = ?");
    $stmt->bind_param("isssi", $engagement_id, $date, $start_time, $end_time, $timetable_id);
    return $stmt->execute();
}

function deleteTimetableEntry($timetable_id) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM Timetable WHERE timetable_id = ?");
    $stmt->bind_param("i", $timetable_id);
    return $stmt->execute();
}
deleteTimetableEntry(6);
?>