<?php
    class Animal {
        public $name;
        public $trinomial_nomenclature;
        public $src_img;

        function __construct($name, $trinomial_nomenclature, $src_img){
            $this->name = $name;
            $this->trinomial_nomenclature = $trinomial_nomenclature;
            $this->src_img = $src_img;
        }

        public function get_name(){
            return $this->name;
        }
    }

    $dog = new Animal("Cane", "Canis lupus familiaris", "https://us.123rf.com/450wm/ironsv/ironsv1909/ironsv190901352/132520520-icona-del-cane-simbolo-vettoriale-per-il-tuo-design.jpg");
    $cat = new Animal("Gatto", "Felis silvestris catus", "https://static.vecteezy.com/ti/vettori-gratis/p3/10145432-gatto-icona-vettore-isolato-simbolo-contorno-illustrazione-vettoriale.jpg");
?>