@extends('layouts.app')

@section('title-block')
    @lang('public.career')
@endsection

@section('content')
    <main>
        <section class="bread">
            <div class="container bread__wrapper">
                <div class="bread__crumbs"><a href="/">@lang('public.home')</a> / <span>@lang('public.career') </span></div>
                <div class="bread__block">
                    <h1 class="bread__h1">@lang('public.career')</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="121" height="94" viewBox="0 0 121 94" fill="none">
                        <path
                            d="M58.8457 55.9195V52.091C62.1543 49.2607 64.6036 45.2235 65.24 40.5967C65.2554 40.4861 65.2618 40.3748 65.2743 40.2637L67.0853 38.7748C68.0659 37.975 68.7647 36.8823 69.0794 35.6567C69.3941 34.4311 69.3081 33.1369 68.8341 31.9636C68.466 30.9652 67.7796 30.1155 66.8809 29.5457V17.5119C66.8769 14.313 65.6055 11.2459 63.3449 8.98248C61.0844 6.71902 58.019 5.44361 54.8201 5.43555H39.0348C35.8325 5.44233 32.763 6.7163 30.497 8.9791C28.231 11.2419 26.9527 14.3096 26.9414 17.5119V29.904C26.2623 30.4686 25.7402 31.1987 25.4256 32.0239C24.9529 33.198 24.8684 34.4926 25.1846 35.7182C25.5007 36.9438 26.2008 38.0361 27.1825 38.8351L29.0086 40.3296C29.5717 44.9386 31.8759 49.1577 35.4492 52.1226V55.9289L16.1176 62.4492C10.48 64.3507 6.2029 68.8046 4.67646 74.3628C4.37451 75.4124 4.16977 76.4876 4.06484 77.5747C4.06177 77.6139 4.01758 77.6532 4.01758 77.6929V96.3746C4.03453 96.7641 4.1993 97.1324 4.47833 97.4047C4.75737 97.6769 5.12968 97.8325 5.51944 97.8398H66.4082V95.0039H60.0073L69.8149 80.8509C70.0169 80.558 70.1027 80.2004 70.0555 79.8477C70.0083 79.495 69.8315 79.1725 69.5596 78.943L65.7455 75.7477L68.7318 71.338C68.9069 71.0792 68.9917 70.7699 68.9731 70.458C68.9546 70.1461 68.8337 69.849 68.6292 69.6128L59.5679 59.1655L77.2828 65.1472C78.654 65.6095 79.9531 66.263 81.1416 67.0883L82.7602 64.7598C81.3567 63.7816 79.8217 63.007 78.201 62.4592L58.8457 55.9195ZM36.8672 75.8613C36.4911 75.8613 36.1305 76.0107 35.8645 76.2766C35.5986 76.5426 35.4492 76.9032 35.4492 77.2793V91.687L27.5287 80.2755L31.3319 77.0954C31.6015 76.87 31.7777 76.5526 31.8265 76.2046C31.8754 75.8567 31.7932 75.503 31.5961 75.2121L28.5035 70.6484L35.4492 62.6841V67.8262C35.4492 68.2022 35.5986 68.5629 35.8645 68.8288C36.1305 69.0947 36.4911 69.2441 36.8672 69.2441C37.2433 69.2441 37.6039 69.0947 37.8698 68.8288C38.1358 68.5629 38.2852 68.2022 38.2852 67.8262V66.7263C41.0248 68.1586 44.0704 68.9065 47.1619 68.9062C50.2413 68.8978 53.2744 68.1556 56.0098 66.7412V95.0039H38.2852V77.2793C38.2852 76.9032 38.1358 76.5426 37.8698 76.2766C37.6039 76.0107 37.2433 75.8613 36.8672 75.8613ZM65.2835 36.5836L65.2098 36.6441C65.2098 36.6389 65.2098 36.6337 65.2079 36.6285L64.4731 31.4357C65.2329 31.7502 65.9048 32.2897 66.1983 33.0205C66.4465 33.6342 66.4916 34.3113 66.3269 34.9525C66.1623 35.5937 65.7966 36.1653 65.2835 36.5836ZM29.7773 17.5119C29.7878 15.0615 30.7671 12.7147 32.5014 10.9835C34.2357 9.25237 36.5843 8.27745 39.0348 8.27148H54.8201C57.2672 8.27867 59.6117 9.25502 61.3406 10.9868C63.0695 12.7186 64.0419 15.0648 64.0449 17.5119V28.3693L62.8682 20.0633C62.5891 17.8546 61.515 15.8232 59.8468 14.3489C58.1787 12.8746 56.0306 12.0583 53.8043 12.0527H53.4499L52.1737 12.743C50.4744 13.6456 48.5652 14.0788 46.6428 13.9982C44.7203 13.9175 42.8541 13.3258 41.2364 12.2841L40.8874 12.0527H40.4705C38.2482 12.0571 36.1034 12.8701 34.4366 14.34C32.7699 15.81 31.6951 17.8363 31.413 20.0406L30.2091 28.4159C30.0704 28.4371 30.0137 28.4681 29.7773 28.4979V17.5119ZM28.0772 33.0796C28.2418 32.71 28.4788 32.3771 28.7741 32.1007C29.0695 31.8242 29.4173 31.6097 29.797 31.4699L29.0643 36.6491C29.062 36.6654 29.0603 36.6814 29.0582 36.6977L28.9913 36.6429C28.4782 36.2244 28.1125 35.6525 27.948 35.0111C27.7835 34.3697 27.8288 33.6924 28.0772 33.0786V33.0796ZM31.8135 39.8818C31.7122 38.9378 31.7319 37.9848 31.8722 37.0458L34.2239 20.4258C34.408 18.9701 35.0941 17.6241 36.1639 16.6197C37.2337 15.6153 38.6203 15.0155 40.0848 14.9234C42.1042 16.13 44.4009 16.7949 46.7526 16.8535C49.1043 16.9121 51.4312 16.3626 53.5082 15.2581L54.1416 14.9208C55.6186 15.0034 57.0198 15.6022 58.1004 16.6125C59.181 17.6228 59.8724 18.9806 60.054 20.4488L62.4001 37.0265C62.5539 38.082 62.5605 39.1539 62.4195 40.2112C61.9024 43.9279 60.0486 47.3287 57.2051 49.7772C54.3615 52.2257 50.7231 53.554 46.9709 53.5134C43.2187 53.4728 39.6098 52.0662 36.8199 49.5568C34.0299 47.0475 32.2501 43.6073 31.8135 39.8804V39.8818ZM47.1475 56.3498C50.2507 56.354 53.3028 55.5592 56.0098 54.0419V63.4661C53.3669 65.1691 50.2888 66.0733 47.1448 66.0701C44.0008 66.0668 40.9245 65.1564 38.2852 63.448V54.0657C40.9975 55.5669 44.0474 56.3529 47.1475 56.3498ZM17.0234 65.1365L34.7639 59.1529L25.6473 69.6081C25.4415 69.844 25.3197 70.1414 25.3006 70.4538C25.2816 70.7663 25.3665 71.0763 25.5421 71.3354L28.5293 75.7432L24.7152 78.9336C24.4431 79.1656 24.2666 79.4901 24.2194 79.8445C24.1723 80.1989 24.258 80.5582 24.46 80.8533L34.2676 95.0039H19.1426V80.0557C19.1626 75.0564 17.5301 70.1905 14.499 66.2149C15.3084 65.7846 16.1529 65.4238 17.0234 65.1365ZM6.85352 77.7519C7.08984 76.8617 7.13238 75.9741 7.36871 75.1131C8.1544 72.241 9.81529 69.6849 12.1206 67.8002C14.8458 71.303 16.3195 75.6176 16.3066 80.0557V95.0039H6.85352V77.7519ZM62.6785 75.2117C62.4814 75.5025 62.3993 75.8561 62.4482 76.204C62.497 76.5519 62.6732 76.8693 62.9427 77.0947L66.7563 80.275L58.8457 91.6892V62.6347L65.7833 70.6463L62.6785 75.2117Z"
                            fill="white" />
                        <path
                            d="M42.3027 74.9947C42.6788 74.9947 43.0395 74.8453 43.3054 74.5794C43.5713 74.3135 43.7207 73.9528 43.7207 73.5768V72.0879C43.7207 71.7118 43.5713 71.3512 43.3054 71.0852C43.0395 70.8193 42.6788 70.6699 42.3027 70.6699C41.9267 70.6699 41.566 70.8193 41.3001 71.0852C41.0342 71.3512 40.8848 71.7118 40.8848 72.0879V73.5768C40.8848 73.9528 41.0342 74.3135 41.3001 74.5794C41.566 74.8453 41.9267 74.9947 42.3027 74.9947ZM42.3027 92.7193C42.6788 92.7193 43.0395 92.5699 43.3054 92.304C43.5713 92.0381 43.7207 91.6774 43.7207 91.3014V77.5943C43.7207 77.2183 43.5713 76.8576 43.3054 76.5917C43.0395 76.3258 42.6788 76.1764 42.3027 76.1764C41.9267 76.1764 41.566 76.3258 41.3001 76.5917C41.0342 76.8576 40.8848 77.2183 40.8848 77.5943V91.3014C40.8848 91.6774 41.0342 92.0381 41.3001 92.304C41.566 92.5699 41.9267 92.7193 42.3027 92.7193Z"
                            fill="white" />
                        <path
                            d="M102.991 79.8667C104.037 78.3033 104.507 76.4259 104.323 74.5543C104.139 72.6828 103.312 70.9331 101.982 69.6033C100.652 68.2736 98.9023 67.4461 97.0308 67.262C95.1593 67.078 93.2819 67.5486 91.7185 68.5938L84.3106 61.1854C84.142 61.0168 83.9335 60.8935 83.7046 60.8268C83.4757 60.7601 83.2337 60.7522 83.0009 60.8038C82.7681 60.8554 82.5521 60.965 82.3729 61.1222C82.1936 61.2794 82.0569 61.4794 81.9754 61.7034L75.6983 78.9651C73.6475 84.5795 70.3991 89.6801 66.1785 93.9126C65.285 94.8082 64.7832 96.0216 64.7832 97.2868C64.7832 98.5519 65.285 99.7653 66.1785 100.661L70.9216 105.405C71.7863 106.27 72.9501 106.769 74.1723 106.799C75.3946 106.83 76.5818 106.389 77.4885 105.569L87.048 115.128C87.3139 115.394 87.6745 115.544 88.0505 115.544C88.4265 115.544 88.7871 115.394 89.053 115.128C90.5745 113.603 91.429 111.537 91.429 109.383C91.429 107.228 90.5745 105.162 89.053 103.637L85.0101 99.5939C87.4109 98.0982 89.9602 96.8554 92.6173 95.8855L109.879 89.6086C110.103 89.5271 110.303 89.3904 110.46 89.2111C110.617 89.0319 110.727 88.8159 110.778 88.5831C110.83 88.3503 110.822 88.1083 110.755 87.8794C110.689 87.6504 110.565 87.442 110.397 87.2734L102.991 79.8667ZM99.9737 71.6105C100.77 72.4068 101.291 73.4363 101.462 74.5492C101.633 75.6621 101.444 76.8005 100.923 77.7988L93.7861 70.6617C94.7845 70.1423 95.9224 69.9543 97.0348 70.1249C98.1471 70.2955 99.1763 70.8159 99.9732 71.6105H99.9737ZM74.2959 103.967C74.0416 103.968 73.7897 103.918 73.5547 103.82C73.3197 103.723 73.1064 103.58 72.9271 103.4L68.184 98.6566C67.8215 98.2933 67.6179 97.8011 67.6179 97.2878C67.6179 96.7746 67.8215 96.2823 68.184 95.919C68.9445 95.1582 69.6758 94.368 70.3779 93.5484L78.0349 101.205C77.2178 101.907 76.4272 102.639 75.6647 103.399C75.4855 103.58 75.2722 103.723 75.0372 103.82C74.8022 103.918 74.5503 103.968 74.2959 103.967ZM87.0482 105.642C87.8641 106.46 88.3903 107.523 88.5465 108.668C88.7027 109.813 88.4805 110.977 87.9136 111.984L79.5637 103.634C80.5386 102.777 81.5536 101.967 82.6088 101.204L87.0482 105.642ZM102.964 89.1057L92.6369 78.7781C92.3702 78.5158 92.0107 78.3694 91.6367 78.371C91.2626 78.3725 90.9043 78.5218 90.6398 78.7863C90.3753 79.0508 90.226 79.4091 90.2245 79.7831C90.2229 80.1572 90.3693 80.5167 90.6316 80.7834L100.024 90.1755L91.6493 93.2208C87.5664 94.7121 83.7269 96.8 80.2559 99.4164L72.1685 91.3286C74.7848 87.8576 76.8727 84.0182 78.3641 79.9354L81.4089 71.5602L83.9365 74.0889C84.1927 74.3451 84.5373 74.4936 84.8996 74.5037C85.2618 74.5138 85.6141 74.3848 85.8843 74.1433C86.028 74.0147 86.1441 73.8582 86.2252 73.6832C86.3064 73.5083 86.3511 73.3186 86.3565 73.1258C86.3618 72.9331 86.3278 72.7412 86.2565 72.562C86.1852 72.3828 86.0781 72.22 85.9417 72.0837L82.4781 68.6196L83.8795 64.766L106.818 87.7042L102.964 89.1057Z"
                            fill="#096E49" />
                        <path
                            d="M95.1953 63.3002C95.0206 63.3684 94.8612 63.4705 94.7263 63.6007C94.5914 63.7309 94.4836 63.8866 94.4093 64.0587C94.3349 64.2309 94.2954 64.416 94.2931 64.6035C94.2907 64.791 94.3256 64.9771 94.3957 65.151C94.4658 65.3249 94.5696 65.4832 94.7013 65.6167C94.8329 65.7502 94.9897 65.8563 95.1627 65.9288C95.3356 66.0013 95.5212 66.0388 95.7087 66.0391C95.8962 66.0394 96.0819 66.0025 96.255 65.9306C97.8838 65.2745 99.6696 65.1118 101.39 65.4628C103.111 65.8138 104.69 66.663 105.932 67.9047C107.174 69.1464 108.023 70.7257 108.374 72.4463C108.725 74.1669 108.562 75.9527 107.906 77.5815C107.836 77.7542 107.802 77.939 107.803 78.1252C107.805 78.3114 107.844 78.4954 107.917 78.6668C107.989 78.8381 108.095 78.9934 108.228 79.1238C108.361 79.2542 108.519 79.3571 108.691 79.4267C108.864 79.4962 109.049 79.5311 109.235 79.5293C109.421 79.5275 109.605 79.489 109.777 79.4161C109.948 79.3431 110.103 79.2372 110.234 79.1042C110.364 78.9713 110.467 78.8139 110.537 78.6412C111.401 76.4964 111.615 74.1449 111.153 71.8792C110.691 69.6135 109.572 67.5337 107.937 65.8987C106.302 64.2636 104.223 63.1455 101.957 62.6834C99.6912 62.2213 97.3396 62.4356 95.1948 63.2997L95.1953 63.3002Z"
                            fill="#096E49" />
                        <path
                            d="M93.2402 58.184C93.0656 58.2522 92.9062 58.3544 92.7712 58.4846C92.6363 58.6148 92.5285 58.7704 92.4542 58.9426C92.3798 59.1147 92.3403 59.2998 92.338 59.4873C92.3357 59.6748 92.3705 59.8609 92.4406 60.0348C92.5107 60.2087 92.6145 60.367 92.7462 60.5005C92.8778 60.634 93.0347 60.7401 93.2076 60.8126C93.3805 60.8851 93.5661 60.9226 93.7536 60.9229C93.9411 60.9232 94.1268 60.8863 94.2999 60.8144C96.9173 59.7599 99.7869 59.4983 102.552 60.0622C105.317 60.6262 107.855 61.9906 109.85 63.9859C111.845 65.9812 113.21 68.5192 113.774 71.284C114.338 74.0488 114.076 76.9185 113.022 79.5358C112.952 79.7085 112.917 79.8933 112.919 80.0795C112.921 80.2657 112.959 80.4498 113.032 80.6211C113.105 80.7925 113.211 80.9478 113.344 81.0782C113.477 81.2086 113.634 81.3116 113.807 81.3812C113.98 81.4508 114.164 81.4857 114.35 81.4839C114.537 81.4821 114.721 81.4437 114.892 81.3708C115.063 81.2979 115.219 81.1919 115.349 81.059C115.48 80.926 115.583 80.7687 115.652 80.596C116.915 77.4627 117.228 74.0274 116.553 70.7175C115.878 67.4077 114.244 64.3694 111.855 61.9808C109.467 59.5922 106.429 57.9587 103.119 57.2836C99.8088 56.6085 96.3735 56.9217 93.2402 58.184Z"
                            fill="#096E49" />
                    </svg>
                </div>

            </div>
        </section>

        <section class="career m60">
            <div class="container career__wrapper">

                <div class="career__block block-first">
                    <div class="block-first__block">
                        <p>
                            @lang('career.our_team')
                        </p>
                        <img class="block-first__img" src="/images/career/small-pier.png" alt="">
                    </div>
                    <img class="block-first__banner" src="/images/career/two-men.png" alt="">
                </div>

                <div class="career__block block-second">
                    <div>
                        <img class="block-second__img1" src="/images/career/people-rejoice.png" alt="">
                        <p class="block-second__p">@lang('career.georgian_aquaculture_is_not_only_a_farm')</p>

                    </div>
                    <div>
                        <p class="block-second__b">@lang('career.proud_of_our_achievements')</p>
                        <p class="block-second__p">@lang('career.join_georgian_aquaculture')</p>
                        <img class="block-second__img2" src="/images/career/fish-with-lemon.png" alt="">
                    </div>

                </div>

                <div class="career__block block-third">
                    <img class="block-third__img" src="/images/career/sliced-fish.png" alt="">
                    <p>@lang('career.make_the_right')</p>
                </div>

        </section>


        <style>
            .career__h2 {
                color: #FFF;
                margin-bottom: 40px;
            }

            .bcblock {
                display: flex;
                padding: 80px 0;
                align-self: stretch;
                background: var(--primary, #052D5E);
            }

            .career__vacantions {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 40px;
                justify-content: space-between;
                margin-bottom: 40px;
            }

            .career__vacantions .career__card {
                color: #FFF;
                padding: 24px;
                border-radius: 8px;
                border: 4px solid var(--white, #FFF);
            }

            .career__card h4 {
                color: var(--white, #FFF);
                font-family: Calibri;
                font-size: 28px;
                font-style: normal;
                font-weight: 700;
                margin-bottom: 8px;
                line-height: 140%;
            }

            .career__card div {
                color: var(--white, #FFF);
                font-family: Calibri;
                font-size: 24px;
                font-style: normal;
                font-weight: 700;
                margin-bottom: 8px;
                line-height: 140%;
                justify-content: flex-start;
                margin-bottom: 8px;
            }

            .career__flex {
                display: flex;
                margin-bottom: 24px;
                gap: 24px;
                justify-content: flex-start;

            }

            .career__flex>div {
                display: flex;
                align-items: flex-start;
            }

            .career__flex>div div {
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
            }

            .career__flex p {
                color: var(--white, #FFF);
                font-family: Calibri;
                font-size: 14px;
                font-style: normal;
                font-weight: 400;
                line-height: 140%;
                margin-bottom: 24px;
            }

            .career__card p {
                color: var(--white, #FFF);
                font-family: Calibri;
                font-size: 14px;
                font-style: normal;
                font-weight: 400;
                line-height: 140%;
                margin: 24px 0;
            }


            .career__flex svg {
                margin-right: 8px;
            }

            /* display: flex;
                            flex-direction: column;
                            justify-content: flex-start; */

            .career__card div {
                color: var(--white, #FFF);
                font-family: Calibri;
                font-size: 24px;
                font-style: normal;
                font-weight: 700;
                line-height: 140%;
            }

            .career__card div span,
            .career__card a {
                color: var(--white, #FFF);
                font-family: Calibri;
                font-size: 18px;
                font-style: normal;
                font-weight: 700;
                line-height: 150%;
            }

            .career__card a:hover {
                color: #5D88BC;
            }

            .btn {
                color: var(--white, #FFF);
                font-family: Calibri;
                font-size: 20px;
                font-style: normal;
                font-weight: 700;
                line-height: 150%;
                padding: 16px 32px;
                border-radius: 16px;
                border: 2px solid var(--white, #FFF);
                transition: color .2s ease, border .1s ease;
            }

            .btn:hover,
            .btn:hover svg path {
                border: 2px solid var(--blueHover, #5D88BC);
                color: #5D88BC;
                fill: #5D88BC;
                transition: all .2s ease;
            }

            @media screen and (max-width: 1200px) {
                .career__vacantions {
                    gap: 20px;
                    display: flex;
                    justify-content: center;
                    flex-wrap: wrap;
                    align-items: center;
                }
            }

            @media screen and (max-width: 890px) {
                .career__vacantions {
                    display: flex;
                    align-items: flex-start;
                    justify-content: space-between;
                    flex-direction: column;
                    gap: 20px;
                    margin-bottom: 30px;
                }

                .career__card div {
                    flex-direction: column;
                }

                .bcblock {
                    padding: 40px 0 0;
                }
            }
        </style>

        <?php /*
        <section class="career bcblock pd80" data-aos="zoom-in">
            <div class="container">
                <div class="career__head">
                    <h2 class="career__h2 h2">შეიძლება თქვენც დაგაინტერესოთ</h2>
                </div>
                <div class="career__vacantions">

                    <div class="career__card">
                        <h4>ლოგისტიკოსი დისტანციურად</h4>
                        <div>20 000 — 30 000 ₾</div>
                        <div class="career__flex">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                    fill="none">
                                    <path
                                        d="M11.99 2.59155C6.47 2.59155 2 7.07155 2 12.5916C2 18.1116 6.47 22.5916 11.99 22.5916C17.52 22.5916 22 18.1116 22 12.5916C22 7.07155 17.52 2.59155 11.99 2.59155ZM12 20.5916C7.58 20.5916 4 17.0116 4 12.5916C4 8.17155 7.58 4.59155 12 4.59155C16.42 4.59155 20 8.17155 20 12.5916C20 17.0116 16.42 20.5916 12 20.5916Z"
                                        fill="white" />
                                    <path d="M12.5 7.59155H11V13.5916L16.25 16.7416L17 15.5116L12.5 12.8416V7.59155Z"
                                        fill="white" />
                                </svg>
                                <div>
                                    <span>განრიგი</span>
                                    <span>მთელი დღე</span>
                                </div>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12 13.5916C14.7625 13.5916 17 11.3541 17 8.59155C17 5.82905 14.7625 3.59155 12 3.59155C9.2375 3.59155 7 5.82905 7 8.59155C7 11.3541 9.2375 13.5916 12 13.5916ZM16 8.59155C16 10.8016 14.21 12.5916 12 12.5916C9.79 12.5916 8 10.8016 8 8.59155C8 6.38155 9.79 4.59155 12 4.59155C14.21 4.59155 16 6.38155 16 8.59155ZM14.5175 14.5286L13 18.8636V18.5916L12.7125 16.5811C12.8043 16.5617 12.8888 16.517 12.9563 16.4519C13.0239 16.3868 13.0718 16.304 13.0945 16.2131L13.3445 15.2131C13.363 15.1394 13.3644 15.0624 13.3487 14.9881C13.333 14.9138 13.3005 14.8441 13.2538 14.7841C13.2071 14.7242 13.1474 14.6758 13.0791 14.6424C13.0109 14.609 12.936 14.5916 12.86 14.5916H11.141C11.0651 14.5916 10.9901 14.6089 10.9219 14.6422C10.8536 14.6755 10.7938 14.7239 10.7471 14.7838C10.7003 14.8436 10.6678 14.9134 10.6521 14.9877C10.6363 15.062 10.6376 15.1389 10.656 15.2126L10.906 16.2126C10.9287 16.3036 10.9765 16.3865 11.0441 16.4517C11.1116 16.5168 11.1962 16.5617 11.288 16.5811L11.007 18.5471L9.48 14.5231L9.47 14.5016C9.39621 14.3501 9.27294 14.2283 9.12057 14.1564C8.96819 14.0845 8.79584 14.0667 8.632 14.1061C8.4615 14.1476 8.2735 14.1911 8.075 14.2381C7.6065 14.3476 7.078 14.4711 6.577 14.6106C5.8705 14.8076 5.1385 15.0556 4.63 15.3896C3.6935 16.0046 3 16.8181 3 17.8416V21.5916H21V17.8416C21 16.8181 20.307 16.0041 19.37 15.3896C18.862 15.0556 18.13 14.8076 17.4235 14.6106C16.9268 14.4761 16.4273 14.3519 15.9255 14.2381C15.7396 14.1949 15.554 14.1509 15.3685 14.1061C15.2047 14.0668 15.0325 14.0845 14.8802 14.1565C14.7279 14.2284 14.6047 14.3501 14.531 14.5016L14.5175 14.5286ZM15.722 15.2176L15.3655 15.1336L13.4545 20.5916H20V17.8416C20 17.3186 19.648 16.7681 18.8215 16.2256C18.4545 15.9841 17.8565 15.7691 17.1555 15.5741C16.6804 15.4453 16.2021 15.3264 15.722 15.2176ZM8.641 15.1321L10.7125 20.5916H4V17.8416C4 17.3186 4.352 16.7681 5.1785 16.2256C5.5455 15.9841 6.1435 15.7691 6.8445 15.5741C7.31961 15.4452 7.79738 15.3263 8.2775 15.2176L8.641 15.1321Z"
                                        fill="white" />
                                </svg>
                                <div>
                                    <span>გამოცდილება</span>
                                    <span>1 წელზე მეტი</span>
                                </div>
                            </div>
                        </div>
                        <p>
                            თევზის პროდუქციის მწარმოებელ ორგანიზაციას სჭირდება მუშები თევზის მაღაზიაში და შესაფუთ
                            მაღაზიაში წარმოებისთვის.
                        </p>
                        <div class="news__button">
                            <button class="btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                                    fill="none">
                                    <path
                                        d="M4.5 20.5916C3.95 20.5916 3.479 20.3956 3.087 20.0036C2.695 19.6116 2.49934 19.1409 2.5 18.5916V6.59155C2.5 6.04155 2.696 5.57055 3.088 5.17855C3.48 4.78655 3.95067 4.59089 4.5 4.59155H20.5C21.05 4.59155 21.521 4.78755 21.913 5.17955C22.305 5.57155 22.5007 6.04222 22.5 6.59155V18.5916C22.5 19.1416 22.304 19.6126 21.912 20.0046C21.52 20.3966 21.0493 20.5922 20.5 20.5916H4.5ZM12.5 13.5916L4.5 8.59155V18.5916H20.5V8.59155L12.5 13.5916ZM12.5 11.5916L20.5 6.59155H4.5L12.5 11.5916ZM4.5 8.59155V6.59155V18.5916V8.59155Z"
                                        fill="white" />
                                </svg>
                                მოგვწერეთ
                            </button>
                        </div>
                        <span style="padding-bottom: 5px;border-bottom: 2px solid #FFF;"><a href="tel:+902525366229">მეტი
                                ვაკანსიის
                                შესახებ</a></span>
                    </div>

                    <div class="career__card">
                        <h4>ლოგისტიკოსი დისტანციურად</h4>
                        <div>20 000 — 30 000 ₾</div>
                        <div class="career__flex">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                    fill="none">
                                    <path
                                        d="M11.99 2.59155C6.47 2.59155 2 7.07155 2 12.5916C2 18.1116 6.47 22.5916 11.99 22.5916C17.52 22.5916 22 18.1116 22 12.5916C22 7.07155 17.52 2.59155 11.99 2.59155ZM12 20.5916C7.58 20.5916 4 17.0116 4 12.5916C4 8.17155 7.58 4.59155 12 4.59155C16.42 4.59155 20 8.17155 20 12.5916C20 17.0116 16.42 20.5916 12 20.5916Z"
                                        fill="white" />
                                    <path d="M12.5 7.59155H11V13.5916L16.25 16.7416L17 15.5116L12.5 12.8416V7.59155Z"
                                        fill="white" />
                                </svg>
                                <div>
                                    <span>განრიგი</span>
                                    <span>მთელი დღე</span>
                                </div>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12 13.5916C14.7625 13.5916 17 11.3541 17 8.59155C17 5.82905 14.7625 3.59155 12 3.59155C9.2375 3.59155 7 5.82905 7 8.59155C7 11.3541 9.2375 13.5916 12 13.5916ZM16 8.59155C16 10.8016 14.21 12.5916 12 12.5916C9.79 12.5916 8 10.8016 8 8.59155C8 6.38155 9.79 4.59155 12 4.59155C14.21 4.59155 16 6.38155 16 8.59155ZM14.5175 14.5286L13 18.8636V18.5916L12.7125 16.5811C12.8043 16.5617 12.8888 16.517 12.9563 16.4519C13.0239 16.3868 13.0718 16.304 13.0945 16.2131L13.3445 15.2131C13.363 15.1394 13.3644 15.0624 13.3487 14.9881C13.333 14.9138 13.3005 14.8441 13.2538 14.7841C13.2071 14.7242 13.1474 14.6758 13.0791 14.6424C13.0109 14.609 12.936 14.5916 12.86 14.5916H11.141C11.0651 14.5916 10.9901 14.6089 10.9219 14.6422C10.8536 14.6755 10.7938 14.7239 10.7471 14.7838C10.7003 14.8436 10.6678 14.9134 10.6521 14.9877C10.6363 15.062 10.6376 15.1389 10.656 15.2126L10.906 16.2126C10.9287 16.3036 10.9765 16.3865 11.0441 16.4517C11.1116 16.5168 11.1962 16.5617 11.288 16.5811L11.007 18.5471L9.48 14.5231L9.47 14.5016C9.39621 14.3501 9.27294 14.2283 9.12057 14.1564C8.96819 14.0845 8.79584 14.0667 8.632 14.1061C8.4615 14.1476 8.2735 14.1911 8.075 14.2381C7.6065 14.3476 7.078 14.4711 6.577 14.6106C5.8705 14.8076 5.1385 15.0556 4.63 15.3896C3.6935 16.0046 3 16.8181 3 17.8416V21.5916H21V17.8416C21 16.8181 20.307 16.0041 19.37 15.3896C18.862 15.0556 18.13 14.8076 17.4235 14.6106C16.9268 14.4761 16.4273 14.3519 15.9255 14.2381C15.7396 14.1949 15.554 14.1509 15.3685 14.1061C15.2047 14.0668 15.0325 14.0845 14.8802 14.1565C14.7279 14.2284 14.6047 14.3501 14.531 14.5016L14.5175 14.5286ZM15.722 15.2176L15.3655 15.1336L13.4545 20.5916H20V17.8416C20 17.3186 19.648 16.7681 18.8215 16.2256C18.4545 15.9841 17.8565 15.7691 17.1555 15.5741C16.6804 15.4453 16.2021 15.3264 15.722 15.2176ZM8.641 15.1321L10.7125 20.5916H4V17.8416C4 17.3186 4.352 16.7681 5.1785 16.2256C5.5455 15.9841 6.1435 15.7691 6.8445 15.5741C7.31961 15.4452 7.79738 15.3263 8.2775 15.2176L8.641 15.1321Z"
                                        fill="white" />
                                </svg>
                                <div>
                                    <span>გამოცდილება</span>
                                    <span>1 წელზე მეტი</span>
                                </div>
                            </div>
                        </div>
                        <p>
                            თევზის პროდუქციის მწარმოებელ ორგანიზაციას სჭირდება მუშები თევზის მაღაზიაში და შესაფუთ
                            მაღაზიაში წარმოებისთვის.
                        </p>
                        <div class="news__button">
                            <button class="btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                    viewBox="0 0 25 25" fill="none">
                                    <path
                                        d="M4.5 20.5916C3.95 20.5916 3.479 20.3956 3.087 20.0036C2.695 19.6116 2.49934 19.1409 2.5 18.5916V6.59155C2.5 6.04155 2.696 5.57055 3.088 5.17855C3.48 4.78655 3.95067 4.59089 4.5 4.59155H20.5C21.05 4.59155 21.521 4.78755 21.913 5.17955C22.305 5.57155 22.5007 6.04222 22.5 6.59155V18.5916C22.5 19.1416 22.304 19.6126 21.912 20.0046C21.52 20.3966 21.0493 20.5922 20.5 20.5916H4.5ZM12.5 13.5916L4.5 8.59155V18.5916H20.5V8.59155L12.5 13.5916ZM12.5 11.5916L20.5 6.59155H4.5L12.5 11.5916ZM4.5 8.59155V6.59155V18.5916V8.59155Z"
                                        fill="white" />
                                </svg>
                                მოგვწერეთ
                            </button>
                        </div>
                        <span style="padding-bottom: 5px;border-bottom: 2px solid #FFF;"><a href="tel:+902525366229">მეტი
                                ვაკანსიის
                                შესახებ</a></span>
                    </div>
                    <div class="career__card">
                        <h4>ლოგისტიკოსი დისტანციურად</h4>
                        <div>20 000 — 30 000 ₾</div>
                        <div class="career__flex">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                    viewBox="0 0 24 25" fill="none">
                                    <path
                                        d="M11.99 2.59155C6.47 2.59155 2 7.07155 2 12.5916C2 18.1116 6.47 22.5916 11.99 22.5916C17.52 22.5916 22 18.1116 22 12.5916C22 7.07155 17.52 2.59155 11.99 2.59155ZM12 20.5916C7.58 20.5916 4 17.0116 4 12.5916C4 8.17155 7.58 4.59155 12 4.59155C16.42 4.59155 20 8.17155 20 12.5916C20 17.0116 16.42 20.5916 12 20.5916Z"
                                        fill="white" />
                                    <path d="M12.5 7.59155H11V13.5916L16.25 16.7416L17 15.5116L12.5 12.8416V7.59155Z"
                                        fill="white" />
                                </svg>
                                <div>
                                    <span>განრიგი</span>
                                    <span>მთელი დღე</span>
                                </div>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                    viewBox="0 0 24 25" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12 13.5916C14.7625 13.5916 17 11.3541 17 8.59155C17 5.82905 14.7625 3.59155 12 3.59155C9.2375 3.59155 7 5.82905 7 8.59155C7 11.3541 9.2375 13.5916 12 13.5916ZM16 8.59155C16 10.8016 14.21 12.5916 12 12.5916C9.79 12.5916 8 10.8016 8 8.59155C8 6.38155 9.79 4.59155 12 4.59155C14.21 4.59155 16 6.38155 16 8.59155ZM14.5175 14.5286L13 18.8636V18.5916L12.7125 16.5811C12.8043 16.5617 12.8888 16.517 12.9563 16.4519C13.0239 16.3868 13.0718 16.304 13.0945 16.2131L13.3445 15.2131C13.363 15.1394 13.3644 15.0624 13.3487 14.9881C13.333 14.9138 13.3005 14.8441 13.2538 14.7841C13.2071 14.7242 13.1474 14.6758 13.0791 14.6424C13.0109 14.609 12.936 14.5916 12.86 14.5916H11.141C11.0651 14.5916 10.9901 14.6089 10.9219 14.6422C10.8536 14.6755 10.7938 14.7239 10.7471 14.7838C10.7003 14.8436 10.6678 14.9134 10.6521 14.9877C10.6363 15.062 10.6376 15.1389 10.656 15.2126L10.906 16.2126C10.9287 16.3036 10.9765 16.3865 11.0441 16.4517C11.1116 16.5168 11.1962 16.5617 11.288 16.5811L11.007 18.5471L9.48 14.5231L9.47 14.5016C9.39621 14.3501 9.27294 14.2283 9.12057 14.1564C8.96819 14.0845 8.79584 14.0667 8.632 14.1061C8.4615 14.1476 8.2735 14.1911 8.075 14.2381C7.6065 14.3476 7.078 14.4711 6.577 14.6106C5.8705 14.8076 5.1385 15.0556 4.63 15.3896C3.6935 16.0046 3 16.8181 3 17.8416V21.5916H21V17.8416C21 16.8181 20.307 16.0041 19.37 15.3896C18.862 15.0556 18.13 14.8076 17.4235 14.6106C16.9268 14.4761 16.4273 14.3519 15.9255 14.2381C15.7396 14.1949 15.554 14.1509 15.3685 14.1061C15.2047 14.0668 15.0325 14.0845 14.8802 14.1565C14.7279 14.2284 14.6047 14.3501 14.531 14.5016L14.5175 14.5286ZM15.722 15.2176L15.3655 15.1336L13.4545 20.5916H20V17.8416C20 17.3186 19.648 16.7681 18.8215 16.2256C18.4545 15.9841 17.8565 15.7691 17.1555 15.5741C16.6804 15.4453 16.2021 15.3264 15.722 15.2176ZM8.641 15.1321L10.7125 20.5916H4V17.8416C4 17.3186 4.352 16.7681 5.1785 16.2256C5.5455 15.9841 6.1435 15.7691 6.8445 15.5741C7.31961 15.4452 7.79738 15.3263 8.2775 15.2176L8.641 15.1321Z"
                                        fill="white" />
                                </svg>
                                <div>
                                    <span>გამოცდილება</span>
                                    <span>1 წელზე მეტი</span>
                                </div>
                            </div>
                        </div>
                        <p>
                            თევზის პროდუქციის მწარმოებელ ორგანიზაციას სჭირდება მუშები თევზის მაღაზიაში და შესაფუთ
                            მაღაზიაში წარმოებისთვის.
                        </p>
                        <div class="news__button">
                            <button class="btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                    viewBox="0 0 25 25" fill="none">
                                    <path
                                        d="M4.5 20.5916C3.95 20.5916 3.479 20.3956 3.087 20.0036C2.695 19.6116 2.49934 19.1409 2.5 18.5916V6.59155C2.5 6.04155 2.696 5.57055 3.088 5.17855C3.48 4.78655 3.95067 4.59089 4.5 4.59155H20.5C21.05 4.59155 21.521 4.78755 21.913 5.17955C22.305 5.57155 22.5007 6.04222 22.5 6.59155V18.5916C22.5 19.1416 22.304 19.6126 21.912 20.0046C21.52 20.3966 21.0493 20.5922 20.5 20.5916H4.5ZM12.5 13.5916L4.5 8.59155V18.5916H20.5V8.59155L12.5 13.5916ZM12.5 11.5916L20.5 6.59155H4.5L12.5 11.5916ZM4.5 8.59155V6.59155V18.5916V8.59155Z"
                                        fill="white" />
                                </svg>
                                მოგვწერეთ
                            </button>
                        </div>
                        <span style="padding-bottom: 5px;border-bottom: 2px solid #FFF;"><a href="tel:+902525366229">მეტი
                                ვაკანსიის
                                შესახებ</a></span>
                    </div>

                </div>
            </div>
        </section>
        */
        ?>

    </main>
@endsection
