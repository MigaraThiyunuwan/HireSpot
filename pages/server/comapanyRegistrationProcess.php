<?php
require_once './DBConnector.php';

use server\DbConnector;

$dbcon = new DbConnector();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $companyname = $_POST['companyname'] ?? '';
    $email = $_POST['email'] ?? '';
    $address = $_POST['address'] ?? '';
    $description = $_POST['description'] ?? '';
    $password = $_POST['password'] ?? '';
    $employee = $_POST['employee'] ?? '';

    // Validate input
    if (empty($companyname) || empty($email) || empty($address) || empty($description) || empty($password) || empty($employee)) {
        header("Location: ../LoginCompany.php?error=1");
        exit;
    }

    // Sanitize input
    $companyname = filter_input(INPUT_POST, 'companyname', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
    $password = password_hash($password, PASSWORD_DEFAULT);
    $employee = filter_input(INPUT_POST, 'employee', FILTER_SANITIZE_NUMBER_INT);

    try {
        $con = $dbcon->getConnection();
        $query = "INSERT INTO company (companyname, email, address, description, password, employee) VALUES (?, ?, ?, ?, ?, ?)";
        $pstmt = $con->prepare($query);
        $pstmt->execute([$companyname, $email, $address, $description, $password, $employee]);

        if ($pstmt->rowCount() > 0) {
            header("Location: ../LoginCompany.php?success=1");
            exit;
        } else {
            header("Location: ../LoginCompany.php?error=2");
            exit;
        }
    } catch (PDOException $exc) {
        // Log the error or show a generic error message
        header("Location: ../LoginCompany.php?message=" . $exc->getMessage());
        exit;
    }
} else {
    // Redirect to the login page with an error message for invalid request method
    header("Location: ../LoginCompany.php?error=4");
    exit;
}