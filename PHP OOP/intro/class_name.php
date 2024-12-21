<?php

    class BankAccount{

        // Properties
        public $accountNumber;
        public $balance;

        public function __construct($accountNumber, $balance){
            $this->accountNumber = $accountNumber;
            $this->balance = $balance;
        }

        // PHP 8.0 -- constructor promotion
        /**
         * When a constructor parameter includes an access modifier 
         * (public, private, or protected) PHP will treat it as both 
         * a constructor’s argument and an object’s property. And it 
         * assigns the constructor argument to the property.
         */
        // function __construct(private $accountNumber, private $balance){}

        public function __destruct(){}

        // Behaviours
        public function deposits($amount){
            if($amount > 0){
                $this->balance += $amount;
            }
            
            return $this;
        }

        public function withdraw($amount){
            if($amount <= $this->balance){
                $this->balance -= $amount;
                return true;
            }
            return false;
        }

    }

    $account = new BankAccount(1, 100);

    // Chaining Methods
    $account->deposits(100)
            ->deposits(200)
            ->deposits(300);

    $account->deposits(100)->withdraw(150);

    // -------------------------------------------------

    class User {

        //  PHP only supports readonly on a typed property. 
        // A readonly property doesn’t ensure the immutability
        public readonly string $username;

        public function __construct(string $username){
            $this->username = $username;
        }

        // you can only initialize the $username once when creating a new User object
    }
