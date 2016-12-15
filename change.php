<?php
include('db.php');
$q='delete from grades';
$res=mysqli_query($con,$q);
if($res)
header('location:index.html');
?>