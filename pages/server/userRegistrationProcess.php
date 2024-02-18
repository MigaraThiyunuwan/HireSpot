<?php
require_once './DBConnector.php';

use server\DbConnector;

$dbcon = new DbConnector();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (isset($_POST['FirstName']) && !empty($_POST['FirstName']) && isset($_POST['LastName']) && !empty($_POST['LastName']) && isset($_POST['UserName']) && !empty($_POST['UserName']) && isset($_POST['Email']) && !empty($_POST['Email']) && isset($_POST['Phone']) && !empty($_POST['Phone']) && isset($_POST['Password']) && !empty($_POST['Password']) && isset($_POST['Address']) && !empty($_POST['Address']) && isset($_POST['Education']) && !empty($_POST['Education']) && isset($_POST['Description']) && !empty($_POST['Description']) && isset($_POST['Gender']) && !empty($_POST['Gender']) && isset($_POST['about']) && !empty($_POST['about'] && isset($_POST['dateofbirth']) && !empty($_POST['dateofbirth']))) {

    $firstname = strip_tags($_POST["FirstName"]);
    $lastname = strip_tags($_POST["LastName"]);
    $email = strip_tags($_POST["Email"]);
    $phone = strip_tags($_POST["Phone"]);
    $dateofbirth = strip_tags($_POST["dateofbirth"]);
    $gender = strip_tags($_POST["Gender"]);
    $username = strip_tags($_POST["UserName"]);
    $address = strip_tags($_POST["Address"]);
    $education = strip_tags($_POST["Education"]);
    $description = strip_tags($_POST["Description"]);
    $about = strip_tags($_POST["about"]);
    $password = password_hash($_POST["Password"], PASSWORD_DEFAULT);

    try {
      $con = $dbcon->getConnection();
      $query = "INSERT INTO jobseeker(username, firstname, lastname, email, phoneNo, address, education, description, password, gender, about, dateofbirth) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ? , ?, ?)";
      $pstmt = $con->prepare($query);
      $pstmt->bindValue(1, $username);
      $pstmt->bindValue(2, $firstname);
      $pstmt->bindValue(3, $lastname);
      $pstmt->bindValue(4, $email);
      $pstmt->bindValue(5, $phone);
      $pstmt->bindValue(6, $address);
      $pstmt->bindValue(7, $education);
      $pstmt->bindValue(8, $description);
      $pstmt->bindValue(9, $password);
      $pstmt->bindValue(10, $gender);
      $pstmt->bindValue(11, $about);
      $pstmt->bindValue(12, $dateofbirth);
      $pstmt->execute();
      if (($pstmt->rowCount()) > 0) {

        header("Location: ../login.php?success=1");
        exit;
      } else {
        echo "Error, try again.";
      }
    } catch (PDOException $exc) {
      // echo $exc->getMessage();
      header("Location: ../login.php?message=".$exc->getMessage());
      exit;
    }
  } else {
    header("Location: ../login.php?error=1");
    exit;
  }
}