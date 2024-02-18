<?php
session_start();

// Unset company-specific session variables
unset($_SESSION["userID"]);
unset($_SESSION["username"]);
unset($_SESSION["email"]);

// Destroy the session
//session_destroy();

// Redirect to the login page with an error message
header("Location: ../Login.php");
exit;
