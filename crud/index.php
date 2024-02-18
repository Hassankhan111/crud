<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
      include 'connection.php';

       $sql = "SELECT students.id, students.phone,students.student_name, students.age, students.city, department.D_name FROM students
       JOIN department ON students.department = department.D_id";
     
      $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

      if(mysqli_num_rows($result) > 0)  {
    ?>
    <table cellpadding="7px">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>age</th>
            <th>City</th>
            <th>Department</th>
            <th>Phone</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['student_name']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><?php echo $row['city']; ?></td>
                 <td><?php echo $row['D_name']; ?></td>
                 <td><?php echo $row['phone']; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['id']; ?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['id']; ?>'>Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php }else{
    echo "<h2>No Record Found</h2>";
  }
  mysqli_close($conn);
  ?>
</div>
</div>
</body>

</html>