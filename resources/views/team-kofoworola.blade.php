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
                                 <img src="{{ asset('assets/assets/images/team/1.jpg')}}" alt="">
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
                                         <h3 class="team-one__name"><a href="#">Mrs Kofoworola Njoku </a></h3>
                                    <p class="team-one__sub-title">Vice Principal</p>
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
                                <p class="team-details__text-1">Mrs. Kofoworola Abigail Njoku is an accomplished English Language and Literature Educator and emerging academic leader with over 13 years of distinguished teaching experience across leading secondary schools, international institutions, and private tutorial programs. She holds an HND in Mass Communication, a TEFL certification, and is currently finalizing her TRCN registration, reflecting her unwavering commitment to professional advancement and educational excellence.</p>
                                <p class="team-details__text-2">Throughout her career at institutions such as Taidob College ,Folarin Dalley International College, and Kingfisher International Schools, she has successfully prepared learners for pivotal examinations including WAEC, NECO, UTME, and IELTS, consistently producing high-achieving students. Her instructional practice is enhanced by advanced training in educational technology, culturally responsive pedagogy, and multisensory learning strategies, positioning her at the forefront of innovative teaching.</p>
                                <p class="team-details__text-2">Beyond her classroom expertise, Mrs. Njoku is recognized for her strategic leadership, mentorship, and academic coordination skills, qualities that prepare her for senior administrative responsibilities. She excels in curriculum development, teacher collaboration, student support, and parent engagement, ensuring a holistic approach to learning and institutional growth.</p>
                                <p class="team-details__text-2">With a reputation for excellence, integrity, and vision, Mrs. Njoku brings not only deep subject mastery but also the leadership capacity to drive academic standards, strengthen faculty teams, and advance the mission of progressive schools. She is poised to make a lasting impact as both a transformative educator and a dynamic administrator dedicated to shaping the future of education.</p>
                               

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