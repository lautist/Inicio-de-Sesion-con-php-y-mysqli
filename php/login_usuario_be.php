<?php 

    session_start();
    include 'conexion.php';

    //Creamos las variables del usuario y contraseña del html
    $usuario = $_POST['username_dato'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);

    // Creamos la variable de validacion, es decir comparamos la tabla con la base de datos
    $validar_inicio = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'");

    // Realizamos la comparacion primero para ver si existe y segundo para ver si la contraseña es la correcta

    if(mysqli_num_rows($validar_inicio) > 0){
        //Verificamos siempre que este iniciada la sesion
        $_SESSION['usuario'] = $usuario;
        header("location: bienvenidos.php");
        exit;
    }else{
        echo '
        <script>
        
        alert("El usuario no existe");
        window.location = " ../index.php";
        </script>

        ';
        exit;
    }
?>