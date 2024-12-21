<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $x = 1;

    // while Loop
    while($x <= 5) {
        echo "The number is: $x <br>";
        $x++;
    }
    echo "<hr>";
    //-------------------------------------------------------
    $x = 1;
    // do-while loop
    do {
        echo "The number is: $x <br>";
        $x++;
    } while ($x <= 5);

    echo "<hr>";
    //-------------------------------------------------------

    // for loop
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }
    echo "<hr>";
    //-------------------------------------------------------

    // foreach loop
    // The following example will output both the keys and the values of the given array ($age):
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>43);
    foreach($age as $x=>$val){
        echo "$val<br>";
    }
    echo "<hr>";
    //-------------------------------------------------------

    // Break and Continue
    $x = 0;
 
    while($x < 10) {
        if ($x == 4) {
            $x++;
            continue;
        }
        echo "The number is: $x <br>";
        $x++;
    }

    echo "<hr>";

    $x = 0;

    while($x < 10) {
        if ($x == 4) {
            break;
        }
        echo "The number is: $x <br>";
        $x++;
    }

    echo "<hr>";
    //-------------------------------------------------------

    ?>
    
</body>
</html>