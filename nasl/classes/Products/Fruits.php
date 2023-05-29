<?php
    require_once __DIR__ . '/Product.php';
  //  namespace "nasl/classes/Products/Fruits.php";
    
    class Fruits extends Product
    {
        public function __construct(string $name, string $description, string $price)
        {
            parent::__construct($name, $description, $price);
        }
    
        public function priceForWeight(float|int $kilogram = 1): float|int{
            return $this->price * $kilogram;
        }
    
        public function info(): array{
            return [
                'name' => $this->name,
                'description' => $this->description,
                'price' => "$this->price/кг",
                'priceWithoutTax' => $this->price * ((100 - self::TAX) / 100)
            ];
        }
    }