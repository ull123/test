<?php
$mysql = require "../core/connect.php";
$sql = "INSERT INTO `shop` (`id`, `title`, `description`, `price`, `count`)
        VALUES (NULL, 'апельсин', 'сладкий, солнечный', '10', '50')";
mysqli_query($mysql, $sql);