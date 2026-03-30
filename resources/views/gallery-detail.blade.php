{{-- resources/views/gallery-detail.blade.php --}}
@extends('layout.master')
@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
        </div>
        <div class="page-header__shape-1"></div>
        <div class="container">
            <div class="page-header__inner">
                <h2>{{ $pageTitle }}</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Gallery Detail Start-->
    <section class="gallery-detail">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="gallery-detail__top">
                        <div class="gallery-detail__image">
                            <img src="{{ $image['full'] }}" alt="{{ $image['title'] }}">
                        </div>
                        <div class="gallery-detail__content">
                            <h3 class="gallery-detail__title">{{ $image['title'] }}</h3>
                            <p class="gallery-detail__description">{{ $image['description'] }}</p>
                            <a href="{{ route('gallery.index') }}" class="thm-btn gallery-detail__back-btn">Back to Gallery</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Gallery Detail End-->
@endsection