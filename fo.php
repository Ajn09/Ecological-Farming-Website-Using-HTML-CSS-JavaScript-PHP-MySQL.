<?php
session_start();
echo '<script>alert("Field Officer Page Login successful");</script>';
echo "<script>document.location='af.php';</script>";
echo "<a href=logout.php>logout</a>";
?>