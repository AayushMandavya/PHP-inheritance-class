<?php


    class Animal {

        public $weight=40;
        public $height=40;
        public $color= 'yellow';

        public function move(){
            echo "The Animal is moving <br>";
        }
        public function eat(){
            echo "The Animal is eating <br>";

        }
    }


     class Dog extends Animal{

     }
     
     
     $dog = new Dog();
     $dog -> eat();
     echo $dog ->color;
     echo '<br>';
    $animal = new Animal();
    $animal -> move();
?>
