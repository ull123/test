<?php
$product_id = $_GET["id"];
$sql = "DELETE FROM shop WHERE `shop`.`id` = $product_id";
$mysql = require "../core/connect.php";
$res = mysqli_query($mysql,$sql);
if($res){
    $link = "../";
    header("Location: $link");
}
else{
    echo  "Не удалось удалить продукт";
    die();
}