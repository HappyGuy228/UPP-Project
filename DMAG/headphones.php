<?php 
  
  include "include/db.php";

  $result = mysqli_query($link, "SELECT * FROM `products`");

  $products = mysqli_fetch_assoc($result);

 ?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Наушники</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- CSS -->
    <!-- <link href="css/product_page_style.css" rel="stylesheet"> -->
    <meta name="robots" content="noindex,follow" />
    <style>
    <?php include "css/product_page_style.css" ?>
    <?php include "css/header.css" ?>
    <?php include "css/footer.css" ?>
    </style>

  </head>

  <?php require "blocks/header.php" ?>

  <body>
    <main class="container">

      <!-- Left Column / Headphones Image -->
      <div class="left-column">
        <img data-image="black" src="img/goods/black.png" alt="">
        <img data-image="blue" src="img/goods/blue.png" alt="">
        <img data-image="red" class="active" src="img/goods/red.png" alt="">
      </div>


      <!-- Right Column -->
      <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
          <span>Наушники</span>
          <h1 id="product-name"></h1>
          <p id="product-description">Предпочтительный выбор многих известных диджеев. Пронзительный, басовитый звук и высокая степень изоляции. Прочное оголовье и накладные амбушюры подходят для живых выступлений.</p>
        </div>

        <!-- Product Configuration -->
        <div class="product-configuration">

          <!-- Product Color -->
          <div class="product-color">
            <span>Цвет</span>

            <div class="color-choose" id="color-choose">
              <div>
                <input data-image="red" type="radio" id="red" name="color" value="red" checked>
                <label for="red"><span></span></label>
              </div>
              <div>
                <input data-image="blue" type="radio" id="blue" name="color" value="blue">
                <label for="blue"><span></span></label>
              </div>
              <div>
                <input data-image="black" type="radio" id="black" name="color" value="black">
                <label for="black"><span></span></label>
              </div>
            </div>

          </div>

          <!-- Cable Configuration -->
          <div class="cable-config">
            <span>Конфигурация кабеля</span>

            <div class="cable-choose">
              <button>Прямой</button>
              <button>Витой</button>
              <button>Длинная спираль</button>
            </div>

            <a href="#">Как настроить ваши наушники</a>
          </div>
        </div>

        <!-- Product Pricing -->
        <div class="product-price">
          <span id="product-price"></span>
          <!-- <a href="#" class="cart-btn">Добавить в корзину</a> -->
          <button class="cart-btn" onclick="addToBasket(this.value)" value="123">Добавить в корзину</button>
        </div>
      </div>
    </main>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="js/product_page_script.js" charset="utf-8"></script>
    <script src="js/test_basket.js" type="text/javascript"></script>
  </body>

<?php require "blocks/footer.php" ?>
  
</html>
