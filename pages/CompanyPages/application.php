<?php
require_once '../server/DBConnector.php';
require_once '../server/company.php';

use server\DbConnector;

$dbcon = new DbConnector();

session_start();

// Check if the company session variables are set 
if (!isset($_SESSION['companyID']) || !isset($_SESSION['companyname'])) {
    // Company user not logged in, redirect to the login page or any other appropriate page
    header("Location: ../LoginCompany.php");
    exit;
}
$id = $_SESSION['companyID'];
$companyname = $_SESSION['companyname'];

function profilepath($path)
{
    if ($path === null) {
        echo '../../img/userDefault.jpg';
    } else {
        echo $path;
    }
}

function formatDateTime($datetimeStr)
{
    // Create a DateTime object from the provided string
    $datetime = new DateTime($datetimeStr);

    // Format the DateTime object to the desired format
    return $datetime->format("M jS g.i A");
}

function statusdisplay($status)
{
    switch ($status) {
        case 'Waiting':
            echo '<div class="alert alert-primary m-0 p-1 ms-1 text-center " role="alert"> Waiting </div>';
            break;
        case 'Reject':
            echo '<div class="alert alert-danger m-0 p-1 ms-1 text-center " role="alert"> Rejected </div>';
            break;
        case 'Accept':
            echo '<div class="alert alert-success m-0 p-1 ms-1 text-center " role="alert"> Selected </div>';
            break;
    }
}

function calculateAge($dateOfBirth)
{
    $dob = new DateTime($dateOfBirth);
    $today = new DateTime('today');
    $age = $dob->diff($today)->y;
    return $age;
}

