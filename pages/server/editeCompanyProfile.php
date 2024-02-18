<?php

require_once './DBConnector.php';

use server\DbConnector;

$dbcon = new DbConnector();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['companyID']) && !empty($_POST['companyID']) && isset($_POST['address']) && !empty($_POST['address']) && isset($_POST['description']) && !empty($_POST['description']) && isset($_POST['employee']) && !empty($_POST['employee']) ) {

        // Sanitize user input to prevent SQL injection and XSS attacks
        $companyID = htmlspecialchars($_POST['companyID']);
        $address = htmlspecialchars($_POST['address']);
        $description = htmlspecialchars($_POST['description']);
        $employee = htmlspecialchars($_POST['employee']);

        try {
            $con = $dbcon->getConnection();
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Update the job information in the database table using a prepared statement
            $sql = "UPDATE company SET address=?, description=?, employee=? WHERE companyID =?";
            $pstmt = $con->prepare($sql);
            $pstmt->bindValue(1, $address);
            $pstmt->bindValue(2, $description);
            $pstmt->bindValue(3, $employee);
            $pstmt->bindValue(4, $companyID);// hidden input field 
         

            if ($pstmt->execute()) {
                // Redirect to the posts page with success message
                header("Location: ../CompanyPages/companyProfile.php?success=4");
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
        header("Location: ../CompanyPages/companyProfile.php?error=6");
        exit();
    }
} else {
    // Redirect to the posts page with error message for invalid request method
    header("Location: ../CompanyPages/companyProfile.php?error=1");
    exit();
}
?>
