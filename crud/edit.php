<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
    include 'connection.php';

    $stu_id = $_GET['id'];

    $sql = "SELECT * FROM students WHERE id = {$stu_id}";
    
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if(mysqli_num_rows($result) > 0)  {
      while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $row['id']; ?>"/>
          <input type="text" name="sname" value="<?php echo $row['student_name']; ?>"/>
      </div>
      <div class="form-group">
          <label>Age</label>
          <input type="text" name="age" value="<?php echo $row['age']; ?>"/>
      </div>
      <div class="form-group">
          <label>City</label>
          <input type="text" name="city" value="<?php echo $row['city']; ?>"/>
      </div>
      <div class="form-group">
          <label>Department</label> 
          <?php
            $sql1 = "SELECT * FROM department";
            $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful.");

            if(mysqli_num_rows($result1) > 0){
              echo '<select name="sclass">';
              while($row1 = mysqli_fetch_assoc($result1)){
                if($row['Department'] == $row1['D_id']){
                  $select = "selected";
                }else{
                  $select = "";
                }
                echo  "<option {$select} value='{$row1['D_id']}'>{$row1['D_name']}</option>";
              }
            echo "</select>";
          }
            ?>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $row['phone']; ?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php
      }
    }
    ?>
</div>
</div>
</body>
</html>
