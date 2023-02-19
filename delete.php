<?php

$id = $_GET['id'];
include 'include/config.php';
$sql = "delete from rcompany where id=$id";
mysqli_query($connect,$sql);

header('location:show.php');




?>