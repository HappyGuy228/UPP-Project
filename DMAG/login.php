<?php 
    session_start();
    $errors = [];
    if (!empty($_SESSION['user'])){
        header('Location: account.php');
    }

    if(isset($_POST['login-button'])){
        if ($_POST['login-email'] == '' || $_POST['input-login-password'] == ''){
            $errors[] = 'Вы ввели не все данные';
        }
        else{
            $db_host = 'localhost';
            $db_user = 'root';
            $db_pass = ''; 
            $db_name = 'DMAG';

            $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

            if (!$conn) {
                die('Ошибка подключения к базе данных:' . mysqli_connect_error());
            }
            else{
                echo "Есть подключение к БД <br />";
            }

            $Email = $_POST['login-email'];
            $Password = $_POST['input-login-password'];
            $md5pass = md5($Password);

            $query = "SELECT * FROM user where email = '$Email' AND password = '$md5pass'";

            $result = $conn->query($query);
            if ($result->num_rows == 1) {

                $data_from_db = $result->fetch_assoc();
                $Role = $data_from_db["role"];
                $Name = $data_from_db["name"];
                $_SESSION['user'] = ['email' => $_POST['email'], 'role' => $Role, 'name' => $Name];
                header('Location: main_window.php');
                
            } else {
                $errors[] = 'Введен неверный email или пароль!';
            }
            $conn->close(); 
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
