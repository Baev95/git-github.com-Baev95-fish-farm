<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title> @yield('title-block')</title>

    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/media.css" rel="stylesheet">
    <? // <link rel="stylesheet" href="/css/build/swiper.css"> ?>
    <link href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>

<body>
    @include('inc.header')
    @yield('content')



    @include('inc.footer')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <? /* <script src="/js/swiper-bundle.js"></script> */ ?>
    <script src="/js/app.js"></script>

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
        const menu = document.querySelector("#menu")?.cloneNode(1);

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
            let but = document.querySelectorAll('.header__block-mob.dropdown .dropbtn')[1];
            but.addEventListener("click", () => {
                document.querySelectorAll('.header__block-mob.dropdown .dropdown-content')[1].classList
                    .toggle('is-block');
            })
        }

        // Здесь мы рендерим элементы в наш попап
        function renderPopup() {
            popup.appendChild(menu);
        }

        // Код для закрытия меню при нажатии на ссылку
        const links = Array.from(menu.children);

        // Для каждого элемента меню при клике вызываем ф-ию
        /*links.forEach((link) => {
            link.addEventListener("click", closeOnClick);
        });*/

        // Закрытие попапа при клике на меню
        function closeOnClick() {
            popup.classList.remove("open");
            hamb.classList.remove("active");
            body.classList.remove("noscroll");
        }
        $(".banner-wrapper .banner__arrow-scroll").click(function() {
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
            // effect: 'slide',
            touchRatio: 1,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            scrollbar: {
                el: '.swiper-scrollbar',
                clickable: true,
                draggable: false, // измените значение на false
            },
            spaceBetween: 10,
            slidesPerView: 1.12,
            autoHeight: true,
            observer: true, // добавьте эту опцию
            breakpoints: {
                320: {
                    slidesPerView: 2.5, // увеличьте значение
                },
                550: {
                    slidesPerView: 3.5, // увеличьте значение
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

    <style>
        .is-block {
            display: block;
        }
    </style>
</body>

</html>
