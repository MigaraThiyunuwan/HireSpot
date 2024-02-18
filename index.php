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
    <title>HireSpot | About</title>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--fontawesom-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- <script>
        function addEducationField() {
            var container = document.getElementById("educationContainer");

            // Create new div for the education information
            var newDiv = document.createElement("div");
            newDiv.classList.add("input-group", "mb-3");

            // Create institute input field
            var instituteSpan = document.createElement("span");
            instituteSpan.classList.add("input-group-text");
            instituteSpan.textContent = "Institute";

            var instituteInput = document.createElement("input");
            instituteInput.type = "text";
            instituteInput.classList.add("form-control");
            instituteInput.setAttribute("aria-label", "Sizing example input");
            instituteInput.setAttribute("aria-describedby", "inputGroup-sizing-default");

            // Append institute elements to the new div
            newDiv.appendChild(instituteSpan);
            newDiv.appendChild(instituteInput);

            // Create education level input field
            var levelSpan = document.createElement("span");
            levelSpan.classList.add("input-group-text");
            levelSpan.textContent = "Edu. Level";

            var levelInput = document.createElement("input");
            levelInput.type = "text";
            levelInput.classList.add("form-control");
            levelInput.setAttribute("aria-label", "Sizing example input");
            levelInput.setAttribute("aria-describedby", "inputGroup-sizing-sm");

            // Create a new div for the education level input field
            var levelDiv = document.createElement("div");
            levelDiv.classList.add("input-group", "input-group-sm", "mb-3");
            levelDiv.appendChild(levelSpan);
            levelDiv.appendChild(levelInput);

            // Append the education level div to the main div
            newDiv.appendChild(levelDiv);

            // Append the new div to the container
            container.appendChild(newDiv);
        }
    </script> -->
</head>

