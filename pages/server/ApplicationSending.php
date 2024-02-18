<?php

require_once './DBConnector.php';

use server\DbConnector;

$dbcon = new DbConnector();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['userID']) && !empty($_POST['userID']) && isset($_POST['jobID']) && !empty($_POST['jobID']) && isset($_POST['companyID']) && !empty($_POST['companyID'])) {

        if (isset($_FILES["cv"]) && $_FILES["cv"]["error"] === 0) {

            // Sanitize user input to prevent SQL injection and XSS attacks
            $userID = htmlspecialchars($_POST['userID']);
            $jobID = htmlspecialchars($_POST['jobID']);
            $companyID = htmlspecialchars($_POST['companyID']);
            $date = date("Y-m-d H:i:s");

            // File upload handling            
            $targetDir = "../../upload/cvs/"; // storing place
            $originalFileName = $_FILES["cv"]["name"];
            $extension = strtolower(pathinfo($originalFileName, PATHINFO_EXTENSION));
            $pdfFileName = $companyID . "_" . $jobID . "_" . $userID . "_" . preg_replace('/\s+/', '', $originalFileName) . "." . $extension;
            $targetFile = $targetDir . $pdfFileName;

            // Check if the uploaded file is an image
            $allowedExtensions = array("pdf");
            if (in_array($extension, $allowedExtensions)) {
                if (move_uploaded_file($_FILES["cv"]["tmp_name"], $targetFile)) {
                    // Image uploaded successfully, now store the file path in the database

                    try {
                        $con = $dbcon->getConnection();
                        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        // Insert the file path into the database table using a prepared statement
                        $pdfFilePath = $targetFile;
                        $sql = "INSERT INTO application (userID, jobID, companyID, cv, status,date) VALUES (?, ?, ?, ?, 'Waiting',?)";
                        $pstmt = $con->prepare($sql);
                        $pstmt->bindValue(1, $userID);
                        $pstmt->bindValue(2, $jobID);
                        $pstmt->bindValue(3, $companyID);
                        $pstmt->bindValue(4, $pdfFilePath);
                        $pstmt->bindValue(5, $date);


                        if ($pstmt->execute()) {
                            // Redirect to the company profile page with success message
                            header("Location: ../jobseeker/feed.php?success=1");
                            exit();
                        } else {
                            echo "Error: Unable to insert image path into the database.";
                        }

                        $con = null;
                    } catch (PDOException $e) {
                        die("Connection failed: " . $e->getMessage());
                    }
                } else {
                    // Redirect to the company profile page with error message for file upload failure
                    header("Location: ../jobseeker/feed.php?error=5");
                    exit();
                }
            } else {
                // Redirect to the company profile page with error message for invalid file type
                header("Location: ../jobseeker/feed.php?error=4");
                exit();

            }

        } else {
            // Redirect to the company profile page with error message for no file selected
            header("Location: ../jobseeker/feed.php?error=3");
            exit();
        }
    } else {
        // Redirect to the company profile page with error message for missing form data
        header("Location: ../jobseeker/feed.php?error=2");
        exit();
    }
} else {
    // Redirect to the company profile page with error message for invalid request method
    header("Location: ../jobseeker/feed.php?error=1");
    exit();
}
?>