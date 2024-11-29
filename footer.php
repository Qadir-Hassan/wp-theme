
<?php
/**
 * Footer Template
 * @package surfa
 */

 ?>
        <!-- Footer Section Start -->
         <?php wp_footer(); ?>
        <section class="footer-section footer-bg fix">
            <div class="container">
                <div class="footer-widgets-wrapper">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <a href="index.html">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/logo/white-logo.svg" alt="img">
                                    </a>
                                </div>
                                <div class="footer-content">
                                    <p>
                                        Phasellus ultricies aliquam volutpat 
                                        ullamcorper laoreet neque, a lacinia
                                        curabitur lacinia mollis
                                    </p>
                                    <div class="social-icon d-flex align-items-center">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".4s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h3>Quick Links</h3>
                                </div>
                                <ul class="list-area">
                                    <li>
                                        <a href="about.html">
                                            <i class="fa-solid fa-chevrons-right"></i>
                                            Digtek About
                                        </a>
                                    </li>
                                    <li>
                                        <a href="service.html">
                                            <i class="fa-solid fa-chevrons-right"></i>
                                            Our Services
                                        </a>
                                    </li>
                                    <li>
                                        <a href="news.html">
                                            <i class="fa-solid fa-chevrons-right"></i>
                                            Our Blogs
                                        </a>
                                    </li>
                                    <li>
                                        <a href="faq.html">
                                            <i class="fa-solid fa-chevrons-right"></i>
                                            FAQ’S
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contact.html">
                                            <i class="fa-solid fa-chevrons-right"></i>
                                            Contact Us
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h3>Recent Posts</h3>
                                </div>
                                <div class="recent-post-area">
                                    <div class="recent-post-items">
                                        <div class="thumb">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/img/news/pp1.jpg" alt="post-img">
                                        </div>
                                        <div class="content">
                                            <ul class="post-date">
                                                <li>
                                                    <i class="fa-solid fa-calendar-days me-2"></i>
                                                    20 Feb, 2024
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="news-details.html">
                                                    Top 5 Most Famous <br>
                                                    Technology Trend In 2024
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="recent-post-items mb-0">
                                        <div class="thumb">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/img/news/pp2.jpg" alt="post-img">
                                        </div>
                                        <div class="content">
                                            <ul class="post-date">
                                                <li>
                                                    <i class="fa-solid fa-calendar-days me-2"></i>
                                                    15 Dec, 2024
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="news-details.html">
                                                    The Surfing Man Will Blow <br>
                                                    Your Mind   
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 ps-xl-5 wow fadeInUp" data-wow-delay=".8s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h3>Contact Us</h3>
                                </div>
                                <div class="footer-content">
                                    <ul class="contact-info">
                                        <li>
                                            <i class="fa-regular fa-envelope"></i>
                                            <a href="mailto:info@example.com">info@example.com</a>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-phone-volume"></i>
                                            <a href="tel:2086660112">+208-666-0112</a>
                                        </li>
                                    </ul>
                                    <div class="footer-input">
                                        <input type="email" id="email2" placeholder="Your email address">
                                        <button class="newsletter-btn" type="submit">
                                            <i class="fa-regular fa-arrow-right-long"></i>
                                        </button>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            I agree to the <a href="contact.html">Privacy Policy.</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-wrapper d-flex align-items-center justify-content-between">
                        <p class="wow fadeInLeft color-2" data-wow-delay=".3s">
                            © All Copyright 2024 by Digtek
                        </p>
                        <ul class="footer-menu wow fadeInRight" data-wow-delay=".5s">
                            <li>
                                <a href="contact.html">
                                    Terms & Condition       
                                </a>
                            </li>
                            <li>
                                <a href="contact.html">
                                    Privacy Policy
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="#" id="scrollUp" class="scroll-icon">
                    <i class="far fa-arrow-up"></i>
                </a>
            </div>
        </section>
        
        <!--<< All JS Plugins >>-->
        <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery-3.7.1.min.js"></script>
        <!--<< Viewport Js >>-->
        <script src="<?php echo get_template_directory_uri();?>/assets/js/viewport.jquery.js"></script>
        <!--<< Bootstrap Js >>-->
        <script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.bundle.min.js"></script>
        <!--<< Nice Select Js >>-->
        <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.nice-select.min.js"></script>
        <!--<< Waypoints Js >>-->
        <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.waypoints.js"></script>
        <!--<< Counterup Js >>-->
        <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.counterup.min.js"></script>
        <!--<< Swiper Slider Js >>-->
        <script src="<?php echo get_template_directory_uri();?>/assets/js/swiper-bundle.min.js"></script>
        <!--<< MeanMenu Js >>-->
        <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.meanmenu.min.js"></script>
        <!--<< Magnific Popup Js >>-->
        <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.magnific-popup.min.js"></script>
        <!--<< Wow Animation Js >>-->
        <script src="<?php echo get_template_directory_uri();?>/assets/js/wow.min.js"></script>
        <!--<< Circle Progress Js >>-->
        <script src="<?php echo get_template_directory_uri();?>/assets/js/circle-progress.js"></script>
        <!--<< Main.js >>-->
        <script src="<?php echo get_template_directory_uri();?>/assets/js/main.js"></script>
    </body>
</html>