<body>
    <style>
        body {
            background-color: #F1F0F0;
            overflow-x: hidden;
        }

        .fs-0 {
            font-size: 4rem;
        }

        .fs-7 {
            font-size: 0.8rem;
        }

        .bg-darkgray {
            background-color: #D9D9D9 !important;
        }
    </style>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <div class="container">

            <a class="navbar-brand " href="#"><img src="img/logo.png" width="137px" height="43px" alt="HireSpot" /></a>

            <!--profile-->
            <dvi>
                <div class="dropdown">
                    <a href="#"
                        class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="img/userDefault.jpg" alt="avatar" width="32" height="32" class="rounded-circle me-2">
                        <span class="fs-4">Log in as</span>
                    </a>
                    <ul class="dropdown-menu shadow">
                        <li><a class="dropdown-item" href="./pages/Login.php">Job seeker</a></li>
                        <li><a class="dropdown-item" href="./pages/LoginCompany.php">Company</a></li>
                    </ul>
                </div>
            </dvi>
        </div>
        </div>
    </nav>
    <!--slider-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide img-fluid w-100 " src="./img/bg.png" alt="First slide">
                <div class="container">
                    <div class="carousel-caption text-left" tyle="color: blue;">
                        <h1><img class="img-fluid mt-3" src="img/logo.png" height="400px" alt="HireSpot" /></h1>
                        <h1 class="text-dark">Empowering Your Career Journey</h1>
                        <h4 class="text-primary">Sign up today<h4>
                                <a class="btn btn-outline-primary btn-lg mt-3" data-bs-toggle="modal"
                                    data-bs-target="#userModal" href="./pages/Login.php" role="button">As jobseeker</a>
                                <a class="btn btn-outline-primary btn-lg mt-3" data-bs-toggle="modal"
                                    data-bs-target="#companyModal" href="./pages/Login.php" role="button">As company</a>
                                <!-- create from modal -->
                                <!-- userModal -->
                                <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="">
                                                    <h1 class="modal-title text-dark fs-2" id="exampleModalLabel">
                                                        sign up as jobseeker
                                                    </h1>
                                                    <span class="text-muted fs-7">Join with us to discover
                                                        somehting</span>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="./pages/server/userRegistrationProcess.php" method="POST">
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="text" name="FirstName" id=""
                                                                class="form-control" placeholder="first name" />
                                                        </div>
                                                        <div class="col">
                                                            <input type="text" name="LastName" id=""
                                                                class="form-control" placeholder="last name" />
                                                        </div>
                                                    </div>

                                                    <input type="text" name="UserName" class="form-control my-3"
                                                        placeholder="Username" id="" />
                                                    <input type="email" name="Email" class="form-control my-3"
                                                        placeholder="Email" id="" />

                                                    <div class="row">
                                                        <div class="col">

                                                            <div class="">
                                                                <span class="text-muted fs-7">
                                                                    Gender
                                                                </span>
                                                                <div class="d-flex justify-content-evenly mt-2">
                                                                    <div class="">
                                                                        <label class="form-check-label"
                                                                            for="flexRadioDefault1">
                                                                            Male
                                                                        </label>
                                                                        <input class="form-check-input" type="radio"
                                                                            name="Gender" id="flexRadioDefault1"
                                                                            value="Male" checked />
                                                                    </div>
                                                                    <div class="">
                                                                        <label class="form-check-label"
                                                                            for="flexRadioDefault2">
                                                                            Female
                                                                        </label>
                                                                        <input class="form-check-input" type="radio"
                                                                            name="Gender" id="flexRadioDefault2"
                                                                            value="Female" />
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col">
                                                            <span class="text-muted fs-7">
                                                                Date Of Birth
                                                            </span>
                                                            <input type="date" name="dateofbirth" class="form-control"
                                                                id="" />
                                                        </div>
                                                    </div>

                                                    <input type="tel" name="Phone" class="form-control my-3"
                                                        placeholder="Phone No" id="" />

                                                    <input type="password" name="Password" class="form-control my-3"
                                                        placeholder="password" id="" />

                                                    <input type="text" name="Address" class="form-control my-3"
                                                        placeholder="Address" id="" />
                                                    <input type="text" name="Education" class="form-control my-3"
                                                        placeholder="Education" id="" />


                                                    <textarea class="form-control my-3" id="description"
                                                        name="Description" placeholder="Bio eg:-tech enthusiast"
                                                        oninput="countWords()" maxlength="200"></textarea>

                                                    <textarea class="form-control my-3" id="description" name="about"
                                                        placeholder="About me" oninput="countWords()"
                                                        maxlength="200"></textarea>



                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-outline-primary my-3"
                                                            data-bs-dismiss="modal">
                                                            Sing up
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- company Modal -->
                                <div class="modal fade" id="companyModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="">
                                                    <h1 class="modal-title text-dark fs-2" id="exampleModalLabel">
                                                        sign up as company
                                                    </h1>
                                                    <span class="text-muted fs-7">Join with us to discover
                                                        somehting</span>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="./pages/server/comapanyRegistrationProcess.php" method="post">
                                                <div class="modal-body">

                                                    <input type="text" name="companyname" class="form-control my-3"
                                                        placeholder="Company Name" id="" />

                                                    <input type="email" name="email" class="form-control my-3"
                                                        placeholder="Email" id="" />

                                                    <input type="text" name="address" class="form-control my-3"
                                                        placeholder="Address" id="" />

                                                    <textarea class="form-control my-3" id="description"
                                                        name="description" placeholder="Description"
                                                        oninput="countWords()" maxlength="200"></textarea>

                                                    <input type="password" name="password" class="form-control my-3"
                                                        placeholder="password" id="" />

                                                    <input type="text" name="employee" class="form-control my-3"
                                                        placeholder="Number of employee" id="" />
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-outline-primary my-3"
                                                        data-bs-dismiss="modal">
                                                        Sing up
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Marketing messaging and featurettes
        ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing p-3">

        <!-- Three columns of text below the carousel -->
        <div class="row mt-4">
            <div class="col-lg-4" style="text-align: center;">
                <img class="rounded mb-2" src="./img/search.png" alt="Generic placeholder image" width="140"
                    height="140">
                <h2 class="text-center ">Find Your Job Easier</h2>
                <p class="text-center">At Hirespot, we understand that finding the right job can be a challenging
                    process. That's why we've developed a suite of powerful tools and features to make your job search
                    easier, faster, and more efficient.</p>

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4" style="text-align: center;">
                <img class="rounded mb-2" src="./img/sign-language.png" alt="Generic placeholder image" width="140"
                    height="140">
                <h2 class="text-center">Easy Application Process</h2>
                <p class="text-center">Applying for jobs shouldn't be a time-consuming and complicated process. We've
                    revolutionized the application experience to make it easier and more efficient. Discover how our job
                    application portal simplifies the application process, giving you more time to focus on what matters
                    – landing your dream job.</p>

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4" style="text-align: center;">
                <img class="rounded mb-2" src="./img/shield.png" alt="Generic placeholder image" width="140"
                    height="140">
                <h2 class="text-center">Trust and Security</h2>
                <p class="text-center">We understand that your trust and security are of utmost importance when using a
                    job application portal. We take this responsibility seriously and have implemented robust measures
                    to ensure a safe and secure environment for your job search.</p>

            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <div class="row featurette my-3 pt-5">
            <div class="col-md-7 d-flex align-items-center justify-content-cente">
                <div>
                    <h2 class="featurette-heading">Our Story : <span class="text-muted">Driven by Passion and
                            Purpose.</span></h2>
                    <p class="lead"> Hirespot was born out of a passion for connecting talented individuals with
                        life-changing career opportunities. Our founders experienced the challenges of job hunting
                        firsthand and envisioned a platform that could revolutionize the process, making it more
                        efficient, personalized, and rewarding.</p>
                </div>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500"
                    style="width: 500px; height: 500px;"
                    src="https://img.freepik.com/free-vector/modern-resume-template_23-2147836674.jpg?size=626&ext=jpg&ga=GA1.2.1882095610.1686062107&semt=ais"
                    data-holder-rendered="true">
            </div>
        </div>

        <div class="row featurette my-3">
            <div class="col-md-7 order-md-2  d-flex align-items-center justify-content-cente">
                <div>
                    <h2 class="featurette-heading">Our Vision : <span class="text-muted">Shaping the Future of
                            Work.</span></h2>
                    <p class="lead">We envision a future where finding the perfect job is a seamless and empowering
                        experience for everyone. We are committed to leveraging technology and innovation to reshape the
                        way people approach their career paths, providing equal opportunities and driving positive
                        change in the world of work.</p>
                </div>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500"
                    src="https://img.freepik.com/free-vector/business-background-design_1200-89.jpg?size=626&ext=jpg&ga=GA1.1.1882095610.1686062107&semt=ais"
                    data-holder-rendered="true" style="width: 500px; height: 500px;">
            </div>
        </div>

        <div class="row featurette my-3">
            <div class="col-md-7 d-flex align-items-center justify-content-cente">
                <div>
                    <h2 class="featurette-heading">Our Values : <span class="text-muted">Transparency, Inclusivity, and
                            Integrity</span></h2>
                    <p class="lead">We uphold the highest standards of transparency, inclusivity, and integrity. We
                        believe in fostering an environment where diversity is celebrated, and all individuals are
                        treated with fairness and respect. Our commitment to ethical practices ensures a trusted and
                        reliable platform for job seekers and employers alike.</p>
                </div>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500"
                    src="https://img.freepik.com/free-vector/choice-worker-concept_23-2148632123.jpg?size=626&ext=jpg&ga=GA1.1.1882095610.1686062107&semt=ais"
                    data-holder-rendered="true" style="width: 500px; height: 500px;">
            </div>
        </div>

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- footer  -->
    <footer class="bg-white p-4 text-muted ">
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
    <script>
        const tooltipTriggerList = document.querySelectorAll( '[data-bs-toggle="tooltip"]' );
        const tooltipList = [ ...tooltipTriggerList ].map( tooltipTriggerEl => new bootstrap.Tooltip( tooltipTriggerEl ) );
    </script>

</html>