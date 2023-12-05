 <?php 
    session_start();

    $errors = [];
    if (!empty($_SESSION['user'])){
        header('Location: account.php');
    }

    if (!empty($_POST['email']) && !empty($_POST['password'])){
        if ($_POST['email'] == '123@mail.com' && $_POST['password'] == '123'){                          // Саня, это тебе: Здесь вместо 123@mail.com и 123 будет запрос в бд для поиска клиента в бд
            $_SESSION['user'] = ['email' => $_POST['email'], 'password' => $_POST['password']];         // Занесение информации о пароле и почте в сессию
            header('Location: account.php');
            die;
        }
        else{
            $errors[] = 'Неверный логин или пароль';
        }
    }
?>





<!-- Здесь принцип работы с условной "БД", где данные о пользователях хранятся в файле users.php, но на практике это отстой !!!!!!!!!!!-->

<!--<php 
    session_start();

    $users = require_once 'users.php';

    $errors = [];
    if (!empty($_SESSION['user'])){
        header('Location: account.php');
    }

    if (!empty($_POST['email']) && !empty($_POST['password'])){
        foreach ($users as $user){
            if ($user['email'] == $_POST['email'] && $user['password'] == $_POST['password']) { 
                $_SESSION['user'] = $user;
                header('Location: account.php');
                die;
            }
        }
        $errors[] = 'Неверный логин или пароль';
    }
?>-->



<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title class="login-title">Войти</title>

    <style>
    <?php include "css/login.css" ?>
    <?php include "css/header.css" ?>
    <?php include "css/footer.css" ?>
    </style>

</head>


<?php require "blocks/header.php" ?>


<body class="login-body">
    <div class="container">
        <h1 class="login-text">Вход</h1>
        <a class="register" href="/registration.php">Регистрация</a>
        <form id="login" class="input-group" method="POST">
            <input type="text" class="login-email" placeholder="Email" id="email" name="email" required />
            <input type="password" class="input-login-password" placeholder="Пароль" id="password" name="password" required />
            <button class="login-button" type="submit" onclick="window.location.href='/login.php'">Войти</button>
            <ul>
                <?php foreach($errors as $error): ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </form>
        
    </div>
    <script type='text/javascript' src="js/app.js"></script>
    
</body>

<?php require "blocks/footer.php" ?>

</html>
