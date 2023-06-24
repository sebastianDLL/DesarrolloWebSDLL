<?php
    session_start();
    include("conexion.php");
    $email = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
    $sql = "SELECT correo_electronico FROM usuarios WHERE correo_electronico = '$email' AND contrasena = SHA1('$contrasena')";
    $consulta = mysqli_query($con, $sql);
    $usuario = mysqli_fetch_array($consulta);
    if($usuario != null){
        $_SESSION["correo"] = $usuario["correo_electronico"];
        echo "Se logueó con éxito";
        echo "<script>setTimeout(function() { window.location.href = 'index.html'; }, 2000);</script>";
    }else{
        echo "No autorizado";
        echo "<script>setTimeout(function() { window.location.href = 'login.html'; }, 2000);</script>";
    }
?>
