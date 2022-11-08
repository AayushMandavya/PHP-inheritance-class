<?php

    class User{
        public $name;
        protected $email;
        public $password;

        public function __construct($name,$email,$password){

                $this->name=$name;
                $this->email=$email;
                $this->password=$password;
        }

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
            public $role='superman Admin';

            public function __construct($name,$email,$password,$role){
                parent ::__construct($name,$email,$password);
                $this->role=$role;
        }
            // public getEmail(){
            //     echo '<br>User Logged in'. $this->email;
            // }
    }
    
     $user= new User('aayush12','a@mail.com','pass12');
    //  $user -> name='mandu';
     $user->login();
     echo "<br>";
   

//      $user->setEmail('newestmail@g.com');
   $admin = new Admin('admin','admin@mail.com','admin11');
//    $admin -> name='Admin';
   $admin-> login();
   echo '<br>';

//    $admin->setEmail('newadmin@gmail.com');

?>
