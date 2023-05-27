<?php
$p_name =$_POST["title"];
$p_description =$_POST["description"];
$p_price =$_POST["price"];
$p_count =$_POST["count"];

$mysql = require "../core/connect.php";
$sql = "INSERT INTO `shop` (`id`, `title`, `description`, `price`, `count`)
        VALUES (NULL, '$p_name', '$p_description', '$p_price', '$p_count')";
$res = mysqli_query($mysql, $sql);
$id = mysqli_insert_id($mysql);
$link = "../product.php?id=$id";
header("Location: $link");