<!-- Проверка нажата ли кнопка "Добавить автомобиль" -->
<?php
   session_start();
   $message = "";
  
//    if($_SESSION['user']['role'] != 'admin'){
//      header('Location: main_page.php');
//    }

//    if(isset($_POST['add-product'])){
//     echo "Кнопка работает";

//     $id = $_POST['product_id'];
//     $category = $_POST['category'];
//     $product_name = $_POST['product_name'];
//     $price = $_POST['price'];
//     $image = $_POST['image'];
//     $availability = $_POST['availability'];
//     $color = $_POST['color'];

//     echo "id = ". $id . "<br>";
//     echo "category = ". $category. "<br>";
//     echo "product name = ". $product_name. "<br>";
//     echo "price = ". $price. "<br>";
//     echo "image = ". $image. "<br>";
//     echo "availability = ". $availability. "<br>";
//     echo "color = ". $color. "<br>";

//    }
 
  if(isset($_POST['add-product']) && !empty($_POST['product_id']) && !empty($_POST['category']) && !empty($_POST['product_name']) 
    && !empty($_POST['price']) && !empty($_POST['image']) && !empty($_POST['availability']) && !empty($_POST['color'])){
    // if (isset($_POST['add-product'])){
    
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = ''; 
    $db_name = 'DMAG';

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (!$conn) {
      die('Ошибка подключения к базе данных:' . mysqli_connect_error());
    }

    $id = $_POST['product_id'];
    $category = $_POST['category'];
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $availability = $_POST['availability'];
    $color = $_POST['color'];
    
    // $query_carInfo = "SELECT ID FROM CarInfo WHERE ID = $ID";
    // $query_carPictures = "SELECT ID FROM CarPictures WHERE CarID = $ID";

    $query = "INSERT INTO products (product_id, category, product_name, price, image, availability, color)
              VALUES ($id, $category, '$product_name', $price, '$image', $availability, '$color')";

    if ($conn->query($query)){
      $message = "Данные успешно добавлены в таблицу products <br />";
    }
    else {
      $message = "В БД уже существует продукт с таким id (products) <br />";
    }


    
    
    
    
    
    // $query_carPictures = "SELECT ID FROM CarPictures WHERE CarID = $ID";
    // $result_carPictures = $conn->query($query_carPictures);
    // if ($result_carPictures->num_rows > 0) {
    //   echo "В БД уже существует машина с таким ID (CarPictures) <br />";
    // } else {
    //   $query = "INSERT INTO CarPictures (CarID, Pic1, Pic2, Pic3, Pic4, Pic5) VALUES ($CarID, '$Pic1', '$Pic2', '$Pic3', '$Pic4', '$Pic5')";
    //   if ($conn->query($query)){
    //     echo "Данные успешно добавлены в таблицу CarPictures <br />";
    //   }
    //   else {
    //     echo "Ошибка, данные не добавлены в таблицу CarPictures <br />";
    //   }
    // }
    $conn->close();
  } 
  else if (isset($_POST['add_product'])){
    echo "Ошибка, вы ввели не все данные";
  }
?>





    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Добавление продукта</title>
        <link rel="stylesheet" href="css/Add.css">
    </head>
    <body>
        <div class="container">
            <h2>Добавление продукта</h2>
            <form method="post">
                <label for="product_id">ID продукта:</label>
                <input type="text" id="product_id" name="product_id" required>
                <label for="category">Категория:</label>
                <input type="text" id="category" name="category" required>
                <label for="product_name">Название продукта:</label>
                <input type="text" id="product_name" name="product_name" required>
                <label for="price">Цена:</label>
                <input type="text" id="price" name="price" required>
                <label for="image">Путь к картинке:</label>
                <input type="text" id="image" name="image" required>
                <label for="availability">Наличие:</label>
                <input type="text" id="availability" name="availability" required>
                <label for="color">Цвет:</label>
                <input type="text" id="color" name="color" required>
                <button type="submit" name="add-product" id="add-product">Добавить элемент</button>
                <?php if(!empty($message)) echo $message ?>
            </form>
        </div>
    </body>
    </html>
