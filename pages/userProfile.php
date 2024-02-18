<!DOCTYPE html>
<?php
require_once '../server/DBConnector.php';
use server\DbConnector;

$dbcon = new DbConnector();
session_start();

if (!isset($_SESSION["userID"]) || !isset($_SESSION["username"]) || !isset($_SESSION["email"])) {
    // Company user not logged in, redirect to the login page or any other appropriate page
    header("Location: ../Login.php");
    exit;
}
$id = $_SESSION["userID"];
$username = $_SESSION["username"];
$email = $_SESSION["email"];
?>
<html>
   <head>
      <meta charset="UTF-8">
      <title>HireSpot | My Profile</title>
      <!--bootstrap-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      <!--fontawesom-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!--main css-->
      <link rel="stylesheet" href="../css/maincss.css"/>
      <link rel="stylesheet" href="../css/UserProfile.css">
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
         .active-quicklink:hover{
         color: blue !important;
         }
         .bg-darkgray{
         background-color: #D9D9D9 !important;
         }
      </style>
      

      
      
      <div class="container pt-5">
      <div class="main-body">
      <!-- Breadcrumb -->
      <nav aria-label="breadcrumb" class="main-breadcrumb">
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
      <li class="breadcrumb-item active" aria-current="page">User Profile</li>
      </ol>
      </nav>
      <!-- /Breadcrumb -->
      <div class="row gutters-sm">
      <div class="col-md-4 mb-3">
      <div class="card">
      <div class="card-body">
      <div class="d-flex flex-column align-items-center text-center">
      <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
      <div class="mt-3">
      <h4> <?php echo $seeker->getUsername() ?></h4>
      <!-- <p class="text-secondary mb-1"><b>Software Engineer</b></p> -->
      <p class="text-muted text-center m-0"><?php echo $seeker->getDescription() ?></p>
      <!-- <p class="text-muted font-size-sm">Nittambuwa, Gampaha, Sri Lanka</p> -->
      <!-- <button class="btn btn-primary">Follow</button>
         <button class="btn btn-outline-primary">Message</button> -->
      </div>
      </div>
      <div class="pt-2">
      <h6 class="mb-0" style="padding-bottom: 10px;">About Me</h6>
      <p>Skilled software engineer with expertise in problem-solving, development, and cross-functional collaboration. Committed to delivering innovative 
      solutions and staying at the forefront of the industry. Let's connect and create something amazing together.</p>
      </div>
      </div>
      </div>
         <div class="card mt-3"> 
            <div
               class="modal fade"
               id="exampleModal"
               tabindex="-1"
               aria-labelledby="exampleModalLabel"
               aria-hidden="true"
               >
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <div class="">
                              <h1 class="modal-title fs-2" id="exampleModalLabel">
                                 upload Resume
                              </h1>
                           </div>
                           <button
                              type="button"
                              class="btn-close"
                              data-bs-dismiss="modal"
                              aria-label="Close"
                              >
                           </button>
                        </div>
                        <div class="modal-body">
                           <div class="text-center">
                              <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                                 <label for="myfile" >Select a file:</label>
                                 <input type="file"  id="myFile" name="myFile"><br>
                                 <input type="submit" class="btn btn-outline-primary my-3" value="Upload" />
                              </form>

                           </div>
                        </div>
                     </div>
                  </div>
            </div>

            <div class="text-center my-4">
               <button class="btn btn-outline-primary btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Upload Your Resume
               </button>
            </div> 
      
         </div>
      </div>
      <div class="col-md-8">
      <div class="card mb-3">
      <div class="card-body">
      <div class="row">
      <div class="col-sm-3">
      <h6 class="mb-0">Full Name</h6>
      </div>
      <div class="col-sm-9 text-secondary">
    
      </div>
      </div>
      <hr>
      <div class="row">
      <div class="col-sm-3">
      <h6 class="mb-0">Email</h6>
      </div>
      
      <div class="col-sm-9 text-secondary">
    
      </div>
      </div>
      <hr>
         <div class="row">
            <div class="col-sm-3">
            <h6 class="mb-0">Phone</h6>
            </div>
            <div class="col-sm-9 text-secondary">
      
            </div>
         </div>
         <hr>
         <div class="row">
            <div class="col-sm-3">
            <h6 class="mb-0">Gender</h6>
            </div>
            <div class="col-sm-9 text-secondary">
    
            </div>
         </div>
         <hr>
         <div class="row">
            <div class="col-sm-3">
            <h6 class="mb-0">Address</h6>
            </div>
            <div class="col-sm-9 text-secondary">
    
            </div>
         </div>
         <hr>
         <div class="row">
            <div class="col-sm-12">
            <a class="btn btn-info "  href="./editUser.php" >Edit</a>
            </div>
         </div>
      </div>
      </div>
      
         <div class="row gutters-sm">
            <div class="col-sm-6 mb-3">
               <div class="card h-100">
                  <div class="card-body">
                     <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Skills</i>XYZ</h6>
                     <small>HTML</small>
                     <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                     <small>JAVA</small>
                     <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                     <small>C++</small>
                     <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                     <small>JS</small>
                     <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                     <small>CSS</small>
                     <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 mb-3">
               <div class="card h-100">
                  <div class="card-body">
                     <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Education</i></h6>
                        <div class="d-flex flex-column " style="padding-bottom: 10px;">
                        <p class="fw-bold m-0"></p>
                        <p class="text-muted m-0">Uva Wellassa University, Sri Lanka, Graduated 2025</p>
                        </div>

                        <div class="d-flex flex-column " style="padding-bottom: 10px;">
                        <p class="fw-bold m-0">Dip.in Information Technology</p>
                        <p class="text-muted m-0">ESOFT Metro Campus, Sri Lanka, Graduated 2021</p>
                        </div>
                        
                  </div>
               </div>
            </div>
         </div>
      </div>

      
      </div>
      <!--main content-->
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
        



