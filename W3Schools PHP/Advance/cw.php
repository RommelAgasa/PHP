<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

    <?php

        /**
         * PHP Overwriting 
         * Now that "newfile.txt" contains some data we can show 
         * what happens when we open an existing file for writing. 
         * All the existing data will be ERASED and we start with 
         * an empty file.
         */
        $myFile = fopen("testfile.txt", 'w') or die("Unable to open a file.");

        $txt = "Jhon Doe\n";
        fwrite($myFile, $txt);
        $txt = "Jane Doe\n";
        fwrite($myFile, $txt);
        fclose($myFile);

        // Append
        $myfile = fopen("testfile.txt", 'a') or die("Unable to open a file.");
        $txt = "Donald Duck\n";
        fwrite($myfile, $txt);
        $txt = "Goofy Goof\n";
        fwrite($myfile, $txt);
        fclose($myfile);
    ?>
    
</body>
</html>