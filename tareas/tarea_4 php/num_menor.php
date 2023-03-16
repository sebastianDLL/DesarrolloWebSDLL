<?php

$a = 6;
$b = 2;
$c = 10;



if ($a <= $b && $a <= $c) {
            echo "$a es el número menor";
        } elseif ($b <= $a && $b <= $c) {
            echo "$b es el número menor";
        } else {
            echo "$c es el número menor";
        }

?>