<?php
include '../config/connection.php';

function addToPortfolio($student_id, $engagement_id, $application_id) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO Portfolios (student_id, engagement_id, application_id) VALUES (?, ?, ?)");
    $stmt->bind_param("iii", $student_id, $engagement_id, $application_id);
    return $stmt->execute();
}
addToPortfolio(8,2,10);
function getPortfolioByStudentAndDisplay($student_id) {
    global $conn;
    $stmt = $conn->prepare("SELECT p.*, e.type AS engagement_type, e.date AS engagement_date, e.duration AS engagement_duration, e.reflection AS engagement_reflection, a.status AS application_status, a.submitted_documents AS application_documents
                            FROM Portfolios p
                            LEFT JOIN Engagements e ON p.engagement_id = e.engagement_id
                            LEFT JOIN Applications a ON p.application_id = a.application_id
                            WHERE p.student_id = ?");
    $stmt->bind_param("i", $student_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<h2>Portfolio for Student ID: $student_id</h2>";
        echo "<table border='1'>";
        echo "<tr>
                <th>Engagement Type</th>
                <th>Engagement Date</th>
                <th>Duration</th>
                <th>Reflection</th>
                <th>Application Status</th>
                <th>Submitted Documents</th>
              </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['engagement_type']}</td>
                    <td>{$row['engagement_date']}</td>
                    <td>{$row['engagement_duration']}</td>
                    <td>{$row['engagement_reflection']}</td>
                    <td>{$row['application_status']}</td>
                    <td>{$row['application_documents']}</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No portfolio data found for student ID: $student_id.";
    }
}


getPortfolioByStudentAndDisplay(8);



?>