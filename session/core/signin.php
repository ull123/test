<?php
session_start();
$login = $_POST["login"];
$password = $_POST["password"];

$users = require "../data/users.php";

foreach ($users as $user){
    if(
        $user["login"] === $login &&
        $user["password"] === $password
        ){
            $_SESSION["user_id"] = $user["id"];
            echo "Авторизация пройдена";
            die();
        }
    echo "Ошибка авторизации";
}