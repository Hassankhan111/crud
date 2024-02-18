<?php

$stu_id = $_GET['id'];

include 'connection.php';

$sql = "DELETE FROM students WHERE id = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost:8080/crud/index.php");

mysqli_close($conn);

?>
