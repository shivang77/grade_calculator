<?php

$rollno=$_GET[rollno];
$q1="delete from smarks where rollno=$rollno";
$q2="delete from grades where rollno=$rollno";
include('db.php');
$res=mysqli_query($con,$q1);
$res=mysqli_query($con,$q2);
header('location:index.html');
?>