<?php 
include '../config/connection.php';

// Create engagement
function createEngagement($student_id, $type, $date, $duration, $reflection) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO Engagements (student_id, type, date, duration, reflection) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("issds", $student_id, $type, $date, $duration, $reflection);
    $stmt->execute();
    return $stmt->insert_id;
}
//createEngagement(8,'research','2023-02-04',50.2,'Community engagement conference');

// Get engagements by student
function getEngagementsByStudentAndDisplay($student_id) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM Engagements WHERE student_id = ?");
    $stmt->bind_param("i", $student_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<h2>Engagements for Student ID: $student_id</h2>";
        echo "<table border='1'>";
        echo "<tr>
                <th>Type</th>
                <th>Date</th>
                <th>Duration (Hours)</th>
                <th>Reflection</th>
              </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['type']}</td>
                    <td>{$row['date']}</td>
                    <td>{$row['duration']}</td>
                    <td>{$row['reflection']}</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No engagement data found for student ID: $student_id.";
    }
}

// Example usage
$student_id = 1; // Replace with the actual student ID you're interested in
getEngagementsByStudentAndDisplay(8);

function updateEngagement($engagement_id, $student_id, $type, $date, $duration, $reflection) {
    global $conn;
    $query = "UPDATE Engagements SET student_id = ?, type = ?, date = ?, duration = ?, reflection = ? WHERE engagement_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("issdsi", $student_id, $type, $date, $duration, $reflection, $engagement_id);
    
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}
updateEngagement(2,8,'Dinner', '2023-05-05',76.9,'Had dinner with the provost and the board of directors');
function deleteEngagement($engagement_id) {
    global $conn;
    $query = "DELETE FROM Engagements WHERE engagement_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $engagement_id);
    
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}
deleteEngagement(4);


?>