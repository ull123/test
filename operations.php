<?php
/*ссылки*/
$foo = "foo";
$bar =& $foo;

echo $foo.$bar;
echo "\n";
/*константы*/
define("NAME_CONST", "VALUE_CONST");
echo NAME_CONST;