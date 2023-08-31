<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<!-- CSS -->

	<link href="/css/main.css" rel="stylesheet">
	<link href="/css/css.css" rel="stylesheet">
	<link href="/css/media.css" rel="stylesheet">
	<link href="/css/reset.css" rel="stylesheet">
	<link rel="stylesheet" href="/css/build/swiper.css">
	<link href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" rel="stylesheet" />
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">



</head>

<body>

	<header class="header">
		<div class="container header__wrapper">

			<div class="header__block">
				<a href="/">
					<img class="logo" src="/images/fish_logo/header__logo (1).png">
				</a>
				<div class="dropdown">
					<?/*
						<div class="dropbtn">EN</div>
						<div class="dropdown-content">
							<a href="#">GE</a>
							<a href="#">EN</a>
						</div>
						*/ ?>
					<img class="header__block-flags" src="/images/flags/GE.png">
					<span>GE</span>
				</div>
			</div>

			<nav class="header__block">
				<ul class="header__block-ul">
					<li class="header__block-li">
						<a href="#">
							Ჩვენს შესახებ
						</a>
					</li>
					<li class="header__block-li">
						<a href="/newsList">
							პროდუქტები
						</a>
					</li>
					<li class="header__block-li">
						<a href="#">
							სიახლეები
						</a>
					</li>
					<li class="header__block-li">
						<a href="#">
							კარიერა
						</a>
					</li>
					<li class="header__block-li">
						<a href="#">
							კონტაქტები
						</a>
					</li>
				</ul>
			</nav>

			<div class="header__block">
				<a class="header__block-href-soc" href=""><img class="header__block-img-soc" src="/images/soc/sn__fb.png"></a>
				<a class="header__block-href-soc" href=""><img class="header__block-img-soc" src="/images/soc/sn__inst.png"></a>
				<a class="header__block-href-soc" href="tel:+902525366229"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none" style="margin-right: 4px;">
						<path d="M19.4401 13.2958C19.2201 13.2958 18.9901 13.2258 18.7701 13.1758C18.3246 13.0776 17.8868 12.9473 17.4601 12.7858C16.9962 12.617 16.4862 12.6258 16.0284 12.8104C15.5706 12.995 15.1972 13.3424 14.9801 13.7858L14.7601 14.2358C13.7861 13.6939 12.8911 13.021 12.1001 12.2358C11.3149 11.4448 10.6419 10.5498 10.1001 9.57577L10.5201 9.29577C10.9635 9.07868 11.3109 8.7053 11.4955 8.24746C11.6801 7.78962 11.6889 7.27968 11.5201 6.81577C11.3613 6.38819 11.231 5.95056 11.1301 5.50577C11.0801 5.28577 11.0401 5.05577 11.0101 4.82577C10.8887 4.12139 10.5197 3.48351 9.96972 3.02701C9.41972 2.5705 8.7248 2.32538 8.0101 2.33577H5.0101C4.57913 2.33172 4.15235 2.42058 3.75881 2.5963C3.36527 2.77201 3.01421 3.03046 2.72953 3.35405C2.44485 3.67763 2.23324 4.05876 2.10909 4.47148C1.98494 4.8842 1.95118 5.31883 2.0101 5.74577C2.54284 9.93515 4.45613 13.8276 7.44775 16.8084C10.4394 19.7892 14.3388 21.6883 18.5301 22.2058H18.9101C19.6475 22.2068 20.3595 21.9363 20.9101 21.4458C21.2265 21.1628 21.4792 20.8159 21.6516 20.4281C21.8239 20.0402 21.9121 19.6202 21.9101 19.1958V16.1958C21.8979 15.5012 21.6449 14.8323 21.1944 14.3034C20.744 13.7745 20.1239 13.4184 19.4401 13.2958ZM19.9401 19.2958C19.9399 19.4378 19.9095 19.5781 19.8509 19.7074C19.7923 19.8367 19.7068 19.9521 19.6001 20.0458C19.4887 20.1428 19.3581 20.2152 19.2168 20.2583C19.0755 20.3013 18.9267 20.3141 18.7801 20.2958C15.035 19.8156 11.5563 18.1023 8.89282 15.4261C6.2293 12.7499 4.53251 9.2631 4.0701 5.51577C4.05419 5.36928 4.06813 5.2211 4.1111 5.08016C4.15407 4.93922 4.22517 4.80845 4.3201 4.69577C4.41381 4.5891 4.52916 4.50361 4.65848 4.44498C4.7878 4.38636 4.92812 4.35595 5.0701 4.35577H8.0701C8.30265 4.35059 8.52972 4.42665 8.71224 4.57084C8.89476 4.71503 9.02131 4.91834 9.0701 5.14577C9.1101 5.4191 9.1601 5.6891 9.2201 5.95577C9.33562 6.48291 9.48936 7.00095 9.6801 7.50577L8.2801 8.15577C8.1604 8.21069 8.05272 8.28871 7.96326 8.38536C7.87379 8.48201 7.8043 8.59538 7.75877 8.71896C7.71324 8.84254 7.69257 8.9739 7.69795 9.10549C7.70332 9.23708 7.73464 9.36631 7.7901 9.48577C9.2293 12.5685 11.7073 15.0466 14.7901 16.4858C15.0336 16.5858 15.3066 16.5858 15.5501 16.4858C15.6748 16.4412 15.7894 16.3722 15.8873 16.283C15.9851 16.1937 16.0643 16.0859 16.1201 15.9658L16.7401 14.5658C17.2571 14.7506 17.7847 14.9043 18.3201 15.0258C18.5868 15.0858 18.8568 15.1358 19.1301 15.1758C19.3575 15.2246 19.5608 15.3511 19.705 15.5336C19.8492 15.7161 19.9253 15.9432 19.9201 16.1758L19.9401 19.2958Z" fill="#00222A" />
					</svg>+90 252 536 62 29</a>
			</div>

			<div class="header__block-mob">
				<a class="header__block-href-soc" href="tel:+902525366229"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none" style="margin-right: 4px;">
						<path d="M19.4401 13.2958C19.2201 13.2958 18.9901 13.2258 18.7701 13.1758C18.3246 13.0776 17.8868 12.9473 17.4601 12.7858C16.9962 12.617 16.4862 12.6258 16.0284 12.8104C15.5706 12.995 15.1972 13.3424 14.9801 13.7858L14.7601 14.2358C13.7861 13.6939 12.8911 13.021 12.1001 12.2358C11.3149 11.4448 10.6419 10.5498 10.1001 9.57577L10.5201 9.29577C10.9635 9.07868 11.3109 8.7053 11.4955 8.24746C11.6801 7.78962 11.6889 7.27968 11.5201 6.81577C11.3613 6.38819 11.231 5.95056 11.1301 5.50577C11.0801 5.28577 11.0401 5.05577 11.0101 4.82577C10.8887 4.12139 10.5197 3.48351 9.96972 3.02701C9.41972 2.5705 8.7248 2.32538 8.0101 2.33577H5.0101C4.57913 2.33172 4.15235 2.42058 3.75881 2.5963C3.36527 2.77201 3.01421 3.03046 2.72953 3.35405C2.44485 3.67763 2.23324 4.05876 2.10909 4.47148C1.98494 4.8842 1.95118 5.31883 2.0101 5.74577C2.54284 9.93515 4.45613 13.8276 7.44775 16.8084C10.4394 19.7892 14.3388 21.6883 18.5301 22.2058H18.9101C19.6475 22.2068 20.3595 21.9363 20.9101 21.4458C21.2265 21.1628 21.4792 20.8159 21.6516 20.4281C21.8239 20.0402 21.9121 19.6202 21.9101 19.1958V16.1958C21.8979 15.5012 21.6449 14.8323 21.1944 14.3034C20.744 13.7745 20.1239 13.4184 19.4401 13.2958ZM19.9401 19.2958C19.9399 19.4378 19.9095 19.5781 19.8509 19.7074C19.7923 19.8367 19.7068 19.9521 19.6001 20.0458C19.4887 20.1428 19.3581 20.2152 19.2168 20.2583C19.0755 20.3013 18.9267 20.3141 18.7801 20.2958C15.035 19.8156 11.5563 18.1023 8.89282 15.4261C6.2293 12.7499 4.53251 9.2631 4.0701 5.51577C4.05419 5.36928 4.06813 5.2211 4.1111 5.08016C4.15407 4.93922 4.22517 4.80845 4.3201 4.69577C4.41381 4.5891 4.52916 4.50361 4.65848 4.44498C4.7878 4.38636 4.92812 4.35595 5.0701 4.35577H8.0701C8.30265 4.35059 8.52972 4.42665 8.71224 4.57084C8.89476 4.71503 9.02131 4.91834 9.0701 5.14577C9.1101 5.4191 9.1601 5.6891 9.2201 5.95577C9.33562 6.48291 9.48936 7.00095 9.6801 7.50577L8.2801 8.15577C8.1604 8.21069 8.05272 8.28871 7.96326 8.38536C7.87379 8.48201 7.8043 8.59538 7.75877 8.71896C7.71324 8.84254 7.69257 8.9739 7.69795 9.10549C7.70332 9.23708 7.73464 9.36631 7.7901 9.48577C9.2293 12.5685 11.7073 15.0466 14.7901 16.4858C15.0336 16.5858 15.3066 16.5858 15.5501 16.4858C15.6748 16.4412 15.7894 16.3722 15.8873 16.283C15.9851 16.1937 16.0643 16.0859 16.1201 15.9658L16.7401 14.5658C17.2571 14.7506 17.7847 14.9043 18.3201 15.0258C18.5868 15.0858 18.8568 15.1358 19.1301 15.1758C19.3575 15.2246 19.5608 15.3511 19.705 15.5336C19.8492 15.7161 19.9253 15.9432 19.9201 16.1758L19.9401 19.2958Z" fill="#00222A" />
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
							<?/*
						<div class="dropbtn">EN</div>
						<div class="dropdown-content">
							<a href="#">GE</a>
							<a href="#">EN</a>
						</div>
						*/ ?>
							<img class="header__block-flags" src="/images/flags/GE.png">
							<span>GE</span>
						</div>
						<li class="header__block-li">
							<a href="#">
								Ჩვენს შესახებ
							</a>
						</li>
						<li class="header__block-li">
							<a href="#">
								პროდუქტები
							</a>
						</li>
						<li class="header__block-li">
							<a href="#">
								სიახლეები
							</a>
						</li>
						<li class="header__block-li">
							<a href="#">
								კარიერა
							</a>
						</li>
						<li class="header__block-li">
							<a href="#">
								კონტაქტები
							</a>
						</li>
						<div class="header__block-mob">
							<a class="header__block-href-soc" href=""><img class="header__block-img-soc" src="/images/soc/sn__fb.png"></a>
							<a class="header__block-href-soc" href=""><img class="header__block-img-soc" src="/images/soc/sn__inst.png"></a>
						</div>
					</ul>
				</div>
			</nav>
			<div class="popup" id="popup"></div>
		</div>
	</header>

	<main>

		<section class="section banner">
			<div class="container banner-wrapper">

				<h1 class="zag banner__h1">
					კეთილი იყოს თქვენი მობრძანება ქართულ აკვაკულტურაში!
				</h1>
				<div class="banner__arrow">
					<a href="javascript:void(0);" class="banner__arrow-href banner__arrow-scroll">
						<svg class="banner__arrow-img" width="40" height="161" viewBox="0 0 40 161" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g id="guidance:up-arrow">
								<path id="Vector" d="M31.6667 147.666C30.4301 147.666 28.5834 148.888 27.0334 150.125C25.0334 151.715 23.2884 153.615 21.9567 155.793C20.9584 157.426 20.0001 159.406 20.0001 161M20.0001 161C20.0001 159.406 19.0417 157.425 18.0434 155.793C16.7101 153.615 14.9651 151.715 12.9684 150.125C11.4168 148.888 9.56675 147.666 8.33342 147.666M20.0001 161L20.0001 -0.000245161" stroke="white" stroke-width="2" />
							</g>
						</svg>
						<svg class="banner__arrow-img" width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
							<circle id="Ellipse 1" cx="36" cy="35.9998" r="35" transform="rotate(90 36 35.9998)" stroke="white" stroke-width="2" />
						</svg>
					</a>
				</div>

			</div>
		</section>

		<div class="section m160" data-aos="fade-up">
			<div class="container fish-description">

				<div class="item1">
					<p class="fish-description__text-b">
						ჩვენ ვართ ეკოლოგიურად სუფთა თევზის საწარმო, რომელიც მდებარეობს საქართველოს თვალწარმტაც მთიან რეგიონში.
					</p>
					<img src="/images/main_index_img/fish_catch.png" alt="fish_catch">
				</div>
				<div class="item2">
					<p class="fish-description__text">ჩვენი კომპანია სპეციალიზირებულია კალმახის მოშენებაზე და გთავაზობთ ახალ,
						მაღალი ხარისხის თევზს გაჯერებული მინერალებითა და სხვადასხვა ბუნებრივი მიკროელემენტებით.
					</p>
					<img src="/images/main_index_img/two_fishs.png" alt="two_fishs">
					<div class="arrow-rigth">
						<a href="#" class="arrow-rigth__href arrow-rigth__href-left">მეტი ჩვენს შესახებ
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
					<h2 class="gallery-title h2">გალერეა</h2>
					<div class="swiper--pag">
						<div>
							<svg class="swiper-button-prev--clinic swiper-button-prev" xmlns="http://www.w3.org/2000/svg" width="40" height="41" viewBox="0 0 40 41" fill="none">
								<g clip-path="url(#clip0_157_1653)">
									<path d="M13.3333 32.2582C13.3333 31.0216 12.1117 29.1749 10.875 27.6249C9.285 25.6249 7.385 23.8799 5.20667 22.5482C3.57333 21.5499 1.59333 20.5916 1.39124e-07 20.5916M1.39124e-07 20.5916C1.59333 20.5916 3.575 19.6332 5.20667 18.6349C7.385 17.3016 9.285 15.5566 10.875 13.5599C12.1117 12.0082 13.3333 10.1582 13.3333 8.92489M1.39124e-07 20.5916L40 20.5916" stroke="white" stroke-width="2" />
								</g>
								<defs>
									<clipPath id="clip0_157_1653">
										<rect width="40" height="40" fill="white" transform="translate(0 40.5916) rotate(-90)" />
									</clipPath>
								</defs>
							</svg>
						</div>
						<div class="swiper-scrollbar--clinic swiper-scrollbar">
						</div>
						<div>
							<svg class="swiper-button-next--clinic swiper-button-next" xmlns="http://www.w3.org/2000/svg" width="40" height="41" viewBox="0 0 40 41" fill="none">
								<g clip-path="url(#clip0_157_1655)">
									<path d="M26.6667 8.92488C26.6667 10.1615 27.8883 12.0082 29.125 13.5582C30.715 15.5582 32.615 17.3032 34.7933 18.6349C36.4267 19.6332 38.4067 20.5915 40 20.5915M40 20.5915C38.4067 20.5915 36.425 21.5499 34.7933 22.5482C32.615 23.8815 30.715 25.6265 29.125 27.6232C27.8883 29.1749 26.6667 31.0249 26.6667 32.2582M40 20.5915L4.43708e-07 20.5915" stroke="white" stroke-width="2" />
								</g>
								<defs>
									<clipPath id="clip0_157_1655">
										<rect width="40" height="40" fill="white" transform="translate(40 0.591553) rotate(90)" />
									</clipPath>
								</defs>
							</svg>
						</div>
					</div>
				</div>

				<div class="swiper swiper__gallery">
					<div class="swiper-wrapper" id="gallery">

						<div class="swiper-slide">
							<a href="/images/gallery/slider__img6.png" data-fancybox="gallery">
								<img src="/images/gallery/slider__img6.png" alt="/images/gallery/slider__img6.png">
							</a>
						</div>
						<div class="swiper-slide">
							<a href="/images/gallery/slider__img5.png" data-fancybox="gallery">
								<img src="/images/gallery/slider__img5.png" alt="/images/gallery/slider__img6.png">
							</a>
						</div>
						<div class="swiper-slide">
							<a href="/images/gallery/slider__img4.png" data-fancybox="gallery">
								<img src="/images/gallery/slider__img1.png" alt="/images/gallery/slider__img6.png">
							</a>
						</div>
						<div class="swiper-slide">
							<a href="/images/gallery/slider__img3.png" data-fancybox="gallery">
								<img src="/images/gallery/slider__img3.png" alt="/images/gallery/slider__img6.png">
							</a>
						</div>
						<div class="swiper-slide">
							<a href="/images/gallery/slider__img2.png" data-fancybox="gallery">
								<img src="/images/gallery/slider__img2.png" alt="/images/gallery/slider__img6.png">
							</a>
						</div>
						<div class="swiper-slide">
							<a href="/images/gallery/slider__img2.png" data-fancybox="gallery">
								<img src="/images/gallery/slider__img5.png" alt="/images/gallery/slider__img6.png">
							</a>
						</div>
						<div class="swiper-slide">
							<a href="/images/gallery/slider__img2.png" data-fancybox="gallery">
								<img src="/images/gallery/slider__img1.png" alt="/images/gallery/slider__img6.png">
							</a>
						</div>
						<div class="swiper-slide">
							<a href="/images/gallery/slider__img2.png" data-fancybox="gallery">
								<img src="/images/gallery/slider__img4.png" alt="/images/gallery/slider__img6.png">
							</a>
						</div>
						<div class="swiper-slide">
							<a href="/images/gallery/slider__img2.png" data-fancybox="gallery">
								<img src="/images/gallery/slider__img3.png" alt="/images/gallery/slider__img6.png">
							</a>
						</div>
						<div class="swiper-slide">
							<a href="/images/gallery/slider__img2.png" data-fancybox="gallery">
								<img src="/images/gallery/slider__img2.png" alt="/images/gallery/slider__img6.png">
							</a>
						</div>
						<div class="swiper-slide">
							<a href="/images/gallery/slider__img2.png" data-fancybox="gallery">
								<img src="/images/gallery/slider__img2.png" alt="/images/gallery/slider__img6.png">
							</a>
						</div>
						<div class="swiper-slide">
							<a href="/images/gallery/slider__img2.png" data-fancybox="gallery">
								<img src="/images/gallery/slider__img2.png" alt="/images/gallery/slider__img6.png">
							</a>
						</div>
						<div class="swiper-slide">
							<a href="/images/gallery/slider__img2.png" data-fancybox="gallery">
								<img src="/images/gallery/slider__img2.png" alt="/images/gallery/slider__img6.png">
							</a>
						</div>

					</div>
				</div>
			</div>
		</section>


		<section class="features m160" data-aos="fade-right">
			<div class="container">

				<h2 class="features__h2 h2">რატომ უნდა ავირჩიოთ ქართული აკვაკულტურა?</h2>
				<div class="features__list">
					<div class="features__card">
						<div class="features__card-head">
							<h4 class="features__card-title h4">გარემოსდაცვითი მდგრადობა</h4>
							<img class="features__card-img" src="/images/features/featureCard__1.svg" alt="icon">
						</div>
						<p class="features__card-description">
							ჩვენი აკვაკულტურის პრაქტიკა შექმნილია ეკოსისტემაზე მინიმალური უარყოფითი ზემოქმედებით. ჩვენ ვიყენებთ ინოვაციურ ტექნოლოგიებს თევზისთვის კომფორტული პირობების უზრუნველსაყოფად და ბუნებრივი წყლების დაბინძურების თავიდან ასაცილებლად.
						</p>
					</div>
					<div class="features__card">
						<div class="features__card-head">
							<h4 class="features__card-title h4">ხარისხი და სიახლე</h4>
							<img style="width: 140.647px;" class="features__card-img" src="/images/features/featureCard__2.svg" alt="icon">
						</div>
						<p class="features__card-description">
							ჩვენი თევზებს ვზრდით ბუნებრივი მინერალებით გამდიდრებულ წყალში. ყურადღებით ვაკვირდებით გამრავლების პროცესის ყოველ საფეხურს, რათა უზრუნველვყოთ ხარისხის მაღალი სტანდარტი. თქვენ შეგიძლიათ დატკბეთ ჩვენი ახალი კალმახის შეუდარებელი გემოთი და მიიღთ კვებითი სარგებელი.
						</p>
					</div>
					<div class="features__card">
						<div class="features__card-head">
							<h4 class="features__card-title h4">მრეწველობის პიონერები</h4>
							<img class="features__card-img" src="/images/features/featureCard__3.svg" alt="icon">
						</div>
						<p class="features__card-description">
							ჩვენ ვამაყობთ, რომ ვართ ერთ-ერთი პირველი კომპანია საქართველოში, რომელიც მომხმარებელს ხარისხიან და ორგანულ თევზს სთავაზობს. ჩვენი გამოცდილება და კომპეტენცია გვაძლევს საშუალებას ვაწარმოოთ ჩვენი პროდუქტი ბაზარზე და შემოგთავაზოთ ინოვაციური გადაწყვეტილებები, რომლებიც აერთიანებს საუკეთესო პრაქტიკას აკვაკულტურის სფეროში.
						</p>
					</div>
				</div>

				<div class="features__description" data-aos="zoom-in">
					<img class="features__description-left-img" src="/images/features/fish.png" alt="">
					<p class="features__description-text">
						თითოეული თევზი იზრდება სიყვარულით და ზრუნვით, რაც აისახება გემოვნურ თვისებებსა და პროდუქტის სარგებლიანობაში.
					</p>
					<img class="features__description-rigth-img" src="/images/features/fish_steak.png" alt="">
				</div>

			</div>
		</section>

		<section class="our-products m160" data-aos="fade-down"><? /* data-aos="fade-left" */ ?>
			<div class="container">

				<h2 class="our-products__h2 h2">ჩვენი წარმოება</h2>
				<div class="our-products__list">
					<div class="our-products__block">
						<h4 class="our-products__block-title h4">გარემოსდაცვითი მდგრადობა</h4>
						<img class="our-products__block-img" src="/images/our-products/lonely_fish.png" alt="icon">
						<div class="arrow-rigth">
							<a href="#" class="arrow-rigth__href">მეტის გასაგებად
								<span> </span>
							</a>
						</div>
					</div>
					<div class="our-products__block">
						<h4 class="our-products__block-title h4">თევზის საკვები</h4>
						<img class="our-products__block-img" src="/images/our-products/food_fishs.png" alt="icon">
						<div class="arrow-rigth">
							<a href="#" class="arrow-rigth__href">მეტის გასაგებად
								<span> </span>
							</a>
						</div>
					</div>
				</div>

			</div>
		</section>

		<section class="news m160" data-aos="zoom-in"><?/*data-aos="flip-up"*/ ?>
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
								თითოეული თევზი იზრდება სიყვარულით და ზრუნვით, განსაკუთრებული ყურადღების მიქცევით მის საკვებ თვისებებსა და გემოზე. </p>
							<a class="card-block-link">წაიკითხეთ მთლიანად...</a>
							<span class="card-block-date">22.04.2023</span>
						</div>

					</div>
					<div class="news__card">
						<img class="news__card-img" src="/images/our-products/lonely_fish.png" alt="icon">
						<div class="news__card-block card-block">
							<h4 class="card-block-title h4">ახალი ამბების მაგალითი</h4>
							<p class="card-block-description">
								თითოეული თევზი იზრდება სიყვარულით და ზრუნვით, განსაკუთრებული ყურადღების მიქცევით მის საკვებ თვისებებსა და გემოზე. </p>
							<a class="card-block-link">წაიკითხეთ მთლიანად...</a>
							<span class="card-block-date">22.04.2023</span>
						</div>
					</div>
					<div class="news__card">
						<img class="news__card-img" src="/images/our-products/lonely_fish.png" alt="icon">
						<div class="news__card-block card-block">
							<h4 class="card-block-title h4">ახალი ამბების მაგალითი</h4>
							<p class="card-block-description">
								თითოეული თევზი იზრდება სიყვარულით და ზრუნვით, განსაკუთრებული ყურადღების მიქცევით მის საკვებ თვისებებსა და გემოზე. </p>
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

	</main>

	<footer class="footer primary-color">
		<div class="container footer__wrapper">

			<a href="/"><img class="footer__logo" src="/images/fish_logo/footer__logo.png" alt="logo"></a>

			<ul class="footer__block-ul">
				<li class="footer__block-ul-li">
					<a href="#">
						Ჩვენს შესახებ
					</a>
				</li>
				<li class="footer__block-ul-li">
					<a href="#">
						პროდუქტები
					</a>
				</li>
				<li class="footer__block-ul-li">
					<a href="#">
						სიახლეები
					</a>
				</li>
				<li class="footer__block-ul-li">
					<a href="#">
						კარიერა
					</a>
				</li>
				<li class="footer__block-ul-li">
					<a href="#">
						კონტაქტები
					</a>
				</li>
			</ul>

			<div class="footer-gallery" id="gallery">

				<div class="footer-gallery__slide">
					<a href="/images/gallery/slider__img6.png" data-fancybox="gallery">
						<img src="/images/gallery/slider__img6.png" alt="/images/gallery/slider__img6.png">
					</a>
				</div>
				<div class="footer-gallery__slide">
					<a href="/images/gallery/slider__img5.png" data-fancybox="gallery">
						<img src="/images/gallery/slider__img5.png" alt="/images/gallery/slider__img6.png">
					</a>
				</div>
				<div class="footer-gallery__slide">
					<a href="/images/gallery/slider__img4.png" data-fancybox="gallery">
						<img src="/images/gallery/slider__img1.png" alt="/images/gallery/slider__img6.png">
					</a>
				</div>
				<div class="footer-gallery__slide">
					<a href="/images/gallery/slider__img3.png" data-fancybox="gallery">
						<img src="/images/gallery/slider__img3.png" alt="/images/gallery/slider__img6.png">
					</a>
				</div>
				<div class="footer-gallery__slide">
					<a href="/images/gallery/slider__img2.png" data-fancybox="gallery">
						<img src="/images/gallery/slider__img2.png" alt="/images/gallery/slider__img6.png">
					</a>
				</div>
				<div class="footer-gallery__slide">
					<a href="/images/gallery/slider__img2.png" data-fancybox="gallery">
						<img src="/images/gallery/slider__img5.png" alt="/images/gallery/slider__img6.png">
					</a>
				</div>
			</div>

			<div>
				<div class="footer__block">
					<p class="footer__text">თუ თქვენ გაქვთ რაიმე შეკითხვა ან გჭირდებათ დახმარება</p>
				</div>
				<div class="footer__block">
					<a class="header__block-href-soc footer__block-href-soc" href="tel:+902525366229"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none" style="margin-right: 4px;">
							<path d="M19.4401 13.5919C19.2201 13.5919 18.9901 13.5219 18.7701 13.4719C18.3246 13.3737 17.8868 13.2434 17.4601 13.0819C16.9962 12.9131 16.4862 12.9219 16.0284 13.1065C15.5706 13.2911 15.1972 13.6385 14.9801 14.0819L14.7601 14.5319C13.7861 13.9901 12.8911 13.3171 12.1001 12.5319C11.3149 11.7409 10.6419 10.8459 10.1001 9.87191L10.5201 9.59191C10.9635 9.37483 11.3109 9.00144 11.4955 8.5436C11.6801 8.08576 11.6889 7.57582 11.5201 7.11191C11.3613 6.68433 11.231 6.24671 11.1301 5.80191C11.0801 5.58191 11.0401 5.35191 11.0101 5.12191C10.8887 4.41753 10.5197 3.77965 9.96972 3.32315C9.41972 2.86665 8.7248 2.62152 8.0101 2.63191H5.0101C4.57913 2.62786 4.15235 2.71672 3.75881 2.89244C3.36527 3.06816 3.01421 3.32661 2.72953 3.65019C2.44485 3.97378 2.23324 4.3549 2.10909 4.76762C1.98494 5.18034 1.95118 5.61497 2.0101 6.04191C2.54284 10.2313 4.45613 14.1238 7.44775 17.1045C10.4394 20.0853 14.3388 21.9844 18.5301 22.5019H18.9101C19.6475 22.503 20.3595 22.2324 20.9101 21.7419C21.2265 21.459 21.4792 21.1121 21.6516 20.7242C21.8239 20.3364 21.9121 19.9163 21.9101 19.4919V16.4919C21.8979 15.7973 21.6449 15.1285 21.1944 14.5996C20.744 14.0707 20.1239 13.7145 19.4401 13.5919ZM19.9401 19.5919C19.9399 19.7339 19.9095 19.8742 19.8509 20.0035C19.7923 20.1328 19.7068 20.2482 19.6001 20.3419C19.4887 20.4389 19.3581 20.5113 19.2168 20.5544C19.0755 20.5975 18.9267 20.6103 18.7801 20.5919C15.035 20.1117 11.5563 18.3984 8.89282 15.7222C6.2293 13.046 4.53251 9.55925 4.0701 5.81191C4.05419 5.66543 4.06813 5.51724 4.1111 5.3763C4.15407 5.23536 4.22517 5.1046 4.3201 4.99191C4.41381 4.88524 4.52916 4.79975 4.65848 4.74113C4.7878 4.6825 4.92812 4.65209 5.0701 4.65191H8.0701C8.30265 4.64673 8.52972 4.72279 8.71224 4.86698C8.89476 5.01117 9.02131 5.21448 9.0701 5.44191C9.1101 5.71524 9.1601 5.98524 9.2201 6.25191C9.33562 6.77905 9.48936 7.29709 9.6801 7.80191L8.2801 8.45191C8.1604 8.50683 8.05272 8.58486 7.96326 8.6815C7.87379 8.77815 7.8043 8.89152 7.75877 9.0151C7.71324 9.13868 7.69257 9.27004 7.69795 9.40163C7.70332 9.53322 7.73464 9.66245 7.7901 9.78191C9.2293 12.8647 11.7073 15.3427 14.7901 16.7819C15.0336 16.8819 15.3066 16.8819 15.5501 16.7819C15.6748 16.7373 15.7894 16.6684 15.8873 16.5791C15.9851 16.4898 16.0643 16.382 16.1201 16.2619L16.7401 14.8619C17.2571 15.0468 17.7847 15.2004 18.3201 15.3219C18.5868 15.3819 18.8568 15.4319 19.1301 15.4719C19.3575 15.5207 19.5608 15.6472 19.705 15.8298C19.8492 16.0123 19.9253 16.2394 19.9201 16.4719L19.9401 19.5919Z" fill="white" />
						</svg>+90 252 536 62 29</a>
				</div>
				<div class="footer__block">
					<a class="header__block-href-soc" href=""><img class="header__block-img-soc" src="/images/soc/sn__fb.png"></a>
					<a class="header__block-href-soc" href=""><img class="header__block-img-soc" src="/images/soc/sn__inst.png"></a>
				</div>

			</div>

		</div>
		<div class="footer_bottom-element">
			<p>Georgian Aquaculture 2023. ©ველა უფლება დაცულია</p>
		</div>
	</footer>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="/js/swiper-bundle.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

	<script>
		Fancybox.bind("#gallery a", {
			groupAll: true, // Group all items
			on: {
				ready: (fancybox) => {
					console.log(`fancybox #${fancybox.id} is ready!`);
				}
			}
		});
	</script>

	<script>
		const hamb = document.querySelector("#hamb");
		const popup = document.querySelector("#popup");
		const body = document.body;

		// Клонируем меню, чтобы задать свои стили для мобильной версии
		const menu = document.querySelector("#menu").cloneNode(1);

		// При клике на иконку hamb вызываем ф-ию hambHandler
		hamb.addEventListener("click", hambHandler);

		// Выполняем действия при клике ..
		function hambHandler(e) {
			e.preventDefault();
			// Переключаем стили элементов при клике
			popup.classList.toggle("open");
			hamb.classList.toggle("active");
			body.classList.toggle("noscroll");
			renderPopup();
		}

		// Здесь мы рендерим элементы в наш попап
		function renderPopup() {
			popup.appendChild(menu);
		}

		// Код для закрытия меню при нажатии на ссылку
		const links = Array.from(menu.children);

		// Для каждого элемента меню при клике вызываем ф-ию
		links.forEach((link) => {
			link.addEventListener("click", closeOnClick);
		});

		// Закрытие попапа при клике на меню
		function closeOnClick() {
			popup.classList.remove("open");
			hamb.classList.remove("active");
			body.classList.remove("noscroll");
		}
		$(".banner__arrow-scroll").click(function() {
			$('.fish-description')[0].scrollIntoView({
				behavior: "smooth",
				block: "nearest",
				inline: "nearest"
			});
		});
	</script>

	<script>
		AOS.init();
	</script>

	<script>
		const swiperClinic = new Swiper('.swiper__gallery', {
			direction: 'horizontal',
			slidesPerView: 'auto',
			loop: true,
			/*effect: 'slide',*/
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			scrollbar: {
				el: '.swiper-scrollbar',
				clickable: true,
				draggable: true,
			},
			spaceBetween: 10,
			slidesPerView: 1.12,
			autoHeight: true,
			breakpoints: {
				320: {
					slidesPerView: 1.5,
				},
				550: {
					slidesPerView: 2.5,
				},
				768: {
					slidesPerView: 3.5,
				},
				1080: {
					slidesPerView: 'auto',
				},
				1440: {
					slidesPerView: 'auto',
					spaceBetween: 40,
				}
			}

		});
	</script>

</body>

</html>