<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php

        function isValidHexCode($hex){

            $len = strlen($hex);
            if(($len < 6) | $hex > 6){
                return false;
            }
            
            if($hex[0] !== '#') return false;

            //for()
        }

        function isALetter($character){

            $arrLetter = array(
                'a', 'b', 'c', 'd', 'f', 
                'g', 'h', 'i', 'j', 'k',
                'l', 'm', 'n', 'o', 'p',
                'q', 'r', 's', 't', 'u',
                'v', 'w', 'x', 'z'
            );

        }

        function isANumber($character){

            $arrNum = array(
                0, 1, 2, 3, 4, 5, 6, 7, 8, 9
            );

        }
    ?>
</body>
</html>