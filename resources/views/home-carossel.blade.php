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

        <!-- Banner Section -->
        <section class="banner-section-two">
            <div class="banner-carousel owl-carousel owl-theme">
                <!-- Slide Item -->
                <div class="slide-item" style="background-image: url(/assets/images/main-slider/11.jpg);">
                    <div class="content-box">
                        <div class="content">
                            <div class="auto-container">
                                <h2>The Best <span class="theme_color">Solution</span> <br>for all Industries</h2>
                                <div class="text">We deliver sustainable solutions and services to various industries within the USA. <br>Our partners and clients value us for the quality of our products.</div>
                                <div class="btn-box">
                                    <a href="service-detail.html" class="theme-btn btn-style-two"><span class="btn-title">Our Solution</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide Item -->
                <div class="slide-item" style="background-image: url(/assets/images/main-slider/12.jpg);">
                    <div class="content-box">
                        <div class="content">
                            <div class="auto-container">
                                <h2>Build Mineral <br><span class="theme_color">Industry</span> Procesing</h2>
                                <div class="text">We deliver sustainable solutions and services to various industries within the USA. <br>Our partners and clients value us for the quality of our products.</div>
                                <div class="btn-box">
                                    <a href="service-detail.html" class="theme-btn btn-style-two"><span class="btn-title">Our Solution</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide Item -->
                <div class="slide-item" style="background-image: url(/assets/images/main-slider/13.jpg);">
                    <div class="content-box">
                        <div class="content">
                            <div class="auto-container">
                                <h2>Welcome to Best <br><span class="theme_color">Manufacturing</span></h2>
                                <div class="text">We deliver sustainable solutions and services to various industries within the USA. <br>Our partners and clients value us for the quality of our products.</div>
                                <div class="btn-box">
                                    <a href="service-detail.html" class="theme-btn btn-style-two"><span class="btn-title">Our Solution</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Social Links -->
            <div class="square-menu">
                <div class="items-wrapper">
                    <a href="#" class="menu-item"><span class="fab fa-facebook-f"></span></a>
                    <a href="#" class="menu-item"><span class="fab fa-twitter"></span></a>
                    <a href="#" class="menu-item"><span class="fab fa-google-plus-g"></span></a>
                    <a href="#" class="menu-item"><span class="fab fa-linkedin-in"></span></a>
                </div>
                <button class="floating-btn"><i class="fa fa-share-alt"></i></button>
            </div>
        </section>
        <!--END Banner Section -->

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
                            <div class="feature-block wow fadeInUp">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="icon flaticon-engineer-1"></span></div>
                                    <h4><a href="service-detail.html">Markets and Product</a></h4>
                                    <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua enim ad minim</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block wow fadeInUp">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="icon flaticon-bar-chart"></span></div>
                                    <h4><a href="service-detail.html">Solutions and Satisfaction Value</a></h4>
                                    <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua enim ad minim</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block wow fadeInUp">
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

        <!-- Fun Facts -->
        <section class="fun-facts">
            <div class="auto-container">
                <div class="sec-title">
                    <span class="float-text">Fun Facts</span>
                    <h2>Magical <span>Numbers</span></h2>
                </div>
                <div class="row">
                    <!--Counter Column-->
                    <div class="fact-counter col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <!--Column-->
                            <div class="column counter-column col-lg-6 col-md-6 wow fadeInUp">
                                <div class="inner">
                                    <span class="icon flaticon-conveyor-1"></span>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="2000" data-stop="40">0</span>+
                                    </div>
                                    <h4 class="counter-title">Years Of Experience</h4>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                                <div class="inner">
                                    <span class="icon flaticon-mechanic"></span>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="2000" data-stop="450">0</span>
                                    </div>
                                    <h4 class="counter-title">Active Experts</h4>
                                </div>
                            </div>
                            
                            <!--Column-->
                            <div class="column counter-column col-lg-6 col-md-6 wow fadeInUp">
                                <div class="inner">
                                    <span class="icon flaticon-robot-arm"></span>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="2500" data-stop="200">0</span>
                                    </div>
                                    <h4 class="counter-title">Advanced Technology</h4>
                                </div>
                            </div>
                            
                            <!--Column-->
                            <div class="column counter-column col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
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
                    <div class="progress-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
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

        <!-- Services Section -->
        <section class="services-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <span class="float-text">Services</span>
                    <h2><span>Our </span>Services</h2>
                </div>

                <div class="carousel-outer">
                    <!-- Services Carousel -->
                    <div class="services-carousel owl-carousel owl-theme">
                        <!-- service Block -->
                        <div class="service-block">
                            <div class="inner-box">
                                <span class="icon flaticon-helmet"></span>
                                <h3><a href="service-detail.html">Civil Engineering</a></h3>
                                <div class="text">We have strength and experience in this services allowed in successfully delivering ...</div>
                                <a href="service-detail.html" class="read-more">Read More</a>
                            </div>
                        </div>

                        <!-- service Block -->
                        <div class="service-block">
                            <div class="inner-box">
                                <span class="icon flaticon-conveyor-3"></span>
                                <h3><a href="service-detail.html">Agricultural Automation</a></h3>
                                <div class="text">We have strength and experience in this services allowed in successfully delivering ...</div>
                                <a href="service-detail.html" class="read-more">Read More</a>
                            </div>
                        </div>

                        <!-- service Block -->
                        <div class="service-block">
                            <div class="inner-box">
                                <span class="icon flaticon-engineer-1"></span>
                                <h3><a href="service-detail.html">Mechanical Engineering</a></h3>
                                <div class="text">We have strength and experience in this services allowed in successfully delivering ...</div>
                                <a href="service-detail.html" class="read-more">Read More</a>
                            </div>
                        </div>

                        <!-- service Block -->
                        <div class="service-block">
                            <div class="inner-box">
                                <span class="icon flaticon-refinery-1"></span>
                                <h3><a href="service-detail.html">Oil & Gas Engineering</a></h3>
                                <div class="text">We have strength and experience in this services allowed in successfully delivering ...</div>
                                <a href="service-detail.html" class="read-more">Read More</a>
                            </div>
                        </div>

                        <!-- service Block -->
                        <div class="service-block">
                            <div class="inner-box">
                                <span class="icon flaticon-robot-arm"></span>
                                <h3><a href="service-detail.html">Auto Manufacturing</a></h3>
                                <div class="text">We have strength and experience in this services allowed in successfully delivering ...</div>
                                <a href="service-detail.html" class="read-more">Read More</a>
                            </div>
                        </div>

                        <!-- service Block -->
                        <div class="service-block">
                            <div class="inner-box">
                                <span class="icon flaticon-laboratory"></span>
                                <h3><a href="service-detail.html">Chemical Research</a></h3>
                                <div class="text">We have strength and experience in this services allowed in successfully delivering ...</div>
                                <a href="service-detail.html" class="read-more">Read More</a>
                            </div>
                        </div>

                        <!-- service Block -->
                        <div class="service-block">
                            <div class="inner-box">
                                <span class="icon flaticon-helmet"></span>
                                <h3><a href="service-detail.html">Civil Engineering</a></h3>
                                <div class="text">We have strength and experience in this services allowed in successfully delivering ...</div>
                                <a href="service-detail.html" class="read-more">Read More</a>
                            </div>
                        </div>

                        <!-- service Block -->
                        <div class="service-block">
                            <div class="inner-box">
                                <span class="icon flaticon-conveyor-3"></span>
                                <h3><a href="service-detail.html">Agricultural Automation</a></h3>
                                <div class="text">We have strength and experience in this services allowed in successfully delivering ...</div>
                                <a href="service-detail.html" class="read-more">Read More</a>
                            </div>
                        </div>

                        <!-- service Block -->
                        <div class="service-block">
                            <div class="inner-box">
                                <span class="icon flaticon-engineer-1"></span>
                                <h3><a href="service-detail.html">Mechanical Engineering</a></h3>
                                <div class="text">We have strength and experience in this services allowed in successfully delivering ...</div>
                                <a href="service-detail.html" class="read-more">Read More</a>
                            </div>
                        </div>

                        <!-- service Block -->
                        <div class="service-block">
                            <div class="inner-box">
                                <span class="icon flaticon-refinery-1"></span>
                                <h3><a href="service-detail.html">Oil & Gas Engineering</a></h3>
                                <div class="text">We have strength and experience in this services allowed in successfully delivering ...</div>
                                <a href="service-detail.html" class="read-more">Read More</a>
                            </div>
                        </div>

                        <!-- service Block -->
                        <div class="service-block">
                            <div class="inner-box">
                                <span class="icon flaticon-robot-arm"></span>
                                <h3><a href="service-detail.html">Auto Manufacturing</a></h3>
                                <div class="text">We have strength and experience in this services allowed in successfully delivering ...</div>
                                <a href="service-detail.html" class="read-more">Read More</a>
                            </div>
                        </div>

                        <!-- service Block -->
                        <div class="service-block">
                            <div class="inner-box">
                                <span class="icon flaticon-laboratory"></span>
                                <h3><a href="service-detail.html">Chemical Research</a></h3>
                                <div class="text">We have strength and experience in this services allowed in successfully delivering ...</div>
                                <a href="service-detail.html" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End service Section -->

        <!-- Contact Info Section -->
        <section class="contact-info-section" style="background-image: url(/assets/images/background/1.jpg);">
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

        <!-- Project Section -->
        <section class="project-section-two">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <span class="float-text">Gallery</span>
                    <h2>Projects <span>Gallery</span></h2>
                </div>
                <!--MixitUp Galery-->
                <div class="mixitup-gallery">
                    <!--Filter-->
                    <div class="filters clearfix">
                        <ul class="filter-tabs filter-btns clearfix">
                            <li class="active filter" data-role="button" data-filter="all">All</li>
                            <li class="filter" data-role="button" data-filter=".chemical">Chemical</li>
                            <li class="filter" data-role="button" data-filter=".material">Material</li>
                            <li class="filter" data-role="button" data-filter=".oil-and-gas">Oil & Gas</li>
                            <li class="filter" data-role="button" data-filter=".power-energy">Power Energy</li>
                        </ul>
                    </div>                     

                    <div class="filter-list row">
                        <!-- Portfolio Block -->
                        <div class="project-block-two mix all material power-energy col-lg-4 col-md-6 col-sm-12">
                             <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="/assets/images/gallery/2-1.jpg" class="lightbox-image" data-fancybox="gallery"><img src="/assets/images/gallery/2-1.jpg" alt=""></a></figure>
                                    <div class="caption-box">    
                                        <h3><a href="project-detail.html">Business Solution</a></h3>
                                        <span>Power Energy</span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Portfolio Block -->
                        <div class="project-block-two mix all power-energy oil-and-gas chemical col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="/assets/images/gallery/2-2.jpg" class="lightbox-image" data-fancybox="gallery"><img src="/assets/images/gallery/2-2.jpg" alt=""></a></figure>
                                    <div class="caption-box">    
                                        <h3><a href="project-detail.html">Business Solution</a></h3>
                                        <span>Power Energy</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Portfolio Block -->
                        <div class="project-block-two mix all power-energy oil-and-gas material col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="/assets/images/gallery/2-3.jpg" class="lightbox-image" data-fancybox="gallery"><img src="/assets/images/gallery/2-3.jpg" alt=""></a></figure>
                                    <div class="caption-box">    
                                        <h3><a href="project-detail.html">Business Solution</a></h3>
                                        <span>Power Energy</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Portfolio Block -->
                        <div class="project-block-two mix all chemical oil-and-gas col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="/assets/images/gallery/2-4.jpg" class="lightbox-image" data-fancybox="gallery"><img src="/assets/images/gallery/2-4.jpg" alt=""></a></figure>
                                    <div class="caption-box">    
                                        <h3><a href="project-detail.html">Business Solution</a></h3>
                                        <span>Power Energy</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Portfolio Block -->
                        <div class="project-block-two mix all power-energy material chemical col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="/assets/images/gallery/2-5.jpg" class="lightbox-image" data-fancybox="gallery"><img src="/assets/images/gallery/2-5.jpg" alt=""></a></figure>
                                    <div class="caption-box">    
                                        <h3><a href="project-detail.html">Business Solution</a></h3>
                                        <span>Power Energy</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Portfolio Block -->
                        <div class="project-block-two mix all material chemical col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="/assets/images/gallery/2-6.jpg" class="lightbox-image" data-fancybox="gallery"><img src="/assets/images/gallery/2-6.jpg" alt=""></a></figure>
                                    <div class="caption-box">    
                                        <h3><a href="project-detail.html">Business Solution</a></h3> <span>Power Energy</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Projects Section -->

        <!-- Team Section -->
        <section class="team-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <span class="float-text">Team</span>
                    <h2>Expert <span>Member</span></h2>
                </div>

                <div class="carousel-outer">
                    <div class="team-carousel owl-carousel owl-theme">
                        <!-- Team Block -->
                        <div class="team-block">
                            <div class="inner-box">
                                <figure class="thumb"><img src="/assets/images/resource/team-1.jpg" alt=""></figure>
                                <div class="info-box">
                                    <h5 class="name">Dagny Brucks</h5>
                                    <span class="designation">Camical officer</span>
                                </div>
                                <div class="devider"></div>
                                <div class="lower-content">
                                    <ul class="other-info">
                                        <li><strong>ID</strong> : 28546897</li>
                                        <li><strong>Phone</strong> : <a href="tel:+(012)3457689">(012) 345 6789</a></li>
                                        <li><strong>Email</strong> : <a href="mailto:email@example.com">email@example.com</a></li>
                                        <li><strong>Social</strong> :
                                            <div class="social-links">
                                                <a href="#"><span class="fab fa-facebook-f"></span></a>
                                                <a href="#"><span class="fab fa-twitter"></span></a>
                                                <a href="#"><span class="fab fa-google-plus-g"></span></a>
                                                <a href="#"><span class="fab fa-linkedin-in"></span></a>
                                                <a href="#"><span class="fab fa-dribbble"></span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Team Block -->
                        <div class="team-block">
                            <div class="inner-box">
                                <figure class="thumb"><img src="/assets/images/resource/team-2.jpg" alt=""></figure>
                                <div class="info-box">
                                    <h5 class="name">Cora Volek</h5>
                                    <span class="designation">Camical officer</span>
                                </div>
                                <div class="devider"></div>
                                <div class="lower-content">
                                    <ul class="other-info">
                                        <li><strong>ID</strong> : 28546897</li>
                                        <li><strong>Phone</strong> : <a href="tel:+(012)3457689">(012) 345 6789</a></li>
                                        <li><strong>Email</strong> : <a href="mailto:email@example.com">email@example.com</a></li>
                                        <li><strong>Social</strong> :
                                            <div class="social-links">
                                                <a href="#"><span class="fab fa-facebook-f"></span></a>
                                                <a href="#"><span class="fab fa-twitter"></span></a>
                                                <a href="#"><span class="fab fa-google-plus-g"></span></a>
                                                <a href="#"><span class="fab fa-linkedin-in"></span></a>
                                                <a href="#"><span class="fab fa-dribbble"></span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Team Block -->
                        <div class="team-block">
                            <div class="inner-box">
                                <figure class="thumb"><img src="/assets/images/resource/team-3.jpg" alt=""></figure>
                                <div class="info-box">
                                    <h5 class="name">Rolande Carioscia</h5>
                                    <span class="designation">Camical officer</span>
                                </div>
                                <div class="devider"></div>
                                <div class="lower-content">
                                    <ul class="other-info">
                                        <li><strong>ID</strong> : 28546897</li>
                                        <li><strong>Phone</strong> : <a href="tel:+(012)3457689">(012) 345 6789</a></li>
                                        <li><strong>Email</strong> : <a href="mailto:email@example.com">email@example.com</a></li>
                                        <li><strong>Social</strong> : 
                                            <div class="social-links">
                                                <a href="#"><span class="fab fa-facebook-f"></span></a>
                                                <a href="#"><span class="fab fa-twitter"></span></a>
                                                <a href="#"><span class="fab fa-google-plus-g"></span></a>
                                                <a href="#"><span class="fab fa-linkedin-in"></span></a>
                                                <a href="#"><span class="fab fa-dribbble"></span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Team Block -->
                        <div class="team-block">
                            <div class="inner-box">
                                <figure class="thumb"><img src="/assets/images/resource/team-4.jpg" alt=""></figure>
                                <div class="info-box">
                                    <h5 class="name">Joan Odonovan</h5>
                                    <span class="designation">Camical officer</span>
                                </div>
                                <div class="devider"></div>
                                <div class="lower-content">
                                    <ul class="other-info">
                                        <li><strong>ID</strong> : 28546897</li>
                                        <li><strong>Phone</strong> : <a href="tel:+(012)3457689">(012) 345 6789</a></li>
                                        <li><strong>Email</strong> : <a href="mailto:email@example.com">email@example.com</a></li>
                                        <li><strong>Social</strong> :
                                            <div class="social-links">
                                                <a href="#"><span class="fab fa-facebook-f"></span></a>
                                                <a href="#"><span class="fab fa-twitter"></span></a>
                                                <a href="#"><span class="fab fa-google-plus-g"></span></a>
                                                <a href="#"><span class="fab fa-linkedin-in"></span></a>
                                                <a href="#"><span class="fab fa-dribbble"></span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team Section -->

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

        <!-- Pricing Sectioin -->
        <section class="pricing-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <span class="float-text">Pricing</span>
                    <h2>Pricing <span>Plan</span></h2>
                </div>

                <!--Pricing Tabs-->
                <div class="pricing-tabs tabs-box clearfix">                    
                    <!--Tabs Container-->
                    <div class="tabs-content">
                        <!--Tab / Active Tab-->
                        <div class="tab active-tab" id="monthly">
                            <div class="content">
                                <div class="row">
                                    <!-- Pricing Table -->
                                    <div class="pricing-table col-lg-4 col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <div class="title-box">
                                                <h3>Basic</h3>
                                                <span>Package</span>
                                            </div>
                                            <div class="table-content">
                                                <ul>
                                                    <li><span>Lorem ipsum dolor sit</span></li>
                                                    <li><span>Amet consectur </span></li>
                                                    <li><span>elit eiusmod tempor </span></li>
                                                    <li><span>incididunt ut labore  </span></li>
                                                    <li><span>veniam quis nostrud  </span></li>
                                                </ul>
                                                <div class="price-box">
                                                    <span class="title">Price</span>
                                                    <div class="price"> <span>$</span>4<sup>99</sup> </div>
                                                </div>
                                            </div>
                                            <div class="table-footer">
                                                <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Buy Now</span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Pricing Table -->
                                    <div class="pricing-table col-lg-4 col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <div class="title-box">
                                                <h3>Stabdard</h3>
                                                <span>Package</span>
                                            </div>
                                            <div class="table-content">
                                                <ul>
                                                    <li><span>Lorem ipsum dolor sit</span></li>
                                                    <li><span>Amet consectur </span></li>
                                                    <li><span>elit eiusmod tempor </span></li>
                                                    <li><span>incididunt ut labore  </span></li>
                                                    <li><span>veniam quis nostrud  </span></li>
                                                </ul>
                                                <div class="price-box">
                                                    <span class="title">Price</span>
                                                    <div class="price"> <span>$</span>8<sup>99</sup> </div>
                                                </div>
                                            </div>
                                            <div class="table-footer">
                                                <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Buy Now</span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Pricing Table -->
                                    <div class="pricing-table col-lg-4 col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <div class="title-box">
                                                <h3>Premium</h3>
                                                <span>Package</span>
                                            </div>
                                            <div class="table-content">
                                                <ul>
                                                    <li><span>Lorem ipsum dolor sit</span></li>
                                                    <li><span>Amet consectur </span></li>
                                                    <li><span>elit eiusmod tempor </span></li>
                                                    <li><span>incididunt ut labore  </span></li>
                                                    <li><span>veniam quis nostrud  </span></li>
                                                </ul>
                                                <div class="price-box">
                                                    <span class="title">Price</span>
                                                    <div class="price"> <span>$</span>19<sup>99</sup> </div>
                                                </div>
                                            </div>
                                            <div class="table-footer">
                                                <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Buy Now</span></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        
                        <!--Tab-->
                        <div class="tab" id="annual">
                            <div class="content">
                                <div class="row">
                                    <!-- Pricing Table -->
                                    <div class="pricing-table col-lg-4 col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <div class="title-box">
                                                <h3>Basic</h3>
                                                <span>Package</span>
                                            </div>
                                            <div class="table-content">
                                                <ul>
                                                    <li><span>Lorem ipsum dolor sit</span></li>
                                                    <li><span>Amet consectur </span></li>
                                                    <li><span>elit eiusmod tempor </span></li>
                                                    <li><span>incididunt ut labore  </span></li>
                                                    <li><span>veniam quis nostrud  </span></li>
                                                </ul>
                                                <div class="price-box">
                                                    <span class="title">Price</span>
                                                    <div class="price"> <span>$</span>38<sup>99</sup> </div>
                                                </div>
                                            </div>
                                            <div class="table-footer">
                                                <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Buy Now</span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Pricing Table -->
                                    <div class="pricing-table col-lg-4 col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <div class="title-box">
                                                <h3>Stabdard</h3>
                                                <span>Package</span>
                                            </div>
                                            <div class="table-content">
                                                <ul>
                                                    <li><span>Lorem ipsum dolor sit</span></li>
                                                    <li><span>Amet consectur </span></li>
                                                    <li><span>elit eiusmod tempor </span></li>
                                                    <li><span>incididunt ut labore  </span></li>
                                                    <li><span>veniam quis nostrud  </span></li>
                                                </ul>
                                                <div class="price-box">
                                                    <span class="title">Price</span>
                                                    <div class="price"> <span>$</span>78<sup>99</sup> </div>
                                                </div>
                                            </div>
                                            <div class="table-footer">
                                                <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Buy Now</span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Pricing Table -->
                                    <div class="pricing-table col-lg-4 col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <div class="title-box">
                                                <h3>Premium</h3>
                                                <span>Package</span>
                                            </div>
                                            <div class="table-content">
                                                <ul>
                                                    <li><span>Lorem ipsum dolor sit</span></li>
                                                    <li><span>Amet consectur </span></li>
                                                    <li><span>elit eiusmod tempor </span></li>
                                                    <li><span>incididunt ut labore  </span></li>
                                                    <li><span>veniam quis nostrud  </span></li>
                                                </ul>
                                                <div class="price-box">
                                                    <span class="title">Price</span>
                                                    <div class="price"> <span>$</span>90<sup>99</sup> </div>
                                                </div>
                                            </div>
                                            <div class="table-footer">
                                                <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Buy Now</span></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Tab Btns-->
                    <div class="tab-buttons">
                        <ul class="tab-btns clearfix">
                            <li data-tab="#monthly" class="tab-btn active-btn">Monthly</li>
                            <li data-tab="#annual" class="tab-btn">Yearly</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Pricing Section -->

        <!-- Testimonial Section -->
        <section class="testimonial-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <span class="float-text">Testimonials</span>
                    <h2>Our Clients <span>Reviews</span></h2>
                </div>

                <div class="carousel-outer">
                    <!-- Testimonial Carousel -->
                    <div class="testimonial-carousel owl-carousel owl-theme">
                        <!-- Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="content-box">
                                    <span class="icon fa fa-quote-right"></span>
                                    <div class="rating">
                                        <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                    </div>
                                    <div class="text">Lorem ipsum dolor amet consectur adipicing elit eiusmod tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis nostrud exercitation ullamco laboris.</div>
                                </div>
                                <div class="info-box">
                                    <div class="thumb"><img src="/assets/images/resource/testi-thumb-2.jpg" alt=""></div>
                                    <h4 class="name">Clarine Spurr</h4>
                                    <span class="designation">Marketing Manager</span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="content-box">
                                    <span class="icon fa fa-quote-right"></span>
                                    <div class="rating">
                                        <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                    </div>
                                    <div class="text">Lorem ipsum dolor amet consectur adipicing elit eiusmod tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis nostrud exercitation ullamco laboris.</div>
                                </div>
                                <div class="info-box">
                                    <div class="thumb"><img src="/assets/images/resource/testi-thumb-3.jpg" alt=""></div>
                                    <h4 class="name">Kenyatta Decent</h4>
                                    <span class="designation">Marketing Manager</span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="content-box">
                                    <span class="icon fa fa-quote-right"></span>
                                    <div class="rating">
                                        <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                    </div>
                                    <div class="text">Lorem ipsum dolor amet consectur adipicing elit eiusmod tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis nostrud exercitation ullamco laboris.</div>
                                </div>
                                <div class="info-box">
                                    <div class="thumb"><img src="/assets/images/resource/testi-thumb.jpg" alt=""></div>
                                    <h4 class="name">Chasity Lieuallen</h4>
                                    <span class="designation">Marketing Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!--End Testimonial Section -->

        <!-- Newsletter Section -->
        <section class="newsletter-section">
            <div class="auto-container">
                <!--Subscribe Form-->
                <div class="subscribe-form wow fadeInUp" data-wow-delay="500ms">
                    <div class="envelope-image"></div>
                    <div class="form-inner">
                        <div class="upper-box">
                            <h4>Subscribe to Our <br><span>Newsletter</span></h4>
                            <div class="text">Lorem ipsum dolor amet consectetur adipisicing elit sed eiusm <br>tempor incididunt ut labore dolore magna.</div>
                        </div>
                        <form method="post" action="http://ary-themes.com/html/sinaea/contact.html">
                            <div class="form-group">
                                <input type="email" name="email" value="" placeholder="Your email" required>
                                <button type="submit" class="theme-btn"><span class="fa fa-paper-plane"></span></button>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
        </section>
        <!--End Newsletter Section -->

        <!-- News Section -->
        <section class="news-section">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title text-center">
                    <span class="float-text">Blogs</span>
                    <h2>Industrial <span>News</span></h2>
                </div>
                <div class="row clearfix">
                    
                    <!-- News Block -->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="blog-single.html"><img src="/assets/images/resource/news-1.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li>by Admin</li>
                                    <li>03 Comments</li>
                                    <li>25 Jan 19</li>
                                </ul>
                                <h3><a href="blog-single.html">We won the award for best factory of the year.</a></h3>
                                <div class="text">Lorem ipsum dolor amet consectetur adipisicing elit sed eiusm tempor incididunt </div>
                                <a href="blog-single.html" class="theme-btn btn-style-one"><span class="btn-title">Read More</span></a>
                            </div>
                        </div>
                    </div>                

                    <!-- News Block -->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="blog-single.html"><img src="/assets/images/resource/news-2.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li>by Admin</li>
                                    <li>03 Comments</li>
                                    <li>25 Jan 19</li>
                                </ul>
                                <h3><a href="blog-single.html">We are Best for Industrial and Business Solution.</a></h3>
                                <div class="text">Lorem ipsum dolor amet consectetur adipisicing elit sed eiusm tempor incididunt </div>
                                <a href="blog-single.html" class="theme-btn btn-style-one"><span class="btn-title">Read More</span></a>
                            </div>
                        </div>
                    </div>

                    <!-- News Block -->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="blog-single.html"><img src="/assets/images/resource/news-3.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li>by Admin</li>
                                    <li>03 Comments</li>
                                    <li>25 Jan 19</li>
                                </ul>
                                <h3><a href="blog-single.html">How to get Hight Quality Industrial Products.</a></h3>
                                <div class="text">Lorem ipsum dolor amet consectetur adipisicing elit sed eiusm tempor incididunt </div>
                                <a href="blog-single.html" class="theme-btn btn-style-one"><span class="btn-title">Read More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End News Section -->

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
