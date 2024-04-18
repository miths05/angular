<?php
include 'db-connection.php';

$postData = file_get_contents("php://input");
$data = json_decode($postData, true);
$rollno = $data['rollno']; // Assuming roll number is used as the identifier for deleting the record

$sql = "DELETE FROM student WHERE rollno = '$rollno'";

if ($conn->query($sql) === TRUE) {
    echo "Record with Roll No. " . $rollno . " deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
