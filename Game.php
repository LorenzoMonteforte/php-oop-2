<?php
    class Game {
        public $name;
        public $brand;
        public $price;
        public $lifestage;

        function __construct($name, $brand, $price, $lifestage){
            $this->name = $name;
            $this->brand = $brand;
            $this->price = $price;
            $this->lifestage = $lifestage;
        }

        public function get_category(){
            return "Giochi";
        }
    }
?>