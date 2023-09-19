<footer class="footer primary-color">
    <div class="container footer__wrapper">

        <a href="/"><img class="footer__logo" src="/images/fish_logo/footer__logo.png" alt="logo"></a>

        <ul class="footer__block-ul">
            <li class="footer__block-ul-li">
                <a href="{{ route('about') }}">
                    @lang('public.about')
                </a>
            </li>
            <li class="footer__block-ul-li">
                <a href="{{ route('products') }}">
                    @lang('public.product')
                </a>
            </li>
            <li class="footer__block-ul-li">
                <a href="{{ route('career') }}">
                    @lang('public.career')
                </a>
            </li>
            <li class="footer__block-ul-li">
                <a href="{{ route('contact') }}">
                    @lang('public.contact')
                </a>
            </li>
        </ul>

        <div class="footer-gallery" id="gallery">

            <div class="footer-gallery__slide">
                <a href="/images/gallery/slider__img1.png" data-fancybox="gallery">
                    <img src="/images/gallery/slider__img1.png" alt="">
                </a>
            </div>
            <div class="footer-gallery__slide">
                <a href="/images/gallery/slider__img2.png" data-fancybox="gallery">
                    <img src="/images/gallery/slider__img2.png" alt="">
                </a>
            </div>
            <div class="footer-gallery__slide">
                <a href="/images/gallery/slider__img3.png" data-fancybox="gallery">
                    <img src="/images/gallery/slider__img3.png" alt="">
                </a>
            </div>
            <div class="footer-gallery__slide">
                <a href="/images/gallery/slider__img4.png" data-fancybox="gallery">
                    <img src="/images/gallery/slider__img4.png" alt="">
                </a>
            </div>
            <div class="footer-gallery__slide">
                <a href="/images/gallery/slider__img5.png" data-fancybox="gallery">
                    <img src="/images/gallery/slider__img5.png" alt="">
                </a>
            </div>
            <div class="footer-gallery__slide">
                <a href="/images/gallery/slider__img6.png" data-fancybox="gallery">
                    <img src="/images/gallery/slider__img6.png" alt="">
                </a>
            </div>
        </div>

        <div>
            <div class="footer__block">
                <p class="footer__text">@lang('public.footer__text')</p>
            </div>
            <div class="footer__block">
                <a class="header__block-href-soc footer__block-href-soc" href="tel:+902525366229"><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                        fill="none" style="margin-right: 4px;">
                        <path
                            d="M19.4401 13.5919C19.2201 13.5919 18.9901 13.5219 18.7701 13.4719C18.3246 13.3737 17.8868 13.2434 17.4601 13.0819C16.9962 12.9131 16.4862 12.9219 16.0284 13.1065C15.5706 13.2911 15.1972 13.6385 14.9801 14.0819L14.7601 14.5319C13.7861 13.9901 12.8911 13.3171 12.1001 12.5319C11.3149 11.7409 10.6419 10.8459 10.1001 9.87191L10.5201 9.59191C10.9635 9.37483 11.3109 9.00144 11.4955 8.5436C11.6801 8.08576 11.6889 7.57582 11.5201 7.11191C11.3613 6.68433 11.231 6.24671 11.1301 5.80191C11.0801 5.58191 11.0401 5.35191 11.0101 5.12191C10.8887 4.41753 10.5197 3.77965 9.96972 3.32315C9.41972 2.86665 8.7248 2.62152 8.0101 2.63191H5.0101C4.57913 2.62786 4.15235 2.71672 3.75881 2.89244C3.36527 3.06816 3.01421 3.32661 2.72953 3.65019C2.44485 3.97378 2.23324 4.3549 2.10909 4.76762C1.98494 5.18034 1.95118 5.61497 2.0101 6.04191C2.54284 10.2313 4.45613 14.1238 7.44775 17.1045C10.4394 20.0853 14.3388 21.9844 18.5301 22.5019H18.9101C19.6475 22.503 20.3595 22.2324 20.9101 21.7419C21.2265 21.459 21.4792 21.1121 21.6516 20.7242C21.8239 20.3364 21.9121 19.9163 21.9101 19.4919V16.4919C21.8979 15.7973 21.6449 15.1285 21.1944 14.5996C20.744 14.0707 20.1239 13.7145 19.4401 13.5919ZM19.9401 19.5919C19.9399 19.7339 19.9095 19.8742 19.8509 20.0035C19.7923 20.1328 19.7068 20.2482 19.6001 20.3419C19.4887 20.4389 19.3581 20.5113 19.2168 20.5544C19.0755 20.5975 18.9267 20.6103 18.7801 20.5919C15.035 20.1117 11.5563 18.3984 8.89282 15.7222C6.2293 13.046 4.53251 9.55925 4.0701 5.81191C4.05419 5.66543 4.06813 5.51724 4.1111 5.3763C4.15407 5.23536 4.22517 5.1046 4.3201 4.99191C4.41381 4.88524 4.52916 4.79975 4.65848 4.74113C4.7878 4.6825 4.92812 4.65209 5.0701 4.65191H8.0701C8.30265 4.64673 8.52972 4.72279 8.71224 4.86698C8.89476 5.01117 9.02131 5.21448 9.0701 5.44191C9.1101 5.71524 9.1601 5.98524 9.2201 6.25191C9.33562 6.77905 9.48936 7.29709 9.6801 7.80191L8.2801 8.45191C8.1604 8.50683 8.05272 8.58486 7.96326 8.6815C7.87379 8.77815 7.8043 8.89152 7.75877 9.0151C7.71324 9.13868 7.69257 9.27004 7.69795 9.40163C7.70332 9.53322 7.73464 9.66245 7.7901 9.78191C9.2293 12.8647 11.7073 15.3427 14.7901 16.7819C15.0336 16.8819 15.3066 16.8819 15.5501 16.7819C15.6748 16.7373 15.7894 16.6684 15.8873 16.5791C15.9851 16.4898 16.0643 16.382 16.1201 16.2619L16.7401 14.8619C17.2571 15.0468 17.7847 15.2004 18.3201 15.3219C18.5868 15.3819 18.8568 15.4319 19.1301 15.4719C19.3575 15.5207 19.5608 15.6472 19.705 15.8298C19.8492 16.0123 19.9253 16.2394 19.9201 16.4719L19.9401 19.5919Z"
                            fill="white" />
                    </svg>+90 252 536 62 29</a>
            </div>
            <div class="footer__block">
                <a class="header__block-href-soc" href=""><img class="header__block-img-soc"
                        src="/images/soc/sn__fb.png"></a>
                <a class="header__block-href-soc" href="https://www.instagram.com/geo_aquaculture/"><img
                        class="header__block-img-soc" src="/images/soc/sn__inst.png"></a>
            </div>

        </div>

    </div>
    <div class="footer_bottom-element">
        <p>Georgian Aquaculture 2023. ©ველა უფლება დაცულია</p>
    </div>
</footer>
