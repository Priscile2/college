<?php
include '../../config/connection.php';

$reminder_id = $_POST['reminder_id'] ?? null;
$message = $_POST['message'] ?? null;
$reminder_date = $_POST['reminder_date'] ?? null;

if (!$reminder_id || !$message || !$reminder_date) {
    echo json_encode(['error' => 'Missing required fields.']);
    exit;
}

$stmt = mysqli_prepare($conn, "UPDATE Reminders SET message = ?, reminder_date = ? WHERE reminder_id = ?");
mysqli_stmt_bind_param($stmt, "ssi", $message, $reminder_date, $reminder_id);

if (mysqli_stmt_execute($stmt)) {
    echo json_encode(['message' => 'Reminder updated successfully.']);
} else {
    echo json_encode(['error' => 'Failed to update reminder.']);
}

mysqli_close($conn);
?>
