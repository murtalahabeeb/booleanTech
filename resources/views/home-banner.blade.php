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
                           
                            </div>

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
        <section class="banner-section-three" style="background-image: url(/assets/images/main-slider/banner.jpg);">
            <div class="shape-outer"><div class="left-shape"></div></div>
            <div class="center-stipts"></div>
            <div class="content-outer">
                <div class="content-box">
                    <div class="auto-container">
                        <div class="inner">
                            <h2>The Best Solution <br>for all <span class="typewrite" data-period="2000" data-type='[ "Industries", "Factories", "Manufact.." ]'></span></h2>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="social-icon-two">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-skype"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
        </section>
        <!--END Banner Section -->

        <!-- About Section -->
        <section class="about-section">
            <div class="auto-container">
                <div class="row">
                    <!-- Content Column -->
                    <div class="content-column col-lg-7 col-md-12 col-sm-12 order-2">
                        <div class="inner-column">
                            <div class="sec-title">
                                <span class="float-text">About</span>
                                <h2>About <span>Us</span></h2>
                            </div>
                            <div class="message">Our mission is to provide our client what they need!.</div>
                            <div class="text-box">
                                <p>Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.duis aute irure dolor in reprehen derit in voluptate velit esse cillum.</p>
                                <p>Lorem ipsum dolor amet consectur adipicing elit eiusmod tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis nostrud exercitation ullamco laboris</p>
                            </div>
                            <ul class="list-style-two clearfix">
                                <li>Affordable Price</li>
                                <li>Certified Mechanics</li>
                                <li>24/7 availality</li>
                                <li>Affordable prices</li>
                                <li>No hidden cost</li>
                                <li>100% Satisfaction</li>
                            </ul>
                            <div class="btn-box">
                                <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Contact Us</span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="image-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="image-box">
                                <figure class="image wow fadeInRight"><a href="/assets/images/resource/about-img-5.jpg" class="lightbox-image" data-fancybox="images"><img src="/assets/images/resource/about-img-5.jpg" alt=""></a></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End About Section -->

        <!-- Services Section -->
        <section class="services-section-two">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <span class="float-text">Services</span>
                    <h2>Industrial <span>Solutions</span></h2>
                </div>

                <div class="row">
                    <!-- service Block -->
                    <div class="service-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-detail.html"><img src="/assets/images/resource/service-1.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.html">Civil Engineering</a></h3>
                                <div class="text">We have strength and experience in this services allowed in successfully delivering.</div>
                                <a href="service-detail.html" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- service Block -->
                    <div class="service-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-detail.html"><img src="/assets/images/resource/service-2.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.html">Agricultural Automation</a></h3>
                                <div class="text">We have strength and experience in this services allowed in successfully delivering.</div>
                                <a href="service-detail.html" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- service Block -->
                    <div class="service-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-detail.html"><img src="/assets/images/resource/service-3.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.html">Mechanical Engineering</a></h3>
                                <div class="text">We have strength and experience in this services allowed in successfully delivering.</div>
                                <a href="service-detail.html" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- service Block -->
                    <div class="service-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-detail.html"><img src="/assets/images/resource/service-4.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.html">Oil & Gas Engineering</a></h3>
                                <div class="text">We have strength and experience in this services allowed in successfully delivering.</div>
                                <a href="service-detail.html" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- service Block -->
                    <div class="service-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-detail.html"><img src="/assets/images/resource/service-5.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.html">Automotive Manufacturing</a></h3>
                                <div class="text">We have strength and experience in this services allowed in successfully delivering.</div>
                                <a href="service-detail.html" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- service Block -->
                    <div class="service-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-detail.html"><img src="/assets/images/resource/service-6.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.html">Chemical Research</a></h3>
                                <div class="text">We have strength and experience in this services allowed in successfully delivering.</div>
                                <a href="service-detail.html" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End service Section -->

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

                <!-- Project Section -->
        <section class="project-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <span class="float-text">Projects</span>
                    <h2>Industrial <span>Projects</span></h2>
                </div>
                <div class="swiper-slider-area">
                    <div class="projects-slider swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide project-block">
                                <div class="inner-box">
                                    <figure class="image"><img src="/assets/images/gallery/1.jpg" alt=""></figure>
                                    <div class="caption-box">
                                        <h4><a href="project-detail.html">Civil Engineering</a></h4>
                                        <div class="text">Lorem ipsum dolor amet consectur adipicing elit eiusmod tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis nostrud exercitation ullamco laboris.</div>
                                        <a href="project-detail.html" class="theme-btn btn-style-one read-more"><span class="btn-title">Read More</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide project-block">
                                <div class="inner-box">
                                    <figure class="image"><img src="/assets/images/gallery/2.jpg" alt=""></figure>
                                    <div class="caption-box">
                                        <h4><a href="project-detail.html">Oil & Gas Engineering</a></h4>
                                        <div class="text">Lorem ipsum dolor amet consectur adipicing elit eiusmod tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis nostrud exercitation ullamco laboris.</div>
                                        <a href="project-detail.html" class="theme-btn btn-style-one read-more"><span class="btn-title">Read More</span></a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide project-block">
                                <div class="inner-box">
                                    <figure class="image"><img src="/assets/images/gallery/3.jpg" alt=""></figure>
                                    <div class="caption-box">
                                        <h4><a href="project-detail.html">Agriculture Engineering</a></h4>
                                        <div class="text">Lorem ipsum dolor amet consectur adipicing elit eiusmod tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis nostrud exercitation ullamco laboris.</div>
                                        <a href="project-detail.html" class="theme-btn btn-style-one read-more"><span class="btn-title">Read More</span></a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide project-block">
                                <div class="inner-box">
                                    <figure class="image"><img src="/assets/images/gallery/4.jpg" alt=""></figure>
                                    <div class="caption-box">
                                        <h4><a href="project-detail.html">Mechanical Engineering</a></h4>
                                        <div class="text">Lorem ipsum dolor amet consectur adipicing elit eiusmod tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis nostrud exercitation ullamco laboris.</div>
                                        <a href="project-detail.html" class="theme-btn btn-style-one read-more"><span class="btn-title">Read More</span></a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide project-block">
                                <div class="inner-box">
                                    <figure class="image"><img src="/assets/images/gallery/5.jpg" alt=""></figure>
                                    <div class="caption-box">
                                        <h4><a href="project-detail.html">Chemical Engineering</a></h4>
                                        <div class="text">Lorem ipsum dolor amet consectur adipicing elit eiusmod tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis nostrud exercitation ullamco laboris.</div>
                                        <a href="project-detail.html" class="theme-btn btn-style-one read-more"><span class="btn-title">Read More</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add Arrows -->
                    </div>
                </div>
            </div>
        </section>
        <!--End Project Section -->

        <!-- Features Section -->
        <section class="features-section">
            <div class="auto-container">
                <div class="sec-title">
                    <span class="float-text">Why Us?</span>
                    <h2><span>Why</span> Choose Us</h2>
                </div>

                <div class="row">
                    <div class="text-column col-xl-4 col-lg-12 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <p>Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut</p>
                            <p>ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo.</p>
                            <ul class="list-style-one">
                                <li>Dolor sit amet consectetur</li>
                                <li>Cillum dolore eu fugiat nulla</li>
                                <li>Do eiusmod tempor incd idunt</li>
                                <li>Dolore magna aliqua enim ad </li>
                            </ul>
                            <div class="btn-box"><a href="about-us.html" class="theme-btn btn-style-one"><span class="btn-title">Read More</span></a></div>
                        </div>
                    </div>

                    <div class="features-column col-xl-8 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">

                            <!-- Feature Block -->
                            <div class="feature-block-two col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-project-management"></span>
                                    <h4>Creative Ideas</h4>
                                    <div class="text">A high level service provider that recommended to any company.</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block-two col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-mechanic"></span>
                                    <h4>Expert Engineers</h4>
                                    <div class="text">A high level service provider that recommended to any company.</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block-two col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-24-hours"></span>
                                    <h4>Professional Support</h4>
                                    <div class="text">A high level service provider that recommended to any company.</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block-two col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-team"></span>
                                    <h4>Compatitive Price</h4>
                                    <div class="text">A high level service provider that recommended to any company.</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block-two col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-manufacturing-1"></span>
                                    <h4>Quality Product</h4>
                                    <div class="text">A high level service provider that recommended to any company.</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block-two col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-clock-4"></span>
                                    <h4>Quick Delivery </h4>
                                    <div class="text">A high level service provider that recommended to any company.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Features Section -->


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

        <!-- FAQ's Section -->
        <section class="faq-section">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title">
                    <span class="float-text">Faqs</span>
                    <h2>General <span>Questions</span></h2>
                </div>
                
                <div class="row clearfix">
                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!--Accordian Box-->
                            <ul class="accordion-box">
                                <!--Block-->
                                <li class="accordion block wow fadeInUp">
                                    <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span> </div>What is Cohousing?</div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Lorem ipsum dolor amet consectur adipicing elit eiusmod tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis nostrud exercitation ullamco laboris.</div>
                                        </div>
                                    </div>
                                </li>

                                <!--Block-->
                                <li class="accordion block active-block wow fadeInUp">
                                    <div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span> </div>Can we change the design?</div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <div class="text">Lorem ipsum dolor amet consectur adipicing elit eiusmod tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis nostrud exercitation ullamco laboris.</div>
                                        </div>
                                    </div>
                                </li>
                                
                                <!--Block-->
                                <li class="accordion block wow fadeInUp">
                                    <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span> </div>How is the privacy issues?</div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Lorem ipsum dolor amet consectur adipicing elit eiusmod tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis nostrud exercitation ullamco laboris.</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!--Accordian Box-->
                            <ul class="accordion-box">
                                <!--Block-->
                                <li class="accordion block active-block wow fadeInUp">
                                    <div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span> </div>What is Cancelation Period?</div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <div class="text">Lorem ipsum dolor amet consectur adipicing elit eiusmod tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis nostrud exercitation ullamco laboris.</div>
                                        </div>
                                    </div>
                                </li>

                                <!--Block-->
                                <li class="accordion block wow fadeInUp">
                                    <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span> </div>What is Cohousing?</div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Lorem ipsum dolor amet consectur adipicing elit eiusmod tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis nostrud exercitation ullamco laboris.</div>
                                        </div>
                                    </div>
                                </li>
                                
                                <!--Block-->
                                <li class="accordion block wow fadeInUp">
                                    <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span> </div>How is the privacy issues?</div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Lorem ipsum dolor amet consectur adipicing elit eiusmod tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis nostrud exercitation ullamco laboris.</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>  
                </div>
            </div>
        </section>
        <!-- End FAQ's Section -->

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


        <!-- Testimonial Section -->
        <section class="testimonial-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <span class="float-text">Testimonials</span>
                    <h2>Our Clients <span>Reviews</span></h2>
                </div>

                <div class="single-item-carousel owl-carousel owl-theme">
                    
                    <!-- Testimonial Block -->
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <div class="image">
                                <img src="/assets/images/resource/testi-thumb.jpg" alt=""/>
                            </div>
                            <div class="text">“ Well the wireless boot argy-bargy super squiffy my lady off his nut golly gosh, hunky-dory dropped a clanger chip shop Harry cockup bum bag arse over tit, loo at public school a cracking goal lemon squeezy. “</div>
                            <h3>Lance Bogrol</h3>
                            <div class="designation">Consultant</div>
                        </div>
                    </div>
                    
                    <!-- Testimonial Block -->
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <div class="image">
                                <img src="/assets/images/resource/testi-thumb-2.jpg" alt=""/>
                            </div>
                            <div class="text">“ Well the wireless boot argy-bargy super squiffy my lady off his nut golly gosh, hunky-dory dropped a clanger chip shop Harry cockup bum bag arse over tit, loo at public school a cracking goal lemon squeezy. “</div>
                            <h3>Lance Bogrol</h3>
                            <div class="designation">Consultant</div>
                        </div>
                    </div>
                    
                    <!-- Testimonial Block -->
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <div class="image">
                                <img src="/assets/images/resource/testi-thumb-3.jpg" alt=""/>
                            </div>
                            <div class="text">“ Well the wireless boot argy-bargy super squiffy my lady off his nut golly gosh, hunky-dory dropped a clanger chip shop Harry cockup bum bag arse over tit, loo at public school a cracking goal lemon squeezy. “</div>
                            <h3>Lance Bogrol</h3>
                            <div class="designation">Consultant</div>
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
                <div class="subscribe-form">
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
                    <span class="float-text">News</span>
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
