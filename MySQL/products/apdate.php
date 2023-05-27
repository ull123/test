<?php
    $p_name =$_POST["title"];
    $p_description =$_POST["description"];
    $p_price =$_POST["price"];
    $p_count =$_POST["count"];
    $p_id = $_POST["id"];
    
    $mysql = require "../core/connect.php";
    
    $sql = "UPDATE `shop` SET
                  `title`='$p_name',
                  `description`='$p_description',
                  `price`='$p_price',
                  `count`='$p_count' WHERE id='$p_id'";
    $res = mysqli_query($mysql, $sql);

    if($res){
        $link = "../product.php?id=$p_id";
        header("Location: $link");
    }
    else{
        echo  "Не удалось изменить продукт";
        die();
    }
