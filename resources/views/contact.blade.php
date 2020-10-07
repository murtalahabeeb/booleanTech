@extends('layout.layout')
@section("title")
<title>BooleanTech| Contact Us</title>
@section('content')

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Sidenav Bar -->
    <section class="sidenav-bar">
        <div class="nav-box">
            <div class="inner-box">
                <div class="upper-box">
                    <div class="btn-box"><button class="close-btn"><span class="fa fa-times"></span></button></div>
                </div>

                <!-- .Side Nav -->
                <nav class="side-nav">
                    <ul class="navigation clearfix" id="nav">
                        <li class=""><a href="/">Home</a>
                            
                        </li>
                        <li class="dropdown"><a href="/about-us">About</a>
                            <ul>
                                <li><a href="/about-us">About Us</a></li>
                                
                                
                                <li><a href="/teams">Team</a></li>
                                
                            </ul>
                        </li>
                        <li class="dropdown"><a href="/services">Services</a>
                            <ul>
                            <li><a href="/services">All Services</a></li>
                                <li><a href="/web-dev">Web Development</a></li>
                                <li><a href="/ios-dev">Iphone App Development</a></li>
                                <li><a href="/android-dev">Android App Development</a></li>
                                <li><a href="/ui-ux">UI/UX Design And Prototyping</a></li>
                                <li><a href="/seo-digital-marketing">Digital Marketing & SEO</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Products</a>
                            <ul>
                                <li><a href="#">Resulta-School Management System</a></li>
                                <li><a href="#">Face Analyser-Skin Care Assistant</a></li>
                                
                            </ul>
                        </li>
                        
                        <li class="current"><a href="/contact-us">Contact</a></li>
                    </ul> 
                </nav><!-- /.Side-menu -->

                <div class="contact-info-box">
                    <!--Info Box-->
                    <div class="info-box">
                        <div class="icon-box"><span class="fa fa-home"></span></div>
                        <p>Independence Avenue<br> Abuja,  CBD,</p>
                    </div>

                    <!--Info Box-->
                    <div class="info-box">
                        <div class="icon-box"><span class="far fa-clock"></span></div>
                        <p>Mon - Fri: 09:00 - 18:00</p>
                        <p>Sunday --- Close</p>
                    </div>

                    <!--Info Box-->
                    <div class="info-box">
                        <div class="icon-box"><span class="far fa-envelope"></span></div>
                        <p><a href="tel:+234-909-426-7360">+234 909 426 7360</a></p>
                        <p><a href="tel:+234-902-208-1910">+234 902 208 1910</a></p>
                        <p><a href="mailto:info@thebooleantech.com.ng">info@thebooleantech.com.ng</a></p>
                        <p><a href="mailto:thebooleantech@gmail.com">thebooleantech@gmail.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Sidenav Bar -->
    
    <!-- Start Main Content -->
    <main id="content">

        <!-- Header Span -->
        <span class="header-span"></span>

        <!-- Main Header-->
        <header class="main-header header-style-two">
            <div class="outer-container">
                <div class="main-box clearfix">
                    <div class="logo-box">
                        <div class="logo"><a href="/"><img src="/assets/images/logo.png" alt="" title=""></a></div>
                    </div>

                    <div class="nav-outer">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class=" dropdown"><a href="/">Home</a>
                                       
                                    </li>
                                    <li class="dropdown"><a href="/about-us">About</a>
                                        <ul>
                                            <li><a href="/about-us">About Us</a></li>
                                            
                                           
                                            <li><a href="/teams">Team</a></li>
                                            
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="/services">Services</a>
                                        <ul>
                                        <li><a href="/services">All Services</a></li>
                                        <li><a href="/web-dev">Web Development</a></li>
                                        <li><a href="/ios-dev">Iphone App Development</a></li>
                                        <li><a href="/android-dev">Android App Development</a></li>
                                        <li><a href="/ui-ux">UI/UX Design And Prototyping</a></li>
                                        <li><a href="/seo-digital-marketing">Digital Marketing & SEO</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Products</a>
                                        <ul>
                                            <li><a href="#">Resulta-School Management System</a></li>
                                            <li><a href="#">Face Analyser-Skin Care Assistant</a></li>
                                            
                                        </ul>
                                    </li>
                                    <li class="current"><a href="/contact-us">Contact</a></li>
                                </ul> 

                            </div>
                        </nav>
                        <!-- Main Menu End-->

                        <div class="outer-box clearfix">
                            <!-- Shoppping Car -->
                            
                            <!-- Search Btn -->
                            <div class="search-box">
                                <button class="search-btn"><i class="fa fa-search"></i></button>
                            </div>

                            <!-- Btn box -->
                            <div class="btn-box no-touch"><button class="nav-toggler"><span></span></button></div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </header>
        <!--End Main Header -->

        <!-- Search Popup -->
        <div class="search-popup">
            <button class="close-search"><span class="fa fa-long-arrow-alt-up"></span></button>
            <form method="post" action="http://ary-themes.com/html/sinaea/blog.html">
                @csrf
                <div class="form-group">
                    <input type="search" name="search-field" value="" placeholder="Search" required="">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
        <!-- End Search Popup -->

        <!--Page Title-->
        <section class="page-title" style="background-image:url(/assets/images/background/5.jpg)">
            <div class="auto-container">
                <h2>Contact Us</h2>
                <ul class="page-breadcrumb">
                    <li><a href="/">home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </section>
        <!--End Page Title-->

        <!-- Contact Page Section -->
        <section class="contact-page-section">
            <div class="auto-container">
                <div class="sec-title">
                    <span class="float-text">Contact</span>
                    <h2>Contact <span>Us</span></h2>
                </div>
                <div class="row clearfix">

                    <div class="contact-column col-lg-4 col-md-12 col-sm-12 order-2">
                        <div class="inner-column">
                            <div class="text">We look forward to hearing more about your needs and making your next software project a success. Contact us now and we guarantee to get back to you as soon as possible.</div>
                            <ul class="contact-info">
                                <li>
                                    <span class="icon fa fa-map-marker-alt"></span> 
                                    <p><strong>Independence Avenue,</strong></p>
                                    <p> CBD, Abuja.</p>
                                </li>

                                <li>
                                    <span class="icon fa fa-phone-volume"></span> 
                                    <p><strong>Call Us</strong></p>
                                    <p><a href="tel:+234-909-426-7360">+234 909 426 7360</a></p>
                                    <p><a href="tel:+234-902-208-1910">+234 902 208 1910</a></p>
                                </li>

                                <li>
                                    <span class="icon fa fa-envelope"></span> 
                                    <p><strong>Mail Us</strong></p>
                                    <p><a href="mailto:info@thebooleantech.com.ng">info@thebooleantech.com.ng</a></p>
                                    <p><a href="mailto:thebooleantech@gmail.com">thebooleantech@gmail.com</a></p>
                                </li>

                                <li>
                                    <span class="icon fa fa-clock"></span> 
                                    <p><strong>Opening Time</strong></p>
                                    <p>Mon - Fri: 09:00 - 18:00</p>
                                </li>
                            </ul>

                            <ul class="social-icon-two">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Form Column -->
                    <div class="form-column col-lg-8 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="contact-form">
                                <form method="post" action="http://ary-themes.com/html/sinaea/sendemail.php" id="contact-form">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="username" placeholder="Name" required="">
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="phone" placeholder="Phone" required="">
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="email" name="email" placeholder="Email" required="">
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="subject" placeholder="Subject" required="">
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Submit Now</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Contact Page Section -->

        <!-- Map Section -->
        <section class="map-section">
            <div class="auto-container">
                <div class="map-outer">
                    <div class="map-canvas"
                        data-zoom="12"
                        data-lat="-37.817085"
                        data-lng="144.955631"
                        data-type="roadmap"
                        data-hue="#ffc400"
                        data-title="Envato"
                        data-icon-path="/assets/images/icons/map-marker.png"
                        data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                    </div>
                </div>
            </div>
        </section>
        <!-- End Map Section -->

        <!-- Clients Section -->
        <section class="clients-section">
            <div class="auto-container">
                <div class="sponsors-outer">
                    <!--Sponsors Carousel-->
                    <ul class="sponsors-carousel owl-carousel owl-theme">
                        <li class="slide-item"><figure class="image"><a href="#"><img src="/assets/images/clients/1.png" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image"><a href="#"><img src="/assets/images/clients/2.png" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image"><a href="#"><img src="/assets/images/clients/3.png" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image"><a href="#"><img src="/assets/images/clients/4.png" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image"><a href="#"><img src="/assets/images/clients/5.png" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image"><a href="#"><img src="/assets/images/clients/1.png" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image"><a href="#"><img src="/assets/images/clients/2.png" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image"><a href="#"><img src="/assets/images/clients/3.png" alt=""></a></figure></li>
                    </ul>
                </div>
            </div>        
        </section>
        <!-- End Clients Section -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="auto-container">
                    <div class="row">
                        <!--Big Column-->
                        <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                <!--Footer Column-->
                                <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget about-widget">
                                        <div class="logo">
                                            <a href="/"><img src="/assets/images/logo.png" alt="" /></a>
                                        </div>
                                        <div class="text">
                                            <p>We are a boutique consultation firm that specialize in building great customer experiences through mobile, web and conversational software..</p>           
                                        </div>
                                        <ul class="social-icon-two">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!--Footer Column-->
                                <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <!--Footer Column-->
                                    <div class="footer-widget recent-posts">
                                        <h2 class="widget-title">Latest News</h2>
                                         <!--Footer Column-->
                                        <div class="widget-content">
                                            <div class="post">
                                                <h4><a href="blog-single.html">We won the award for best factory of the year 2019.</a></h4>
                                                <span class="date"><span class="far fa-calendar-alt"></span> August 1, 2019</span>
                                            </div>

                                            <div class="post">
                                                <h4><a href="blog-single.html">We are Best for Industrial and Business Solution.</a></h4>
                                                <span class="date"><span class="far fa-calendar-alt"></span> August 2, 2019</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Big Column-->
                        <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                <!--Footer Column-->
                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget useful-links">
                                        <h2 class="widget-title">Useful Links</h2>
                                        <ul class="user-links">
                                            <li><a href="/">Home</a></li>
                                            <li><a href="/about-us">About Us</a></li>
                                            <li><a href="/services">Services</a></li>
                                            <li><a href="/projects">Projects</a></li>
                                            <li><a href="/contact-us">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!--Footer Column-->
                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <!--Footer Column-->
                                    <div class="footer-widget contact-widget">
                                        <h2 class="widget-title">Contact Us</h2>
                                         <!--Footer Column-->
                                        <div class="widget-content">
                                            <ul class="contact-list">
                                                <li>
                                                    <span class="icon flaticon-clock"></span>
                                                    <div class="text">Mon - Fri: 09:00 - 18:00</div>
                                                </li>

                                                <li>
                                                    <span class="icon flaticon-call-1"></span>
                                                    <div class="text"><a href="tel:+234-909-426-7360">+234 909 426 7360</a></div>
                                                </li>
                                                <li>
                                                    <span class="icon flaticon-call-1"></span>
                                                    <div class="text"><a href="tel:+234-902-208-1910">+234 902 208 1910</a></div>
                                                </li>

                                                <li>
                                                    <span class="icon flaticon-paper-plane"></span>
                                                    <div class="text"><a href="mailto:info@thebooleantech.com.ng">info@thebooleantech.com.ng</a></div>
                                                </li>
                                                <li>
                                                    <span class="icon flaticon-paper-plane"></span>
                                                    <div class="text"><a href="mailto:thebooleantech@gmail.com">thebooleantech@gmail.com</a></div>
                                                </li>

                                                <li>
                                                    <span class="icon flaticon-worldwide"></span>
                                                    <div class="text">Independence Avenue, CBD, Abuja.</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Footer Bottom-->
            <div class="footer-bottom">                    
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <div class="footer-nav">
                            <ul class="clearfix">
                               <li><a href="#">Privacy Policy</a></li> 
                               <li><a href="#">Contact</a></li> 
                               <li><a href="#">Supplier</a></li>  
                            </ul>
                        </div>
                        
                        <div class="copyright-text">
                            <p>© Copyright 2020 -<a href="/">The Boolean Tech</a> All Rights Reserved. </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

    </main>
    <!-- End Main Content -->
