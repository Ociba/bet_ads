<?php

use Illuminate\Support\Facades\Session;

//Session::forget("selectedOdds");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Ads Odds</title>
	<!-- favicon -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{ asset('front/assets/css/bootstrap.min.css')}}">
	<!-- fontawesome icon  -->
	<link rel="stylesheet" href="{{ asset('front/assets/css/fontawesome.min.css')}}">
	<!-- animate.css -->
	<link rel="stylesheet" href="{{ asset('front/assets/css/animate.css')}}">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ asset('front/assets/css/owl.carousel.css')}}">
	<!-- stylesheet -->
	<link rel="stylesheet" href="{{ asset('front/assets/css/style.css')}}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{ asset('front/assets/css/responsive.css')}}">
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="0">

    <!-- preloader begin -->
    <div class="preloader">
        <img src="{{ asset('front/assets/img/preloader.gif')}}" alt="">
    </div>
    <!-- preloader end -->

    <!-- header begin -->
    <div class="header">
    <div class="header-top">
        <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-5 col-lg-5 col-md-7">
            <div class="support-info">
                <ul>
                <li>
                    <span class="icon">
                    <i class="far fa-envelope"></i>
                    </span>
                    <span class="text">
                    yourmail@domain.com
                    </span>
                </li>
                <li>
                    <span class="icon">
                    <i class="fas fa-phone"></i>
                    </span>
                    <span class="text">
                    +880 1952 000000
                    </span>
                </li>
                </ul>
            </div>
            </div>
            <div class="col-xl-2 col-lg-2 d-xl-block d-lg-block d-none">
            <div class="logo">
                <a href="/">
                    {{--<img src="{{ asset('front/assets/img/logo.jpg')}}" style="width:40px; height:40px;" alt="">--}}
                </a>
            </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-5">
            <div class="date">
                <ul>
                <li>
                    <span class="icon">
                    <i class="fas fa-calendar-alt"></i>
                    </span>
                    <span class="text">
                    <span id="date"></span>
                    <span id="month"></span>
                    <span id="year"></span>
                    </span>
                </li>
                <li>
                    <span class="icon">
                    <i class="fas fa-clock"></i>
                    </span>
                    <span class="text">
                    <span id="hours"></span>:<span id="minutes"></span>:<span id="seconds"></span>
                    </span>
                </li>
                </ul>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
        <div class="row d-xl-none d-lg-none d-flex">
            <div class="col-8">
            <a href="/" class="mobile-logo">
                <img src="{{ asset('front/assets/img/logo.jpg')}}" style="border-radius:50%; height:40px; width:40px;" alt="">
                Peyton Holdings
            </a>
            </div>
            <div class="col-4 d-flex align-items-center justify-content-end">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-bars fa-w-14 fa-fw fa-2x"><path fill="currentColor" d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z" class=""></path></svg>
            </button>
            </div>
        </div>
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="mainmenu">
                        <nav class="navbar navbar-expand-lg">

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="scalaction">
                                <div class="row">
                                <div class="col-xl-5 col-lg-5">
                                    <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <img src="{{ asset('front/assets/img/logo.jpg')}}" style="border-radius:50%; width:40px; height:40px; margin-top:20px;" alt="">
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="/" style="color:blue;font-weight:bold;">Peyton Holdings</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="/">Home </a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="/">About Us </a>
                                    </li>
                                    </ul>
                                </div>
                                <div class="col-xl-2 col-lg-2 d-xl-block d-lg-block d-none">
                                    <div class="space"></div>
                                </div>
                                <div class="col-xl-5 col-lg-5">
                                    <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="bookmakers.html">Bookmakers</a>
                                    </li>
                                    {{-- <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Blog
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="blog.html">Blog Post</a>
                                        <a class="dropdown-item" href="blog-details.html">Blog Details</a>
                                        </div>
                                    </li> --}}
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/logout">Logout</a>
                                    </li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- header end -->

    <!-- leaderboard begin  -->
    <div class="leaderboard" style="margin-top:-50px">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-8 col-md-10">
            <div class="section-title">
            <h4 class="sub-title">
                Tipster Rankings
            </h4>
            <h2>Our most profited tipster</h2>
            <p>Get probable winning tips from professional betting tipsters across  all sports<br/>
                and offers from leading bookmakers! See how it works!</p>
            </div>
        </div>
        </div>
        <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-8">
            @livewire('front.odds')
        </div>
        <div class="col-xl-4 col-lg-4">
            @livewire('front.place-bet')
        </div>
        </div>
    </div>
    </div>
    <!-- leaderboard end  -->

    <!-- statics begin -->
    <div class="statics">
    <img src="{{ asset('front/assets/img/statics/statics-bg.png')}}" alt="" class="shape">
    <div class="container">
            <div class="part-statics">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-sm-6 col-md-3">
                <div class="single-static">
                    <div class="part-img">
                    <img src="{{ asset('front/assets/img/statics/icon-1.png')}}" alt="">
                    </div>
                    <div class="part-text">
                    <span class="number">14,202</span>
                    <h4 class="title">Total Profit</h4>
                    </div>
                </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6 col-md-3">
                <div class="single-static">
                    <div class="part-img">
                    <img src="{{ asset('front/assets/img/statics/icon-2.png')}}" alt="">
                    </div>
                    <div class="part-text">
                    <span class="number">56.7%</span>
                    <h4 class="title">Avr. Hit Rate</h4>
                    </div>
                </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6 col-md-3">
                <div class="single-static">
                    <div class="part-img">
                    <img src="{{ asset('front/assets/img/statics/icon-3.png')}}" alt="">
                    </div>
                    <div class="part-text">
                    <span class="number">120.2%</span>
                    <h4 class="title">Avarage Roi</h4>
                    </div>
                </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6 col-md-3">
                <div class="single-static">
                    <div class="part-img">
                    <img src="{{ asset('front/assets/img/statics/icon-4.png')}}" alt="">
                    </div>
                    <div class="part-text">
                    <span class="number">7500</span>
                    <h4 class="title">Total Tipster</h4>
                    </div>
                </div>
                </div>
            </div>
            </div>
    </div>
    </div>
    <!-- statics end -->

    <!-- feature begin -->
    <div class="feature">
    <img src="{{ asset('front/assets/img/banner-shape.png')}}" alt="" class="banner-shape">
    <img src="{{ asset('front/assets/img/banner-shape.png')}}" alt="" class="banner-shape">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-8 col-md-9">
            <div class="section-title">
            <h4 class="sub-title">
                Why Choose Us
            </h4>
            <h2>Features that users get</h2>
            <p>Get probable winning tips from professional betting tipsters across  all sports<br/>
                and offers from leading bookmakers! See how it works!</p>
            </div>
        </div>
        </div>
        <div class="row justify-content-xl-between justify-content-lg-center">
        <div class="col-xl-8 col-lg-10 d-xl-flex d-lg-flex d-block align-items-center">
            <div class="part-all-feature">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-sm-6 col-md-4">
                <div class="single-feature">
                    <div class="part-icon">
                    <img src="{{ asset('front/assets/img/icon/open-mail.png')}}" alt="">
                    </div>
                    <div class="part-text">
                    <h4 class="title">Receive by Mail</h4>
                    <a href="#0">Read More
                        <img src="{{ asset('front/assets/img/icon/right-arrow.png')}}" alt="">
                    </a>
                    </div>
                </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6 col-md-4">
                <div class="single-feature">
                    <div class="part-icon">
                    <img src="{{ asset('front/assets/img/icon/guarantee-certificate.png')}}" alt="">
                    </div>
                    <div class="part-text">
                    <h4 class="title">Guaranteed Tips</h4>
                    <a href="#0">Read More
                        <img src="{{ asset('front/assets/img/icon/right-arrow.png')}}" alt="">
                    </a>
                    </div>
                </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6 col-md-4">
                <div class="single-feature">
                    <div class="part-icon">
                    <img src="{{ asset('front/assets/img/icon/print-proof.png')}}" alt="">
                    </div>
                    <div class="part-text">
                    <h4 class="title">100% Proofed Tips</h4>
                    <a href="#0">Read More
                        <img src="{{ asset('front/assets/img/icon/right-arrow.png')}}" alt="">
                    </a>
                    </div>
                </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6 col-md-4">
                <div class="single-feature">
                    <div class="part-icon">
                    <img src="{{ asset('front/assets/img/icon/verified-account.png')}}" alt="">
                    </div>
                    <div class="part-text">
                    <h4 class="title">Verified Odds</h4>
                    <a href="#0">Read More
                        <img src="{{ asset('front/assets/img/icon/right-arrow.png')}}" alt="">
                    </a>
                    </div>
                </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6 col-md-4">
                <div class="single-feature">
                    <div class="part-icon">
                    <img src="{{ asset('front/assets/img/icon/protected-profile.png')}}" alt="">
                    </div>
                    <div class="part-text">
                    <h4 class="title">Buyer Protection</h4>
                    <a href="#0">Read More
                        <img src="{{ asset('front/assets/img/icon/right-arrow.png')}}" alt="">
                    </a>
                    </div>
                </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6 col-md-4">
                <div class="single-feature">
                    <div class="part-icon">
                    <img src="{{ asset('front/assets/img/icon/wallet.png')}}" alt="">
                    </div>
                    <div class="part-text">
                    <h4 class="title">Credits Based System</h4>
                    <a href="#0">Read More
                        <img src="{{ asset('front/assets/img/icon/right-arrow.png')}}" alt="">
                    </a>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3">
            <div class="part-img">
            <img src="{{ asset('front/assets/img/feature-img.png')}}" alt="">
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- feature end -->

    <!-- bookmakers begin -->
    <div class="bookmakers">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-8 col-md-9">
            <div class="section-title">
            <h4 class="sub-title">
                Our Recommended Bookmakers
            </h4>
            <h2>Best online prediction sites</h2>
            <p>Get probable winning tips from professional betting tipsters across  all sports<br/>
                and offers from leading bookmakers! See how it works!</p>
            </div>
        </div>
        </div>
        <div class="row justify-content-center">
        <div class="col-xl-3 col-lg-5 col-sm-6 col-md-6">
            <div class="single-bookmaker">
            <div class="bookmaker-logo">
                <img src="{{ asset('front/assets/img/bookamkers/logo-1.png')}}" alt="">
            </div>
            <div class="bookmakers-text">
                <a href="#0" class="title">Best Odds</a>
                <p>Secure the best odds and highest payout</p>
            </div>
            <div class="bookies-rating">
                <ul>
                <li>
                    <i class="fas fa-star"></i>
                </li>
                <li>
                    <i class="fas fa-star"></i>
                </li>
                <li>
                    <i class="fas fa-star-half-alt"></i>
                </li>
                <li>
                    <i class="far fa-star"></i>
                </li>
                <li>
                    <i class="far fa-star"></i>
                </li>
                </ul>
            </div>
            <div class="bookies-button">
                <a href="#0">Read Review</a>
                <a href="#0">Claim</a>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-5 col-sm-6 col-md-6">
            <div class="single-bookmaker">
            <div class="bookmaker-logo">
                <img src="{{ asset('front/assets/img/bookamkers/logo-2.png')}}" alt="">
            </div>
            <div class="bookmakers-text">
                <a href="#0" class="title">Get Best Odds</a>
                <p>Unrivaled range of sports and markets. Join now</p>
            </div>
            <div class="bookies-rating">
                <ul>
                <li>
                    <i class="fas fa-star"></i>
                </li>
                <li>
                    <i class="fas fa-star"></i>
                </li>
                <li>
                    <i class="fas fa-star-half-alt"></i>
                </li>
                <li>
                    <i class="far fa-star"></i>
                </li>
                <li>
                    <i class="far fa-star"></i>
                </li>
                </ul>
            </div>
            <div class="bookies-button">
                <a href="#0">Read Review</a>
                <a href="#0">Claim</a>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-5 col-sm-6 col-md-6">
            <div class="single-bookmaker">
            <div class="bookmaker-logo">
                <img src="{{ asset('front/assets/img/bookamkers/logo-3.png')}}" alt="">
            </div>
            <div class="bookmakers-text">
                <a href="#0" class="title">24 Bettings</a>
                <p>Invite your friends and earn 100€ for each new user</p>
            </div>
            <div class="bookies-rating">
                <ul>
                <li>
                    <i class="fas fa-star"></i>
                </li>
                <li>
                    <i class="fas fa-star"></i>
                </li>
                <li>
                    <i class="fas fa-star-half-alt"></i>
                </li>
                <li>
                    <i class="far fa-star"></i>
                </li>
                <li>
                    <i class="far fa-star"></i>
                </li>
                </ul>
            </div>
            <div class="bookies-button">
                <a href="#0">Read Review</a>
                <a href="#0">Claim</a>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-5 col-sm-6 col-md-6">
            <div class="single-bookmaker">
            <div class="bookmaker-logo">
                <img src="{{ asset('front/assets/img/bookamkers/logo-4.png')}}" alt="">
            </div>
            <div class="bookmakers-text">
                <a href="#0" class="title">Betting 777</a>
                <p>Bet and get 0.25% back on everything you stake</p>
            </div>
            <div class="bookies-rating">
                <ul>
                <li>
                    <i class="fas fa-star"></i>
                </li>
                <li>
                    <i class="fas fa-star"></i>
                </li>
                <li>
                    <i class="fas fa-star-half-alt"></i>
                </li>
                <li>
                    <i class="far fa-star"></i>
                </li>
                <li>
                    <i class="far fa-star"></i>
                </li>
                </ul>
            </div>
            <div class="bookies-button">
                <a href="#0">Read Review</a>
                <a href="#0">Claim</a>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- bookmakers end -->

    <!-- footer begin -->
    <div class="footer">
    {{-- <a href="/" class="site-logo">
        <img src="{{ asset('front/assets/img/logo.png')}}" alt="">
    </a> --}}
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-4 col-lg-5 col-md-10">
                <div class="about-widget">
                    <a class="site-title" href="/">
                        Peyton Holdings
                    </a>
                    <p>Peyton Holdings offers you all the best online prediction from every corner of the planet with thousands of online prediction markets.</p>
                    <div class="social">
                        <ul>
                            <li>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-pinterest-p"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="support">
                        <ul>
                            <li>
                                <span class="icon">
                                    <img src="{{ asset('front/assets/img/svg/email.svg')}}" alt="">
                                </span>
                                <span class="text">
                                    <span class="title">Mail Us</span>
                                    <span class="descr">don't@reply.com</span>
                                </span>
                            </li>
                            <li>
                                <span class="icon">
                                    <img src="{{ asset('front/assets/img/svg/phone-call.svg')}}" alt="">
                                </span>
                                <span class="text">
                                    <span class="title">Get In Touch</span>
                                    <span class="descr">+88 015 00 00 00</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4">
                <div class="useful-links">
                    <h3>Useful links</h3>
                    <ul>
                        <li>
                            <a href="#">in-play</a>
                        </li>
                        <li>
                            <a href="#">promotions</a>
                        </li>
                        <li>
                            <a href="#">statics</a>
                        </li>
                        <li>
                            <a href="#">results</a>
                        </li>
                        <li>
                            <a href="#">predict now</a>
                        </li>
                        <li>
                            <a href="#">game results</a>
                        </li>
                        <li>
                            <a href="#">standings</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4">
                <div class="useful-links">
                    <h3>Connect Us</h3>
                    <ul>
                        <li>
                            <a href="#">about us</a>
                        </li>
                        <li>
                            <a href="#">blog</a>
                        </li>
                        <li>
                            <a href="#">blog details</a>
                        </li>
                        <li>
                            <a href="#">service</a>
                        </li>
                        <li>
                            <a href="#">contact us</a>
                        </li>
                        <li>
                            <a href="#">team overview</a>
                        </li>
                        <li>
                            <a href="#">schedule</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4">
                <div class="useful-links">
                    <h3>probable Tips</h3>
                    <ul>
                        <li>
                            <a href="#">football</a>
                        </li>
                        <li>
                            <a href="#">tennis</a>
                        </li>
                        <li>
                            <a href="#">basketball</a>
                        </li>
                        <li>
                            <a href="#">ice hockey</a>
                        </li>
                        <li>
                            <a href="#">volleyball</a>
                        </li>
                        <li>
                            <a href="#">badminton</a>
                        </li>
                        <li>
                            <a href="#">baseball</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="payment-method">
                            <h6 class="payment-method-title">
                                Payment methods are We accept
                            </h6>
                            <div class="all-method">
                                <div class="single-method">
                                    <img src="{{ asset('front/assets/img/brand-1.png')}}" alt="">
                                </div>
                                <div class="single-method">
                                    <img src="{{ asset('front/assets/img/brand-2.png')}}" alt="">
                                </div>
                                <div class="single-method">
                                    <img src="{{ asset('front/assets/img/brand-3.png')}}" alt="">
                                </div>
                                <div class="single-method">
                                    <img src="{{ asset('front/assets/img/brand-4.png')}}" alt="">
                                </div>
                                <div class="single-method">
                                    <img src="{{ asset('front/assets/img/brand-5.png')}}" alt="">
                                </div>

                                <div class="single-method">
                                    <img src="{{ asset('front/assets/img/brand-5.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- footer end -->

    <!-- copyright footer begin -->
    <div class="copyright-footer">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-5 col-md-6 col-lg-6 d-lg-flex d-lg-flex d-block align-items-center">
                <p class="copyright-text">
                    <a href="#">Peyton Holdings</a> © 2020 - {{ date('Y')}}. Privacy & Policy
                </p>
            </div>
            <div class="text-right col-md-6 col-xl-4 col-lg-6 d-xl-flex d-lg-flex d-block align-items-center">
                <p class="copyright-text">
                    Powerd By <a href="/">Peyton Holdings</a>
                </p>
            </div>
        </div>
    </div>
    </div>
    <!-- copyright footer end -->

    <!-- jquery -->
    <script src="{{ asset('front/assets/js/jquery.js')}}"></script>
    <!-- propper js -->
    <script src="{{ asset('front/assets/js/popper.min.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('front/assets/js/bootstrap.min.js')}}"></script>
    <!-- owl carousel -->
    <script src="{{ asset('front/assets/js/owl.carousel.min.js')}}"></script>
    <!-- clock js -->
    <script src="{{ asset('front/assets/js/clock.min.js')}}"></script>
    <!-- main -->
    <script src="{{ asset('front/assets/js/main.js')}}"></script>
    <script defer src="{{asset('assets/js/cdn.js')}}"></script>
    <link href="{{asset('assets/css/tailwind.css')}}" rel="stylesheet">
    @livewireScripts
</body>

</html>
