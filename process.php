<form method="get">	
<?php
include('db.php');
$rollno=$_GET['rollno'];
$marks=$_GET['marks'];
if($rollno=='')
{
include('second.html');
echo "<h2><center>Enter Some value!!!!</center></h2>";
}
else
{
$q="insert into smarks values('$rollno','$marks')";
$res=mysqli_query($con,$q);
if($res)
header('location:index.html');
else 
{
include('second.html');
echo "<h2><center>Roll No is already registered!!!!</center></h2>";
}
}
?>