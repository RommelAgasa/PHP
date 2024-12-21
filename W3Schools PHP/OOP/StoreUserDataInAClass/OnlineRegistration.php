<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- fontawsome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"  link rel="stylesheet">   

    <style>
        #textField{
            width: 50%;
        }
    </style>

</head>
<body>

    <div class="container-fluid bg-primary text-center">
        <h2>ONLINE REGISTRATION</h2>
    </div>


    <?php

        // define variables 
        $fname = $lname = $address = $age = $bday = $email = "";
        $fnameErr = $lnameErr = $addressErr = $ageErr = $bdayErr = $emailErr = "";
        $noErrorFound = false;

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $noErrorFound = false;
            if(empty($_POST["lName"])){
                $lnameErr = "Last Name is rquired";
                $noErrorFound = true;
            }
            else $lname = test_input($_POST["lName"]);

            if(empty($_POST["fName"])){
                $fnameErr = "First Name is required";
                $noErrorFound = true;
            }
            else $fname = test_input($_POST["fName"]);

            if(empty($_POST["address"])){
                $addressErr = "Address is required";
                $noErrorFound = true;
            }
            else $address = test_input($_POST["address"]);

            if(empty($_POST["age"])){
                $ageErr = "Age is required";
                $noErrorFound = true;
            }else $age = test_input($_POST["age"]);

            if(empty($_POST["birthday"])){
                $bdayErr = "Birthday is required";
                $noErrorFound = true;
            }
            else $bday = test_input($_POST["birthday"]);

            if(empty($_POST["email"])){
                $emailErr = "Email is required";
                $noErrorFound = true;
            } else {
                $email = test_input($_POST["email"]);

                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $emailErr = "Invalid email format";
                    $noErrorFound = true;
                }
            }

        }

        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

    ?>

    <div class="container p-3">
        <p>Please fill neccesary data.</p>

        <div class="container mt-3 border p-3">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <!--First Row-->
                <div class="row">
                    <div class="col py-3">
                        Last Name: <br><input id="textField" type="text" name="lName">
                        <span class="error"> * <?php echo $lnameErr; ?></span>
                    </div>
                    <div class="col py-3">
                        First Name: <br><input id="textField" type="text" name="fName">
                        <span class="error"> * <?php echo $fnameErr; ?></span>
                    </div>
                </div>
                <!--Second Row-->
                <div class="row">
                    <div class="col py-3">
                        Address: <br><input id="textField" type="text" name="address">
                        <span class="error"> * <?php echo $addressErr ?></span>
                    </div>
                    <div class="col py-3">
                        Age: <br><input id="textField" type="text" name="age">
                        <span class="error"> * <?php echo $ageErr; ?></span>
                    </div>
                </div>
                <!--Third Row-->
                <div class="row">
                    <div class="col py-3">
                        Birthday: <br><input id="textField" type="text" name="birthday">
                        <span class="error"> * <?php echo $bdayErr; ?></span>
                    </div>
                    <div class="col py-3">
                        Email: <br><input id="textField" type="text" name="email">
                        <span class="error"> * <?php echo $emailErr; ?></span>
                    </div>
                </div>
                <input style="background-color: green; color:white" type="submit" value="Submit">
            </form>
        </div>
    </div>

    

    <?php
        include_once 'user.php';
        include_once 'manageRecord.php';
        $objManage = new Manage();


        function displayRecords(){

            echo 
            ('<div class="container mt-3">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Address</th>
                            <th>Age</th>
                            <th>Birthday</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                </table>
            </div>');

        }
        
        if($noErrorFound == false){
            
            // Save Record to the class
            $newRecord = new PersonInformation(
                $fname,
                $lname,
                $age,
                $address,
                $bday,
                $email
            );

            $objManage->addData($newRecord);

            displayRecords(); // Refresh data
        }

    ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootsrap.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    
</body>
</html>