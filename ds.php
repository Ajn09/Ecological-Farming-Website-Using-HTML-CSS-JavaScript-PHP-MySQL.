<?php
$no=$_POST['no'];
@mysql_connect("localhost","root","")or die ("cannot be connected");
@mysql_select_db('ef')or die ("cannot be connected");

$query=@mysql_query ("DELETE FROM addstaff WHERE no='$no'");
mysql_query($query);
if(!$query){
die(mysql_error());
}
echo '<script>alert("Staff Deleted Successfully");</script>';
        echo "<script>document.location='as.html';</script>";

?>