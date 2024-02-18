<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!-- favicon -->
    <link rel="shortcut icon" href="../../img/logo only.png" type="image/x-icon">
    <title>HireSpot</title>
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
    </style>
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand " href="../index.php"><img src="../img/logo.png" width="137px" height="43px"
                    alt="HireSpot" /></a>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./About.php">About</a>
                    </li>
                    <li class="nav-item">
                        <!--search-->
                        <form class="d-flex" role="search">
                            <input class="form-control me-2 border-0" list="datalistOptions" id="exampleDataList"
                                type="search" placeholder="Search" aria-label="Search"
                                style="border-radius: 50px;background-color: #F4F4F4" size="50px">
                            <button class="btn btn-outline-primary " type="submit" style="border-radius: 50px;"><i
                                    class="fa fa-magnifying-glass "></i></button>
                            <datalist id="datalistOptions" class="bg-white text-muted">
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
                    <a class="navbar-brand " href="" type="button"> <img src="https://source.unsplash.com/random/5"
                            alt="avatar" class="rounded-circle me-2 "
                            style="width: 38px; height: 38px; object-fit: cover" data-bs-toggle="tooltip"
                            data-bs-title=" See your profile" data-bs-placement="bottom"
                            data-bs-title="Tooltip on bottom" /></a>
                </dvi>
                <ul class="dropdown-menu border-0 shadow">
                    <!--avatar-->
                    <li><a class="dropdown-item" href="./userProfile.php">
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
    <!--main content-->
    <div class="container-fluid" style="margin-left: 400px; padding-right: 420px;">
        <div class="row">
            <!--left side-->
            <div class="col-12 col-lg-3 ">
                <div class="d-none d-xxl-block h-100 fixed-top overflow-hidden scrallbar ms-4"
                    style="max-width: 360px;width: 100%;z-index: 4;padding-top: 56px;">
                    <div class="bg-white rounded mx-4 px-4 mt-4 ">
                        <div class=" d-flex flex-column align-items-center justify-content-cente ">
                            <!--avatar-->
                            <dvi class="mt-4 p-3 " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <a class="navbar-brand " href="#" type="button"> <img
                                        src="https://source.unsplash.com/random/5" alt="avatar"
                                        class="rounded-circle me-2 "
                                        style="width: 200px; height: 200px; object-fit: cover" data-bs-toggle="tooltip"
                                        data-bs-title=" See your profile" data-bs-placement="bottom"
                                        data-bs-title="Tooltip on bottom" /></a>
                            </dvi>
                            <!--profile content-->

                            <!--name-->
                            <h3 class="text-center m-0">Name</h3>
                            <!--discription-->
                            <p class="text-muted text-center m-0">Tech enthusiast | Graphic Designer | Web Designer |
                                Developer</p>
                            <!--conatact details-->
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="fa fa-envelope fs-7 me-1 mb-3 "></i>
                                <p class="">name@gmail.com</p>
                            </div>
                        </div>
                        <!--preview profile-->
                        <a href="../pages/userProfile.php"><input type="submit" value="Preview Profile"
                                class="btn btn-outline-primary w-100 " /></a>

                        <hr>
                        <!--Education-->
                        <div class="d-flex flex-column ">
                            <h4>Education</h4>
                            <p class="fw-bold m-0">B.Sc. - computer science</p>
                            <p class="text-muted m-0">Uva Wellassa University, Sri Lanka, Graduated 2025</p>
                        </div>

                        <hr>
                        <!--skills-->
                        <div class="d-flex flex-column pb-5 ">
                            <h4>Skills</h4>
                            <!--skill 1-->
                            <p class="fw-bold m-0">Java</p>
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="85"
                                aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 85%"></div>
                            </div>
                            <!--skill 2-->
                            <p class="fw-bold m-0">Html</p>
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="95"
                                aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 95%"></div>
                            </div>
                            <!--skill 3-->
                            <p class="fw-bold m-0">JavaScript</p>
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 75%"></div>
                            </div>
                            <!--skill 4-->
                            <p class="fw-bold m-0">css</p>
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="70"
                                aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <!--skill 5-->
                            <p class="fw-bold m-0">c</p>
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 80%"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--main time line-->
            <div class="container mt-5 pt-1">

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 bg-light rounded shadow">
                            <div class="card-body p-4">
                                <span class="badge rounded-pill bg-primary float-md-end mb-3 mb-sm-0">Full time</span>
                                <h5>Web Designer</h5>
                                <div class="mt-3">
                                    <span class="text-muted d-block"><i class="fa fa-home" aria-hidden="true"></i> <a
                                            href="https://www.simct.com/" target="_blank" class="text-muted">SimCentric
                                            Technologies. Colombo</a></span>
                                    <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                        Sri Lanka </span>
                                </div>

                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="">
                                                    <h1 class="modal-title fs-2" id="exampleModalLabel">
                                                        Vacancy for Web Designer
                                                    </h1>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="text-start">


                                                    <b>Key Responsibilities:</b><br>


                                                    Design and develop visually appealing and user-friendly
                                                    websites.<br>
                                                    Collaborate with cross-functional teams to gather requirements and
                                                    ensure project success.<br>
                                                    Create wireframes, prototypes, and mockups to present design
                                                    concepts.<br>
                                                    Optimize website performance and responsiveness across various
                                                    devices.<br>
                                                    Stay up-to-date with the latest design trends and emerging
                                                    technologies.<br><br>


                                                    <b>Qualifications:</b><br>

                                                    Proven experience as a Web Designer with a strong portfolio
                                                    showcasing your work.<br>
                                                    Proficiency in HTML, CSS, JavaScript, and other relevant web design
                                                    tools.<br>
                                                    Familiarity with content management systems (CMS) and web
                                                    development frameworks.<br>
                                                    Excellent attention to detail and the ability to work in a
                                                    fast-paced environment.<br>
                                                    Strong communication skills and the ability to collaborate
                                                    effectively with team members.<br><br>

                                                    <b>Benefits:</b><br>

                                                    Competitive salary and benefits package.<br>
                                                    Opportunity for professional growth and career advancement.<br>
                                                    Creative and collaborative work environment.<br>
                                                    Chance to work on exciting and diverse projects.<br><br>


                                                    <b>Join our team and help shape the digital future!</b>
                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-outline-primary my-3"
                                                            data-bs-dismiss="modal">Apply Now
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        View Details
                                    </button>
                                </div>


                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 bg-light rounded shadow">
                            <div class="card-body p-4">
                                <span class="badge rounded-pill bg-primary float-md-end mb-3 mb-sm-0">Full time</span>
                                <h5>Web Designer</h5>
                                <div class="mt-3">
                                    <span class="text-muted d-block"><i class="fa fa-home" aria-hidden="true"></i> <a
                                            href="#" target="_blank" class="text-muted">Bootdey.com LLC.</a></span>
                                    <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                        USA</span>
                                </div>

                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="">
                                                    <h1 class="modal-title fs-2" id="exampleModalLabel">
                                                        Vacancy for Web Designer
                                                    </h1>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="text-start">


                                                    <b>Key Responsibilities:</b><br>


                                                    Design and develop visually appealing and user-friendly
                                                    websites.<br>
                                                    Collaborate with cross-functional teams to gather requirements and
                                                    ensure project success.<br>
                                                    Create wireframes, prototypes, and mockups to present design
                                                    concepts.<br>
                                                    Optimize website performance and responsiveness across various
                                                    devices.<br>
                                                    Stay up-to-date with the latest design trends and emerging
                                                    technologies.<br><br>


                                                    <b>Qualifications:</b><br>

                                                    Proven experience as a Web Designer with a strong portfolio
                                                    showcasing your work.<br>
                                                    Proficiency in HTML, CSS, JavaScript, and other relevant web design
                                                    tools.<br>
                                                    Familiarity with content management systems (CMS) and web
                                                    development frameworks.<br>
                                                    Excellent attention to detail and the ability to work in a
                                                    fast-paced environment.<br>
                                                    Strong communication skills and the ability to collaborate
                                                    effectively with team members.<br><br>

                                                    <b>Benefits:</b><br>

                                                    Competitive salary and benefits package.<br>
                                                    Opportunity for professional growth and career advancement.<br>
                                                    Creative and collaborative work environment.<br>
                                                    Chance to work on exciting and diverse projects.<br><br>


                                                    <b>Join our team and help shape the digital future!</b>
                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-outline-primary my-3"
                                                            data-bs-dismiss="modal">Apply Now
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        View Details
                                    </button>
                                </div>


                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 bg-light rounded shadow">
                            <div class="card-body p-4">
                                <span class="badge rounded-pill bg-primary float-md-end mb-3 mb-sm-0">Full time</span>
                                <h5>Web Designer</h5>
                                <div class="mt-3">
                                    <span class="text-muted d-block"><i class="fa fa-home" aria-hidden="true"></i> <a
                                            href="#" target="_blank" class="text-muted">Bootdey.com LLC.</a></span>
                                    <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                        USA</span>
                                </div>

                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="">
                                                    <h1 class="modal-title fs-2" id="exampleModalLabel">
                                                        Vacancy for Web Designer
                                                    </h1>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="text-start">


                                                    <b>Key Responsibilities:</b><br>


                                                    Design and develop visually appealing and user-friendly
                                                    websites.<br>
                                                    Collaborate with cross-functional teams to gather requirements and
                                                    ensure project success.<br>
                                                    Create wireframes, prototypes, and mockups to present design
                                                    concepts.<br>
                                                    Optimize website performance and responsiveness across various
                                                    devices.<br>
                                                    Stay up-to-date with the latest design trends and emerging
                                                    technologies.<br><br>


                                                    <b>Qualifications:</b><br>

                                                    Proven experience as a Web Designer with a strong portfolio
                                                    showcasing your work.<br>
                                                    Proficiency in HTML, CSS, JavaScript, and other relevant web design
                                                    tools.<br>
                                                    Familiarity with content management systems (CMS) and web
                                                    development frameworks.<br>
                                                    Excellent attention to detail and the ability to work in a
                                                    fast-paced environment.<br>
                                                    Strong communication skills and the ability to collaborate
                                                    effectively with team members.<br><br>

                                                    <b>Benefits:</b><br>

                                                    Competitive salary and benefits package.<br>
                                                    Opportunity for professional growth and career advancement.<br>
                                                    Creative and collaborative work environment.<br>
                                                    Chance to work on exciting and diverse projects.<br><br>


                                                    <b>Join our team and help shape the digital future!</b>
                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-outline-primary my-3"
                                                            data-bs-dismiss="modal">Apply Now
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        View Details
                                    </button>
                                </div>


                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 bg-light rounded shadow">
                            <div class="card-body p-4">
                                <span class="badge rounded-pill bg-primary float-md-end mb-3 mb-sm-0">Full time</span>
                                <h5>Web Designer</h5>
                                <div class="mt-3">
                                    <span class="text-muted d-block"><i class="fa fa-home" aria-hidden="true"></i> <a
                                            href="#" target="_blank" class="text-muted">Bootdey.com LLC.</a></span>
                                    <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                        USA</span>
                                </div>

                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="">
                                                    <h1 class="modal-title fs-2" id="exampleModalLabel">
                                                        Vacancy for Web Designer
                                                    </h1>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="text-start">


                                                    <b>Key Responsibilities:</b><br>


                                                    Design and develop visually appealing and user-friendly
                                                    websites.<br>
                                                    Collaborate with cross-functional teams to gather requirements and
                                                    ensure project success.<br>
                                                    Create wireframes, prototypes, and mockups to present design
                                                    concepts.<br>
                                                    Optimize website performance and responsiveness across various
                                                    devices.<br>
                                                    Stay up-to-date with the latest design trends and emerging
                                                    technologies.<br><br>


                                                    <b>Qualifications:</b><br>

                                                    Proven experience as a Web Designer with a strong portfolio
                                                    showcasing your work.<br>
                                                    Proficiency in HTML, CSS, JavaScript, and other relevant web design
                                                    tools.<br>
                                                    Familiarity with content management systems (CMS) and web
                                                    development frameworks.<br>
                                                    Excellent attention to detail and the ability to work in a
                                                    fast-paced environment.<br>
                                                    Strong communication skills and the ability to collaborate
                                                    effectively with team members.<br><br>

                                                    <b>Benefits:</b><br>

                                                    Competitive salary and benefits package.<br>
                                                    Opportunity for professional growth and career advancement.<br>
                                                    Creative and collaborative work environment.<br>
                                                    Chance to work on exciting and diverse projects.<br><br>


                                                    <b>Join our team and help shape the digital future!</b>
                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-outline-primary my-3"
                                                            data-bs-dismiss="modal">Apply Now
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        View Details
                                    </button>
                                </div>


                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 bg-light rounded shadow">
                            <div class="card-body p-4">
                                <span class="badge rounded-pill bg-primary float-md-end mb-3 mb-sm-0">Full time</span>
                                <h5>Web Designer</h5>
                                <div class="mt-3">
                                    <span class="text-muted d-block"><i class="fa fa-home" aria-hidden="true"></i> <a
                                            href="#" target="_blank" class="text-muted">Bootdey.com LLC.</a></span>
                                    <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                        USA</span>
                                </div>

                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="">
                                                    <h1 class="modal-title fs-2" id="exampleModalLabel">
                                                        Vacancy for Web Designer
                                                    </h1>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="text-start">


                                                    <b>Key Responsibilities:</b><br>


                                                    Design and develop visually appealing and user-friendly
                                                    websites.<br>
                                                    Collaborate with cross-functional teams to gather requirements and
                                                    ensure project success.<br>
                                                    Create wireframes, prototypes, and mockups to present design
                                                    concepts.<br>
                                                    Optimize website performance and responsiveness across various
                                                    devices.<br>
                                                    Stay up-to-date with the latest design trends and emerging
                                                    technologies.<br><br>


                                                    <b>Qualifications:</b><br>

                                                    Proven experience as a Web Designer with a strong portfolio
                                                    showcasing your work.<br>
                                                    Proficiency in HTML, CSS, JavaScript, and other relevant web design
                                                    tools.<br>
                                                    Familiarity with content management systems (CMS) and web
                                                    development frameworks.<br>
                                                    Excellent attention to detail and the ability to work in a
                                                    fast-paced environment.<br>
                                                    Strong communication skills and the ability to collaborate
                                                    effectively with team members.<br><br>

                                                    <b>Benefits:</b><br>

                                                    Competitive salary and benefits package.<br>
                                                    Opportunity for professional growth and career advancement.<br>
                                                    Creative and collaborative work environment.<br>
                                                    Chance to work on exciting and diverse projects.<br><br>


                                                    <b>Join our team and help shape the digital future!</b>
                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-outline-primary my-3"
                                                            data-bs-dismiss="modal">Apply Now
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        View Details
                                    </button>
                                </div>


                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 bg-light rounded shadow">
                            <div class="card-body p-4">
                                <span class="badge rounded-pill bg-primary float-md-end mb-3 mb-sm-0">Full time</span>
                                <h5>Web Designer</h5>
                                <div class="mt-3">
                                    <span class="text-muted d-block"><i class="fa fa-home" aria-hidden="true"></i> <a
                                            href="#" target="_blank" class="text-muted">Bootdey.com LLC.</a></span>
                                    <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                        USA</span>
                                </div>

                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="">
                                                    <h1 class="modal-title fs-2" id="exampleModalLabel">
                                                        Vacancy for Web Designer
                                                    </h1>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="text-start">


                                                    <b>Key Responsibilities:</b><br>


                                                    Design and develop visually appealing and user-friendly
                                                    websites.<br>
                                                    Collaborate with cross-functional teams to gather requirements and
                                                    ensure project success.<br>
                                                    Create wireframes, prototypes, and mockups to present design
                                                    concepts.<br>
                                                    Optimize website performance and responsiveness across various
                                                    devices.<br>
                                                    Stay up-to-date with the latest design trends and emerging
                                                    technologies.<br><br>


                                                    <b>Qualifications:</b><br>

                                                    Proven experience as a Web Designer with a strong portfolio
                                                    showcasing your work.<br>
                                                    Proficiency in HTML, CSS, JavaScript, and other relevant web design
                                                    tools.<br>
                                                    Familiarity with content management systems (CMS) and web
                                                    development frameworks.<br>
                                                    Excellent attention to detail and the ability to work in a
                                                    fast-paced environment.<br>
                                                    Strong communication skills and the ability to collaborate
                                                    effectively with team members.<br><br>

                                                    <b>Benefits:</b><br>

                                                    Competitive salary and benefits package.<br>
                                                    Opportunity for professional growth and career advancement.<br>
                                                    Creative and collaborative work environment.<br>
                                                    Chance to work on exciting and diverse projects.<br><br>


                                                    <b>Join our team and help shape the digital future!</b>
                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-outline-primary my-3"
                                                            data-bs-dismiss="modal">Apply Now
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        View Details
                                    </button>
                                </div>


                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 bg-light rounded shadow">
                            <div class="card-body p-4">
                                <span class="badge rounded-pill bg-primary float-md-end mb-3 mb-sm-0">Full time</span>
                                <h5>Web Designer</h5>
                                <div class="mt-3">
                                    <span class="text-muted d-block"><i class="fa fa-home" aria-hidden="true"></i> <a
                                            href="#" target="_blank" class="text-muted">Bootdey.com LLC.</a></span>
                                    <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                        USA</span>
                                </div>

                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="">
                                                    <h1 class="modal-title fs-2" id="exampleModalLabel">
                                                        Vacancy for Web Designer
                                                    </h1>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="text-start">


                                                    <b>Key Responsibilities:</b><br>


                                                    Design and develop visually appealing and user-friendly
                                                    websites.<br>
                                                    Collaborate with cross-functional teams to gather requirements and
                                                    ensure project success.<br>
                                                    Create wireframes, prototypes, and mockups to present design
                                                    concepts.<br>
                                                    Optimize website performance and responsiveness across various
                                                    devices.<br>
                                                    Stay up-to-date with the latest design trends and emerging
                                                    technologies.<br><br>


                                                    <b>Qualifications:</b><br>

                                                    Proven experience as a Web Designer with a strong portfolio
                                                    showcasing your work.<br>
                                                    Proficiency in HTML, CSS, JavaScript, and other relevant web design
                                                    tools.<br>
                                                    Familiarity with content management systems (CMS) and web
                                                    development frameworks.<br>
                                                    Excellent attention to detail and the ability to work in a
                                                    fast-paced environment.<br>
                                                    Strong communication skills and the ability to collaborate
                                                    effectively with team members.<br><br>

                                                    <b>Benefits:</b><br>

                                                    Competitive salary and benefits package.<br>
                                                    Opportunity for professional growth and career advancement.<br>
                                                    Creative and collaborative work environment.<br>
                                                    Chance to work on exciting and diverse projects.<br><br>


                                                    <b>Join our team and help shape the digital future!</b>
                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-outline-primary my-3"
                                                            data-bs-dismiss="modal">Apply Now
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        View Details
                                    </button>
                                </div>


                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 bg-light rounded shadow">
                            <div class="card-body p-4">
                                <span class="badge rounded-pill bg-primary float-md-end mb-3 mb-sm-0">Full time</span>
                                <h5>Web Designer</h5>
                                <div class="mt-3">
                                    <span class="text-muted d-block"><i class="fa fa-home" aria-hidden="true"></i> <a
                                            href="#" target="_blank" class="text-muted">Bootdey.com LLC.</a></span>
                                    <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                        USA</span>
                                </div>

                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="">
                                                    <h1 class="modal-title fs-2" id="exampleModalLabel">
                                                        Vacancy for Web Designer
                                                    </h1>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="text-start">


                                                    <b>Key Responsibilities:</b><br>


                                                    Design and develop visually appealing and user-friendly
                                                    websites.<br>
                                                    Collaborate with cross-functional teams to gather requirements and
                                                    ensure project success.<br>
                                                    Create wireframes, prototypes, and mockups to present design
                                                    concepts.<br>
                                                    Optimize website performance and responsiveness across various
                                                    devices.<br>
                                                    Stay up-to-date with the latest design trends and emerging
                                                    technologies.<br><br>


                                                    <b>Qualifications:</b><br>

                                                    Proven experience as a Web Designer with a strong portfolio
                                                    showcasing your work.<br>
                                                    Proficiency in HTML, CSS, JavaScript, and other relevant web design
                                                    tools.<br>
                                                    Familiarity with content management systems (CMS) and web
                                                    development frameworks.<br>
                                                    Excellent attention to detail and the ability to work in a
                                                    fast-paced environment.<br>
                                                    Strong communication skills and the ability to collaborate
                                                    effectively with team members.<br><br>

                                                    <b>Benefits:</b><br>

                                                    Competitive salary and benefits package.<br>
                                                    Opportunity for professional growth and career advancement.<br>
                                                    Creative and collaborative work environment.<br>
                                                    Chance to work on exciting and diverse projects.<br><br>


                                                    <b>Join our team and help shape the digital future!</b>
                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-outline-primary my-3"
                                                            data-bs-dismiss="modal">Apply Now
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        View Details
                                    </button>
                                </div>


                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 bg-light rounded shadow">
                            <div class="card-body p-4">
                                <span class="badge rounded-pill bg-primary float-md-end mb-3 mb-sm-0">Full time</span>
                                <h5>Web Designer</h5>
                                <div class="mt-3">
                                    <span class="text-muted d-block"><i class="fa fa-home" aria-hidden="true"></i> <a
                                            href="#" target="_blank" class="text-muted">Bootdey.com LLC.</a></span>
                                    <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                        USA</span>
                                </div>

                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="">
                                                    <h1 class="modal-title fs-2" id="exampleModalLabel">
                                                        Vacancy for Web Designer
                                                    </h1>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="text-start">


                                                    <b>Key Responsibilities:</b><br>


                                                    Design and develop visually appealing and user-friendly
                                                    websites.<br>
                                                    Collaborate with cross-functional teams to gather requirements and
                                                    ensure project success.<br>
                                                    Create wireframes, prototypes, and mockups to present design
                                                    concepts.<br>
                                                    Optimize website performance and responsiveness across various
                                                    devices.<br>
                                                    Stay up-to-date with the latest design trends and emerging
                                                    technologies.<br><br>


                                                    <b>Qualifications:</b><br>

                                                    Proven experience as a Web Designer with a strong portfolio
                                                    showcasing your work.<br>
                                                    Proficiency in HTML, CSS, JavaScript, and other relevant web design
                                                    tools.<br>
                                                    Familiarity with content management systems (CMS) and web
                                                    development frameworks.<br>
                                                    Excellent attention to detail and the ability to work in a
                                                    fast-paced environment.<br>
                                                    Strong communication skills and the ability to collaborate
                                                    effectively with team members.<br><br>

                                                    <b>Benefits:</b><br>

                                                    Competitive salary and benefits package.<br>
                                                    Opportunity for professional growth and career advancement.<br>
                                                    Creative and collaborative work environment.<br>
                                                    Chance to work on exciting and diverse projects.<br><br>


                                                    <b>Join our team and help shape the digital future!</b>
                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-outline-primary my-3"
                                                            data-bs-dismiss="modal">Apply Now
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        View Details
                                    </button>
                                </div>


                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 bg-light rounded shadow">
                            <div class="card-body p-4">
                                <span class="badge rounded-pill bg-primary float-md-end mb-3 mb-sm-0">Full time</span>
                                <h5>Web Designer</h5>
                                <div class="mt-3">
                                    <span class="text-muted d-block"><i class="fa fa-home" aria-hidden="true"></i> <a
                                            href="#" target="_blank" class="text-muted">Bootdey.com LLC.</a></span>
                                    <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                        USA</span>
                                </div>

                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="">
                                                    <h1 class="modal-title fs-2" id="exampleModalLabel">
                                                        Vacancy for Web Designer
                                                    </h1>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="text-start">


                                                    <b>Key Responsibilities:</b><br>


                                                    Design and develop visually appealing and user-friendly
                                                    websites.<br>
                                                    Collaborate with cross-functional teams to gather requirements and
                                                    ensure project success.<br>
                                                    Create wireframes, prototypes, and mockups to present design
                                                    concepts.<br>
                                                    Optimize website performance and responsiveness across various
                                                    devices.<br>
                                                    Stay up-to-date with the latest design trends and emerging
                                                    technologies.<br><br>


                                                    <b>Qualifications:</b><br>

                                                    Proven experience as a Web Designer with a strong portfolio
                                                    showcasing your work.<br>
                                                    Proficiency in HTML, CSS, JavaScript, and other relevant web design
                                                    tools.<br>
                                                    Familiarity with content management systems (CMS) and web
                                                    development frameworks.<br>
                                                    Excellent attention to detail and the ability to work in a
                                                    fast-paced environment.<br>
                                                    Strong communication skills and the ability to collaborate
                                                    effectively with team members.<br><br>

                                                    <b>Benefits:</b><br>

                                                    Competitive salary and benefits package.<br>
                                                    Opportunity for professional growth and career advancement.<br>
                                                    Creative and collaborative work environment.<br>
                                                    Chance to work on exciting and diverse projects.<br><br>


                                                    <b>Join our team and help shape the digital future!</b>
                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-outline-primary my-3"
                                                            data-bs-dismiss="modal">Apply Now
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        View Details
                                    </button>
                                </div>


                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 bg-light rounded shadow">
                            <div class="card-body p-4">
                                <span class="badge rounded-pill bg-primary float-md-end mb-3 mb-sm-0">Full time</span>
                                <h5>Web Designer</h5>
                                <div class="mt-3">
                                    <span class="text-muted d-block"><i class="fa fa-home" aria-hidden="true"></i> <a
                                            href="#" target="_blank" class="text-muted">Bootdey.com LLC.</a></span>
                                    <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                        USA</span>
                                </div>

                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="">
                                                    <h1 class="modal-title fs-2" id="exampleModalLabel">
                                                        Vacancy for Web Designer
                                                    </h1>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="text-start">


                                                    <b>Key Responsibilities:</b><br>


                                                    Design and develop visually appealing and user-friendly
                                                    websites.<br>
                                                    Collaborate with cross-functional teams to gather requirements and
                                                    ensure project success.<br>
                                                    Create wireframes, prototypes, and mockups to present design
                                                    concepts.<br>
                                                    Optimize website performance and responsiveness across various
                                                    devices.<br>
                                                    Stay up-to-date with the latest design trends and emerging
                                                    technologies.<br><br>


                                                    <b>Qualifications:</b><br>

                                                    Proven experience as a Web Designer with a strong portfolio
                                                    showcasing your work.<br>
                                                    Proficiency in HTML, CSS, JavaScript, and other relevant web design
                                                    tools.<br>
                                                    Familiarity with content management systems (CMS) and web
                                                    development frameworks.<br>
                                                    Excellent attention to detail and the ability to work in a
                                                    fast-paced environment.<br>
                                                    Strong communication skills and the ability to collaborate
                                                    effectively with team members.<br><br>

                                                    <b>Benefits:</b><br>

                                                    Competitive salary and benefits package.<br>
                                                    Opportunity for professional growth and career advancement.<br>
                                                    Creative and collaborative work environment.<br>
                                                    Chance to work on exciting and diverse projects.<br><br>


                                                    <b>Join our team and help shape the digital future!</b>
                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-outline-primary my-3"
                                                            data-bs-dismiss="modal">Apply Now
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        View Details
                                    </button>
                                </div>


                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 bg-light rounded shadow">
                            <div class="card-body p-4">
                                <span class="badge rounded-pill bg-primary float-md-end mb-3 mb-sm-0">Full time</span>
                                <h5>Web Designer</h5>
                                <div class="mt-3">
                                    <span class="text-muted d-block"><i class="fa fa-home" aria-hidden="true"></i> <a
                                            href="#" target="_blank" class="text-muted">Bootdey.com LLC.</a></span>
                                    <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                        USA</span>
                                </div>

                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="">
                                                    <h1 class="modal-title fs-2" id="exampleModalLabel">
                                                        Vacancy for Web Designer
                                                    </h1>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="text-start">


                                                    <b>Key Responsibilities:</b><br>


                                                    Design and develop visually appealing and user-friendly
                                                    websites.<br>
                                                    Collaborate with cross-functional teams to gather requirements and
                                                    ensure project success.<br>
                                                    Create wireframes, prototypes, and mockups to present design
                                                    concepts.<br>
                                                    Optimize website performance and responsiveness across various
                                                    devices.<br>
                                                    Stay up-to-date with the latest design trends and emerging
                                                    technologies.<br><br>


                                                    <b>Qualifications:</b><br>

                                                    Proven experience as a Web Designer with a strong portfolio
                                                    showcasing your work.<br>
                                                    Proficiency in HTML, CSS, JavaScript, and other relevant web design
                                                    tools.<br>
                                                    Familiarity with content management systems (CMS) and web
                                                    development frameworks.<br>
                                                    Excellent attention to detail and the ability to work in a
                                                    fast-paced environment.<br>
                                                    Strong communication skills and the ability to collaborate
                                                    effectively with team members.<br><br>

                                                    <b>Benefits:</b><br>

                                                    Competitive salary and benefits package.<br>
                                                    Opportunity for professional growth and career advancement.<br>
                                                    Creative and collaborative work environment.<br>
                                                    Chance to work on exciting and diverse projects.<br><br>


                                                    <b>Join our team and help shape the digital future!</b>
                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-outline-primary my-3"
                                                            data-bs-dismiss="modal">Apply Now
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        View Details
                                    </button>
                                </div>


                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 bg-light rounded shadow">
                            <div class="card-body p-4">
                                <span class="badge rounded-pill bg-primary float-md-end mb-3 mb-sm-0">Full time</span>
                                <h5>Web Designer</h5>
                                <div class="mt-3">
                                    <span class="text-muted d-block"><i class="fa fa-home" aria-hidden="true"></i> <a
                                            href="https://www.simct.com/" target="_blank" class="text-muted">SimCentric
                                            Technologies. Colombo</a></span>
                                    <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                        Sri Lanka </span>
                                </div>

                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="">
                                                    <h1 class="modal-title fs-2" id="exampleModalLabel">
                                                        Vacancy for Web Designer
                                                    </h1>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="text-start">


                                                    <b>Key Responsibilities:</b><br>


                                                    Design and develop visually appealing and user-friendly
                                                    websites.<br>
                                                    Collaborate with cross-functional teams to gather requirements and
                                                    ensure project success.<br>
                                                    Create wireframes, prototypes, and mockups to present design
                                                    concepts.<br>
                                                    Optimize website performance and responsiveness across various
                                                    devices.<br>
                                                    Stay up-to-date with the latest design trends and emerging
                                                    technologies.<br><br>


                                                    <b>Qualifications:</b><br>

                                                    Proven experience as a Web Designer with a strong portfolio
                                                    showcasing your work.<br>
                                                    Proficiency in HTML, CSS, JavaScript, and other relevant web design
                                                    tools.<br>
                                                    Familiarity with content management systems (CMS) and web
                                                    development frameworks.<br>
                                                    Excellent attention to detail and the ability to work in a
                                                    fast-paced environment.<br>
                                                    Strong communication skills and the ability to collaborate
                                                    effectively with team members.<br><br>

                                                    <b>Benefits:</b><br>

                                                    Competitive salary and benefits package.<br>
                                                    Opportunity for professional growth and career advancement.<br>
                                                    Creative and collaborative work environment.<br>
                                                    Chance to work on exciting and diverse projects.<br><br>


                                                    <b>Join our team and help shape the digital future!</b>
                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-outline-primary my-3"
                                                            data-bs-dismiss="modal">Apply Now
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        View Details
                                    </button>
                                </div>


                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 bg-light rounded shadow">
                            <div class="card-body p-4">
                                <span class="badge rounded-pill bg-primary float-md-end mb-3 mb-sm-0">Full time</span>
                                <h5>Web Designer</h5>
                                <div class="mt-3">
                                    <span class="text-muted d-block"><i class="fa fa-home" aria-hidden="true"></i> <a
                                            href="https://www.simct.com/" target="_blank" class="text-muted">SimCentric
                                            Technologies. Colombo</a></span>
                                    <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                        Sri Lanka </span>
                                </div>

                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="">
                                                    <h1 class="modal-title fs-2" id="exampleModalLabel">
                                                        Vacancy for Web Designer
                                                    </h1>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="text-start">


                                                    <b>Key Responsibilities:</b><br>


                                                    Design and develop visually appealing and user-friendly
                                                    websites.<br>
                                                    Collaborate with cross-functional teams to gather requirements and
                                                    ensure project success.<br>
                                                    Create wireframes, prototypes, and mockups to present design
                                                    concepts.<br>
                                                    Optimize website performance and responsiveness across various
                                                    devices.<br>
                                                    Stay up-to-date with the latest design trends and emerging
                                                    technologies.<br><br>


                                                    <b>Qualifications:</b><br>

                                                    Proven experience as a Web Designer with a strong portfolio
                                                    showcasing your work.<br>
                                                    Proficiency in HTML, CSS, JavaScript, and other relevant web design
                                                    tools.<br>
                                                    Familiarity with content management systems (CMS) and web
                                                    development frameworks.<br>
                                                    Excellent attention to detail and the ability to work in a
                                                    fast-paced environment.<br>
                                                    Strong communication skills and the ability to collaborate
                                                    effectively with team members.<br><br>

                                                    <b>Benefits:</b><br>

                                                    Competitive salary and benefits package.<br>
                                                    Opportunity for professional growth and career advancement.<br>
                                                    Creative and collaborative work environment.<br>
                                                    Chance to work on exciting and diverse projects.<br><br>


                                                    <b>Join our team and help shape the digital future!</b>
                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-outline-primary my-3"
                                                            data-bs-dismiss="modal">Apply Now
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        View Details
                                    </button>
                                </div>


                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 bg-light rounded shadow">
                            <div class="card-body p-4">
                                <span class="badge rounded-pill bg-primary float-md-end mb-3 mb-sm-0">Full time</span>
                                <h5>Web Designer</h5>
                                <div class="mt-3">
                                    <span class="text-muted d-block"><i class="fa fa-home" aria-hidden="true"></i> <a
                                            href="https://www.simct.com/" target="_blank" class="text-muted">SimCentric
                                            Technologies. Colombo</a></span>
                                    <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                        Sri Lanka </span>
                                </div>

                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="">
                                                    <h1 class="modal-title fs-2" id="exampleModalLabel">
                                                        Vacancy for Web Designer
                                                    </h1>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="text-start">


                                                    <b>Key Responsibilities:</b><br>


                                                    Design and develop visually appealing and user-friendly
                                                    websites.<br>
                                                    Collaborate with cross-functional teams to gather requirements and
                                                    ensure project success.<br>
                                                    Create wireframes, prototypes, and mockups to present design
                                                    concepts.<br>
                                                    Optimize website performance and responsiveness across various
                                                    devices.<br>
                                                    Stay up-to-date with the latest design trends and emerging
                                                    technologies.<br><br>


                                                    <b>Qualifications:</b><br>

                                                    Proven experience as a Web Designer with a strong portfolio
                                                    showcasing your work.<br>
                                                    Proficiency in HTML, CSS, JavaScript, and other relevant web design
                                                    tools.<br>
                                                    Familiarity with content management systems (CMS) and web
                                                    development frameworks.<br>
                                                    Excellent attention to detail and the ability to work in a
                                                    fast-paced environment.<br>
                                                    Strong communication skills and the ability to collaborate
                                                    effectively with team members.<br><br>

                                                    <b>Benefits:</b><br>

                                                    Competitive salary and benefits package.<br>
                                                    Opportunity for professional growth and career advancement.<br>
                                                    Creative and collaborative work environment.<br>
                                                    Chance to work on exciting and diverse projects.<br><br>


                                                    <b>Join our team and help shape the digital future!</b>
                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-outline-primary my-3"
                                                            data-bs-dismiss="modal">Apply Now
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        View Details
                                    </button>
                                </div>


                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 bg-light rounded shadow">
                            <div class="card-body p-4">
                                <span class="badge rounded-pill bg-primary float-md-end mb-3 mb-sm-0">Full time</span>
                                <h5>Web Designer</h5>
                                <div class="mt-3">
                                    <span class="text-muted d-block"><i class="fa fa-home" aria-hidden="true"></i> <a
                                            href="https://www.simct.com/" target="_blank" class="text-muted">SimCentric
                                            Technologies. Colombo</a></span>
                                    <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                        Sri Lanka </span>
                                </div>

                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="">
                                                    <h1 class="modal-title fs-2" id="exampleModalLabel">
                                                        Vacancy for Web Designer
                                                    </h1>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="text-start">


                                                    <b>Key Responsibilities:</b><br>


                                                    Design and develop visually appealing and user-friendly
                                                    websites.<br>
                                                    Collaborate with cross-functional teams to gather requirements and
                                                    ensure project success.<br>
                                                    Create wireframes, prototypes, and mockups to present design
                                                    concepts.<br>
                                                    Optimize website performance and responsiveness across various
                                                    devices.<br>
                                                    Stay up-to-date with the latest design trends and emerging
                                                    technologies.<br><br>


                                                    <b>Qualifications:</b><br>

                                                    Proven experience as a Web Designer with a strong portfolio
                                                    showcasing your work.<br>
                                                    Proficiency in HTML, CSS, JavaScript, and other relevant web design
                                                    tools.<br>
                                                    Familiarity with content management systems (CMS) and web
                                                    development frameworks.<br>
                                                    Excellent attention to detail and the ability to work in a
                                                    fast-paced environment.<br>
                                                    Strong communication skills and the ability to collaborate
                                                    effectively with team members.<br><br>

                                                    <b>Benefits:</b><br>

                                                    Competitive salary and benefits package.<br>
                                                    Opportunity for professional growth and career advancement.<br>
                                                    Creative and collaborative work environment.<br>
                                                    Chance to work on exciting and diverse projects.<br><br>


                                                    <b>Join our team and help shape the digital future!</b>
                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-outline-primary my-3"
                                                            data-bs-dismiss="modal">Apply Now
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        View Details
                                    </button>
                                </div>


                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 bg-light rounded shadow">
                            <div class="card-body p-4">
                                <span class="badge rounded-pill bg-primary float-md-end mb-3 mb-sm-0">Full time</span>
                                <h5>Web Designer</h5>
                                <div class="mt-3">
                                    <span class="text-muted d-block"><i class="fa fa-home" aria-hidden="true"></i> <a
                                            href="https://www.simct.com/" target="_blank" class="text-muted">SimCentric
                                            Technologies. Colombo</a></span>
                                    <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                        Sri Lanka </span>
                                </div>

                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="">
                                                    <h1 class="modal-title fs-2" id="exampleModalLabel">
                                                        Vacancy for Web Designer
                                                    </h1>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="text-start">


                                                    <b>Key Responsibilities:</b><br>


                                                    Design and develop visually appealing and user-friendly
                                                    websites.<br>
                                                    Collaborate with cross-functional teams to gather requirements and
                                                    ensure project success.<br>
                                                    Create wireframes, prototypes, and mockups to present design
                                                    concepts.<br>
                                                    Optimize website performance and responsiveness across various
                                                    devices.<br>
                                                    Stay up-to-date with the latest design trends and emerging
                                                    technologies.<br><br>


                                                    <b>Qualifications:</b><br>

                                                    Proven experience as a Web Designer with a strong portfolio
                                                    showcasing your work.<br>
                                                    Proficiency in HTML, CSS, JavaScript, and other relevant web design
                                                    tools.<br>
                                                    Familiarity with content management systems (CMS) and web
                                                    development frameworks.<br>
                                                    Excellent attention to detail and the ability to work in a
                                                    fast-paced environment.<br>
                                                    Strong communication skills and the ability to collaborate
                                                    effectively with team members.<br><br>

                                                    <b>Benefits:</b><br>

                                                    Competitive salary and benefits package.<br>
                                                    Opportunity for professional growth and career advancement.<br>
                                                    Creative and collaborative work environment.<br>
                                                    Chance to work on exciting and diverse projects.<br><br>


                                                    <b>Join our team and help shape the digital future!</b>
                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-outline-primary my-3"
                                                            data-bs-dismiss="modal">Apply Now
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        View Details
                                    </button>
                                </div>


                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 bg-light rounded shadow">
                            <div class="card-body p-4">
                                <span class="badge rounded-pill bg-primary float-md-end mb-3 mb-sm-0">Full time</span>
                                <h5>Web Designer</h5>
                                <div class="mt-3">
                                    <span class="text-muted d-block"><i class="fa fa-home" aria-hidden="true"></i> <a
                                            href="https://www.simct.com/" target="_blank" class="text-muted">SimCentric
                                            Technologies. Colombo</a></span>
                                    <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                        Sri Lanka </span>
                                </div>

                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="">
                                                    <h1 class="modal-title fs-2" id="exampleModalLabel">
                                                        Vacancy for Web Designer
                                                    </h1>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="text-start">


                                                    <b>Key Responsibilities:</b><br>


                                                    Design and develop visually appealing and user-friendly
                                                    websites.<br>
                                                    Collaborate with cross-functional teams to gather requirements and
                                                    ensure project success.<br>
                                                    Create wireframes, prototypes, and mockups to present design
                                                    concepts.<br>
                                                    Optimize website performance and responsiveness across various
                                                    devices.<br>
                                                    Stay up-to-date with the latest design trends and emerging
                                                    technologies.<br><br>


                                                    <b>Qualifications:</b><br>

                                                    Proven experience as a Web Designer with a strong portfolio
                                                    showcasing your work.<br>
                                                    Proficiency in HTML, CSS, JavaScript, and other relevant web design
                                                    tools.<br>
                                                    Familiarity with content management systems (CMS) and web
                                                    development frameworks.<br>
                                                    Excellent attention to detail and the ability to work in a
                                                    fast-paced environment.<br>
                                                    Strong communication skills and the ability to collaborate
                                                    effectively with team members.<br><br>

                                                    <b>Benefits:</b><br>

                                                    Competitive salary and benefits package.<br>
                                                    Opportunity for professional growth and career advancement.<br>
                                                    Creative and collaborative work environment.<br>
                                                    Chance to work on exciting and diverse projects.<br><br>


                                                    <b>Join our team and help shape the digital future!</b>
                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-outline-primary my-3"
                                                            data-bs-dismiss="modal">Apply Now
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        View Details
                                    </button>
                                </div>


                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-12 mt-4 pt-2 d-block d-md-none text-center">
                        <a href="#" class="btn btn-primary">View more Jobs <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-arrow-right fea icon-sm">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg></a>
                    </div><!--end col-->
                </div><!--end row-->









            </div>
            <!--right side-->

        </div>


        <!--bootstrap-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
        <!--main js-->
        <script src="./mainjs.js"></script>
        <script>
            const tooltipTriggerList = document.querySelectorAll( '[data-bs-toggle="tooltip"]' );
            const tooltipList = [ ...tooltipTriggerList ].map( tooltipTriggerEl => new bootstrap.Tooltip( tooltipTriggerEl ) );
        </script>
</body>

</html>