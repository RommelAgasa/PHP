<?php

    class Customer {

        private $id;
        private $name;
        private $email;

        public function __construct(int $id, string $name, string $email){
            $this->id = $id;
            $this->name = $name;
            $this->email = $email;
        }

        public function getInitial(){
            if($this->name !== ''){
                return strtoupper(substr($this->name, 0, 1));
            }
        }


        /**
         * In this example, the __sleep() method returns an 
         * array that contains the names of the id and name properties. 
         * And the serialize() 
         * function will only serialize the values of these properties
         */

        public function __sleep():array{
            return ['id','name'];
        }

        // public function __serialize():array{
        //     return [
        //         'id' => $this->id,
        //         'name' => $this->name
        //     ];
        // }
    }

    // serialize the customer object
    $customer1 = new Customer(10, 'John Doe', 'john.doe@example.com');
    $str = serialize($customer1);
    file_put_contents('customer.txt', $str);

    // unserialize it
    $str = file_get_contents('customer.txt');
    $customer2 = unserialize($str);

    // these object are not the same
    var_dump($customer1 === $customer2); // false

