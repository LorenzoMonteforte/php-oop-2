<?php
    class User {
        public $name;
        public $surname;
        public $email;
        public $password;

        function __construct($name, $surname, $email, $password){
            $this->name = $name;
            $this->surname = $surname;
            $this->email = $email;
            $this->password = $password;
        }
    }

    $user1 = new User("Lorenzo", "Monteforte", "lorenzomonteforte@gmail.com", "lorimonte");
    $user2 = new User("Nicole", "Gatto", "nicolegatto@gmail.com", "nicolegatto");
    $user = [$user1, $user2];
?>