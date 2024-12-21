<?php

    namespace myOwnIterator;
    use Iterator;

    // Create an Iterator
    class MyIterator implements Iterator{
        private $items = [];
        private $pointer = 0;

        public function __construct($items){
            // array_values() makes sure that the keys are numbers
            $this->items = array_values($items);
        }

        public function current(){
            return $this->items[$this->pointer];
        }

        public function key(){
            return $this->pointer;
        }

        public function next(){
            $this->pointer++;
        }

        public function rewind(){
            $this->pointer = 0;
        }

        public function valid(){
            // count() indicates how man items are in the list
            return $this->pointer < count($this->items);
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

    
    
</body>
</html>