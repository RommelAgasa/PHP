<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php

        // Callback function
        function exclaim($str){
            return $str . "!";
        }

        function ask($str){
            return $str . "?";
        }

        function printFormatted($str, $format){
            // Calling the $format callback function
            echo $format($str);
        }

        // Pass "exclaim" and "ask" as callback functions to printFormatted();
        printFormatted("Hello World", "exclaim");
        echo "<br>";
        printFormatted("Hello World", "ask");


    ?>
</body>
</html>