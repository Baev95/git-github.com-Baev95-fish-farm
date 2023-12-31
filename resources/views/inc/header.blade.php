<header class="header">
    <div class="container header__wrapper">
        <div class="header__block lvl1">
            <a href="/">
                <img class="logo" src="/images/fish_logo/head_log.png">
            </a>
            <div class="dropdown">
                <div class="dropbtn">
                    <?php if ($current_lang == 'ge') { ?>
                    <img class="header__block-flags" src="/images/flags/GE.png"><span>GE</span>
                    <?php } else { ?>
                    <img class="header__block-flags" src="/images/flags/EN.png"><span>EN</span>
                    <?php } ?>
                </div>
                <div class="dropdown-content" id="dropdownContent">
                    <?php if ($current_lang == 'ge') { ?>
                    <a class="dropdown-item" href="locale/en" data-lang="en">
                        <img class="header__block-flags" src="/images/flags/EN.png">
                        <span>EN</span>
                    </a>
                    <?php } else { ?>
                    <a class="dropdown-item" href="locale/ge" data-lang="ge">
                        <img class="header__block-flags" src="/images/flags/GE.png">
                        <span>GE</span>
                    </a>
                    <?php } ?>
                </div>
            </div>
        </div>


        <style>
            .menu-item a:hover {
                color: #4d977c !important;
            }

            .header__block-li.menu:hover .menu_sub {
                display: block;
                position: absolute;
                width: max-content;
                z-index: 5;

                max-width: 500px;
                padding: 24px;
                border-radius: 16px;
                background: var(--secondary, #096E49);
                box-shadow: 0px 4px 24px 0px rgba(9, 110, 73, 0.10);
            }

            .menu_sub {
                display: none;
            }

            .menu-item {
                width: 100%;
                margin-bottom: 8px;
            }
        </style>

        <nav class="header__block">
            <ul class="header__block-ul">
                <li class="header__block-li">
                    <a href="{{ route('about') }}">
                        @lang('public.about')
                    </a>
                </li>
                <li class="header__block-li menu" style="position: relative;">
                    <a href="{{ route('products') }}">
                        @lang('public.product')
                    </a>
                    <ul class="menu_sub">
                        <li class="header__block-li menu-item">
                            <a href="{{ route('fish') }}" style="color: rgba(255, 255, 255, 1);">
                                @lang('public.fish')
                            </a>
                        </li>
                        <li class="header__block-li menu-item">
                            <a href="{{ route('fishFeed') }}" style="color: rgba(255, 255, 255, 1);">
                                @lang('public.fishFeed')
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="header__block-li menu" style="position: relative;">
                    <a href="{{ route('news') }}">
                        @lang('public.news')
                    </a>

                    <ul class="menu_sub">
                        @foreach ($posts as $post)
                            <li class="header__block-li menu-item">
                                <a href="{{ route('posts.single', ['title_url' => $post->title_url]) }}"
                                    style="color: rgba(255, 255, 255, 1);">
                                    <?php if ($current_lang == 'ge') { ?>
                                    {{ $post->title_ge }}
                                    <?php } else { ?>
                                    {{ $post->title_en }}
                                    <?php } ?>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="header__block-li">
                    <a href="{{ route('career') }}">
                        @lang('public.career')
                    </a>
                </li>
                <li class="header__block-li">
                    <a href="{{ route('contact') }}">
                        @lang('public.contact')
                    </a>
                </li>
            </ul>
        </nav>

        <div class="header__block">
            <a class="header__block-href-soc" href=""><img class="header__block-img-soc"
                    src="/images/soc/sn__fb.png"></a>
            <a class="header__block-href-soc" href="https://www.instagram.com/geo_aquaculture/"><img
                    class="header__block-img-soc" src="/images/soc/sn__inst.png"></a>
            <a class="header__block-href-soc" href="tel:+902525366229"><svg xmlns="http://www.w3.org/2000/svg"
                    width="24" height="25" viewBox="0 0 24 25" fill="none" style="margin-right: 4px;">
                    <path
                        d="M19.4401 13.2958C19.2201 13.2958 18.9901 13.2258 18.7701 13.1758C18.3246 13.0776 17.8868 12.9473 17.4601 12.7858C16.9962 12.617 16.4862 12.6258 16.0284 12.8104C15.5706 12.995 15.1972 13.3424 14.9801 13.7858L14.7601 14.2358C13.7861 13.6939 12.8911 13.021 12.1001 12.2358C11.3149 11.4448 10.6419 10.5498 10.1001 9.57577L10.5201 9.29577C10.9635 9.07868 11.3109 8.7053 11.4955 8.24746C11.6801 7.78962 11.6889 7.27968 11.5201 6.81577C11.3613 6.38819 11.231 5.95056 11.1301 5.50577C11.0801 5.28577 11.0401 5.05577 11.0101 4.82577C10.8887 4.12139 10.5197 3.48351 9.96972 3.02701C9.41972 2.5705 8.7248 2.32538 8.0101 2.33577H5.0101C4.57913 2.33172 4.15235 2.42058 3.75881 2.5963C3.36527 2.77201 3.01421 3.03046 2.72953 3.35405C2.44485 3.67763 2.23324 4.05876 2.10909 4.47148C1.98494 4.8842 1.95118 5.31883 2.0101 5.74577C2.54284 9.93515 4.45613 13.8276 7.44775 16.8084C10.4394 19.7892 14.3388 21.6883 18.5301 22.2058H18.9101C19.6475 22.2068 20.3595 21.9363 20.9101 21.4458C21.2265 21.1628 21.4792 20.8159 21.6516 20.4281C21.8239 20.0402 21.9121 19.6202 21.9101 19.1958V16.1958C21.8979 15.5012 21.6449 14.8323 21.1944 14.3034C20.744 13.7745 20.1239 13.4184 19.4401 13.2958ZM19.9401 19.2958C19.9399 19.4378 19.9095 19.5781 19.8509 19.7074C19.7923 19.8367 19.7068 19.9521 19.6001 20.0458C19.4887 20.1428 19.3581 20.2152 19.2168 20.2583C19.0755 20.3013 18.9267 20.3141 18.7801 20.2958C15.035 19.8156 11.5563 18.1023 8.89282 15.4261C6.2293 12.7499 4.53251 9.2631 4.0701 5.51577C4.05419 5.36928 4.06813 5.2211 4.1111 5.08016C4.15407 4.93922 4.22517 4.80845 4.3201 4.69577C4.41381 4.5891 4.52916 4.50361 4.65848 4.44498C4.7878 4.38636 4.92812 4.35595 5.0701 4.35577H8.0701C8.30265 4.35059 8.52972 4.42665 8.71224 4.57084C8.89476 4.71503 9.02131 4.91834 9.0701 5.14577C9.1101 5.4191 9.1601 5.6891 9.2201 5.95577C9.33562 6.48291 9.48936 7.00095 9.6801 7.50577L8.2801 8.15577C8.1604 8.21069 8.05272 8.28871 7.96326 8.38536C7.87379 8.48201 7.8043 8.59538 7.75877 8.71896C7.71324 8.84254 7.69257 8.9739 7.69795 9.10549C7.70332 9.23708 7.73464 9.36631 7.7901 9.48577C9.2293 12.5685 11.7073 15.0466 14.7901 16.4858C15.0336 16.5858 15.3066 16.5858 15.5501 16.4858C15.6748 16.4412 15.7894 16.3722 15.8873 16.283C15.9851 16.1937 16.0643 16.0859 16.1201 15.9658L16.7401 14.5658C17.2571 14.7506 17.7847 14.9043 18.3201 15.0258C18.5868 15.0858 18.8568 15.1358 19.1301 15.1758C19.3575 15.2246 19.5608 15.3511 19.705 15.5336C19.8492 15.7161 19.9253 15.9432 19.9201 16.1758L19.9401 19.2958Z"
                        fill="#00222A" />
                </svg>+90 252 536 62 29</a>
        </div>

        <div class="header__block-mob">
            <a class="header__block-href-soc" href="tel:+902525366229"><svg xmlns="http://www.w3.org/2000/svg"
                    width="24" height="25" viewBox="0 0 24 25" fill="none" style="margin-right: 4px;">
                    <path
                        d="M19.4401 13.2958C19.2201 13.2958 18.9901 13.2258 18.7701 13.1758C18.3246 13.0776 17.8868 12.9473 17.4601 12.7858C16.9962 12.617 16.4862 12.6258 16.0284 12.8104C15.5706 12.995 15.1972 13.3424 14.9801 13.7858L14.7601 14.2358C13.7861 13.6939 12.8911 13.021 12.1001 12.2358C11.3149 11.4448 10.6419 10.5498 10.1001 9.57577L10.5201 9.29577C10.9635 9.07868 11.3109 8.7053 11.4955 8.24746C11.6801 7.78962 11.6889 7.27968 11.5201 6.81577C11.3613 6.38819 11.231 5.95056 11.1301 5.50577C11.0801 5.28577 11.0401 5.05577 11.0101 4.82577C10.8887 4.12139 10.5197 3.48351 9.96972 3.02701C9.41972 2.5705 8.7248 2.32538 8.0101 2.33577H5.0101C4.57913 2.33172 4.15235 2.42058 3.75881 2.5963C3.36527 2.77201 3.01421 3.03046 2.72953 3.35405C2.44485 3.67763 2.23324 4.05876 2.10909 4.47148C1.98494 4.8842 1.95118 5.31883 2.0101 5.74577C2.54284 9.93515 4.45613 13.8276 7.44775 16.8084C10.4394 19.7892 14.3388 21.6883 18.5301 22.2058H18.9101C19.6475 22.2068 20.3595 21.9363 20.9101 21.4458C21.2265 21.1628 21.4792 20.8159 21.6516 20.4281C21.8239 20.0402 21.9121 19.6202 21.9101 19.1958V16.1958C21.8979 15.5012 21.6449 14.8323 21.1944 14.3034C20.744 13.7745 20.1239 13.4184 19.4401 13.2958ZM19.9401 19.2958C19.9399 19.4378 19.9095 19.5781 19.8509 19.7074C19.7923 19.8367 19.7068 19.9521 19.6001 20.0458C19.4887 20.1428 19.3581 20.2152 19.2168 20.2583C19.0755 20.3013 18.9267 20.3141 18.7801 20.2958C15.035 19.8156 11.5563 18.1023 8.89282 15.4261C6.2293 12.7499 4.53251 9.2631 4.0701 5.51577C4.05419 5.36928 4.06813 5.2211 4.1111 5.08016C4.15407 4.93922 4.22517 4.80845 4.3201 4.69577C4.41381 4.5891 4.52916 4.50361 4.65848 4.44498C4.7878 4.38636 4.92812 4.35595 5.0701 4.35577H8.0701C8.30265 4.35059 8.52972 4.42665 8.71224 4.57084C8.89476 4.71503 9.02131 4.91834 9.0701 5.14577C9.1101 5.4191 9.1601 5.6891 9.2201 5.95577C9.33562 6.48291 9.48936 7.00095 9.6801 7.50577L8.2801 8.15577C8.1604 8.21069 8.05272 8.28871 7.96326 8.38536C7.87379 8.48201 7.8043 8.59538 7.75877 8.71896C7.71324 8.84254 7.69257 8.9739 7.69795 9.10549C7.70332 9.23708 7.73464 9.36631 7.7901 9.48577C9.2293 12.5685 11.7073 15.0466 14.7901 16.4858C15.0336 16.5858 15.3066 16.5858 15.5501 16.4858C15.6748 16.4412 15.7894 16.3722 15.8873 16.283C15.9851 16.1937 16.0643 16.0859 16.1201 15.9658L16.7401 14.5658C17.2571 14.7506 17.7847 14.9043 18.3201 15.0258C18.5868 15.0858 18.8568 15.1358 19.1301 15.1758C19.3575 15.2246 19.5608 15.3511 19.705 15.5336C19.8492 15.7161 19.9253 15.9432 19.9201 16.1758L19.9401 19.2958Z"
                        fill="#00222A" />
                </svg>+90 252 536 62 29</a>
        </div>


        <nav class="navbar">
            <div class="navbar__wrap">
                <div class="hamb">
                    <div class="hamb__field" id="hamb">
                        <span class="bar"></span> <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                </div>
                <ul class="header__block-ul menu" id="menu">
                    <div class="header__block-mob dropdown">

                        <div class="dropbtn">
                            <?php if ($current_lang == 'ge') { ?>
                            <img class="header__block-flags" src="/images/flags/GE.png"><span>GE</span>
                            <?php } else { ?>
                            <img class="header__block-flags" src="/images/flags/EN.png"><span>EN</span>
                            <?php } ?>
                        </div>
                        <div class="dropdown-content" id="dropdownContent">
                            <?php if ($current_lang == 'ge') { ?>
                            <a class="dropdown-item" href="locale/en" data-lang="en">
                                <img class="header__block-flags" src="/images/flags/EN.png">
                                <span>EN</span>
                            </a>
                            <?php } else { ?>
                            <a class="dropdown-item" href="locale/ge" data-lang="ge">
                                <img class="header__block-flags" src="/images/flags/GE.png">
                                <span>GE</span>
                            </a>
                            <?php } ?>
                        </div>

                    </div>
                    <li class="header__block-li">
                        <a href="{{ route('about') }}">
                            @lang('public.about')
                        </a>
                    </li>
                    <li class="header__block-li">
                        <a href="{{ route('news') }}">
                            @lang('public.product')
                        </a>
                    </li>
                    <li class="header__block-li">
                        <a href="{{ route('fish') }}">
                            @lang('public.fish')
                        </a>
                    </li>
                    <li class="header__block-li">
                        <a href="{{ route('fishFeed') }}">
                            @lang('public.fishFeed')
                        </a>
                    </li>
                    @foreach ($posts as $post)
                        <li class="header__block-li">
                            <a href="{{ route('posts.single', ['title_url' => $post->title_url]) }}">
                                <?php if ($current_lang == 'ge') { ?>
                                {{ $post->title_ge }}
                                <?php } else { ?>
                                {{ $post->title_en }}
                                <?php } ?>
                            </a>
                        </li>
                    @endforeach
                    <li class="header__block-li">
                        <a href="{{ route('career') }}">
                            @lang('public.career')
                        </a>
                    </li>
                    <li class="header__block-li">
                        <a href="{{ route('contact') }}">
                            @lang('public.contact')
                        </a>
                    </li>
                    <div class="header__block-mob">
                        <a class="header__block-href-soc" href=""><img class="header__block-img-soc"
                                src="/images/soc/sn__fb.png"></a>
                        <a class="header__block-href-soc" href=""><img class="header__block-img-soc"
                                src="/images/soc/sn__inst.png"></a>
                    </div>
                </ul>
            </div>
        </nav>
        <div class="popup" id="popup"></div>
    </div>
</header>
