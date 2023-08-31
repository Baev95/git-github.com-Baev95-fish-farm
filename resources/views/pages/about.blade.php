<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="/page/contact">Перейти на контакты</a>
    <h1>{{ trans('messages.contact_h1') }}</h1>

    <div class="header__block-mob dropdown">
        <div class="dropbtn">{{ app()->getLocale() }}</div> <!-- Отображение текущего языка -->
        <div class="dropdown-content">
            <a href="#" data-lang="ru">RU</a> <!-- Добавление атрибута data-lang с значением языка -->
            <a href="#" data-lang="en">EN</a> <!-- Добавление атрибута data-lang с значением языка -->
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var languageLinks = document.querySelectorAll('.dropdown-content a');

            languageLinks.forEach(function(link) {
                link.addEventListener('click', function(event) {
                    event.preventDefault();

                    var lang = this.dataset.lang; // Получение значения языка из атрибута data-lang
                    var currentUrl = window.location.href;
                    var url = '';

                    // Проверка, если текущий URL уже содержит префикс языка, удалите его
                    if (currentUrl.includes('/en/') || currentUrl.includes('/ru/')) {
                        url = currentUrl.replace(/\/(en|ru)\//, '/');
                    } else {
                        url = currentUrl;
                    }

                    // Добавление префикса языка к URL
                    url = url.replace(/(https?:\/\/[^\/]+)(\/.*)?/, '$1/' + lang + '$2');

                    window.location.href = url; // Перенаправление на новый URL с выбранным языком
                });
            });
        });
    </script>
</body>

</html>
