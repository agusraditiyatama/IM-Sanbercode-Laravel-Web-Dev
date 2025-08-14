<?php

    class Animal
    {
        public $name;
        public $legs = 4;
        public $cool_blooded = "tidak";

        public function __construct($string)
        {
            $this->name = $string;
        }
    }
?>