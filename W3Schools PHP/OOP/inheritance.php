<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    

    <?php

        /**
         * Inheritance in OOP = When a class derives from another class.
         * The child class will inherit all the public and protected 
         * properties and methods from the parent class. In addition, 
         * it can have its own properties and methods.
        */

        class Fruit {
            public $name;
            public $color;

            public function __construct($name, $color){
                $this->name = $name;
                $this->color = $color;
            }

            protected function intro(){
                echo "The fruit is {$this->name} and the color is {$this->color}.";
            }
        }

        // Strawberry is inherited from a fruit
        class Strawberry extends Fruit {
            public function message(){
                echo "Am i fruit or a berry?";
                echo "<br>";
                $this->intro();
            }
        }

        $strawberry = new Strawberry("Strawberry", "red");
        $strawberry->message();
        echo "<br>";
        // $strawberry->intro(); // error because of the protection level

    ?>

</body>
</html>