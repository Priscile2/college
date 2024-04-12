<?php
include '../config/connection.php';

// Function to create a new application
function createApplication($student_id, $opportunity_id, $status, $submitted_documents) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO Applications (student_id, opportunity_id, status, submitted_documents) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iisi", $student_id, $opportunity_id, $status, $submitted_documents);
    $stmt->execute();
    return $stmt->insert_id;
}
createApplication(8,5,'Accepted','CV and Cover letter');
// Function to get applications by student
function getApplicationsByStudent($student_id) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM Applications WHERE student_id = ?");
    $stmt->bind_param("i", $student_id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_all(MYSQLI_ASSOC);
}
getApplicationsByStudent(2);
function updateApplication($application_id, $status, $submitted_documents) {
    global $conn;
    $stmt = $conn->prepare("UPDATE Applications SET status = ?, submitted_documents = ? WHERE application_id = ?");
    $stmt->bind_param("ssi", $status, $submitted_documents, $application_id);
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}
updateApplication(1,'rejected',"Cover Letter");
function deleteApplication($application_id) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM Applications WHERE application_id = ?");
    $stmt->bind_param("i", $application_id);
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}


$created = createApplication(1, 1, 'pending', '');
if($created){
    echo "Application successfully created";
}
else{
    echo "Failed to create application";
}

// Update an application
$updated = updateApplication(1, 'approved', 'Updated document link');
if ($updated) {
    echo "Application updated successfully.";
} else {
    echo "Failed to update application.";
}

// Delete an application
$deleted = deleteApplication(2); // Replace with the actual application_id you wish to delete
if ($deleted) {
    echo "Application deleted successfully.";
} else {
    echo "Failed to delete application.";
}

?>