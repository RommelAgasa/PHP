<!-- Variables -->
<?php
     $firstError = "";
    $lastError = "";
    $emailError = "";
    $uidError = "";
    $pwdError = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error handler</title>
</head>
<body>

    <h2>Sign Up</h2>
    <form action="signup.php" method="post">

        <?php

            // ------------------------------------------------------------------------------------------
            if(isset($_GET['signup'])){
                $signup = $_GET['signup'];

                switch($signup){
                    case "emptyfirstname":
                        $firstError = "Please input your firstname!";
                        break;
                    case "emptylastname":
                        $lastError = "Please input your lastname!";
                        break;
                    case "emptyemail":
                        $emailError = "Please input your email!";
                        break;
                    case "invalidemail":
                        $emailError = "Invalid email!";
                        break;
                    case "emptypassword":
                        $pwdError = "Please input your password!";
                        break;
                    case "emptyusername":
                        $uidError = "Please input your username!";
                        break;
                    case "charFirst":
                        $firstError = "You used invalid characters for firstname!";
                        break;
                    case "charLast":
                        $lastError = "You used invalid characters for lastname!";
                        break;
                    case "success":
                        echo "<p class='error-message'>You have been signed up!</p>";
                        break;
                    default:
                        echo "<p class='error-message'>Something went wrong!</p>";
                        break;

                }
            }
            else {
                
            }

            // ------------------------------------------------------------------------------------------

            if(isset($_GET['first'])){
                $first = $_GET['first'];
                echo '<input type="text" name="first" placeholder="Firstname" value="'.$first.'">';
            }
            else{
                echo '<input type="text" name="first" placeholder="Firstname">';
            }

            echo '<span style="color: red;">'.$firstError.'</span><br><br>';

            if(isset($_GET['last'])){
                $last = $_GET['last'];
                echo '<input type="text" name="last" placeholder="Lastname" value="'.$last.'">';
            }
            else{
                echo '<input type="text" name="last" placeholder="Lastname">';
            }

            echo '<span style="color: red;">'.$lastError.'</span><br><br>';

            if(isset($_GET['email'])){
                $email = $_GET['email'];
                echo '<input type="text" name="email" placeholder="E-mail" value="'.$email.'">';
            }
            else{
                echo '<input type="text" name="email" placeholder="E-mail">';
            }

            echo '<span style="color: red;">' .$emailError.'</span><br><br>';

            if(isset($_GET['uid'])){
                $uid = $_GET['uid'];
                echo '<input type="text" name="uid" placeholder="Username" value="'.$uid.'">';
            }
            else{
                echo '<input type="text" name="uid" placeholder="Username">';
            }

            echo '<span style="color: red; margin-left: 10px">'.$uidError.'</span><br><br>';
        ?>        
        <input type="password" name="pwd" placeholder="Password"><br><br>
        <button type="submit" name="submit">Sign up</button>
    </form>

</body>
</html>

