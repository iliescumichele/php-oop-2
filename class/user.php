<?php

    //definisco la classe
    class User{
        public $name;
        public $surname;
        public $email;
        public $discount;
        public $creditCard;
        public $creditCardExpirationYear;
        public $transaction;



        //definisco un costruttore
        public function __construct($_name, $_surname, $_email, $_discount = 0, $_creditCard, $_creditCardExpiration, $_transaction){
            $this->name = $_name;
            $this->surname = $_surname;
            $this->email = $_email;
            $this->discount = $_discount;
            $this->$creditCard = $_$creditCard;
            $this->$creditCardExpiration = $_creditCardExpiration;
            $this->$transaction = $_transaction;

        }

        public function isCreditCardValid(){
            if (($this->creditCardExpirationYear - 2022) < 0){
                $this->transaction = "Card is valid";
            } else{
                $this->transaction = "Card is invalid";
            }
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
    }
?>