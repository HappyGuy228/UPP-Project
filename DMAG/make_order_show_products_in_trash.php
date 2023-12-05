<!-- При помощи этого файла выводятся товары, которые находятся в корзине -->







<?php session_start();?>

<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" th:href="@{css/make_order.css}">

    <style>
    <?php include "css/make_order_show_products_in_trash.css" ?>
    </style>
</head>

<body class="body">

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script> 
        var cart = JSON.parse(localStorage.getItem('cart'));
        var out="";
        var products="";
        var amount_elements = 0;
        
        for (var key in cart) {
            out += key + ' --- ' + cart[key] + '<br>';
            //out += key + ' --- ' + cart[key];
            ++amount_elements;

        }

        $.ajax({
		url: '/justfortest3.php',
		method: 'post',
		dataType: 'html',
		data: {data: obj},
		success: function(data){
			$('#result').html(data);
            //alert(data);
		}
	    });
    </script> -->

    <?php
        if (empty($_POST['data'])) {
            echo 'Корзина пуста';
        } else {
            //echo '<pre>' . print_r($_POST['data'], true) . '</pre>';
            echo "<div>В корзине находятся товары: </div>";

            // $data = $_POST['data']['cart'];
            // echo $data;
            // foreach ($data as $key => $key1){
            //     echo "hello " . $key . " info " . $key1 ."<br>\r\n";
            // }
            //echo $_POST['data']['cart'][0];

            $data = $_POST['data'];
            foreach ($data as $key => $key1){
                echo "Название товара: " . $key . " - количество " . $key1 ."<br>\r\n";
            }

            //$subject = "Заказ из магазина";
        }
        
        exit();
    ?>

    <!--<php echo ?>-->

    
    
</body>

</html>
