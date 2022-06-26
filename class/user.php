<?php

    //definisco la classe
    class User{
        public $name;
        public $surname;
        public $email;
        public $discount;


        //definisco un costruttore
        public function __construct($_name, $_surname, $_email, $_discount = 0){
            $this->name = $_name;
            $this->surname = $_surname;
            $this->email = $_email;
            $this->discount = $_discount;
        }
    }

    class isUserRegistered extends User{
        public $registered;
        public $discount;
      
        function applyDiscount(){
            if ($this->registered != null) {
                $this->discount = "20%";
            }
        }

        function setRegistered($_registered){
            $this->registered = $_registered;
        }
    }
?>