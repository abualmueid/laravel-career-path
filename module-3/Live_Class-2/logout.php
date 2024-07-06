<?php 

// Resume the session
session_start();

// Unset all of the session variables
unset($_SESSION);

// Destroy the session
session_destroy();

// Redirect to the login page
header("Location: index.php");
exit;