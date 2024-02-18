<?php
require_once './DBConnector.php';

use server\DbConnector;

$dbcon = new DbConnector();

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (isset($_GET['id']) && !empty($_GET['id']) && isset($_GET['compid']) && !empty($_GET['compid'])) {
        $id = $_GET['id'];
        $companyId = $_GET['compid'];

        try {
            $con = $dbcon->getConnection();
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Get the photo path from the database before deleting
            $stmt = $con->prepare("SELECT filePath FROM job WHERE jobID = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$row) {
                header("Location: ../CompanyPages/posts.php?error=2");
                exit;
            }

            $photoPath = $row['filePath'];

            // Delete the photo file from local storage
            if (!empty($photoPath) && file_exists($photoPath)) {
                unlink($photoPath); // Delete the file from the server
                // You may also want to handle errors here if unlink fails.
            }

            // Prepare the DELETE query
            $stmt = $con->prepare("DELETE FROM job WHERE jobID = :id");

            // Bind the parameter
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);

            // Execute the query
            $stmt->execute();

            // check if any rows were affected (deleted)
            $rowCount = $stmt->rowCount();

            if ($rowCount > 0) {
                header("Location: ../CompanyPages/posts.php?success=1");
                exit;
            } else {
                header("Location: ../CompanyPages/posts.php?error=1");
                exit;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            exit;
        }
    } else {
        header("Location: ../CompanyPages/posts.php?error=3");
        exit;
    }
} else {
    header("Location: ../CompanyPages/posts.php?error=4");
    exit;
}
?>
