<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" th:href="@{css/entrance1.css}">                             РАБОТАЛО В JAVA !!!!!!!!!!!!!!!-->
    <!--<link rel="stylesheet" type="text/css" th:href="@{/css/header2.css}">               РАБОТАЛО В JAVA !!!!!!!!!!!!!!!-->
    <!--<link rel="stylesheet" type="text/css" th:href="@{/css/footer.css}">                РАБОТАЛО В JAVA !!!!!!!!!!!!!!!-->

    <style>
    <?php include "css/login.css" ?>
    <?php include "css/header.css" ?>
    <?php include "css/footer.css" ?>
    </style>

    <title th:utext="#{label.entrance}"></title>
    
</head>

<?php require "blocks/header.php" ?>

<body class="login-body">

    <!-- СКРИПТ ДОБАВЛЕНИЯ ГУГЛ ПЕРЕВОДЧИКА !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <!--<div id="google_element"></div>
    <script type="text/javascript">
        function loadGoogleTranslate(){
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>-->
    <!------------------------------------------------------------ -->



    <!--<div class="container">
        <h1 th:utext="#{label.entrance}"></h1>
        <a class="register" th:utext="#{label.registration}" th:href="'/registration/' + ${lang}"></a>
        <form id="login" class="input-group">
            <input type="text" th:placeholder="#{label.email_phone_number}" required>
            <input type="password" th:placeholder="#{label.password1}" required>
            <button type="submit" class="login-button" th:utext="#{label.enter}"></button>
        </form>
    </div>-->
    <div class="container">
        <h1>Вход</h1>
        <a class="register" href="/registration.php">Регистрация</a>
        <form id="login" class="input-group" method="post" action="/auth.php">
            <input type="text" placeholder="Email" name="email" required />
            <input type="password" placeholder="Пароль" name="password" required />
            <!--<form action="/auth.php" target="_blank">
                <button type="submit" class="login-button">Войти</button>
            </form>-->
            <!--<button class="login-button" onclick="location.href='https://www.youtube.com'">Войти</button>-->
            <button class="login-button" type="submit" onclick="window.location.href='/auth.php'">Войти</button>
            <!-- <input class="login-button" type="submit" >Войти</button> -->
        </form>
    </div>
</body>

<?php require "blocks/footer.php" ?>

</html>