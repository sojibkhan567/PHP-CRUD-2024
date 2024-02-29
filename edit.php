<?php include 'header.php'; ?>

<?php 

include "config.php";

//get id value from url
$student_id = $_GET['id'];

$sql = "SELECT * FROM students WHERE id={$student_id}";

$result = mysqli_query($conn, $sql);
// echo "<pre>";
// print_r($rows = mysqli_fetch_assoc($result));
// echo "</pre>";
$rows = mysqli_fetch_assoc($result);
?>

<div id="main-content">
    <h2>Update Record</h2>
    <form class="post-form" action="updatedata.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="id" value="<?php echo $rows['id'] ?>"/>
          <input type="text" name="name" value="<?php echo $rows['name'] ?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="address" value="<?php echo $rows['address'] ?>"/>
      </div>
      <div class="form-group">
          <label>Department</label>
          <input type="text" name="department" value="<?php echo $rows['department'] ?>"/>
      </div>
      <div class="form-group">
          <label>Semester</label>
          <input type="text" name="semester" value="<?php echo $rows['semester'] ?>"/>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="phone" value="<?php echo $rows['phone'] ?>"/>
      </div>
      <div class="form-group">
        <div class="image-box" style="height: 60px; width: 60px; border: 1px solid #353333; margin-left: 150px;">
        <img class="avater-img" style="width: 60px;" src="upload/<?php echo $rows['image'] ?>" alt="image">
      </div>
      </div>
      <div class="form-group">
          <label>Image</label>
          <input type="file" name="image" />
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
</div>
</div>
</body>
</html>
