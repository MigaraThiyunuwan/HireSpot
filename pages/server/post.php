<?php

require_once './DBConnector.php';

use server\DbConnector;

$dbcon = new DbConnector();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['jobTitle']) && !empty($_POST['jobTitle']) && isset($_POST['jobCategory']) && !empty($_POST['jobCategory']) && isset($_POST['companyID']) && !empty($_POST['companyID']) && isset($_POST['description']) && !empty($_POST['description'])) {

        if (isset($_FILES["image"]) && $_FILES["image"]["error"] === 0) {

            // Sanitize user input to prevent SQL injection and XSS attacks
            $jobTitle = htmlspecialchars($_POST['jobTitle']);
            $jobCategory = htmlspecialchars($_POST['jobCategory']);
            $companyID = htmlspecialchars($_POST['companyID']);
            $date = date("Y-m-d H:i:s");
            $content = htmlspecialchars($_POST['description']);

            // File upload handling            
            $targetDir = "../../upload/post/"; // storing place
            $originalFileName = $_FILES["image"]["name"];
            $extension = strtolower(pathinfo($originalFileName, PATHINFO_EXTENSION));
            $imageFileName = $companyID . "_" . preg_replace('/\s+/', '', $originalFileName) . "." . $extension;
            $targetFile = $targetDir . $imageFileName;

            // Check if the uploaded file is an image
            $allowedExtensions = array("jpg", "jpeg", "png");
            if (in_array($extension, $allowedExtensions)) {
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                    // Image uploaded successfully, now store the file path in the database

                    try {
                        $con = $dbcon->getConnection();
                        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        // Insert the file path into the database table using a prepared statement
                        $imageFilePath = $targetFile;
                        $sql = "INSERT INTO job (jobTitle, jobcateogory, companyID, date, content, filePath) VALUES (?, ?, ?, ?, ?, ?)";
                        $pstmt = $con->prepare($sql);
                        $pstmt->bindValue(1, $jobTitle);
                        $pstmt->bindValue(2, $jobCategory);
                        $pstmt->bindValue(3, $companyID);
                        $pstmt->bindValue(4, $date);
                        $pstmt->bindValue(5, $content);
                        $pstmt->bindValue(6, $imageFilePath);

                        if ($pstmt->execute()) {
                            // Redirect to the company profile page with success message
                            header("Location: ../CompanyPages/companyProfile.php?success=1");
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
                    header("Location: ../CompanyPages/companyProfile.php?error=5");
                    exit();
                }
            } else {
                // Redirect to the company profile page with error message for invalid file type
                header("Location: ../CompanyPages/companyProfile.php?error=4");
                exit();
            }
        } else {
            // Redirect to the company profile page with error message for no file selected
            header("Location: ../CompanyPages/companyProfile.php?error=3");
            exit();
        }
    } else {
        // Redirect to the company profile page with error message for missing form data
        header("Location: ../CompanyPages/companyProfile.php?error=2");
        exit();
    }
} else {
    // Redirect to the company profile page with error message for invalid request method
    header("Location: ../CompanyPages/companyProfile.php?error=1");
    exit();
}
?>


