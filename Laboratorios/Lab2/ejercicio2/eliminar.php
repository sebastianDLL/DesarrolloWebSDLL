<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function eliminarmenores($numeros, $menor){
    $result = array();
    foreach($numeros as $num){
        if($num <= $menor){
            array_push($result, $num);
            echo $result;
        }
    }   
    
}?>
</body>
</html>


