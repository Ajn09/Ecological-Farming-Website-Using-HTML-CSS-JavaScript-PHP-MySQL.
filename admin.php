<?php
session_start();
echo '<script>alert("Admin Page Login successful");</script>';
echo "<script>document.location='admin.html';</script>";
echo "<a href=logout.php>logout</a>";
?>