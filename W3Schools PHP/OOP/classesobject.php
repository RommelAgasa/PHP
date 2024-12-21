<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

    <?php

        class Fruit {

            // Properties
            public $name;
            public $color;

            // constructor
            /* function __construct($name, $color){
                $this->name = $name;
                $this->color = $color;
            } */

            // Methods
            function set_name($name){
                $this->name = $name;
            }

            function get_name(){
                return $this->name;
            }

            // destructor
            // If you create a __destruct() function, 
            // PHP will automatically call this function at the end of the script.
            function __destruct(){
                echo "The fruit is {$this->name} and the color is {$this->color}.";
            }
        }

        $apple = new Fruit();
        $banana = new Fruit();
        $apple->set_name('Apple');
        $banana->set_name('Banana');

        echo $apple->get_name();
        echo "<br>";
        echo $banana->get_name();

    ?>
    
</body>
</html>