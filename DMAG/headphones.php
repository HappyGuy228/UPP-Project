<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tutorial</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- CSS -->
    <link href="css/headphones.css" rel="stylesheet">
    <meta name="robots" content="noindex,follow" />

    <style>
    <?php include "css/account.css" ?>
    <?php include "css/header.css" ?>
    <?php include "css/footer.css" ?>
    </style>

  </head>

  <?php require "blocks/header.php" ?>

  <body>
    <main class="container">

      <!-- Left Column / Headphones Image -->
      <div class="left-column">
        <img data-image="black" src="img/headphones/black.png" alt="">
        <img data-image="blue" src="img/headphones/blue.png" alt="">
        <img data-image="red" class="active" src="img/headphones/red.png" alt="">
      </div>


      <!-- Right Column -->
      <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
          <span>Headphones</span>
          <h1>Beats EP</h1>
          <p>The preferred choice of a vast range of acclaimed DJs. Punchy, bass-focused sound and high isolation. Sturdy headband and on-ear cushions suitable for live performance</p>
        </div>

        <!-- Product Configuration -->
        <div class="product-configuration">

          <!-- Product Color -->
          <div class="product-color">
            <span>Color</span>

            <div class="color-choose">
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
            <span>Cable configuration</span>

            <div class="cable-choose">
              <button>Straight</button>
              <button>Coiled</button>
              <button>Long-coiled</button>
            </div>

            <a href="#">How to configurate your headphones</a>
          </div>
        </div>

        <!-- Product Pricing -->
        <div class="product-price">
          <span>148$</span>
          <!-- <a href="#" class="cart-btn">Add to cart</a>  !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
          <button class="cart-btn" type="button" value="Наушники" onclick="addToBasket(this.value)">Добавить в корзину</button>
        </div>
      </div>
    </main>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="js/headphones.js" charset="utf-8"></script>
    <script type='text/javascript' src="js/test_basket_for_add_products.js"></script>
  </body>

  <?php require "blocks/footer.php" ?>
</html>
