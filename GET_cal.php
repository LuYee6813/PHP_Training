<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET_cal</title>
</head>
<body>
    <form action="GET_cal.php" method="GET">
        <div>
            num1:<input type="text" name="num1">
        </div>
        <div>
            num2:<input type="text" name="num2">
        </div>
        
        <input type="submit">
    </form>
    <br>
    <?php 
        echo "<h1> num1 + num2 = " . $_GET['num1'] + $_GET['num2'] . "</h1>"; 
        echo "<h1> num1 - num2 = " . $_GET['num1'] - $_GET['num2'] . "</h1>";
        echo "<h1> num1 * num2 = " . $_GET['num1'] * $_GET['num2'] . "</h1>";
        echo "<h1> num1 / num2 = " . $_GET['num1'] / $_GET['num2'] . "</h1>";
    ?>
    
</body>
</html>