<?php

if (!isset($_GET['orden'])) {
    $orden = 'titulo';
} else {
    $orden = $_GET['orden'];
}
if (!isset($_GET['buscar'])) {
    $buscar = "'%'";
} else {
    $buscar = "'%".str_replace(" ","%",$_GET['buscar'])."%'";
}


include('conexion.php');
$sql = "SELECT imagen,titulo,autor from libros
where titulo like $buscar 
order by $orden";
// echo $sql;
$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
?>
    <h1>Lista de libros</h1>
    <table>
        <tr>
            <th>Fotografia</th>
            <th><a href="listar.php?orden=titulo"> Titulo</a></th>
            <th><a href="listar.php?orden=autor">Autor</a> </th>
        </tr>
        <?php while ($row = $resultado->fetch_assoc()) {
        ?>
            <tr>
            <td><img width="50px" src="images/<?php echo $row['imagen'];  ?>" alt=""> </td>
            <td><?php echo $row['titulo'] ?> </td>
                <td><?php echo $row['autor'] ?></td>
            </tr>
        <?php } ?>
    </table>


<?php
} else {
    echo "la tabla no tiene datos que mostrar";
}

$con->close();
?>