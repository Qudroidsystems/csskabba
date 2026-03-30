<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> {{ $pageTitle }} || Academia O</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/assets/images/favicons/icon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/assets/images/favicons/icon.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/assets/images/favicons/icon.png')}}" />
    <link rel="manifest" href="{{ asset('assets/assets/images/favicons/site.html')}}" />
    <meta name="description" content="Academia O " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('assets/assets/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/vendors/animate/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/vendors/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/vendors/bcorz-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/vendors/tiny-slider/tiny-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/vendors/reey-font/stylesheet.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/vendors/owl-carousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/vendors/bxslider/jquery.bxslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/vendors/bootstrap-select/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/vendors/vegas/vegas.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/vendors/timepicker/timePicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/vendors/polyglot-language-switcher/polyglot-language-switcher.css') }}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets/assets/css/bcorz.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/css/bcorz-responsive.css') }}" />

</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>





    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->



    <!-- Start sidebar widget content -->
    {{-- <div class="xs-sidebar-group info-group info-sidebar">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget">X</a>
                </div>
                <div class="sidebar-textwidget">
                    <div class="sidebar-info-contents">
                        <div class="content-inner">
                            <div class="logo">
                                <a href="index.html"><img src="assets/images/resources/logo-1.png" alt="" /></a>
                            </div>
                            <div class="content-box">
                                <h4>About Us</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                                    labore et magna aliqua. Ut enim ad minim veniam laboris.</p>
                            </div>
                            <div class="form-inner">
                                <h4>Get a free quote</h4>
                                <form action="https://themazine.com/mr/bcorz-html/index.html" method="post">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Name" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Message..."></textarea>
                                    </div>
                                    <div class="form-group message-btn">
                                        <button type="submit" class="thm-btn form-inner__btn">Submit Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End sidebar widget content -->



    <div class="page-wrapper">
        <header class="main-header">
            <div class="main-header__top">
                <div class="main-header__top-wrapper">
                    <div class="main-header__top-inner">
                        <div class="main-header__top-left">
                            <ul class="list-unstyled main-header__contact-list">
                                <li>
                                    <div class="icon">
                                        <i class="icon-email-mail"></i>
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:academiao.mail@gmail.com">academiao.mail@gmail.com</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="icon-location"></i>
                                    </div>
                                    <div class="text">
                                        <p>13, Soyinka Street, Behind Fajol Hotel, Obantoko, Abeokuta, Ogun State.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="icon-clock"></i>
                                    </div>
                                    <div class="text">
                                        <p>Office Hours: 7:00AM - 3:00PM (Sat - Sun: closed)</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="main-header__top-right">
                            <div class="main-heaader__top-social-box">
                                <p class="main-heaader__top-social-title">Follow On Social</p>
                                <div class="main-header__top-social">
                                    <a href="https://www.facebook.com/academiaOfb"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="main-menu__wrapper-inner">
                        <div class="main-menu__left">
                            {{-- <div class="main-menu__logo"> --}}
                                <a href="{{ route('home') }}"><img src="{{ asset('assets/assets/images/resources/banner2.jpeg') }}" alt=""></a>
                            {{-- </div> --}}
                        </div>
                        <div class="main-menu__main-menu-box">
                            <div class="main-menu__main-menu-box-left">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li>
                                        <a href="{{ route('home') }}">Home </a>

                                    </li>
                                    <li class="dropdown">
                                       <a href="{{ route('schools') }}">Our Schools</a>
                                        <ul>
                                            <li><a href="{{ route('gallery') }}">school Gallery</a></li>
                                    </li>
                                        </ul>
                                    </li>

                                    <li class="dropdown">
                                        <a  href="{{ route('about') }}">About Us</a>
                                        <ul>
                                            <li><a href="{{ route('vision') }}">Mission & Vission</a></li>
                                            <li><a href="{{ route('anthem') }}">School Anthem</a></li>
                                             <li ><a href="{{ route('team') }}">Staff</a>

                                    </li>
                                        </ul>
                                    </li>
                                    <li >
                                        <a href="{{ route('faq') }}">FAQ</a>

                                    </li>

                                    <li >
                                        <a href="{{ route('admission') }}">Admissions</a>

                                    </li>
                                    <li >
                                        <a target="_blank" href="http://portal.academiaocollege.ng/">Portal</a>

                                    </li>
                                     <li class="dropdown">
                                        <a href="#">Tests</a>
                                        <ul>
                                            <li><a target="_blank" href="https://iqtest.com/take-the-test/">IQ TEST </a></li>
                                            <li><a target="_blank" href="https://www.123test.com/iq-test/?d=1&prd=NDg=&p=MQ==&dsc=MTg5OQ==">Classical Intelligence Test </a></li>
                                             <li><a target="_blank" href="https://wayground.com">Quizzes</a></li>
                                            <li><a target="_blank" href="https://myschool.ng/classroom/exam/custom">CBT Simulator</a></li>
                                        </ul>
                                    </li>


                                </ul>
                            </div>
                            <div class="main-menu__main-menu-box-right">
                                <div class="main-menu__call-btn-box">
                                    <div class="main-menu__call">
                                        <div class="main-menu__call-icon">
                                            <span class="icon-phone"></span>
                                        </div>
                                        <div class="main-menu__call-content">
                                            <p>Make a call</p>
                                            <h4><a href="tel:+2347087767178">+2347087767178</a></h4>
                                        </div>
                                    </div>
                                    <div class="main-menu__btn-box">
                                        <a href="tel:+2347087767178" class="main-menu__btn">Lets Talk</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-menu__right">
                            <div class="main-menu__bottom-search-nav-sidebar">
                                <div class="main-menu__search-box">
                                    <a href="#"
                                        class="main-menu__search search-toggler icon-search"><span>Search</span></a>
                                </div>
                                <div class="main-menu__side-content-icon">
                                    <a class="navSidebar-button" href="#"><span class="icon-dots-menu"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
