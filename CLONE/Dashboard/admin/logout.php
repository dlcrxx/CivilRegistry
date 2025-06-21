<?php
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Optional: Redirect to login or homepage
header("Location: ../../CivilRegistry/index.php");
exit();
?>