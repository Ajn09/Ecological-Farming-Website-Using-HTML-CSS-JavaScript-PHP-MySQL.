<?php

$uname=$_POST['uname'];
$pass=$_POST['pass'];


$con=mysqli_connect("localhost","root","","ef");
$sql="INSERT INTO addstaff(uname,pass) values('$uname','$pass')";

$addstaff=mysqli_query($con,$sql);
if($addstaff)
{
    echo '<script>alert("Staff Added Successfully");</script>';
	echo "<script>document.location='admin.html';</script>";
}
else
{
    echo '<script>alert("Staff Added Not Successful Please Try Again");</script>';
	echo "<script>document.location='admin.html';</script>";
}
?>
