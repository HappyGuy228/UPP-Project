<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" th:href="@{css/registration.css}">-->
    <title th:utext="Зарегистрироваться"></title>

    <!--<div style="text-align: right;padding:5px;margin:5px 0px;background:#ccc;">
        <a th:href="@{/registration?lang=en}">Login (English)</a>
        &nbsp;|&nbsp;
        <a th:href="@{/registration?lang=ru}">Login (Russian)</a>
    </div>                                                                          ЕЩЁ ПОНАДОБИТСЯ--> 

    <style>
    <?php include "css/registration1.css" ?>
    <?php include "css/header.css" ?>
    <?php include "css/footer.css" ?>
    </style>
</head>

<?php require "blocks/header.php" ?>

<body class="body">
    <div class="container">
        <h1 text="Регистрация"></h1>
        <form id="register" class="input-group">
            <input type="text" placeholder="Имя" required>
            <input type="text" placeholder="Email" required>
            <input type="password" placeholder="Пароль" required>
            <input type="text" placeholder="Подтверждение пароля" required>
            <button type="button" class="register-button">Зарегистрироваться</button>
        </form>
    </div>
</body>

<?php require "blocks/footer.php" ?>

</html>