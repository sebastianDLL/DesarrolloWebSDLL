<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <?php
        $filas = $_POST["filas"];
        $columnas = $_POST["columnas"];
        ?>
        <table>
            <?php for ($i = 1; $i <= $filas; $i++) { ?>
                    <tr>
                        <?php for ($j = 1; $j <= $columnas; $j++) {  ?>
                            <td ></td>
                        <?php } ?>
                    </tr >
                <?php } ?>
        </table>
    </div>
</body>
</html>