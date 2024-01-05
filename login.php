<?php
session_start();
include("config.php");
$uname=$_POST["uname"];
$pass=$_POST["pass"];

$match="select no from login where uname='".$_POST['uname']."'
and pass = '".$_POST['pass']."';";

$qry=mysql_query($match);
$num_rows=mysql_num_rows($qry);
if ($num_rows<=0){
	echo '<script>alert("Login Failed Try Again");</script>';
echo "<script>document.location='index.html';</script>";
exit;
}
else{
$_SESSION['user']=$_POST["uname"];
header("location:admin.php");
}
?>