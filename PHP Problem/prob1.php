<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        /**
         * Write a function that searches an array of names (unsorted) 
         * for the name "Bob" and returns the location in the array. 
         * If Bob is not in the array, return -1.
         */

        function findBob($arrayNames){
            $search = "Bob";
            $arrayLen = count($arrayNames);
            if($arrayLen <= 0) return -1;
            for($i = 0; $i < $arrayLen; $i++){
                if($arrayNames[$i] === $search) return $i;
            }
            return -1;
        }

        $posBob = findBob(["Jimmy", "Layla"]);

        if($posBob < 0){
            echo "Can't find the position of Bob.";
        }
        else {
            echo "We found bob at exactly at " . $posBob . " index of the array.";
        }
    ?>
</body>
</html>