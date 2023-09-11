@extends('layouts.app')

@section('title-block')
    @lang('home.title')
@endsection

@section('content')
    <main>

        <section class="section banner">
            <div class="container banner-wrapper">

                <h1 class="zag banner__h1">
                    @lang('home.banner_text')
                </h1>
                <div class="banner__arrow">
                    <a href="javascript:void(0);" class="banner__arrow-href banner__arrow-scroll">
                        <svg class="banner__arrow-img" width="40" height="161" viewBox="0 0 40 161" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="guidance:up-arrow">
                                <path id="Vector"
                                    d="M31.6667 147.666C30.4301 147.666 28.5834 148.888 27.0334 150.125C25.0334 151.715 23.2884 153.615 21.9567 155.793C20.9584 157.426 20.0001 159.406 20.0001 161M20.0001 161C20.0001 159.406 19.0417 157.425 18.0434 155.793C16.7101 153.615 14.9651 151.715 12.9684 150.125C11.4168 148.888 9.56675 147.666 8.33342 147.666M20.0001 161L20.0001 -0.000245161"
                                    stroke="white" stroke-width="2" />
                            </g>
                        </svg>
                        <svg class="banner__arrow-img" width="72" height="72" viewBox="0 0 72 72" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle id="Ellipse 1" cx="36" cy="35.9998" r="35"
                                transform="rotate(90 36 35.9998)" stroke="white" stroke-width="2" />
                        </svg>
                    </a>
                </div>

            </div>
        </section>

        <style>

        </style>

        <div class="section m160" data-aos="fade-up">
            <div class="container fish-description">

                <div class="item1">
                    <p class="fish-description__text-b">
                        @lang('home.we_are_fish_farm')
                    </p>
                    <img src="/images/main_index_img/fish_catch.png" alt="fish_catch">
                </div>
                <div class="item2">
                    <p class="fish-description__text">@lang('home.our_company_specializes')
                    </p>
                    <img src="/images/main_index_img/two_fishs.png" alt="two_fishs">

                    <div class="arrow-rigth">
                        <a href="{{ route('about') }}" class="arrow-rigth__href">
                            @lang('public.more_about_us')
                            <span> </span>
                        </a>
                    </div>
                </div>
                <div class="item3">
                    <img style="max-width: 290px;" src="/images/main_index_img/many_fishs.png" alt="many_fishs">
                </div>

            </div>
        </div>

        <section class="section-offset gallery primary-color m160" data-aos="fade-up" data-aos-duration="1000">
            <div class="container">

                <div class="gallery-zag">
                    <h2 class="gallery-title h2">@lang('public.gallery')</h2>
                    <div class="swiper--pag">
                        <div>
                            <svg class="swiper-button-prev--clinic swiper-button-prev" xmlns="http://www.w3.org/2000/svg"
                                width="40" height="41" viewBox="0 0 40 41" fill="none">
                                <g clip-path="url(#clip0_157_1653)">
                                    <path
                                        d="M13.3333 32.2582C13.3333 31.0216 12.1117 29.1749 10.875 27.6249C9.285 25.6249 7.385 23.8799 5.20667 22.5482C3.57333 21.5499 1.59333 20.5916 1.39124e-07 20.5916M1.39124e-07 20.5916C1.59333 20.5916 3.575 19.6332 5.20667 18.6349C7.385 17.3016 9.285 15.5566 10.875 13.5599C12.1117 12.0082 13.3333 10.1582 13.3333 8.92489M1.39124e-07 20.5916L40 20.5916"
                                        stroke="white" stroke-width="2" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_157_1653">
                                        <rect width="40" height="40" fill="white"
                                            transform="translate(0 40.5916) rotate(-90)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div>
                            <svg class="swiper-button-next--clinic swiper-button-next" xmlns="http://www.w3.org/2000/svg"
                                width="40" height="41" viewBox="0 0 40 41" fill="none">
                                <g clip-path="url(#clip0_157_1655)">
                                    <path
                                        d="M26.6667 8.92488C26.6667 10.1615 27.8883 12.0082 29.125 13.5582C30.715 15.5582 32.615 17.3032 34.7933 18.6349C36.4267 19.6332 38.4067 20.5915 40 20.5915M40 20.5915C38.4067 20.5915 36.425 21.5499 34.7933 22.5482C32.615 23.8815 30.715 25.6265 29.125 27.6232C27.8883 29.1749 26.6667 31.0249 26.6667 32.2582M40 20.5915L4.43708e-07 20.5915"
                                        stroke="white" stroke-width="2" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_157_1655">
                                        <rect width="40" height="40" fill="white"
                                            transform="translate(40 0.591553) rotate(90)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="swiper swiper__gallery">
                    <div class="swiper-wrapper" id="gallery">

                        <div class="swiper-slide">
                            <a href="/images/gallery/slider__img1.png" data-fancybox="gallery">
                                <img src="/images/gallery/slider__img1.png" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/images/gallery/slider__img2.png" data-fancybox="gallery">
                                <img src="/images/gallery/slider__img2.png" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/images/gallery/slider__img3.png" data-fancybox="gallery">
                                <img src="/images/gallery/slider__img3.png" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/images/gallery/slider__img4.png" data-fancybox="gallery">
                                <img src="/images/gallery/slider__img4.png" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/images/gallery/slider__img5.png" data-fancybox="gallery">
                                <img src="/images/gallery/slider__img5.png" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/images/gallery/slider__img6.png" data-fancybox="gallery">
                                <img src="/images/gallery/slider__img6.png" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/images/gallery/slider__img7.png" data-fancybox="gallery">
                                <img src="/images/gallery/slider__img7.png" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/images/gallery/slider__img8.png" data-fancybox="gallery">
                                <img src="/images/gallery/slider__img8.png" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/images/gallery/slider__img9.png" data-fancybox="gallery">
                                <img src="/images/gallery/slider__img9.png" alt="">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <section class="features m160" data-aos="fade-right">
            <div class="container">

                <h2 class="features__h2 h2">@lang('home.why_choose_georgian_aquaculture')</h2>
                <div class="features__list">
                    <div class="features__card">
                        <div class="features__card-head">
                            <h4 class="features__card-title h4">@lang('home.environmental_sustainability_title')</h4>
                            <img class="features__card-img" src="/images/features/featureCard__1.svg" alt="icon">
                        </div>
                        <p class="features__card-description">
                            @lang('home.environmental_sustainability')
                        </p>
                    </div>
                    <div class="features__card">
                        <div class="features__card-head">
                            <h4 class="features__card-title h4">@lang('home.quality_and_freshness_title')</h4>
                            <img style="width: 140.647px;" class="features__card-img"
                                src="/images/features/featureCard__2.svg" alt="icon">
                        </div>
                        <p class="features__card-description">
                            @lang('home.quality_and_freshness')
                        </p>
                    </div>
                    <div class="features__card">
                        <div class="features__card-head">
                            <h4 class="features__card-title h4">@lang('home.industry_pioneers_title')</h4>
                            <img class="features__card-img" src="/images/features/featureCard__3.svg" alt="icon">
                        </div>
                        <p class="features__card-description">
                            @lang('home.industry_pioneers')
                        </p>
                    </div>
                </div>

                <div class="features__description" data-aos="zoom-in">
                    <img class="features__description-left-img" src="/images/features/fish.png" alt="">
                    <p class="features__description-text">
                        @lang('home.each_fish')
                    </p>
                    <img class="features__description-rigth-img" src="/images/features/fish_steak.png" alt="">
                </div>

            </div>
        </section>

        <section class="our-products m160" data-aos="fade-down">
            <div class="container">

                <h2 class="our-products__h2 h2">@lang('public.our_products')</h2>
                <div class="our-products__list">
                    <div class="our-products__block">
                        <h4 class="our-products__block-title h4">@lang('home.fish')</h4>
                        <img class="our-products__block-img" src="/images/our-products/lonely_fish.png" alt="icon">
                        <div class="arrow-rigth">
                            <a href="{{ route('fish') }}" class="arrow-rigth__href">@lang('public.latest_news')
                                <span> </span>
                            </a>
                        </div>
                    </div>
                    <div class="our-products__block">
                        <h4 class="our-products__block-title h4">@lang('home.fish_feed')</h4>
                        <img class="our-products__block-img" src="/images/our-products/food_fishs.png" alt="icon">
                        <div class="arrow-rigth">
                            <a href="{{ route('fishFeed') }}" class="arrow-rigth__href">
                                @lang('public.latest_news')
                                <span> </span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <?/*
            <section class="news m160" data-aos="zoom-in">
                <div class="container">

                    <div class="news-head">
                        <h2 class="news__h2 h2">ჩვენი წარმოება</h2>
                        <div class="arrow-rigth">
                            <a href="#" class="arrow-rigth__href arrow-rigth__href-rigth">მეტის გასაგებად
                                <span> </span>
                            </a>
                        </div>
                    </div>
                    <div class="news__list">

                        <div class="news__card">
                            <img class="news__card-img" src="/images/our-products/lonely_fish.png" alt="icon">
                            <div class="news__card-block card-block">
                                <h4 class="card-block-title h4">ახალი ამბების მაგალითი</h4>
                                <p class="card-block-description">
                                    თითოეული თევზი იზრდება სიყვარულით და ზრუნვით, განსაკუთრებული ყურადღების მიქცევით მის საკვებ
                                    თვისებებსა და გემოზე. </p>
                                <a class="card-block-link">წაიკითხეთ მთლიანად...</a>
                                <span class="card-block-date">22.04.2023</span>
                            </div>

                        </div>
                        <div class="news__card">
                            <img class="news__card-img" src="/images/our-products/lonely_fish.png" alt="icon">
                            <div class="news__card-block card-block">
                                <h4 class="card-block-title h4">ახალი ამბების მაგალითი</h4>
                                <p class="card-block-description">
                                    თითოეული თევზი იზრდება სიყვარულით და ზრუნვით, განსაკუთრებული ყურადღების მიქცევით მის საკვებ
                                    თვისებებსა და გემოზე. </p>
                                <a class="card-block-link">წაიკითხეთ მთლიანად...</a>
                                <span class="card-block-date">22.04.2023</span>
                            </div>
                        </div>
                        <div class="news__card">
                            <img class="news__card-img" src="/images/our-products/lonely_fish.png" alt="icon">
                            <div class="news__card-block card-block">
                                <h4 class="card-block-title h4">ახალი ამბების მაგალითი</h4>
                                <p class="card-block-description">
                                    თითოეული თევზი იზრდება სიყვარულით და ზრუნვით, განსაკუთრებული ყურადღების მიქცევით მის საკვებ
                                    თვისებებსა და გემოზე. </p>
                                <a class="card-block-link">წაიკითხეთ მთლიანად...</a>
                                <span class="card-block-date">22.04.2023</span>
                            </div>
                        </div>
                        <div class="arrow-rigth news__list-arrow-rigth">
                            <a href="#" class="arrow-rigth__href arrow-rigth__href-rigth">მეტის გასაგებად
                                <span> </span>
                            </a>
                        </div>

                    </div>

                </div>
            </section>
    */?>
    </main>
@endsection
