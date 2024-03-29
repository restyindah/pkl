<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Viral Story - Viral News Magazine Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Breaking News Area -->
                            <div class="top-breaking-news-area">
                                <div id="breakingNewsTicker" class="ticker">
                                    <ul>
                                        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                                        <li><a href="#">Welcome to Colorlib Family.</a></li>
                                        <li><a href="#">Nam eu metus sitsit amet, consec!</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Social Info Area-->
                            <div class="top-social-info-area">
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="viral-news-main-menu" id="stickyMenu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="viralnewsNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.html"><img src="{{ asset/frontend/img/core-img/logo.png')}}" alt="Logo"></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="catagory.html">Top 10</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="/">Home</a></li>
                                            <li><a href="catagory.html">Catagories</a></li>
                                            <li><a href="single-post.html">Single Article</a></li>
                                            <li><a href="quize-article.html">Quize Article</a></li>
                                            <li><a href="/contact">Contact</a></li>
                                            <li><a href="#">Dropdown</a>
                                                <ul class="dropdown">
                                                    <li><a href="/">Home</a></li>
                                                    <li><a href="catagory.html">Catagories</a></li>
                                                    <li><a href="single-post.html">Single Article</a></li>
                                                    <li><a href="quize-article.html">Quize Article</a></li>
                                                    <li><a href="/contact">Contact</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="index.html">Funny</a></li>
                                    <li><a href="index.html">Videos</a></li>
                                    <li><a href="index.html">Don’t Miss</a></li>
                                    <li><a href="#">Mega Menu</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="catagory.html">Catagories</a></li>
                                                <li><a href="single-post.html">Single Article</a></li>
                                                <li><a href="quize-article.html">Quize Article</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="catagory.html">Catagories</a></li>
                                                <li><a href="single-post.html">Single Article</a></li>
                                                <li><a href="quize-article.html">Quize Article</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="catagory.html">Catagories</a></li>
                                                <li><a href="single-post.html">Single Article</a></li>
                                                <li><a href="quize-article.html">Quize Article</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="catagory.html">Catagories</a></li>
                                                <li><a href="single-post.html">Single Article</a></li>
                                                <li><a href="quize-article.html">Quize Article</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>

                                <!-- Search Button -->
                                <div class="search-btn">
                                    <i id="searchbtn" class="fa fa-search" aria-hidden="true"></i>
                                </div>

                                <!-- Search Form -->
                                <div class="viral-search-form">
                                    <form id="search" action="#" method="get">
                                        <input type="text" name="search-terms" placeholder="Enter your keywords ...">
                                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form>
                                </div>

                                <!-- Video Post Button -->
                                <div class="add-post-button">
                                    <a href="#" class="btn add-post-btn">Add Post</a>
                                </div>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Viral News Breadcumb Area Start ##### -->
    <div class="viral-news-breadcumb-area section-padding-50">
        <div class="container h-100">
            <div class="row h-100 align-items-center">

                <!-- Breadcumb Area -->
                <div class="col-12 col-md-4">
                    <h3>Contact</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>

                <!-- Add Widget -->
                <div class="col-12 col-md-8">
                    <div class="add-widget">
                        <a href="#"><img src="{{ asset('assets/frontend/img/bg-img/add2.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Viral News Breadcumb Area End ##### -->

    <!-- ##### Contact Form Area Start ##### -->
    <div class="contact-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <!-- Contact Title -->
                    <div class="contact-title">
                        <h4>Get in touch</h4>
                    </div>

                    <!-- Contact Form Area -->
                    <div class="contact-form-area mb-70">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <input type="text" class="form-control" id="name" placeholder="Name">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="email" class="form-control" id="email" placeholder="E-mail">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn viral-btn mt-30" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Contact Info -->
                    <div class="contact-title">
                        <h4>Contact Info</h4>
                    </div>

                    <div class="contact-info-details d-flex mb-100">
                        <!-- Single Contact Information -->
                        <div class="single-contact">
                            <h6 class="mb-70">Marketing</h6>
                            <div class="single-contact-information">
                                <h6>Address:</h6>
                                <p>481 Creekside Lane Avila <br>Beach, CA 93424</p>
                            </div>
                        </div>

                        <!-- Single Contact Information -->
                        <div class="single-contact">
                            <h6 class="mb-70">Editors</h6>
                            <div class="single-contact-information">
                                <h6>Phone:</h6>
                                <p>+53 345 7953 32453 <br>+53 345 7557 822112</p>
                            </div>
                        </div>

                        <!-- Single Contact Information -->
                        <div class="single-contact">
                            <h6 class="mb-70">Main Office</h6>
                            <div class="single-contact-information">
                                <h6>Email:</h6>
                                <p>yourmail@gmail.com</p>
                            </div>
                        </div>
                    </div>

                    <!-- Google Maps Iframe -->
                    <div class="google-maps">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d299449.62596270425!2d-118.5394683879778!3d33.98014598121335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos+Angeles%2C+CA%2C+USA!5e0!3m2!1sen!2sbd!4v1531177364338" allowfullscreen></iframe>
                    </div>
                </div>

                <!-- Blog Sidebar Area -->
                <div class="col-12 col-lg-4">

                    <div class="blog-sidebar-area">

                        <!-- Newsletter Widget -->
                        <div class="newsletter-widget mb-70">
                            <h4>Sign up to <br>our newsletter</h4>
                            <form action="#" method="post">
                                <input type="text" name="text" placeholder="Name">
                                <input type="email" name="email" placeholder="Email">
                                <button type="submit" class="btn w-100">Subscribe</button>
                            </form>
                        </div>

                        <!-- Trending Articles Widget -->
                        <div class="treading-articles-widget mb-70">
                            <h4>Trending Articles</h4>

                            <!-- Single Trending Articles -->
                            <div class="single-blog-post style-4">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <a href="#"><img src="{{ asset/frontend/img/bg-img/15.jpg')}}" alt=""></a>
                                    <span class="serial-number">01.</span>
                                </div>
                                <!-- Post Data -->
                                <div class="post-data">
                                    <a href="#" class="post-title">
                                        <h6>This Is How Notebooks Of An Artist Who Travels Around The World Look</h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-author">By <a href="#">Michael Smithson</a></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Trending Articles -->
                            <div class="single-blog-post style-4">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <a href="#"><img src="{{ asset/frontend/img/bg-img/16.jpg')}}" alt=""></a>
                                    <span class="serial-number">02.</span>
                                </div>
                                <!-- Post Data -->
                                <div class="post-data">
                                    <a href="#" class="post-title">
                                        <h6>Artist Recreates People’s Childhood Memories With Realistic Dioramas</h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-author">By <a href="#">Michael Smithson</a></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Trending Articles -->
                            <div class="single-blog-post style-4">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <a href="#"><img src="{{ asset/frontend/img/bg-img/17.jpg')}}" alt=""></a>
                                    <span class="serial-number">03.</span>
                                </div>
                                <!-- Post Data -->
                                <div class="post-data">
                                    <a href="#" class="post-title">
                                        <h6>Artist Recreates People’s Childhood Memories With Realistic Dioramas</h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-author">By <a href="#">Michael Smithson</a></p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Add Widget -->
                        <div class="add-widget">
                            <a href="#"><img src="{{ asset/frontend/img/bg-img/add.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Contact Form Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">

        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="footer-widget-area">
                            <!-- Footer Logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img src="{{ asset/frontend/img/core-img/logo.png')}}" alt=""></a>
                            </div>
                            <!-- Footer Nav -->
                            <div class="footer-nav">
                                <ul>
                                    <li class="active"><a href="#">Top 10</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Funny</a></li>
                                    <li><a href="#">Advertising</a></li>
                                    <li><a href="#">Celebs</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                    <li><a href="#">Videos</a></li>
                                    <li><a href="#">Travel</a></li>
                                    <li><a href="#">Features</a></li>
                                    <li><a href="#">Submit a video</a></li>
                                    <li><a href="#">Don’tMiss</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Newsletter Widget -->
                        <div class="newsletter-widget">
                            <h4>Sign up to <br>our newsletter</h4>
                            <form action="#" method="post">
                                <input type="text" name="text" placeholder="Name">
                                <input type="email" name="email" placeholder="Email">
                                <button type="submit" class="btn w-100">Subscribe</button>
                            </form>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="footer-widget-area">
                            <!-- Widget Title -->
                            <h4 class="widget-title">Latest articles</h4>

                            <!-- Single Latest Post -->
                            <div class="single-blog-post style-2 d-flex align-items-center">
                                <div class="post-thumb">
                                    <a href="#"><img src="{{ asset/frontend/img/bg-img/4.jpg')}}" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-title">
                                        <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-date"><a href="#">7:00 AM | April 14</a></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Latest Post -->
                            <div class="single-blog-post style-2 d-flex align-items-center">
                                <div class="post-thumb">
                                    <a href="#"><img src="{{ asset/frontend/img/bg-img/5.jpg')}}" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-title">
                                        <h6>Sed a elit euismod augue semper congue sit amet ac.</h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-date"><a href="#">7:00 AM | April 14</a></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Latest Post -->
                            <div class="single-blog-post style-2 d-flex align-items-center">
                                <div class="post-thumb">
                                    <a href="#"><img src="{{ asset/frontend/img/bg-img/6.jpg')}}" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-title">
                                        <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-date"><a href="#">7:00 AM | April 14</a></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Copywrite -->
                        <p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>