<?php

    require_once('animal.php');

    class Kera extends Animal
    {
        public $legs = 2;

        public function yell()
        {
            echo "Auoooo";
        }
        


    }
?>