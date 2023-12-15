<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <style><?php include "css/cabinet.css" ?>
    <?php include "css/header.css" ?>
    <?php include "css/footer.css" ?></style>
</head>
<?php require "blocks/header.php" ?>
<body>
    <div class="container">
        <div class="main-content">
            <h1>Профиль</h1>
            <div class="user-container">
                <div class="user-info">
                    <div class="user-avatar">
                        <img src="img/cabinet/p2.jpg" alt="User Image">
                    </div>
                    <div class="user-name">Александр</div>
                    <div class="user-email">
                        <span>Email:</span>
                        <span>alexander@example.com</span>
                    </div>
                    <div class="user-phone">
                        <span>Телефон:</span>
                        <span>+7 (123) 456-7890</span>
                    </div>
                    <div class="user-address">
                        <span>Адрес:</span>
                        <span>Кузьминки 77, д7</span>
                    </div>
                </div>
            </div>
            <div class="logout-btn">Выйти</div>
        </div>
    </div>
</body>
<?php require "blocks/footer.php" ?>
</html>
