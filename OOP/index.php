<?php
require_once "GeneratorHTML.php";
/*$generator = new GeneratorHTML();
$generator->width = 100;
$generator->height = 100;
$generator->count = 4;
$generator->color = "green";

echo $generator->showHTML();*/

$html = new GeneratorHTML(100, 100, 'green', 2);
$html->showHTML();
$html->color = 'red';
$html->showHTML();
$html->setColor("red");
$html->showHTML();