<?php

    class User{
        public $name='Aayush';
        private $email='aayushmandavya@gmail.com';
        public $password='pass';

        public function login(){
            echo $this->name . ' has logged in!';
        }
        public function getEmail(){
            echo $this->email;
        }
        public function setEmail($email){
            echo $this->email=$email;
        }
    }
    class Admin extends User{

    }
    
     $user= new User();
     $user -> name='mandu';
     $user->login();
     echo "<br>";
   

     $user->setEmail('newestmail@g.com');
   $admin = new Admin();
   $admin -> name='Admin';
   $admin-> login();
   echo '<br>';

   $admin->setEmail('newadmin@gmail.com');

?>
