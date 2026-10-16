<?php
    class Car{
        public $maxSpeed;
        public function __construct($maxSpeed){
            $this->maxSpeed=$maxSpeed;
        }

        public function run(){
            echo "car is running <br>";
        }
    }

    
    $check = "hello";

?>