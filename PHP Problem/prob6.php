<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        // x = (-b ± sqrt(b² - 4ac)) / 2a
        /**
         * The discriminant is the expression 
         * inside the square root, which is b² - 4ac
         * If the discriminant is greater than zero, 
         * there are two distinct real solutions. 
         * If the discriminant is equal to zero, 
         * there is one real solution. If the discriminant 
         * is less than zero, there are no real solutions
         */

        function solutions($a, $b, $c){

            $discriminant = (($b * $b) - (4 * $a * $c));

            if($discriminant > 0){
                return 2;
            }
            elseif($discriminant == 0){
                return 1;
            }
            else{
                return 0;
            }
        }

        echo solutions(1, 0, -1);
        echo "<br>";
        echo solutions(1, 0, 0);
        echo "<br>";
        echo solutions(1, 0, 1);



    ?>
    
</body>
</html>