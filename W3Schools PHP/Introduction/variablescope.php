<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        // Global Scope

        $x = 5;

        function myTest(){
            // Local Scope
            // $x = 6; // you can declared same name of the 
            // global variable inside the function
            // using x inside this function will generate an error
            //echo "<p>Variable x inside function is: $x </p>";
        }

        myTest();

        echo "<p>Variable x outside function is: $x </p>";

        // --------------------------------------------------------
        print "<hr>";
        // The global Keyword
        $a = 5;
        $b = 10;

        function myTest1(){
            global $a, $b;
            $b = $a + $b;
        }

        myTest1();
        echo $b;

        // --------------------------------------------------------

        print "<hr>";
        // The static keyword
        function myTest2(){
            static $c = 0;
            echo $c;
            $c++;
        }
        myTest2();
        echo "<br>";
        myTest2();
        echo "<br>";
        myTest2();

    ?>
    
</body>
</html>