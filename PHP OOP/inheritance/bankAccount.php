<?php

    class BankAccount_1 {
        
        private $balance;

        public function __construct($balance){
            $this->balance = $balance;
        }

        public function getBalance(){
            return $this->balance;
        }

        public function deposits($amount){
            if($amount > 0){
                $this->balance += $amount;
            }

            return $this;
        }
    }

    class SavingAccount extends BankAccount_1{

        private $interestRate;

        public function __construct($balance, $interestRate){

            parent::__construct($balance);

            $this->interestRate = $interestRate;
        }

        public function setInterestRate($interestRate){
            $this->interestRate = $interestRate;
        }

        public function addInterest(){
            // calculate interest
            $interest = $this->interestRate * $this->getBalance();
            $this->deposits($interest);
        }

    }

    $account = new SavingAccount(100, 0.1);
    $account->deposits(100);
    echo $account->getBalance();

    $account->setInterestRate(0.05);
    $account->addInterest();
    echo $account->getBalance();    