try {
    $con = $dbcon->getConnection();
    $query = "SELECT companyID,companyname,profilePic FROM company WHERE companyID = ? ";
    $pstmt = $con->prepare($query);
    $pstmt->bindValue(1, $id);

    $pstmt->execute();

    $comp = $pstmt->fetchAll(PDO::FETCH_OBJ);

    foreach ($comp as $row) {

        $companyID1 = $row->companyID;
        $companyname1 = $row->companyname;
        $profilePic1 = $row->profilePic;
    };
    if (empty($companyID1)) {
        header("Location: ../LoginCompany.php?error=4");
        exit;
    }

    if ($profilePic1 === null) {
        $profil = '../../img/userDefault.jpg';
    } else {
        $profil = $profilePic1;
    }
?>
    <!DOCTYPE html>
    <!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
    <html>

    <head>
        <meta charset="UTF-8">
        <!-- favicon -->
        <link rel="shortcut icon" href="../../img/logo only.png" type="image/x-icon">
        <title>HireSpot | Company </title>
        <!--bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <!--fontawesom-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--main css-->
        <link rel="stylesheet" href="../../css/maincss.css" />

    </head>

    <body>
        <style>
            body {
                background-color: #F1F0F0;
                overflow-x: hidden;
            }

            .scrallbar:hover {
                overflow: auto !important;
            }

            .fs-0 {
                font-size: 4rem;
            }

            .fs-7 {
                font-size: 0.8rem;
            }

            .active-quicklink:hover {
                color: blue !important;
            }

            .bg-darkgray {
                background-color: #D9D9D9 !important;
            }
        </style>
        <!--navbar-->
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <div class="container">
                <div>
                    <a class="navbar-brand " href="../../index.php">Home</a>
                </div>
                <div class="justify-content-center ">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <!--logo-->
                            <img src="../../img/logo.png" width="137px" height="43px" alt="HireSpot" />
                        </li>
                    </ul>
                </div>
                <div class="d-flex align-items-center">
                    <!--profile-->
                    <div class="dropdown ">
                        <dvi class="" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <a class="navbar-brand  dropdown-toggle" href="" type="button" data-bs-toggle="tooltip" data-bs-title=" click here to logout" data-bs-placement="left" data-bs-title="Tooltip on left"> <img src="<?php echo $profil; ?>" alt="avatar" class="rounded-circle me-2 " style="width: 38px; height: 38px; object-fit: cover" />
                                <span class="fw-bold fs-6">
                                    <?php echo $companyname1; ?>
                                </span>
                            </a>
                        </dvi>
                        <ul class="dropdown-menu border-0 shadow">
                            <!--logout-->
                            <li><a class="dropdown-item" href="../server/companyLogout.php" data-bs-toggle="tooltip" data-bs-title="logout from this account" data-bs-placement="left" data-bs-title="Tooltip on left">
                                    <div class="d-flex align-items-center me-2">
                                        <i class="fa fa-sign-out justify-content-center fs-5"></i>
                                        <p class="m-0 ms-2">Log out</p>
                                    </div>
                                </a></li>
                        </ul>
                    </div>

                </div>
            </div>

        </nav>
        <div class="row">
            <!--side nav bar-->
            <div class="col-1 col-lg-2 d-block sidebar ">
                <div class=" h-100 fixed-top overflow-hidden" style="padding-top: 56px;min-width: 10rem;max-width: 12rem;z-index: 4">
                    <!--large nav bar-->
                    <div class="d-flex flex-column flex-shrink-0 p-3 d-none d-lg-block vh-100 bg-white " style="max-width: 20rem">
                        <a href="../../index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                            <img src="../../img/logo.png" height="43px" alt="HireSpot" />
                            <span class="fs-4"> </span>
                        </a>
                        <hr>
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-item">
                                <a href="./companyProfile.php" class="nav-link link-body-emphasis" aria-current="page">
                                    <i class="fa-solid fa-user"></i>
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a href="./posts.php" class="nav-link link-body-emphasis">
                                    <i class="fa-solid fa-building"></i>
                                    Posts
                                </a>
                            </li>
                            <li>
                                <div class="nav-link active" aria-current="page" style="cursor: pointer;">
                                    <i class="fa-solid fa-address-card"></i>
                                    Applications
                                </div>
                            </li>
                        </ul>
                        <hr>

                    </div>
                    <!--small nav bar-->
                    <div class="d-flex flex-column flex-shrink-0 bg-white d-lg-none d-block  vh-100" style="width: 4.5rem;">
                        <a href="../../index.php" class="d-block p-3 link-body-emphasis text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="HireSpot">
                            <img src="../../img/logo only.png" height="43px" alt="HireSpot" />
                            <span class="visually-hidden">Icon-only</span>
                        </a>
                        <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
                            <li class="nav-item">
                                <a href="./companyProfile.php" class="nav-link py-3 border-bottom rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Profile" data-bs-original-title="Profile">
                                    <i class="fa-solid fa-user"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="./posts.php" class="nav-link  py-3 border-bottom rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="posts" data-bs-original-title="posts">
                                    <i class="fa-solid fa-building"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <div class="nav-link active py-3 border-bottom rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Applicatons" data-bs-original-title="Applicatons" style="cursor: pointer;">
                                    <i class="fa-solid fa-address-card"></i>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

            <!--main content-->
            <div class="col-11 ml-sm-auto col-lg-10 px-4 " style="padding-top: 70px; z-index:5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Company</li>
                        <li class="breadcrumb-item active" aria-current="page">Applications</li>
                    </ol>
                </nav>

                <h1>Applications
                    <?php if (isset($_POST['id']) && !empty($_POST['id'])) {
                        echo " for postID : " . $_POST['id'];
                    } else {
                        echo " for All";
                    } ?>
                </h1>
                <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == 1) {
                        echo "
                                    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                        <strong> Error  </strong>in deletion!
                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                     </div>";
                    }
                    if ($_GET['error'] == 2) {
                        echo "
                                    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                        <strong> Error  </strong>in data sending!
                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                     </div>";
                    }
                    if ($_GET['error'] == 3) {
                        echo "
                                    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                        you can't leave a <strong> empty </strong>feeld!
                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                     </div>";
                    }
                }
                if (isset($_GET['success'])) {
                    if ($_GET['success'] == 1) {
                        echo "
            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                 <strong>status </strong> successfully changed
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
                    }
                }
                ?>

                <table class="table table-hover bg-white rounded">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Date</th>
                            <th scope="col">Job</th>
                            <th scope="col">Jobseeker</th>
                            <th scope="col">Application</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        if (isset($_POST['id']) && !empty($_POST['id'])) {
                            $query = "SELECT * FROM application JOIN jobseeker ON application.userID = jobseeker.userID JOIN job ON application.jobID = job.jobID WHERE application.companyID = ? AND job.jobID = ? ";
                            $pstmt1 = $con->prepare($query);
                            $pstmt1->bindValue(1, $id);
                            $pstmt1->bindValue(2, $_POST['id']);
                        } else {
                            $query = "SELECT * FROM application JOIN jobseeker ON application.userID = jobseeker.userID JOIN job ON application.jobID = job.jobID WHERE application.companyID = ?;";
                            $pstmt1 = $con->prepare($query);
                            $pstmt1->bindValue(1, $id);
                        }




                        $pstmt1->execute();

                        $rs = $pstmt1->fetchAll(PDO::FETCH_OBJ);

                        foreach ($rs as $row) {

                            $applicationID = $row->applicationID;
                            $userID = $row->userID;
                            $jobID = $row->jobID;
                            $companyID = $row->companyID;
                            $cv = $row->cv;
                            $status = $row->status;
                            $date = $row->date;
                            $username = $row->username;
                            $firstname = $row->firstname;
                            $lastname = $row->lastname;
                            $email = $row->email;
                            $phoneNo = $row->phoneNo;
                            $dateofbirth = $row->dateofbirth;
                            $address = $row->address;
                            $education = $row->education;
                            $description = $row->description;
                            $about = $row->about;
                            $profilePic = $row->profilePic;
                            $gender = $row->gender;
                            $jobTitle = $row->jobTitle;
                            $jobcateogory = $row->jobcateogory;
                            $postdate = $row->date;
                            $content = $row->content;
                            $postfilePath = $row->filePath;

                        ?>


                            <tr>
                                <th scope="row">
                                    <?php echo $applicationID; ?>
                                </th>
                                <td>
                                    <?php echo formatDateTime($date); ?>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#postmodal<?php echo $applicationID;
                                                                                                                                    ?>"> View post
                                    </button>
                                </td>
                                <td>
                                    <img src="<?php echo profilepath($profilePic); ?>" alt="avatar" class="rounded-circle me-2 " style="width: 38px; height: 38px; object-fit: cover" />
                                    <span class="fw-bold fs-6">
                                        <?php echo $username; ?>
                                    </span>

                                </td>
                                <td>

                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#approvemodal<?php echo $applicationID;?>">View application</button>

                                </td>
                                <td>

                                    <?php statusdisplay($status); ?>

                                </td>
                            </tr>

                            <!-- post view modal  -->
                            <div class="modal fade shadow my-5" id="postmodal<?php echo $applicationID;
                                                                                ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="false">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Post
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="d-flex justify-content-between p-2">
                                                <!-- avatar -->
                                                <div class="d-flex">
                                                    <img src="<?php profilepath($profilePic1);
                                                                ?>" alt="avatar" srcset="" class="rounded-circle me-3" style="width: 38px; height: 38px; object-fit: cover" />
                                                    <div>
                                                        <p class="m-0 fw-bold">
                                                            <?php echo $companyname1; ?>
                                                        </p>
                                                        <span class="text-muted fs-7">
                                                            <?php echo formatDateTime($postdate); ?>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- jobcatagary -->
                                                <div class="d-flex">
                                                    <p class="fw-bold me-2">
                                                        <?php echo $jobTitle; ?>
                                                    </p>|
                                                    <span class="text-muted fs-7 mt-1 ms-2 m-0">
                                                        <?php echo $jobcateogory; ?>
                                                    </span>
                                                </div>

                                            </div>

                                            <div class=" p-2 ">
                                                <!-- job title  -->
                                                <p class="fw-bold me-2 mb-0">
                                                    <?php echo $jobTitle; ?>
                                                </p>
                                                <!--content-->
                                                <div class="pt-2">
                                                    <p>
                                                        <?php echo $content; ?>
                                                    </p>
                                                </div>
                                                <!--post image-->
                                                <img src="<?php echo $postfilePath; ?>" alt="post" class="img-fluid" style="object-fit: cover">

                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary w-100" type="button" data-bs-dismiss="modal" aria-label="Close">Ok</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- approve reject Modal -->
                            <form action="../server/approve.php" method="post">
                                <div class="modal fade shadow my-5" id="approvemodal<?php echo $applicationID;
                                                                                    ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="false">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Approve or Reject the
                                                    application
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">

                                                <div class="row">
                                                    <div class="col-4">

                                                        <div class=" d-flex flex-column align-items-center justify-content-cente ">
                                                            <!--avatar-->
                                                            <dvi class="p-3 ">
                                                                <img src="<?php profilepath($profilePic); ?>" alt="avatar" class="rounded-circle me-2 " style="width: 150px; height: 150px; object-fit: cover" />
                                                            </dvi>
                                                            <!--profile content-->

                                                            <!--name-->
                                                            <h3 class="text-center m-0">
                                                                <?php echo $username; ?>
                                                            </h3>
                                                            <!--discription-->
                                                            <p class="text-muted text-center m-0">
                                                                <?php echo $description; ?>
                                                            </p>
                                                            <!--conatact details-->
                                                            <div class="d-flex justify-content-center align-items-center">
                                                                <i class="fa fa-envelope fs-7 me-1 mb-3 "></i>
                                                                <p class="">
                                                                    <?php echo $email; ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="px-2">
                                                            <!--Age-->
                                                            <div class="d-flex justify-content-between">
                                                                <p class="fw-bold m-0">Age</p>
                                                                <p class="ms-3 m-0">
                                                                    <?php echo calculateAge($dateofbirth); ?>
                                                                </p>
                                                            </div>
                                                            <!--Gender-->
                                                            <div class="d-flex justify-content-between">
                                                                <p class="fw-bold m-0">Gender</p>
                                                                <p class="ms-3 m-0">
                                                                    <?php echo $gender; ?>
                                                                </p>
                                                            </div>
                                                            <!--Phone-->
                                                            <div class="d-flex justify-content-between">
                                                                <p class="fw-bold m-0">Phone</p>
                                                                <p class="ms-3 m-0">
                                                                    <?php echo $phoneNo; ?>
                                                                </p>
                                                            </div>

                                                        </div>

                                                    </div>
                                                    <div class="col-8">

                                                        <!--Education-->
                                                        <div class="d-flex flex-column ">
                                                            <h5>Education</h5>
                                                            <p class="fw-bold m-0">
                                                                <?php echo $education; ?>
                                                            </p>
                                                        </div>

                                                        <hr>
                                                        <!--About-->
                                                        <div class="d-flex flex-column ">
                                                            <h5>About</h5>
                                                            <p class="m-0">
                                                                <?php echo $about; ?>
                                                            </p>
                                                        </div>

                                                        <hr>

                                                        <!-- Display the name of the selected file and provide a link to download the file -->
                                                        <?php if (!empty($cv)) : ?>
                                                            <p>
                                                                <strong>Selected CV</strong>:
                                                                <?php echo basename($cv); ?>
                                                            </p>
                                                            <a href="<?php echo $cv; ?>" target="_blank" rel="noopener noreferrer"><button type="button" class="btn btn-primary">Download or View the
                                                                    CV</button></a>
                                                        <?php endif; ?>

                                                        <hr>
                                                        <?php statusdisplay($status); ?>
                                                        <div class="btn-group w-100 mt-2" role="group" aria-label="Basic radio toggle button group">
                                                            <input type="radio" class="btn-check btn-success" name="status" id="btnradio1<?php echo $applicationID;
                                                                                                                                            ?>" autocomplete="off" value="Accept">
                                                            <label class="btn btn-outline-success" for="btnradio1<?php echo $applicationID;
                                                                                                                    ?>">Accept</label>

                                                            <input type="radio" class="btn-check btn-danger" name="status" id="btnradio2<?php echo $applicationID;
                                                                                                                                        ?>" autocomplete="off" value="Reject">
                                                            <label class="btn btn-outline-danger" for="btnradio2<?php echo $applicationID;
                                                                                                                ?>">Reject</label>
                                                        </div>
                                                        <input class="form-control" type="hidden" name="applicationID" value="<?php echo $applicationID;
                                                                                                                                ?>">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer d-flex justify-content-evenly">
                                                <button type="submit" class="btn btn-primary w-100" value="Upload" name="submit">Confirm</button>

                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </form>


                        <?php
                        }
                        if (empty($rs)) {

                            echo "
          <div class='alert alert-warning py-2' role='alert'>
          No post available.
          </div> ";
                        }
                        ?>

                    </tbody>
                </table>

            </div>
        </div>

    </body>
<?php
} catch (PDOException $exc) {
    echo $exc->getMessage();
}

?>
<!--bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<!--main js-->
<script src="mainjs.js"></script>

<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
</script>
</body>

    </html>