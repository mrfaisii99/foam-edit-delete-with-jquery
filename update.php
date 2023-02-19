<?php
$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$city = $_POST['city']; 
$state = $_POST['state'];

include 'include/config.php';
$sql = "UPDATE `rcompany` SET `id`='$id',`firstname`='$fname',`lastname`='$lname',`email`='$email',`city`='$city',`state`='$state' WHERE id=$id";
mysqli_query($connect,$sql);

header('Location:show.php');

?>