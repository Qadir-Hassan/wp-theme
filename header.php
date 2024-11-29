
<?php
/**
 * Header Template
 * @package surfa
 */

 ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <!--<< Header Area >>-->
    <head>
        <!-- ========== Meta Tags ========== -->
        <meta charset=<?php bloginfo('charset'); ?>>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Gramentheme">
        <meta name="description" content="Digtek - Digital Marketing Agency Html Template">
        <!-- ======== Page title ============ -->
        <title>Digtek - Digital Marketing Agency Html Template</title>
        <!--<< Favcion >>-->
        <link rel="shortcut icon" href="<?php get_template_directory_uri();?>/assets/img/favicon.svg">
        <!--<< Bootstrap min.css >>-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css">
        <!--<< All Min Css >>-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/all.min.css">
        <!--<< Animate.css >>-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/animate.css">
        <!--<< Icomoon.css >>-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/icomoon.css">
        <!--<< Magnific Popup.css >>-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/magnific-popup.css">
        <!--<< MeanMenu.css >>-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/meanmenu.css">
        <!--<< Swiper Bundle.css >>-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/swiper-bundle.min.css">
        <!--<< Nice Select.css >>-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/nice-select.css">
        <!--<< Color.css >>-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/color.css">
        <!--<< Main.css >>-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/main.css">

        <?php wp_head(); ?>
    </head>
    <body >

        <!-- Preloader Start -->
        <div id="preloader" class="preloader">
            <div class="animation-preloader">
                <div class="spinner">                
                </div>
                <div class="txt-loading">
                    <span data-text-preloader="D" class="letters-loading">
                        D
                    </span>
                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
                    <span data-text-preloader="G" class="letters-loading">
                        G
                    </span>
                    <span data-text-preloader="T" class="letters-loading">
                        T
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="K" class="letters-loading">
                        K
                    </span>
                </div>
                <p class="text-center">Loading</p>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Back To Top Start -->
        <button id="back-top" class="back-to-top">
            <i class="fa-regular fa-arrow-up"></i>
        </button>

        <!--<< Mouse Cursor Start >>-->  
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

        <!-- Offcanvas Area Start -->
        <div class="fix-area">
            <div class="offcanvas__info">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">
                        <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo">
                                <a href="index.html">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/logo/black-logo.svg " alt="logo-img">
                                </a>
                            </div>
                            <div class="offcanvas__close">
                                <button>
                                <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <p class="text d-none d-xl-block">
                            Nullam dignissim, ante scelerisque the  is euismod fermentum odio sem semper the is erat, a feugiat leo urna eget eros. Duis Aenean a imperdiet risus.
                        </p>
                        <div class="mobile-menu fix mb-3"></div>
                        <div class="offcanvas__contact">
                            <h4>Contact Info</h4>
                            <ul>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#">Main Street, Melbourne, Australia</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="mailto:info@example.com"><span class="mailto:info@example.com">info@example.com</span></a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-clock"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="tel:+11002345909">+11002345909</a>
                                    </div>
                                </li>
                            </ul>
                            <div class="header-button mt-4">
                                
                            </div>
                            <div class="main-button">
                                <a href="contact.html"> <span class="theme-btn"> Get Started </span><span class="arrow-btn"><i class="fa-regular fa-arrow-up-right"></i></span></a>
                            </div>
                            <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas__overlay"></div>

        <!-- Header Section Start -->
        <header id="header-sticky" class="header-1">
            <div class="container-fluid">
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <div class="logo">
                            <a href="index.html" class="header-logo">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/logo/white-logo.svg" alt="logo-img">
                            </a>
                            <a href="index.html" class="header-logo-2">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/logo/black-logo.svg" alt="logo-img">
                            </a>
                        </div>
                        <div class="mean__menu-wrapper">
                            <div class="main-menu">
                               <?php 
                                wp_nav_menu( array(
                                    'theme_location' => 'primary-menu',
                                    'container'      => 'nav',
                                    'container_class'=> 'custom-container-class',
                                    'container_id'   => 'mobile-menu',
                                  ) );
                               ?>
                            </div>
                        </div>
                        <div class="header-right d-flex justify-content-end align-items-center">
                            <a href="#0" class="search-trigger search-icon"><i class="fa-regular fa-magnifying-glass"></i></a>
                            <div class="main-button">
                                <a href="contact.html"> <span class="theme-btn"> Get Started </span><span class="arrow-btn"><i class="fa-regular fa-arrow-up-right"></i></span></a>
                            </div>
                            <div class="header__hamburger d-xl-none my-auto">
                                <div class="sidebar__toggle">
                                    <i class="fas fa-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Search Area Start -->
        <div class="search-wrap">
            <div class="search-inner">
                <i class="fas fa-times search-close" id="search-close"></i>
                <div class="search-cell">
                    <form method="get">
                        <div class="search-field-holder">
                            <input type="search" class="main-search-input" placeholder="Search...">
                        </div>
                    </form>
                </div>
            </div>
        </div>