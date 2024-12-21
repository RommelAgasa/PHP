<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        // String
        $string1 = "Hello World";
        $string2 = $string1;
        echo $string1;
        echo "<br>";
        echo $string2;
        echo "<hr>";
        //-------------------------------------------------------

        // Integer
        $intVar = 58329;
        // The PHP var_dump() function returns the data type and value:
        var_dump($intVar);
        echo "<hr>";
        //-------------------------------------------------------

        // Float
        $floatVar = 58329.32;
        // The PHP var_dump() function returns the data type and value:
        var_dump($floatVar);
        echo "<hr>";
        //-------------------------------------------------------

        // Array
        $arrayVar = array("Volvo", "BMW", "Toyota");
        // The PHP var_dump() function returns the data type and value:
        var_dump($arrayVar);
        echo "<hr>";
        //-------------------------------------------------------

        // Object
        class Car {
            public $color;
            public $model;
            public function __construct($color, $model){
                $this->color = $color;
                $this->model = $model;
            }

            public function message(){
                return "My car is a " . $this->color . " " . $this->model . "!";
            }
        }

        $myCar = new Car("black", "Volvo");
        echo $myCar -> message();
        echo "<br>";
        $myCar = new Car('red', "Toyota");
        echo $myCar -> message();
        echo $myCar -> color;
        echo "<hr>";
        //-------------------------------------------------------

        // Null
        $nullVar = "Hello World";
        $nullVar = null;
        var_dump($nullVar);
        echo "<hr>";
        //-------------------------------------------------------
    ?>
</body>
</html>