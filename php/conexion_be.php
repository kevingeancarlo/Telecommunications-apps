<?php

    $conexion = mysqli_connect("localhost", "root", "", "login_register_db", "3308");

    
    /* Conexión con Heroku 

    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);

    $conexion = new mysqli($server, $username, $password, $db);*/


    /* if ($conexion){
        echo 'conectado con exito a la base de datos';
    }else{
        echo 'No se ha podido conectar a la base de datos';
    }  
 */
?>