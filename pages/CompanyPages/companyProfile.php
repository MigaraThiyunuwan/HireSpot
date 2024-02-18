<!DOCTYPE html>
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

try {
    $con = $dbcon->getConnection();
    $query = "SELECT * FROM company WHERE companyID  = ? ";
    $pstmt = $con->prepare($query);
    $pstmt->bindValue(1, $id);

    $pstmt->execute();

    $rs = $pstmt->fetchAll(PDO::FETCH_OBJ);

    foreach ($rs as $row) {

        $companyID = $row->companyID;
        $companyname = $row->companyname;
        $email = $row->email;
        $address = $row->address;
        $description = $row->description;
        $password = $row->password;
        $profilePic = $row->profilePic;
        $coverPic = $row->coverPic;
        $employee = $row->employee;
    }
    ;
    if (empty($rs)) {
        header("Location: ../LoginCompany.php?error=4");
        exit;
    }

    if ($profilePic === null) {
        $profil = '../../img/userDefault.jpg';
    } else {
        $profil = $profilePic;
    }
    ?>

    <html>

    <head>
        <meta charset="UTF-8">
        <!-- favicon -->
        <link rel="shortcut icon" href="../../img/logo only.png" type="image/x-icon">
        <title>HireSpot | Company </title>
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
                            <a class="navbar-brand  dropdown-toggle" href="#" type="button" data-bs-toggle="tooltip"
                                data-bs-title=" click here to logout" data-bs-placement="left"
                                data-bs-title="Tooltip on left"> <img src="<?php echo $profil; ?>" alt="avatar"
                                    class="rounded-circle me-2 " style="width: 38px; height: 38px; object-fit: cover" />
                                <span class="fw-bold fs-6">
                                    <?php echo $companyname; ?>
                                </span>
                            </a>
                        </dvi>
                        <ul class="dropdown-menu border-0 shadow">
                            <!--logout-->
                            <li><a class="dropdown-item" href="../server/companyLogout.php" data-bs-toggle="tooltip"
                                    data-bs-title="logout from this account" data-bs-placement="left"
                                    data-bs-title="Tooltip on left">
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
                <div class=" h-100 fixed-top overflow-hidden" style="padding-top: 56px;min-width: 10rem;max-width: 12rem;">
                    <!--large nav bar-->
                    <div class="d-flex flex-column flex-shrink-0 p-3 d-none d-lg-block vh-100 bg-white "
                        style="max-width: 20rem">
                        <a href="../../index.php"
                            class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                            <img src="../../img/logo.png" height="43px" alt="HireSpot" />
                            <span class="fs-4"> </span>
                        </a>
                        <hr>
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-item">
                                <div class="nav-link active" aria-current="page" style="cursor: pointer;">
                                    <i class="fa-solid fa-user"></i>
                                    Profile
                                </div>
                            </li>
                            <li>
                                <a href="./posts.php" class="nav-link link-body-emphasis">
                                    <i class="fa-solid fa-building"></i>
                                    Posts
                                </a>
                            </li>
                            <li>
                                <a href="./application.php" class="nav-link link-body-emphasis">
                                    <i class="fa-solid fa-address-card"></i>
                                    Applications
                                </a>
                            </li>
                        </ul>
                        <hr>

                    </div>
                    <!--small nav bar-->
                    <div class="d-flex flex-column flex-shrink-0 bg-white d-lg-none d-block  vh-100" style="width: 4.5rem;">
                        <a href="../../index.php" class="d-block p-3 link-body-emphasis text-decoration-none"
                            data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="HireSpot">
                            <img src="../../img/logo only.png" height="43px" alt="HireSpot" />
                            <span class="visually-hidden">Icon-only</span>
                        </a>
                        <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
                            <li class="nav-item">
                                <div class="nav-link active py-3 border-bottom rounded-0" aria-current="page"
                                    data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Profile"
                                    data-bs-original-title="Profile" style="cursor: pointer;">
                                    <i class="fa-solid fa-user"></i>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="./posts.php" class="nav-link  py-3 border-bottom rounded-0" aria-current="page"
                                    data-bs-toggle="tooltip" data-bs-placement="right" aria-label="posts"
                                    data-bs-original-title="posts">
                                    <i class="fa-solid fa-building"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="./application.php" class="nav-link py-3 border-bottom rounded-0"
                                    aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right"
                                    aria-label="Applicatons" data-bs-original-title="Applicatons">
                                    <i class="fa-solid fa-address-card"></i>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

            <!--main content-->
            <div class="col-11 ml-sm-auto col-lg-10 px-4 " style="padding-top: 70px;z-index: 5;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Company</li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </nav>
                <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == 1) {
                        echo "
                                    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                        <strong> Error  </strong>in post method!
                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                     </div>";
                    }
                    if ($_GET['error'] == 2) {
                        echo "      <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                         Please <strong>  Fill All Fields  </strong>to Post!
                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                     </div>";
                    }
                    if ($_GET['error'] == 3) {
                        echo "
                                    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                        Please select an image to upload.<strong> error in image selection!  </strong>
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
                                        <strong> Sorry,  </strong> there was an error uploading your file!
                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                     </div>";
                    }
                    if ($_GET['error'] == 6) {
                        echo "      <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                         you can't leave <strong> Empty </strong>Fields!
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
                }
                if (isset($_GET['success'])) {
                    if ($_GET['success'] == 1) {
                        echo "
                                 <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                        You have<strong> successfully  </strong> posted!
                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                     </div>";
                    }
                    if ($_GET['success'] == 2) {
                        echo "
                                 <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                        Profile pic <strong> successfully  </strong> changed!
                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                     </div>";
                    }
                    if ($_GET['success'] == 3) {
                        echo "
                                 <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                        Cover pic <strong> successfully  </strong> changed!
                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                     </div>";
                    }
                    if ($_GET['success'] == 4) {
                        echo "
                                 <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                        Profile <strong> successfully  </strong> updated!
                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                     </div>";
                    }
                    if ($_GET['success'] == 5) {
                        echo "
                                 <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                        Password <strong> successfully  </strong> updated!
                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                     </div>";
                    }
                }
                ?>

                <div class="mx-1 bg-white rounded " style="max-height: 200px">
                    <div class="bg-white rounded p-3">
                        <img src="<?php
                        if ($coverPic === null) {
                            echo '../../img/coverDefault.jpg';
                        } else {
                            echo $coverPic;
                        }
                        ?>" id="previewImage3" alt="story post" srcset="" class="card-img-top"
                            style="min-height: 125px;object-fit: cover;max-height: 200px;" class="img-fluid" />

                        <div class="d-flex align-items-center justify-content-left position-relative "
                            style="min-height: 65px;">
                            <div class="position-absolute top-0 translate-middle" style="padding-left: 20rem">
                                <img id="previewImage2" src="<?php echo $profil; ?>" alt="avatar" width="200px"
                                    height="200px" class="rounded-circle me-2 bg-white rounded-circle p-1"
                                    style="object-fit: cover;">
                                <button type="button"
                                    class="btn btn-primary position-absolute translate-middle badge rounded-circle py-2"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                                    aria-controls="collapseOne" style="bottom: 10px;left: 500px;"><i
                                        class="fa-solid fa-pen-to-square"></i>

                                </button>
                            </div>
                            <div class="d-flex justify-content-between w-100" style="margin-left: 16rem">
                                <div class="mx-3">
                                    <h1>
                                        <?php echo $companyname; ?>
                                    </h1>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-muted"><i class="fa-solid fa-location-dot me-2"></i>
                                            <?php echo $address; ?>
                                        </p>
                                        <p class="text-primary p-0" style="margin-left: 3rem"><i
                                                class="fa-solid fa-envelope me-1"></i>
                                            <?php echo $email; ?>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!--Add post-->
                <div class="bg-white rounded p-3 " style="margin-top: 9rem">
                    <div class="">
                        <div class="text-center p-3" data-bs-toggle="tooltip"
                            data-bs-title="click here to Post new vacancies and hire jobseekers">
                            <div class="d-flex justify-content-center" type="button" data-bs-toggle="modal"
                                data-bs-target="#postModal">
                                <div class="p-1">
                                    <img src="<?php echo $profil; ?>" alt="avatar" srcset="" class="rounded-circle me-2"
                                        style="width: 65px; height: 65px; object-fit: cover" />
                                </div>

                                <input class="form-control bg-gray rounded-pill w-75 border-0" size="100"
                                    placeholder="Add new post and hire jobseekers <?php echo $companyname; ?>.." disabled>
                                <div class="rounded-pill border shadow" style="background-color: #F1F0F0;">
                                    <i class="fa-sharp fa-solid fa-plus fs-4 text text-muted p-4"></i>
                                </div>

                            </div>
                        </div>


                        <!-- Modal -->
                        <form action="../server/post.php" method="post" enctype="multipart/form-data">
                            <div class="modal fade shadow my-5" id="postModal" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="false">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Job post</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <input class="form-control" type="hidden" name="companyID"
                                                value="<?php echo $companyID; ?>">
                                            <div class="form-floating my-3">
                                                <input type="text" name="jobTitle" class="form-control" id="floatingInput">
                                                <label for="floatingInput">Job Title</label>
                                            </div>
                                            <div class="input-group mb-3">
                                                <label class="input-group-text" for="inputGroupSelect01">Job
                                                    category</label>
                                                <select class="form-select" id="inputGroupSelect01" name="jobCategory">
                                                    <option selected>Choose...</option>
                                                    <option value="Information Technology (IT)">Information
                                                        Technology (IT)</option>
                                                    <option value="Healthcare">Healthcare</option>
                                                    <option value="Finance">Finance</option>
                                                    <option value="Education">Education</option>
                                                    <option value="Marketing and Sales">Marketing and Sales
                                                    </option>
                                                    <option value="Engineering">Engineering</option>
                                                    <option value="Hospitality and Tourism">Hospitality and
                                                        Tourism</option>
                                                    <option value="Creative Arts">Creative Arts</option>
                                                    <option value="Human Resources">Human Resources</option>
                                                    <option value="Construction and Trades">Construction and
                                                        Trades</option>
                                                </select>
                                            </div>
                                            <div class="form-floating">
                                                <textarea class="form-control" name="description"
                                                    placeholder="Leave a comment here" id="floatingTextarea2"
                                                    style="height: 100px"></textarea>
                                                <label for="floatingTextarea2">Description about the job</label>
                                            </div>
                                            <div class="mb-1">
                                                <label for="formFile" class="form-label fs-5 my-2">Upload your
                                                    Flyer</label>
                                                <input class="form-control" type="file" id="image" accept="image/*"
                                                    name="image">
                                                <img id="previewImage" src="" alt="Selected Image"
                                                    style="display: none; object-fit: cover" class="img-fluid my-2">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary w-100" value="Upload"
                                                name="submit">Post</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

                <!--about-->
                <div class="bg-white rounded p-3 mt-3">
                    <h2 class="mx-4">About</h2>
                    <p class="mx-4 text-muted">
                        <?php echo $description; ?>
                    </p>

                </div>

                <!--emloyee-->
                <div class="bg-white rounded p-3 mt-3">
                    <h2 class="mx-4">
                        <span data-bs-toggle="tooltip"
                            data-bs-title="you can updated em counys in settings->Edit profile details"
                            data-bs-placement="right" data-bs-title="Tooltip on right">
                            <?php echo $employee; ?> employees
                        </span>
                    </h2>
                </div>

                <!-- Settings -->
                <div class="p-3 mt-3">
                    <h2 class="ms-2 mx-4">
                        <span data-bs-toggle="tooltip" data-bs-title="account settings"><i
                                class="fa-solid fa-gear me-2"></i>Settings</span>
                    </h2>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <span data-bs-toggle="tooltip" data-bs-title=" Choose deferent profile picture"
                                    data-bs-placement="right" data-bs-title="Tooltip on right"><i
                                        class="fa-regular fa-image me-2"></i>Change profile picture</span>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                <img id="previewImage2" src="" alt="Selected Image" style="display: none; object-fit: cover"
                                    class="img-fluid my-2">
                                <form action="../server/changeComapanyProfile.php" method="POST"
                                    enctype="multipart/form-data">
                                    <label for="formFile" class="form-label fs-5 my-2">Change your
                                        profile Picture here </label>
                                    <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                                        <strong>Warning,</strong> your profile will not be updated until you
                                        <strong>save</strong> it, you
                                        will get a success
                                        message after updating,
                                        <button type='button' class='btn-close' data-bs-dismiss='alert'
                                            aria-label='Close'></button>
                                    </div>
                                    <input class="form-control" type="hidden" name="companyID"
                                        value="<?php echo $companyID; ?>">
                                    <input class="form-control" type="hidden" name="lodPic"
                                        value="<?php echo $profilePic; ?>">
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="inputGroupFile04"
                                            aria-describedby="inputGroupFileAddon04" aria-label="Upload" accept="image/*"
                                            name="profile">

                                        <button class="btn btn-outline-primary w-25" type="submit"
                                            id="inputGroupFileAddon04">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span data-bs-toggle="tooltip" data-bs-title=" Choose deferent cover picture"
                                    data-bs-placement="right" data-bs-title="Tooltip on right"><i
                                        class="fa-solid fa-image me-2"></i>Change cover picture</span>

                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form action="../server/changeComapanyCover.php" method="POST"
                                    enctype="multipart/form-data">
                                    <label for="formFile" class="form-label fs-5 my-2">Change your
                                        cover Picture here </label>
                                    <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                                        <strong>Warning,</strong> your profile will not be updated until you
                                        <strong>save</strong> it, you
                                        will get a success
                                        message after updating,
                                        <button type='button' class='btn-close' data-bs-dismiss='alert'
                                            aria-label='Close'></button>
                                    </div>
                                    <input class="form-control" type="hidden" name="companyID"
                                        value="<?php echo $companyID; ?>">
                                    <input class="form-control" type="hidden" name="lodCover"
                                        value="<?php echo $coverPic; ?>">
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="inputGroupFile05"
                                            aria-describedby="inputGroupFileAddon05" aria-label="Upload" accept="image/*"
                                            name="cover">
                                        <button class="btn btn-outline-primary w-25" type="submit"
                                            id="inputGroupFileAddon05">Save</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span data-bs-toggle="tooltip" data-bs-title="Edit Address,About,Number of employees"
                                    data-bs-placement="right" data-bs-title="Tooltip on right"><i
                                        class="fa-solid fa-pen-to-square me-2"></i>Edit profile details</span>

                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body text-center">
                                <label for="formFile" class="form-label fs-5 my-2">Change your
                                    Profile details here </label>
                                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                                    <strong>Warning,</strong> your profile will not be updated until you
                                    <strong>save</strong> it, you will
                                    get a success
                                    message after updating,
                                    <button type='button' class='btn-close' data-bs-dismiss='alert'
                                        aria-label='Close'></button>
                                </div>
                                <form action="../server/editeCompanyProfile.php" method="post">
                                    <div class="modal-body">
                                        <input class="form-control" type="hidden" name="companyID"
                                            value="<?php echo $companyID; ?>">

                                        <div class="input-group p-2">
                                            <span class="input-group-text" id="basic-addon1">Address</span>
                                            <input type="text" name="address" class="form-control" placeholder="Address"
                                                id="" value="<?php echo $address; ?>" />
                                        </div>


                                        <div class="input-group p-2">
                                            <span class="input-group-text">About</span>
                                            <textarea class="form-control" id="description" name="description"
                                                placeholder="Description" oninput="countWords()"
                                                maxlength="200"><?php echo $description; ?></textarea>
                                        </div>


                                        <div class="input-group p-2">
                                            <span class="input-group-text" id="basic-addon1">Number of employees</span>
                                            <input type="text" name="employee" class="form-control"
                                                placeholder="Number of employee" id="" value="<?php echo $employee; ?>" />
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
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <span data-bs-toggle="tooltip" data-bs-title="set new password" data-bs-placement="right"
                                    data-bs-title="Tooltip on right">
                                    <i class="fa-solid fa-shield-halved me-2">
                                    </i>Change password</span>

                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <label for="formFile" class="form-label fs-5 my-2">Change your
                                Password here </label>
                            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                                <strong>Warning,</strong> your profile will not be updated until you save it, you will get a
                                success
                                message after updating,
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>
                            <form action="../server/changeCompanyPassword.php" method="post"
                                onsubmit="return validateForm()">
                                <div class="accordion-body text-center">
                                    <div class="d-md-flex p-2 justify-content-evenly">
                                        <input class="form-control" type="hidden" id="companyID" name="companyID"
                                            value="<?php echo $companyID; ?>">
                                        <input class="form-control" type="hidden" name="dbPassword"
                                            value="<?php echo $password; ?>">
                                        <div class="form-floating w-25">
                                            <input type="password" class="form-control" id="currentPassword"
                                                name="currentPassword" placeholder="Password">
                                            <label for="currentPassword">Current Password</label>
                                        </div>
                                        <div class="form-floating w-25">
                                            <input type="password" class="form-control" id="newPassword" name="newPassword"
                                                placeholder="Password">
                                            <label for="newPassword">New Password</label>
                                        </div>
                                        <div class="form-floating w-25">
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
                                        window.location = `./companyProfile.php?error=6`;
                                        return false;
                                    }

                                    // Check if the new password and confirm password match
                                    if ( newPassword !== confirmPassword )
                                    {
                                        window.location = `./companyProfile.php?error=8`;
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
                    preview( "inputGroupFile04", "previewImage2" );
                    preview( "inputGroupFile05", "previewImage3" );

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


                <?php
} catch (PDOException $exc) {
    echo $exc->getMessage();
}

