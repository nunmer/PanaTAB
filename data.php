<?php
$link = mysqli_connect('localhost','root','','panatabdb');
extract($_POST);
$insertQuery = "INSERT into contactus (name,email,message,created_date) VALUES('" . $name . "','" . $email . "','" . $message . "','" . date('Y-m-d') . "')";
$insert=mysqli_query($link, $insertQuery);
if($insert){
  echo "Thank You For Contacting Us ";
}
else {
  die("Couldn't enter data: ".$mysqli->error);
}
?>
