<?php
include 'db-connection.php';
$postData = file_get_contents("php://input");
$data = json_decode($postData, true);
$name = $data['sname'];
$rollno = $data['roll'];
$phone = $data['phone'];
$grade = $data['grade1'];
$sql = "INSERT INTO student VALUES ('$name', '$rollno', '$phone', '$grade')";
if ($conn->query($sql) === TRUE) {
    echo "New record ".$name." created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    // Close connection
    $conn->close();
    ?>