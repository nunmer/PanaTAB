<?php
$link = mysqli_connect('localhost','root','','panatabdb');
$insertQuery = "INSERT INTO user(name,username,password) VALUES ('".$_POST['name']."','".$_POST['username']."','".$_POST['password']."')";
$insert=mysqli_query($link, $insertQuery);
if($insert){
  header("Location:login.php");
}
 ?>
