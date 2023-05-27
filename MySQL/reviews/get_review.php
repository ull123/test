<?php
function getReview($product_id){
    $mysql = require "core/connect.php";
    $sql = "SELECT * FROM `reviews` WHERE product_id = $product_id";
    $res = mysqli_query($mysql,$sql);
    if(!$res){
        echo "Ошибка получения списка отзывов";
        die();
    }
    else{
        $list = [];
        while ($rew = mysqli_fetch_assoc($res)){
            $list[] = $rew;
        }
        return $list;
    }
}