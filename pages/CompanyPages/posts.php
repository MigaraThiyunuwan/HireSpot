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
    $query = "SELECT companyID,companyname,profilePic FROM company WHERE companyID = ? ";
    $pstmt = $con->prepare($query);
    $pstmt->bindValue(1, $id);

    $pstmt->execute();

    $comp = $pstmt->fetchAll(PDO::FETCH_OBJ);

    foreach ($comp as $row) {

        $companyID1 = $row->companyID;
        $companyname1 = $row->companyname;
        $profilePic1 = $row->profilePic;
    }
    ;
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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
                                    <?php echo $companyname1; ?>
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
                <div class=" h-100 fixed-top overflow-hidden"
                    style="padding-top: 56px;min-width: 10rem;max-width: 12rem;z-index: 4">
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
                                <a href="./companyProfile.php" class="nav-link link-body-emphasis" aria-current="page">
                                    <i class="fa-solid fa-user"></i>
                                    Profile
                                </a>
                            </li>
                            <li>
                                <div class="nav-link active" aria-current="page" style="cursor: pointer;">
                                    <i class="fa-solid fa-building"></i>
                                    Posts
                                </div>
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
                                <a href="./companyProfile.php" class="nav-link py-3 border-bottom rounded-0"
                                    aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right"
                                    aria-label="Profile" data-bs-original-title="Profile">
                                    <i class="fa-solid fa-user"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <div class="nav-link active py-3 border-bottom rounded-0" aria-current="page"
                                    data-bs-toggle="tooltip" data-bs-placement="right" ria-label="posts"
                                    data-bs-original-title="posts" style="cursor: pointer;">
                                    <i class="fa-solid fa-building"></i>
                                </div>
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
            <div class="col-11 ml-sm-auto col-lg-10 px-4 " style="padding-top: 70px; z-index:5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Company</li>
                        <li class="breadcrumb-item active" aria-current="page">Posts</li>
                    </ol>
                </nav>

                <h1>Posts</h1>

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
                 Post <strong>deleted </strong> successfully
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
                    }
                    if ($_GET['success'] == 2) {
                        echo "
            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                 Post <strong>changed </strong> successfully
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
                    }
                }
                ?>


                <table class="table table-hover bg-white rounded">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Date</th>
                            <th scope="col">Category</th>
                            <th scope="col" class="text-center">Recieve Applications</th>
                            <th scope="col" class="text-center">Edit</th>
                            <th scope="col" class="text-center">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT *FROM company JOIN job ON company.companyID = job.companyID WHERE company.companyID = ? ";
                        $pstmt1 = $con->prepare($query);
                        $pstmt1->bindValue(1, $id);

                        $pstmt1->execute();

                        $rs = $pstmt1->fetchAll(PDO::FETCH_OBJ);

                        foreach ($rs as $row) {

                            $companyID = $row->companyID;
                            $companyname = $row->companyname;
                            $profilePic = $row->profilePic;
                            $jobTitle = $row->jobTitle;
                            $jobCategory = $row->jobcateogory;
                            $jobID = $row->jobID;
                            $date = $row->date;
                            $content = $row->content;
                            $imageFilePath = $row->filePath;
                            ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $jobID; ?>
                                </th>
                                <td>
                                    <?php echo $jobTitle; ?>
                                </td>
                                <td>
                                    <?php echo $date; ?>
                                </td>
                                <td>
                                    <?php echo $jobCategory; ?>
                                </td>
                                <td class="text-center">
                                    <form action="./application.php" method="post">
                                        <input class="form-control" type="hidden" id="userID" name="id"
                                            value="<?php echo $jobID; ?>">
                                        <button type="submit" class="btn btn-primary mx-1 p-1" data-bs-toggle="tooltip"
                                            data-bs-title="View curresponded applications for this post">View
                                            Applications</button>
                                    </form>
                                </td>
                                <td class="text-center">
                                    <div data-bs-toggle="tooltip" data-bs-title="Edit your post">
                                        <button type="button" class="btn btn-outline-success m-0" data-bs-toggle="modal"
                                            data-bs-target="#postModal<?php echo $jobID; ?>">Edit post <i
                                                class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="../server/deletepost.php?id=<?php echo $jobID . "& compid=" . $companyID; ?>"><button
                                            class="btn btn-danger mx-1 p-1">Delete<i
                                                class="fa-solid fa-trash ms-1"></i></button>
                                    </a>
                                </td>


                                <!-- Modal -->
                                <form action="../server/editePost.php" method="post" enctype="multipart/form-data">
                                    <div class="modal fade shadow my-5" id="postModal<?php echo $jobID; ?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="false">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Job post</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <input class="form-control" type="hidden" name="jobID"
                                                        value="<?php echo $jobID; ?>">
                                                    <input class="form-control" type="hidden" name="companyID"
                                                        value="<?php echo $companyID; ?>">
                                                    <div class="form-floating my-3">
                                                        <input type="text" name="jobTitle" class="form-control"
                                                            id="floatingInput" value="<?php echo $jobTitle; ?>">
                                                        <label for="floatingInput">Job Title</label>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <label class="input-group-text" for="inputGroupSelect01">Job
                                                            category</label>
                                                        <select class="form-select" id="inputGroupSelect01" name="jobCategory">
                                                            <option selected>
                                                                <?php echo $jobCategory; ?>
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
                                                    </div>
                                                    <div class="form-floating">
                                                        <textarea class="form-control" name="description"
                                                            placeholder="Leave a comment here" id="floatingTextarea2"
                                                            style="height: 100px"><?php echo $content; ?></textarea>
                                                        <label for="floatingTextarea2">Description about the job</label>
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="formFile" class="form-label fs-5 my-2">Uploaded
                                                            Flyer</label>

                                                        <img id="previewImage" src="<?php echo $imageFilePath; ?>"
                                                            alt="Selected Image" style="object-fit: cover"
                                                            class="img-fluid my-2">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary w-100" value="Upload"
                                                        name="submit">Change</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </tr>
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
    crossorigin="anonymous"></script>
<!--main js-->
<script src="mainjs.js"></script>
<script>
    const tooltipTriggerList = document.querySelectorAll( '[data-bs-toggle="tooltip"]' );
    const tooltipList = [ ...tooltipTriggerList ].map( tooltipTriggerEl => new bootstrap.Tooltip( tooltipTriggerEl ) );
</script>
</body>

</html>