<?php
session_start();
if (isset($_SESSION['user'])) {
unset($_SESSION['user']);

}
echo '<script>alert("Logout Successful");</script>';
header('Location: index.html');
?>