<?php

    class DatabaseConnect {
        private $servername = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "myshop";

        public function connect(){
            // Create connection to the database
            try{
                $connection = new PDO(
                    "mysql:host=$this->servername;dbname=$this->database", 
                    $this->username, $this->password);
                // set the PDO error mode to exception
                // PDO::ATTR_ERRMODE: This constant indicates that we want to set the error mode.
                // PDO::ERRMODE_EXCEPTION: This constant sets the error mode to "exception" mode.
                /**
                 * When the error mode is set to PDO::ERRMODE_EXCEPTION, 
                 * PDO will throw exceptions whenever a database-related 
                 * error occurs, allowing you to catch these exceptions 
                 * and handle them in your code. Using exceptions is 
                 * considered a best practice for error handling in 
                 * database operations because it helps you identify 
                 * and handle errors more efficiently.
                 */
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e){
                echo "Connection failed: " . $e->getMessage();
                return null;
            }
            return $connection;
        }

        // Get results
        public function getData($sql){
            $con = self::connect(); // get connection
            if($con == null) return null;
            $result = $con->query($sql);
            if ($result) {
                // Fetch all rows as associative arrays
                return $result->fetchAll(PDO::FETCH_ASSOC);
            } else {
                echo "Query failed.";
                return null;
            }
        }

    }

?>