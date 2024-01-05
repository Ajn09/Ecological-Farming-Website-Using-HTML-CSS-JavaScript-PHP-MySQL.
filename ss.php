<?php
@mysql_connect("localhost","root","")or die ("cannot be connected");
@mysql_select_db('ef')or die ("cannot be connected");

$no=$_POST['no'];
$qry="select* from addstaff where no='$no'";
$addstaff=@mysql_query($qry);
if(!$addstaff){
die($qry);
}
print"<table border =1><tr><td>No</td><td>Name</td><td>No</td></tr>";
$row=mysql_fetch_array($addstaff);
do{
print"<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
}
while($row=mysql_fetch_array($addstaff));

print"</table>";

?>