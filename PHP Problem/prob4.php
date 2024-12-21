<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        class Circle {
            private $radius = 0;
            public function __construct($radius)
            {
                $this->radius = $radius;
            }

            public function getPerimeter(){
                if($this->radius != 0){
                    return ((2 * pi()) * $this->radius);
                }
            }

            public function getArea(){
                return (pi() * ($this->radius * $this->radius));
            }

        } // end of class Circle

        $radius = 4.44;
        $circle1 = new Circle($radius);
        echo "The area of the circle with " . $radius . " radius is: " . $circle1->getArea() . ".";
        echo "<br>It's circumference is: " . $circle1->getPerimeter() . ".";
    ?>

</body>
</html>