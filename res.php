<?php

$fname=$_POST['fname'];
$pno=$_POST['pno'];
$serve=$_POST['serve'];
$quer=$_POST['quer'];

$con=mysqli_connect("localhost","root","","ef");
$sql="INSERT INTO queries(fname,pno,serve,quer) values('$fname','$pno','$serve','$quer')";

$queries=mysqli_query($con,$sql);
if($queries)
{
    echo '<script>alert("Registration Successfully Done");</script>';
	echo "<script>document.location='index.html';</script>";
}
else
{
    echo '<script>alert("Registration Not Successful Please Try Again");</script>';
	echo "<script>document.location='index.html';</script>";
}
?>
