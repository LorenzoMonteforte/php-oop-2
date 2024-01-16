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

    $product1 = new Product($dog, new Food("Monge All Breeds Adult Salmone e Riso", "MONGE", 49.99, "Monoproteico", "Salmone", "Adulto", "Tutte le razze", "Tutte le taglie", "https://arcaplanet.vtexassets.com/arquivos/ids/270797/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.jpg?v=637852830908370000"));
    $product2 = new Product($dog, new Game("Gioco per Cane in Stoffa Peluche con Squittio", "TRIXIE", 5.90, "Adulto", "https://arcaplanet.vtexassets.com/arquivos/ids/218063/https---www.arcaplanet.it-media-catalog-product--t-r-trixie-cane-in-tessuto-peluche-tric78.jpg?v=637454594866330000"));
    $product3 = new Product($dog, new Kennel("Canile in Legno Habitat", "PET AROUND YOU", 99.99, "100cm", "150cm", "100cm", "https://arcaplanet.vtexassets.com/arquivos/ids/216810/https---www.arcaplanet.it-media-catalog-product--b-a-baita-ferc14_1.jpg?v=637454582539930000"));
    $product4 = new Product($cat, new Food("Natural Trainer Gatto Sterilised Salmone", "NATURAL TRAINER", 2.70, null, "Salmone", "Adulto", "Tutte le razze", null, "https://arcaplanet.vtexassets.com/arquivos/ids/248329/trainer-natural-gatto-sterilized-salmone.jpg?v=637455046340470000"));
    $product5 = new Product($cat, new Game("Cannetta Topolino con Piume", "YES", 1.20, "Adulto", "https://arcaplanet.vtexassets.com/arquivos/ids/209705/YES--Cannetta-per-gatti-con-topolino-e-piume.jpg?v=637413990472970000"));
    $product6 = new Product($cat, new Kennel("Siesta Deluxe Dark Grey", "FERPLAST", 13.99, "100cm", "150cm", "100cm", "https://arcaplanet.vtexassets.com/arquivos/ids/226704/ferplast-cane-siesta-deluxe-grigio.jpg?v=637454785532070000"));
    $products = [$product1, $product2, $product3, $product4, $product5, $product6];
?>