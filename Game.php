<?php
    class Game {
        public $name;
        public $brand;
        public $price;
        public $lifestage;
        public $src_img;

        function __construct($name, $brand, $price, $lifestage, $src_img){
            $this->name = $name;
            $this->brand = $brand;
            $this->price = $price;
            $this->lifestage = $lifestage;
            $this->src_img = $src_img;
        }

        public function get_category(){
            return "Giochi";
        }
    }
?>