<?php
    require __DIR__ . "/Animal.php";
    require __DIR__ . "/Food.php";
    require __DIR__ . "/Game.php";
    require __DIR__ . "/Kennel.php";
    class Product {
        public $animal;
        public $category;

        function __construct($animal, $category){
            $this->animal = $animal;
            $this->category = $category;
        }
    }

    $product1 = new Product($dog, new Food("Monge All Breeds Adult Salmone e Riso", "MONGE", "49,99€", "Monoproteico", "Salmone", "Adulto", "Tutte le razze", "Tutte le taglie"));
    $product2 = new Product($dog, new Game("Gioco per Cane in Stoffa Peluche con Squittio", "TRIXIE", "5,90€", "Adulto"));
    $product3 = new Product($dog, new Kennel("Canile in Legno Habitat", "PET AROUND YOU", "99,99€", "100cm", "150cm", "100cm"));
    $product4 = new Product($cat, new Food("Natural Trainer Gatto Sterilised Salmone", "NATURAL TRAINER", "2,70€", null, "Salmone", "Adulto", "Tutte le razze", null));
    $product5 = new Product($cat, new Game("Cannetta Topolino con Piume", "YES", "1,20€", "Adulto"));
    $product6 = new Product($cat, new Kennel("Siesta Deluxe Dark Grey", "FERPLAST", "13,99€", "100cm", "150cm", "100cm"));
    $products = [$product1, $product2, $product3, $product4, $product5, $product6];
?>