<!DOCTYPE html>
<html>
<head>
    <title>Cadena con guiones</title>
</head>
<body>
    <?php
        include('utiles.php');
        
        $cadena = $_GET['cadena'];
        $num_guiones = $_GET['num_guiones'];
        
        $utiles = new Utiles($cadena);
        $utiles->aumentarGuiones($num_guiones);
    ?>
</body>
</html>
