<?php

require_once './DBConnector.php';
require_once './jobseeker.php';

use server\DbConnector;

// Start the session
session_start();

$dbcon = new DbConnector();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"] ?? '';
    $password = $_POST["Password"] ?? '';

    // Validate input
    if (empty($email) || empty($password)) {
        header("Location: ../Login.php?error=5");
        exit;
    }

    // Sanitize input
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $password = $_POST["Password"]; // Password should not be sanitized

    try {
        $con = $dbcon->getConnection();
        $query = "SELECT userID, username, email, password FROM jobseeker WHERE email = ?";
        $pstmt = $con->prepare($query);
        $pstmt->execute([$email]);
        $row = $pstmt->fetch(PDO::FETCH_ASSOC);

        if (!$row) {
            header("Location: ../Login.php?error=4");
            exit;
        }

        $dbuserID = $row['userID'];
        $dbusername = $row['username'];
        $dbemail = $row['email'];
        $dbpassword = $row['password'];

        if (password_verify($password, $dbpassword)) {
            // Password matches, store jobseeker details in the session and redirect to company profile
            $_SESSION["userID"] = $dbuserID;
            $_SESSION["username"] = $dbusername;
            $_SESSION["email"] = $dbemail;
            header("Location: ../jobseeker/feed.php");
            exit;
        } else {
            // Password does not match, redirect to the login page with an error message
            header("Location: ../Login.php?error=2");
            exit;
        }
    } catch (PDOException $exc) {
        // Log the error or show a generic error message
        header("Location: ../Login.php?error=6");
        exit;
    }
} else {
    // Redirect to the login page with an error message for an invalid request method
    header("Location: ../Login.php?error=1");
    exit;
}
?>