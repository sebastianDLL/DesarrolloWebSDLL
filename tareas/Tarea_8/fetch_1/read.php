<?php

include('conexion.php');
$sql = "SELECT d.id AS departamento_id, d.nombre AS departamento_nombre, p.id AS provincia_id, p.nombre AS provincia_nombre
FROM departamento d LEFT JOIN provincia p ON d.id = p.iddepartamento;

";
//echo $sql;
$resultado = $con->query($sql);
$agenda = array();
while ($row = $resultado->fetch_assoc()) {
    $agenda[] = $row;
}
echo json_encode($agenda, JSON_UNESCAPED_UNICODE);


$con->close();
