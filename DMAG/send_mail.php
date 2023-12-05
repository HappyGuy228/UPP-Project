<!-- При помощи этого файла выводятся товары, которые находятся в корзине -->







<?php session_start();?>

<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" th:href="@{css/make_order.css}">
    <title th:utext="Зарегистрироваться"></title>

    <style>
    <?php include "css/make_order_show_products_in_trash.css" ?>
    </style>
</head>

<body class="body">

    <?php
        $subject = "Заказ";
        $to = "silver_gosling@mail.ru";
        $from = "silver_gosling@mail.ru";

        $message1 = "<div> Hello world </div>";

        $message = htmlspecialchars($message1);
        $message = urldecode($message);
        $message = trim($message);  

        $headers = "From: $from" . "\r\n" .
        "Reply-To: $from" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();     // Необязательно делать header

        if(mail($to, $subject, $message, $headers)){
            echo "Письмо отправлено";
        }
        else{
            echo "Ошибка доставки";
        }
    ?>

</body>

</html>
