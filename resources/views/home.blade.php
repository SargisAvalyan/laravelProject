<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <link rel="stylesheet" href="/css/style.css">
    <title>Laravel Project</title>
</head>
<body>
  <div class="home">
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

</body>


</html>
