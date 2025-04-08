<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



    
    <link rel="stylesheet" href="assets/css/app.css">

    <style>


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


.footer-area {
    padding-top: 10px;
}

.footer-top {
    padding-bottom: 70px;
}

@media only screen and (max-width: 991px) {
    .footer-top {
        padding-bottom: 50px;
    }
}

.footer-social-link ul {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    margin: 0 -5px;
}

.footer-social-link ul li a {
    color: var(--color-gray-3);
    font-size: 30px;
    padding: 5px;
}

@media only screen and (max-width: 991px) {
    .footer-social-link ul li a {
        font-size: 20px;
    }
}

.footer-social-link ul li a:hover {
    color: var(--color-link);
}

.footer-widget {
    margin-bottom: 80px;
}

@media only screen and (max-width: 767px) {
    .footer-widget {
        margin-bottom: 50px;
    }
}

.footer-widget .widget-title {
    font-weight: 700;
}

.footer-widget.border-end {
    border-right-color: var(--color-ghost) !important;
    padding-right: 80px;
    margin-right: 40px;
}

@media only screen and (max-width: 1199px) {
    .footer-widget.border-end {
        border: none !important;
        padding-right: 0;
        margin-right: 0;
    }
}

.footer-newsletter .title {
    margin-bottom: 20px;
    letter-spacing: -0.045em;
}

.footer-menu-link ul {
    margin: -8px 0;
}

.footer-menu-link li a {
    color: var(--color-body);
    padding: 8px 0;
    font-size: 18px;
    line-height: 1.5;
}

@media only screen and (max-width: 991px) {
    .footer-menu-link li a {
        font-size: 16px;
    }
}

.footer-menu-link li a:hover {
    color: var(--color-link);
}

.footer-bottom {
    border-top: 1px solid var(--color-ghost);
    padding: 25px 0;
}

@media only screen and (max-width: 767px) {
    .footer-copyright {
        text-align: center;
        margin-bottom: 10px;
    }
}

.footer-copyright .copyright-text {
    color: var(--color-gray-1);
}

.footer-copyright .copyright-text a {
    color: var(--color-gray-1);
}

.footer-copyright .copyright-text a:hover {
    color: var(--color-primary);
}

.footer-bottom-link {
    text-align: right;
}

@media only screen and (max-width: 767px) {
    .footer-bottom-link {
        text-align: center;
    }
}

.footer-bottom-link ul {
    margin: 0 -20px;
}

.footer-bottom-link ul li {
    padding: 0 20px;
    display: inline-block;
    position: relative;
}

.footer-bottom-link ul li::after {
    content: "";
    height: 4px;
    width: 4px;
    background-color: var(--color-gray-4);
    border-radius: 50%;
    position: absolute;
    top: 53%;
    right: -5px;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
}

.footer-bottom-link ul li:last-child::after {
    display: none;
}

.footer-bottom-link ul li a {
    color: var(--color-gray-1);
}

.footer-bottom-link ul li a:hover {
    color: var(--color-link);
}

.footer-dark {
    background-color: var(--color-dark);
    padding-top: 0;
}

.footer-dark .footer-bottom {
    border-top-color: var(--color-body);
}

.footer-dark .footer-copyright .copyright-text {
    color: var(--color-gray-2);
}

.footer-dark .footer-copyright .copyright-text a {
    color: var(--color-gray-2);
}

.footer-dark .footer-copyright .copyright-text a:hover {
    color: var(--color-white);
}

.footer-dark .footer-bottom-link ul li a {
    color: var(--color-gray-2);
}

.footer-dark .footer-bottom-link ul li a:hover {
    color: var(--color-primary);
}

.footer-dark .footer-bottom-link ul li:after {
    background-color: var(--color-gray-2);
}

    </style>
</head>
<body>
    



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
                                                
                                                <li><a href="wed-development.html">Website Development</a></li>
                                                <li><a href="app-dev.html">Mobile App Development</a></li>
                                                <li><a href="seo.html">Search Engine Optimization</a></li>
                                                <li><a href="soft-dev.html">Software Development</a></li>
                                               
                                
                                                <li><a href="dm.html">Digital Marketing</a></li>
                                                <li><a href="training.html">Training</a></li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="footer-widget">
                                        <h6 class="widget-title">Resourses</h6>
                                        <div class="footer-menu-link">
                                            <ul class="list-unstyled">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="case-study.html">Case Studies</a></li>
                                                <li><a href="portfolio.html">Portfolio</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="footer-widget">
                                        <h6 class="widget-title">Support</h6>
                                        <div class="footer-menu-link">
                                            <ul class="list-unstyled">
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                                <li><a href="terms-of-use.html">Terms of Use</a></li>
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
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="terms-of-use.html">Terms of Use</a></li>
                                    <li><a href="refund.html">Refund Policy</a></li>
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

</body>
</html>