<?php
    class Food {
        public $name;
        public $brand;
        public $price;
        public $nutritional_characteristics;
        public $taste;
        public $lifestage;
        public $breed;
        public $size;

        function __construct($name, $brand, $price, $nutritional_characteristics, $taste, $lifestage, $breed, $size){
            $this->name = $name;
            $this->brand = $brand;
            $this->price = $price;
            $this->nutritional_characteristics = $nutritional_characteristics;
            $this->taste = $taste;
            $this->lifestage = $lifestage;
            $this->breed = $breed;
            $this->size = $size;
        }

        public function get_category(){
            return "Cibo";
        }
    }
?>