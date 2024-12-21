<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        // Create a function that accepts an array of 
        // two strings and checks if all of the letters in the 
        // second string are present in the first string.
        function letterCheck($array){
            // strtoupper($string);
            $word1 = strtolower($array[0]);
            $word2 = strtolower($array[1]);
            $str1Len = strlen($array[0]);
            $str2Len = strlen($array[1]);
            $counter = 0;

            for($i = 0; $i < $str1Len; $i++){
                for($j = 0; $j < $str2Len; $j++){
                    if($word1[$i] == $word2[$j]) $counter++;
                }
            }

            if($counter == $str2Len) return true;
            return false;
        }

        echo letterCheck(["trances", "nectar"]);
        echo "<br>";
        echo letterCheck(["compadres", "DRAPES"]);
        echo "<br>";
        echo letterCheck(["parses", "parsecs"]);
    ?>

</body>
</html>