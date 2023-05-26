<?php
/*Определите типы следующих переменных:
$a = 152;
$b = '152';
$c = 'London';
$d = 15.2;
$e = false;
$f = true;
NULL пустота
*/
$arr =[152, '152', 'London', 15.2, false, true];
foreach ($arr as $el){
    echo gettype($el)." ";
}
var_dump($arr);
echo '"777"';
