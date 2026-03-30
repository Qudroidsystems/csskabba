@extends('layout.master')
@section('content')
         


     
        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            </div>
            {{-- <div class="page-header__shape-1"></div> --}}
            <div class="container">
                <div class="page-header__inner">
                    <h2>Our Schools</h2>
                    {{-- <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Our Schools</li>
                    </ul> --}}
                </div>
            </div>
        </section>
        <!--Page Header End-->

    
          <!--Services Three start-->
            <section class="services-three">
                <div class="container">
                    <div class="section-title text-center">
                        <span class="section-title__tagline">Our Schools</span>
                        <div class="section-title-shape">
                            <img src="{{ asset('assets/assets/images/shapes/section-title-shape-1.png')}}" alt="">
                        </div>
                        <h2 class="section-title__title">Academia O Group of Schools</h2>
                    </div>
                    <div class="row">
                        <!--services One single start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-one__single">
                                <div class="services-one__count"></div>
                                <div class="services-one__content">
                                    <div class="services-one__title">
                                        <h3><a href="#">Junior High  School</a></h3>
                                    </div>
                                    {{-- <div class="services-one__icon">
                                        <span class="icon-bulb-business-idea"></span>
                                    </div> --}}
                                </div>
                                <p class="services-one__text">Redefining the goal of education from the conventional, nurturing students of Year 7 to Year 9.</p>
                                <div class="services-one__btn">
                                    {{-- <a href="branding.html')}}" class="thm-btn services-three__btn">Read more<i
                                            class="icon-right-arrow1"></i></a> --}}
                                </div>
                            </div>
                        </div>
                        <!--services One single End-->
                        <!--services One single start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                            <div class="services-one__single">
                                <div class="services-one__count"></div>
                                <div class="services-one__content">
                                    <div class="services-one__title">
                                        <h3><a href="#">Senior High  School</a>
                                        </h3>
                                    </div>
                                    {{-- <div class="services-one__icon">
                                        <span class="icon-business-management-target"></span>
                                    </div> --}}
                                </div>
                                <p class="services-one__text">Using technology and modern tools with consistent science practicals to prepare Year 10 to Year 12 students for the task ahead.</p>
                                <div class="services-one__btn">
                                    {{-- <a href="#" class="thm-btn services-three__btn">Read more<i
                                            class="icon-right-arrow1"></i></a> --}}
                                </div>
                            </div>
                        </div>
                        <!--services One single End-->
                        <!--services One single start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                            <div class="services-one__single">
                                <div class="services-one__count"></div>
                                <div class="services-one__content">
                                    <div class="services-one__title">
                                        <h3><a href="#">Prevarsity</a></h3>
                                    </div>
                                    {{-- <div class="services-one__icon">
                                        <span class="icon-megaphone"></span>
                                    </div> --}}
                                </div>
                                <p class="services-one__text">Preparing high school leavers for admission based examinations towards a brighter future in higher institution.</p>
                                <div class="services-one__btn">
                                    {{-- <a href="digital-solutions.html')}}" class="thm-btn services-three__btn">Read more<i
                                            class="icon-right-arrow1"></i></a> --}}
                                </div>
                            </div>
                        </div>
                        <!--services One single End-->
                    </div>
                </div>
            </section>
            <!--Services One End-->



@endsection