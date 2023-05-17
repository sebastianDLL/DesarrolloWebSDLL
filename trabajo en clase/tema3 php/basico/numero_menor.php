<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero_Menor</title>
</head>
<body>
    <?php
        include('funciones.php');
        $a = $_GET['num1'];
        $b = $_GET['num2'];
        $c = $_GET['num3']; 

        echo menor($a, $b, $c);
    ?>
</body>
</html>





