<?php
include '../../config/connection.php';

$student_id = $_POST['student_id'] ?? null;
$opportunity_id = $_POST['opportunity_id'] ?? null;
$message = $_POST['message'] ?? null;
$reminder_date = $_POST['reminder_date'] ?? null;

if (!$student_id || !$message || !$reminder_date) {
    echo json_encode(['error' => 'Missing required fields.']);
    exit;
}

$stmt = mysqli_prepare($conn, "INSERT INTO Reminders (student_id, opportunity_id, message, reminder_date) VALUES (?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, "iiss", $student_id, $opportunity_id, $message, $reminder_date);

if (mysqli_stmt_execute($stmt)) {
    echo json_encode(['message' => 'Reminder created successfully.']);
} else {
    echo json_encode(['error' => 'Failed to create reminder.']);
}

mysqli_close($conn);
?>
