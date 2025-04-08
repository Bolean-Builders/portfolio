<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from new.axilthemes.com/demo/template/abstrak/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Mar 2025 15:45:00 GMT -->
<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bolean Builders</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/media/brand/mum.jpg">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/vendor/sal.css">
    <link rel="stylesheet" href="assets/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/vendor/green-audio-player.min.css">
    <link rel="stylesheet" href="assets/css/vendor/odometer-theme-default.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="assets/css/app.css">

    <style>

        /* Default logo sizes (desktop) */



        .contact {
    position: fixed;
    right: 20px; /* Adjust as needed */
    bottom: 20px; /* Keeps it at the bottom */
    z-index: 1000; /* Ensures it's above other elements */
    margin-bottom: 100px;
}

.whatsapp img {
    width: 50px; /* Adjust size */
    height: 50px;
    border-radius: 50%; /* Makes it round */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease-in-out;
}

.whatsapp img:hover {
    transform: scale(1.1);
}
.why-choose-us {
      padding: 80px 0;
      background-color: #f8f9fa;
    }

    .why-choose-us h2 {
      text-align: center;
      font-size: 2.5rem;
      font-weight: bold;
      color: #343a40;
      margin-bottom: 40px;
    }

    .why-choose-us .row {
      display: flex;
      justify-content: center;
      gap: 30px;
    }

    .why-choose-us .card {
      border: none;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
      background-color: #ffffff;
      padding: 30px;
      transition: transform 0.3s ease-in-out;
    }

    .why-choose-us .card:hover {
      transform: translateY(-10px);
    }

    .why-choose-us .card-icon {
      font-size: 3rem;
      color: #007bff;
      margin-bottom: 20px;
    }

    .why-choose-us .card h4 {
      font-size: 1.6rem;
      font-weight: bold;
      color: #343a40;
    }

    .why-choose-us .card p {
      font-size: 1rem;
      color: #6c757d;
      margin-top: 10px;
    }

    /* Media Query for Responsiveness */
    @media (max-width: 768px) {
      .why-choose-us h2 {
        font-size: 2rem;
      }
      .why-choose-us .card {
        width: 100%;
      }
    }
    </style>

</head>

<body class="sticky-header">



 <?php
