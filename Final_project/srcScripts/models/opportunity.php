<?php
include '../config/connection.php';

function createOpportunity($title, $description, $eligibility_criteria, $document_required, $deadline) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO Opportunities (title, description, eligibility_criteria, document_required, deadline) VALUES (?, ?, ?, ?, ?)");
    // Assuming $document_required is boolean treated as integer (0 or 1) and $deadline is a string 'YYYY-MM-DD'
    $stmt->bind_param("sssis", $title, $description, $eligibility_criteria, $document_required, $deadline);
    if($stmt->execute()) {
        // If execute() is successful, return the last inserted id
        return $conn->insert_id;
    } else {
        // If there is an error, return false or handle the error as needed
        return false;
    }
}

//createOpportunity('Internship at Tech Company', 'A six-month internship focusing on software development.', 'Currently enrolled in a Computer Science or related degree program. Minimum GPA of 3.0.', 1, '2023-08-01');

function getAllOpportunities() {
    global $conn;
    $result = $conn->query("SELECT * FROM Opportunities");
    if ($result->num_rows > 0) {
        echo "<h2>List of Opportunities</h2>";
        echo "<ul>";
        while ($opportunity = $result->fetch_assoc()) {
            echo "<li>";
            echo "<strong>Title:</strong> " . $opportunity['title'] . "<br>";
            echo "<strong>Description:</strong> " . $opportunity['description'] . "<br>";
            echo "<strong>Eligibility Criteria:</strong> " . $opportunity['eligibility_criteria'] . "<br>";
            echo "<strong>Document Required:</strong> " . ($opportunity['document_required'] ? 'Yes' : 'No') . "<br>";
            echo "<strong>Deadline:</strong> " . $opportunity['deadline'];
            echo "</li><br>";
        }
        echo "</ul>";
    } else {
        echo "No opportunities found.";
    }
}
getAllOpportunities();

function updateOpportunity($opportunity_id, $title, $description, $eligibility_criteria, $document_required, $deadline) {
    global $conn;
    $stmt = $conn->prepare("UPDATE Opportunities SET title=?, description=?, eligibility_criteria=?, document_required=?, deadline=? WHERE opportunity_id=?");
    // Correct order and type indicators: sssisi
    $stmt->bind_param("sssisi", $title, $description, $eligibility_criteria, $document_required, $deadline, $opportunity_id);
    
    if($stmt->execute()) {
        // Check if any rows were updated
        return $stmt->affected_rows > 0;
    } else {
        return false;
    }
}

// Example call to update an opportunity
updateOpportunity(2, "Study abroad at UCB", "This is an opportunity to spend a semester at UCB", "Must have completed 2 years with a CGPA of 3.0 or better", 1, "2024-03-31");

function deleteOpportunity($opportunity_id) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM Opportunities WHERE opportunity_id = ?");
    $stmt->bind_param("i", $opportunity_id);
    
    if($stmt->execute()) {
        // Check if any rows were deleted
        return $stmt->affected_rows > 0;
    } else {
        return false;
    }
}
deleteOpportunity(3);

?>

