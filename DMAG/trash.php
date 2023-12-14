<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/trash.css">
    <title th:utext="Корзина"></title>

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

    <div class="basket1">
        <div class="basket2">Hello</div>
        <div class="basket3" id="basket3">Hello</div>
    </div>          <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->

    <!-- Проверка наличия в localStorage элементов из массива cart, то есть простыми словами есть ли уже в нашей корзине какие-нибудь товары -->
    
    
    <!-- <script type='text/javascript' src="js/test_basket1.js"></script>
    <script>
        loadBasket();
    </script>                                                                                   НЕ РАБОТАЕТ???-->

    <ul>
        <!-- Вообще, в переменную value надо передавать не цену товара, а его id который есть в БД. И затем, на основе его id выводить стоимость товара в корзине -->
        <li><button class="trash-button1" type="button" value="10 10" onclick="addToBasket(this.value)">Добавить в корзину Товар1</button></li>
        <li><button class="button2" type="button" value="20" onclick="addToBasket(this.value)">Добавить в корзину Товар2</button></li>
        <li><button class="button3" type="button" value="30" onclick="addToBasket(this.value)">Добавить в корзину Товар3</button></li>


        <li><button class="button1" type="button" value="10" onclick="deleteFromBasket(this.value)">Удалить из корзины Товар1</button></li>
        <li><button class="button2" type="button" value="20" onclick="deleteFromBasket(this.value)">Удалить из корзины Товар2</button></li>
        <li><button class="button3" type="button" value="30" onclick="deleteFromBasket(this.value)">Удалить из корзины Товар3</button></li>


        <button class="button4" type="button">Перейти в корзину</button>
    </ul>
    
    
    <!-- <div class="container">
        <div class="cart" id="all_products_in_trash">

        <php for($count = 1; $count < 4; $count++): ?>

            <div class="product-card" id="product1">
                <img src="img/trash/product1.jpg" alt="Product 1" class="product-img">
                <div class="product-info">
                    <div class="product-title">Крутая мышка для компьютера 1</div>
                    <div class="product-description">Очень крутая мышка с продвинутыми функциями.</div>
                    <div class="product-price">7777 руб.</div>
                </div>
                <div class="quantity-controls">
                    <button class="quantity-btn" onclick="deleteFromBasket(this.value)" value="Крутая мышка для компьютера 1">-</button>
                    <span class="quantity" id="quantity1">1</span>
                    <button class="quantity-btn" onclick="addToBasket(this.value)" value="Крутая мышка для компьютера 1">+</button>
                </div>
                <button class="delete-btn" onclick="deleteProduct('product1')">
                    <img src="img/trash/trash-icon.png" alt="Delete" width="20" height="20">
                </button>
            </div>

            <php endfor; ?>

        </div>
        
    </div> -->

    <div class="container">
        <div class="cart" id="all_products_in_trash">
            <script type='text/javascript' src="js/test_basket.js"></script>
            <script>
                showBasket();
            </script>
            <!--<button class="checkout-btn" onclick="checkout()">Перейти к оформлению</button>-->
        </div>
        
    </div>
    
    <script type='text/javascript' src="js/test_basket.js"></script>
    <script>
        loadBasket();
    </script>
    <!-- <script>
        function incrementQuantity(quantityId) {
            var quantityElement = document.getElementById(quantityId);
            var currentQuantity = parseInt(quantityElement.innerText, 10);
            quantityElement.innerText = currentQuantity + 1;
        }

        function decrementQuantity(quantityId) {
            var quantityElement = document.getElementById(quantityId);
            var currentQuantity = parseInt(quantityElement.innerText, 10);
            if (currentQuantity > 1) {
                quantityElement.innerText = currentQuantity - 1;
            }
        }

        function deleteProduct(productId) {
            var productElement = document.getElementById(productId);
            productElement.remove();
        }

        function checkout() {
            // Действия при нажатии на кнопку "Перейти к оформлению"
            alert("Оформление заказа");
        }
    </script> -->

    <script type='text/javascript' src="js/translate1.js"></script>
</body>

<script type='text/javascript' src="js/test_basket.js">loadBasket();</script>

<?php require "blocks/footer.php" ?>

</html>
