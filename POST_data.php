<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
<form action="POST_data.php" method="POST">
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
        echo "<h1> num1 + num2 = " . $_POST['num1'] + $_POST['num2'] . "</h1>"; 
        echo "<h1> num1 - num2 = " . $_POST['num1'] - $_POST['num2'] . "</h1>";
        echo "<h1> num1 * num2 = " . $_POST['num1'] * $_POST['num2'] . "</h1>";
        echo "<h1> num1 / num2 = " . $_POST['num1'] / $_POST['num2'] . "</h1>";
    ?>
</body>
</html>