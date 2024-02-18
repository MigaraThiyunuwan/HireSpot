<?php

require_once './DBConnector.php';

use server\DbConnector;

$dbcon = new DbConnector();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['applicationID']) && !empty($_POST['applicationID']) && isset($_POST['status']) && !empty($_POST['status']) ) {

        // Sanitize user input to prevent SQL injection and XSS attacks
        $applicationID= htmlspecialchars($_POST['applicationID']);
        $status = htmlspecialchars($_POST['status']);

        try {
            $con = $dbcon->getConnection();
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Update the job information in the database table using a prepared statement
            $sql = "UPDATE application SET  status=? WHERE applicationID=?";
            $pstmt = $con->prepare($sql);
            $pstmt->bindValue(1, $status);
            $pstmt->bindValue(2, $applicationID);// hidden input field in the form to capture jobID


            if ($pstmt->execute()) {
                // Redirect to the posts page with success message
                header("Location: ../CompanyPages/application.php?success=1");
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
        header("Location: ../CompanyPages/application.php?error=3");
        exit();
    }
} else {
    // Redirect to the posts page with error message for invalid request method
    header("Location: ../CompanyPages/application.php?error=2");
    exit();
}
?>
