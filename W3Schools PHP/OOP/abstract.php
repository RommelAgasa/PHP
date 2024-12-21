<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    

    <?php

        // Parent Class
        abstract class Car {
            public $name;
            public function __construct($name){
                $this->name = $name;
            }

            abstract public function intro() : string;
        }

        // Child Classes
        class Audi extends Car {
            public function intro() : string {
                return "Choose German quality! I'm an $this->name!";
            }
        }

        class Volvo extends Car {
            public function intro() : string {
                return "Proud to be Swedish! I'm a $this->name!";
            }
        }

        class Citreon extends Car {
            public function intro() : string {
                return "French extravagance! I'm a $this->name!";
            }
        }


        // Create objects from the child classes
        $audi = new Audi("Audi");
        echo $audi->intro();
        echo "<br>";

        $volvo = new Volvo("Volvo");
        echo $volvo->intro();
        echo "<br>";

        $citreon = new Citreon("Citreon");
        echo $citreon->intro();


        // Explained
        /**
         * The Audi, Volvo, and Citroen classes are inherited 
         * from the Car class. This means that the Audi, Volvo, 
         * and Citroen classes can use the public $name property 
         * as well as the public __construct() method from the 
         * Car class because of inheritance. But, intro() is an 
         * abstract method that should be defined in all the 
         * child classes and they should return a string.
         */

    ?>

</body>
</html>