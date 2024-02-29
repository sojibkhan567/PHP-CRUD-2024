<?php

include "config.php";

//get form value from input tag
$studen_id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$department = $_POST['department'];
$semester = $_POST['semester'];
$phone = $_POST['phone'];


//update image upload
if (isset($_FILES['image'])) {
    $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];

    move_uploaded_file($file_tmp, "upload/" . $file_name);

    $sql = "UPDATE students SET name='{$name}', address='{$address}', department='{$department}', semester='{$semester}', phone='{$phone}', image='{$file_name}' Where id={$studen_id}";

    $result = mysqli_query($conn, $sql) or die("Query unsuccessfull.");  
}
//url redirect
header("Location:http://localhost/CRUD-2024/index.php");

mysqli_close($conn);