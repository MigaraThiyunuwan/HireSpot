<!DOCTYPE html>
<?php

require_once '../server/DBConnector.php';

use server\DbConnector;

$dbcon = new DbConnector();
?>
<?php
function calculateAge($dateOfBirth)
{
  $dob1 = new DateTime($dateOfBirth);
  $today = new DateTime('today');
  $age = $dob1->diff($today)->y;
  return $age;
}
function profilepath($path)
{
  if ($path === null) {
    echo '../../img/userDefault.jpg';
  } else {
    echo $path;
  }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["id"])) {
    $id = ($_POST["id"]);


    try {
      // $dbcon = new DbConnector();
      $con = $dbcon->getConnection();

      $query = "DELETE FROM jobseeker WHERE userID = :user_id";
      $pstmt = $con->prepare($query);
      $pstmt->bindParam(':user_id', $id, PDO::PARAM_INT);
      $a = $pstmt->execute();

      if ($a > 0) {

        header("Location: ./adminUser.php?success=1");
        exit;
      } else {
        header("Location: ./adminUser.php?error=1");
        exit;
      }
    } catch (PDOException $exc) {
      echo $exc->getMessage();
    }
  }
}

?>
<html>

<head>
  <meta charset="UTF-8">
  <!-- favicon -->
  <link rel="shortcut icon" href="../../img/logo only.png" type="image/x-icon">
  <title>HireSpot | Admin </title>
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
        <a class="navbar-brand " href="#">Home</a>
      </div>
      <div class="c justify-content-center ">
        <ul class="navbar-nav">
          <li class="nav-item">
            <!--logo-->
            <img src="../../img/logo.png" width="137px" height="43px" alt="HireSpot" />
          </li>
        </ul>
      </div>
      <div class="d-flex align-items-center">
        <div class="d-flex ">

        </div>
        <!--profile-->
        <div class="dropdown ">
          <div class="" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <a class="navbar-brand  dropdown-toggle" href="#" type="button"> <img src="https://source.unsplash.com/random/5" alt="avatar" class="rounded-circle me-2 " style="width: 38px; height: 38px; object-fit: cover" data-bs-toggle="tooltip" data-bs-title=" See your profile" data-bs-placement="bottom" data-bs-title="Tooltip on bottom" /></a>
          </div>
          <ul class="dropdown-menu border-0 shadow">
            <!--avatar-->
            <li><a class="dropdown-item" href="#">
                <div class="d-flex align-items-center">
                  <img src="https://source.unsplash.com/random/5" alt="avatar" class="rounded-circle me-2 " style="width: 48px; height: 48px; object-fit: cover" />
                  <div class="d-flex flex-column mt-3 p-0">
                    <span class="fw-bold fs-6">Name</span>
                  </div>
                </div>
              </a></li>
            <hr>
            <!--logout-->
            <li><a class="dropdown-item" href="../Login.php">
                <div class="d-flex align-items-center me-2">
                  <i class="fa fa-sign-out justify-content-center fs-5"></i>
                  <p class="m-0 ms-2">Log out</p>
                </div>
              </a></li>
          </ul>
        </div>

      </div>
    </div>
    </div>
  </nav>

  <div class="row">
    <!--side nav bar-->
    <div class="col-1 col-lg-2 d-block sidebar ">
      <div class=" h-100 fixed-top overflow-hidden" style="padding-top: 56px;min-width: 20rem;z-index: 4;">
        <!--large nav bar-->
        <div class="d-flex flex-column flex-shrink-0 p-3 d-none d-lg-block vh-100 bg-white " style="max-width: 20rem">
          <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <img src="../../img/logo.png" height="43px" alt="HireSpot" />
            <span class="fs-4"> </span>
          </a>
          <hr>
          <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
              <a href="./adminUser.php" class="nav-link active" aria-current="page">
                <i class="fa-solid fa-user"></i>
                Users
              </a>
            </li>
            <li>
              <a href="./adminCompanies.php" class="nav-link link-body-emphasis">
                <i class="fa-solid fa-building"></i>
                Companies
              </a>
            </li>
            <li>
              <a href="./adminPosts.php" class="nav-link link-body-emphasis">
                <i class="fa-solid fa-address-card"></i>
                Posts
              </a>
            </li>
          </ul>
          <hr>
          <div class="dropdown fixed-bottom m-3">
            <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="https://source.unsplash.com/random/5" alt="avatar" width="32" height="32" class="rounded-circle me-2">
              <strong>name</strong>
            </a>
            <ul class="dropdown-menu text-small shadow">
              <li><a class="dropdown-item" href="./../Admin.php"><i class="fa-solid fa-right-from-bracket"></i> Sign
                  out</a></li>
            </ul>
          </div>
        </div>
        <!--small nav bar-->
        <div class="d-flex flex-column flex-shrink-0 bg-white d-lg-none d-block  vh-100" style="width: 4.5rem;">
          <a href="#" class="d-block p-3 link-body-emphasis text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
            <img src="./../img/logo only.png" height="43px" alt="HireSpot" />
            <span class="visually-hidden">Icon-only</span>
          </a>
          <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
            <li class="nav-item">
              <a href="adminUser.php" class="nav-link active py-3 border-bottom rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Home" data-bs-original-title="Home">
                <i class="fa-solid fa-user"></i>
              </a>
            </li>
            <li>
              <a href="./adminCompanies.php" class="nav-link  py-3 border-bottom rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Dashboard" data-bs-original-title="Dashboard">
                <i class="fa-solid fa-building"></i>
              </a>
            </li>
            <li>
              <a href="./adminUser.php" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Orders" data-bs-original-title="Orders">
                <i class="fa-solid fa-address-card"></i>
              </a>
            </li>
          </ul>

          <div class="dropdown border-top">
            <a href="./../Admin.php" class="d-flex align-items-center justify-content-center p-3 link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="https://source.unsplash.com/random/5" alt="avatar" width="32" height="32" class="rounded-circle me-2">
            </a>
            <ul class="dropdown-menu text-small shadow">
              <li><a class="dropdown-item" href="#"><i class="fa-solid fa-right-from-bracket"></i> Sign out</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!--main content-->
    <div class="col-11 ml-sm-auto col-lg-10 px-4 " style="padding-top: 70px; z-index:5">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Admin</a></li>
          <li class="breadcrumb-item active" aria-current="page">Users</li>
        </ol>
      </nav>

      <h1>Users</h1>
      <?php
      if (isset($_GET['error'])) {
        if ($_GET['error'] == 1) {
          echo "
                                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                    <strong> Error  </strong>in deletion!
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                 </div>";
        }
      }
      if (isset($_GET['success'])) {
        if ($_GET['success'] == 1) {
          echo "
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                    User <strong>deleted </strong> successfully
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
        }
      }
      ?>
      <table class="table table-hover bg-white rounded">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">D.O.B</th>
            <th scope="col">Phone number</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>

            <?php
            try {

              $con = $dbcon->getConnection();

              // Pagination logic
              $start = isset($_GET['start']) ? intval($_GET['start']) : 0;
              $rows_per_page = 15;

              $query = "SELECT * FROM jobseeker LIMIT $start, $rows_per_page";
              $pstmt = $con->prepare($query);
              $pstmt->execute();
              $rs = $pstmt->fetchAll(PDO::FETCH_OBJ);

              foreach ($rs as $jobseeker) {
                $userID = $jobseeker->userID;
                $username = $jobseeker->username;
                $firstname = $jobseeker->firstname;
                $lastname = $jobseeker->lastname;
                $email = $jobseeker->email;
                $phone = $jobseeker->phoneNo;
                $dob = $jobseeker->dateofbirth;
                $address = $jobseeker->address;
                $education = $jobseeker->education;
                $description = $jobseeker->description;
                $about = $jobseeker->about;
                $propic = $jobseeker->profilePic;
                $gender = $jobseeker->gender;
            ?>




                <th scope="row"><?php echo "U" . $userID; ?></th>
                <td><?php echo $firstname; ?></td>
                <td><?php echo $username; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $dob; ?></td>
                <td><?php echo $phone; ?></td>
                <td class="d-flex align-items-center p-1">
                  <!-- <a href="./../userProfile.php"> <button class="btn btn-primary mx-1 p-1">View</button> </a> -->
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewmodal1<?php echo $userID;?>">View </button>
                  <!-- <a href=""><button class="btn btn-danger mx-1 p-1">Delete</button> </a> -->
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletemodel<?php echo $userID; ?>">Delete </button>


                </td>



          </tr>


          <div class="modal fade shadow my-5" id="viewmodal1<?php echo $userID; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="false">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content">

                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel"> <?php echo $firstname . " " . $lastname . "'s Details" ?>
                  </h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                  <div class="row">
                    <div class="col-4">

                      <div class=" d-flex flex-column align-items-center justify-content-cente ">
                        <!--avatar-->
                        <div class="p-3 ">
                          <img src="<?php profilepath($propic); ?>" alt="avatar" class="rounded-circle me-2 " style="width: 150px; height: 150px; object-fit: cover" />
                        </div>
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
                      <div class="modal-footer">
                                                <button class="btn btn-primary w-100" type="button" data-bs-dismiss="modal" aria-label="Close">Ok</button>
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

                      <div class="d-flex flex-column ">
                        <h5>Other</h5>
                        <div class="px-2">

                          <!--Age-->
                          <div class="d-flex justify-content-between">
                            <p class="fw-bold m-0">Age</p>
                            <p class="ms-3 m-0">
                              <?php echo calculateAge($dob); ?>
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
                              <?php echo $phone; ?>
                            </p>
                          </div>

                        </div>
                      </div>

                    </div>
                  </div>

                </div>


              </div>
            </div>
          </div>

          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="modal fade shadow my-5" id="deletemodel<?php echo $userID; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="false">
              <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">

                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"> <?php echo "Confirm to Delete " . $firstname . " " . $lastname . "'s Details" ?>
                    </h1> 
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                    <div class="row">
                      <div class="col-4">

                        <div class=" d-flex flex-column align-items-center justify-content-cente ">
                          <!--avatar-->
                          <div class="p-3 ">
                            <img src="<?php profilepath($propic); ?>" alt="avatar" class="rounded-circle me-2 " style="width: 150px; height: 150px; object-fit: cover" />
                          </div>
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

                        <div class="d-flex flex-column ">
                          <h5>Other</h5>
                          <div class="px-2">

                            <!--Age-->
                            <div class="d-flex justify-content-between">
                              <p class="fw-bold m-0">Age</p>
                              <p class="ms-3 m-0">
                                <?php echo calculateAge($dob); ?>
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
                                <?php echo $phone; ?>
                              </p>
                            </div>

                          </div>
                        </div>

                      </div>
                    </div>

                  </div>
                  <div class="modal-footer d-flex justify-content-evenly">
                    <input type="hidden" name="id" value="<?php echo $userID; ?> ">
                    <button type="submit" class="btn btn-danger w-100" value="Upload" name="submit">Confirm</button>

                  </div>


                </div>
              </div>
            </div>

          </form>





      <?php
              }
              // Calculate the total number of rows in the 'users' table (if not already calculated)
              if (!isset($total_rows)) {
                $total_rows_query = "SELECT COUNT(*) as total FROM jobseeker";
                $total_rows_stmt = $con->prepare($total_rows_query);
                $total_rows_stmt->execute();
                $total_rows_result = $total_rows_stmt->fetch(PDO::FETCH_ASSOC);
                $total_rows = $total_rows_result['total'];
              }

              // Calculate the total number of pages
              $pages = ceil($total_rows / $rows_per_page);
            } catch (PDOException $exc) {
              echo $exc->getMessage();
            }
      ?>

        </tbody>
      </table>

      <div class="row">
        <div class="col-md-6 align-self-center">
          <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">
            Showing <?php echo min($total_rows, $start + 1) . ' to ' . min($total_rows, $start + $rows_per_page); ?> of <?php echo $total_rows; ?>
          </p>
        </div>

        <div class="col-md-6">
          <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
            <ul class="pagination">
              <?php
              if ($start > 0) {
                echo '<li class="page-item"><a class="page-link" href="?start=' . ($start - $rows_per_page) . '">Previous</a></li>';
              } else {
                echo '<li class="page-item disabled"><span class="page-link">Previous</span></li>';
              }

              for ($i = 1; $i <= $pages; $i++) {
                echo '<li class="page-item' . (($start / $rows_per_page + 1) == $i ? ' active' : '') . '"><a class="page-link" href="?start=' . (($i - 1) * $rows_per_page) . '">' . $i . '</a></li>';
              }

              if ($start < ($pages - 1) * $rows_per_page) {
                echo '<li class="page-item"><a class="page-link" href="?start=' . ($start + $rows_per_page) . '">Next</a></li>';
              } else {
                echo '<li class="page-item disabled"><span class="page-link">Next</span></li>';
              }
              ?>
            </ul>
          </nav>
        </div>
      </div>



    </div>
  </div>
</body>
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