<?php
    require_once __DIR__ . '/Drums.php';
    require_once __DIR__ . '/Guitars.php';
    require_once __DIR__ . '/Basses.php';


    //Oggetti Drums
    $tama = new Drums('batteria', 'Tama', 'Starclassic');
    $gretsch = new Drums('batteria', 'Gretsch', 'Catalina');

    //Oggetti Guitars
    $fender_guitar = new Guitars('chitarra', 'Fender', 'Stratocaster');
    $gibson = new Guitars('chitarra', 'Gibson', 'Les Paul');

    //Oggetti Basses
    $fender_bass = new Basses('basso', 'Fender', 'Jazz');
    $fender_bass->corde = 4;

    $warwick = new Basses('basso', 'Warwick', 'Fortress');
    $warwick->corde = 5;

    var_dump($fender_guitar->getItemInfo());
?>