<?php
require_once './DBConnector.php';

use server\DbConnector;

$dbcon = new DbConnector();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['companyID']) && !empty($_POST['companyID']) && isset($_FILES["profile"]) && $_FILES["profile"]["error"] === 0) {
        // Sanitize user input to prevent SQL injection and XSS attacks
        $companyID = htmlspecialchars($_POST['companyID']);

        // Get the current image path if available
        $currentImagePath = isset($_POST['lodPic']) ? htmlspecialchars($_POST['lodPic']) : null;

        if (!empty($currentImagePath)) {
            unlink($currentImagePath); // Delete the file from the server
        }

        // File upload handling
        $targetDir = "../../upload/profile/";
        $imageFileName = $companyID . "." . strtolower(pathinfo($_FILES["profile"]["name"], PATHINFO_EXTENSION));
        $targetFile = $targetDir . $imageFileName;

        $allowedExtensions = array("jpg", "jpeg", "png");
        if (in_array(strtolower(pathinfo($imageFileName, PATHINFO_EXTENSION)), $allowedExtensions)) {
            if (move_uploaded_file($_FILES["profile"]["tmp_name"], $targetFile)) {
                $imageFilePath = $targetFile;
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

        try {
            $con = $dbcon->getConnection();
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Update the company information in the database table using a prepared statement
            $sql = "UPDATE company SET profilePic=? WHERE companyID=?";
            $pstmt = $con->prepare($sql);
            $pstmt->bindValue(1, $imageFilePath);
            $pstmt->bindValue(2, $companyID);

            if ($pstmt->execute()) {
                // Redirect to the company profile page with success message
                header("Location: ../CompanyPages/companyProfile.php?success=2");
                exit();
            } else {
                echo "Error: Unable to update company information in the database.";
            }

            $con = null;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    } else {
        // Return an error if the file is not selected
        header("Location: ../CompanyPages/companyProfile.php?error=3");
        exit();
    }
} else {
    // Redirect to the company profile page with error message for invalid request method
    header("Location: ../CompanyPages/companyProfile.php?error=1");
    exit();
}
?>
