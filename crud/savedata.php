<?php

 $stu_name = $_POST['sname'];
 $stu_age = $_POST['sage'];
 $stu_city= $_POST['scity'];
 $stu_class = $_POST['class'];
 $stu_phone = $_POST['sphone'];

include "connection.php";

$sql = "INSERT INTO students(student_name,age,city,Department,phone) VALUES ('{$stu_name}',{$stu_age},'{$stu_city}','{$stu_class}','{$stu_phone}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost:8080/crud/index.php");

mysqli_close($conn);

?>