</div>

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!-- Color Palate / Color Switcher -->
<div class="color-palate">
    <div class="color-trigger">
        <i class="fa fa-cog"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Your Color</h6>
    </div>
    <div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file="/assets/css/color-themes/default-theme.css"></span>
            <span class="palate green-color" data-theme-file="/assets/css/color-themes/green-theme.css"></span>
            <span class="palate blue-color" data-theme-file="/assets/css/color-themes/blue-theme.css"></span>
            <span class="palate orange-color" data-theme-file="/assets/css/color-themes/orange-theme.css"></span>
            <span class="palate purple-color" data-theme-file="/assets/css/color-themes/purple-theme.css"></span>
            <span class="palate teal-color" data-theme-file="/assets/css/color-themes/teal-theme.css"></span>
            <span class="palate brown-color" data-theme-file="/assets/css/color-themes/brown-theme.css"></span>
            <span class="palate redd-color" data-theme-file="/assets/css/color-themes/redd-color.css"></span>
        </div>
    </div>
    <div class="lower-options">
        <h5>RTL Supported</h5>
        <ul class="rtl-version option-box"> <li class="active">LTR</li> <li class="rtl">RTL</li> </ul>
    </div>
    <div class="palate-foo">
        <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>
    </div>
    <a href="#" class="purchase-btn">Purchase now!</a>
</div><!-- End Color Switcher -->

