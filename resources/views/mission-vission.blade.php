@extends('layout.master')
@section('content')
          <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            </div>
            {{-- <div class="page-header__shape-1"></div> --}}
            <div class="container">
                <div class="page-header__inner">
                    <h2>Who We Are</h2>
                    {{-- <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li class="active">Branding</li>
                    </ul> --}}
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Services Details Start-->
        <section class="services-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="services-details__left">
                            <div class="sidebar__single sidebar__our-services">
                                <h3 class="sidebar__title">Who We Are...</h3>
                                <ul class="service-details__service-list list-unstyled">

                                    <li><a href="{{ route('vision') }}">Vision & Mission<span
                                                class="fas fa-angle-right"></span></a></li>

                                    <li><a href="{{ route('anthem') }}">Our School Anthem <span
                                                class="fas fa-angle-right"></span></a></li>

                                 

                                </ul>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="services-details__right">
                            <h3 class="services-details__title-1">Our Vision</h3>
                            <p class="services-details__text services-details__text-1">To become a leading institution where innovation and excellence shape confident, value-driven learners equipped to transform their world.</p>
                            
                           
                        </div>


                         <div class="services-details__right">
                            <h3 class="services-details__title-1">Our Mission</h3>
                            <p class="services-details__text services-details__text-1">At Academia O College, our mission is to deliver high-quality, value-based education through modern teaching methods, character formation, and technology integration—nurturing creative, critical thinkers ready to lead in a dynamic world.</p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Services Details End-->
    
@endsection