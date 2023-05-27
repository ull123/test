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
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($productsList as $elem){?>
            <tr>
                <th scope="row"><?=$elem["id"]?></th>
                <td><a href="product.php?id=<?=$elem["id"]?>"><?=$elem["title"]?></a></td>
                <td><?=$elem["price"]?></td>
                <td><?=$elem["count"]?></td>
                <td>
                    <a href="editProduct.php?id=<?=$elem["id"]?>" class="btn btn-success">Edit</a>
                    <a href="products/delete.php?id=<?=$elem["id"]?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php }?>
            </tbody>
        </table>
    
    <form action="products/store.php" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Product name</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="Product name...">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Product description</label>
            <textarea type="text" class="form-control" id="description" name="description"aria-describedby="Product description..."></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Product price</label>
            <input type="number" class="form-control" id="price" name="price" aria-describedby="Product price...">
        </div>
        <div class="mb-3">
            <label for="count" class="form-label">Product count</label>
            <input type="number" class="form-control" id="count" name="count" aria-describedby="Product count...">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
    </div>
</body>
</head>
</html>