<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>

<head>
    <!-- favicon -->
    <link rel="shortcut icon" href="../../img/logo only.png" type="image/x-icon">
    <meta charset="UTF-8">
    <title>HireSpot | pay</title>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--fontawesom-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--main css-->
    <link rel="stylesheet" href="../css/maincss.css" />

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
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand " href="#"><img src="img/logo.png" width="137px" height="43px" alt="HireSpot" /></a>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <!--search-->
                        <form class="d-flex" role="search">
                            <input class="form-control me-2 border-0" list="datalistOptions" id="exampleDataList"
                                type="search" placeholder="Search" aria-label="Search"
                                style="border-radius: 50px;background-color: #F4F4F4" size="50px">
                            <button class="btn btn-outline-primary " type="submit" style="border-radius: 50px;"><i
                                    class="fa fa-magnifying-glass "></i></button>
                            <datalist id="datalistOptions">
                                <option value="Software Engeneer">
                                <option value="Data Scientist">
                                <option value="QA Engeneer">
                                <option value="HR">
                                <option value="Developer">
                            </datalist>
                        </form>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-none d-lg-block" href="#">JOB Search</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex ">
                <!--notification-->
                <div class="dropdown ">
                    <a class="navbar-brand" href="#" id="notify" style="width: 38px; height: 38px; object-fit: cover"
                        type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"><i
                            class="fa-solid fa-bell" data-bs-toggle="tooltip" data-bs-title=" See your Notification"
                            data-bs-placement="bottom" data-bs-title="Tooltip on bottom"></i></a>
                    <!-- notification dropdown -->
                    <ul class="dropdown-menu border-0 shadow p-3" aria-labelledby="notify"
                        style="width: 26em; max-height: 600px;overflow-y: auto;">
                        <!-- header -->
                        <li class="p-1">
                            <div class="d-flex justify-content-between">
                                <h2>Notification</h2>
                                <!-- icon -->
                                <i class="fa-solid fa-ellipsis fs-4 bg-gray rounded-circle p-3" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"></i>
                                <!-- icon dd -->
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item d-flex align-items-center" type="button">
                                        <i class="fa-solid fa-check me-3 text-muted"></i>
                                        <p class="m-0">mark all as read</p>
                                    </li>
                                    <li class="dropdown-item d-flex align-items-center" type="button">
                                        <i class="fa-solid fa-check me-3 text-muted"></i>
                                        <p class="m-0">mark all as read</p>
                                    </li>
                                    <li class="dropdown-item d-flex align-items-center" type="button">
                                        <i class="fa-solid fa-check me-3 text-muted"></i>
                                        <p class="m-0">mark all as read</p>
                                    </li>

                                </ul>
                            </div>
                            <div class="d-flex" type="button">
                                <p class="rounded-pill bg-gray p-2">All</p>
                                <p class="ms-2 rounded-pill bg-primary text-white p-2">Unread</p>
                            </div>
                        </li>
                        <!-- news -->
                        <div class="d-flex justify-content-between mx-2">
                            <h5>News</h5>
                            <a href="#" class="text-decoration-none">see all</a>
                        </div>
                        <!-- n1 -->
                        <li class="my-1 p-2">
                            <a href="#"
                                class="d-flex justify-content-evenly align-items-center text-decoration-none text-dark">
                                <div class="d-flex justify-content-evenly align-items-center">
                                    <!-- avatar -->
                                    <div class="p-2">
                                        <img src="https://source.unsplash.com/random/1" alt="avatar"
                                            class="rounded-circle me-2"
                                            style="width: 58px; height: 58px; object-fit: cover">
                                    </div>
                                    <!-- message -->
                                    <div class="">
                                        <p class="fs-7 m-0">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, vitae?
                                        </p>
                                        <span class="fs-7 text-primary">about an hour ago</span>
                                    </div>
                                    <i class="fas fa-circle fs-7 text-primary px-1"></i>
                                </div>

                            </a>
                        </li>
                        <!-- n1 -->
                        <li class="my-1 p-2">
                            <a href="#"
                                class="d-flex justify-content-evenly align-items-center text-decoration-none text-dark">
                                <div class="d-flex justify-content-evenly align-items-center">
                                    <!-- avatar -->
                                    <div class="p-2">
                                        <img src="https://source.unsplash.com/random/1" alt="avatar"
                                            class="rounded-circle me-2"
                                            style="width: 58px; height: 58px; object-fit: cover">
                                    </div>
                                    <!-- message -->
                                    <div class="">
                                        <p class="fs-7 m-0">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, vitae?
                                        </p>
                                        <span class="fs-7 text-primary">about an hour ago</span>
                                    </div>
                                    <i class="fas fa-circle fs-7 text-primary px-1"></i>
                                </div>

                            </a>
                        </li>
                        <!-- n2 -->
                        <li class="my-1 p-2">
                            <a href="#"
                                class="d-flex justify-content-evenly align-items-center text-decoration-none text-dark">
                                <div class="d-flex justify-content-evenly align-items-center">
                                    <!-- avatar -->
                                    <div class="p-2">
                                        <img src="https://source.unsplash.com/random/1" alt="avatar"
                                            class="rounded-circle me-2"
                                            style="width: 58px; height: 58px; object-fit: cover">
                                    </div>
                                    <!-- message -->
                                    <div class="">
                                        <p class="fs-7 m-0">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, vitae?
                                        </p>
                                        <span class="fs-7 text-primary">about an hour ago</span>
                                    </div>
                                    <i class="fas fa-circle fs-7 text-primary px-1"></i>
                                </div>

                            </a>
                        </li>
                        <!-- n3 -->
                        <li class="my-1 p-2">
                            <a href="#"
                                class="d-flex justify-content-evenly align-items-center text-decoration-none text-dark">
                                <div class="d-flex justify-content-evenly align-items-center">
                                    <!-- avatar -->
                                    <div class="p-2">
                                        <img src="https://source.unsplash.com/random/1" alt="avatar"
                                            class="rounded-circle me-2"
                                            style="width: 58px; height: 58px; object-fit: cover">
                                    </div>
                                    <!-- message -->
                                    <div class="">
                                        <p class="fs-7 m-0">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, vitae?
                                        </p>
                                        <span class="fs-7 text-primary">about an hour ago</span>
                                    </div>
                                    <i class="fas fa-circle fs-7 text-primary px-1"></i>
                                </div>

                            </a>
                        </li>
                        <!-- n4 -->
                        <li class="my-1 p-2">
                            <a href="#"
                                class="d-flex justify-content-evenly align-items-center text-decoration-none text-dark">
                                <div class="d-flex justify-content-evenly align-items-center">
                                    <!-- avatar -->
                                    <div class="p-2">
                                        <img src="https://source.unsplash.com/random/1" alt="avatar"
                                            class="rounded-circle me-2"
                                            style="width: 58px; height: 58px; object-fit: cover">
                                    </div>
                                    <!-- message -->
                                    <div class="">
                                        <p class="fs-7 m-0">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, vitae?
                                        </p>
                                        <span class="fs-7 text-primary">about an hour ago</span>
                                    </div>
                                    <i class="fas fa-circle fs-7 text-primary px-1"></i>
                                </div>

                            </a>
                        </li>
                        <!-- n5 -->
                        <li class="my-1 p-2">
                            <a href="#"
                                class="d-flex justify-content-evenly align-items-center text-decoration-none text-dark">
                                <div class="d-flex justify-content-evenly align-items-center">
                                    <!-- avatar -->
                                    <div class="p-2">
                                        <img src="https://source.unsplash.com/random/1" alt="avatar"
                                            class="rounded-circle me-2"
                                            style="width: 58px; height: 58px; object-fit: cover">
                                    </div>
                                    <!-- message -->
                                    <div class="">
                                        <p class="fs-7 m-0">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, vitae?
                                        </p>
                                        <span class="fs-7 text-primary">about an hour ago</span>
                                    </div>
                                    <i class="fas fa-circle fs-7 text-primary px-1"></i>
                                </div>

                            </a>
                        </li>
                        <!-- n6 -->
                        <li class="my-1 p-2">
                            <a href="#"
                                class="d-flex justify-content-evenly align-items-center text-decoration-none text-dark">
                                <div class="d-flex justify-content-evenly align-items-center">
                                    <!-- avatar -->
                                    <div class="p-2">
                                        <img src="https://source.unsplash.com/random/1" alt="avatar"
                                            class="rounded-circle me-2"
                                            style="width: 58px; height: 58px; object-fit: cover">
                                    </div>
                                    <!-- message -->
                                    <div class="">
                                        <p class="fs-7 m-0">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, vitae?
                                        </p>
                                        <span class="fs-7 text-primary">about an hour ago</span>
                                    </div>
                                    <i class="fas fa-circle fs-7 text-primary px-1"></i>
                                </div>

                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <!--profile-->
            <div class="dropdown ">
                <dvi class="" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <a class="navbar-brand " href="#" type="button"> <img src="https://source.unsplash.com/random/5"
                            alt="avatar" class="rounded-circle me-2 "
                            style="width: 38px; height: 38px; object-fit: cover" data-bs-toggle="tooltip"
                            data-bs-title=" See your profile" data-bs-placement="bottom"
                            data-bs-title="Tooltip on bottom" /></a>
                </dvi>
                <ul class="dropdown-menu border-0 shadow">
                    <!--avatar-->
                    <li><a class="dropdown-item" href="#">
                            <div class="d-flex align-items-center">
                                <img src="https://source.unsplash.com/random/5" alt="avatar"
                                    class="rounded-circle me-2 " style="width: 48px; height: 48px; object-fit: cover" />
                                <div class="d-flex flex-column mt-3 p-0">
                                    <span class="fw-bold fs-6">Name</span>
                                    <p class="text-muted fs-7">see your profile</p>
                                </div>
                            </div>
                        </a></li>
                    <!--settings-->
                    <li><a class="dropdown-item" href="#">
                            <div class="d-flex align-items-center me-2">
                                <i class="fas fa-cog justify-content-center fs-5"></i>
                                <p class="m-0 ms-2">Settings</p>
                            </div>
                        </a></li>
                    <hr>
                    <!--logout-->
                    <li><a class="dropdown-item" href="#">
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
    <!-- login  -->
    <div class="container d-flex flex-column flex-lg-row justify-content-evenly mt-5 pt-5">
        <!-- form  -->
        <div class="row">

            <div class="col" style="max-width: 48rem; width: 100%">
                <div class="bg-white shadow rounded p-4 input-group-lg pb-2">
                    <h1 class="">Subscribe</h1>
                    <!--name-->
                    <div class="d-flex">
                        <div class="input-group  me-2">
                            <span class="input-group-text bg-darkgray my-2" id="basic-addon1"><i
                                    class="fa-solid fa-user"></i></span>
                            <input type="text" class="form-control my-2  border-0" placeholder="Firstname"
                                style="background-color: #F4F4F4" />
                        </div>
                        <div class="ms-2 input-group ms-2">
                            <span class="input-group-text bg-darkgray my-2" id="basic-addon1"><i
                                    class="fa-solid fa-user"></i></span>
                            <input type="text" class="form-control my-2  border-0" placeholder="Lastname"
                                style="background-color: #F4F4F4" />
                        </div>

                    </div>
                    <!--contact details-->
                    <div class="d-flex">
                        <div class="input-group  me-2">
                            <span class="input-group-text bg-darkgray my-2" id="basic-addon1"><i
                                    class="fa-solid fa-envelope"></i></span>
                            <input type="email" class="form-control my-2  border-0" placeholder="Email"
                                style="background-color: #F4F4F4" />
                        </div>
                        <div class="ms-2 input-group ms-2">
                            <span class="input-group-text bg-darkgray my-2" id="basic-addon1"><i
                                    class="fa-solid fa-mobile"></i></span>
                            <input type="text" class="form-control my-2  border-0" placeholder="Contact Number"
                                style="background-color: #F4F4F4" />
                        </div>

                    </div>
                    <!--payment method-->
                    <h3 class="">Payment method</h3>
                    <!--payment button-->
                    <div class="d-flex">
                        <div class="btn-group w-100 " role="group" aria-label="Vertical radio toggle button group">
                            <input type="radio" class="btn-check " name="vbtn-radio" id="vbtn-radio1" autocomplete="off"
                                checked>
                            <label class="btn btn-outline-primary " for="vbtn-radio1">Credit / Debit card</label>
                            <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio2" autocomplete="off">
                            <label class="btn btn-outline-primary" for="vbtn-radio2">Paypal</label>
                        </div>
                    </div>
                    <div class="d-flex input-group my-2">
                        <span class="input-group-text" id="basic-addon1" style="background-color: #D9D9D9 !important"><i
                                class="fa-regular fa-credit-card"></i></span>
                        <input type="text" class="form-control  border-0" placeholder="Card Number"
                            style="background-color: #F4F4F4" />
                    </div>
                    <div class="d-flex">
                        <div class="input-group  me-2">
                            <input type="text" class="form-control my-2  border-0" placeholder="MM/YY"
                                style="background-color: #F4F4F4" />
                        </div>
                        <div class="ms-2 input-group ms-2">
                            <input type="text" class="form-control my-2  border-0" placeholder="cvc"
                                style="background-color: #F4F4F4" />
                        </div>
                    </div>
                    <div class="d-flex input-group my-2">
                        <span class="input-group-text my-2" id="basic-addon1"
                            style="background-color: #D9D9D9 !important"><i class="fa-solid fa-user"></i></span>
                        <input type="text" class="form-control my-2 border-0" placeholder="Name of Card"
                            style="background-color: #F4F4F4" />
                    </div>
                    <div class="d-flex input-group my-2">
                        <span class="input-group-text my-2" id="basic-addon1"
                            style="background-color: #D9D9D9 !important"><i
                                class="fa-sharp fa-solid fa-location-dot"></i></span>
                        <input type="text" class="form-control my-2 border-0" placeholder="Country"
                            style="background-color: #F4F4F4" />
                    </div>
                </div>
            </div>
            <div class="col " style="max-width: 20rem; width: 100%">
                <div class="bg-white  rounded p-4 input-group-lg">
                    <h2 class="">MERBERSHIP</h2>
                    <div class="d-flex justify-content-between align-items-center mt-4 mb-0">
                        <div class="">
                            <p class="fs-5 mb-0">Subscription</p>
                            <p class="text-muted  mb-0">Billed yearly</p>
                        </div>
                        <p class="fs-5">500LKR</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="fs-5">Discount</p>
                        <p class="fs-5">100LKR</p>
                    </div>
                    <h5 class="mt-3">Apply Discount Code</h5>
                    <input type="text" class="form-control my-3 me-2 border-0" placeholder="code"
                        style="background-color: #F4F4F4" />
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="fs-5">Total</p>
                        <p class="fs-5">400LKR</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label " for="flexCheckDefault">
                                I agree the <span class="text-primary">terms and conditions </span>
                                and the<span class="text-primary"> Automatic Renewal Terms </span>above
                            </label>
                        </div>
                    </div>
                    <a href="../CompanyPages/companyProfile.php"><input type="submit" value="Pay"
                            class="btn btn-primary w-100 mt-3" /></a>
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
                            <a href="#" class="text-decoration-none text-muted active-quicklink fs-7"> Advertising </a>
                            |
                            <a href="#" class="text-decoration-none text-muted active-quicklink fs-7"> Ad Chooses </a> |
                            <a href="#" class="text-decoration-none text-muted active-quicklink fs-7"> Cookies </a>
                        </p>
                        <!--copyrights-->
                        <div class="d-flex">
                            <a class=" " href="#"><img src="img/logo.png" width="58px" height="16px" alt="HireSpot"
                                    class="mb-2" /></a>
                            <p class="fs-7">&copy; 2023</p>
                        </div>
                    </div>
                </div>
            </footer>

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