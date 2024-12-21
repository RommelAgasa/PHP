<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php

        // Indexed array
        $cars = array("Volvo", "BMW", "Toyota");
        echo "I like " . $cars[0] . ", " . $cars[1] . ", " . $cars[2] . ".";

        echo "<hr>";
        // ---------------------------------------------------------------------------
        // Loop through an array
        $arrlenght = count($cars);

        for($i = 0; $i < $arrlenght; $i++){
            echo  $cars[$i] . ": ";
        }

        echo "<hr>";
        // ---------------------------------------------------------------------------
        // PHP Associative Arrays
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        echo "Peter is " . $age['Peter'] . " years old.";
        echo "<br>";
        foreach($age as $a=>$val){
            echo "Key = " . $a . ", Value = " . $val;
            echo "<br>";
        }

        echo "<hr>";
        // ---------------------------------------------------------------------------
        // Two-dimensional Arrays
        $car1 = array(
            array("Volvo", 22, 18),
            array("BMW", 15, 13),
            array("Saab", 5, 2),
            array("Land Rover", 17, 15)
        );

        for($row = 0; $row < count($car1); $row++){
            echo "<p><b>Row number $row </b></p>";
            echo "<ul>";
            for($col = 0; $col < count($car1[$row]); $col++){
                echo "<li>" . $car1[$row][$col] . "</li>";
            }
            echo "</ul>";
        }

        /** PHP - Sort Functions For Arrays
         * sort() - sort arrays in ascending order
         * rsort() - sort arrays in descending order
         * asort() - sort associative arrays in ascending order, according to the value
         * ksort() - sort associative arrays in ascending order, according to the key
         * arsort() - sort associative arrays in descending order, according to the value
         * krsort() - sort associative arrays in descending order, according to the key
         */



    ?>
</body>
</html>