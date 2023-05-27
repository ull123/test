<?php
    function getProduct($id): array{
        $mysql = require "core/connect.php";
        $product_id = $id;
    
        $products = mysqli_query($mysql,"SELECT * FROM shop WHERE id = $product_id");
    
        if(mysqli_num_rows($products) === 0){
            echo "Ошибка, продукт не найден";
            die();
        }
        else{
            return mysqli_fetch_assoc($products);
        }
    }
