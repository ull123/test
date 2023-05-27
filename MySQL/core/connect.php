<?php
    require_once "config.php";
    $connnect = mysqli_connect(DB_HOST, DB_USER,
        "", DB_NAME, 3306);
    if(!$connnect){
        echo "DB connect error";
        die();
    }
    return $connnect;