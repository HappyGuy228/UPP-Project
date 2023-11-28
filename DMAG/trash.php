<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина</title>
    <style><?php include "css/trash.css" ?>
    <?php include "css/header.css" ?>
    <?php include "css/footer.css" ?></style>
</head>

<?php require "blocks/header.php" ?>
<body>
    <div class="container">
        <div class="cart">
            <div class="product-card" id="product1">
                <img src="img/trash/product1.jpg" alt="Product 1" class="product-img">
                <div class="product-info">
                    <div class="product-title">Крутая мышка для компьютера 1</div>
                    <div class="product-description">Очень крутая мышка с продвинутыми функциями.</div>
                    <div class="product-price">7777 руб.</div>
                </div>
                <div class="quantity-controls">
                    <button class="quantity-btn" onclick="decrementQuantity('quantity1')">-</button>
                    <span class="quantity" id="quantity1">1</span>
                    <button class="quantity-btn" onclick="incrementQuantity('quantity1')">+</button>
                </div>
                <button class="delete-btn" onclick="deleteProduct('product1')">
                    <img src="img/trash/trash-icon.png" alt="Delete" width="20" height="20">
                </button>
            </div>

            <div class="product-card" id="product2">
                <img src="img/trash/product2.jpg" alt="Product 2" class="product-img">
                <div class="product-info">
                    <div class="product-title">Крутая мышка для компьютера 2</div>
                    <div class="product-description">Еще более продвинутая модель мышки.</div>
                    <div class="product-price">6666 руб.</div>
                </div>
                <div class="quantity-controls">
                    <button class="quantity-btn" onclick="decrementQuantity('quantity2')">-</button>
                    <span class="quantity" id="quantity2">1</span>
                    <button class="quantity-btn" onclick="incrementQuantity('quantity2')">+</button>
                </div>
                <button class="delete-btn" onclick="deleteProduct('product2')">
                    <img src="img/trash/trash-icon.png" alt="Delete" width="20" height="20">
                </button>
            </div>

            <div class="product-card" id="product3">
                <img src="img/trash/product3.jpg" alt="Product 3" class="product-img">
                <div class="product-info">
                    <div class="product-title">Крутая мышка для компьютера 3</div>
                    <div class="product-description">Мышка с уникальным дизайном и высокой точностью.</div>
                    <div class="product-price">9999 руб.</div>
                </div>
                <div class="quantity-controls">
                    <button class="quantity-btn" onclick="decrementQuantity('quantity3')">-</button>
                    <span class="quantity" id="quantity3">1</span>
                    <button class="quantity-btn" onclick="incrementQuantity('quantity3')">+</button>
                </div>
                <button class="delete-btn" onclick="deleteProduct('product3')">
                    <img src="img/trash/trash-icon.png" alt="Delete" width="20" height="20">
                </button>
            </div>

            <button class="checkout-btn" onclick="checkout()">Перейти к оформлению</button>
        </div>
    </div>

    <script>
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
    </script>

</body>
<?php require "blocks/footer.php" ?>
</html>
