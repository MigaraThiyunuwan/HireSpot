<?php

require_once './DBConnector.php';
require_once './company.php';

use server\DbConnector;

// Start the session
session_start();

$dbcon = new DbConnector();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $companyname = $_POST["companyname"] ?? '';
    $password = $_POST["Password"] ?? '';

    // Validate input
    if (empty($companyname) || empty($password)) {
        header("Location: ../LoginCompany.php?error=5");
        exit;
    }

    // Sanitize input
    $companyname = filter_input(INPUT_POST, 'companyname', FILTER_SANITIZE_STRING);
    $password = $_POST["Password"]; // Password should not be sanitized

    try {
        $con = $dbcon->getConnection();
        $query = "SELECT companyID, companyname, password FROM company WHERE companyname = ?";
        $pstmt = $con->prepare($query);
        $pstmt->execute([$companyname]);
        $row = $pstmt->fetch(PDO::FETCH_ASSOC);

        if (!$row) {
            header("Location: ../LoginCompany.php?error=4");
            exit;
        }

        $dbcompanyID = $row['companyID'];
        $dbcompanyname = $row['companyname'];
        $dbpassword = $row['password'];

        if (password_verify($password, $dbpassword)) {
            // Password matches, store company details in the session and redirect to company profile
            $_SESSION["companyID"] = $dbcompanyID;
            $_SESSION["companyname"] = $companyname;
            header("Location: ../CompanyPages/companyProfile.php");
            exit;
        } else {
            // Password does not match, redirect to the login page with an error message
            header("Location: ../LoginCompany.php?error=2");
            exit;
        }
    } catch (PDOException $exc) {
        // Log the error or show a generic error message
        header("Location: ../LoginCompany.php?error=6");
        exit;
    }
} else {
    // Redirect to the login page with an error message for an invalid request method
    header("Location: ../LoginCompany.php?error=1");
    exit;
}
?>
