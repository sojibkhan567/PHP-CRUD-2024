<?php

//get student id from url
$student_id = $_GET['id'];

include "config.php";

$sql = "DELETE FROM students WHERE id={$student_id}";

$result = mysqli_query($conn, $sql);

header("Location:http://localhost/CRUD-2024/index.php");

?>