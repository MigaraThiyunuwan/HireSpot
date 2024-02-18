<!DOCTYPE html>
<?php
require_once '../server/DBConnector.php';
require_once '../server/company.php';
require_once '../server/jobseeker.php';

use server\DbConnector;

$dbcon = new DbConnector();
session_start();

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

// Check if the jobseeker session variables are set 
if (!isset($_SESSION["userID"]) || !isset($_SESSION["username"]) || !isset($_SESSION["email"])) {
    // Company user not logged in, redirect to the login page or any other appropriate page
    header("Location: ../Login.php");
    exit;
}
$id = $_SESSION["userID"];
$username = $_SESSION["username"];
$email = $_SESSION["email"];
$searchjobCategory = $_POST['searchjobCategory'];

try {
    $con = $dbcon->getConnection();
    $query = "SELECT * FROM jobseeker WHERE  userID = ? ";
    $pstmt = $con->prepare($query);
    $pstmt->bindValue(1, $id);

    $pstmt->execute();

    $rs = $pstmt->fetchAll(PDO::FETCH_OBJ);

    foreach ($rs as $row) {

        $userID = $row->userID;
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
        $password = $row->password;
        $profilePic = $row->profilePic;
        $gender = $row->gender;
    }
    ;
    if (empty($rs)) {
        exit;
    }
    ?>

    <html>

    <head>
        <meta charset="UTF-8">
        <title>HireSpot</title>
        <!-- favicon -->
        <link rel="shortcut icon" href="../../img/logo only.png" type="image/x-icon">
        <!--bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <!--fontawesom-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
            integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--main css-->
        <link rel="stylesheet" href="../../css/maincss.css" />

    </head>

    <body>
        <style>
            body {
                background-color: #F1F0F0;
                overflow-x: hidden;
            }

            .scrallbar {
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
        </style>
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <div class="container">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand " href="../../index.php"><img src="../../img/logo.png" width="137px" height="43px"
                        alt="HireSpot" /></a>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <!--search-->
                            <form class="d-flex" role="search" action="./feed.php" method="post">
                                <select class="form-control me-2 border-0" id="inputGroupSelect01" name="searchjobCategory"
                                    style="border-radius: 50px;background-color: #F4F4F4;max-width: 20rem;">
                                    <option disabled selected class="text-muted">
                                        <?php
                                        if (isset($_POST['searchjobCategory']) && !empty($_POST['searchjobCategory'])) {
                                            echo $searchjobCategory;
                                        } else {
                                            echo 'search';
                                        }
                                        ?>
                                    </option>
                                    <option value="Information Technology (IT)">Information Technology
                                        (IT)
                                    </option>
                                    <option value="Healthcare">Healthcare</option>
                                    <option value="Finance">Finance</option>
                                    <option value="Education">Education</option>
                                    <option value="Marketing and Sales">Marketing and Sales</option>
                                    <option value="Engineering">Engineering</option>
                                    <option value="Hospitality and Tourism">Hospitality and Tourism
                                    </option>
                                    <option value="Creative Arts">Creative Arts</option>
                                    <option value="Human Resources">Human Resources</option>
                                    <option value="Construction and Trades">Construction and Trades
                                    </option>
                                </select>
                                <button class="btn btn-outline-primary " type="submit" style="border-radius: 50px;"><i
                                        class="fa fa-magnifying-glass "></i></button>
                            </form>

                        </li>
                        <li class="nav-item">
                            <?php
                            if (isset($_POST['searchjobCategory']) && !empty($_POST['searchjobCategory'])) {
                                echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="./feed.php">ALL</a></li>';
                            }
                            ?>

                    </ul>
                </div>
                <div class="d-flex ">
                    <!--notification-->
                    <?php
                    try {
                        $connotification = $dbcon->getConnection();

                        $querynotification = "SELECT application.applicationID, application.status, application.date, job.jobTitle, job.jobcateogory, job.content, company.companyname, company.profilePic FROM application JOIN job ON application.jobID = job.jobID JOIN company ON job.companyID = company.companyID WHERE application.userID = ? AND application.status != 'Waiting' ORDER BY application.date DESC;";

                        $pstmtnotification = $connotification->prepare($querynotification);
                        $pstmtnotification->bindValue(1, $id);

                        $pstmtnotification->execute();

                        $notifications = $pstmtnotification->fetchAll(PDO::FETCH_OBJ);
                        $count = $pstmtnotification->rowCount();
                        ?>
                        <div class="dropdown ">
                            <a class="navbar-brand position-relative" href="" id="notify"
                                style="width: 38px; height: 38px; object-fit: cover" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false" data-bs-auto-close="outside"><i class="fa-solid fa-bell"
                                    data-bs-toggle="tooltip" data-bs-title=" See your Notification" data-bs-placement="bottom"
                                    data-bs-title="Tooltip on bottom"></i>
                                <span class="position-absolute fs-7 p-1 translate-middle badge rounded-pill bg-danger">
                                    <?php echo $count; ?>
                                </span></a>

                            <!-- notification dropdown -->
                            <ul class="dropdown-menu border-0 shadow p-2 px-0" aria-labelledby="notify"
                                style="min-width: 18rem;max-height: 600px;overflow-y: auto;">
                                <!-- header -->
                                <li class="p-1">

                                    <h4 class="ms-2">Notification</h4>

                                </li>
                                <?php
                                foreach ($notifications as $notification) {

                                    $notyapplicationID = $notification->applicationID;
                                    $notystatus = $notification->status;
                                    $notydate = $notification->date;
                                    $notyjobTitle = $notification->jobTitle;
                                    $notyjobcateogory = $notification->jobcateogory;
                                    $notycontent = $notification->content;
                                    $notycompanyname = $notification->companyname;
                                    $notyprofilePic = $notification->profilePic;
                                    ?>
                                    <!-- n1 -->
                                    <li class="my-1 p-2">

                                        <div class="d-flex align-items-center">
                                            <!-- avatar -->
                                            <div class="p-2">
                                                <img src="<?php profilepath($notyprofilePic); ?>" alt="company"
                                                    class=" rounded-circle" style="width: 58px; height: 58px; object-fit: cover">
                                            </div>
                                            <!-- message -->
                                            <div class="">
                                                <div class="d-flex">
                                                    <p class="fw-bold me-2 m-0">
                                                        <?php echo $notyjobTitle; ?>
                                                    </p>|
                                                    <span class="text-muted fs-7 mt-1 ms-2 m-0">
                                                        <?php echo $notyjobcateogory; ?>
                                                    </span>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="">
                                                        <p class="fs-7 m-0">
                                                            @
                                                            <?php echo $notycompanyname; ?>
                                                        </p>
                                                        <span class="fs-7 text-primary">
                                                            <?php echo formatDateTime($notydate); ?>
                                                        </span>
                                                    </div>
                                                    <div class="ms-2">
                                                        <?php echo statusdisplay($notystatus); ?>
                                                    </div>
                                                </div>


                                            </div>

                                            <hr>
                                    </li>
                                    <?php
                                }
                                ;
                                if (empty($notifications)) {
                                    // if no post availabe 
                                    echo "
                                            <p class='text-muted p-2 text-center' role='alert'>
                                            No Notifications available yet!
                                         </p>";
                                }
                    } catch (PDOException $exc) {
                        echo "
                                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                                " . $exc->getMessage() . "
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                             </div>";
                    }
                    ?>
                        </ul>
                    </div>
                </div>
                <!--profile-->
                <div class="dropdown ">
                    <dvi class="" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="<?php profilepath($profilePic); ?>" alt="avatar" class="rounded-circle me-2 "
                            style="width: 38px; height: 38px; object-fit: cover" data-bs-toggle="tooltip"
                            data-bs-title=" See your profile" data-bs-placement="bottom"
                            data-bs-title="Tooltip on bottom" /> <span class="fw-bold fs-6">
                            <?php echo $username; ?>
                        </span>
                    </dvi>
                    <ul class="dropdown-menu border-0 shadow">
                        <!--avatar-->
                        <li><a class="dropdown-item" href="./feed.php">
                                <div class="d-flex align-items-center">
                                    <img src="<?php profilepath($profilePic); ?>" alt="avatar" class="rounded-circle me-2 "
                                        style="width: 48px; height: 48px; object-fit: cover" />
                                    <div class="d-flex flex-column mt-3 p-0">
                                        <span class="fw-bold fs-6">
                                            <?php echo $username; ?>
                                        </span>
                                        <p class="text-muted fs-7">see your profile</p>
                                    </div>
                                </div>
                            </a></li>
                        <!--logout-->
                        <li><a class="dropdown-item" href="../server/logout.php">
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
        <!--main content-->
        <div class="container-fluid">
            <div class="row">
                <!--left side-->
                <div class="col-12 col-lg-3 ">
                    <div class="d-none scrallbar d-xxl-block h-100 fixed-top ms-4 mt-4"
                        style="max-width: 360px;width: 100%;z-index: 4;padding-top: 56px;">
                        <div class="bg-white rounded mx-4 px-4 mb-5">
                            <div class=" d-flex flex-column align-items-center justify-content-cente ">
                                <!--avatar-->
                                <dvi class="mt-4 p-3 rounded-circle" type="button">
                                    <a class="p-0 rounded-circle position-relative" href="" type="button"
                                        data-bs-toggle="modal" data-bs-target="#profilModal"> <img
                                            src="<?php profilepath($profilePic); ?>" alt="avatar" class="rounded-circle"
                                            style="width: 200px; height: 200px; object-fit: cover" data-bs-toggle="tooltip"
                                            data-bs-title=" change profile" data-bs-placement="bottom"
                                            data-bs-title="Tooltip on bottom" />

                                        <button type="button"
                                            class="btn btn-primary position-absolute translate-middle badge rounded-circle py-2"
                                            data-bs-toggle="modal" data-bs-target="#profilModal"
                                            style=" bottom: 10px;left: 170px;"><i class="fa-solid fa-pen-to-square"></i>

                                        </button>
                                    </a>
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
                            <hr>
                            <!--Education-->
                            <div class="d-flex flex-column ">
                                <h4>Education</h4>
                                <p class="fw-bold m-0">
                                    <?php echo $education; ?>
                                </p>
                            </div>

                            <hr>
                            <!--About-->
                            <div class="d-flex flex-column ">
                                <h4>About</h4>
                                <p class="m-0">
                                    <?php echo $about; ?>
                                </p>
                            </div>

                            <hr>
                            <a href="./feed.php"> <button type="button" class="btn btn-outline-primary mb-3 w-100">go to
                                    feed
                                </button></a>

                            <!--Skills-->
                            <div class="d-flex flex-column ">

                                <div class="d-flex justify-content-between mb-3">
                                    <h4>Skills</h4>
                                    <button class="btn btn-primary p-1 " data-bs-toggle="modal"
                                        data-bs-target="#skillModal">add
                                        skill <i class="fa-sharp fa-solid fa-plus text text-muted ms-1"></i></button>
                                </div>
                                <?php
                                $conskill = $dbcon->getConnection();

                                $queryskill = "SELECT * FROM skill WHERE userID = ? ;";

                                $pstmtskill = $conskill->prepare($queryskill);
                                $pstmtskill->bindValue(1, $id);

                                $pstmtskill->execute();

                                $skills = $pstmtskill->fetchAll(PDO::FETCH_OBJ);

                                foreach ($skills as $skill) {

                                    $skillID = $skill->skillId;
                                    $skillname = $skill->skillName;
                                    $skillrange = $skill->skillLevel;
                                    ?>

                                    <div class="m-0">
                                        <div class="d-flex justify-content-between">
                                            <p class="m-0">
                                                <?php echo $skillname; ?>
                                            </p>
                                            <form method="post" action="../server/deleteskill.php">
                                                <input type="hidden" name="skillID" value="<?php echo $skillID; ?>">
                                                <button type="submit" class="text-danger bg-white border-0">delete<i
                                                        class="fa-solid fa-trash text-danger ms-1"></i></button>
                                            </form>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Example " aria-valuenow="25"
                                            aria-valuemin="0" aria-valuemax="100" style="height: 10px">
                                            <div class="progress-bar" style="width: <?php echo $skillrange . "%"; ?>"></div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ;
                                ?>
                                <!--footer-->
                                <div class="d-flex flex-column align-items-center justify-content-cente mt-4">
                                    <!--quick link-->
                                    <p class="mb-0 fs-7 text-center">
                                        <a href="" class="text-decoration-none text-muted active-quicklink fs-7"> Privacy
                                        </a> |
                                        <a href="" class="text-decoration-none text-muted active-quicklink fs-7"> Terms </a>
                                        |
                                        <a href="" class="text-decoration-none text-muted active-quicklink fs-7">
                                            Advertising
                                        </a>
                                        |
                                        <a href="" class="text-decoration-none text-muted active-quicklink fs-7"> Ad Chooses
                                        </a> |
                                        <a href="" class="text-decoration-none text-muted active-quicklink fs-7"> Cookies
                                        </a>
                                    </p>
                                    <!--copyrights-->
                                    <div class="d-flex">
                                        <a class=" " href="../../index.php"><img src="../../img/logo.png" width="58px"
                                                height="16px" alt="HireSpot" class="mb-2" /></a>
                                        <p class="fs-7">&copy; 2023</p>
                                    </div>
                                </div>
                            </div>



                        </div>

                    </div>

                </div>


                <!--main time line-->
                <div class="col-12 col-lg-6 pb-5">
                    <!-- SkillsModal -->
                    <form action="../server/addskill.php" method="post" enctype="multipart/form-data">
                        <div class="modal fade shadow my-5" id="skillModal" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="ture">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add new Skill</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input class="form-control" type="hidden" name="userID"
                                            value="<?php echo $userID; ?>">

                                        <label for="formFile" class="form-label fs-5">Add new skills here </label>
                                        <div class="input-group p-2">
                                            <span class="input-group-text" id="basic-addon1">Skill</span>
                                            <input type="text" name="skillname" class="form-control"
                                                placeholder="Skill name" id="" value="" />

                                        </div>
                                        <div class="container mt-2">
                                            <input name="skillrange" type="range" class="form-control-range w-100"
                                                id="rangeInput" min="1" max="100">
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary w-100" type="submit"
                                            id="inputGroupFileAddon04">Add</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="d-flex justify-content-center flex-column w-100 mx-auto "
                        style="padding-top: 56px;max-width: 680px;">
                        <?php

                        if (isset($_GET['error'])) {
                            if ($_GET['error'] == 1) {
                                echo "
                    <div class='alert alert-danger alert-dismissible fade show mt-2' role='alert'>
                        <strong> Error  </strong>in post method!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                     </div>";
                            }
                            if ($_GET['error'] == 2) {
                                echo "      <div class='alert alert-danger alert-dismissible fade show mt-2' role='alert'>
                         Please <strong>  Fill All Fields  </strong>apply!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                     </div>";
                            }
                            if ($_GET['error'] == 3) {
                                echo "
                                            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                <strong> Sorry,  </strong> there was an error uploading your file!
                                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                             </div>";
                            }
                            if ($_GET['error'] == 4) {
                                echo "
                                              <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                Only<strong>  JPG, JPEG, and PNG  </strong>files are allowed.
                                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                             </div>";
                            }
                            if ($_GET['error'] == 5) {
                                echo "
                                              <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                please select a<strong>  JPG, JPEG, and PNG  </strong>to change.
                                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                             </div>";
                            }
                            if ($_GET['error'] == 6) {
                                echo "
                                              <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                you can't leave<strong> empty </strong>feald.
                                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                             </div>";
                            }
                            if ($_GET['error'] == 7) {
                                echo "      <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                 your <strong> Current Password </strong> is wrong!
                                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                             </div>";
                            }
                            if ($_GET['error'] == 8) {
                                echo "      <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                 your <strong> New Password and Confirm Password</strong> are not maching!
                                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                             </div>";
                            }
                            if ($_GET['error'] == 9) {
                                echo "      <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                 <strong>Erro</strong> in add skill!
                                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                             </div>";
                            }

                        }
                        if (isset($_GET['success'])) {
                            if ($_GET['success'] == 1) {
                                echo "
                 <div class='alert alert-success alert-dismissible fade show mt-2' role='alert'>
                        Your prfile <strong> successfully  </strong> changed!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                     </div>";
                            }
                            if ($_GET['success'] == 2) {
                                echo "
                 <div class='alert alert-success alert-dismissible fade show mt-2' role='alert'>
                        Your profile <strong> successfully  </strong> updated!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                     </div>";
                            }
                            if ($_GET['success'] == 3) {
                                echo "
                                         <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                                Password <strong> successfully  </strong> updated!
                                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                             </div>";
                            }
                            if ($_GET['success'] == 4) {
                                echo "
                                         <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                                Skill <strong> successfully  </strong> added!
                                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                             </div>";
                            }
                        } ?>
                        <!-- content -->
                        <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                            <strong>Warning,</strong> your profile will not be updated until you
                            <strong>save</strong> it, you
                            will get a success
                            message after updating,
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                        <!-- Settings -->
                        <div class="p-3">
                            <h2 class="ms-2 mx-4">
                                <span data-bs-toggle="tooltip" data-bs-title="account settings"><i
                                        class="fa-solid fa-gear me-2"></i>Settings</span>
                            </h2>
                        </div>

                        <!-- profilModal -->
                        <form action="../server/userphoto.php" method="post" enctype="multipart/form-data">
                            <div class="modal fade shadow my-5" id="profilModal" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">profile picture</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <input class="form-control" type="hidden" name="userID"
                                                value="<?php echo $userID; ?>">

                                            <label for="formFile" class="form-label fs-5">Change your
                                                profile Picture here </label>
                                            <div class="d-flex justify-content-cente ms-5">
                                                <span class="ms-4">
                                                    <img id="previewImage" src="" alt="Selected Image"
                                                        style="display: none; object-fit: cover;width: 200px; height: 200px"
                                                        class="img-fluid rounded-circle my-2 ms-5">
                                                </span>
                                            </div>


                                            <input class="form-control" type="hidden" name="lodPic"
                                                value="<?php echo $profilePic; ?>">

                                        </div>
                                        <div class="modal-footer">
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="image"
                                                    aria-describedby="inputGroupFileAddon04" aria-label="Upload"
                                                    accept="image/*" name="userprofile">

                                                <button class="btn btn-outline-primary w-25" type="submit"
                                                    id="inputGroupFileAddon04">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>


                        <div class="bg-white rounded p-3">

                            <h4 class="pt-3">
                                <span data-bs-toggle="tooltip" data-bs-title="Edit Address,About,Number of employees"
                                    data-bs-placement="right" data-bs-title="Tooltip on right"><i
                                        class="fa-solid fa-pen-to-square me-2"></i>Edit profile details</span>

                            </h4>

                            <label for="formFile" class="form-label fs-5">Change your
                                Profile details here </label>

                            <form action="../server/editeUserProfile.php" method="post">
                                <div class="modal-body">
                                    <input class="form-control" type="hidden" name="userID" value="<?php echo $userID; ?>">

                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group p-2">
                                                <span class="input-group-text" id="basic-addon1">First Name</span>
                                                <input type="text" name="fistname" class="form-control"
                                                    placeholder="Address" id="" value="<?php echo $firstname; ?>"
                                                    disabled />
                                            </div>
                                            <div class="col">
                                                <div class="input-group p-2">
                                                    <span class="input-group-text" id="basic-addon1">Last Name</span>
                                                    <input type="text" name="lastname" class="form-control"
                                                        placeholder="Address" id="" value="<?php echo $lastname; ?>"
                                                        disabled />
                                                </div>
                                            </div>

                                            <div class="input-group p-2">
                                                <span class="input-group-text" id="basic-addon1">Phone Number</span>
                                                <input type="text" name="phoneNo" class="form-control"
                                                    placeholder="Phone Number" id="" value="<?php echo $phoneNo; ?>" />
                                            </div>
                                            <div class="input-group p-2">
                                                <span class="input-group-text" id="basic-addon1">Address</span>
                                                <input type="text" name="address" class="form-control" placeholder="Address"
                                                    id="" value="<?php echo $address; ?>" />
                                            </div>


                                            <div class="input-group p-2">
                                                <span class="input-group-text">Education</span>
                                                <textarea class="form-control" id="education" name="education"
                                                    placeholder="Bsc in Computer Science"
                                                    maxlength="200"><?php echo $education; ?></textarea>
                                            </div>
                                            <div class="input-group p-2">
                                                <span class="input-group-text">Bio</span>
                                                <textarea class="form-control" id="description" name="description"
                                                    placeholder="eg: tech enthusiasit" oninput="countWords()"
                                                    maxlength="200"><?php echo $description; ?></textarea>
                                            </div>
                                            <div class="input-group p-2">
                                                <span class="input-group-text">About</span>
                                                <textarea class="form-control" id="description" name="about"
                                                    placeholder="About me" oninput="countWords()"
                                                    maxlength="200"><?php echo $about; ?></textarea>
                                            </div>


                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-outline-primary my-3 w-75"
                                                data-bs-dismiss="modal">
                                                Save
                                            </button>
                                        </div>
                            </form>
                        </div>
                        <div class="accordion mt-3" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <span data-bs-toggle="tooltip" data-bs-title="set new password"
                                            data-bs-placement="right" data-bs-title="Tooltip on right">
                                            <i class="fa-solid fa-shield-halved me-2">
                                            </i>Change password</span>

                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <label for="formFile" class="form-label fs-5 m-2">Change your
                                        Password here </label>
                                    <form action="../server/changeUserPassword.php" method="post"
                                        onsubmit="return validateForm()">
                                        <div class="accordion-body text-center">
                                            <div class="p-2 text-center">
                                                <input class="form-control" type="hidden" id="userID" name="userID"
                                                    value="<?php echo $userID; ?>">
                                                <input class="form-control" type="hidden" name="dbPassword"
                                                    value="<?php echo $password; ?>">
                                                <div class="form-floating my-2 w-100">
                                                    <input type="password" class="form-control" id="currentPassword"
                                                        name="currentPassword" placeholder="Password">
                                                    <label for="currentPassword">Current Password</label>
                                                </div>
                                                <div class="form-floating my-2 w-100">
                                                    <input type="password" class="form-control" id="newPassword"
                                                        name="newPassword" placeholder="Password">
                                                    <label for="newPassword">New Password</label>
                                                </div>
                                                <div class="form-floating my-2 w-100">
                                                    <input type="password" class="form-control" id="confirmPassword"
                                                        name="confirmPassword" placeholder="Password">
                                                    <label for="confirmPassword">Confirm Password</label>
                                                </div>
                                            </div>
                                            <button class="btn btn-outline-primary w-25" type="submit"
                                                id="inputGroupFileAddon05">Change</button>
                                        </div>
                                    </form>

                                    <script>
                                        function validateForm ()
                                        {
                                            var currentPassword = document.getElementById( "currentPassword" ).value;
                                            var newPassword = document.getElementById( "newPassword" ).value;
                                            var confirmPassword = document.getElementById( "confirmPassword" ).value;

                                            // Check if any field is empty
                                            if ( currentPassword === "" || newPassword === "" || confirmPassword === "" )
                                            {
                                                window.location = `./userProfile.php?error=6`;
                                                return false;
                                            }

                                            // Check if the new password and confirm password match
                                            if ( newPassword !== confirmPassword )
                                            {
                                                window.location = `./userProfile.php?error=8`;
                                                return false;
                                            }

                                            // You can also add additional validation, such as password strength requirements

                                            return true;
                                        }
                                    </script>

                                </div>
                            </div>

                        </div>
                        <!-- JavaScript for image preview -->
                        <script>
                            // Calling the preview() function with correct input and previewImage IDs
                            preview( "image", "previewImage" );

                            function preview ( input, previewImage )
                            {
                                document.getElementById( input ).addEventListener( "change", function ()
                                {
                                    var fileInput = this;
                                    if ( fileInput.files && fileInput.files[ 0 ] )
                                    {
                                        var reader = new FileReader();
                                        reader.onload = function ( e )
                                        {
                                            var previewImageElement = document.getElementById( previewImage );
                                            previewImageElement.src = e.target.result;
                                            previewImageElement.style.display = "block";
                                        };

                                        reader.readAsDataURL( fileInput.files[ 0 ] );
                                    }
                                } );
                            }
                        </script>

                    </div>
                </div>
                <!--right side-->
                <div class="col-12 col-lg-3">
                    <div class="d-none d-xxl-block h-100 fixed-top  end-0 scrallbar me-5"
                        style="min-width: 360px;width: 100px;z-index: 4;padding-top: 56px;left: initial !important;">
                        <div class="p-3 mt-4">
                            <!--advertesement slider-->
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="https://source.unsplash.com/random/10" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://source.unsplash.com/random/8" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://source.unsplash.com/random/9" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <h4 class="ms-3">Applications</h4>
                        <!--Applications Status-->
                        <div class="">
                            <?php
                            try {
                                $conapplication = $dbcon->getConnection();

                                $queryapplication = "SELECT application.*, job.*, company.companyID, company.companyname, company.email, company.address, company.description, company.profilePic, company.coverPic, company.employee FROM application JOIN job ON application.jobID = job.jobID JOIN company ON job.companyID = company.companyID WHERE application.userID = ? ORDER BY application.date DESC;";

                                $pstmtapplication = $conapplication->prepare($queryapplication);
                                $pstmtapplication->bindValue(1, $id);

                                $pstmtapplication->execute();

                                $applications = $pstmtapplication->fetchAll(PDO::FETCH_OBJ);

                                foreach ($applications as $application) {

                                    $jobID = $application->jobID;
                                    $jobTitle = $application->jobTitle;
                                    $jobcateogory = $application->jobcateogory;
                                    $companyID = $application->companyID;
                                    $date = $application->date;
                                    $content = $application->content;
                                    $postfilepath = $application->filePath;
                                    $companyname = $application->companyname;
                                    $email = $application->email;
                                    $address = $application->address;
                                    $description = $application->description;
                                    $companyprofilePic = $application->profilePic;
                                    $companycoverPic = $application->coverPic;
                                    $employee = $application->employee;
                                    $cv1 = $application->cv;
                                    $status1 = $application->status;
                                    $applicationdate = $application->date;
                                    ?>



                                    <!--job-->
                                    <div class="bg-white rounded  align-items-center justify-content-between p-3 m-3">
                                        <div class="d-flex">
                                            <!--avatar of company-->
                                            <img src="<?php profilepath($companyprofilePic); ?>" alt="<?php echo $companyname; ?>"
                                                class="rounded me-2 " style="width: 48px; height: 48px; object-fit: cover" />
                                            <!--job-->
                                            <div class="">
                                                <!-- jobcatagary -->
                                                <p class="fw-bold me-2 m-0">
                                                    <?php echo $jobTitle; ?>
                                                </p>
                                                <span class="text-muted fs-7 m-0">
                                                    <?php echo $jobcateogory; ?>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-muted m-0"> <span class="fw-bold">@</span>
                                                <?php echo $companyname; ?>
                                            </p>
                                            <!--status-->
                                            <?php statusdisplay($status1); ?>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ;
                                if (empty($applications)) {
                                    // if no post availabe 
                                    echo "
                                    <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                                    No Application available yet.
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                 </div>";
                                }
                                ?>

                                <!--footer-->
                                <div class="d-flex flex-column align-items-center justify-content-cente mt-2">
                                    <!--quick link-->
                                    <p class="mb-0 fs-7 ">
                                        <a href="" class="text-decoration-none text-muted active-quicklink fs-7"> Privacy </a> |
                                        <a href="" class="text-decoration-none text-muted active-quicklink fs-7"> Terms </a> |
                                        <a href="" class="text-decoration-none text-muted active-quicklink fs-7"> Advertising
                                        </a>
                                        |
                                        <a href="" class="text-decoration-none text-muted active-quicklink fs-7"> Ad Chooses
                                        </a> |
                                        <a href="" class="text-decoration-none text-muted active-quicklink fs-7"> Cookies </a>
                                    </p>
                                    <!--copyrights-->
                                    <div class="d-flex">
                                        <a class=" " href="../../index.php"><img src="../../img/logo.png" width="58px"
                                                height="16px" alt="HireSpot" class="mb-2" /></a>
                                        <p class="fs-7">&copy; 2023</p>
                                    </div>
                                </div>

                            </div>

                            <?php
                            } catch (PDOException $exc) {
                                echo "
                                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                                " . $exc->getMessage() . "
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                             </div>";
                            }
} catch (PDOException $exc) {
    echo $exc->getMessage();
}
?>
                </div>
            </div>
        </div>
    </div>


    <!--bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll( '[data-bs-toggle="tooltip"]' );
        const tooltipList = [ ...tooltipTriggerList ].map( tooltipTriggerEl => new bootstrap.Tooltip( tooltipTriggerEl ) );
    </script>
</body>

</html>