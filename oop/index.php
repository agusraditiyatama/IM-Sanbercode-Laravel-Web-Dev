<?php

    require('animal.php');
    require('frog.php');
    require('ape.php');

    $object = new Animal("kuda");

    echo "Nama Binatang : $object->name <br>";
    echo "Jumlah Kaki : $object->legs <br>";
    echo "Berdarah Dingin : $object->cool_blooded <br> <br>";

    $object2 = new Katak("katak");

    echo "Nama Binatang : $object2->name <br>";
    echo "Jumlah Kaki : $object2->legs <br>";
    echo "Berdarah Dingin : $object2->cool_blooded <br>";
    echo "Kalo Melompat : ";
    $object2->jump();
    echo " <br> <br> ";

    $object2 = new Kera("Orang utan");

    echo "Nama Binatang : $object2->name <br>";
    echo "Jumlah Kaki : $object2->legs <br>";
    echo "Berdarah Dingin : $object2->cool_blooded <br>";
    echo "Bersuara : ";
    $object2->yell();
?>