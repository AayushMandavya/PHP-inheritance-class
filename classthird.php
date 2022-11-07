<?php


    class Animal {

        public $weight=40;
        public $height=40;
        public $color= 'yellow';

        public function move(){
            echo "The Animal of color ".$this-> color. " is moving <br>";
        }
        public function eat(){
            echo "The Animal of weight ".$this->weight." and of height ".$this->height." is eating <br>";

        }
        public function getColor()
        {
            return $this -> color;
        }
    }


     class Dog extends Animal{

     }
     
     
     $dog = new Dog();
     $dog -> eat();
     echo $dog ->getColor();
     echo '<br>';
    $animal = new Animal();
    $animal -> move();
?>
