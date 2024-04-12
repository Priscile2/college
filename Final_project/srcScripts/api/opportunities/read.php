<?php
include '../../config/connection.php';

$sql = "SELECT * FROM Opportunities";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $opportunities = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($opportunities);
} else {
    echo json_encode(["message" => "No opportunities found"]);
}
?>
