@extends('layout.master')
@section('content')
            <!--Main Slider Start-->
            <section class="main-slider-three clearfix">
                <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                    "effect": "fade",
                    "pagination": {
                    "el": "#main-slider-pagination",
                    "type": "bullets",
                    "clickable": true
                    },
                    "navigation": {
                    "nextEl": "#main-slider__swiper-button-next",
                    "prevEl": "#main-slider__swiper-button-prev"
                    },
                    "autoplay": {
                    "delay": 5000
                    }}'>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="image-layer-three"
                                style="background-image: url({{ asset('assets/assets/images/backgrounds/home.jpg')}});"></div>
                            <!-- /.image-layer -->

                            <div class="main-slider-three__shape-1"></div>
                            <div class="main-slider-three__shape-2"></div>

                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="main-slider-three__content">
                                            <h2 class="main-slider-three__title">Welcome to Academia O College<br> </h2>
                                            <p class="main-slider-three__text">where innovation meets excellence

                                            </p>
                                            {{-- <div class="main-slider-three__btn-box">
                                                <a href="about.html')}}"
                                                    class="thm-btn main-slider__btn main-slider-two__btn">Creative
                                                    Solution</a>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="image-layer-three"
                                style="background-image: url({{ asset('assets/assets/images/backgrounds/home.jpg')}});"></div>
                            <!-- /.image-layer -->

                            <div class="main-slider-three__shape-1"></div>
                            <div class="main-slider-three__shape-2"></div>

                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="main-slider-three__content">
                                            <h2 class="main-slider-three__title">The Future begins  <br>here</h2>
                                            <p class="main-slider-three__text">A future-focused High school  where academic excellence meets
                                                <br>innovation, character and vision</p>
                                            <div class="main-slider-three__btn-box">
                                                <a href="about.html')}}"
                                                    class="thm-btn main-slider__btn main-slider-two__btn">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="swiper-slide">
                            <div class="image-layer-three"
                                style="background-image: url({{ asset('assets/assets/images/backgrounds/bg1.jpg')}});"></div>
                            <!-- /.image-layer -->

                            <div class="main-slider-three__shape-1"></div>
                            <div class="main-slider-three__shape-2"></div>

                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="main-slider-three__content">
                                            <h2 class="main-slider-three__title">We Create Digital <br> Benchmarks</h2>
                                            <p class="main-slider-three__text">We excel at digital strategy, branding and
                                                the development of digital <br> products such as websites, immersive
                                                experiences </p>
                                            <div class="main-slider-three__btn-box">
                                                <a href="about.html')}}"
                                                    class="thm-btn main-slider__btn main-slider-two__btn">Creative
                                                    Solution</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
     --}}

                    </div>

                    <!-- If we need navigation buttons -->
                    <div class="main-slider-three__nav">
                        <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                            <i class="icon-right-arrow-1"></i>
                        </div>
                        <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                            <i class="icon-left-arrow-1"></i>
                        </div>
                    </div>

                </div>
            </section>
            <!--Main Slider End-->

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

            <!--About Three End-->

                <!--Gallery Start-->
            <section class="gallery">
                <div class="container">
                    <div class="row">
                        @foreach($images as $img)
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                <div class="gallery-item">
                                    <div class="gallery-item__image position-relative overflow-hidden">
                                        <img src="{{ $img['thumbnail'] }}" alt="{{ $img['title'] }}" class="img-fluid w-100" style="transition: transform 0.3s ease; cursor: pointer;">
                                        <div class="gallery-item__overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-end p-2 p-md-3 bg-dark bg-opacity-0"
                                            style="transition: all 0.3s ease; opacity: 0;">
                                            <div class="position-relative z-2 w-100">
                                                <h3 class="text-white mb-1 mb-md-1 fw-bold" style="font-size: 1.1rem; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $img['title'] }}</h3>
                                                <p class="text-white-50 small mb-2 mb-md-3 d-none d-md-block" style="line-height: 1.3; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">{{ $img['description'] }}</p>
                                                <p class="text-white-50 small mb-2 mb-md-3 d-md-none" style="line-height: 1.2; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ Str::limit($img['description'], 40) }}</p>
                                            </div>
                                            <a href="javascript:void(0);" class="gallery-item__link position-absolute end-0 bottom-0 m-2 m-md-3 text-white gallery-trigger"
                                            data-index="{{ $loop->index }}"
                                            data-src="{{ $img['full'] }}" data-title="{{ $img['title'] }}" data-desc="{{ $img['description'] }}"
                                            style="z-index: 3; transition: all 0.3s ease;">
                                                <i class="fa fa-search-plus fa-lg fa-md-2x"></i>
                                            </a>
                                            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-75"
                                                style="transition: opacity 0.3s ease; opacity: 0; z-index: 1;"></div>
                                        </div>
                                    </div>
                                    <div class="gallery-item__content pt-2 pt-md-3">
                                        <h3 class="gallery-item__title mb-1 mb-md-1">{{ $img['title'] }}</h3>
                                        <p class="gallery-item__text small text-muted mb-0">{{ Str::limit($img['description'], 60) }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!--Gallery End-->

            <!-- Image Modal (BS4 Compatible) -->
            <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="imageModalLabel">Gallery Image</h5>
                            <button type="button" class="close modal-close-btn" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body position-relative">
                            <button type="button" id="prevBtn" class="btn btn-link position-absolute" style="left: 10px; top: 50%; transform: translateY(-50%); z-index: 10; font-size: 2rem; color: white; text-shadow: 0 0 5px rgba(0,0,0,0.5);" disabled>&larr;</button>
                            <img src="" class="img-fluid d-block mx-auto" id="modalImage" alt="" style="max-height: 60vh; width: auto;">
                            <button type="button" id="nextBtn" class="btn btn-link position-absolute" style="right: 10px; top: 50%; transform: translateY(-50%); z-index: 10; font-size: 2rem; color: white; text-shadow: 0 0 5px rgba(0,0,0,0.5);">&rarr;</button>
                            <div id="imageCaption" class="text-center mt-3 p-3 bg-light rounded" style="margin: 0 50px;">
                                <h6 id="modalTitle" class="mb-1"></h6>
                                <p id="modalDescription" class="mb-2 small"></p>
                                <small id="imageCounter" class="text-muted"></small>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary modal-close-btn" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>



            <!--Consulting Two Start-->
            <section class="consulting-two">
                <div class="consulting-two__bg" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                    style="background-image: url({{ asset('assets/assets/images/backgrounds/bg3.jpg')}});"></div>
                <div class="container">
                    <div class="row">
                        <!-- Left Side -->
                        <div class="col-xl-6 col-lg-6">
                            <div class="consulting-one__left">
                                <h3 class="consulting-one__title">Guiding Students. Building Futures.</h3>
                                <p class="consulting-one__text">
                                    At Academia O College, we believe that every student deserves the right guidance to reach their full potential.
                                    Our academic consultation services help parents and students make informed decisions about courses, career paths,
                                    and personal development. With a student-first approach, we nurture talents and prepare our learners to excel in a global world.
                                </p>
                                <div class="consulting-one__bottom">
                                    <div class="consulting-one__Strategy">
                                        {{-- <div class="icon">
                                            <span class="icon-chart-diagram-pie"></span>
                                        </div> --}}
                                        {{-- <div class="text">
                                            <h3>Academic Consulting & Strategy</h3>
                                        </div> --}}
                                    </div>
                                    <div class="consulting-one__count-box">
                                        <div class="consulting-one__count">
                                            <h3 class="odometer" data-count="1205">00</h3>
                                            <span class="consulting-one__count-plus">+</span>
                                        </div>
                                        <div class="consulting-one__count-text">
                                            <p>Students & Parents <br> Guided</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Right Side -->
                        <div class="col-xl-6 col-lg-6">
                            <div class="consulting-one__right">
                                <div class="consulting-one__right-form-box wow slideInRight" data-wow-delay="100ms"
                                    data-wow-duration="2500ms">
                                    <p class="consulting-one__form-sub-title">Contact Us</p>
                                    <h3 class="consulting-one__form-title">Reach Out To Us Today</h3>
                                    <form action="#" method="post" class="consulting-one__right-form">
                                        <div class="consulting-one__input-box">
                                            <input type="text" placeholder="Name" name="Name">
                                        </div>
                                        <div class="consulting-one__input-box">
                                            <input type="email" placeholder="Email Address" name="email">
                                        </div>
                                        <div class="consulting-one__input-box">
                                            <input type="text" placeholder="Phone Number" name="Phone">
                                        </div>
                                        <div class="consulting-one__input-box">
                                            <select class="selectpicker" aria-label="Default select example">
                                                <option selected>Area of Interest</option>
                                                <option value="1">Admission Guidance/Enquiries</option>
                                                <option value="2">Career Counselling</option>
                                                <option value="3">Boarding School Enquiries</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="thm-btn consulting-one__btn">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--Consulting Two End-->

            @include('layout.inc.whychooseus')

            <!--Project One start-->
            <section class="project-three">
                <div class="container">
                    <div class="project-one__top">
                        <div class="section-title text-center">
                            <span class="section-title__tagline">BEFORE ACADEMIA O COLLEGE WAS ESTABLISHED</span>
                            <div class="section-title-shape">
                                <img src="{{ asset('assets/assets/images/shapes/section-title-shape-1.png')}}" alt="">
                            </div>
                            <h2 class="section-title__title">Academia O Prevarsity Success Stories</h2>
                        </div>
                    </div>
                    <div class="project-one__bottom">
                        <div class="project-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                            "loop": true,
                            "autoplay": false,
                            "margin": 30,
                            "nav": false,
                            "dots": true,
                            "smartSpeed": 500,
                            "autoplayTimeout": 10000,
                            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                            "responsive": {
                                "0": {
                                    "items": 1
                                },
                                "768": {
                                    "items": 2
                                },
                                "992": {
                                    "items": 3
                                },
                                "1200": {
                                    "items": 3
                                }
                            }
                        }'>
                            <!--Project One Single Start-->
                            <div class="item">
                                <div class="project-one__single">
                                    <div class="project-one__img">
                                        <img src="{{ asset('assets/assets/images/project/1.jpg')}}" alt="">
                                    </div>
                                    <div class="project-one__content-box">
                                        <div class="project-one__content">
                                            <p class="project-one__sub-title">Cultural day celebration organized by UTME students.</p>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--Project One Single End-->

                            <!--Project One Single Start-->
                            <div class="item">
                                <div class="project-one__single">
                                    <div class="project-one__img">
                                        <img src="{{ asset('assets/assets/images/project/7.jpg')}}" alt="">
                                    </div>
                                    <div class="project-one__content-box">
                                        <div class="project-one__content">
                                            <p class="project-one__sub-title">Mr Agboola (Ogun State Ministry of Education, Science and Technology) and the Director during the Admission Summit 2025.</p>

                                        </div>

                                    </div>
                                </div>
                            </div>
                              <!--Project One Single Start-->
                            <div class="item">
                                <div class="project-one__single">
                                    <div class="project-one__img">
                                        <img src="{{ asset('assets/assets/images/project/8.jpg')}}" alt="">
                                    </div>
                                    <div class="project-one__content-box">
                                        <div class="project-one__content">
                                            <p class="project-one__sub-title">Science Practicals for WAEC students.</p>

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!--Project Three End-->

           @include('layout.inc.counters')

           @include('layout.inc.testimonials')

           @include('layout.inc.team')

             @push('scripts')
    <script>
        $(document).ready(function() {
            var galleryImages = @json($images);
            var currentIndex = 0;
            var modal = $('#imageModal');

            // Manual click handler as fallback
            $('.gallery-trigger').on('click', function(e) {
                e.preventDefault();
                console.log('Trigger clicked!');
                var $this = $(this);
                currentIndex = parseInt($this.data('index')) || 0;
                modal.modal('show');
                updateModal();
            });

            // Original Bootstrap event
            modal.on('show.bs.modal', function (event) {
                console.log('Modal showing via BS event'); 
                var button = $(event.relatedTarget);
                if (button.length) {
                    currentIndex = parseInt(button.data('index')) || 0;
                    updateModal();
                }
            });

            function updateModal() {
                var img = galleryImages[currentIndex];
                $('#imageModalLabel').text(img.title);
                $('#modalImage').attr('src', img.full).attr('alt', img.title);
                $('#modalTitle').text(img.title);
                $('#modalDescription').text(img.description);
                $('#imageCounter').text((currentIndex + 1) + ' of ' + galleryImages.length);

                // Update navigation buttons
                $('#prevBtn').prop('disabled', currentIndex === 0).toggleClass('text-muted', currentIndex === 0);
                $('#nextBtn').prop('disabled', currentIndex === galleryImages.length - 1).toggleClass('text-muted', currentIndex === galleryImages.length - 1);
            }

            $('#prevBtn').click(function() {
                if (currentIndex > 0) {
                    currentIndex--;
                    updateModal();
                }
            });

            $('#nextBtn').click(function() {
                if (currentIndex < galleryImages.length - 1) {
                    currentIndex++;
                    updateModal();
                }
            });

            // Keyboard navigation
            modal.on('shown.bs.modal', function() {
                $(this).off('keydown').on('keydown', function(e) {
                    if (e.keyCode === 37) { // Left arrow
                        $('#prevBtn').click();
                    } else if (e.keyCode === 39) { // Right arrow
                        $('#nextBtn').click();
                    } else if (e.keyCode === 27) { // Esc
                        modal.modal('hide');
                    }
                });
            });

            // Fix close buttons: Manual handler for X and Close button
            $('.modal-close-btn').on('click', function(e) {
                e.preventDefault();
                console.log('Close clicked!'); // Debug
                modal.modal('hide');
            });

            // Ensure Bootstrap's data-dismiss works as fallback
            modal.on('click', '[data-dismiss="modal"]', function(e) {
                modal.modal('hide');
            });

            // Thumbnail hover effects
            $('.gallery-item__image').hover(
                function() {
                    $(this).find('.gallery-item__overlay').css({ opacity: 1, background: 'linear-gradient(to top, rgba(0,0,0,0.7), transparent)' });
                    $(this).find('img').css('transform', 'scale(1.05)');
                },
                function() {
                    $(this).find('.gallery-item__overlay').css({ opacity: 0, background: 'none' });
                    $(this).find('img').css('transform', 'scale(1)');
                }
            );
        });
    </script>
    @endpush


@endsection
