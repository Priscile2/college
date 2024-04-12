<?php
include '../config/connection.php';

echo "hello";
function createStudent($fname, $lname, $email, $yearGroup, $major) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO Students (fname, lname, email, yearGroup, major) VALUES (?, ?, ?, ?, ?)");
    // Bind parameters
    $stmt->bind_param("sssss", $fname, $lname, $email, $yearGroup, $major);
    echo $stmt;
    
    // Execute statement once
    if ($stmt->execute()) {
        echo "New student created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
    // Close statement
    $stmt->close();
}

createStudent('John', 'Jane', 'xx@gmail.com', '2022', 'MIS');
echo "hello";

function readStudents() {
    global $conn;
    $sql = "SELECT * FROM Students";
    $result = $conn->query($sql) or die("Query failed: " . $conn->error);

    if ($result->num_rows > 0) {
        // Fetch all rows at once as an associative array
        $allRows = $result->fetch_all(MYSQLI_ASSOC);
        
        // Iterate through each row using a foreach loop
        foreach ($allRows as $row) {
            echo "id: " . $row["student_id"] . " - Name: " . $row["fname"] . " " . $row["lname"] . "<br>";
        }
    } else {
        echo "0 results";
    }
}

readStudents();


function updateStudent($student_id, $fname, $lname, $email, $yearGroup, $major) {
    global $conn; // Make sure $conn is accessible or include your database connection here
    $stmt = $conn->prepare("UPDATE Students SET fname = ?, lname = ?, email = ?, yearGroup = ?, major = ? WHERE student_id = ?");
    $stmt->bind_param("sssssi", $fname, $lname, $email, $yearGroup, $major, $student_id);
    
    if ($stmt->execute()) {
        echo 'Successfully updated';
    } else {
        echo 'Failed to update';
    }
}
updateStudent(2,'Patience','Sombang', 'patience@gmail.com',2025,'MIS');
function deleteStudent($student_id) {
    global $conn; // Make sure $conn is accessible or include your database connection here
    $stmt = $conn->prepare("DELETE FROM Students WHERE student_id = ?");
    $stmt->bind_param("i", $student_id);
    
    if ($stmt->execute()) {
        return true; // Successfully deleted
    } else {
        return false; // Failed to delete
    }
}
//deleteStudent(3);

?>
