<?php
    include_once 'databaseconnection.php';
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "myshop";

    // Create connection to the database
    $connection = new mysqli($servername, $username, $password, $database);

    if($_SERVER["REQUEST_METHOD"] == "GET"){ 
        // if the id is not set.
        if(!isset($_GET["id"])){
            header("location: index.php");
            exit;
        }

        // Get the ID from index.php
        $id = $_GET["id"];
        $objConnection = new DatabaseConnect();
        $con = $objConnection->connect();
        $stmt = $con->prepare("DELETE from clients where id=:id");
        $stmt->bindParam(':id', $id);

        $isDeleted = $stmt->execute();
        if($isDeleted == false){
            $errorInfo = $stmt->errorInfo();
            echo "Error executing the statement: " . $errorInfo[2];
        }
        
        header("location: index.php");
        exit;
    }


?>