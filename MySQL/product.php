<?php
    $mysql = require "core/connect.php";
    $product_id = $_GET["id"];
    
    $products = mysqli_query($mysql,"SELECT * FROM shop WHERE id = $product_id");
    
    if(mysqli_num_rows($products) === 0){
        echo "Ошибка, продукт не найден";
        die();
    }
    else{
        $product = mysqli_fetch_assoc($products);
    }
    
    var_dump($products);
?>
<!doctype html>
<html lang = "ru">
<head>
    <meta charset="UTF-8">
    <title>Продукт</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<body>
    <div class="container">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4"><?=$product["title"]?></h1>
                <p class="lead">Description: <?=$product["description"]?></p>
                <p class="lead">Price: <?=$product["price"]?>$</p>
                <p class="lead">Count: <?=$product["count"]?></p>
            </div>
        </div>
    </div>
</body>
</head>
</html>