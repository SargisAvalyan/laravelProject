<!DOCTYPE html>
<html>
<head>
    <title>Мое Laravel приложение</title>
    <!-- Подключите здесь ваши CSS-стили и другие элементы head -->
    <link rel="stylesheet" href="/public/css/style.css">

</head>
<body>
    <div class="home">
    <a href="/laravelPage"><h1>Laravel</h1></a>
        <ul class="menu">
            <li><a href="/">Главная</a></li>
            <li class="dropdown">
                <a href="/услуги">Услуги</a>
                <ul class="dropdown-menu">
                    <li><a href="/услуги/веб-разработка">Веб-разработка</a></li>
                    <li><a href="/услуги/дизайн">Дизайн</a></li>
                    <li><a href="/услуги/маркетинг">Маркетинг</a></li>
                </ul>
            </li>
            <li><a href="/о-нас">О нас</a></li>
            <li><a href="/контакты">Контакты</a></li>
            <li class="search">
                <input type="text" placeholder="Поиск">
                <button class="search-button" type="button"><i class="fas fa-search"></i></button>
                <button class="cart-button" type="button"><i class="fas fa-shopping-cart"></i></button>
            </li>
        </ul>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <!-- Подключите здесь ваши JavaScript-скрипты и другие элементы подвала -->
</body>
</html>
