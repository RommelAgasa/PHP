<?php 

    class Manage {
        private $storage = [];
        private $index = 0;

        public function addData($data){
            $this->storage[$this->index++] = $data;
        }

        public function getSize(){
            return count($this->storage);
        }
    }

?>