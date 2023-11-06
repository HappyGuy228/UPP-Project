<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $host = "localhost";
    $port = "3306";
    $dbname = "SANYA";
    $user = "SANYA";
    $password = "SANYA";

    $connection = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
    if (!$connection) {
        echo "Error";
        exit;
    }
    else{
        echo "connected";
    }


    // Страница для наушников



    ?>
</body>
