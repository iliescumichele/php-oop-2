<?php

    include_once __DIR__ . "/class/item.php";
    include_once __DIR__ . "/class/user.php";

    //istanziati oggetti 
    $saccoCroccantini = new Item("Sacco di croccantini", 10);
    $pallaTennis = new Item("Palla da tennis", 4);
    $guinzaglio = new Item("Guinzaglio", 15);


    $Jack = new isUserRegistered("Jack", "Sparrow", "esempio@gmail.com", 0);

    $Michele = new isUserRegistered("Michele", "Iliescu", "unalltroesempio@gmail.com", 0);
    $Michele->setDiscount(true);



?>