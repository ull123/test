<?php
    require_once __DIR__ . '/Product.php';
    
    class Watch extends Product
    {
        public function __construct(string $name, string $description, string $price)
        {
            parent::__construct($name, $description, $price);
        }
    }