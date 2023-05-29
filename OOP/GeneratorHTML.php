<?php
    
    
    class GeneratorHTML
    {
        public $width;
        public $height;
        public $color;
        public $count;
        
        public function __construct(int|float $width = 10,int|float $height = 10, $color = "#000", $count = 1){
            $this->width = $width;
            $this->height = $height;
            $this->color = $color;
            $this->count = $count;
        }
        
        public function showHTML(){
            for($i = 0; $i < $this->count; $i++){
                echo $this->getHTML();
            }
        }
        
        public function getHTML(){
            return "<div style='margin: 10px;
                                width: {$this->width}px;
                                height: {$this->height}px;
                                background: {$this->color};'></div>";
        }
        
        public function setColor(?string $color): void{
            $this->color = $color;
        }
    }