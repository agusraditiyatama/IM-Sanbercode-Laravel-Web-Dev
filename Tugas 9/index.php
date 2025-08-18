<?php
    
    require('animal.php');
    $object = new Animal('hewan');

    echo $object->name;
    echo $object->legs;
    echo $object->cool_blooded;
?>