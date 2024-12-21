<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

    <?php

        class A {

            // all variable can access within the class
            public $var1; // you can access this one everywhere
            protected $var2;
            private $var3;  // can ONLY be accessed within the class

            function __construct($var1, $var2, $var3){
                $this->var1 = $var1;
                $this->var2 = $var2;
                $this->var3 = $var3;
            }

        }

        class B extends A {

            function __construct($var1, $var2, $var3){
                parent::__construct($var1, $var2, $var3);
            }

            function display(){
                echo $this->var1 . ": " . $this->var2 . ": " ; // . $this->var3; // private
            }
        }

        $objB = new B('hey', 'ky', 'basierto');
        $objA = new A('hey', 'ky', 'basierto');

        $objB->display();
        // $objB->var2 = 'b'; // undefined
        // $objA->var2 = 'b'; // undefined
        $objA->var1 = 'b';


    ?>
    
</body>
</html>