<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from new.axilthemes.com/demo/template/abstrak/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Mar 2025 15:46:20 GMT -->
<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> app plans</title>
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

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/styles.css">

</head>

<body class="sticky-header">
<?php
// Database connection
include 'conn.php';
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['message']);
   

    // Insert data into the table
    $sql = "INSERT INTO enguiry (name, email, message) VALUES ('$name','$email','$mesage')";

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
        <!--=        Banner Area Start         =-->
        <!--=====================================-->
        <section class="banner banner-style-4">
            <div class="container">
                <div class="banner-content">
                    <h1 class="title" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">Mobile Apps Development Plans.</h1>
                    <p data-sal="slide-up" data-sal-duration="1000">We adapt to the newly 
                        technology to build you a stunning mobile apps.</p>
                    <div data-sal="slide-up" data-sal-duration="1000" data-sal-delay="200">
                        <a href="portfolio.html" class="axil-btn btn-fill-primary btn-large">View Showcase</a>
                    </div>
                </div>
                <div class="banner-thumbnail">
                    <div class="large-thumb" data-sal="slide-left" data-sal-duration="800" data-sal-delay="400">
                        <img class="paralax-image" src="assets/media/banner/banner-thumb-7.png" alt="Shape">
                    </div>
                </div>
                <div class="banner-social" data-sal="slide-up" data-sal-duration="800">
                    <div class="border-line"></div>
                    <ul class="list-unstyled social-icon">
                        <li><a href="https://facebook.com/"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                        <li><a href="https://twitter.com/"><i class="fab fa-x-twitter"></i> twitter</a></li>
                        <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in "></i> Linkedin</a></li>
                    </ul>
                </div>
            </div>

            <ul class="list-unstyled shape-group-19">
                <li class="shape shape-1" data-sal="slide-down" data-sal-duration="500" data-sal-delay="100">
                    <img src="assets/media/others/bubble-29.png" alt="Bubble">
                </li>
                <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                    <img src="assets/media/others/line-7.png" alt="Bubble">
                </li>
            </ul>
        </section>


          <!--=====================================-->
        <!--=        Pricing Area Start         =-->
        <!--=====================================-->
        <section class="section section-padding">
            <div class="container">
                <div class="section-heading mb-0">
                    <span class="subtitle">Pricing Plan</span>
                    <h2 class="title">Find the Right Plan.</h2>
                    <p>Flexible pricing for individuals  <br> and bussiness.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="pricing-table active pricing-borderd">
                            <div class="pricing-header">
                                <h3 class="title">Basic </h3>
                                <span class="subtitle">A beautiful, simple app for starter bussiness</span>
                                <div class="price-wrap">
                                    <div class="yearly-pricing">
                                        <span class="amount">$200</span>
                                        <span class="duration"></span>
                                    </div>
                                    <div class="monthly-pricing">
                                        <span class="amount">$200</span>
                                        <span class="duration"></span>
                                    </div>
                                </div>
                                <div class="pricing-btn">
                                    <a href="payment.php" class="axil-btn btn-large btn-borderd">Get Started Today</a>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-unstyled">
                                    <li>Platform:</li>
                                    <li>Core Features: </li>
                                    <li>Basic UI/UX Design</li>
                                    <li>Backend Integration</li>
                                    <li>Testing</li>
                                    <li>Post-Launch Support:</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="pricing-table pricing-borderd">
                            <div class="pricing-header">
                                <h3 class="title">Standard</h3>
                                <span class="subtitle">best plan for induvidual 
                                    and small bussiness</span>
                                <div class="price-wrap">
                                    <div class="yearly-pricing">
                                        <span class="amount">$219.99</span>
                                        <span class="duration">/yearly</span>
                                    </div>
                                    <div class="monthly-pricing">
                                        <span class="amount">$700</span>
                                        <span class="duration"></span>
                                    </div>
                                </div>
                                <div class="pricing-btn">
                                    <a href="payment.php" class="axil-btn btn-large btn-borderd">Get Started Today</a>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-unstyled">
                                    <li>include all in basic plan</li>
                                    <li>Up to 10 sreens</li>
                                    <li> Third party integration</li>
                                    <li>Deployment:</li>
                                    <li>Post-Launch Suppor</li>
                                    <li>Basic Scalability</li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="pricing-table pricing-borderd">
                            <div class="pricing-header">
                                <h3 class="title">Ultimate</h3>
                                <span class="subtitle">For bussiness</span>
                                <div class="price-wrap">
                                    <div class="yearly-pricing">
                                        <span class="amount">$350</span>
                                        <span class="duration"></span>
                                    </div>
                                    <div class="monthly-pricing">
                                        <span class="amount">$1500 - $3000</span>
                                        <span class="duration"></span>
                                    </div>
                                </div>
                                <div class="pricing-btn">
                                    <a href="payment.php" class="axil-btn btn-large btn-borderd">Get Started Today</a>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-unstyled">
                                    <li>Include all in standard plan</li>
                                    <li>unlimited sreens</li>
                                    <li>Comprehensive Requirement Analysis</li>
                                    <li>Premium UI/UX Design</li>
                                    <li>Cross-Platform Development</li>
                                    <li>Advanced Testing & QA</li>
                
                                
                                    <li>Scalability & Security</li>
                                    <li>Post-Launch Support</li>
                                    <li>Ongoing Maintenance</li>
                                    <li>Payment Gateway integrations</li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group-3 list-unstyled">
                <li class="shape shape-2"><img src="assets/media/others/bubble-4.png" alt="shape"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=           Faq Area Start         =-->
        <!--=====================================-->
        <section class="section section-padding-equal bg-color-light faq-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-xl-4">
                        <div class="section-heading heading-left">
                            <span class="subtitle">Pricing Plan</span>
                            <h3 class="title">Frequently asked questions</h3>
                            <p>Find answers to common questions about our products/services</p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-xl-8">
                        <div class="faq-accordion">
                            <div class="accordion" id="accordion" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                                <div class="accordion-item">
                                    <h6 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                            1. What services does Bolean Builders offer?
                                        </button>
                                    </h6>
                                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>We specialize in web development, mobile app development, software development, digital marketing, and tech training for individuals and businesses.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h6 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                            2.  Can you build a custom website or app for my business?
                                        </button>
                                    </h6>
                                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Yes! We create fully customized websites, mobile apps, and software tailored to your business needs.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h6 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                            3.  Do you provide training for individuals and organizations?
                                        </button>
                                    </h6>
                                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Yes! We offer hands-on training in web development, mobile app development, and digital marketing for individuals and corporate teams.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h6 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                            4. How long does it take to develop a website or app?
                                        </button>
                                    </h6>
                                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>The timeline depends on the complexity of the project. A basic website may take 1-2 weeks, while a complex app may take a few months.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h6 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                                            5. Do you provide digital marketing services?
                                        </button>
                                    </h6>
                                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Yes! We help businesses grow online through SEO, social media marketing, paid ads, and content marketing.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h6 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                                            6.  Do you offer ongoing support and maintenance?
                                        </button>
                                    </h6>
                                    <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p> Yes! We provide technical support, updates, and maintenance for websites, apps, and software we develop.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group-6 list-unstyled">
                <li class="shape shape-1" data-sal="slide-right" data-sal-duration="800" data-sal-delay="100"><img src="assets/media/others/bubble-7.png" alt="Bubble"></li>
                <li class="shape shape-2" data-sal="slide-down" data-sal-duration="800" data-sal-delay="100"><img src="assets/media/others/line-4.png" alt="line"></li>
                <li class="shape shape-4" data-sal="slide-right" data-sal-duration="800" data-sal-delay="100"><img src="assets/media/others/poses-lady.png" alt="Poses"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=     Call To Action Area Start     =-->
        <!--=====================================-->
        <section class="section call-to-action-area">
            <div class="container">
                <div class="call-to-action">
                    <div class="section-heading heading-light">
                        <span class="subtitle">Let's Work Together</span>
                        <h2 class="title">Need a successful project?</h2>
                        <a href="contact.html" class="axil-btn btn-large btn-fill-white">Estimate Project</a>
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
        <!--=        Contact Area Start       	=-->
        <!--=====================================-->
        <section class="section-padding bg-color-dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6" data-sal="slide-up" data-sal-duration="1000">
                        <div class="contact-address mb--30">
                            <div class="section-heading heading-light-left">
                                <span class="subtitle">Need a developer?</span>
                                <h2 class="title">Let’s Get In Touch</h2>
                            </div>
                            <div class="address-list">
                                <div class="address">
                                    <h6 class="title">Mail</h6>
                                    <p><a href="mailto:example@gmail.com">example@gmail.com</a></p>
                                </div>
                                <div class="address">
                                    <h6 class="title">Address</h6>
                                    <p>kumasi brofroyedru,Kumasi</p>
                                </div>
                                <div class="address">
                                    <h6 class="title">Phone</h6>
                                    <p><a href="tel:+233543973755">+233543973755</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="200">
                        <div class="contact-form-box mb--30">
                            <h3 class="title">lets Discuss your project</h3>
                            <form method="post" action="" class="axil-contact-form">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="John Smith">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="example@mail.com">
                                </div>
                                <div class="form-group mb--40">
                                    <label>How can we help you?</label>
                                    <textarea name="message" id="message" class="form-control textarea" cols="30" rows="6"></textarea>
                                </div>
                                
                                <div class="form-group text-end">
                                    <button type="submit" class="axil-btn btn-fill-primary w-auto btn-primary" name="submit-btn">SEND</button>
                                </div>
                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <!--=====================================-->
        <!--=        Brand Area Start       	=-->
        <!--============================
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
        </section>=========-->
        <!--=====================================-->
        <!--=        Blog Area Start       	    =-->
        <!--=====================================-->
        <section class="section section-padding-equal">
            <div class="container">
                <div class="section-heading">
                    <span class="subtitle">What's Going On</span>
                    <h2 class="title">Latest stories</h2>
                    <p>News From Abstrak And Around The World Of Web Design And Complete Solution of Online Digital Marketing </p>
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
 <!--=====================================-->
        <!--=        Footer Area Start       	=-->
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


<!-- Mirrored from new.axilthemes.com/demo/template/abstrak/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Mar 2025 15:46:22 GMT -->
</html>