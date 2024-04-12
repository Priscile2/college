<?php
include '../../config/connection.php';

$query = "SELECT * FROM Engagements";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $engagements = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($engagements);
} else {
    echo json_encode(["message" => "No engagements found"]);
}
?>
