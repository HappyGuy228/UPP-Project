<?php session_start();
    $errors = [];

    if (!empty($_SESSION['user'])){
        header('Location: account.php');
    }

    if(isset($_POST['reg-but'])){
        if($_POST['reg-name'] == '' || $_POST['reg-email'] == '' || $_POST['reg-pass'] == '' || $_POST['reg-pass-acc'] == ''){
            $errors[] = 'Вы ввели не все данные';
        }
        else if($_POST['reg-pass'] != $_POST['reg-pass-acc']){
            $errors[] = 'Пароли не совпадают';
        }
        else if($_POST['reg-name'] != '' && $_POST['reg-email'] != '' && $_POST['reg-pass'] != '' && $_POST['reg-pass-acc'] != '' && ($_POST['reg-pass'] == $_POST['reg-pass-acc'])){
            $db_host = 'localhost';
            $db_user = 'root';
            $db_pass = ''; 
            $db_name = 'DMAG';

            $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

            if (!$conn) {
                die('Ошибка подключения к базе данных:' . mysqli_connect_error());
            }

            $Email = $_POST['reg-email'];

            $query = "SELECT user_id FROM user where email = '$Email'";

            $result = $conn->query($query);
            if ($result->num_rows > 0) {
                $errors[] = 'Пользователь с такой почтой уже существует';
            } else {
                $Name = $_POST['reg-name'];
                $Email = $_POST['reg-email'];
                $Password = $_POST['reg-pass'];
                $Role_ID = 'user';

                $query = "INSERT INTO user (user_name, email, phone, address, password, role)
                VALUES ('$Name', '$Email', '', '', '$Password', '$Role_ID')";

                if ($conn->query($query)){
                    echo "Вы успешно зарегистрировались на сайте <br />";
                    header('Location: account.php');
                    $_SESSION['user'] = ['email' => $_POST['reg-email'], 'name' => $_POST['reg-name'], 'role' => $Role_ID];
                }
                else {
                    $errors[] = 'Произошла ошибка при регистрации';
                }
                $conn->close(); 
            }
        }
        else{
            $errors[] = 'Произошла неизвестная ошибка';
        }
    }
?>

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
        <form id="register" class="input-group" method="POST">
            <input class="input-registration-name" name="reg-name" type="text" placeholder="Имя" required>
            <input class="input-registration-email" name="reg-email" type="text" placeholder="Email" required>
            <input class="input-registration-password" name="reg-pass" type="password" placeholder="Пароль" required>
            <input class="input-registration-accept_password" name="reg-pass-acc" type="password" placeholder="Подтверждение пароля" required>
            <button type="submit" class="register-button" name="reg-but">Зарегистрироваться</button>
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
