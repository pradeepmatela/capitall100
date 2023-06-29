<?php include 'header.php'; ?>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0" style="background-color: rgb(37, 150, 190);">
        

            <div class="container-fluid py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn text-center screen" id="screen"
                                style=" font-family: 'Belanosima', sans-serif; font-size: 140px;">Capitall</h1>
                            <h2 class="text-white pb-3 animated  text-center"
                                style="font-family: 'Belanosima', sans-serif;">Information Technology<br> & Data
                                Analysis</h2>
                            <!-- <a href="" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Free Quote</a>
                            <a href="" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a> -->
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid" src="img/banner2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3"
                                placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->








        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Our Services</h6>
                    <h2 class="mt-2">Solve the Problem</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">

                                <i class="fa-2x bi bi-bar-chart-fill"></i>
                            </div>
                            <h5 class="mb-3">Seamless Single-Point Integration</h5>
                            <p>Integrating Data from multiple sources to facilitate automated analysis and correlations.
                            </p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa-2x bi bi-calendar3-event-fill"></i>
                            </div>
                            <h5 class="mb-3">AI-Powered Real-Time Analysis for Better Data Utilization
                            </h5>
                            <p>Real-time updates & reporting on a single dashboard about internal or external
                                operations.
                            </p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa-2x bi bi-gear"></i>
                            </div>
                            <h5 class="mb-3">Stronger Corporate Governance & Decision Making
                            </h5>
                            <p>A centralized repository for all stakeholders i.e. management, investors, auditors, &
                                regulators</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa-2x fa fa-solid fa-dollar-sign"></i>
                            </div>
                            <h5 class="mb-3"> Customized & Controlled Access </h5>
                            <p>Complete permission control over shared data, even after the transaction has been
                                completed.
                            </p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- Service End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h6 class="position-relative text-primary ps-4">About Us</h6>
                            <h2 class="mt-2">Revenue Model
                            </h2>
                        </div>
                        <p class="mb-4"><span class="fs-4 text-dark">Monthly/Annual Paid Subscription</span>with several
                            multi-utility plans for Business operations & Process Automation, such as:</p>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Due Diligence, </h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Valuation or IPOs, </h6>
                            </div>
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Merger & Acquisitions,
                                </h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Insolvency & Bankruptcy, &
                                    Corporate Governance.
                                </h6>
                            </div>
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Assessing finance &
                                    Real-time control over ITR & Taxes,
                                </h6>

                            </div>

                            <div class="col-sm-6">
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Deficiency Reporting,
                                    Inventory, Assets & Liabilities
                                </h6>
                            </div>

                            <div class="">
                                <p class="m-0"><span class="fs-4 text-dark">Customized Enterprise Solutions
                                    </span></p>
                                <p>Offering tailored solutions for the personalized needs of businesses.</p>
                            </div>

                            <div class="">
                                <p class="m-0"><span class="fs-4 text-dark">Transaction-based model for Premium
                                        Features:

                                    </span></p>
                                <p>Offering Special Modules that analyze Bank Statements, Credit Ratings, Financial
                                    Reporting, Historical Transactional Data, and Derived Operational Management Data,
                                    for an additional fee.
                                </p>
                            </div>


                        </div>

                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/about.jpg" width="100%">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


         <!-- why for capitall -->



        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-6 order-lg-1 order-sm-2">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/datarooms.png" width="100%">
                    </div>
                    <div class="col-lg-6 order-lg-2 order-sm-1 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <!-- <h6 class="position-relative text-primary ps-4">About Us</h6> -->
                            <h2 class="mt-2">Why capitall
                            </h2>
                        </div>
                        <p class="mb-4 text-dark fs-4">Next-Gen Dataroom + DIY Platform to Create, Integrate &
                            Collaborate
                        </p>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>A secure centralized
                                    location for storing and sharing sensitive information,
                                </h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Streamlines business
                                    processes
                                </h6>
                            </div>
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Intuitive & easy to use
                                    dashboard that simplifies data transfer & access

                                </h6>
                                <!-- <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Enhances collaboration
                            </h6> -->
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Provides data analytics &
                                    reporting
                                </h6>
                            </div>
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Intuitive & easy to use
                                    dashboard that simplifies data transfer & access

                                </h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Bird’s eye view for
                                    business leaders for better decision-making.

                                </h6>

                            </div>

                            <div class="col-sm-6">
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Suitable for businesses
                                    regardless of their sector or geographies
                                </h6><br>
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Enhances collaboration
                                </h6>
                            </div>


                            <div class="">
                                <p class="m-0"><span class="fs-4 text-dark">Automate & Streamline Financial Operations
                                        through AI & ML

                                    </span></p>

                            </div>

                            <div class="">
                                <p class="m-0"><span class="fs-4 text-dark">Everything on a single dashboard for
                                        informed decision-making

                                    </span></p>

                            </div>


                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- About End -->



        <!-- end why for capitall -->

        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Our Team</h6>
                    <h2 class="mt-2">Meet Our Team Members</h2>
                </div>
                <div class="row g-4">
                <div class="col-lg-3 col-md-6 p-5 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5"
                                    style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                                <img class="img-fluid rounded w-100" src="img/team-3.jpg" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">ANUJ SOMANI</h5>
                                <small>B.COM. , F.C.A.</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 p-5 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5"
                                    style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                                <img class="img-fluid rounded w-100" src="img/team-3.jpg" alt="">
                            </div> 
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">ANUJ SOMANI</h5>
                                <small>B.COM. , F.C.A.</small>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-lg-3 col-md-6 p-5 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5"
                                    style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                                <img class="img-fluid rounded w-100" src="img/team-3.jpg" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">ANUJ SOMANI</h5>
                                <small>B.COM. , F.C.A.</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 p-5 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5"
                                    style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                                <img class="img-fluid rounded w-100" src="img/team-3.jpg" alt="">
                            </div> 
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">ANUJ SOMANI</h5>
                                <small>B.COM. , F.C.A.</small>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Team End -->


