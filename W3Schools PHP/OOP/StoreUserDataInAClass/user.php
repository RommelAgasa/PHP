<?php

    class PersonInformation {

        private $firstName = "";
        private $lastName = "";
        private $age = 0;
        private $address = "";
        private $birthday = "";
        private $email = "";


        public function __construct($firstName, $lastName, $age, $address, $birthday, $email) {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->age = $age;
            $this->address = $address;
            $this->birthday = $birthday;
            $this->email = $email;
        }

        public function setFirstName($val){
            $this->firstName = $val;
        }

        public function getFirstName() : string{
            return $this->firstName;
        }

        public function setLastName($val){
            $this->lastName = $val;
        }

        public function getLastName() : string{
            return $this->lastName;
        }

        public function setAge($val){
            $this->age = $val;
        }

        public function getAge() : int{
            return $this->age;
        }

        public function setAddress($val){
            $this->address = $val;
        }

        public function getAddress() : int{
            return $this->address;
        }

        public function setBirthday($val){
            $this->birthday = $val;
        }

        public function getBirthday() : int{
            return $this->birthday;
        }

        public function setEmail($val){
            $this->email = $val;
        }

        public function getEmail() : int{
            return $this->email;
        }

    }

?>