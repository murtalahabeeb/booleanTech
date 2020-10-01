@extends('layout.layout')

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
                        <li class="dropdown"><a href="/index">Home</a>
                            <ul>
                                <li><a href="/index">Home Showcase</a></li>
                                <li><a href="/carossel">Home Carousel</a></li>
                                <li><a href="/home-banner">Home Banner</a></li>
                            </ul>
                        </li>
                        <li class="current dropdown"><a href="/about-us">About</a>
                            <ul>
                                <li><a href="/about-us">About Us</a></li>
                                <li><a href="about-me.html">About Me</a></li>
                                <li><a href="/faqs">FAQ's</a></li>
                                <li><a href="/team">Team</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="/services">Services</a>
                            <ul>
                                <li><a href="/services">All Services</a></li>
                                <li><a href="/service-detail">Civil Enginerring</a></li>
                                <li><a href="/service-detail">Oil & Gas Engineering</a></li>
                                <li><a href="/service-detail">Chemical Engineering</a></li>
                                <li><a href="/service-detail">Agriculture Engineering</a></li>
                                <li><a href="/service-detail">Mechanical Engineering</a></li>
                                <li><a href="/service-detail">Service Detail</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="/projects">Projects</a>
                            <ul>
                                <li><a href="/projects">Project with Filters</a></li>
                                <li><a href="/projects2">Project Slide Show</a></li>
                                <li><a href="/project-detail">Project Detail</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="/contact-us">Contact</a></li>
                    </ul> 
                </nav><!-- /.Side-menu -->

                <div class="contact-info-box">
                    <!--Info Box-->
                    <div class="info-box">
                        <div class="icon-box"><span class="fa fa-home"></span></div>
                        <p>13005 Greenville Avenue <br>United Kingdom, TX 70240</p>
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
                        <p><a href="tel:(888)123456789">(888) 123 456 789</a></p>
                        <p><a href="mailto:support@example.com">support@example.com</a></p>
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
                        <div class="logo"><a href="index.html"><img src="/assets/images/logo.png" alt="" title=""></a></div>
                    </div>

                    <div class="nav-outer">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class=" dropdown"><a href="/index">Home</a>
                                        <ul>
                                            <li><a href="/index">Home Showcase</a></li>
                                            <li><a href="/carossel">Home Carousel</a></li>
                                            <li><a href="/home-banner">Home Banner</a></li>
                                        </ul>
                                    </li>
                                    <li class="current dropdown"><a href="/about-us">About</a>
                                        <ul>
                                            <li><a href="/about-us">About Us</a></li>
                                            <li><a href="/about-me">About Me</a></li>
                                            <li><a href="/faqs">FAQ's</a></li>
                                            <li><a href="/team">Team</a></li>
                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="/services">Services</a>
                                        <ul>
                                            <li><a href="/services">All Services</a></li>
                                            <li><a href="/service-detail">Civil Enginerring</a></li>
                                            <li><a href="/service-detail">Oil & Gas Engineering</a></li>
                                            <li><a href="/service-detail">Chemical Engineering</a></li>
                                            <li><a href="/service-detail">Agriculture Engineering</a></li>
                                            <li><a href="/service-detail">Mechanical Engineering</a></li>
                                            <li><a href="/service-detail">Service Detail</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="projects.html">Projects</a>
                                        <ul>
                                            <li><a href="/projects">Project with Filters</a></li>
                                            <li><a href="/projects2">Project Slide Show</a></li>
                                            <li><a href="/projects-detail">Project Detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/contact">Contact</a></li>
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
                <div class="form-group">
                    <input type="search" name="search-field" value="" placeholder="Search" required="">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
        <!-- End Search Popup -->

        <!--Page Title-->
        <section class="page-title" style="background-image:url(/assets/images/background/8.jpg)">
            <div class="auto-container">
                <h2>About us</h2>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">home</a></li>
                    <li>About us</li>
                </ul>
            </div>
        </section>
        <!--End Page Title-->

        <!-- Welcome Section -->
        <section class="welcome-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <span class="float-text">Welcome</span>
                    <h2>Welcome to <span>SINAEA</span></h2>
                    <div class="text">The Generate Industry Company is a business unit with in the industry Division of Fletcher <br> Manufacturer Limited, publicly listed on the England and Australian stock exchanges, with 20,000<br> employes and market capitalisation of $9 billion.</div>
                </div>

                <div class="row">
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <figure class="image"><img src="/assets/images/resource/our-mission.jpg" alt=""></figure>
                            <div class="lower-content">
                                <h3>Our Mission</h3>
                                <div class="text">We will provide you the best work which you dreamt for! It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.there are many variations of passages of Ipsum available,</div>                            
                            </div>
                        </div>
                    </div>

                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <figure class="image"><img src="/assets/images/resource/our-vision.jpg" alt=""></figure>
                            <div class="lower-content">
                                <h3>Our Vision</h3>
                                <div class="text">We will provide you the best work which you dreamt for! It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.there are many variations of passages of Ipsum available,</div>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Welcome Section -->

        <!-- About Us -->
        <section class="about-us">
            <div class="auto-container">
                <div class="sec-title light">
                    <span class="float-text">About</span>
                    <h2>About <span>Us</span></h2>
                </div>
                <div class="row clearfix">
                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="about-years"><span class="theme_color">40</span><h3> Years experience in construction</h3></div>
                            <div class="text-box">
                                <p>We have facility to produce advance work various industrial applications based on specially developed technol-ogy. We are also ready to developement by according to users changing needs. Infrastructure related installation projects. General repair & industrial and machinery.</p>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="icon flaticon-engineer-1"></span></div>
                                    <h4><a href="service-detail.html">Markets and Product</a></h4>
                                    <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua enim ad minim</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="icon flaticon-bar-chart"></span></div>
                                    <h4><a href="service-detail.html">Solutions and Satisfaction Value</a></h4>
                                    <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua enim ad minim</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="icon flaticon-rocket-ship"></span></div>
                                    <h4><a href="service-detail.html">Technology-savvy</a></h4>
                                    <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua enim ad minim</div>
                                </div>
                            </div>

                            <div class="btn-box">
                                <a href="about-us.html" class="theme-btn btn-style-one"><span class="btn-title">Read More</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">

                            <div class="single-item-carousel owl-carousel owl-theme">
                                <!-- Slide Item -->
                                <div class="slide-item">
                                    <figure class="image"><a href="/assets/images/resource/about-img-1.jpg" class="lightbox-image" data-fancybox="images"><img src="/assets/images/resource/about-img-1.jpg" alt=""></a></figure>
                                </div>

                                <!-- Slide Item -->
                                <div class="slide-item">
                                    <figure class="image"><a href="/assets/images/resource/about-img-2.jpg" class="lightbox-image" data-fancybox="images"><img src="/assets/images/resource/about-img-2.jpg" alt=""></a></figure>
                                </div>

                                <!-- Slide Item -->
                                <div class="slide-item">
                                    <figure class="image"><a href="/assets/images/resource/about-img-3.jpg" class="lightbox-image" data-fancybox="images"><img src="/assets/images/resource/about-img-3.jpg" alt=""></a></figure>
                                </div>

                                <!-- Slide Item -->
                                <div class="slide-item">
                                    <figure class="image"><a href="/assets/images/resource/about-img-4.jpg" class="lightbox-image" data-fancybox="images"><img src="/assets/images/resource/about-img-4.jpg" alt=""></a></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Us -->

        <!-- Contact Info Section -->
        <section class="contact-info-section" style="background-image: url(/assets/images/background/3.jpg);">
            <div class="auto-container">
                <div class="content">
                    <span class="title">Let's work together</span>
                    <h2>Provide You The <span>Highest Quality</span><br> Work That Meets Your Expectation.</h2>
                    <div class="number"><a href="tel:(+291)-456-789-1234">(+291)-456-789-1234</a></div>
                    <a href="contact.html" class="theme-btn btn-style-one"><span class="btn-title">Get A Quote</span></a>
                </div>
            </div>
        </section>
        <!--End Contact Info Section -->

        <!-- Fun Facts -->
        <section class="fun-facts">
            <div class="auto-container">
                <div class="sec-title">
                    <span class="float-text">Fun Facts</span>
                    <h2>Magical <span>Numbers</span></h2>
                </div>
                <div class="row">
                    <!--Counter Column-->
                    <div class="fact-counter col-lg-6 col-md-12 col-sm-12">
                        <div class="row">
                            <!--Column-->
                            <div class="column counter-column col-lg-6 col-md-12">
                                <div class="inner">
                                    <span class="icon flaticon-conveyor-1"></span>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="2000" data-stop="40">0</span>+
                                    </div>
                                    <h4 class="counter-title">Years Of Experience</h4>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-lg-6 col-md-12">
                                <div class="inner">
                                    <span class="icon flaticon-mechanic"></span>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="2000" data-stop="450">0</span>
                                    </div>
                                    <h4 class="counter-title">Active Experts</h4>
                                </div>
                            </div>
                            
                            <!--Column-->
                            <div class="column counter-column col-lg-6 col-md-12">
                                <div class="inner">
                                    <span class="icon flaticon-robot-arm"></span>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="2500" data-stop="200">0</span>
                                    </div>
                                    <h4 class="counter-title">Advanced Technology</h4>
                                </div>
                            </div>
                            
                            <!--Column-->
                            <div class="column counter-column col-lg-6 col-md-12">
                                <div class="inner">
                                    <span class="icon flaticon-diamond"></span>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="165">0</span>
                                    </div>
                                    <h4 class="counter-title">Winning Award</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Progress Column-->
                    <div class="progress-column col-lg-6 col-md-12 col-sm-12">
                        <!--Progress Bars-->
                        <div class="inner-column">
                            <h4>Check Our Skills</h4>
                            <div class="text">Lorem ipsum dolor amet consectur adipicing elit eiusmod tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis nostrud exercitation ullamco laboris. aliquip commodo consequat duis aute irure dolor reprehen.</div>
                            <div class="progress-bars">
                                <!--Skill Item-->
                                <div class="bar-item">
                                    <div class="skill-header clearfix">
                                        <div class="skill-title">Architecher</div>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="bar-inner"><div class="bar progress-line" data-width="86"><div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="86">0</span></div></div></div></div>
                                    </div>
                                </div>

                                <!--Skill Item-->
                                <div class="bar-item">
                                    <div class="skill-header clearfix">
                                        <div class="skill-title">Construction</div>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="bar-inner"><div class="bar progress-line" data-width="73"><div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="73">0</span></div></div></div></div>
                                    </div>
                                </div>

                                <!--Skill Item-->
                                <div class="bar-item">
                                    <div class="skill-header clearfix">
                                        <div class="skill-title">Building</div>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="bar-inner"><div class="bar progress-line" data-width="95"><div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="95">0</span></div></div></div></div>
                                    </div>
                                </div>

                                <!--Skill Item-->
                                <div class="bar-item">
                                    <div class="skill-header clearfix">
                                        <div class="skill-title">Interior</div>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="bar-inner"><div class="bar progress-line" data-width="65"><div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="65">0</span></div></div></div></div>
                                    </div>
                                </div>  

                                <!--Skill Item-->
                                <div class="bar-item">
                                    <div class="skill-header clearfix">
                                        <div class="skill-title">Commercial</div>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="bar-inner"><div class="bar progress-line" data-width="80"><div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="80">0</span></div></div></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Fun Facts -->

        <!-- Video Section -->
        <section class="video-section" style="background-image: url(/assets/images/background/2.jpg);" data-stellar-background-ratio="0.5">
            <div class="auto-container">
                <div class="content-box">
                    <div class="text">WE’RE A LEADING INDUSTRY COMPANY</div>
                    <h2>We Are Always at The <br>Forefront of The Industrial Market</h2>
                    <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-now" data-fancybox="gallery" data-caption=""><i class="icon flaticon-play-button-3" aria-hidden="true"></i><span class="ripple"></span></a>
                </div>
            </div>
        </section>
        <!--End Video Section -->

        <!-- Call Back Section -->
        <section class="call-back-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <span class="float-text">Call back</span>
                    <h2>Request A <span>Quote</span></h2>
                    <div class="text">Send us a email and we’ll get in touch shortly, or phone between <br>9:00AM to 5:00PM Monday to Friday - We would be delighted to speak.</div>
                </div>
                <div class="outer-box">
                    <div class="row">
                        <!-- Form Column -->
                        <div class="form-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="request-form wow fadeInLeft" >
                                    <!--Comment Form-->
                                    <form method="post" action="http://ary-themes.com/html/sinaea/blog.html">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <input type="text" name="username" placeholder="Name" required>
                                            </div>
                                            
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <input type="email" name="email" placeholder="Email" required>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <input type="text" name="phone" placeholder="Phone" required>
                                            </div>
                                            
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <textarea name="message" placeholder="Massage"></textarea>
                                            </div>
                                            
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <button class="theme-btn btn-style-two" type="submit" name="submit-form"><span class="btn-title">Submit Now</span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="image-column col-lg-6 col-md-12 col-sm-12">
                            <div class="image-box wow fadeInRight">
                                <figure class="image"><img src="/assets/images/resource/man.png" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Call Back Section -->

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
                                            <a href="index.html"><img src="/assets/images/logo.png" alt="" /></a>
                                        </div>
                                        <div class="text">
                                            <p>We have very good strength in innovative technology and tools with over 35 years of experience. We makes long-term investments goal in global companies in different sectors, mainly in Europe and other countries.</p>           
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
                                            <li><a href="index-2.html">Home</a></li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="projects.html">Projects</a></li>
                                            <li><a href="blog.html">Blogs</a></li>
                                            <li><a href="contact.html">Contact Us</a></li>
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
                                                    <div class="text"><a href="tel:+1-345-5678-77">+1-345-5678-77</a></div>
                                                </li>

                                                <li>
                                                    <span class="icon flaticon-paper-plane"></span>
                                                    <div class="text"><a href="mailto:support@example.com">support@example.com</a></div>
                                                </li>

                                                <li>
                                                    <span class="icon flaticon-worldwide"></span>
                                                    <div class="text">13005 Greenville Avenue<br> California, TX 70240</div>
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
                            <p>© Copyright 2019 All Rights Reserved by <a href="index.html">Bold_Touch</a></p>
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

