<?php
    namespace m;
    use Dog;

    class Table {
        public $title = "";
        public $numRows = 0;
        public function message(){
            echo "<p>Table '{$this->title}' has {$this->numRows} row.</p>";
        }
    }

    $table = new Table();
    $table->title = "My Table";
    $table->numRows = 5;

        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

    <?php
        $table->message();

        
        $budoy = new Dog();

    ?>


    
</body>
</html>