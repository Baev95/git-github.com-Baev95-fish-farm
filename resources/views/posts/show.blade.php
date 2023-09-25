@extends('layouts.app')

@section('title-block')
    <?php if ($current_lang == 'ge') { ?>
    {{ $post->title_ge }}
    <?php } else { ?>
    {{ $post->title_en }}
    <?php } ?>
@endsection

@section('content')
    <style>
        .bread__block {
            max-width: 70%;
        }

        body {
            line-height: 1;
            counter-reset: section;
        }

        .news__card-img {
            width: 100%;
        }

        .bread__wrapper {
            display: flex;
            flex-direction: column;
            position: relative;
            align-items: flex-start;
            padding-top: 32px;
            padding-bottom: 32px;
        }

        .bread__banner_img {
            position: absolute;
            border-radius: 16px;
            max-width: 100%;
            top: -130px;
            right: -20px;
        }

        .news__wrapper {
            position: relative;
        }

        .news__block {
            display: flex;
            flex-direction: column;
            position: relative;
            align-items: flex-start;
            gap: 40px;
        }

        .news__wrapper p {
            width: 50%;
            font-size: 18px;
            font-weight: 400;
        }

        .news__block>p:first-child {
            font-size: 20px;
            font-weight: 700;
        }

        .news ul li,
        .news ol li {
            margin-bottom: 8px;
            list-style-type: none;
            position: relative;
            margin-left: 25px;
        }

        .news ul li:before {
            content: "";
            height: 8px;
            width: 8px;
            background: var(--green, #5B8386);
            position: absolute;
            left: -20px;
            top: 9px;
            border-radius: 50px;
            box-sizing: border-box;
        }

        .news ol li:before {
            counter-increment: section;
            content: counter(section);
            position: absolute;
            left: -22px;
            top: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 2px;
            background: var(--green, #5B8386);
            color: var(--white, #FFF);
            font-family: Calibri;
            font-size: 18px;
            font-style: normal;
            font-weight: 400;
            line-height: 150%;
            padding: 0 4px;
        }

        .news__wrapper img {
            max-width: 500px;
        }

        @media screen and (max-width: 1400px) {
            .news__wrapper .bread__banner_img {
                max-width: 460px;
                right: 20px;
            }
        }

        @media screen and (max-width: 1110px) {

            .bread__block {
                max-width: 100%;
            }

            .bread__banner_img {
                max-width: 400px;
            }

            .news__wrapper .bread__banner_img {
                max-width: 100%;
                right: 20px;
                position: static;
                margin-bottom: 24px;
            }

            .news__wrapper p {
                width: 100%;
                font-size: 18px;
                font-weight: 400;
            }
        }
    </style>

    <main>

        <section class="bread">
            <div class="container bread__wrapper">

                <div class="bread__crumbs"><a href="/">@lang('public.home')</a> / <span>
                        <?php if ($current_lang == 'ge') { ?>
                        {{ $post->title_ge }}
                        <?php } else { ?>
                        {{ $post->title_en }}
                        <?php } ?>
                    </span> </div>
                <div class="bread__block">
                    <h1 class="bread__h1">
                        <?php if ($current_lang == 'ge') { ?>
                        {{ $post->title_ge }}
                        <?php } else { ?>
                        {{ $post->title_en }}
                        <?php } ?></h1>
                </div>


            </div>
        </section>

        <section class="news m60">
            <div class="container news__wrapper">
                <img class="bread__banner_img" src="{{ $post->img }}" alt="banner">
                <div class="news__block">
                    <?php if ($current_lang == 'ge') { ?>
                    {!! $post->text_ge !!}
                    <?php } else { ?>
                    {!! $post->text_en !!}
                    <?php } ?>

                </div>
        </section>


        <section class="our-products m160" data-aos="fade-down">
            <div class="container">
                <div class="our-products__list">

                    <a href="{{ route('fish') }}">
                        <div class="our-products__block">
                            <h4 class="our-products__block-title h4">@lang('home.fish')</h4>
                            <img class="our-products__block-img" src="/images/our-products/lonely_fish.png" alt="icon">
                        </div>
                    </a>

                    <a href="{{ route('fishFeed') }}">
                        <div class="our-products__block">
                            <h4 class="our-products__block-title h4">@lang('home.fish_feed')</h4>
                            <img class="our-products__block-img" src="/images/our-products/food_fishs.png" alt="icon">
                        </div>
                        <a>

                </div>

            </div>
        </section>



    </main>
@endsection
