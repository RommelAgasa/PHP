<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        // PHP String Functions

        // The PHP strlen() function returns the length of a string.
        $lenString = strlen("Hello World!");
        echo $lenString;
        echo "<hr>";
        // -------------------------------------------------------------

        // The PHP str_word_count() function counts the number of words in a string.
        echo str_word_count("Hello World!");
        echo "<hr>";
        // -------------------------------------------------------------

        // The PHP strrev() function reverses a string.
        echo strrev("Hello World!");
        echo "<hr>";
        // -------------------------------------------------------------

        // The PHP strpos() function searches for a specific text within a string.
        // If a match is found, the function returns the character position 
        // of the first match. If no match is found, it will return FALSE.
        echo strpos("Hello World!", "World");
        echo "<hr>";
        // -------------------------------------------------------------

        // The PHP str_replace() function replaces some characters with some other characters in a string.
        echo str_replace("World", "Dolly", "Hello World");
        // outputs Hello Dolly!

       
    ?>
    


</body>
</html>