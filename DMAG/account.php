<?php session_start();

    if (empty($_SESSION['user'])){
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" th:href="@{css/registration.css}">
    <title th:utext="Зарегистрироваться"></title>

    <style>
    <?php include "css/account.css" ?>
    <?php include "css/header.css" ?>
    <?php include "css/footer.css" ?>
    </style>
</head>

<?php require "blocks/header.php" ?>

<body class="body">
    <h1>Делайте страницу)))</h1>
    <ul>
        <li><?php echo "Почта - ". $_SESSION['user']['email']; ?></li>
        <li><?php echo "Пароль - ". $_SESSION['user']['password']; ?></li>
        <li><?php echo "Роль - ". $_SESSION['user']['role']; ?></li>
        <!--<li><php echo "Имя - ". $_SESSION['user']['name']; ?></li>                  это если использвать файл users.php -->
        <li><a href="logout.php">Выйти из аккаунта</a></li>
    </ul>
</body>

<?php require "blocks/footer.php" ?>

</html>
