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
                            <h3 class="services-details__title-1">ACADEMIA O COLLEGE ANTHEM</h3>
                            <p class="services-details__text services-details__text-1">O Academia O, our noble light,
                                We rise each day, to truth and right.
                                With knowledge deep, and virtue strong,
                                We shape our minds, where hearts belong.
                                </p>
                            <p class="services-details__text">Academia O! Academia O!
                                Academia O! Academia O!
                                To lead, to serve, to boldly go!
                                We bear the torch; we make it glow.
                                </p>
                                              
                                
                                 <p class="services-details__text services-details__text-1">Within your walls, we learn to soar,
                                    To seek the stars, to dream of more.
                                    With faith and hope, our spirits rise,
                                    With courage bright, we claim the skies.

                                </p>
                               <p class="services-details__text">Academia O! Academia O!
                                Academia O! Academia O!
                                To lead, to serve, to boldly go!
                                We bear the torch; we make it glow.
                                </p>

                                 <p class="services-details__text">To lead, to serve, to boldly go!
                                    We bear the torch; we make it glow.

                                </p>



                            
                         
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Services Details End-->
    
@endsection