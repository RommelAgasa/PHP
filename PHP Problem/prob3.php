<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        function secondLargest($array){

            $len = count($array);
            if($len < 2) return -1;
            $largest = $array[0];
            $secLargest = 0;

            for($i = 1; $i < $len; $i++){
                if($largest < $array[$i]){
                    $secLargest = $largest;
                    $largest = $array[$i];
                }
                else{
                    if(($secLargest < $array[$i]) && ($largest > $array[$i])){
                        $secLargest = $array[$i];
                    }
                }

            }

            return $secLargest;
        }

        $secLargest = secondLargest([10, 40, 30, 20, 50]);

        echo $secLargest;
    ?>
</body>
</html>