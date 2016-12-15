<?php
include('db.php');
$q="select * from smarks";
$res=mysqli_query($con,$q);
$count=0;
$totalmarks=0;
if(mysqli_num_rows($res)>0)
{
while($row=mysqli_fetch_assoc($res))
{
$rollno=$row['rollno'];
$marks=$row['marks'];

$count++;
$totalmarks=$totalmarks+$marks;
}
}


$res=mysqli_query($con,$q);
$mean=$totalmarks/$count;
$totaldev=0;

if(mysqli_num_rows($res)>0)
{
while($row=mysqli_fetch_assoc($res))
{

$rollno=$row['rollno'];
$marks=$row['marks'];
$a=$marks-$mean;
$b=$a*$a;
$totaldev=$totaldev+$b;
}
}

$a=1/$count;
$a=$a*$totaldev;
$sd=sqrt($a);
$c=$sd/2;

$aa=$mean+2*$c;
$ab=$mean+$c;
$bb=$mean;
$bc=$mean-$c;
$cc=$mean-2*$c;
$dd=$mean-3*$c;

if($aa<60)
$aa=60;

if($ab<50)
$ab=50;

if($bb<45)
$b=45;

if($bc<40)
$bc=40;

if($cc<35)
$cc=35;

if($dd<30)
$dd=30;

$res=mysqli_query($con,$q);

echo "<br>";

if(mysqli_num_rows($res)>0)
{
while($row=mysqli_fetch_assoc($res))
{

$rollno=$row['rollno'];
$marks=$row['marks'];
if($marks>=$aa)
$grade="AA";

if($marks>=$ab  && $marks<$aa)
$grade="AB";

if($marks>=$bb  && $marks<$ab)
$grade="BB";

if($marks>=$bc  && $marks<$bb)
$grade="BC";

if($marks>=$cc  && $marks<$bc)
$grade="CC";

if($marks>=$dd  && $marks<$cc)
$grade="DD";

if($marks<$dd)
$grade="FF";

$q="insert into grades values('$rollno','$grade')";
$res1=mysqli_query($con,$q);
}
}

header('location:show.php');
?>