<?php

    class Robot {
        public function greet(){
            return 'Hello';
        }

        /**
         * To prevent the method in the child class from overriding the method 
         * in the parent class, you can prefix the method with the final keyword:
         */
        final public function id(){
            return uniqid();
        }
    }

    class Android extends Robot{
        
        public function greet(){
            $greeting = parent::greet();
            return $greeting . 'from Android.';
        }
    }

    $robot = new Robot();
    echo $robot->greet(); // Hello
    
    $android = new Android();
    echo $android->greet(); // Hi
    
    // ---------------------------------------------------------------------

    class BankAccount {

        private $balance;

        public function __construct($amount){
            $this->balance = $amount;
        }

        public function getBalance(){
            return $this->balance;
        }

        public function deposit($amount){
            if($amount > 0){
                $this->balance += $amount;
            }
            return $this;
        }

        public function withdraw($amount){
            if($amount > 0 && $amount <= $this->balance){
                $this->balance -= $amount;
                return true;
            }

            return false;
        }
    }


    class CheckingAccount extends BankAccount{

        private $minBalance;

        public function __construct($amount, $minBalance){
            if($amount > 0 && $amount >= $minBalance){
                parent::__construct($amount);
                $this->minBalance = $minBalance;
            }
            else{
                throw new InvalidArgumentException('amount must be more than zero
                    and higher than minimum balance');
            }
        }

        public function withdarw($amount){
            $canWithdraw = $amount > 0 
                && $this->getBalance() - $amount > $this->minBalance;

            if($canWithdraw){
                parent::withdraw($amount);
                return true;
            }
            return false;
        }
    }