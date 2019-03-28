<?php  

    // classes

    class User {
        public $email;
        public $name;

        public function __construct(){
            $this->email = 'mario@thenetninja.co.uk';
            $this->name ='mario';
        }

        public function login(){
            echo 'the user logged in ';
        }
    }

    $userOne = new User();

    $userOne->login();
    echo $userOne->name;

?>