<!-- ** Features Big Item Start ** -->

<div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4"></h6>
                    <h2 class="mt-2">Opportunity in the Market</h2>
                </div>
                <div class="row g-4">

       
                <div class="left-image text-center col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="img/check2.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="right-text  col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix">
                    <ul>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                            <!-- <img src="assets/images/about-icon-01.png" alt=""> -->
                            <div class="text">
                                <p class="fs-4 "><span class=" text-dark">Dataroom is only being used for transactions.</span></p>
                                <p class="fw-bold">It can be used for OPERATIONS as well</p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.5s">
                            <!-- <img src="assets/images/about-icon-02.png" alt=""> -->
                            <div class="text">
                                <p class="fs-4"><span class=" text-dark">Existing platforms are  complex & have  poor infra</span></p>
                                <p class="fw-bold">Opportunity for easy-to-use, diy dataroom with ready-made templates.</p>
                            </div>
                        </li>

                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.6s">
                            <!-- <img src="assets/images/about-icon-03.png" alt=""> -->
                            <div class="text">
                                <p class=""><span class="fs-4 text-dark">Other platforms do not provide data analytics.</span></p>
                                <p class="fw-bold">Opportunity for a SINGLE PLATFORM for everything (Store-Share-Manage-Analyze.)</p>

                            </div>
                        </li>

                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.6s">
                            <!-- <img src="img/about-icon-03.png" alt=""> -->
                            <div class="text">
                                <p class="" ><span class="fs-4 text-dark">No indian dataroom service provider</span></p>
                                <p class="fw-bold">Opportunity for a Dataroom for one of the  fastest growing economy .</p>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
          </div>
    
    <!-- ** Features Big Item End ** -->


        <!-- Testimonial Start -->
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp d-sm-none" data-wow-delay="0.1s">
            <h6 class="position-relative d-inline text-primary ps-4">Our Client</h6>
            <h2 class="mt-2">Meet Our Client</h2>
        </div>
        <div class="container-xxl bg-primary testimonial py-3 wow fadeInUp" data-wow-delay="0.1s">

            <div class="container p-0 m-0">

                <div class="owl-carousel testimonial-carousel p-5 " >
                    <div class="testimonial-item bg-transparent border rounded text-white mr-0"style="width:250px;" >
                        <!-- <i class="fa fa-quote-left fa-2x mb-3"></i> -->
                        <!-- <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p> -->
                        <img src="img/1280px-Patanjali_Logo.svg.png " class="img-fluid flex-shrink-0 rounded mx-auto "
                            style="height: 70px; width: 100px;"alt="">
                        <!-- <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div> -->
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white  " style="width:200px;" >
                        <!-- <i class="fa fa-quote-left fa-2x mb-3"></i> -->

                        <!-- <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p> -->
                        <img src="img/2560px-KPMG_logo.svg.png " class="img-fluid flex-shrink-0 rounded m-0 mx-auto"
                           style="height: 70px; width: 100px;" alt="">

                        <!-- <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div> -->
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white  " style="width:200px;">
                        <!-- <i class="fa fa-quote-left fa-2x mb-3"></i> -->
                        <!-- <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p> -->
                        <img src="img/wingreens.jpg" class="img-fluid flex-shrink-0 rounded mx-auto "
                            style="height:70px; width: 200px;"alt="">

                        <!-- <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div> -->
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white " style="width:200px;">
                        <!-- <i class="fa fa-quote-left fa-2x mb-3"></i> -->
                        <!-- <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p> -->
                        <img src="img/seatransport-logo.png" class="img-fluid flex-shrink-0 rounded mx-auto " style="height: 70px; width: 200px;">

                        <!-- <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div> -->
                    </div>

                </div>
                <div class="text-center mt-5">
                    <h4 class="text-dark fw-bolder">Successful Market Validation
                        using MVP with
                        <span class="fs-1 text-light"><span class="" style="color:orange;">2</span><span
                                class="text-light">5</span><span class="" style="color:green;">0</span>+ users</span>
                        </h3>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <?php include 'footer.php'; ?>