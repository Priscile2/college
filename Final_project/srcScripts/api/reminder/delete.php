<?php
include '../../config/connection.php';

$reminder_id = $_POST['reminder_id'] ?? null;

if (!$reminder_id) {
    echo json_encode(['error' => 'Missing reminder_id.']);
    exit;
}

$stmt = mysqli_prepare($conn, "DELETE FROM Reminders WHERE reminder_id = ?");
mysqli_stmt_bind_param($stmt, "i", $reminder_id);

if (mysqli_stmt_execute($stmt)) {
    echo json_encode(['message' => 'Reminder deleted successfully.']);
} else {
    echo json_encode(['error' => 'Failed to delete reminder.']);
}

mysqli_close($conn);
?>
