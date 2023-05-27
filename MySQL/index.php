<?php
$mysql = require "core/connect.php";
$products = mysqli_query($mysql,"SELECT * FROM shop");
$productsList = [];
while ($product = mysqli_fetch_assoc($products)){
    $productsList[] = $product;
}
?>
<pre>
    <?php
   // var_dump($productsList);
    ?>
</pre>


<!doctype html>
<html lang = "ru">
<head>
        <meta charset="UTF-8">
        <title>Магазин</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
<body>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Product name</th>
                <th scope="col">Price</th>
                <th scope="col">Count</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($productsList as $elem){?>
            <tr>
                <th scope="row"><?=$elem["id"]?></th>
                <td><a href="product.php?id=<?=$elem["id"]?>"><?=$elem["title"]?></a></td>
                <td><?=$elem["price"]?></td>
                <td><?=$elem["count"]?></td>
            </tr>
            <?php }?>
            </tbody>
        </table>
    </div>
</body>
</head>
</html>