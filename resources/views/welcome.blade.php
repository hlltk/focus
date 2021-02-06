<!doctype html>
<html lang="en">
<head>
    <title>Focus</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../template/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../template/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../template/css/jquery-ui.css">
    <link rel="stylesheet" href="../template/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../template/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../template/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="../template/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="../template/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="../template/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="../template/css/aos.css">

    <link rel="stylesheet" href="../template/css/style.css">

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>


<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

        <div class="container">
            <div class="row align-items-center justify-content-center">

                <div class="col-4">
                    <h1 class="m-0 site-logo"><a href="index.html">focus</a></h1>
                </div>

                <div class="col-8">
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="#home-section" class="nav-link">Home</a></li>
                            <li><a href="#about-section" class="nav-link">About</a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact-section">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        </ul>
                    </nav>


                    <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>

                </div>


            </div>
        </div>

    </header>


    <div class="site-blocks-cover overlay bg-light" style=" background-image:url({{url('template/images/hero_bg_1.jpg')}})    " id="home-section">
    <!--background-image: url('<?php echo "../template/images/hero_bg_1.jpg" ?>')-->

        <div class="container">
            <div class="row justify-content-center">

                <div class="col-12 text-center align-self-center text-intro">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <h1 class="text-white" data-aos="fade-up" data-aos-delay="">Focus On Your Work</h1>
                            <p class="lead text-white" data-aos="fade-up" data-aos-delay="100">With focus work effective, creative and fast. <br> Create your own timetable, take note, set alarm. </p>
                            <p data-aos="fade-up" data-aos-delay="200"><a href="#about-section" class="btn smoothscroll btn-primary">Learn More</a></p>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>



    <div class="site-section" id="about-section">
        <div class="container">
            <div class="row ">
                <div class="col-12 mb-5 position-relative">
                    <h2 class="section-title text-center mb-5">You Can Create</h2>
                </div>

                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="">
                    <div class="service d-flex h-100">
                        <div class="svg-icon">
                            <img src="../template/images/flaticon/svg/002-travel-1.svg" alt="Image" class="img-fluid">
                        </div>
                        <div class="service-about">
                            <h3>Timetable</h3>
                            <p>A timetable is a kind of schedule that sets out times at which specific events are intended to occur. It may also refer to: School timetable, a table for coordinating students, teachers, rooms, and other resources.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service d-flex h-100">
                        <div class="svg-icon">
                            <img src="../template/images/flaticon/svg/001-travel.svg" alt="Image" class="img-fluid">
                        </div>
                        <div class="service-about">
                            <h3>Note</h3>
                            <p>Note-taking (sometimes written as notetaking or note taking) is the practice of recording information from different sources and platforms. By taking notes, the writer records the essence of the information, freeing their mind from having to recall everything.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="">
                    <div class="service d-flex h-100">
                        <div class="svg-icon">
                            <img src="../template/images/flaticon/svg/003-travel-2.svg" alt="Image" class="img-fluid">
                        </div>
                        <div class="service-about">
                            <h3>Alarm</h3>
                            <p>An alarm clock (or sometimes just an alarm) is a clock that is designed to alert an individual or group of individuals at a specified time.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service d-flex h-100">
                        <div class="svg-icon">
                            <img src="../template/images/flaticon/svg/004-travel-3.svg" alt="Image" class="img-fluid">
                        </div>
                        <div class="service-about">
                            <h3>Notification Page</h3>
                            <p>Users can tap the notification to open your app or take an action directly from the notification.</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


    </section>


    <section class="site-section bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5 position-relative">
                    <h2 class="section-title text-center mb-5 text-white">What Client Are Sayings</h2>
                </div>
            </div>
            <div class="owl-carousel slide-one-item">
                <div class="slide">
                    <blockquote>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        <p><cite>&mdash; Jean Smith</cite></p>
                    </blockquote>
                </div>
                <div class="slide">
                    <blockquote>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <p><cite>&mdash; Carl Spencer</cite></p>
                    </blockquote>
                </div>
                <div class="slide">
                    <blockquote>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        <p><cite>&mdash; Ryan Peters</cite></p>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>





    <section class="site-section" id="contact-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Login') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="site-section bg-light footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-3">
                    <h3 class="footer-title">Services</h3>
                    <p><span class="d-inline-block d-md-block">Gaziantep</span> Turkey </p>
                </div>
                <div class="col-md-5 mx-auto">
                    <div class="row">
                        <div class="col-lg-4">
                            <h3 class="footer-title">About</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Timetable</a></li>
                                <li><a href="#">Note</a></li>
                                <li><a href="#">Alarm</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <h3 class="footer-title">Resources</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Social Marketing</a></li>
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">Web Development</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <h3 class="footer-title">Templates</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Illustration</a></li>
                                <li><a href="#">Video Editing</a></li>
                                <li><a href="#">Copywriting</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3 class="footer-title">Follow Me</h3>
                    <a href="#" class="social-circle m-2"><span class="icon-twitter"></span></a>
                    <a href="#" class="social-circle m-2"><span class="icon-facebook"></span></a>
                    <a href="#" class="social-circle m-2"><span class="icon-instagram"></span></a>
                    <a href="#" class="social-circle m-2"><span class="icon-dribbble"></span></a>
                    <a href="#" class="social-circle m-2"><span class="icon-linkedin"></span></a>
                </div>
            </div>

            <div class="row">
                <div class="col-12 text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="icon-heart"
                                                                                      aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>

</div> <!-- .site-wrap -->

<script src="../template/js/jquery-3.3.1.min.js"></script>
<script src="../template/js/jquery-ui.js"></script>
<script src="../template/js/popper.min.js"></script>
<script src="../template/js/bootstrap.min.js"></script>
<script src="../template/js/owl.carousel.min.js"></script>
<script src="../template/js/jquery.easing.1.3.js"></script>
<script src="../template/js/aos.js"></script>
<script src="../template/js/jquery.fancybox.min.js"></script>
<script src="../template/js/jquery.sticky.js"></script>
<script src="../template/js/isotope.pkgd.min.js"></script>


<script src="../template/js/main.js"></script>
</body>
</html>
