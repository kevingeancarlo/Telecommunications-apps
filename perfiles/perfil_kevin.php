<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesión");
                window.location = "index.php";
            </script>
    ';
    session_destroy();
    die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos2.css">
</head>
<body>
    <div>
        <h1 style="color: white">Bienvenido Admin</h1>
        <a  style="color: white" href="../php/cerrar_sesion.php">Cerrar sesión</a>
    </div>
    <!-- <center>
        <img src="https://wallpaperaccess.com/full/6802137.jpg" alt="Texto Alternativo para la imágen" class="Cocina" id="Identificador para la imágen" width="433px" height="243px">
        <img src="https://p4.wallpaperbetter.com/wallpaper/742/332/10/cellar-wine-wallpaper-preview.jpg" alt="Texto Alternativo para la imágen" class="Cocina" id="Identificador para la imágen" width="433px" height="243px">
    </center>  -->
</body>
</html>