@extends('layout.master')
@section('content')
           <!--Page Header Start-->
           <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            </div>
            {{-- <div class="page-header__shape-1"></div> --}}
            <div class="container">
                <div class="page-header__inner">
                    <h2>Our Faq</h2>
                    {{-- <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Our Faq</li>
                    </ul> --}}
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--FAQ Page Start-->
        <section class="faq-page">
            <div class="container">
                {{-- <div class="faq-page__top">
                    <h3 class="faq-page__title">Find answers Our Asked Questions</h3>
                    <form class="faq-page__form">
                        <div class="faq-page__form-input-box">
                            <input type="search" placeholder="Search Question" name="search">
                            <button type="submit"><i class="icon-search"></i></button>
                        </div>
                    </form>
                </div> --}}
                <div class="faq-page__bottom">
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                        <div class="accrodion active">
                            <div class="accrodion-title">
                                <h4>01 . How do you keep students engaged?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Interactive lessons + tech tools = learning made fun! </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>

                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>02 . Do you only prepare students for exams?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>We prepare them for life, not just exams!  </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>03 . What makes your school different?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Modern teaching, digital tools, small classes, big results!  </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>04 . How do you track my child’s progress?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p> Real-time updates + parent feedback system!</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>05 . Do you teach beyond the curriculum?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Yes! Coding, tech,  leadership, and life skills are part of our DNA.  </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>06 . Is your school affordable?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Quality education that parents can afford. No hidden costs.  </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>07 . Why should I bring my child to your school?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Because every child deserves modern education + moral values! </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>08 .  Do you use technology in classrooms?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Yes! Smart boards, e-learning, and digital tools for every learner. </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--FAQ Page End-->
@endsection