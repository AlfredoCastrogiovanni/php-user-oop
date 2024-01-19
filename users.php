<?php
    class user {
        public $name;
        public $surname;
        public $email;
        public $password;


        function __construct($name, $surname, $email, $password)
        {
            $this->name = $name;
            $this->surname = $surname;
            $this->email = $email;
            $this->password = $password;
        }

        public function changePsw($oldPsw, $newPsw) {
            if($oldPsw === $this->password) {
                $this->password = $newPsw;
            } else {
                echo 'Wrong Password';
            }
        }
    }

    class userDisplay extends user {
        public function getName() {
            echo $this->name;
        }

        public function getSurname() {
            echo $this->surname;
        }

        public function getEmail() {
            echo $this->email;
        }

        public function getPsw() {
            echo $this->password;
        }
    }