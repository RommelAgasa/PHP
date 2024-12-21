<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    
    <?php

        class domain {

            public static $piValue = 3.14159;

            protected static function getWebsiteName(){
                return "W3schools.com";
            }

            public function getValuePi(){
                /**
                 * A static property can be accessed from a 
                 * method in the same class using the self keyword 
                 * and double colon (::):
                 */
                return self::$piValue;
            }
        }

        class domainW3 extends domain {
            public $websiteName;
            public function __construct(){

                /**
                 * To call a static property from a child 
                 * class, use the parent keyword inside the child class:
                 */
               $this->websiteName = parent::getWebsiteName(); 
            }
        }

        $table1 = new m\Table();
        $domainW3 = new domainW3;
        echo $domainW3->getValuePi();
        echo "<br>";
        echo domain::$piValue;


    ?>

</body>
</html>