<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF</title>
</head>
<body>
    <form action="if.php" method="post">
        <h3>Enter one num:<input type="text" name="num1"></h3> 
    </form>
    <?php
        $num1 = $_POST['num1'];
        $num2 = 5;
        if( $num1 > $num2){
            echo "you num1->{$num1} is big than num2->{$num2}";
        }
        else{
            echo "you num1->{$num1} is small than num2->{$num2}";
        }
    ?>
</body>
</html>