<?php


    interface Logger{
        public function log(string $message): void;
    }

    /**
     * When you declare an abstract class that implements an interface, 
     * the concrete implementation of the interface methods can be 
     * deferred to concrete subclasses.
     */

    abstract class SimpleLogger implements Logger{
        protected $newLine;

        public function __construct(bool $newLine){
            $this->newLine = $newLine;
        }

        abstract public function log(string $message) : void;
    }

    $logger = new class(true) extends SimpleLogger{
        public function __construct(bool $newLine){
            parent::__construct($newLine);
        }

        public function log(string $message):void
        {
            echo $this->newLine ? $message . PHP_EOL : $message;
        }
    };

    // $logger = new class implements Logger{
    //     public function log(string $message):void
    //     {
    //         echo $message . '<br>';
    //     }
    // };

    $logger->log('Hello');
    $logger->log('Bye');