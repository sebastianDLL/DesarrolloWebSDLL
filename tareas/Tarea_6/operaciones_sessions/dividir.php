<?php session_start();
include('operaciones.php');
if(isset($_SESSION['a']) && isset($_SESSION['b']))
{
    $op=new operaciones($_SESSION['a'],$_SESSION['b']);
    echo "La division es: ".$op->dividir();
}
else
{
    echo "No existe valores para a y b ";
}

?>
<meta http-equiv="refresh" content="3;url=menu.html">