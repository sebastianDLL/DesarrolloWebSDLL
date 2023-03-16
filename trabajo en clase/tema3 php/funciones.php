<?php

    function menor($a, $b, $c){
        if ($a <= $b && $a <= $c) {
            echo "$a es el número menor";
        } elseif ($b <= $a && $b <= $c) {
            echo "$b es el número menor";
        } else {
            echo "$c es el número menor";
        }
    }

    function factorial($num){
        $factorial = 1;

        for ($i = 1; $i <= $num; $i++) {
            $factorial *= $i;
        }
        echo "El factorial de $num es: " .$factorial;
    }
    

    function tablasumar($n){
        for ($i = 1; $i <= $n; $i++) {
            for ($j = 1; $j <= 10; $j++) {
                echo "$i + $j = " . ($i + $j) . "<br>";
            }
            echo "<br>";
        }
    }
?>

