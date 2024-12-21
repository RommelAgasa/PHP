<html>
    <head>
    </head>

    <body>
        
        <?php

            // define variables and set empty values
            $name = $email = $gender = $comment = $website = "";
            $nameErr = $emailErr = $genderErr = $commentErr = $websiteErr ="";

            if($_SERVER["REQUEST_METHOD"] == "POST"){

                if(empty($_POST["name"])){
                    $nameErr = "Name is required";
                } 
                else $name = test_input($_POST["name"]);

                if(empty($_POST["email"])){
                    $emailErr = "Email is required";
                } 
                else {
                    $email = test_input($_POST["email"]);
                    // Check if e-mail address is well-formed
                    // The easiest and safest way to check whether 
                    // an email address is well-formed is to use PHP's filter_var() function.
                    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        $emailErr = "Invalid email format";
                    }

                } 

                if(empty($_POST["website"])){
                    $websiteErr = "";
                }
                else {
                    $website = test_input($_POST["website"]);
                    // check if URL address syntax is valid (this regular expression
                    // also allows dashes in the URL)
                    // The preg_match() function searches a string for pattern, 
                    // returning true if the pattern exists, and false otherwise.
                    if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)){
                        $websiteErr = "Invalid URL";
                    }
                }

                if(empty($_POST["comment"])){
                    $commentErr = "";
                }
                else $comment = test_input($_POST["comment"]);

                if(empty($_POST["gender"])){
                    $genderErr = "Gender is required.";
                }
                else $gender = test_input($_POST["gender"]);

            }

            function test_input($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        ?>

        <!--
            The $_SERVER["PHP_SELF"] is a super global variable 
            that returns the filename of the currently executing script.

            What is the htmlspecialchars() function?

            The htmlspecialchars() function converts special 
            characters to HTML entities. This means that it will 
            replace HTML characters like < and > with &lt; and &gt;. 
            This prevents attackers from exploiting the code by 
            injecting HTML or Javascript code (Cross-site Scripting 
            attacks) in forms.
        -->

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            
            Name: <input type="text" name="name" value="<?php // keep the value in the form
            echo $name; ?>">
            <span class="error"> * <?php echo $nameErr; ?></span> <br><br>

            Email: <input type="text" name="email" value="<?php echo $email; ?>">
            <span class="error"> * <?php echo $emailErr; ?> </span> <br><br>
            
            Website: <input type="text" name="website" value="<?php echo $website; ?>">
            <span class="error"> <?php echo $websiteErr; ?> </span> <br><br>
            
            Comment: <textarea name="comment" id="" cols="40" rows="5"></textarea>
            <span class="error"> <?php echo $commentErr; ?> </span> <br><br>
            
            Gender: 
                    <input type="radio" name="gender"
                    <?php if(isset($gender) && $gender=="male") echo "checked"; ?>
                    id="" value="male">Male

                    <input type="radio" name="gender" 
                    <?php if(isset($gender) && $gender=="female") echo "checked"; ?>
                    id="" value="female">Female

                    <input type="radio" name="gender" 
                    <?php if(isset($gender) && $gender=="other") echo "checked"; ?>
                    id="" value="other">Other

            <input type="submit" value="Submit">
            <span class="error"> <?php echo $genderErr; ?> </span>

        </form>
            
        <?php
            echo "<h2>Your Input:</h2>";
            echo $name;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $website;
            echo "<br>";
            echo $comment;
            echo "<br>";
            echo $gender;
        ?>


    </body>
</html>