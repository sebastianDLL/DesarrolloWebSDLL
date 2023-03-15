<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero menor</title>
</head>
<body>
    <?php
    $a = 10;
    $b = 2;
    $c = 5;

    if ($a <= $b && $a <= $c) {
        echo "$a es el número menor";
    } elseif ($b <= $a && $b <= $c) {
        echo "$b es el número menor";
    } else {
        echo "$c es el número menor";
    }
    ?>
</body>
</html>

