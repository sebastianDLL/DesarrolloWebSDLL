<?php
$cadena = $_GET['cadena'];
$palabras =explode(" ", $cadena);


foreach($palabras as $palabra)
{
    
    ?>
    <div style="background-color:yellow; text-align: center;"><?php
            echo strtoupper($palabra[0]).strtolower(substr($palabra,1));
        ?></div>    
    <?php

}
?>