<?php


    class Address{

        public $street;
        public $city;
    }

    class Person {
        public $name;
        public $address;

        public function __construct($name){
            $this->name = $name;
            $this->address = new Address();
        }
    }

    $bob = new Person('Bob');
    $bob->address->street = 'Nort 1st Street';
    $bob->address->city = 'San Jose';

    var_dump($bob);

    /**
     * However, the address property of the new 
     * Person object still references the same Address object
     */

    $alex = clone $bob;
    $alex->name = 'Alex';

    var_dump($alex);