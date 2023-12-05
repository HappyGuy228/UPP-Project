<?php session_start();?>

<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" th:href="@{css/make_order.css}">

    <style>
    <?php include "css/make_order.css" ?>
    <?php include "css/header.css" ?>
    <?php include "css/footer.css" ?>
    </style>
</head>

<?php require "blocks/header.php" ?>

<body class="body">
    <h1>Делайте страницу)))</h1>
    <ul>
        <!-- <script>
            <php 
                $name_product = "<script> document.write(localStorage.getItem('cart')); </script>";
                $amount_product = "<script> document.write(localStorage.getItem('cart[1]')); </script>";

                if ($name_product == null){
                    echo "Error";
                    print_r($name_product);
                }
                else
                    echo $name_product[2];
            ?>
        </script> -->
        <!-- <li><php echo "Почта - ". $_SESSION['user']['email']; ?></li>
        <li><php echo "Пароль - ". $_SESSION['user']['password']; ?></li> -->
    </ul>

    <div id="result"></div>

    <form action="send_mail.php" method="POST">
        <input type="button" value="Отправить письмо" onclick="sendMail()">
    </form>

    <div id="mail_send"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script> 
        //var obj = {};

        //let obj = new Array();
        let obj = {};
        // for (var i = 0; i < localStorage.length; i++) {
        //     //var key = localStorage.key(i);
        //     var key = localStorage.getItem('cart');
        //     obj[key] = localStorage.getItem(key);
        // }






        cart = JSON.parse(localStorage.getItem('cart'));
        var i = 0;
        for (var key in cart) {
            // out += key + ' --- ' + cart[key] + '<br>';
            obj[key] = cart[key]; 
        }
        
 
        /* Отправка через JQuery AJAX */
        $.ajax({
            url: '/make_order_show_products_in_trash.php',
            method: 'post',
            dataType: 'html',
            data: {data: obj},
            success: function(data){
                $('#result').html(data);
            }
        });


        function sendMail(){
            $.ajax({
                url: '/send_mail.php',
                method: 'post',
                dataType: 'html',
                data: {data: obj},
                success: function(data){
                    $('#mail_send').html(data);
                }
            });
        }
    </script>

    
    
</body>

<?php require "blocks/footer.php" ?>

</html>