// Database connection
include 'conn.php';
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
   

    // Insert data into the table
    $sql = "INSERT INTO request (name, email, phone) VALUES ('$name','$email','$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Quote Requested Successfully!',
                    text: 'Your Quote Request has been successfully submitted.',
                    text: 'we will get back to you soon.',
                    confirmButtonText: 'OK'
                });
              </script>";
    } else {
        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Submission Failed',
                    text: 'Error: " . $conn->error . "',
                    confirmButtonText: 'OK'
                });
              </script>";
    }

    $conn->close();
}
?>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->
    <a href="#main-wrapper" id="backto-top" class="back-to-top">
        <i class="far fa-angle-double-up"></i>
    </a>

    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->

    <div class="my_switcher d-none d-lg-block">
        <ul>
            <li title="Light Mode">
                <a href="javascript:void(0)" class="setColor light" data-theme="light">
                    <i class="fal fa-lightbulb-on"></i>
                </a>
            </li>
            <li title="Dark Mode">
                <a href="javascript:void(0)" class="setColor dark" data-theme="dark">
                    <i class="fas fa-moon"></i>
                </a>
            </li>
        </ul>
    </div>

    <div id="main-wrapper" class="main-wrapper">

        <!--=====================================-->
        <!--=        Header Area Start       	=-->
        <!--=====================================-->
        <header class="header axil-header header-style-1">
            <div id="axil-sticky-placeholder"></div>
            <div class="axil-mainmenu">
                <div class="container">
                    <div class="header-navbar">
                        <div class="header-logo">
                            <a href="index.php"><img class="light-version-logo" src="assets/media/brand/mum.jpg" width="80px" height="40px" alt="logo"></a>
                            <a href="index.php"><img class="dark-version-logo"src="assets/media/brand/mum.jpg" width="100px" height="60px" alt="logo"></a>
                            <a href="index.php"><img class="sticky-logo" src="assets/media/brand/mum.jpg" width="100px" height="60px" alt="logo"></a>
                        </div>
                        <div class="header-main-nav">
                            <!-- Start Mainmanu Nav -->
                            <nav class="mainmenu-nav" id="mobilemenu-popup">
                                <div class="d-block d-lg-none">
                                    <div class="mobile-nav-header">
                                        <div class="mobile-nav-logo">
                                            <a href="index.php">
                                                <img class="light-mode" src="assets/media/brand/mum.jpg" width="100px" height="60px" alt="Site Logo">
                                                <img class="dark-mode" src="assets/media/brand/mum.jpg" width="100px" height="60px" alt="Site Logo">
                                            </a>
                                        </div>
                                        <button class="mobile-menu-close" data-bs-dismiss="offcanvas"><i class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <ul class="mainmenu">
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Pricing</a>
                                        <ul class="axil-submenu">
                                            <li><a href="webplans.php">Web Plans</a></li>
                                            <li><a href="app-plans.php">Apps Plans</a></li>
                                            <li><a href="softplans.php">Software Plans</a></li>
                                            <li><a href="index-4.php">D M plans</a></li>
                                            <li><a href="seo-plans.php">S E O Plans</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Services</a>
                                        <ul class="axil-submenu">
                                        <li><a href="web-development.php">Web Development</a></li>
                                            <li><a href="app-dev.php">Mobile Apps</a></li>
                                            <li><a href="soft-dev.php">Software Solution</a></li>
                                            <li><a href="seo.php">SEO</a></li>
                                            <li><a href="dm.php">Digital Marketing</a></li>
                                            <li><a href="itsupport.php">I T Supports</a></li>
                                            <li><a href="training.php">Training</a></li>
                                        </ul>
                                    </li>
                                   
                                    <li><a href="portfolio.php">porfolio</a></li>

                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Pages</a>
                                        <ul class="axil-submenu">
                                            <li><a href="about-us.php">About Us</a>
                                            <li><a href="job.php">Job</a></li>
                                            <li><a href="case-study.php">Case Study</a></li>

                                            <li><a href="team.php"> Our Team</a></li>
                                            
                                            <li><a href="our-clients.php">Our Clients</a></li>
                                            <li><a href="testimonial.php">Testimonial</a></li>
                                           <!-- <li><a href="pricing-table.html">Pricing Table</a></li>
                                            <li><a href="typography.html">Typography</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                            <li><a href="coming-soon.html">Coming Soon</a></li>-->
                                        </ul>
                                    </li>
                                    <li><a href="single-blog-gallery.php">blog</a></li>
                                    </li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </nav>
                            <!-- End Mainmanu Nav -->
                        </div>
                        <div class="header-action">
                            <ul class="list-unstyled">
                                <li class="sidemenu-btn d-lg-block d-none">
                                    
                                </li>
                                <li class="mobile-menu-btn sidemenu-btn d-lg-none d-block">
                                    <button class="btn-wrap" data-bs-toggle="offcanvas" data-bs-target="#mobilemenu-popup">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </li>
                                <li class="my_switcher d-block d-lg-none">
                                    <ul>
                                        <li title="Light Mode">
                                            <a href="javascript:void(0)" class="setColor light" data-theme="light">
                                                <i class="fal fa-lightbulb-on"></i>
                                            </a>
                                        </li>
                                        <li title="Dark Mode">
                                            <a href="javascript:void(0)" class="setColor dark" data-theme="dark">
                                                <i class="fas fa-moon"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--=====================================-->
        <!--=        Banner Area Start         =-->
        <!--=====================================-->
        <section class="banner banner-style-1">
            <div class="container">
                <div class="row align-items-end align-items-xl-start">
                    <div class="col-lg-6">
                        <div class="banner-content" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                            <h1 class="title">Innovate, Code And Transform.</h1>
                            <span class="subtitle">We design cutting-edge apps, websites, and software tailored to your needs. Our expert digital marketing and training services help businesses and individuals stay ahead in the digital world. Let’s build something amazing together.</span>
                            <a href="contact.php" class="axil-btn btn-fill-primary btn-large">Write To Us</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-thumbnail">
                            <div class="large-thumb" data-sal="zoom-in" data-sal-duration="800" data-sal-delay="300">
                                <img src="assets/media/banner/window.png" alt="Laptop">
                            </div>
                            <div class="large-thumb-2" data-sal="slide-left" data-sal-duration="800" data-sal-delay="800">
                                <img src="assets/media/banner/" alt="Laptop">
                            </div>
                            <ul class="list-unstyled shape-group">
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-21">
                <li class="shape shape-1" data-sal="slide-down" data-sal-duration="500" data-sal-delay="100">
                    <img src="assets/media/others/bubble-39.png" alt="Bubble">
                </li>
                <li class="shape shape-2" data-sal="zoom-in" data-sal-duration="800" data-sal-delay="500">
                    <img src="assets/media/others/bubble-38.png" alt="Bubble">
                </li>
                <li class="shape shape-3" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                    <img src="assets/media/others/bubble-14.png" alt="Bubble">
                </li>
                <li class="shape shape-4" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                    <img src="assets/media/others/bubble-14.png" alt="Bubble">
                </li>
                <li class="shape shape-5" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                    <img src="assets/media/others/bubble-14.png" alt="Bubble">
                </li>
                <li class="shape shape-6" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                    <img src="assets/media/others/bubble-40.png" alt="Bubble">
                </li>
                <li class="shape shape-7" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                    <img src="assets/media/others/bubble-41.png" alt="Bubble">
                </li>
            </ul>
        </section>




        <!--=====================================-->
        <!--=        Service Area Start         =-->
        <!--=====================================-->
        <section class="section section-padding-2 bg-color-dark">
            <div class="container">
                <div class="section-heading heading-light-left">
                    <span class="subtitle">What We Can Do For You</span>
                    <h2 class="title">Services We Can Help You With</h2>
