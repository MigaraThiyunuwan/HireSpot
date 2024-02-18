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
    <title>HireSpot | Edit Profile</title>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--fontawesom-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--main css-->
    <link rel="stylesheet" href="../css/maincss.css" />
    <link rel="stylesheet" href="../css/editUser.css" />


    <style>
        /* Customize the range slider */
        input[type="range"] {
            -webkit-appearance: none;
            width: 100%;
            height: 20px;
            background: #ffffff;
            outline: none;
            opacity: 0.7;
            -webkit-transition: .2s;
            transition: opacity .2s;
        }

        /* Customize the track */
        input[type="range"]::-webkit-slider-runnable-track {
            width: 100%;
            height: 5px;
            cursor: pointer;
            background: #2196F3;
        }

        /* Customize the thumb (handle) */
        input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            cursor: pointer;
            background: #fff;
            border: 1px solid #ccc;
            border-radius: 50%;
        }

        /* Modify the thumb on hover */
        input[type="range"]::-webkit-slider-thumb:hover {
            background: #0d6efd;
        }
    </style>

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
            <a class="navbar-brand " href="../pages/feed.php"><img src="../img/logo.png" width="137px" height="43px"
                    alt="HireSpot" /></a>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
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
                    <li><a href="../pages/userProfile.php">
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
                    <!-- <li><a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center me-2">
                                    <i class="fas fa-cog justify-content-center fs-5"></i>
                                    <p class="m-0 ms-2">Settings</p>
                                </div>
                            </a></li> -->
                    <hr>
                    <!--logout-->
                    <li><a class="dropdown-item" href="./Login.php">
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
    <!--side nav bar-->



    <div class="container pt-5" style="padding-top: 80px !important;">
        <div class="main-body">
            <div class="row">
                <div class="col-lg-4">
                    <!-- <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                                <div class="mt-3">
                                    <h4>John Doe</h4>
                                    <p class="text-secondary mb-1">Full Stack Developer</p>
                                    <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                                    <button class="btn btn-primary">Follow</button>
                                    <button class="btn btn-outline-primary">Message</button>
                                </div>
                            </div>
                            <hr class="my-4">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                                    <span class="text-secondary">https://bootdey.com</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github me-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                                    <span class="text-secondary">bootdey</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter me-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                                    <span class="text-secondary">@bootdey</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram me-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                                    <span class="text-secondary">bootdey</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                                    <span class="text-secondary">bootdey</span>
                                </li>
                            </ul>
                        </div> -->

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                    class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4>Migara Thiyunuwan</h4>
                                    <p class="text-secondary mb-1"><b>Software Engineer</b></p>
                                    <p class="text-muted text-center m-0">Tech enthusiast | Graphic Designer | Web
                                        Designer | Developer</p>
                                    <p class="text-muted font-size-sm">Nittambuwa, Gampaha, Sri Lanka</p>
                                    <!-- <button class="btn btn-primary">Follow</button>
         <button class="btn btn-outline-primary">Message</button> -->
                                </div>
                            </div>
                            <div class="pt-4">
                                <h6 class="mb-0" style="padding-bottom: 0px;">About Me</h6>
                                <!-- <p>Skilled software engineer with expertise in problem-solving, development, and cross-functional collaboration. Committed to delivering innovative 
      solutions and staying at the forefront of the industry. Let's connect and create something amazing together.</p> -->
                            </div>

                            <div class="mt-3">
                                <textarea class="form-control" id="myTextArea" name="message" rows="11" cols="35"
                                    placeholder="Skilled software engineer with expertise in problem-solving, development, and cross-functional collaboration. Committed to delivering innovative solutions and staying at the forefront of the industry. Let's connect and create something amazing together."></textarea>
                                <!-- <input type="text" class="form-control" value="Skilled software engineer with expertise in problem-solving, development, and cross-functional collaboration. Committed to delivering innovative 
      solutions and staying at the forefront of the industry. Let's connect and create something amazing together."> -->

                                <!-- <div class="row" style="margin-top: 10px;">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="button" class="btn btn-primary px-4" value="Save">
                                </div>
                            </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">

                    </div>
                </div>




                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="John Doe">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="john@example.com">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="(239) 816-9029">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Mobile</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="(320) 380-4539">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="Bay Area, San Francisco, CA">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Gender</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="radio" id="male" name="gender" value="MALE">
                                    <label for="html">Male</label>
                                    <input type="radio" id="female" name="gender" value="FEMALE">
                                    <label for="css">Female</label>
                                    <!-- <input type="text" class="form-control" value="John Doe"> -->
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="button" class="btn btn-primary px-4" value="Save ">
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="row gutters-sm">
                        <div class="col-sm-6 mb-3">
                            <div class="col-sm-12" style="display :flex; width:860px">
                                <div class="card h-100" style="width: 4000px; margin-right: 10px">
                                    <div class="card-body">
                                        <h5 class="d-flex align-items-center mb-3"><b>Skills</b></h5>


                                        <label for="rangeSlider1"><b>HTML:</b></label>
                                        <output for="rangeSlider1" class="sliderValue">50</output>
                                        <input type="range" id="rangeSlider1" class="custom-range" name="value1" min="0"
                                            max="100" step="1">


                                        <label for="rangeSlider2"><b>JAVA :</b></label>
                                        <output for="rangeSlider2" class="sliderValue">50</output>
                                        <input type="range" id="rangeSlider2" class="custom-range" name="value2" min="0"
                                            max="100" step="1">


                                        <label for="rangeSlider3"><b>C++ :</b></label>
                                        <output for="rangeSlider3" class="sliderValue">50</output>
                                        <input type="range" id="rangeSlider3" class="custom-range" name="value3" min="0"
                                            max="100" step="1">


                                        <label for="rangeSlider4"><b>Java Script :</b></label>
                                        <output for="rangeSlider4" class="sliderValue">50</output>
                                        <input type="range" id="rangeSlider4" class="custom-range" name="value4" min="0"
                                            max="100" step="1">


                                        <label for="rangeSlider5"><b>CSS :</b></label>
                                        <output for="rangeSlider5" class="sliderValue">50</output>
                                        <input type="range" id="rangeSlider5" class="custom-range" name="value5" min="0"
                                            max="100" step="1">



                                        <!-- <script>
                                            const sliders = document.querySelectorAll(".custom-range");
                                            const outputs = document.querySelectorAll(".sliderValue");

                                            sliders.forEach((slider, index) => {
                                            outputs[index].innerHTML = slider.value; // Display the default slider value

                                            slider.oninput = function() {
                                                outputs[index].innerHTML = this.value; // Update the output value as the slider changes
                                            };
                                            });
                                        </script> -->

                                    </div>

                                </div>

                                <div class="card h-max" style="width: 4000px;">
                                    <div class="card-body">
                                        <h5 class="d-flex align-items-center mb-3"><b>Education</b></h5>

                                        <div>

                                            <div id="educationContainer">
                                                <label class="text-muted fs-7">Add Your Education Institute</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"
                                                        style="height: 40px; margin-top: 15px; "
                                                        id="inputGroup-sizing-sm">Institute</span>
                                                    <input type="text" class="form-control my-3"
                                                        aria-label="Sizing example input"
                                                        aria-describedby="inputGroup-sizing-default">
                                                </div>
                                                <label class="text-muted fs-7">Add Your Education Level</label>
                                                <div class="input-group input-group-sm mb-3; ">
                                                    <span class="input-group-text"
                                                        style="height: 40px; margin-top: 15px; "
                                                        id="inputGroup-sizing-sm">Edu. Level</span>
                                                    <input type="text" class="form-control my-3"
                                                        aria-label="Sizing example input"
                                                        aria-describedby="inputGroup-sizing-sm">
                                                </div>
                                            </div>
                                            <!-- <button  type="button" class="btn btn-outline-primary my-3" onclick="addEducationField()">Add</button> -->

                                            <br>
                                        </div>


                                        <script>
                                            const sliders = document.querySelectorAll( ".custom-range" );
                                            const outputs = document.querySelectorAll( ".sliderValue" );

                                            sliders.forEach( ( slider, index ) =>
                                            {
                                                outputs[ index ].innerHTML = slider.value; // Display the default slider value

                                                slider.oninput = function ()
                                                {
                                                    outputs[ index ].innerHTML = this.value; // Update the output value as the slider changes
                                                };
                                            } );
                                        </script>
                                        <div class="col-sm-3" style="width: 50%;">
                                            <a class="btn btn-info" href="./userProfile.php">Update all Details</a>
                                        </div>

                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>






                </div>
            </div>
        </div>
    </div>

    <!-- <div class="card" style="margin-left: 110px; margin-right:110px; justify-content-center" >
                        <div class="card-body" style="justify-content: center;" >
                                
                                <div class="row mb-3" style="justify-content: center;"> 
                                    
                                    <div class="col-sm-3" style="width: 50%; " >
                                    <a class="btn btn-info "    href="./userProfile.php">Update</a>
                                    </div>

                                   
                                </div>       
                        </div>
                        </div>  -->



</body>
<!--main content-->
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