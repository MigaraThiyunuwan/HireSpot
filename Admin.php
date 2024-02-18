<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>

<head>
  <meta charset="UTF-8">
  <!-- favicon -->
  <link rel="shortcut icon" href="img/logo only.png" type="image/x-icon">
  <title>HireSpot | Admin</title>
  <!--bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <!--fontawesom-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--main css-->
  <link rel="stylesheet" href="./css/maincss.css" />

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
  <nav class="navbar navbar-expand-lg bg-white fixed-top d-flex justify-content-cente">
    <div class="container ">
      <!--logo-->
      <img src="img/logo.png" width="137px" height="43px" alt="HireSpot" />
    </div>
    </div>
    </div>
  </nav> <!-- login -->
  <div class="container d-flex flex-column flex-lg-row justify-content-evenly mt-3" style="padding-top: 10rem">
    <!-- heading -->
    <div class="text-center text-lg-center mt-lg-5 pt-lg-5">
      <img src="img/logo.png" width="688px" height="216px" alt="HireSpot" />
      <p class="w-75 mx-auto ma-lg-0 fs-4">
        Unleash your potential, embrace the extraordinary! test
      </p>
    </div>
    <!-- form  -->
    <div style="max-width: 28rem; width: 100%">
      <div class="bg-white shadow rounded p-3 input-group-lg">
        <h1 class="text-center">Admin Log in</h1>
        <form action="pages/adminPages/adminCompanies.php" method="POST">
          <div class="form-floating my-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
              style="background-color: #F4F4F4">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating my-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
              style="background-color: #F4F4F4">
            <label for="floatingPassword">Password</label>
          </div>

          <!-- <button class="btn btn-primary my-3 w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
            login
          </button> -->
          <input type="submit" value="Sing up" class="btn btn-primary my-3 w-100">

        </form>

      </div>
      <div class="text-center my-5 pb-5">
        <p>
          Stay focused, stay motivated, and conquer your dream job.
        </p>
      </div>
    </div>

  </div>
  </div>

  <!-- footer  -->
  <footer class="bg-white p-4 text-muted fixed-bottom">
    <div class="container">

      <!-- action -->
      <hr />
      <div class="d-flex flex-column align-items-center justify-content-cente mt-3">
        <!--quick link-->
        <p class="mb-0 fs-7 ">
          <a href="#" class="text-decoration-none text-muted active-quicklink fs-7"> Privacy </a> |
          <a href="#" class="text-decoration-none text-muted active-quicklink fs-7"> Terms </a> |
          <a href="#" class="text-decoration-none text-muted active-quicklink fs-7"> Advertising </a> |
          <a href="#" class="text-decoration-none text-muted active-quicklink fs-7"> Ad Chooses </a> |
          <a href="#" class="text-decoration-none text-muted active-quicklink fs-7"> Cookies </a>
        </p>
        <!--copyrights-->
        <div class="d-flex">
          <a class=" " href="#"><img src="img/logo.png" width="58px" height="16px" alt="HireSpot" class="mb-2" /></a>
          <p class="fs-7">&copy; 2023</p>
        </div>
      </div>
    </div>
  </footer>
</body>
<!--bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<!--main js-->
<script src="mainjs.js"></script>
<script>
  const tooltipTriggerList = document.querySelectorAll( '[data-bs-toggle="tooltip"]' );
  const tooltipList = [ ...tooltipTriggerList ].map( tooltipTriggerEl => new bootstrap.Tooltip( tooltipTriggerEl ) );
</script>
</body>

</html>