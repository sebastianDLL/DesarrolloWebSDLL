<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla suma</title>
</head>
<body>
<?php
    include('funciones.php');
    $n = $_POST['n'];

    echo tablasumar($n);
?>

</body>
</html>