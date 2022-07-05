<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>include</title>
</head>
<body>
    <?php include 'includes/header.html'?>
    <?php
        $title = "Hello World";
        $name = "LuYee6813";
        $age = "18";
        include 'includes/context.php';
    ?>
    <?php include 'includes/footer.html'?>
</body>
</html>