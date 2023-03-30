<?php
include('operaciones.php');
if(isset($_COOKIE['a']) and  isset($_COOKIE['b']))
{
    $op = new Operaciones($_COOKIE['a'],$_COOKIE['b']);
    echo "La resta es: ".$op->restar();
}
else
{
    echo "No existe valores para a y b ";
}

?>
<meta http-equiv="refresh" content="3;url=menu.html">