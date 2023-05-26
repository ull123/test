<?php
session_start();
//print_r($_SESSION);
$user_id = $_SESSION["user_id"] ?? NULL;
$users = require "data/users.php";

$auth = false;
$name = NULL;

foreach ($users as $user){
    if($user["id"] === $user_id){
        $name = $user['name'];
        $auth = true;
    }
}
if(!$auth){
    echo "Error Auth";
}else{
    echo  "<h2>Wellcom, $name</h2>";
}
?>