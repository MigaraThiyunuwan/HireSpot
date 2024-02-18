<?php

require_once './DBConnector.php';

use server\DbConnector;

$dbcon = new DbConnector();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['userID']) && !empty($_POST['userID']) && isset($_POST['dbPassword']) && !empty($_POST['dbPassword']) && isset($_POST['currentPassword']) && !empty($_POST['currentPassword']) && isset($_POST['confirmPassword']) && !empty($_POST['confirmPassword'])) {

        // Sanitize user input to prevent SQL injection and XSS attacks
        $userID = htmlspecialchars($_POST['userID']);
        $dbPassword = $_POST['dbPassword'];
        $currentPassword = $_POST['currentPassword'];
        $confirmPassword = password_hash($_POST['confirmPassword'], PASSWORD_DEFAULT);

        if (password_verify($currentPassword, $dbPassword)) {


            try {
                $con = $dbcon->getConnection();
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Update the job information in the database table using a prepared statement
                $sql = "UPDATE jobseeker SET password =? WHERE userID  =?";
                $pstmt = $con->prepare($sql);
                $pstmt->bindValue(1, $confirmPassword);
                $pstmt->bindValue(2, $userID); // hidden input field 



                if ($pstmt->execute()) {
                    // Redirect to the posts page with success message
                    // echo $confirmPassword;
                    header("Location: ../jobseeker/userProfile.php?success=3");
                    exit();
                } else {
                    echo "Error: Unable to update job information in the database.";
                }

                $con = null;
            } catch (PDOException $e) {
                die("Connection failed: " . $e->getMessage());
            }
        } else {
            // Password does not match, redirect to the login page with an error message
            header("Location: ../jobseeker/userProfile.php?error=7");
            exit;
        }
    } else {
        // Redirect to the posts page with error message for missing form data
        header("Location: ../jobseeker/userProfile.php?error=6");
        exit();
    }
} else {
    // Redirect to the posts page with error message for invalid request method
    header("Location: ../jobseeker/userProfile.php?error=1");
    exit();
}
?>