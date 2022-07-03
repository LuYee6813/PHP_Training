<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Training</title>
</head>
<body>
    <?php
        echo "<h1>PHP Training</h1>";
        $dir = exec("ls files", $arr);
        $arr_len = count($arr);
        for ($i = 0; $i < $arr_len; $i++)
        {
            echo "<a href=files/$arr[$i]>$arr[$i]</a><br>";
        }
    ?>
</body>
</html>