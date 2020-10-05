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
                        <li class="current dropdown"><a href="/">Home</a>
                            <ul>
                                <li><a href="/">Home Showcase</a></li>
                                <li><a href="/carossel">Home Carousel</a></li>
                                <li><a href="/home-banner">Home Banner</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="/about-us">About</a>
                            <ul>
                                <li><a href="/about-us">About Us</a></li>
                                <li><a href="/about-me">About Me</a></li>
                                <li><a href="/faqs">FAQ's</a></li>
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
                                <li><a href="/seo-digital-marketing">Degital Marketing & SEO</a></li>
                                
                            </ul>
                        </li>
                        <li class="dropdown"><a href="/projects-details">Products</a>
                            <ul>
                                <li><a href="#">Resulta-School Management System</a></li>
                                <li><a href="#">Face Analyser-Skin Care Assistant</a></li>
                                <li><a href="/projects-details">Projects Details</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="/contact-us">Contact</a></li>
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
        
        <!-- Main Header-->
        <header class="main-header">
            <div class="outer-container">
                <div class="main-box clearfix">
                    <div class="logo-box">
                        <div class="logo"><a href="/"><img src="/assets/images/logo.png" alt="" title=""></a></div>
                    </div>

                    
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
        </header>
        <!--End Main Header -->

        <!-- Header Search -->
        <div class="search-popup">
            <button class="close-search"><span class="fa fa-long-arrow-alt-up"></span></button>
            <form method="post" action="http://ary-themes.com/html/sinaea/blog.html">
                <div class="form-group">
                    <input type="search" name="search-field" value="" placeholder="Search" required="">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
        <!-- End Header Search -->
        
        <!-- Banner Section -->
        <section class="banner-section">
            <div id="banner-slider" class="banner-slider-wrapper swiper-container">
                <div class="swiper-wrapper banner-slider">
                    <!-- SLIDER ITEM -->
                    <div class="banner-slider-item swiper-slide">
                        <figure class="media-wrapper slide-inner"><img src="/assets/images/main-slider/1.jpg" alt=""></figure>

                        <div class="content-box">
                            <div class="content">
                                <div class="auto-container">
                                    <div class="inner">
                                        <h2 class="mask-loader">Welcome</h2>
                                        <div class="text mask-loader">
                                            We are a boutique consultation firm that specialize in building great customer experiences through mobile, web and conversational software. </div>
                                        <div class="btn-box mask-loader"><a href="about-us.html" class="theme-btn btn-style-two"><span class="btn-title">About Us</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SLIDER ITEM -->

                    <!-- SLIDER ITEM -->
                    <div class="banner-slider-item swiper-slide">
                        <figure class="media-wrapper slide-inner"><img src="/assets/images/main-slider/3.jpg" alt=""></figure>

                        <div class="content-box">
                            <div class="content">
                                <div class="auto-container">
                                    <h3>Software <br> <span class="theme_color">Development</span></h3>
                                    <div class="text">We are a boutique consultation firm that specialize in <br>building great customer experiences through mobile, web <br>and conversational software. </div>
                                    <div class="btn-box"><a href="about-us.html" class="theme-btn btn-style-two"><span class="btn-title">Our Services</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SLIDER ITEM -->

                    <!-- SLIDER ITEM -->
                    <div class="banner-slider-item swiper-slide">
                        <figure class="media-wrapper slide-inner"><img src="/assets/images/main-slider/2.jpg" alt=""></figure>

                        <div class="content-box">
                            <div class="content">
                                <div class="auto-container">
                                    <h3>Reimagine Your <span class="theme_color">Business</span> </h3>
                                    <div class="text">We build custom software application <br>for a transforming world. </div>
                                    <div class="btn-box"><a href="services.html" class="theme-btn btn-style-two"><span class="btn-title">Our Services</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SLIDER ITEM -->

                    <!-- SLIDER ITEM -->
                    <div class="banner-slider-item swiper-slide">
                        <figure class="media-wrapper slide-inner"><img src="/assets/images/main-slider/4.jpg" alt=""></figure>

                        <div class="content-box">
                            <div class="content">
                                <div class="auto-container">
                                    <h3>Whatever We Start<br> We Think Through To  <span class="theme_color">The End</span></h3>
                                    <div class="text">We do make a plan for designing and developing mobile apps and web development solutions <br> that help businesses to solve organizational challenges, improve sales, and customer engagement. <br> From project ideation to release in the market, we deliver our clients with the best software <br> development service for their business.</div>
                                    <div class="btn-box"><a href="about-us.html" class="theme-btn btn-style-two"><span class="btn-title">Our Projects</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SLIDER ITEM -->

                    <!-- SLIDER ITEM -->
                    <div class="banner-slider-item swiper-slide">
                        <figure class="media-wrapper slide-inner"><img src="/assets/images/main-slider/5.jpg" alt=""></figure>

                        <div class="content-box">
                            <div class="content">
                                <div class="auto-container">
                                    <h3>Everybody Gets Exactly <br><span class="theme_color">What They Need</span></h3>
                                    <div class="text">We provide end-to-end software development <br> services without compromising standard processes <br> and quality assurance. We have served multiple <br> companies globally transforming concepts into <br> genuine products. </div>
                                    <div class="btn-box"><a href="team.html" class="theme-btn btn-style-two"><span class="btn-title">Our Team</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SLIDER ITEM -->

                    <!-- SLIDER ITEM -->
                    <div class="banner-slider-item swiper-slide">
                        <figure class="media-wrapper slide-inner"><img src="/assets/images/main-slider/6.jpg" alt=""></figure>

                        <div class="content-box">
                            <div class="content">
                                <div class="auto-container">
                                    <h3>Getting Things<span class="theme_color"> Done</span></h3>
                                    <div class="text">Getting Things Done is the mantra we live by. Our ingenious team <br> has a “can-do” attitude and believes in Getting Things Done. This <br> mantra makes sense when we deliver our client’s project on time. </div>
                                    <div class="btn-box"><a href="contact.html" class="theme-btn btn-style-two"><span class="btn-title">Contact Us</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SLIDER ITEM -->
                </div>

                <div class="banner-slider-arrows">
                    <i id="banner-slider-previous" class="banner-slider-arrow banner-slider-arrow--previous fa fa-angle-left"></i>
                    <i id="banner-slider-next" class="banner-slider-arrow banner-slider-arrow--next fa fa-angle-right"></i>
                </div>

                <div class="banner-slider-counter"><div id="banner-slider-counter" class="counter"></div></div>

                <!-- Social Links -->
                <div class="circular-menu">
                    <div class="items-wrapper">
                        <a href="#" class="menu-item"><span class="fab fa-facebook"></span></a>
                        <a href="#" class="menu-item"><span class="fab fa-twitter"></span></a>
                        <a href="#" class="menu-item"><span class="fab fa-google-plus-g"></span></a>
                        <a href="#" class="menu-item"><span class="fab fa-linkedin-in"></span></a>
                    </div>
                    <button class="floating-btn"><i class="fa fa-share-alt"></i></button>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

    </main>
    <!-- End Main Content -->
</div>

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

