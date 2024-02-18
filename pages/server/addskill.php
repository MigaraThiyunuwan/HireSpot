<?php
require_once './DBConnector.php';

use server\DbConnector;

$dbcon = new DbConnector();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $skillname = $_POST['skillname'] ?? '';
    $skillrange = $_POST['skillrange'] ?? '';
    $userID = $_POST['userID'] ?? '';
 

    // Validate input
    if (empty($skillname) || empty($skillrange) || empty($userID)) {
        header("Location: ../jobseeker/userProfile.php?error=6");
        exit;
    }

    // Sanitize input
    $skillname = filter_input(INPUT_POST, 'skillname', FILTER_SANITIZE_STRING);
    $skillrange  = filter_input(INPUT_POST, 'skillrange', FILTER_SANITIZE_STRING);
    $userID = filter_input(INPUT_POST, 'userID', FILTER_SANITIZE_STRING);


    try {
        $con = $dbcon->getConnection();
        $query = "INSERT INTO skill (userID , skillName, skillLevel) VALUES (?, ?, ?)";
        $pstmt = $con->prepare($query);
        $pstmt->execute([$userID, $skillname, $skillrange]);

        if ($pstmt->rowCount() > 0) {
            header("Location: ../jobseeker/userProfile.php?success=4");
            exit;
        } else {
            header("Location: ../jobseeker/userProfile.php?error=9");
            exit;
        }
    } catch (PDOException $exc) {
        // Log the error or show a generic error message
        header("Location: ../jobseeker/userProfile.php?message=" . $exc->getMessage());
        exit;
    }
} else {
    // Redirect to the login page with an error message for invalid request method
    header("Location: ../jobseeker/userProfile.php?error=1");
    exit;
}