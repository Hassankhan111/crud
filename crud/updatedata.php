<?php
$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_age = $_POST['sage'];
$stu_city = $_POST['scity'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];

include 'connection.php';

$sql = "UPDATE students SET student_name = '{$stu_name}', age = {$stu_age}, city = '{$stu_city}', Department = '{$stu_class}', phone = {$stu_phone} WHERE id = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
if($result){
header("Location: http://localhost:8080/crud/index.php");
}

mysqli_close($conn);

?>
