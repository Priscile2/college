<?php
include '../../config/connection.php';

$sql = "SELECT * FROM Reminders";
$result = mysqli_query($conn, $sql);

$reminders = [];
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $reminders[] = $row;
    }
    echo json_encode($reminders);
} else {
    echo json_encode(['message' => 'No reminders found.']);
}

mysqli_close($conn);
?>
