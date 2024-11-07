<?php
include 'connection.php';
if(isset($_POST['sbT'])){
$user_name = $_POST['user-name'];
$user_email = $_POST['user-email'];
$user_passwrod = $_POST['user-pass'];
$sql = "INSERT INTO `users`( `user_name`, `user_pass`, `email`) VALUES ('$user_name','$user_passwrod','$user_email')";
$rusulte = mysqli_query($con , $sql);
header('location:index.php');
mysqli_close($con);
}






?>