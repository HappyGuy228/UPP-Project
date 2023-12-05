<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style><?php include "css/order.css" ?>
  <?php include "css/header.css" ?>
  <?php include "css/footer.css" ?></style>
</head>
<?php require "blocks/header.php" ?>
<body>

  <div class="container">
    <h1>Оформление заказа</h1>

    <div class="section">
      <h2>1. Контактные данные получателя</h2>
      <div class="form-group">
        <label for="fullName">ФИО:</label>
        <input type="text" id="fullName" name="fullName" placeholder="Введите ФИО" required>
      </div>
      <div class="form-group">
        <label for="phone">Телефон:</label>
        <input type="tel" id="phone" name="phone" placeholder="+7" required>
      </div>
    </div>

    <div class="section">
      <h2>2. Способ получения</h2>
      <div class="delivery-options centered-options">
        <button class="option-btn larger-font" id="pickupBtn">Самовывоз</button>
        <button class="option-btn larger-font" id="deliveryBtn">Доставка</button>
      </div>
      <div id="pickupDetails" class="details hidden">
        <label for="pickupLocation">Выбрать пункт самовывоза:</label>
        <select id="pickupLocation" name="pickupLocation">
          <option value="address1">Адрес 1</option>
          <option value="address2">Адрес 2</option>
          <option value="address3">Адрес 3</option>
        </select>
      </div>
      <div id="deliveryDetails" class="details hidden">
        <label for="deliveryLocation">Выбрать место доставки:</label>
        <select id="deliveryLocation" name="deliveryLocation">
          <option value="location1">Место 1</option>
          <option value="location2">Место 2</option>
          <option value="location3">Место 3</option>
        </select>
      </div>
    </div>

    <div class="section">
      <h2>3. Оплата</h2>
      <label for="paymentMethod">Выберите способ оплаты:</label>
      <div class="payment-options centered-options">
        <button class="option-btn larger-font" id="cashBtn">Наличными</button>
        <button class="option-btn larger-font" id="onlineBtn">Онлайн</button>
      </div>
    </div>

    <div class="total-section">
      <h2>Итого: <span id="totalAmount">12345</span></h2>
    </div>

    <button class="submit-btn">Оформить заказ</button>

  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const pickupBtn = document.getElementById('pickupBtn');
      const deliveryBtn = document.getElementById('deliveryBtn');
      const pickupDetails = document.getElementById('pickupDetails');
      const deliveryDetails = document.getElementById('deliveryDetails');

      pickupBtn.addEventListener('click', function () {
        pickupDetails.classList.remove('hidden');
        deliveryDetails.classList.add('hidden');
        pickupBtn.classList.add('active');
        deliveryBtn.classList.remove('active');
      });

      deliveryBtn.addEventListener('click', function () {
        pickupDetails.classList.add('hidden');
        deliveryDetails.classList.remove('hidden');
        pickupBtn.classList.remove('active');
        deliveryBtn.classList.add('active');
      });

      const cashBtn = document.getElementById('cashBtn');
      const onlineBtn = document.getElementById('onlineBtn');

      cashBtn.addEventListener('click', function () {
        cashBtn.classList.add('active');
        onlineBtn.classList.remove('active');
      });

      onlineBtn.addEventListener('click', function () {
        cashBtn.classList.remove('active');
        onlineBtn.classList.add('active');
      });
    });
  </script>

</body>
<?php require "blocks/footer.php" ?>
</html>
