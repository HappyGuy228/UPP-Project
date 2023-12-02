<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
    <?php include "css/registration1.css" ?>
    <?php include "css/header.css" ?>
    <?php include "css/footer.css" ?>
    </style>
</head>

<title class="registration-title">Зарегистрироваться</title>

<?php require "blocks/header.php" ?>

<body class="body">
    <div class="container">
        <h1 class="registration-registration">Регистрация</h1>
        <form id="register" class="input-group">
            <input class="input-registration-name" type="text" placeholder="Имя" required>
            <input class="input-registration-email" type="text" placeholder="Email" required>
            <input class="input-registration-password" type="password" placeholder="Пароль" required>
            <input class="input-registration-accept_password" type="text" placeholder="Подтверждение пароля" required>
            <button  type="button" class="register-button">Зарегистрироваться</button>
        </form>
    </div>
    <script type='text/javascript' src="js/app.js"></script>
</body>

<?php require "blocks/footer.php" ?>

</html>
