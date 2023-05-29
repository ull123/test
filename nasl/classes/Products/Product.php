<?php
    
    
    class Product
    {
        protected string $name;
        protected string $description;
        protected float $price;
        protected const  TAX = 20;
    
        public function __construct(string $name, string $description, string $price){
            $this->name = $name;
            $this->description = $description;
            $this->price = $price;
        }

        public function info(): array{
            return [
                'name' => $this->name,
                'description' => $this->description,
                'price' => $this->price,
                'priceWithoutTax' => $this->price * ((100 - self::TAX) / 100)
            ];
        }
    }