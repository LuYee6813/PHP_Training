<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <?php
        function sayHi($name){
            echo "<h1>Hi $name</h1>";
        }
        sayHi("Ivan");
        sayHi("Andy");
        sayHi("John");
    ?>

</body>
</html>