@extends('layout.master')
@section('content')
          <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            </div>
            <div class="page-header__shape-1"></div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Team Details</h2>
                    {{-- <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li class="active">Team details</li>
                    </ul> --}}
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Team Details Start-->
        <section class="team-details">
            <div class="container">
                <div class="team-details__top">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="team-details__img">
                                 <img src="{{ asset('assets/assets/images/team/4.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="team-details__content">
                                <div class="team-details__team-info-box">
                                    <div class="team-details__team-info">
                                        <div class="team-details__team-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="team-one__name"><a href="#">Mr Philip Oklu</a></h3>
                                      <p class="team-one__sub-title">Principal</p>
                                    </div>
                                    <div class="team-details__team-contact-box">
                                        <div class="icon">
                                            <a href="#"><span class="icon-phone-call"></span></a>
                                        </div>
                                        <div class="text">
                                            <a href="tel:+880022127">+234 (0) 7087767178</a>
                                        </div>
                                    </div>
                                </div>
                                <p class="team-details__text-1">Mr Philip Oklu is a topnotch faculty who is versed in the subject area of Mathematics, Applied Mathematics and Physics. He holds a Bachelor Degree in Pure and Applied Mathematics, a Masters Degree in Applied Mathematics (Fluid Mechanics) and he is currently undergoing his PhD programme in Computational Fluid Dynamics at the University of Lagos, Akoka.</p>
                                <p class="team-details__text-2">Mr Philip has taught across all levels of Education. He was a pioneer teacher at Destiny Kids Nursery and Primary School, Abeokuta, he taught Physics and Mathematics as ad-hoc teacher for SSCE students at Nawair-ud-deen Grammar School, Abeokuta, he was the Academic Committee Chairman at National Association of Mathematical Science Students FUNAAB Chapter, he taught Mathematics and Further Mathematics at Paradigm Secondary School, Minna, Niger State, he was a part-time Lecturer at School of Sandwich and Part-time Studies, FCE Osiele Abeokuta, he spent most of his teaching career at Adeline Ogunlade Memorial Home Secondary School, Abeokuta as a Physics and Further Mathematics teacher, and also double as the Academic Committee Chairman of the School.</p>
                                <p class="team-details__text-2">Mr Philip Oklu has been won many personal awards and accolades to his honor. Aside teaching, he has held many leadership positions across parastatals. He is a certified Data Analyst in SQL, Python, Excel and Power BI from 720Degree Hub International</p>
                                <p class="team-details__text-2">With more than 12 years school teaching experience and 15 years as a tutorial center coordinator, he has helped many students gain mastery in core subject areas and has provided immense support to various clients in achieving landmarks in their children academic pursuit. Many of which are already masters degree holders and experts in their own field. </p>
                                <p class="team-details__text-2">As the director of Academia O College, he is committed to help in shaping destinies for a brighter future. </p>

                                {{-- <ul class="team-details__social-box list-unstyled">
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                </ul> --}}
                                {{-- <div class="team-details__address-box">
                                    <div class="icon">
                                        <span class="icon-location"></span>
                                    </div>
                                    <div class="text">
                                        <p>3669 Virgil street panama city FL 32401, Buffelo</p>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="team-details__bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="comment-form-2">
                                <h3 class="comment-form-2__title">Get in Touch</h3>
                                <form action="https://themazine.com/mr/bcorz-html/assets/inc/sendemail.php"
                                    class="comment-form-2__form comment-form-2-validated" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form-2__input-box">
                                                <input type="text" placeholder="Your Name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form-2__input-box">
                                                <input type="email" placeholder="Your Email" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form-2__input-box text-message-box">
                                                <textarea name="message" placeholder="Write Message"></textarea>
                                            </div>
                                            <div class="comment-form-2__btn-box">
                                                <button type="submit" class=" thm-btn comment-form-2__btn">Send
                                                    Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </section>
        <!--Team Details End-->
@endsection