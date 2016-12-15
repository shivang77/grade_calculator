<html>
<head>
<meta name="viewport" content=" width=device-width,initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet"> 
<link href="css/bootstrap.css" rel="stylesheet"> 
   <title>Grade Calculator</title>
<link href="css/bootstrap.theme.min.css" rel="stylesheet"> 
<link href="css/bootstrap.theme.css" rel="stylesheet"> 

<style>
body
{
background-color:orange;
}
thead
{
border-top: 0;
    background-color: dimgrey;
    color: seashell;
}
tbody{

}
table
{
border:solid slaty 2px;
}
</style>
</head>
<body>

<div>
<div class="container">
<div class="nav navbar-inverse" style="padding:15px;margin-top:3px;color:white;font-size:50px;font-family: cursive;text-align:center">
List of Students
</div>

<div class="col-lg-5 col-md-5 col-sm-5">
</div>

<div class=" col-lg-2 col-md-2 col-sm-2"><br>
<a  class="btn btn-danger btn-block btn-lg"  role="button" href="change.php">Home</a>
</div>

<div class="col-lg-5 col-md-5 col-sm-5">
</div>

<div class="row">

<div class="col-md-12 col-lg-12 col-sm-12">
<div class="table-responsive">
<table class="table table-hover">
<thead>
<br>
<tr>
<th>Roll No</th>
<th>Grade</th>
<th>Pointer</th>
</tr>
</thead>
<tbody>
<?php
    include("db.php");
$q="select * from grades";   
$res=mysqli_query($con,$q);
  
if(mysqli_num_rows($res)>0)
{
while($row=mysqli_fetch_assoc($res))
{
echo "<tr>";
$rollno=$row['rollno'];
$grade=$row['grade'];

if($grade=="AA")
$pointer=10.0;

if($grade=="AB")
$pointer=9.0;

if($grade=="BB")
$pointer=8.0;

if($grade=="BC")
$pointer=7.0;

if($grade=="CC")
$pointer=6.0;

if($grade=="DD")
$pointer=4.0;

if($grade=="FF")
$pointer=0.0;

echo "<td>";
echo $rollno;
echo "</td>";
echo "<td>";
echo $grade;
echo "</td>";
echo "<td>";
echo $pointer;
echo "</td>";
echo "</tr>";

}
}
?>    
 </tbody>   
    </table>
</div>
</div>
</div>
</div>
</div>
</body>
</html>








