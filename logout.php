<?php
session_start();
// Unset all of the session variables
unset($_SESSION['username']);
// Destroy the session
session_destroy();
// Redirect to the login page or any other page you want
header("Location: login.php");
exit();
?>