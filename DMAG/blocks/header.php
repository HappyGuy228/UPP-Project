
<!DOCTYPE html>
<!--<html lang="ru" xmlns:th="http://www.w3.org/1999/xhtml">-->
<html xmlns:th="http://www.w3.org/1999/xhtml">

<head>
    <!--<meta charset="utf-8" />
    <title>Кастомный виджет googleTranslate для сайта</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <!--<link rel="stylesheet" href="css/google_translator.css">-->
    <link rel="stylesheet" th:href="@{css/header2.css}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="js/google-translate.js"></script>
    <script src="//translate.google.com/translate_a/element.js?cb=TranslateInit"></script>
</head>

<body class="header-body"> <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
<header class="header-header">
    <nav class="navbar">
        <div class="header-container" th:fragment="header">
            <a href="#" class="navbar-brand">DMAG</a>

            <div class="navbar-wrap">
                <ul class="navbar-menu">
                    <li class="catalog-menu"><a href="#">Каталог</a>
                        <ul class="submenu">
                            <li><a href="">Смартфоны и планшеты</a>
                                <ul class="submenu1">
                                    <li><a href="#">Смартфоны</a></li>
                                    <li><a href="#">Планшеты</a></li>
                                    <li><a href="#">Наушники</a></li>
                                    <li><a href="#">Гаджеты</a></li>
                                    <li><a href="#">Аксессуары для планшетов и смартфонов</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Компьютеры и ноутбуки</a>
                                <ul class="submenu1">
                                    <li><a href="#">Компьютеры</a></li>
                                    <li><a href="#">Ноутбуки</a></li>
                                    <li><a href="#">Мониторы</a></li>
                                    <li><a href="#">Комплектующие для ПК</a></li>
                                </ul>
                            </li>
                            <li><a href="#">ТВ и мультмедиа</a>
                                <ul class="submenu1">
                                    <li><a href="#">Телевизоры</a></li>
                                    <li><a href="#">Консоли</a></li>
                                    <li><a href="#">Аудиотехника</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Бытовая техника</a>
                                <ul class="submenu1">
                                    <li><a href="#">Крупная бытовая техника</a></li>
                                    <li><a href="#">Мелкая бытовая техника</a></li>
                                    <li><a href="#">Посуда</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Товары для офиса</a>
                                <ul class="submenu1">
                                    <li><a href="#">Оргтехника</a></li>
                                    <li><a href="#">Оборудование для малых сетей</a></li>
                                    <li><a href="#">Профессиональное сетевое оборудование</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Строительство и ремонт</a>
                                <ul class="submenu1">
                                    <li><a href="#">Электроинструменты</a></li>
                                    <li><a href="#">Аккумуляторные инструменты</a></li>
                                    <li><a href="#">Строительное оборудование и стройматериалы</a></li>
                                    <li><a href="#">Сантехника</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Спорт и отдых</a>
                                <ul class="submenu1">
                                    <li><a href="#">Туризм и отдых</a></li>
                                    <li><a href="#">Транспорт (вело-, электро-)</a></li>
                                    <li><a href="#">Тренажеры</a></li>
                                    <li><a href="#">Товары для зимних видов спорта</a></li>
                                    <li><a href="#">Игры</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <select class="change-lang">
                            <option value="ru" selected>RU</option>
                            <option value="en">EN</option>
                        </select>
                    </li>


                    <li>
                        <!--<a th:href="@{/header2?lang=ru}">-->
                        <!--<a onclick="window.location.href + window.location.search">-->
                        <!--<a th:href="window.location.href?lang=ru"-->
                            <img src="img/lang/lang__ru.png" alt="ru" data-google-lang="ru" class="language__img">
                        <!--</a>-->
                    </li>
                    <li>
                        <!--<a>th:href="@{/header2?lang=en}">-->
                            <img src="img/lang/lang__en.png" alt="en" data-google-lang="en" class="language__img">
                        <!--</a>-->
                    </li>



                    <!--<li><a translate="no"  th:href="'/entrance/' + getQueryVariable('lang')" th:utext="#{header2.sign_in}"></a></li>-->




                    <!--<php 
                        try{
                            if (isset($_COOKIE["user"])):
                                if (($_COOKIE["user"] == "Да")): ?>
                        <li><a href="/auth.php">Кабинет пользователя</a></li>
                    <php endif; endif;} catch(Exception $e){ ?>
                        <li><a href="/auth.php">Войти</a></li>
                    <php }?>-->



                    <?php 
                        if (isset($_COOKIE["role"])):
                            if (($_COOKIE["role"] == "user")): ?>
                        <li><a href="/account.php">Кабинет пользователя</a></li>
                    <?php endif; else: ?>
                        <li><a href="/login.php">Войти</a></li>
                    <?php  endif;?>



                    <!--<php if ($_COOKIE['user'] == 'Да'): ?>
                     <li><a href="/auth.php">Кабинет пользователя</a></li>
                    <php else:?>
                        <li><a href="/auth.php">Войти</a></li>
                    <php endif; ?>                  ДОЛЖНО +- РАБОТАТЬ--> 


                    <li><a href="#">Сравнение</a></li>
                    <li><a href="#">Корзина</a></li>
                </ul>
            </div>
            <a class="search-box">
                <input class="search-txt" type="text" name="" placeholder="Поиск">
                <a class="search-btn" href="#"></a>
            </a>
            <div class="image-lupa">
                <img src="/img/lupa/lupa.png" onclick="getQueryVariable()" width="40" height="40">
            </div>
        </div>
    </nav>
</header>
</body> <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->

</html>
