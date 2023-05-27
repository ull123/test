<?php
    require_once "products/getProduct.php";
    require_once "reviews/get_review.php";
    $product_id = $_GET["id"];
    $review_list = getReview($product_id);
    $product = getProduct($product_id);
    //var_dump($products);
?>
<!doctype html>
<html lang = "ru">
<head>
    <meta charset="UTF-8">
    <title>Продукт</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
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
    
    <h2>Reviews</h2>
    <?php foreach($review_list as $review){ ?>
    <div class="card w-75 mb-2">
        <div class="card">
            <div class="card-header">
                <?=$review["username"]?>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p><?=$review["review_text"]?></p>
                </blockquote>
            </div>
        </div>
    </div>
    <?php } ?>
    <form action="reviews/store.php" method="post" class="w-50 mt-3">
        <input type="hidden" name="product_id" value="<?=$product_id?>">
        <div class="form-group">
            <label for="username">Your name</label>
            <input type="text" name="user_name" class="form-control" id="username">
        </div>
        <div class="form-group">
            <label for="review">Text</label>
            <textarea class="form-control" id="review_text" name="review_text" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Add new review</button>
    </form>
    </div>
</body>
</html>