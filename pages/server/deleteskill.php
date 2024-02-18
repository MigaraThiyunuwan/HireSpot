<?php
require_once './DBConnector.php';

use server\DbConnector;

$dbcon = new DbConnector();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $skillID = $_POST['skillID'] ?? '';
 
 

    // Validate input
    if (empty($skillID)) {
        header("Location: ../jobseeker/userProfile.php?error=6");
        exit;
    }

    // Sanitize input
    $skillID = filter_input(INPUT_POST, 'skillID', FILTER_SANITIZE_STRING);
    try {
        $con = $dbcon->getConnection();
        $query = "DELETE FROM skill WHERE skillId = ?;";
        $pstmt = $con->prepare($query);
        $pstmt->execute([$skillID]);

        if ($pstmt->rowCount() > 0) {
            header("Location: ../jobseeker/userProfile.php");
            exit;
        } else {
            header("Location: ../jobseeker/userProfile.php");
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