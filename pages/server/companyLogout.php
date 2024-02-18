<?php

session_start();

// Unset company-specific session variables
unset($_SESSION['companyID']);
unset($_SESSION['companyname']);

// Destroy the session
//session_destroy();

// Redirect to the login page with an error message
header("Location: ../LoginCompany.php");
exit;
