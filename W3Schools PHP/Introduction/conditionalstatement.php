<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $t = date("H");

        if ($t < "20") {
        echo "Have a good day!";
        }

        echo "<br>";

        if ($t < "20") {
            echo "Have a good day!";
        } else {
            echo "Have a good night!";
        }

        echo "<br>";

        if ($t < "10") {
            echo "Have a good morning!";
        } elseif ($t < "20") {
            echo "Have a good day!";
        } else {
            echo "Have a good night!";
        }

        echo "<br>";

        $favcolor = "red";

        switch ($favcolor) {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
        }
    ?>

</body>
</html>