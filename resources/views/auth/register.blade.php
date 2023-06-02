{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ads - Odds</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/bootstrap.min.css')}}">
    <!-- fontawesome icon  -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/fontawesome.min.css')}}">
    <!-- flaticon css  -->
    <link rel="stylesheet" href="{{ asset('front/assets/fonts/flaticon.css')}}">
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
                <a href="index.html" class="mobile-logo">
                  <img src="{{ asset('front/assets/img/logo.png')}}" alt="">
                  Betiptar
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
                                        <li class="nav-item active">
                                          <a class="nav-link" href="index.html">Home </a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" href="about.html">About us</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Tipster
                                          </a>
                                          <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                            <a class="dropdown-item" href="tipster.html">Tipster</a>
                                            <a class="dropdown-item" href="tipster-details.html">Tipster Details</a>
                                          </div>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" href="subscription-plan.html">Plans</a>
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
                                        <li class="nav-item dropdown">
                                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Blog
                                          </a>
                                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="blog.html">Blog Post</a>
                                            <a class="dropdown-item" href="blog-details.html">Blog Details</a>
                                          </div>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" href="contact.html">Contact</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" href="/login">Login</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" href="/register">SignUp</a>
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

    <!-- register begin -->
    <div class="register">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-9">
                  <div class="section-title">
                    <h4 class="sub-title">
                        Signup To Enter
                    </h4>
                    <h2>Create a free account</h2>
                    <p>Get probable winning tips from professional betting tipsters across  all sports<br/>
                      and offers from leading bookmakers! See how it works!</p>
                  </div>
                </div>
              </div>
            <div class="reg-body">
            <x-validation-errors class="mb-4" />
                <form method="POST" action="{{ route('register') }}">
                @csrf
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <h4 class="sub-title">Personal Information</h4>
                            <input type="text" id="name" placeholder="Name*" name="name" :value="old('name')" required autofocus autocomplete="name">
                            <input type="email" id="email" placeholder="Email*" name="email" :value="old('email')" required autocomplete="username" >
                            <input type="password" id="password" placeholder="Password:*" name="password" required autocomplete="new-password">
                            <input type="text" id="password_confirmation" placeholder="Confirm Password*" name="password_confirmation" required autocomplete="new-password">
                            <div class="row text-center">
                                <div class="col-xl-6 col-lg-6">
                                    <button class="def-btn btn-form">Secure Sign Up <i class="fas fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3">
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    <!-- register end -->

    <!-- footer begin -->
    <div class="footer">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-5 col-md-10">
                    <div class="about-widget">
                        <a class="site-title" href="index.html">
                            The Betipstar
                        </a>
                        <p>Betipstar offers you all the best online prediction from every corner of the planet with thousands of online prediction markets.</p>
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
                    <a href="#">Betipstar</a> © 2020. Privacy & Policy
                </p>
            </div>
            <div class="text-right col-md-6 col-xl-4 col-lg-6 d-xl-flex d-lg-flex d-block align-items-center">
                <p class="copyright-text">
                    Powerd By <a href="https://themeforest.net/user/autworks/portfolio">Autworks ( Envato Author )</a>
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
    </body>
</html>
