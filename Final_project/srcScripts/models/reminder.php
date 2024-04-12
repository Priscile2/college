<?php
include '../config/connection.php';

// Create a new reminder
function createReminder($student_id, $opportunity_id, $message, $reminder_date) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO Reminders (student_id, opportunity_id, message, reminder_date) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iiss", $student_id, $opportunity_id, $message, $reminder_date);
    
    if($stmt->execute()) {
        // If execute is successful, return the last inserted ID
        return $conn->insert_id;
    } else {
        // If there's an error, you can return or handle it as needed
        return "Error: " . $stmt->error;
    }
}

// Adjust the date and time format in the function call
//createReminder(8, 1, "It is time for your meeting", '2023-03-20 14:30:00');

// Get reminders for a student
function getRemindersByStudentAndDisplay($student_id) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM Reminders WHERE student_id = ?");
    $stmt->bind_param("i", $student_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<h2>Reminders for Student ID: $student_id</h2>";
        echo "<ul>";

        while ($row = $result->fetch_assoc()) {
            echo "<li>";
            echo "<strong>Message:</strong> {$row['message']}<br>";
            echo "<strong>Reminder Date:</strong> " . date("F j, Y, g:i a", strtotime($row['reminder_date']));
            if ($row['opportunity_id']) {
                echo "<br><strong>Opportunity ID:</strong> {$row['opportunity_id']}";
            }
            echo "</li>";
        }
        echo "</ul>";
    } else {
        echo "No reminders found for student ID: $student_id.";
    }
}

getRemindersByStudentAndDisplay(8);


function updateReminder($reminder_id, $student_id, $opportunity_id, $message, $reminder_date) {
    global $conn;
    $query = "UPDATE Reminders SET student_id = ?, opportunity_id = ?, message = ?, reminder_date = ? WHERE reminder_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("iissi", $student_id, $opportunity_id, $message, $reminder_date, $reminder_id);
    
    if ($stmt->execute()) {
        return true; // Successfully updated
    } else {
        return false; // Error occurred
    }
}
updateReminder(2,8,4,"Stay alert for this opportunity","2024-03-21 6:45:00");
updateReminder(3,8,4,"Stay alert for this opportunity","2024-03-21 6:45:00");

function deleteReminder($reminder_id) {
    global $conn; // Make sure the connection variable is accessible
    $query = "DELETE FROM Reminders WHERE reminder_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $reminder_id); // Bind the reminder ID to the query
    
    if ($stmt->execute()) {
        // Check if the deletion was successful
        if ($stmt->affected_rows > 0) {
            echo "Reminder deleted successfully.";
            return true;
        } else {
            echo "No reminder found with the specified ID.";
            return false;
        }
    } else {
        // Output error if execution failed
        echo "Error deleting reminder: " . $stmt->error;
        return false;
    }
}

deleteReminder(2);


?>