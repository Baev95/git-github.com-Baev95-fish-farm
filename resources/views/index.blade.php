<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TEST</title>
</head>

<body>
    <h1>
        @lang('public.welcome')
    </h1>
    <p>мда</p>
    <a href="/page/contact/">Перейти в контакты</a>

    {{ $id }}
    <div class="header__block-mob dropdown">
        <?/*<div class="dropbtn">{{ app()->getLocale() }}</div> <!-- Отображение текущего языка --> */?>
        <div class="dropdown-content">
            <a class="dropdown-item" href="locale/ru" data-lang="ru">ru</a>
            <!-- Добавление атрибута data-lang с значением языка -->
            <a class="dropdown-item" href="locale/en" data-lang="en">en</a>
            <!-- Добавление атрибута data-lang с значением языка -->
        </div>
    </div>

</body>

</html>
