<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        function findASeat(int $N, $arrayInt){
            if($arrayInt == null) return -1;
            $maxPercentage = 50.00;
            $arrayLen = count($arrayInt);
            $maxPassenger = (int)$N / $arrayLen;
            for($i = 0; $i < $arrayLen; $i++){
                if($maxPercentage >= (($arrayInt[$i]/$maxPassenger) * 100))
                    return $i;
            }
            return -1;
        }

        // $pos = findASeat(200, [35, 23, 18, 10, 40]);
        // $pos = findASeat(20, [3, 5, 4, 2]);
        // $pos = findASeat(1000, [50, 20, 80, 90, 100, 60, 30, 50, 80, 60]);
        $pos = findASeat(200, [35, 23, 40, 21, 38]);
        if($pos <= -1){
            echo "All carriage is too full.";
        }
        else{
            echo "Index " . $pos . "'s carriage is good enough.";
        }

    ?>
</body>
</html>