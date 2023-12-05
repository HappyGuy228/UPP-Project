<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отзыв о сайте</title>
    <style><?php include "css/otzv.css" ?>
    <?php include "css/header.css" ?>
    <?php include "css/footer.css" ?></style>
</head>
<?php require "blocks/header.php" ?>
<body>

<div class="review-container">
    <form>
        <div class="input-group">
            <label for="name">ФИО:</label>
            <input type="text" id="name" placeholder="Введите ваше ФИО">
        </div>

        <div class="input-group">
            <label for="emailPhone">Email или телефон:</label>
            <input type="text" id="emailPhone" placeholder="Введите ваш Email или телефон">
        </div>

        <div class="input-group">
            <label for="address">Адрес:</label>
            <input type="text" id="address" placeholder="Введите ваш адрес">
        </div>

        <div class="input-group">
            <label for="review">Отзыв:</label>
            <textarea id="review" placeholder="Напишите ваш отзыв"></textarea>
        </div>

        <button type="button" class="submit-btn">Опубликовать отзыв</button>
    </form>
</div>

</body>
<?php require "blocks/footer.php" ?>
</html>
