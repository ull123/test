<?php
    require_once "products/getProduct.php";
    $product_id = $_GET["id"];
    
    $product = getProduct($product_id);
?>

<!doctype html>
<html lang = "ru">
<head>
    <meta charset="UTF-8">
    <title>Update product <?=$product["title"]?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<body>
<div class="container">
    <h3>Update product <?=$product["title"]?></h3>
    
    <form action="products/apdate.php" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Product name</label>
            <input type="text" class="form-control" id="title" name="title" value="<?=$product["title"]?>">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Product description</label>
            <textarea type="text" class="form-control" id="description" name="description"><?=$product["description"]?></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Product price</label>
            <input type="number" class="form-control" id="price" name="price" value="<?=$product["price"]?>">
        </div>
        <div class="mb-3">
            <label for="count" class="form-label">Product count</label>
            <input type="number" class="form-control" id="count" name="count" value="<?=$product["count"]?>">
        </div>
        <input type="hidden" class="form-control" id="id" name="id" value="<?=$product_id?>">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
</body>
</head>
</html>