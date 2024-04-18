<?php
include 'db_connection.php';
$result = $conn->query("SELECT * FROM students");
$outp = "";
while($rs = $result->fetch_array()) {
if ($outp != "") {$outp .= ",";}
$outp .= '{"Name":"' . $rs["name"] . '",';
$outp .= '"Rollno":"' . $rs["rollno"] . '",';
$outp .= '"Phone":"'. $rs["phone"] . '",';
$outp .= '"Grade":"'. $rs["grade"] . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();
echo($outp);
?>