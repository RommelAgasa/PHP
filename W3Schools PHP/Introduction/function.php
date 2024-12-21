<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php //declare(strict_types=1); // strict requirements

        /**
         * In PHP 7, type declarations were added. This gives 
         * us an option to specify the expected data type when 
         * declaring a function, and by adding the strict 
         * declaration, it will throw a "Fatal Error" if the 
         * data type mismatches.
         */
        function addNumbers(int $a, int $b){
            return $a + $b;
        }

        echo addNumbers(5, 5);
        echo "<hr>";
        //--------------------------------------------------

        // PHP Default Argument Value
        function setHeight(int $minheight = 50){
            echo "The height is: $minheight <br>";
        }

        setHeight(350);
        setHeight();
        setHeight(135);
        echo "<hr>";
        //--------------------------------------------------

        // PHP Functions - Returning values
        function sum(int $x, int $y){
            return $x + $y;
        }
        echo "5 + 10 = " . sum(5, 10) . "<br>";
        echo "7 + 13 = " . sum(7, 13) . "<br>";
        echo "2 + 4 = " . sum(2, 4) . "<br>";
        echo "<hr>";
        //--------------------------------------------------

        // PHP Return Type Declarations
        // You can specify a different return type, than the 
        // argument types, but make sure the return is the correct type:
        function addNum(float $a, float $b) : float {
            return $a + $b;
        }
        echo addNum(1.2, 5.2);
        echo "<hr>";
        //--------------------------------------------------

        // Passing Arguments by Reference
        // When a function argument is passed by reference, 
        // changes to the argument also change the variable that was passed in. 
        function add_five(&$value){
            $value += 5;
        }

        $num = 2;
        add_five($num);
        echo $num;
        echo "<hr>";
        //--------------------------------------------------

    ?>
    
</body>
</html>