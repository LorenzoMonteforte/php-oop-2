<?php
    class Kennel {
        public $name;
        public $brand;
        public $price;
        public $height;
        public $width;
        public $length;

        function __construct($name, $brand, $price, $height, $width, $length){
            $this->name = $name;
            $this->brand = $brand;
            $this->price = $price;
            $this->height = $height;
            $this->width = $width;
            $this->length = $length;
        }

        public function get_category(){
            return "Cuccia";
        }
    }
?>