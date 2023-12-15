<?php session_start(); ?>
    

<?php

if ($_SESSION['user']['role'] != 'admin'){
    header("Location: main_page.php");
    exit();
}

if(isset($_POST['delete-product'])){
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = ''; 
    $db_name = 'DMAG';

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (!$conn) {
      die('Ошибка подключения к базе данных:' . mysqli_connect_error());
    }

    $info_product = $_POST['delete-product'];

    $query = "DELETE FROM products WHERE product_id = $info_product";

    if ($conn->query($query)){
      echo "";
    }
    else {
      echo "Ошибка запроса к бд <br />";
    }




    $query = "SELECT product_id, category, product_name, price, image FROM products";

    if ($conn->query($query)){
      echo "";
    }
    else {
      echo "Ошибка запроса к бд <br />";
    }

    $result = mysqli_query($conn, $query);

}

else{
    // try {
    //     $db = new PDO('sqlite:../ekzdb.db');
    // } catch (PDOException $e) {
    //     die('Connection failed: ' . $e->getMessage());
    // }
    // $stmt = $db->prepare('SELECT * FROM student');
    // $stmt->execute();
    // $data = $stmt->fetchAll(PDO::FETCH_ASSOC);


    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = ''; 
    $db_name = 'DMAG';

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (!$conn) {
      die('Ошибка подключения к базе данных:' . mysqli_connect_error());
    }

    $query = "SELECT product_id, category, product_name, price, image FROM products";

    if ($conn->query($query)){
      echo "";
    }
    else {
      echo "Ошибка запроса к бд <br />";
    }

    $result = mysqli_query($conn, $query);
}
?> 






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ панель</title>
    
    <style>
    <?php include "css/adminPanel.css" ?>
    <?php include "css/header.css" ?>
    <?php include "css/footer.css" ?>
    </style>
</head>
<body>
    <div class="container">
        <h2>Таблица "Products"</h2>
        <table border="1">
            <tr>
                <th>Категория</th>
                <th>Название</th>
                <th>Цена</th>
                <th>Место хранения фотографии</th>
                <!-- <th>Описание</th> -->
                <!-- <th>First_name</th>
                <th>Group_number</th>
                <th>Действия</th> -->
            </tr>
            <!-- <php foreach ($data as $row): ?>
                <tr>
                    <td>
                        <php echo $row['student_id']; ?>
                    </td>
                    <td>
                    <php echo $row['user_id']; ?>
                    </td>
                    <td>
                        <php echo $row['last_name']; ?>
                    </td>
                    <td>
                        <php echo $row['first_name']; ?>
                    </td>
                    <td>
                        <php echo $row['group_number']; ?>
                    </td>
                    <td>
                        <a href="../db_action/edit.php?action=editElementStudent&id=<php echo $row['student_id']; ?>"
                            class="edit-link">Изменить</a>
                        <a href="../db_action/delete.php?action=deleteElementFromStudent&id=<php echo $row['student_id']; ?>"
                            class="delete-link">Удалить</a>
                    </td>
                </tr>
            <php endforeach; ?> -->
            <?php while ($row = mysqli_fetch_assoc($result)) {
                $category = $row['category'];
                $product_name = $row['product_name'];
                $price = $row['price'];
                $image = $row['image'];
                $product_id = $row['product_id'];

                echo "<tr>
                    <td> $category </td>
                    <td> $product_name </td>
                    <td> $price </td>
                    <td> $image </td>
                    <td> 
                        <form method='POST' action=''>
                            <button type='submit' name='delete-product' id='delete-product' value='$product_id' >Удалить</button>
                        </form>
                    </td>
                </tr>";
            }
            ?>
        </table>
        <!-- <p><a href="../db_action/add.php?action=addElementToStudent" class="add-element-link">Добавить элемент</a></p>-->
        <p><a href="Add.php" class="add-element-link">Добавить элемент</a></p>
        <form class="logout-form" method="post" action="logout.php">
            <button type="submit" name="logout">Выйти</button>
        </form>
    </div>
</body>
</html>
