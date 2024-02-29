<?php
include 'header.php';
include "config.php";

$sql = "SELECT * FROM students";

$result = mysqli_query($conn, $sql);

?>
<div id="main-content">
    <h2>All Records</h2>
    <?php 
    if (mysqli_num_rows($result) > 0) {
        
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Iamge</th>
        <th>Name</th>
        <th>Address</th>
        <th>Department</th>
        <th>Semester</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php 
            while ($rows = mysqli_fetch_assoc($result)) {
               
            ?>
            <tr>
                <td><?php echo $rows['id'] ?></td>
                <td><img style="height: 30px; width:30px" src="upload/<?php echo $rows['image'] ?>" alt="image"></td>
                <td><?php echo $rows['name'] ?></td>
                <td><?php echo $rows['address'] ?></td>
                <td><?php echo $rows['department'] ?></td>
                <td><?php echo $rows['semester'] ?></td>
                <td><?php echo $rows['phone'] ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $rows['id'] ?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $rows['id'] ?>'>Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php } ?>
</div>
</div>
</body>
</html>