?>
            <!--footer-->
            <div class="container  mt-5">

                <!-- action -->
                <div class="d-flex flex-column align-items-center justify-content-cente mt-3">
                    <!--quick link-->
                    <p class="mb-0 fs-7 ">
                        <a href="" class="text-decoration-none text-muted active-quicklink fs-7"> Privacy </a> |
                        <a href="" class="text-decoration-none text-muted active-quicklink fs-7"> Terms </a> |
                        <a href="" class="text-decoration-none text-muted active-quicklink fs-7"> Advertising </a> |
                        <a href="" class="text-decoration-none text-muted active-quicklink fs-7"> Ad Chooses </a> |
                        <a href="" class="text-decoration-none text-muted active-quicklink fs-7"> Cookies </a>
                    </p>
                    <!--copyrights-->
                    <div class="d-flex">
                        <a class=" " href="../../index.php"><img src="../../img/logo.png" width="58px" height="16px"
                                alt="HireSpot" class="mb-2" /></a>
                        <p class="fs-7">&copy; 2023</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
<!--bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
<!--main js-->
<script src="mainjs.js"></script>
<script>
    const tooltipTriggerList = document.querySelectorAll( '[data-bs-toggle="tooltip"]' );
    const tooltipList = [ ...tooltipTriggerList ].map( tooltipTriggerEl => new bootstrap.Tooltip( tooltipTriggerEl ) );
</script>
</body>

</html>