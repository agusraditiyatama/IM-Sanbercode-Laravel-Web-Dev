<?php

    require_once('animal.php');

    class Katak extends Animal
    {
        public $cool_blooded = "iya";

        public function jump()
        {
            echo "Hop-Hop";
        }
        


    }
?>