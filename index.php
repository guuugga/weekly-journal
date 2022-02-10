<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Журнал</title>
    <!-- Подключаем стили -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/media.css">
    <!-- Темы день/ночь -->
    <link rel="stylesheet" href="../css/light.css" media="(prefers-color-scheme: light)">
    <link rel="stylesheet" href="../css/dark.css" media="(prefers-color-scheme: dark)">
    <!-- Сообщаем браузеру, какие есть темы -->
    <meta name="color-scheme" content="light dark">
    <!-- Фоновый цвет для Safari -->
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#f5f5f7">
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#1d1d1f">
</head>
<body>

<header>
    <nav>
        <ul class="header-nav">
            <li class="nav__item"><a class="nav__link" href="#">Журнал</a></li>
            <li class="nav__item"><a class="nav__link" href="#">Контакты</a></li>
        </ul>
    </nav>
    <img class="header-logo" src="../img/icons/logo.svg" alt="Логотип weekly journal">
    <fieldset class="switcher">
        <legend class="switcher__legend visually-hidden">Схема</legend>
        <input class="switcher__radio switcher__radio--light" type="radio" name="color-scheme" value="light" aria-label="Светлая" title="Светлая тема">
        <input class="switcher__radio switcher__radio--auto" type="radio" name="color-scheme" value="auto" aria-label="Система" title="Системная тема" checked>
        <input class="switcher__radio switcher__radio--dark" type="radio" name="color-scheme" value="dark" aria-label="Тёмная" title="Тёмная тема">
        <div class="switcher__status"></div>
    </fieldset>
    <button class="burger" aria-label="Открыть навигацию" aria-expanded="false">
        <span class="burger__line"></span>
    </button>
</header>

<main>
    <h1 class="visually-hidden">Weekly Journal - журнал для тех, кому интересно развиваться</h1>
    <section class="popular">
        <h2 class="popular__title transition">Popular articles</h2>
        <div class="wrapper">
            <a href="#">
                <article class="popular__card">
                    <time class="popular__card--date" datetime="2022-02-08">08.02.22</time>
                    <h3 class="popular__card--title">Рассказываем, как выбрать красивую цветовую палитру.</h3>
                </article>
            </a>
        </div>
    </section>
    <section class="articles">
        <h2 class="articles__title transition">All articles</h2>
        <div class="wrapper">
            <div class="post">
                <a href="#"><img class="post__img" src="./img/" alt=""></a>
                <article class="post__info">
                    <a href="#"><h3 class="post__info--title">Заголовок</h3></a>
                    <ul class="post__info--desc">
                        <li><a class="post__info--link" href="#">Читать</a></li>
                        <li>08.02.22</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>
</main>

<script src="./scripts/prefers-color-scheme.js"></script>
</body>
</html>