<?php include 'header.php'; ?>

<?php

if (isset($_POST['deletebtn'])) {
    $student_id = $_POST['id'];

    include "config.php";

    $sql = "DELETE FROM students WHERE id={$student_id}";

    $result = mysqli_query($conn, $sql);

    header("Location:http://localhost/CRUD-2024/index.php");
}

?>
<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="id" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>

</html>