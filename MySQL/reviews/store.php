<?php
    $mysql = require "../core/connect.php";
    $product_id = $_POST["product_id"];
    $review_text = $_POST["review_text"];
    $user_name = $_POST["user_name"];
    $sql = "INSERT INTO `reviews` (`id`, `username`, `review_text`, `product_id`)
                            VALUES (NULL, '$user_name', '$review_text', '$product_id');";
    $res = mysqli_query($mysql,$sql);
    
    if(!$res){
        echo "Ошибка, отзыв не добавлен в базу данных";
        die();
    }
    else{
        $link = "../product.php?id=$product_id";
        header("Location: $link");
    }