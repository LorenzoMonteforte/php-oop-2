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
        public $src_img;

        function __construct($name, $brand, $price, $nutritional_characteristics, $taste, $lifestage, $breed, $size, $src_img){
            $this->name = $name;
            $this->brand = $brand;
            $this->price = $price;
            $this->nutritional_characteristics = $nutritional_characteristics;
            $this->taste = $taste;
            $this->lifestage = $lifestage;
            $this->breed = $breed;
            $this->size = $size;
            $this->src_img = $src_img;
        }

        public function get_category(){
            return "Cibo";
        }
    }
?>