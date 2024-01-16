<?php
    class Kennel {
        public $name;
        public $brand;
        public $price;
        public $height;
        public $width;
        public $length;
        public $src_img;

        function __construct($name, $brand, $price, $height, $width, $length, $src_img){
            $this->name = $name;
            $this->brand = $brand;
            $this->price = $price;
            $this->height = $height;
            $this->width = $width;
            $this->length = $length;
            $this->src_img = $src_img;
        }

        public function get_category(){
            return "Cucce";
        }
    }
?>