<?php

require_once './DBConnector.php';

use server\DbConnector;

$dbcon = new DbConnector();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['jobID']) && !empty($_POST['jobID']) && isset($_POST['jobTitle']) && !empty($_POST['jobTitle']) && isset($_POST['jobCategory']) && !empty($_POST['jobCategory']) && isset($_POST['companyID']) && !empty($_POST['companyID']) && isset($_POST['description']) && !empty($_POST['description'])) {

        // Sanitize user input to prevent SQL injection and XSS attacks
        $jobID = htmlspecialchars($_POST['jobID']);
        $jobTitle = htmlspecialchars($_POST['jobTitle']);
        $jobCategory = htmlspecialchars($_POST['jobCategory']);
        $companyID = htmlspecialchars($_POST['companyID']);
        $date = date("Y-m-d H:i:s");
        $content = htmlspecialchars($_POST['description']);

        try {
            $con = $dbcon->getConnection();
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Update the job information in the database table using a prepared statement
            $sql = "UPDATE job SET  jobTitle=?, jobcateogory=?, companyID=?, date=?, content=? WHERE jobID=?";
            $pstmt = $con->prepare($sql);
            $pstmt->bindValue(1, $jobTitle);
            $pstmt->bindValue(2, $jobCategory);
            $pstmt->bindValue(3, $companyID);
            $pstmt->bindValue(4, $date);
            $pstmt->bindValue(5, $content);
            $pstmt->bindValue(6, $_POST['jobID']); // hidden input field in the form to capture jobID

            if ($pstmt->execute()) {
                // Redirect to the posts page with success message
                header("Location: ../CompanyPages/posts.php?success=2");
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
        header("Location: ../CompanyPages/posts.php?error=3");
        exit();
    }
} else {
    // Redirect to the posts page with error message for invalid request method
    header("Location: ../CompanyPages/posts.php?error=2");
    exit();
}
?>
