<?php
    class Animal {
        public $name;
        public $trinomial_nomenclature;

        function __construct($name, $trinomial_nomenclature){
            $this->name = $name;
            $this->trinomial_nomenclature = $trinomial_nomenclature;
        }

        public function get_name(){
            return $this->name;
        }
    }

    $dog = new Animal("Cane", "Canis lupus familiaris");
    $cat = new Animal("Gatto", "Felis silvestris catus");
?>