<?php
    class Product {
        public $animal;
        public $category;

        function __construct($animal, $category){
            $this->animal = $animal;
            $this->category = $category;
        }
    }
?>