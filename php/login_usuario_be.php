<?php
    session_start();
    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo ='$correo'
    and contrasena =  '$contrasena'");

        
            if(mysqli_num_rows($validar_login) > 0 && $correo == "admin@company.es"){
                $_SESSION['usuario'] = $correo;
                header("location: ../perfiles/perfil_kevin.php");
                exit;
            }else{
                echo '
                    <script>
                        alert("Cerradura deshabilitada por 1 minuto para el usuario con $correo");
                        window.location = "../index.php";
                        
                    </script>
                ';
                exit;
            }
?>