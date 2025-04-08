<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from new.axilthemes.com/demo/template/abstrak/service-design.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Mar 2025 15:46:33 GMT -->
<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> boleanbuilders| Web Development</title>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="assets/css/app.css">
    

    <style>

.hero-section {
      background-image: url('https://via.placeholder.com/1920x600'); /* Replace with your actual image */
      background-size: cover;
      background-position: center;
      color: white;
      padding: 80px 0;
      text-align: center;
      position: relative;
    }
    
    .hero-section::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0, 0, 0, 0.4);
      z-index: 1;
    }

    .hero-content {
      z-index: 2;
    }

    .hero-section h1 {
      font-size: 3.5rem;
      font-weight: 600;
    }

    .hero-section p {
      font-size: 1.2rem;
      margin-bottom: 30px;
    }

    .service-card {
      background-color: white;
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .service-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .service-icon {
      font-size: 3rem;
      color: #007bff;
      margin-bottom: 20px;
    }

    .service-title {
      font-size: 1.8rem;
      font-weight: 600;
      margin-bottom: 20px;
      color: #333;
    }

    .service-description {
      font-size: 1rem;
      color: #555;
      text-align: justify;
    }

    .contact-section {
      background-color: #343a40;
      color: white;
      padding: 60px 0;
      text-align: center;
    }

    .contact-section h2 {
      font-size: 2.5rem;
      margin-bottom: 30px;
    }

    .contact-section p {
      font-size: 1.2rem;
      margin-bottom: 40px;
    }

    .btn-contact {
      background-color: #007bff;
      color: white;
      font-weight: bold;
      padding: 15px 30px;
      border-radius: 5px;
      text-decoration: none;
    }

    /* Media Query for responsiveness */
    @media (max-width: 768px) {
      .hero-section h1 {
        font-size: 2rem;
      }
      .hero-section p {
        font-size: 1rem;
      }
    }
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
                            <a href="index.php"><img class="light-version-logo" src="assets/media/brand/mum.jpg" width="100px" height="60px" alt="logo"></a>
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
        <!--=       Breadcrumb Area Start       =-->
        <!--=====================================-->
        <div class="breadcrum-area breadcrumb-banner">
            <div class="container">
                <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
                    <h1 class="title h2">Web Solutions  For Bussiness & Individuals</h1>
                    <p>Give your business a website that stand out from the crowd. We’ll create custom website for your company.</p>
                </div>
                <div class="banner-thumbnail" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
                    <img class="paralax-image" src="assets/media/banner/banner-thumb-4.png" alt="Illustration">
                </div>
            </div>
            <ul class="shape-group-8 list-unstyled">
                <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                    <img src="assets/media/others/bubble-9.png" alt="Bubble">
                </li>
                <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                    <img src="assets/media/others/bubble-21.png" alt="Bubble">
                </li>
                <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                    <img src="assets/media/others/line-4.png" alt="Line">
                </li>
            </ul>
        </div>





        <!-- Hero Section -->
  
  <!-- What We Offer Section -->
  <section id="services" class="py-5">
    <div class="container text-center">
      <h2 class="fw-bold mb-4">What We Offer</h2>
      <p class="text-muted mb-5">Our web development services are designed to create impactful digital experiences that boost your business.</p>

      <!-- Web Development Service Cards -->
      <div class="row justify-content-center">
        <!-- Custom Websites -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="service-card">
            <div class="service-icon">
              <i class="fas fa-laptop-code"></i>
            </div>
            <h5 class="service-title">Custom Websites</h5>
            <p class="service-description">
              We specialize in creating bespoke websites that represent your brand, engage your audience, and drive conversions. Whether you need a simple portfolio site or a complex business website, we have the expertise to deliver a user-friendly, responsive design tailored to your unique needs.
            </p>
          </div>
        </div>

        <!-- Web Apps -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="service-card">
            <div class="service-icon">
              <i class="fas fa-app-store"></i>
            </div>
            <h5 class="service-title">Web Applications</h5>
            <p class="service-description">
              We develop sophisticated web applications that provide powerful functionality and streamline your business processes. Our web apps are secure, scalable, and designed to be highly interactive, ensuring an optimal user experience across all devices.
            </p>
          </div>
        </div>

        <!-- E-commerce Platforms -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="service-card">
            <div class="service-icon">
              <i class="fas fa-shopping-cart"></i>
            </div>
            <h5 class="service-title">E-commerce Development</h5>
            <p class="service-description">
              We build robust and scalable e-commerce websites that deliver seamless shopping experiences. Our e-commerce solutions include custom integrations, secure payment gateways, and a fully responsive design to ensure your online store performs flawlessly across all devices.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Technologies We Use Section -->
  <section class="py-5">
    <div class="container text-center">
      <h2 class="fw-bold mb-4">Technologies We Use</h2>
      <p class="text-muted mb-5">Our team leverages the latest technologies to ensure your website is modern, scalable, and secure.</p>
      <div class="row">
        <div class="col-md-3 mb-3">
          <img src="https://via.placeholder.com/150x150" alt="HTML5" class="img-fluid">
          <p>HTML5</p>
        </div>
        <div class="col-md-3 mb-3">
          <img src="https://via.placeholder.com/150x150" alt="CSS3" class="img-fluid">
          <p>CSS3</p>
        </div>
        <div class="col-md-3 mb-3">
          <img src="https://via.placeholder.com/150x150" alt="JavaScript" class="img-fluid">
          <p>JavaScript</p>
        </div>
        <div class="col-md-3 mb-3">
          <img src="https://via.placeholder.com/150x150" alt="React" class="img-fluid">
          <p>React</p>
        </div>
      </div>
    </div>
  </section>
        <!--=====================================-->
        <!--=       Why Choose Area Start       =-->
        <!--=====================================-->






        <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="why-choose-us">
                            <div class="section-heading heading-left">
                                <span class="subtitle">About Us</span>
                                <h3 class="title">Why branding matters?</h3>
                                <p>Ut condimentum enim nec diam convallis mollis. Sed felis quam, semper dapibus purus sed, rhoncus ullamcorper lacus.</p>
                            </div>
                            <div class="accordion" id="choose-accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="far fa-compress"></i> Strategy
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#choose-accordion">
                                        <div class="accordion-body">
                                            Aenean hendrerit laoreet vehicula. Nullam convallis augue at enim gravida pellentesque.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="far fa-code"></i>Design
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#choose-accordion">
                                        <div class="accordion-body">
                                            Aenean hendrerit laoreet vehicula. Nullam convallis augue at enim gravida pellentesque.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fal fa-globe"></i>Development
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#choose-accordion">
                                        <div class="accordion-body">
                                            Aenean hendrerit laoreet vehicula. Nullam convallis augue at enim gravida pellentesque.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 offset-xl-1">
                        <div class="contact-form-box shadow-box mb--30">
                            <h3 class="title">Get a free Keystroke quote now</h3>
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
                                    <button type="submit" class="axil-btn btn-fill-primary btn-fluid" name="submit-btn">Get Pricing Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=       Work Process Area Start     =-->
        <!--=====================================-->
       
        <!--=====================================-->
        <!--=     Featured Project Area Start   =-->
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>


<!-- Mirrored from new.axilthemes.com/demo/template/abstrak/service-design.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Mar 2025 15:46:35 GMT -->
</html>