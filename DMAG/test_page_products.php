<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" th:href="@{css/registration.css}">
    <title th:utext="Зарегистрироваться"></title>

    <!--<div style="text-align: right;padding:5px;margin:5px 0px;background:#ccc;">
        <a th:href="@{/registration?lang=en}">Login (English)</a>
        &nbsp;|&nbsp;
        <a th:href="@{/registration?lang=ru}">Login (Russian)</a>
    </div>                                                                          ЕЩЁ ПОНАДОБИТСЯ--> 

    <style>
    <?php include "css/account.css" ?>
    <?php include "css/header.css" ?>
    <?php include "css/footer.css" ?>
    </style>
</head>

<?php require "blocks/header.php" ?>

<body class="body">
    <h1>Делайте страницу)))</h1>

    <div class="basket"></div>          <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->

    <!-- Проверка наличия в localStorage элементов из массива cart, то есть простыми словами есть ли уже в нашей корзине какие-нибудь товары -->
    <script type='text/javascript' src="js/test_basket.js"></script>
    <script>
        loadBasket();
    </script>

    <ul>
        <!-- Вообще, в переменную value надо передавать не цену товара, а его id который есть в БД. И затем, на основе его id выводить стоимость товара в корзине -->
        <li><button class="button1" type="button" value="10" onclick="addToBasket(this.value)">Добавить в корзину Товар1</button></li>
        <li><button class="button2" type="button" value="20" onclick="addToBasket(this.value)">Добавить в корзину Товар2</button></li>
        <li><button class="button3" type="button" value="30" onclick="addToBasket(this.value)">Добавить в корзину Товар3</button></li>


        <li><button class="button1" type="button" value="10" onclick="deleteFromBasket(this.value)">Удалить из корзины Товар1</button></li>
        <li><button class="button2" type="button" value="20" onclick="deleteFromBasket(this.value)">Удалить из корзины Товар2</button></li>
        <li><button class="button3" type="button" value="30" onclick="deleteFromBasket(this.value)">Удалить из корзины Товар3</button></li>


        <button class="button4" type="button">Перейти в корзину</button>
</body>

<script type='text/javascript' src="js/test_basket.js"></script>

<?php require "blocks/footer.php" ?>

</html>
