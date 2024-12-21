<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        function sumOfTwo($array1, $array2, $target){
            $arr1Len = count($array1);
            $arr2Len = count($array2);

            if($arr1Len < 1 && $arr2Len < 1) return -1;

            for($i = 0; $i < $arr1Len; $i++){
                for($j = 0; $j < $arr2Len; $j++){
                    if(($array1[$i] + $array2[$j]) == $target)
                        return true;
                }
            }
            return false;
        }

        // $res = sumOfTwo([1, 2], [4, 5, 6], 5);
        $res = sumOfTwo([1, 2], [4, 5, 6], 3);
        echo $res;

    ?>
</body>
</html>