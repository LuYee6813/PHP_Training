<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch</title>
</head>
<body>
    <form action="switch.php" method="get" >
        enter key: <input type="text" name="key">
    </form>
    <?php
        $key = $_GET['key'];
        switch ($key) 
        {
            case 'flag':
                echo "flag{You C4n 533 M3!}";
                break;
            default:
                echo "wrong key";
        }
    ?>
</body>
</html>