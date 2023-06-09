<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bangla Journal </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('website_home') }}/assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('website_home') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('website_home') }}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('website_home') }}/assets/css/ticker-style.css">
    <link rel="stylesheet" href="{{ asset('website_home') }}/assets/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('website_home') }}/assets/css/slicknav.css">
    <link rel="stylesheet" href="{{ asset('website_home') }}/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('website_home') }}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('website_home') }}/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{ asset('website_home') }}/assets/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('website_home') }}/assets/css/slick.css">
    <link rel="stylesheet" href="{{ asset('website_home') }}/assets/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('website_home') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('website_home') }}/assets/css/responsive.css">

    <!-- Insert to your webpage before the </head> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website_home') }}/carouselengine/initcarousel-1.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('website_home') }}/carouselengine/initcarousel-2.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('website_home') }}/carouselengine/initcarousel-3.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('website_home') }}/carouselengine/initcarousel-4.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('website_home') }}/carouselengine/initcarousel-5.css">
    <!-- End of head section HTML codes -->
</head>

<body>

    <!-- Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top black-bg d-none d-md-block">
                    <div class="container">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        <li><img src="{{ asset('website_home') }}/assets/img/icon/header_icon1.png"
                                                alt="">34ºc, Sunny </li>
                                        <li><img src="{{ asset('website_home') }}/assets/img/icon/header_icon1.png"
                                                alt="">Tuesday, 18th June, 2019
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li> <a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-mid d-none d-md-block">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="{{route('slider')}}"><img src="{{ asset('website_home') }}/assets/img/logo/TIMESJOURNAL-logo.png"
                                            alt="" style="width: 100%; height: 5rem;"></a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="header-banner f-right ">
                                    <img src="{{ asset('website_home') }}/assets/img/hero/header_card.jpg" alt="" style="width: 70%; margin-left: 16rem;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                                <!-- sticky -->
                                <div class="sticky-logo">
                                    <a href="{{route('slider')}}"><img src="{{ asset('website_home') }}/assets/img/logo/TIMESJOURNAL-logo.png"
                                            alt=""></a>
                                </div>
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-md-block">
                                    <nav>
                                   
                                        <ul id="navigation">
                                        @foreach($category as $categories)
                                            <li><a href="{{route('categoryNews',['category_name'=>$categories->category_name])}}">{{$categories->category_name}}</a></li>
                                        @endforeach
                                           
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-4">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <i class="fas fa-search special-tag"></i>
                                    <div class="search-box">
                                        <form action="#">
                                            <input type="text" placeholder="Search">

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>


    @yield('content')


    <footer>
        <!-- footer-bottom aera -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="footer-copy-right">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved |
                                    This template is made with <i class="ti-heart" aria-hidden="true"></i> by <br>
                                    <a href="https://srsoftbangladesh.srsoftbd.xyz/" target="_blank">S/R Soft
                                        Bangladesh</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="footer-menu f-right">
                                <ul>
                                    <li><a href="#">Terms of use</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="{{ asset('website_home') }}/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('website_home') }}/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('website_home') }}/assets/js/popper.min.js"></script>
    <script src="{{ asset('website_home') }}/assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('website_home') }}/assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('website_home') }}/assets/js/owl.carousel.min.js"></script>
    <script src="{{ asset('website_home') }}/assets/js/slick.min.js"></script>
    <!-- Date Picker -->
    <script src="{{ asset('website_home') }}/assets/js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('website_home') }}/assets/js/wow.min.js"></script>
    <script src="{{ asset('website_home') }}/assets/js/animated.headline.js"></script>
    <script src="{{ asset('website_home') }}/assets/js/jquery.magnific-popup.js"></script>

    <!-- Breaking New Pluging -->
    <script src="{{ asset('website_home') }}/assets/js/jquery.ticker.js"></script>
    <script src="{{ asset('website_home') }}/assets/js/site.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="{{ asset('website_home') }}/assets/js/jquery.scrollUp.min.js"></script>
    <script src="{{ asset('website_home') }}/assets/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('website_home') }}/assets/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="{{ asset('website_home') }}/assets/js/contact.js"></script>
    <script src="{{ asset('website_home') }}/assets/js/jquery.form.js"></script>
    <script src="{{ asset('website_home') }}/assets/js/jquery.validate.min.js"></script>
    <script src="{{ asset('website_home') }}/assets/js/mail-script.js"></script>
    <script src="{{ asset('website_home') }}/assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('website_home') }}/assets/js/plugins.js"></script>
    <script src="{{ asset('website_home') }}/assets/js/main.js"></script>


    <!-- Insert to your webpage before the </head> -->
    <script src="{{ asset('website_home') }}/carouselengine/jquery.js"></script>
    <script src="{{ asset('website_home') }}/carouselengine/amazingcarousel.js"></script>
    <script src="{{ asset('website_home') }}/carouselengine/initcarousel-1.js"></script>
    <script src="{{ asset('website_home') }}/carouselengine/initcarousel-2.js"></script>
    <script src="{{ asset('website_home') }}/carouselengine/initcarousel-3.js"></script>
    <script src="{{ asset('website_home') }}/carouselengine/initcarousel-4.js"></script>
    <script src="{{ asset('website_home') }}/carouselengine/initcarousel-5.js"></script>
    <!-- End of head section HTML codes -->

</body>

</html>