<p class="opacity-50">No hassle. We provide smooth and efficient solutions with a strong focus on effectiveness and ease of implementation.</p>

                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="services-grid active">
                            <div class="thumbnail">
                                <img src="assets/media/icon/web-icon.png" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="web-development.php"> Web Design</a></h5>
                                <p>Responsive, user-friendly websites tailored to your brand, ensuring seamless experiences across all devices and captivating your audience from the first click.</p>
                                <a href="web-development.php" class="more-btn">Find out more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="services-grid">
                            <div class="thumbnail">
                                <img src="assets/media/icon/flutter.png" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="app-dev.php"> App Development</a></h5>
                                <p>Sleek, high-performance mobile apps for iOS and Android, designed to engage users, enhance 
                                    functionality, and deliver exceptional experiences on the go.</p>
                                <a href="app-dev.php" class="more-btn">Find out more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="services-grid">
                            <div class="thumbnail">
                                <img src="assets/media/icon/soft-icon.png" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="soft-dev.php">Software Developmment</a></h5>
                                <p>Custom software solutions to streamline your operations
                                     built to optimize workflows, boost productivity, and scale with your business needs.</p>
                                <a href="soft-dev.php" class="more-btn">Find out more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="services-grid">
                            <div class="thumbnail">
                                <img src="assets/media/icon/seo-icon.png" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="seo.php"> SEO </a></h5>
                                <p>Optimized performance and ongoing support, ensuring your digital 
                                    presence stays fast, secure, and ahead of the competition.</p>
                                <a href="seo.php" class="more-btn">Find out more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="services-grid">
                            <div class="thumbnail">
                                <img src="assets/media/icon/dm-icon.png" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="dm.php">Digital Marketing</a></h5>
                                <p>Data-driven strategies to amplify your online presence, including SEO, social media marketing, PPC, and content
                                     marketing to attract, engage, and convert your target audience.</p>
                                <a href="dm.php" class="more-btn">Find out more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="services-grid">
                            <div class="thumbnail">
                                <img src="assets/media/icon/icon-6.png" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="training.php">Training</a></h5>
                                <p>Comprehensive training programs for individuals and teams, equipping you with the latest skills in web development, app creation, software tools, and digital marketing to stay ahead in the tech-driven world.</p>
                                <a href="training.php" class="more-btn">Find out more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-10">
                <li class="shape shape-1"><img src="assets/media/others/line-9.png" alt="Circle"></li>
                <li class="shape shape-2"><img src="assets/media/others/bubble-42.png" alt="Circle"></li>
                <li class="shape shape-3"><img src="assets/media/others/bubble-43.png" alt="Circle"></li>
            </ul>
        </section>




    <!--=  ==========      About Area Start ==========        =-->
        <!--=====================================-->
        <section class="section section-padding-equal bg-color-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6" data-sal="slide-up" data-sal-duration="800">
                        <div class="about-us">
                            <div class="section-heading heading-left mb-0">
                                <span class="subtitle">About Us</span>
                                <h2 class="title mb--40">We do design, code & develop.</h2>
                                <p>
                                    we are a team of passionate innovators specializing in web development, app creation, software solutions, and digital marketing. With a focus on creativity, technology, and client success, we deliver tailored solutions that drive growth, enhance user experiences, and 
                                    transform ideas into reality. Let’s build the future together! </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 offset-xl-1" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="contact-form-box">
                            <h3 class="title">Request A Call Back</h3>
                    
                            </h3>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="John Smith">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="example@mail.com">
                                </div>
                                <div class="form-group mb--40">
                                    <label>Phone</label>
                                    <input type="tel" class="form-control" name="phone" placeholder="your phone">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="axil-btn btn-fill-primary btn-fluid btn-primary" name="submit-btn">Request Now</button>
                                </div>
                                <input type="hidden" class="form-control" name="contact-message" value="Null">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group-6 list-unstyled">
                <li class="shape shape-1"><img src="assets/media/others/bubble-7.png" alt="Bubble"></li>
                <li class="shape shape-2"><img src="assets/media/others/line-4.png" alt="line"></li>
                <li class="shape shape-3"><img src="assets/media/others/line-5.png" alt="line"></li>
            </ul>
        </section>

        <!--=====================================-->
        <!--=       Case Study Area Start       =-->
        <!--=====================================-->
            <!--=====================================-->
               <!--=====================================-->
        <!--=        Project Area Start         =-->
        <!--=====================================-
        <section class="section section-padding-2">
            <div class="container">
                <div class="section-heading heading-left mb--40">
                    <span class="subtitle">Our Project</span>
                    <h2 class="title">Some of our <br> finest work.</h2>
                </div>
                <div class="axil-isotope-wrapper">
                    <div class="isotope-button isotope-project-btn">
                        <button data-filter="*" class="is-checked"><span class="filter-text">All Works</span></button>
                        <button data-filter=".branding"><span class="filter-text">Branding</span></button>
                        <button data-filter=".mobile"><span class="filter-text">Mobile</span></button>
                    </div>
                    <div class="row row-35 isotope-list">
                        <div class="col-md-6 project branding">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <img src="assets/media/project/project-1.png" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Creative Agency</a></h4>
                                    <span class="subtitle">Full Branding, Website, App</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project mobile">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <img src="assets/media/project/project-2.png" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Digital Marketing</a></h4>
                                    <span class="subtitle">Logo, Website & Mobile App</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project branding">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <img src="assets/media/project/project-3.png" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Digital Agency</a></h4>
                                    <span class="subtitle">Website, UI/UX</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project mobile">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <img src="assets/media/project/project-4.png" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Plan Management</a></h4>
                                    <span class="subtitle">Branding, Website, IOS App</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project branding">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <img src="assets/media/project/project-5.png" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Social Engagement</a></h4>
                                    <span class="subtitle">Design, Development</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project mobile">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <img src="assets/media/project/project-6.png" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Web Application</a></h4>
                                    <span class="subtitle">Logo, Webapp, App</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group-7 list-unstyled">
                <li class="shape shape-1"><img src="assets/media/others/circle-2.png" alt="circle"></li>
                <li class="shape shape-2"><img src="assets/media/others/bubble-2.png" alt="Line"></li>
                <li class="shape shape-3"><img src="assets/media/others/bubble-1.png" alt="Line"></li>
            </ul>
        </section>-===================---->

        <!-- Why Choose Us Section -->
  <section class="why-choose-us" id="why-choose-us">
    <div class="container">
      <h2>Why Choose Us?</h2>
      <div class="row">
        <!-- Card 1: Expertise & Innovation -->
        <div class="col-md-4">
          <div class="card">
            <div class="card-icon">
              <i class="fas fa-cogs"></i> <!-- Gear Icon for Expertise & Innovation -->
            </div>
            <h4>Expertise & Innovation</h4>
            <p>We bring cutting-edge solutions and years of expertise to build your digital products.</p>
          </div>
        </div>

        <!-- Card 2: Client-Centric Approach -->
        <div class="col-md-4">
          <div class="card">
            <div class="card-icon">
              <i class="fas fa-user-friends"></i> <!-- Users Icon for Client-Centric -->
            </div>
            <h4>Client-Centric Approach</h4>
            <p>We listen to your needs, customize solutions, and ensure satisfaction at every step.</p>
          </div>
        </div>

        <!-- Card 3: Timely Delivery -->
        <div class="col-md-4">
          <div class="card">
            <div class="card-icon">
              <i class="fas fa-clock"></i> <!-- Clock Icon for Timely Delivery -->
            </div>
            <h4>Timely Delivery</h4>
            <p>We ensure timely delivery of projects while maintaining high standards of quality.</p>
          </div>
        </div>

        <!-- New Card 4: Affordable Price -->
        <div class="col-md-4">
          <div class="card">
            <div class="card-icon">
              <i class="fas fa-tags"></i> <!-- Price Tag Icon for Affordable Price -->
            </div>
            <h4>Affordable Price</h4>
            <p>We offer high-quality solutions at competitive prices, ensuring value for money.</p>
          </div>
        </div>

        <!-- New Card 5: 24/7 Customer Service -->
        <div class="col-md-4">
          <div class="card">
            <div class="card-icon">
              <i class="fas fa-headset"></i> <!-- Headset Icon for 24/7 Customer Service -->
            </div>
            <h4>24/7 Customer Service</h4>
            <p>Our dedicated support team is available round the clock to assist you anytime.</p>
          </div>
        </div>

        <!-- New Card 6: Responsive Design -->
        <div class="col-md-4">
          <div class="card">
            <div class="card-icon">
              <i class="fas fa-mobile-alt"></i> <!-- Mobile Icon for Responsive Design -->
            </div>
            <h4>Responsive Design</h4>
            <p>Our websites, apps, and software are fully responsive across all devices.</p>
          </div>
        </div>


         <!-- New Card 7: Advanced Technology -->
         <div class="col-md-4">
          <div class="card">
            <div class="card-icon">
              <i class="fas fa-laptop-code"></i> <!-- Laptop Code Icon for Advanced Technology -->
            </div>
            <h4>Advanced Technology</h4>
            <p>We leverage the latest technologies to build future-proof solutions for your business.</p>
          </div>
        </div>

        <!-- New Card 8: Money-Back Guarantee -->
        <div class="col-md-4">
          <div class="card">
            <div class="card-icon">
              <i class="fas fa-money-bill-wave"></i> <!-- Money Bill Icon for Money-Back Guarantee -->
            </div>
            <h4>Money-Back Guarantee</h4>
            <p>We offer a risk-free experience with our money-back guarantee on select services.</p>
          </div>
        </div>
      </div>
      </section>

        <!--=====================================-->
        <!--=        Counter Up Area Start      =-->
        <!--=====================================-->



        <section class="section section-padding bg-color-dark">
            <div class="container">
                <div class="section-heading heading-light">
                    <span class="subtitle">Featured Case Study</span>
                    <h2 class="title">Design startup movement</h2>
                    <p></p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="counterup-progress active">
                            <div class="icon">
                                <img src="assets/media/icon/icon-7.png" alt="Apple">
                            </div>
                            <div class="count-number h2">
                                <span class="number count" data-count="2">2</span>
                                <span class="symbol">+</span>
                            </div>
                            <h6 class="title">Years of operation</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="counterup-progress">
                            <div class="icon">
                                <img src="assets/media/icon/icon-8.png" alt="Apple">
                            </div>
                            <div class="count-number h2">
                                <span class="number count" data-count="360">360</span>
                                <span class="symbol">+</span>
                            </div>
                            <h6 class="title">Projects deliverd</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="counterup-progress">
                            <div class="icon">
                                <img src="assets/media/icon/icon-9.png" alt="Apple">
                            </div>
                            <div class="count-number h2">
                                <span class="number count" data-count="600">600</span>
                                <span class="symbol">+</span>
                            </div>
                            <h6 class="title">Happy Clients</h6>
                        </div>
                    </div>
                    
                </div>
            </div>
            <ul class="list-unstyled shape-group-10">
                <!-- <li class="shape shape-1"><img src="assets/media/others/line-9.png" alt="Circle"></li> -->
                <li class="shape shape-2"><img src="assets/media/others/bubble-42.png" alt="Circle"></li>
                <li class="shape shape-3"><img src="assets/media/others/bubble-43.png" alt="Circle"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=        Testimonial Area Start      =-->
        <!--==========================
        <section class="section section-padding">
            <div class="container">
                <div class="section-heading heading-left">
                    <span class="subtitle">Testimonial</span>
                    <h2 class="title">From getting started</h2>
                    <p>Nulla facilisi. Nullam in magna id dolor blandit rutrum eget vulputate augue sed eu leo eget risus imperdiet.</p>
                </div>
                <div class="row">
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                        <div class="testimonial-grid active">
                            <span class="social-media"><img src="assets/media/icon/yelp-2.png" alt="Yelp"></span>
                            <p>“ Donec metus lorem, vulputate
                                at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. ”</p>
                            <div class="author-info">
                                <div class="thumb">
                                    <img src="assets/media/testimonial/testimonial-1.png" alt="Google Review">
                                </div>
                                <div class="content">
                                    <span class="name">Darrell Steward</span>
                                    <span class="designation">Executive Chairman</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="200">
                        <div class="testimonial-grid">
                            <span class="social-media"><img src="assets/media/icon/google-2.png" alt="google"></span>
                            <p>“ Donec metus lorem, vulputate
                                at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. ”</p>
                            <div class="author-info">
                                <div class="thumb">
                                    <img src="assets/media/testimonial/testimonial-2.png" alt="Google Review">
                                </div>
                                <div class="content">
                                    <span class="name">Savannah Nguyen</span>
                                    <span class="designation">Executive Chairman</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300">
                        <div class="testimonial-grid">
                            <span class="social-media"><img src="assets/media/icon/fb-2.png" alt="Facebook"></span>
                            <p>“ Donec metus lorem, vulputate
                                at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. ”</p>
                            <div class="author-info">
                                <div class="thumb">
                                    <img src="assets/media/testimonial/testimonial-3.png" alt="Google Review">
                                </div>
                                <div class="content">
                                    <span class="name">Floyd Miles</span>
                                    <span class="designation">Executive Chairman</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group-4 list-unstyled">
                <li class="shape-1"><img src="assets/media/others/bubble-1.png" alt="Bubble"></li>
            </ul>
        </section>========-------->
        <!--=====================================-->
        <!--=        Pricing Area Start       	=-->
        <!--===================
        <section class="section bg-color-light section-padding">
            <div class="container">
                <div class="section-heading mb-0">
                    <span class="subtitle">Pricing Plan</span>
                    <h2 class="title">Find the Right Plan.</h2>
                    <p>Flexible pricing options for freelancers <br> and design teams.</p>
                </div>
                <div class="pricing-billing-duration">
                    <ul>
                        <li class="nav-item">
                            <button class="nav-link" id="yearly-plan-btn" type="button">Billed yearly</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link active" id="monthly-plan-btn" type="button">
                                Billed monthly</button>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="pricing-table active">
                            <div class="pricing-header">
                                <h3 class="title">Professional</h3>
                                <span class="subtitle">A beautiful, simple website</span>
                                <div class="price-wrap">
                                    <div class="yearly-pricing">
                                        <span class="amount">$119.99</span>
                                        <span class="duration">/yearly</span>
                                    </div>
                                    <div class="monthly-pricing">
                                        <span class="amount">$19.00</span>
                                        <span class="duration">/monthly</span>
                                    </div>
                                </div>
                                <div class="pricing-btn">
                                    <a href="#" class="axil-btn btn-large btn-borderd">Get Started Today</a>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-unstyled">
                                    <li>10 Pages Responsive Website</li>
                                    <li>5 PPC Campaigns</li>
                                    <li>10 SEO Keywords</li>
                                    <li>5 Facebook Camplaigns</li>
                                    <li>2 Video Camplaigns</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="pricing-table">
                            <div class="pricing-header">
                                <h3 class="title">Standard</h3>
                                <span class="subtitle">Small Team</span>
                                <div class="price-wrap">
                                    <div class="yearly-pricing">
                                        <span class="amount">$219.99</span>
                                        <span class="duration">/yearly</span>
                                    </div>
                                    <div class="monthly-pricing">
                                        <span class="amount">$29.00</span>
                                        <span class="duration">/monthly</span>
                                    </div>
                                </div>
                                <div class="pricing-btn">
                                    <a href="#" class="axil-btn btn-large btn-borderd">Get Started Today</a>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-unstyled">
                                    <li>50 Pages Responsive Website</li>
                                    <li>Unlimited PPC Campaigns</li>
                                    <li>Unlimited SEO Keywords</li>
                                    <li>Unlimited Facebook Camplaigns</li>
                                    <li>Unlimited Video Camplaigns</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="pricing-table">
                            <div class="pricing-header">
                                <h3 class="title">Ultimate</h3>
                                <span class="subtitle">Large Team</span>
                                <div class="price-wrap">
                                    <div class="yearly-pricing">
                                        <span class="amount">$559.99</span>
                                        <span class="duration">/yearly</span>
                                    </div>
                                    <div class="monthly-pricing">
                                        <span class="amount">$59.00</span>
                                        <span class="duration">/monthly</span>
                                    </div>
                                </div>
                                <div class="pricing-btn">
                                    <a href="#" class="axil-btn btn-large btn-borderd">Get Started Today</a>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-unstyled">
                                    <li>10 Pages Responsive Website</li>
                                    <li>5 PPC Campaigns</li>
                                    <li>10 SEO Keywords</li>
                                    <li>5 Facebook Camplaigns</li>
                                    <li>2 Video Camplaigns</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group-3 list-unstyled">
                <li class="shape shape-1"><img src="assets/media/others/line-1.png" alt="shape"></li>
                <li class="shape shape-2"><img src="assets/media/others/bubble-4.png" alt="shape"></li>
            </ul>
        </section>==================-->



        <!--=====================================-->
        <!--=        Brand Area Start       	=-->
        <!--============



        <section class="section section-padding bg-color-dark">
            <div class="container">
                <div class="section-heading heading-light-left">
                    <span class="subtitle">Top Clients</span>
                    <h2 class="title">We’ve built solutions for...</h2>
                    <p>Design anything from simple icons to fully featured websites and applications.</p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500">
                        <div class="brand-grid active">
                            <img src="assets/media/brand/brand-1.png" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100">
                        <div class="brand-grid">
                            <img src="assets/media/brand/brand-2.png" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="200">
                        <div class="brand-grid">
                            <img src="assets/media/brand/brand-3.png" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                        <div class="brand-grid">
                            <img src="assets/media/brand/brand-4.png" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="400">
                        <div class="brand-grid">
                            <img src="assets/media/brand/brand-5.png" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="500">
                        <div class="brand-grid">
                            <img src="assets/media/brand/brand-6.png" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="600">
                        <div class="brand-grid">
                            <img src="assets/media/brand/brand-7.png" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="700">
                        <div class="brand-grid">
                            <img src="assets/media/brand/brand-8.png" alt="Brand">
                        </div>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-10">
                <li class="shape shape-1"><img src="assets/media/others/line-9.png" alt="Circle"></li>
            </ul>
        </section>=========================-->
        <!--=====================================-->
        <!--=        Blog Area Start       	    =-->
        <!--=====================================-->
        <section class="section section-padding-equal">
            <div class="container">
                <div class="section-heading">
                    <span class="subtitle">What's Going On</span>
                    <h2 class="title">Latest stories</h2>
                    <p>News From Bolean Builders And Around The World Of Web Design And Complete Solution of Online Digital Marketing </p>
                </div>
                <div class="row g-0">
                    <div class="col-xl-6" data-sal="slide-right" data-sal-duration="800" data-sal-delay="100">
                        <div class="blog-list active">
                            <div class="post-thumbnail">
                                <a href="single-blog-2.html"><img src="assets/media/blog/blog-1.png" alt="Blog Post"></a>
                            </div>
                            <div class="post-content">
                                <h5 class="title"><a href="single-blog-2.html">How To Use a Remarketing Strategy To Get More</a></h5>
                                <p>Demand generation is a constant struggle for any business. Each marketing strategy you employ has...</p>
                                <a href="single-blog-2.html" class="more-btn">Learn more<i class="far fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6" data-sal="slide-left" data-sal-duration="800" data-sal-delay="100">
                        <div class="blog-list border-start">
                            <div class="post-thumbnail">
                                <a href="single-blog-3.html"><img src="assets/media/blog/blog-2.png" alt="Blog Post"></a>
                            </div>
                            <div class="post-content">
                                <h5 class="title"><a href="single-blog-3.html">SEO Statistics You Should Know in 2021</a></h5>
                                <p>Organic search has the potential to capture more than 40 percent of your gross revenue...</p>
                                <a href="single-blog-3.html" class="more-btn">Learn more<i class="far fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group-1 list-unstyled">
                <li class="shape shape-1"><img src="assets/media/others/bubble-1.png" alt="bubble"></li>
                <li class="shape shape-2"><img src="assets/media/others/line-1.png" alt="bubble"></li>
                <li class="shape shape-3"><img src="assets/media/others/line-2.png" alt="bubble"></li>
                <li class="shape shape-4"><img src="assets/media/others/bubble-2.png" alt="bubble"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=     Call To Action Area Start     =-->
        <!--=====================================-->
        <!--=====================================-->
        <!--=     Call To Action Area Start     =-->
        <!--=====================================-->
        <section class="section call-to-action-area">
            <div class="container">
                <div class="call-to-action">
                    <div class="section-heading heading-light">
                        <span class="subtitle">Let's Work Together</span>
                        <h2 class="title">Need a successful project?</h2>
                        <a href="contact.php" class="axil-btn btn-large btn-fill-white">Estimate Project</a>
                    </div>
                    <div class="thumbnail">
                        <div class="larg-thumb" data-sal="zoom-in" data-sal-duration="600" data-sal-delay="100">
                            <img class="paralax-image" src="assets/media/others/chat-group.png" alt="Chat">
                        </div>
                        <ul class="list-unstyled small-thumb">
                            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="800" data-sal-delay="400">
                                <img class="paralax-image" src="assets/media/others/laptop-poses.png" alt="Laptop">
                            </li>
                            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="800" data-sal-delay="300">
                                <img class="paralax-image" src="assets/media/others/bill-pay.png" alt="Bill">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-9">
                <li class="shape shape-1"><img src="assets/media/others/bubble-12.png" alt="Comments"></li>
                <li class="shape shape-2"><img src="assets/media/others/bubble-16.png" alt="Comments"></li>
                <li class="shape shape-3"><img src="assets/media/others/bubble-13.png" alt="Comments"></li>
                <li class="shape shape-4"><img src="assets/media/others/bubble-14.png" alt="Comments"></li>
                <li class="shape shape-5"><img src="assets/media/others/bubble-16.png" alt="Comments"></li>
                <li class="shape shape-6"><img src="assets/media/others/bubble-15.png" alt="Comments"></li>
                <li class="shape shape-7"><img src="assets/media/others/bubble-16.png" alt="Comments"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=        Footer Area Start       	=-->
        <!--=====================================-->
        <footer class="footer-area">
            <div class="container">
                <div class="footer-top">
                    <div class="footer-social-link">
                        <ul class="list-unstyled">
                            <li><a href="https://facebook.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="200"><i class="fab fa-x-twitter"></i></a></li>
                            <li><a href="https://www.pinterest.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="https://www.linkedin.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="400"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="https://www.instagram.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="500"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://vimeo.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="600"><i class="fab fa-vimeo-v"></i></a></li>
                            <li><a href="https://dribbble.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="700"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="https://www.behance.net/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="800"><i class="fab fa-behance"></i></a></li>
                            <li><a href="https://www.snapchat.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="800"><i class="fab fa-snapchat-ghost"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-main">
                    <div class="row">
                        <div class="col-xl-6 col-lg-5" data-sal="slide-right" data-sal-duration="800" data-sal-delay="100">
                            <div class="footer-widget border-end">
                                <div class="footer-newsletter">
                                    <h2 class="title">Subscribe To Our Newsletter</h2>
                                    <p>Get latest update like discount and new courese right in your mail</p>
                                    <form>
                                        <div class="input-group">
                                            <input type="email" class="form-control" placeholder="Email address">
                                            <button class="subscribe-btn" type="submit">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7" data-sal="slide-left" data-sal-duration="800" data-sal-delay="100">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="footer-widget">
                                        <h6 class="widget-title">Services</h6>
                                        <div class="footer-menu-link">
                                            <ul class="list-unstyled">
                                                
                                                <li><a href="web-development.php">Website Development</a></li>
                                                <li><a href="app-dev.php">Mobile App Development</a></li>
                                                <li><a href="seo.php">Search Engine Optimization</a></li>
                                                <li><a href="soft-dev.php">Software Development</a></li>
                                               
                                
                                                <li><a href="dm.php">Digital Marketing</a></li>
                                                <li><a href="training.php">Training</a></li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="footer-widget">
                                        <h6 class="widget-title">Resourses</h6>
                                        <div class="footer-menu-link">
                                            <ul class="list-unstyled">
                                                <li><a href="blog.php">Blog</a></li>
                                                <li><a href="case-study.php">Case Studies</a></li>
                                                <li><a href="portfolio.php">Portfolio</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="footer-widget">
                                        <h6 class="widget-title">Support</h6>
                                        <div class="footer-menu-link">
                                            <ul class="list-unstyled">
                                                <li><a href="contact.php">Contact</a></li>
                                                <li><a href="privacy-policy.php">Privacy Policy</a></li>
                                                <li><a href="terms-of-use.php">Terms of Use</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-copyright">
                                <span class="copyright-text">© 2025. All rights reserved by <a href="https://boleanbuilders.com/">Bolean Builders</a>.</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-bottom-link">
                                <ul class="list-unstyled">
                                    <li><a href="privacy-policy.php">Privacy Policy</a></li>
                                    <li><a href="terms-of-use.php">Terms of Use</a></li>
                                    <li><a href="refund.php">Refund Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <div class="contact">
            <a href="https://wa.me/233543973755" class="whatsapp">
                <img src="./assets/media/wat.webp" alt="WhatsApp" />
            </a>
        </div>
        

        <!--=====================================-->
        <!--=       Offcanvas Menu Area       	=-->
        <!--=====================================-->
        <div class="offcanvas offcanvas-end header-offcanvasmenu" tabindex="-1" id="offcanvasMenuRight">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form action="#" class="side-nav-search-form">
                    <div class="form-group">
                        <input type="text" class="search-field" name="search-field" placeholder="Search...">
                        <button class="side-nav-search-btn"><i class="fas fa-search"></i></button>
                    </div>
                </form>
                <div class="row ">
                    <div class="col-lg-5 col-xl-6">
                        <ul class="main-navigation list-unstyled">
                            <li><a href="index-1.html">Digital Agency</a></li>
                            <li><a href="index-2.html">Creative Agency</a></li>
                            <li><a href="index-3.html">Personal Portfolio</a></li>
                            <li><a href="index-4.html">Home Startup</a></li>
                            <li><a href="index-5.html">Corporate Agency</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-xl-6">
                        <div class="contact-info-wrap">
                            <div class="contact-inner">
                                <address class="address">
                                    <span class="title">Contact Information</span>
                                    <p>Theodore Lowe, Ap #867-859 <br> Sit Rd, Azusa New York</p>
                                </address>
                                <address class="address">
                                    <span class="title">We're Available 24/7. Call Now.</span>
                                    <a class="tel" href="tel:8884562790"><i class="fas fa-phone"></i>(888)
                                        456-2790</a>
                                    <a class="tel" href="tel:12125553333"><i class="fas fa-fax"></i>(121)
                                        255-53333</a>
                                </address>
                            </div>
                            <div class="contact-inner">
                                <h5 class="title">Find us here</h5>
                                <div class="contact-social-share">
                                    <ul class="social-share list-unstyled">
                                        <li><a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://twitter.com/"><i class="fab fa-x-twitter"></i></a></li>
                                        <li><a href="https://www.behance.net/"><i class="fab fa-behance"></i></a></li>
                                        <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery Js -->
    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/isotope.pkgd.min.js"></script>
    <script src="assets/js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/vendor/odometer.min.js"></script>
    <script src="assets/js/vendor/jquery-appear.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/sal.js"></script>
    <script src="assets/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/vendor/js.cookie.js"></script>
    <script src="assets/js/vendor/jquery.style.switcher.js"></script>
    <script src="assets/js/vendor/jquery.countdown.min.js"></script>
    <script src="assets/js/vendor/tilt.js"></script>
    <script src="assets/js/vendor/green-audio-player.min.js"></script>
    <script src="assets/js/vendor/jquery.nav.js"></script>

    <!-- Site Scripts -->
    <script src="assets/js/app.js"></script>
</body>



</html>