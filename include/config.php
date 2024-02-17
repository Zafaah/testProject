<?php
$conn=mysqli_connect("localhost","root","","form");

if($conn->connect_error){
   die("connection error".$conn->connect_error);
}
?>