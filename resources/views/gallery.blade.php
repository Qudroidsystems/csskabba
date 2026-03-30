@extends('layout.master')
@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg.jpg') }});">
        </div>
        <div class="page-header__shape-1"></div>
        <div class="container">
            <div class="page-header__inner">
                <h2>{{ $pageTitle }}</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

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