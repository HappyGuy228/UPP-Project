<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include "css/oplata.css" ?>
    <?php include "css/header.css" ?>
    <?php include "css/footer.css" ?></style>
</head>
<?php require "blocks/header.php" ?>
<body>

    <div class="payment-header">
        <h1>Оплата заказа</h1>
    </div>

    <div class="payment-container">

        <div class="input-container">
            <label for="contact">Введите номер телефона или email:</label>
            <input type="text" id="contact" placeholder="+7">
        </div>

        <div class="card-container">
            <label for="cardNumber">Номер карты:</label>
            <input type="text" id="cardNumber" placeholder="Введите номер карты">

            <div class="card-details">
                <div class="exp-date">
                    <label for="expiry">Срок действия:</label>
                    <input type="text" id="expiry" placeholder="MM/YY">
                </div>
                <div class="cvv">
                    <label for="cvv">CVV:</label>
                    <input type="text" id="cvv" placeholder="CVV">
                </div>
            </div>
        </div>

        <div class="payment-details">
            <button class="pay-button">Оплатить</button>
            <div class="total-price">Цена товара: 12345р</div>
        </div>

    </div>

</body>
<?php require "blocks/footer.php" ?>
</html>
