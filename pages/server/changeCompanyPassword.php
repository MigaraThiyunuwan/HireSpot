<?php

require_once './DBConnector.php';

use server\DbConnector;

$dbcon = new DbConnector();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['companyID']) && !empty($_POST['companyID']) && isset($_POST['dbPassword']) && !empty($_POST['dbPassword']) && isset($_POST['currentPassword']) && !empty($_POST['currentPassword']) && isset($_POST['confirmPassword']) && !empty($_POST['confirmPassword']) ) {

        // Sanitize user input to prevent SQL injection and XSS attacks
        $companyID = htmlspecialchars($_POST['companyID']);
        $dbPassword = $_POST['dbPassword'];
        $currentPassword = $_POST['currentPassword'];
        $confirmPassword = password_hash($_POST['confirmPassword'], PASSWORD_DEFAULT);
        
          if (password_verify($currentPassword,$dbPassword)) {
   

        try {
            $con = $dbcon->getConnection();
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Update the job information in the database table using a prepared statement
            $sql = "UPDATE company SET password=? WHERE companyID =?";
            $pstmt = $con->prepare($sql);
            $pstmt->bindValue(1, $confirmPassword);
            $pstmt->bindValue(2, $companyID);// hidden input field 

         

            if ($pstmt->execute()) {
                // Redirect to the posts page with success message
                header("Location: ../CompanyPages/companyProfile.php?success=5");
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
            header("Location: ../CompanyPages/companyProfile.php?error=7");
            exit;
        }
    } else {
        // Redirect to the posts page with error message for missing form data
        header("Location: ../CompanyPages/companyProfile.php?error=6");
        exit();
    }
} else {
    // Redirect to the posts page with error message for invalid request method
    header("Location: ../CompanyPages/companyProfile.php?error=1");
    exit();
}
?>
