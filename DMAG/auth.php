<?php 
if (isset($_POST["email"]) && isset($_POST["email"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    if (($email == "123@mail.com") && ($password == "123")){    // Здесь вместо 123@mail.com и 123 будет запрос в бд для поиска клиента в бд
        setcookie('role', 'user', time() + 30, '/');            // Здесь вместо значения 123 должен быть id клиента из бд, относительно этого id будут браться данные о почте, номере телефона клиента и т.д. на странице личного кабинета ну или даже при заказе товара))
        //Здесь должен быть запрос в бд, в котором будет занесение "роли" клиента в бд как user. Думаю в будщем будет еще одна роль - админ
    }
    header('Location: /login.php'); 
}
else
    header('Location: /login.php'); 
?>