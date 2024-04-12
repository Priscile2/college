<?php
include '../config/connection.php';

function createAnalyticsRecord($student_id, $semester, $total_accepted, $total_rejected, $total_pending, $engagement_hours) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO Analytics (student_id, semester, total_accepted, total_rejected, total_pending, engagement_hours) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isiiid", $student_id, $semester, $total_accepted, $total_rejected, $total_pending, $engagement_hours);
    return $stmt->execute();
}

//createAnalyticsRecord(8,'Fall 2023',6, 2,9, 60.72);

function updateAnalyticsRecord($analytics_id, $total_accepted, $total_rejected, $total_pending, $engagement_hours) {
    global $conn;
    $stmt = $conn->prepare("UPDATE Analytics SET total_accepted = ?, total_rejected = ?, total_pending = ?, engagement_hours = ? WHERE analytics_id = ?");
    $stmt->bind_param("iiiid", $total_accepted, $total_rejected, $total_pending, $engagement_hours, $analytics_id);
    return $stmt->execute();
}
updateAnalyticsRecord(2,10,2,7,130.20);
function getAnalyticsByStudent($student_id) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM Analytics WHERE student_id = ?");
    $stmt->bind_param("i", $student_id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        echo "<h2>Analytics for Student ID: $student_id</h2>";
        echo "<table border='1'>";
        echo "<tr>
                <th>Semester</th>
                <th>Total Accepted</th>
                <th>Total Rejected</th>
                <th>Total Pending</th>
                <th>Engagement Hours</th>
              </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['semester']}</td>
                    <td>{$row['total_accepted']}</td>
                    <td>{$row['total_rejected']}</td>
                    <td>{$row['total_pending']}</td>
                    <td>{$row['engagement_hours']}</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No analytics data found for student ID: $student_id.";
    }
}
getAnalyticsByStudent(1);
?>