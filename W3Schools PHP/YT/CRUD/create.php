<?php

    include_once 'databaseconnection.php';
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "myshop";

    // Create connection to the database
    $connection = new mysqli($servername, $username, $password, $database);

    $name = "";
    $email = "";
    $phone = "";
    $address = "";

    $errorMessage = "";
    $successMessage = "";

    if($_SERVER["REQUEST_METHOD"] == 'POST'){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];

        do {

            if(empty($name) || empty($email) || empty($phone) || empty($address)){
                $errorMessage = "All the field are required.";
                break;
            }

            $objConnection = new DatabaseConnect();

            // Get Connection to the Database
            $con = $objConnection->connect();

            /**
             * The prepare() method allows you to create a prepared statement, 
             * which is a query template with placeholders for parameters. 
             * Prepared statements are used to safely execute queries with 
             * user-provided data without directly embedding the values in 
             * the SQL query, reducing the risk of SQL injection attacks.
             */
            // prepare sql and bind parameters
            $stmt = $con->prepare("INSERT INTO clients (name, email, phone, address) " . 
                        "VALUES (:name, :email, :phone, :address)");
            /**
             * The bindParam() method is used to bind the parameter to the placeholder. 
             * It takes three parameters:
             */
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':address', $address);

            $isAdded = $stmt->execute();

            if($isAdded == false){
                // Handle the error (e.g., log the error or display a message)
                $errorInfo = $stmt->errorInfo();
                echo "Error executing the statement: " . $errorInfo[2];
                $errorMessage = "Invalid query: ". $connection->error;
                break;
            }

            $name = "";
            $email = "";
            $phone = "";
            $address = "";

            $successMessage = "Client added correctlty.";
            header("location: index.php");
            exit;


        } while (false);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    

    <!-- fontawsome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"  link rel="stylesheet">  


</head>
<body>


    <div class="container my-5">
        <h2>New Client</h2>

        <?php
            if(!empty($errorMessage)){
                echo "
                <div class='alert alert-warning alert-dismissible fade show'>
                    <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                    <strong>$errorMessage</strong>
                </div>";
                
            }
        ?>

        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>"> 
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="<?php echo $email; ?>"> 
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Phone</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>"> 
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="address" value="<?php echo $address; ?>"> 
                </div>
            </div>

            <?php
                if(!empty($successMessage)){
                    echo "
                    <div class='row mb-3'>
                        <div class='alert alert-success alert-dismissible'>
                            <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                            <strong>$successMessage</strong>
                        </div>
                    </div>";
                }
            ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button  type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a href="index.php" class="btn btn-outline-primary" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>