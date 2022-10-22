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
        <h1 style="color: white">Bienvenida Laura</h1>
        <a style="color: white" href="../php/cerrar_sesion.php">Cerrar sesión</a>
    </div>
    <center>
        <img src="http://c.files.bbci.co.uk/3066/production/_111609321_1-1.jpg" alt="Texto Alternativo para la imágen" class="Cocina" id="Identificador para la imágen" width="433px" height="243px">
        <img src="https://www.colliers.com/-/media/images/colliers/latam/peru/blog/openspace.ashx?h=395&w=700&bid=1c6a23170875402ca1e38cd31c60049f&hash=68842776D3FD5C94613A8B1DCF07CFBC" alt="Texto Alternativo para la imágen" class="Cocina" id="Identificador para la imágen" width="433px" height="243px">
    </center>
</body>
</html>