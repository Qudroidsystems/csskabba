@extends('layout.master')
@section('content')
         


        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            </div>
            {{-- <div class="page-header__shape-1"></div> --}}
            <div class="container">
                <div class="page-header__inner">
                    <h2>About us</h2>
                    {{-- <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">About</li>
                    </ul> --}}
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--About Two Start-->
        <section class="about-two about-four">
          
             <!--About Three Start-->
            <section class="about-three">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="about-three__left">
                                <div class="section-title text-left">
                                    <span class="section-title__tagline">ABOUT ACADEMIA O COLLEGE</span>
                                    <h2 class="section-title__title">Shaping minds today for a brighter tomorrow</h2>
                                </div>
                                <p class="about-three__text-1">
                                    At Academia O College, we believe education is more than acquiring knowledge — it is about nurturing character, inspiring innovation, and preparing future leaders. Our commitment is to provide quality learning experiences that empower students to excel academically and socially. 
                                </p>
                                <div class="about-three__creativity">
                                    {{-- <div class="icon">
                                        <span class="icon-bulb-business-idea"></span>
                                    </div> --}}
                                    <div class="text">
                                        <h3>Innovatio et Excellentia</h3>
                                    </div>
                                </div>
                                <p class="about-three__text-2">
                                    With dedicated teachers, modern facilities, and a supportive community, Academia O College offers a balanced approach to education — blending academics, creativity, and personal development. We prepare our students not just for exams, but for life.
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="about-three__right">
                                <div class="about-three__img">
                                    <img src="{{ asset('assets/assets/images/resources/logo.jpg')}}" alt="Academia O College Logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            

        </section>
        <!--About Two End-->

      

        <!--Why Choose Two Start-->
        <section class="why-choose-two why-choose-three">
             <!--Why Choose Two Start-->
            <section class="why-choose-two">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="why-choose-two__left">
                                <div class="why-choose-two__img-1 wow slideInLeft" data-wow-delay="100ms"
                                    data-wow-duration="2500ms">
                                    <img src="{{ asset('assets/assets/images/resources/philip.jpg')}}" alt="">
                                    {{-- <div class="why-choose-two__img-2">
                                        <img src="{{ asset('assets/assets/images/resources/why-choose-2-2.jpg')}}" alt="">
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="why-choose-two__right">
                                <div class="section-title text-left">
                                    <span class="section-title__tagline">WELCOME</span>
                                    <div class="section-title-shape">
                                        <img src="{{ asset('assets/assets/images/shapes/section-title-shape-1.png')}}" alt="">
                                    </div>
                                    <h2 class="section-title__title">Introducing the School</h2>
                                </div>
                                <p>We are excited to announce the official commencement of Academia O College — a future-focused secondary school where academic excellence meets innovation, character, and vision.
                                    At Academia O College, we are redefining education beyond the conventional classroom. Our mission is to nurture confident, creative, and critically-minded learners who are prepared to thrive in a fast-changing world.                        
                                    
                                    <p>Whether day or boarding, your child deserves more than the average.
                                        They deserve a place where their dreams are not only heard — but nurtured. 
                                        That place is Academia O College.
                                    The future begins here!</p>
                                </p>
                                {{-- <h3 class="why-choose-two__title">Why Choose Academia O College?
                                </h3>
                                --}}
                                {{-- <div class="why-choose-two__points-box">
                                    <ul class="why-choose-two__points list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-check"></span>
                                            </div>
                                            <div class="text">
                                                <p>A value-based and <br>innovation-driven curriculum</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-check"></span>
                                            </div>
                                            <div class="text">
                                                <p>A blend of modern teaching methods and traditional discipline </p>                                   </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-check"></span>
                                            </div>
                                            <div class="text">
                                                <p>Safe, inspiring learning environment</p>
                                            </div>
                                            <div class="text">
                                                <p>Committed, qualified educators </p>
                                            </div>
                                            <div class="text">
                                                <p>Technology-integrated classrooms</p>
                                            </div>
                                            <div class="text">
                                                <p>Affordable, high-quality education</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="why-choose-two__icon-box">
                                        <span class="icon-business-management-presentation"></span>
                                    </div>
                                </div> --}}
                                <h3 class="testimonial-one__client-name">Mr Philip Oklu</h3>
                                <p>BSc., MSc., PhD***</p>
                                <p>The Director</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Why Choose Two End-->
        </section>
        <!--Why Choose Two End-->

        <!--Counter Two Start-->
        <section class="counter-two">
              <!--Counter Two Start-->
            <section class="counter-two">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <ul class="counter-one__points list-unstyled">
                                <li>
                                    <div class="counter-one__points-box">
                                        <div class="counter-one__icon">
                                            <span class="icon-newspaper-news"></span>
                                        </div>
                                        <div class="counter-one__count-box">
                                            <h3 class="odometer" data-count="1300">00</h3>
                                            <span class="counter-one__letter">+</span>
                                        </div>
                                    </div>
                                    <p class="counter-one__text">Prevarsity Alumni</p>
                                </li>
                                <li>
                                    <div class="counter-one__points-box">
                                        <div class="counter-one__icon">
                                            <span class="icon-flower-smile"></span>
                                        </div>
                                        <div class="counter-one__count-box">
                                            <h3 class="odometer" data-count="22">00</h3>
                                            <span class="counter-one__letter">+</span>
                                        </div>
                                    </div>
                                    <p class="counter-one__text">College Students</p>
                                </li>
                                <li>
                                    <div class="counter-one__points-box">
                                        <div class="counter-one__icon">
                                            <span class="icon-rating"></span>
                                        </div>
                                        <div class="counter-one__count-box">
                                            <h3 class="odometer" data-count="15">00</h3>
                                            <span class="counter-one__letter">+</span>
                                        </div>
                                    </div>
                                    <p class="counter-one__text">Teachers</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!--Counter Two End-->
        </section>
        <!--Counter Two End-->


      

        <!--Testimonial Two Start-->
        <div class="testimonial-two">
                   <!--Testimonial One Start-->
                    <section class="testimonial-one">
                        <div class="testimonial-one__shape-1 float-bob-x">
                            <img src="assets/images/shapes/testimonial-one-shape-1.png" alt="">
                        </div>
                        <div class="testimonial-one__shape-2">
                            <img src="assets/images/shapes/testimonial-one-shape-2.png" alt="">
                        </div>
                        <div class="testimonial-one__shape-3 float-bob-y">
                            <img src="assets/images/shapes/testimonial-one-shape-3.png" alt="">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="testimonial-one__carousel owl-carousel owl-theme thm-owl__carousel"
                                        data-owl-options='{
                                        "loop": true,
                                        "autoplay": false,
                                        "margin": 30,
                                        "nav": true,
                                        "dots": false,
                                        "smartSpeed": 500,
                                        "autoplayTimeout": 10000,
                                        "navText": ["<span class=\"icon-left-arrow-1\"></span>","<span class=\"icon-right-arrow-1\"></span>"],
                                        "responsive": {
                                            "0": {
                                                "items": 1
                                            },
                                            "768": {
                                                "items": 1
                                            },
                                            "992": {
                                                "items": 1
                                            },
                                            "1200": {
                                                "items": 1
                                            }
                                        }
                                    }'>
                                        <!--Testimonial One Single Start-->
                                        <div class="item">
                                            <div class="testimonial-one__single">
                                                <div class="testimonial-one__client-img-box">
                                                    <div class="testimonial-one__client-img">
                                                        <img src="{{ asset('assets/assets/images/testimonial/t1.jpg') }}" alt="">
                                                    </div>
                                                    <div class="testimonial-one__icon">
                                                        <span class="icon-quote"></span>
                                                    </div>
                                                </div>
                                                <div class="testimonial-one__client-info-box">
                                                    <p class="testimonial-one__text">“I am proud to say that I was once a 
                                                        student of Academia O Prevarsity while I was in Nigeria 
                                                        and the experience shaped my academic journey in ways 
                                                        I will forever talk about. The citadel of learning 
                                                        provided me with not just knowledge, but also confidence, 
                                                        and skills I needed to excel in my studies and beyond.
                                                        I wholeheartedly recommend Academia O College 
                                                        to anyone who is serious about building a strong 
                                                        academic future. It is a place where dreams are
                                                        nurtured, and success begins.
                                                        ”</p>
                                                    <div class="testimonial-one__client-info">
                                                        <div class="testimonial-one__rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <h3 class="testimonial-one__client-name">Abatan Aliat</h3>
                                                        <p>Doncaster College, United Kingdom.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Testimonial One Single End-->
                                        <!--Testimonial One Single Start-->
                                        <div class="item">
                                            <div class="testimonial-one__single">
                                                <div class="testimonial-one__client-img-box">
                                                    <div class="testimonial-one__client-img">
                                                        <img src="{{ asset('assets/assets/images/testimonial/t2.jpg') }}" alt="">
                                                    </div>
                                                    <div class="testimonial-one__icon">
                                                        <span class="icon-quote"></span>
                                                    </div>
                                                </div>
                                                <div class="testimonial-one__client-info-box">
                                                    <p class="testimonial-one__text">“I was once a student of Academia O Prevarsity, and now a proud Nursing student at McPherson University.
                                                        Academia O changed my life in ways I could never have imagined. I came in as a confused girl; uncertain of my identity and weighed down emotionally. But within its walls, I found hope, direction, and the courage to thrive.
                                                        The lessons I received went beyond academics. They taught me resilience, character, faith and how to face life’s challenges head-on and still soar. Academia O is not just a school; it is a home where destinies are nurtured and where ordinary students are transformed into extraordinary leaders.
                                                        Today, I am a living testament. Academia O College is where your ward’s journey to greatness begins.
                                                        ”</p>
                                                    <div class="testimonial-one__client-info">
                                                        <div class="testimonial-one__rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <h3 class="testimonial-one__client-name">Oladipupo Ajoke</h3>
                                                        <p>McPherson University, Ogun State</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Testimonial One Single End-->
                                        <!--Testimonial One Single Start-->
                                        <div class="item">
                                            <div class="testimonial-one__single">
                                                <div class="testimonial-one__client-img-box">
                                                    <div class="testimonial-one__client-img">
                                                        <img src="{{ asset('assets/assets/images/testimonial/t3.jpg') }}" alt="">
                                                    </div>
                                                    <div class="testimonial-one__icon">
                                                        <span class="icon-quote"></span>
                                                    </div>
                                                </div>
                                                <div class="testimonial-one__client-info-box">
                                                    <p class="testimonial-one__text">“As a Pharmacy Student of University 
                                                        of Lagos, this is my heartfelt recommendation for 
                                                        Academia O College! As a former student 
                                                        of Academia O Pre-varsity, I'm grateful for 
                                                        the foundation that shaped my academic journey.
                                                        I wholeheartedly recommend this esteemed institution 
                                                        to anyone seeking quality education. Highly recommended!
                                                        ”</p>
                                                    <div class="testimonial-one__client-info">
                                                        <div class="testimonial-one__rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <h3 class="testimonial-one__client-name">Abdul-Ganiy Habeebullah</h3>
                                                        <p> University of Lagos</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Testimonial One Single End-->
                                        <!--Testimonial One Single Start-->
                                        <div class="item">
                                            <div class="testimonial-one__single">
                                                <div class="testimonial-one__client-img-box">
                                                    <div class="testimonial-one__client-img">
                                                        <img src="{{ asset('assets/assets/images/testimonial/t4.jpg') }}" alt="">
                                                    </div>
                                                    <div class="testimonial-one__icon">
                                                        <span class="icon-quote"></span>
                                                    </div>
                                                </div>
                                                <div class="testimonial-one__client-info-box">
                                                    <p class="testimonial-one__text">“I am an ex-student of Academia O Pre-varsity 
                                                        and I can say proudly and confidently that Academia O Prevarsity
                                                        really helped to transform my academic journey into what it is today.
                                                        I went from being an average student in my class to being one of
                                                        the top students. I was only able to achieve this 
                                                            help of the solid teaching sessions and unwavering support
                                                            provided for me. This is why I’m recommending 
                                                            O College to everyone out there because it’s 
                                                            your best shot at getting a 
                                                            solid education of your money’s worth.
                                                        ”</p>
                                                    <div class="testimonial-one__client-info">
                                                        <div class="testimonial-one__rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <h3 class="testimonial-one__client-name">Lawal Oluwajomiloju </h3>
                                                        <p>Chrisland University, Ajebo.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Testimonial One Single End-->

                                        <!--Testimonial One Single Start-->
                                        <div class="item">
                                            <div class="testimonial-one__single">
                                                <div class="testimonial-one__client-img-box">
                                                    <div class="testimonial-one__client-img">
                                                        <img src="{{ asset('assets/assets/images/testimonial/t5.jpg') }}" alt="">
                                                    </div>
                                                    <div class="testimonial-one__icon">
                                                        <span class="icon-quote"></span>
                                                    </div>
                                                </div>
                                                <div class="testimonial-one__client-info-box">
                                                    <p class="testimonial-one__text">“As an alumnus of Academia O, I can confidently say that my time there 
                                                        was one of the most
                                                        transformative experiences of my life. When I first joined,
                                                        I was unsure of myself and uncertain about the path ahead.
                                                        What I found at Academia O was not just an institution, 
                                                        but a community that believed in me, supported me, and helped me grow both academically and personally.

                                                            The faculty at Academia O played a tremendous role in shaping my journey. 
                                                            They were more than instructors, 
                                                            they were mentors who took the time to
                                                            understand my strengths, encourage my potential, 
                                                            and guide me through challenges with patience and care.
                                                            Their dedication made me feel seen as an individual,
                                                            not just another student in the classroom.

                                                            Beyond academics, the environment at the college fostered
                                                            confidence, discipline, and resilience. The modern resources,
                                                            engaging programs, and vibrant campus atmosphere created countless 
                                                            opportunities for me to learn and grow in ways that extended far beyond textbooks.

                                                            Looking back, I realize that Academia O gave me more than support,
                                                            it gave me the tools to face the world with courage and ambition.
                                                            It is a place where students are nurtured, inspired, and prepared
                                                            for the future. For anyone seeking not only quality education
                                                                but also genuine support and personal growth, I wholeheartedly 
                                                                recommend Academia O College. ”</p>
                                                    <div class="testimonial-one__client-info">
                                                        <div class="testimonial-one__rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <h3 class="testimonial-one__client-name">Masturah</h3>
                                                        <p>Ohio State University, USA.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Testimonial One Single End-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--Testimonial One End-->
        </div>
        <!--Testimonial Two End-->

       
@endsection