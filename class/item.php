<?php

    //definisco la classe
    class Item{
        public $name;
        public $price;

        //definisco un costruttore
        public function __construct($_name, $_price){
            $this->name = $_name;
            $this->price = $_price;
        }
    }

?>