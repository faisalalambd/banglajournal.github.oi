@extends('layouts.website_home')
@section('content')
    <section>

        <!-- Trending Area Start -->
        <div class="trending-area fix">

            <div class="container">

                <!--<div class="trending-main" style="margin-bottom: 3rem;">-->

                    <!-- Trending Tittle -->
                <!--    <div class="row">-->

                <!--        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">-->

                <!--            <div class="trending-tittle">-->

                <!--                <strong>শীর্ষ খবর</strong>-->

                <!--                <div class="trending-animated">-->

                <!--                    <ul id="js-news" class="js-hidden">-->

                <!--                        <li class="news-item">Bangladesh dolor sit amet, consectetur adipisicing elit.-->
                <!--                        </li>-->

                <!--                        <li class="news-item">Spondon IT sit amet, consectetur.......</li>-->

                <!--                        <li class="news-item">Rem ipsum dolor sit amet, consectetur adipisicing elit.-->
                <!--                        </li>-->

                <!--                    </ul>-->

                <!--                </div>-->

                <!--            </div>-->

                <!--        </div>-->

                <!--    </div>-->


                    <div class="row mb-3">

                        <div class="col-12 col-xs-12 col-sm-12 col-md-9 col-lg-9"
                            style="max-width: 73%; margin-right: 1.5rem; padding: 0;">

                            <style>
                                .youtube-area .testmonial-nav {
                                    margin-top: 0.5rem;
                                }

                            </style>

                            <!-- Start Youtube -->
                            <div class="youtube-area">

                                <div class="container">

                                    <div class="row clearflex">

                                        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                            <div class="video-items-active">
                                                @foreach ($sliders as $slider)
                                                    <div class="video-items">


                                                        <div class="row" id="custom_media_row">

                                                            <div class="col-12 col-xs-12 col-sm-12 col-md-8 col-lg-8">

                                                                <img src="{{ asset($slider->image) }}" alt=""
                                                                    class="customSlider_bigImage">

                                                            </div>


                                                            <div
                                                                class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 customSlider_right">

                                                                <h4 class="custom_slider_header">{{ $slider->title }}</h4>

                                                                <p class="custom_slider_para">{!! $slider->short_description !!}…</p>

                                                                <a href="{{route('newsDetails',['slug'=>$slider->slug])}}" class="custom_slider_readmore">» read more</a>

                                                            </div>

                                                        </div>


                                                    </div>
                                                @endforeach



                                            </div>


                                        </div>

                                    </div>


                                    <div class="video-info" style="border-bottom: none;">

                                        <div class="row">

                                            <div class="col-lg-12 col-md-3 col-sm-6">

                                                <div class="testmonial-nav text-center">

                                                    @foreach ($sliders as $slider)
                                                        <div class="single-video">
        
                                                        <a href="{{route('newsDetails',['slug'=>$slider->slug])}}">
                                                            <img src="{{ asset($slider->image) }}" alt=""
                                                                style="width: 95%; height: 8rem; margin-bottom: 0.3rem;">

                                                            <div class="video-intro">

                                                                <h4>{{ $slider->title }}</h4>

                                                            </div>
                                                            </a>

                                                        </div>
                                                    @endforeach



                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
                            <!-- End Start youtube -->

                        </div>


                        <!-- Riht content -->
                        <div class="col-12 col-xs-12 col-sm-12 col-md-3 col-lg-3" style="padding: 0; margin-bottom: 3rem;">

                            <!-- Whats New Start -->
                            <section class="whats-news-area custom_weekly2-single">

                                <div class="container">

                                    <div class="row d-flex justify-content-between">

                                        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                            <div class="properties__button mt-4">

                                                <!--Nav Button  -->
                                                <nav>

                                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">

                                                        <a class="nav-item nav-link active" id="nav-home-tab"
                                                            data-toggle="tab" href="#nav-home" role="tab"
                                                            aria-controls="nav-home" aria-selected="true">Latest</a>


                                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                                            href="#nav-profile" role="tab" aria-controls="nav-profile"
                                                            aria-selected="false">Lifestyle</a>

                                                    </div>

                                                </nav>
                                                <!--End Nav Button  -->

                                            </div>

                                        </div>

                                    </div>


                                    <div class="row">

                                        <div class="col-12">

                                            <!-- Nav Card -->
                                            <div class="tab-content" id="nav-tabContent">

                                                <style>
                                                    .post_item {
                                                        margin-bottom: 1rem;
                                                    }


                                                    .media-body {
                                                        margin-left: 1rem;
                                                    }

                                                    .media-body a h3 {
                                                        font-size: 1rem;
                                                    }

                                                    .media-body p {
                                                        font-size: 0.8rem;
                                                    }

                                                </style>

                                                <!-- card one -->
                                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                                    aria-labelledby="nav-home-tab">

                                                    <div class="whats-news-caption">

                                                       
                                                    @foreach($latests as $latest)
                                                        <div class="media post_item">
                                                            <img src="{{ asset($latest->image) }}"
                                                                alt="post" width="80" height="80">
                                                            <div class="media-body">
                                                                <a href="{{route('newsDetails',['slug'=>$latest->slug])}}">
                                                                    <h3>{{$latest->title}}</h3>
                                                                </a>
                                                               
                                                            </div>
                                                        </div>

                                                        @endforeach


                                                 

                                                    </div>

                                                </div>


                                                <!-- Card two -->
                                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                                    aria-labelledby="nav-profile-tab">

                                                    <div class="whats-news-caption">

                                                        <div class="media post_item">
                                                            <img src="{{ asset('website_home') }}/assets/img/post/post_1.png"
                                                                alt="post">
                                                            <div class="media-body">
                                                                <a href="single-blog.html">
                                                                    <h3>From life was you fish...</h3>
                                                                </a>
                                                               
                                                            </div>
                                                        </div>


                                                        <div class="media post_item">
                                                            <img src="{{ asset('website_home') }}/assets/img/post/post_2.png"
                                                                alt="post">
                                                            <div class="media-body">
                                                                <a href="single-blog.html">
                                                                    <h3>The Amazing Hubble</h3>
                                                                </a>
                                                                <p>02 Hours ago</p>
                                                            </div>
                                                        </div>


                                                        <div class="media post_item">
                                                            <img src="{{ asset('website_home') }}/assets/img/post/post_3.png"
                                                                alt="post">
                                                            <div class="media-body">
                                                                <a href="single-blog.html">
                                                                    <h3>Astronomy Or Astrology</h3>
                                                                </a>
                                                                <p>03 Hours ago</p>
                                                            </div>
                                                        </div>


                                                        <div class="media post_item">
                                                            <img src="{{ asset('website_home') }}/assets/img/post/post_4.png"
                                                                alt="post">
                                                            <div class="media-body">
                                                                <a href="single-blog.html">
                                                                    <h3>Asteroids telescope</h3>
                                                                </a>
                                                                <p>01 Hours ago</p>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                            <!-- End Nav Card -->

                                        </div>

                                    </div>

                                </div>

                            </section>
                            <!-- Whats New End -->

                        </div>

                    </div>

                </div>

            </div>

        </div>
        <!-- Trending Area End -->

    </section>



    <section class="container  section-2">

        <div class="row pt-2">
            @foreach ($latests as $latest)
                <div class="col-md-3 mb-4">
                    <a href="{{route('newsDetails',['slug'=>$latest->slug])}}" class="news">
                        <img src="{{ asset($latest->image) }}"
                            alt="Author-Amitav-Ghosh-lauds-Bangladeshs-climate--innovations">
                        <div class="p-3" style="background: white;">
                            <p class="mb-2" style="color: black;">{{ $latest->title }}</p>
                            <span class="py-1 px-2 me-2">{{ $latest->category }}</span><time style="color: black;">27 min ago</time>
                        </div>
                    </a>
                </div>
            @endforeach



        </div>

    </section>



    <section class="container mt-4 section-2">

        <h1 class="section-title"><a href="#">National</a></h1>

        <div class="row pt-2">

            @foreach ($national as $nationals)
                <div class="col-md-3 mb-4 bg">
                    <a href="{{route('newsDetails',['slug'=>$nationals->slug])}}" class="news">
                        <img src="{{ asset($nationals->image) }}"
                            alt="Author-Amitav-Ghosh-lauds-Bangladeshs-climate--innovations">
                        <div class="p-3" style="background: #fffffff7;">
                            <p class="mb-2" style="color: black;">{{ $nationals->title }}</p>
                            <span class="py-1 px-2 me-2">{{ $nationals->category }}</span><time style="color: black;">27 min ago</time>
                        </div>
                    </a>
                </div>
            @endforeach






        </div>

    </section>



    <section>

        <div class="container">

            <div class="row">

                <div class="col-12 col-xs-12 col-sm-12 col-md-9 col-lg-9">

                    <section class="container mt-4 section-2">

                        <h1 class="section-title"><a href="#">Politics</a></h1>

                        <div class="row pt-2">
                            @foreach ($politics as $politic)
                                <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 bg mb-5">
                                    <a href="{{route('newsDetails',['slug'=>$politic->slug])}}" class="news">
                                        <img src="{{ asset($politic->image) }}"
                                            alt="Author-Amitav-Ghosh-lauds-Bangladeshs-climate--innovations">
                                        <div class="p-3">
                                            <p class="mb-2">{{ $politic->title }}</p>
                                            <span class="py-1 px-2 me-2">{{ $politic->category }}</span><time>27 min
                                                ago</time>
                                        </div>
                                    </a>
                                </div>
                            @endforeach



                        </div>

                    </section>
                </div>


                <div class="col-12 col-xs-12 col-sm-12 col-md-3 col-lg-3 custom_weekly2-single mt-5">

                    <div class="col-12">
                        <h2 class="contact-title custom_contact-title mt-2">Your Comment</h2>
                    </div>

                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
                        novalidate="novalidate">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="3" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter Message'"
                                        placeholder=" Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
                                        placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                                        placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
                                        placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section>



    <section style="margin-top: 3rem;">

        <div class="container mb-5">



            <div class="row space-top visible-desktop visible-tablet">

                <div class="toptitle-photogallery">
                    <div>
                        Photo Gallery
                    </div>
                </div>


                <div class="row">

                    <style>
                        .html5-playpause {
                            display: none !important;
                        }

                        .html5-title-prefix {
                            display: none;
                        }

                        /* small mobile :320px. */
                        @media (max-width: 767px) {}

                    </style>

                    <div class="col-12 col-sm-12 col-md-7 col-lg-7">

                        <!-- Insert to your webpage where you want to display the carousel -->
                        <div id="amazingcarousel-container-1">
                            <div id="amazingcarousel-1"
                                style="display:none;position:relative;width:100%;max-width:660px;margin:0px auto 0px;">
                                <div class="amazingcarousel-list-container">
                                    <ul class="amazingcarousel-list">

                                        @foreach ($image_slides as $image_slide)
                                            <li class="amazingcarousel-item">
                                                <div class="amazingcarousel-item-container">
                                                    <div class="amazingcarousel-image"><a
                                                            href="{{ asset($image_slide->image) }}"
                                                            title="France : People walk on a beach at sunset in Houlgate, northern France, on August 8, 2020. AFP PHOTO"
                                                            class="html5lightbox" data-group="amazingcarousel-1"
                                                            data-width="960" data-height="720"><img
                                                                src="{{ asset($image_slide->image) }}"
                                                                alt="{{ $image_slide->title }}" width="660"
                                                                height="410" /></a>
                                                    </div>
                                                    <div class="amazingcarousel-title">{{ $image_slide->title }}</div>
                                                    <div class="amazingcarousel-description"></div>
                                                </div>
                                            </li>
                                        @endforeach




                                    </ul>
                                    <div class="amazingcarousel-prev"></div>
                                    <div class="amazingcarousel-next"></div>
                                </div>
                                <div class="amazingcarousel-nav"></div>
                                <div class="amazingcarousel-engine"><a href="http://amazingcarousel.com">JavaScript Image
                                        Carousel</a>
                                </div>
                            </div>
                        </div>
                        <!-- End of body section HTML codes -->

                    </div>



                    <div class="col-12 col-sm-12 col-md-5 col-lg-5 mt-5 mb-5">

                        <div class="row gallery-item">

                            @foreach ($image_homes as $image_home)
                                <div class="col-md-6">
                                    <a href="{{ asset($image_home->image) }}" class="img-pop-up">
                                        <div class="single-gallery-image"
                                            style="background: url({{ asset($image_home->image) }});">
                                        </div>
                                        <h5>uytuygjhgjhgjg</h5>
                                    </a>
                                </div>
                            @endforeach
                        </div>

                    </div>

                </div>

            </div>




        </div>
    </section>



    <section style="margin-top: 3rem;">

        <div class="container mb-5">

            <div class="row space-top visible-desktop visible-tablet">

                <div class="toptitle-photogallery">
                    <div>
                        Video Gallery
                    </div>
                </div>


                <div class="row">

                    <style>
                        .html5-playpause {
                            display: none !important;
                        }

                        .html5-title-prefix {
                            display: none;
                        }

                        /* small mobile :320px. */
                        @media (max-width: 767px) {}

                    </style>

                    <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                        @foreach ($video_big as $video_bigs)
                            <div class="single-video">
                                <iframe src="{{ asset($video_bigs->link) }}" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    style="width: 100%; height: 25rem; margin-top: 3rem;" allowfullscreen></iframe>
                                <div class="video-intro">
                                    <h4>{{ asset($video_bigs->title) }}</h4>
                                </div>
                            </div>
                        @endforeach
                    </div>



                    <div class="col-12 col-sm-12 col-md-5 col-lg-5 mt-5 mb-5">

                        <div class="row gallery-item">

                            @foreach ($video_homes as $video_home)
                                <div class="col-md-6">
                                    <div class="single-video">
                                        <iframe src="{{ asset($video_home->link) }}" frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            style="width: 100%;" allowfullscreen></iframe>
                                        <div class="video-intro">
                                            <h6>{{ asset($video_home->title) }}</h6>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>

                </div>

            </div>




        </div>
    </section>



    <section style="margin-top: 3rem;">

        <div class="trending-area fix">

            <div class="container">

                <div class="trending-main">

                    <div class="row">

                        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">

                            <h3>Trade</h3>

                            <hr style="margin: 0; border: 2px solid yellow;">


                            <div class="weekly2-news-area weekly2-pading gray-bg" style="padding: 2rem 0;">

                                <div class="weekly2-wrapper">

                                    <div class="row">

                                        @foreach ($trade as $trades)
                                            <div class="col-12 col-xs-12 col-sm-12 col-md-5 col-lg-5 mb-5"
                                                style="padding: 0;">

                                                <div class="weekly2-single custom_weekly2-single">

                                                    <div class="weekly2-img">

                                                        <img src="{{ asset($trades->image) }}" alt="">

                                                    </div>


                                                    <div class="weekly2-caption custom_weekly2-caption mt-3">

                                                        <h4><a href="{{route('newsDetails',['slug'=>$trades->slug])}}" style="font-size: 25px;">{{ $trades->title }}</a>
                                                        </h4>

                                                        <p>{{ $trades->short_description }}</p>

                                                    </div>

                                                </div>

                                            </div>
                                        @endforeach


                                        <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 mb-5">

                                            <!-- Whats New Start -->
                                            <section class="whats-news-area">

                                                <div class="row">

                                                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                                        <!-- Nav Card -->
                                                        <div class="tab-content" id="nav-tabContent">

                                                            <style>
                                                                .post_item {
                                                                    margin-bottom: 1rem;
                                                                }

                                                                .media-body a h3 {
                                                                    font-size: 1rem;
                                                                }

                                                                .media-body p {
                                                                    font-size: 0.8rem;
                                                                }

                                                            </style>

                                                            <div class="tab-pane fade show active" id="nav-home"
                                                                role="tabpanel" aria-labelledby="nav-home-tab">

                                                                <div class="whats-news-caption custom_whats-news-caption">

                                                                    @foreach ($tradenews as $tradenew)
                                                                        <div
                                                                            class="media post_item custom_media_post_item">
                                                                            <div class="row">

                                                                                <div class="col-8 col-xs-8 col-sm-8 col-md-8 col-lg-8"
                                                                                    style="padding: 0 0 0 1rem;">
                                                                                    <div class="media-body">
                                                                                        <a href="{{route('newsDetails',['slug'=>$tradenew->slug])}}">
                                                                                            <h3>{{ $tradenew->title }}
                                                                                            </h3>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>

                                                                                <div
                                                                                    class="col-4 col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                                                    <img src="{{ $tradenew->image }}"
                                                                                        alt="post">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach

                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Nav Card -->

                                                    </div>

                                                </div>

                                            </section>
                                            <!-- Whats New End -->

                                        </div>


                                        <div class="col-12 col-xs-12 col-sm-12 col-md-3 col-lg-3 mb-5">

                                            <!-- Whats New Start -->
                                            <section class="whats-news-area">

                                                <div class="row d-flex justify-content-between">

                                                    <div class="col-lg-12 col-md-12">

                                                        <style>
                                                            .custom_accordian_btn {
                                                                width: 100%;
                                                                background: #607d8b;
                                                                color: #fff;
                                                            }

                                                        </style>

                                                        <div id="accordion">

                                                            <div class="card">
                                                                <div class="card-header" id="headingOne"
                                                                    style="padding: 0;">
                                                                    <h5 class="mb-0">
                                                                        <button
                                                                            class="custom_accordian_btn nice-select collapsed"
                                                                            data-toggle="collapse"
                                                                            data-target="#collapseOne" aria-expanded="false"
                                                                            aria-controls="collapseOne">
                                                                            Collapsible Group Item #1
                                                                        </button>
                                                                    </h5>
                                                                </div>

                                                                <div id="collapseOne" class="collapse"
                                                                    aria-labelledby="headingOne" data-parent="#accordion"
                                                                    style="">
                                                                    <div class="card-body" style="padding: 0;">
                                                                        <table class="table table-bordered"
                                                                            style="margin-bottom: 0; background: #f0f0f0;">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th scope="col">#</th>
                                                                                    <th scope="col">First</th>
                                                                                    <th scope="col">Last</th>
                                                                                    <th scope="col">Handle</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th scope="row">1</th>
                                                                                    <td>Mark</td>
                                                                                    <td>Otto</td>
                                                                                    <td>@mdo</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">2</th>
                                                                                    <td>Jacob</td>
                                                                                    <td>Thornton</td>
                                                                                    <td>@fat</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">3</th>
                                                                                    <td colspan="2">Larry the Bird
                                                                                    </td>
                                                                                    <td>@twitter</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="card">
                                                                <div class="card-header" id="headingTwo"
                                                                    style="padding: 0;">
                                                                    <h5 class="mb-0">
                                                                        <button
                                                                            class="custom_accordian_btn nice-select collapsed"
                                                                            data-toggle="collapse"
                                                                            data-target="#collapseTwo" aria-expanded="false"
                                                                            aria-controls="collapseTwo">
                                                                            Collapsible Group Item #2
                                                                        </button>
                                                                    </h5>
                                                                </div>
                                                                <div id="collapseTwo" class="collapse"
                                                                    aria-labelledby="headingTwo" data-parent="#accordion"
                                                                    style="">
                                                                    <div class="card-body" style="padding: 0;">
                                                                        <table class="table table-bordered"
                                                                            style="margin-bottom: 0; background: #f0f0f0;">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th scope="col">#</th>
                                                                                    <th scope="col">First</th>
                                                                                    <th scope="col">Last</th>
                                                                                    <th scope="col">Handle</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th scope="row">1</th>
                                                                                    <td>Mark</td>
                                                                                    <td>Otto</td>
                                                                                    <td>@mdo</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">2</th>
                                                                                    <td>Jacob</td>
                                                                                    <td>Thornton</td>
                                                                                    <td>@fat</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">3</th>
                                                                                    <td colspan="2">Larry the Bird
                                                                                    </td>
                                                                                    <td>@twitter</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </section>
                                            <!-- Whats New End -->

                                        </div>

                                    </div>

                                </div>



                            </div>
                            <!-- End Weekly-News -->

                        </div>

                    </div>

                </div>

            </div>

        </div>
        <!-- Trending Area End -->

    </section>
@endsection
