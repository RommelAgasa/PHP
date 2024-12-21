<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    
    <?php
        class Goodbye {
            const LEAVING_MESSAGE = "Thank you for visiting w3schools.com!";

            public function byebye(){
                echo self::LEAVING_MESSAGE;
            }
        }

        $goodbye = new Goodbye();
        $goodbye->byebye();
    ?>
</body>
</html>