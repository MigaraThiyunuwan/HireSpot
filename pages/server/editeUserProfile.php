<?php

require_once './DBConnector.php';

use server\DbConnector;

$dbcon = new DbConnector();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['userID']) && !empty($_POST['userID']) && isset($_POST['phoneNo']) && !empty($_POST['phoneNo']) && isset($_POST['address']) && !empty($_POST['address']) && isset($_POST['education']) && !empty($_POST['education']) && isset($_POST['description']) && !empty($_POST['description']) && isset($_POST['about']) && !empty($_POST['about'])) {

        // Sanitize user input to prevent SQL injection and XSS attacks
        $userID = htmlspecialchars($_POST['userID']);
        $phoneNo = htmlspecialchars($_POST['phoneNo']);
        $address = htmlspecialchars($_POST['address']);
        $education = htmlspecialchars($_POST['education']);
        $description = htmlspecialchars($_POST['description']);
        $about = htmlspecialchars($_POST['about']);

        try {
            $con = $dbcon->getConnection();
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Update the job information in the database table using a prepared statement
            $sql = "UPDATE jobseeker SET phoneNo=?, address=?, education=? ,description=? ,about=? WHERE userID =?";
            $pstmt = $con->prepare($sql);
            $pstmt->bindValue(1, $phoneNo);
            $pstmt->bindValue(2, $address);
            $pstmt->bindValue(3, $education);
            $pstmt->bindValue(4, $description);
            $pstmt->bindValue(5, $about);
            $pstmt->bindValue(6, $userID); // hidden input field 


            if ($pstmt->execute()) {
                // Redirect to the posts page with success message
                header("Location: ../jobseeker/userProfile.php?success=2");
                exit();
            } else {
                echo "Error: Unable to update job information in the database.";
            }

            $con = null;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
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