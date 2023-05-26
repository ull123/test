<?php
    session_start();
    
    $_SESSION["test"]="some text";
    
    echo $_SESSION["test"];
    unset($_SESSION["test"]);//удалить данные
    session_unset(); //очистить все данные в сессии
    //session_id
    session_destroy();//уничтожить сессию
    
