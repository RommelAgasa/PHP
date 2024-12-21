<!--signup.php-->
<?php

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if(isset($_POST['submit'])){
        $first = test_input($_POST['first']);
        $last = test_input($_POST['last']);
        $email = test_input($_POST['email']);
        $uid = test_input($_POST['uid']);
        $pwd = test_input($_POST['pwd']);

        if(empty($first)){
            header("Location: index.php?signup=emptyfirstname&last=$last&email=$email&uid=$uid");
            exit();
        }
        else {
            // Check if input characters are valid
            if(!preg_match("/^[a-zA-Z]*$/", $first)){
                header("Location: index.php?signup=charFirst&last=$last&email=$email&uid=$uid");
                exit();
            }
        }

        if(empty($last)){
            header("Location: index.php?signup=emptylastname&first=$first&email=$email&uid=$uid");
            exit();
        }
        else {
            if(!preg_match("/^[a-zA-Z]*$/", $last)){
                header("Location: index.php?signup=charLast&first=$first&email=$email&uid=$uid");
                exit();
            }
        }

        if(empty($email)){
            header("Location: index.php?signup=emptyemail&first=$first&last=$last&uid=$uid");
            exit();
        }
        else {
            // Check if email is valid
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: index.php?signup=invalidemail&first=$first&last=$last&uid=$uid");
                exit();
            }
        }
        
        if(empty($uid)){
            header("Location: index.php?signup=emptyusername&first=$first&last=$last&email=$email");
            exit();
        }
        else {
            if(!preg_match("/^[a-zA-Z]*$/", $uid)){
                header("Location: index.php?signup=invalidemail&first=$first&last=$last&uid=$uid");
                exit();
            }
        }
        
        if(empty($pwd)){
            header("Location: index.php?signup=emptypassword&first=$first&last=$last&uid=$uid&email=$email");
            exit();
        }

        header("Location: index.php?signup=success");

    }
    else{
        header("Location: index.php?signup=error");
    }
?>