<?php
$rollno=$_GET['rollno'];
$marks=$_GET['marks'];
$q="update smarks set marks=$marks where rollno=$rollno";
include('db.php');
$res=mysqli_query($con,$q);
if($res)
header('location:index.html');
?>