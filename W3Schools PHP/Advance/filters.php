<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

    <?php
        // Php filter_var() function
        /**
         * The filter_var() function both validate and sanitize data.
         * The filter_var() function filters a single variable with 
         * a specified filter. It takes two pieces of data:
         */

         $str = "<h1>Hello World</h1>";
         // $newstr = filter_var($str, FILTER_SANITIZE_STRING) // use htmlspecialchars
        
         // Validate Integer data type
         $int = 0;
         if(filter_var($int, FILTER_VALIDATE_INT) == 0 || 
            !filter_var($int, FILTER_VALIDATE_INT) == false){
                echo("Integer is valid");
        }
        else {
            echo("Integer is not valid");
        }


        // Sanitize and Validate an Email Address
        $email = "jhon.doe@example.com";

        // Remove all illegal characters from an email
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        // Validate e-mail
        if(!filter_var($email, FILTER_VALIDATE_EMAIL, 
            FILTER_FLAG_QUERY_REQUIRED) === false){
            echo("$email is a valid email address");
        }
        else {
            echo("$email is not a valid email address");
        }

        // Sanitize and Validate a URL
        $url = "https://www.w3schools.com";

        // Remove all illegal characters from a url
        $url = filter_var($url, FILTER_SANITIZE_URL);

        // Validate url
        if(!filter_var($url, FILTER_VALIDATE_URL) === false){
            echo("$url is a valid URL");
        }
        else {
            echo("$url is not a valid URL");
        }
    ?>  
    
</body>
</html>