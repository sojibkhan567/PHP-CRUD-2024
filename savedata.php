<?php

include "config.php";
//get form value
$name = $_POST['name'];
$address = $_POST['address'];
$department = $_POST['department'];
$semester = $_POST['semester'];
$phone = $_POST['phone'];

//image upload
if (isset($_FILES['image'])) {
    $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];

    move_uploaded_file($file_tmp, "upload/" . $file_name);

    $sql = "INSERT INTO students(name,address,department,semester,phone,image) VALUES('{$name}','{$address}','{$department}','{$semester}','{$phone}','{$file_name}')";

    $result = mysqli_query($conn, $sql) or die("Query unsuccessfull.");  
}

header("Location:http://localhost/CRUD-2024/index.php");

mysqli_close($conn);
