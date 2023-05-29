<?php
    require_once __DIR__ . '/Product.php';
    require_once __DIR__ . '/Watch.php';
    require_once __DIR__ . '/Fruits.php';
    

$watch = new Watch("Apple Watch Series 7",'Best of the best smart watch',399);
$banan = new Fruits("Банан", 'Сладкие бананы', 130);

?>
<pre>
<?php
print_r($watch->info());
print_r($banan->info());
?>
</pre>