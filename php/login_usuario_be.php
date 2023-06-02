<?php

session_start();
include 'conexion.php';

//Creamos las variables del usuario y contraseña del HTML
$usuario = $_POST['username_dato'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512', $contrasena);

// Creamos la variable de validación, es decir, comparamos la tabla con la base de datos
$validar_inicio = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'");

// Realizamos la comparación primero para ver si existe y segundo para ver si la contraseña es la correcta
if (mysqli_num_rows($validar_inicio) > 0) {
    $fila = mysqli_fetch_assoc($validar_inicio);
    $es_admin = $fila['es_admin'];

    // Verificar si el usuario es administrador
    if ($es_admin == 1) {
        // El usuario es administrador
        $_SESSION['usuario'] = $usuario;
        $_SESSION['es_admin'] = true;

        header("location: admin.php");
        exit;
    } else {
        // El usuario no es administrador
        $_SESSION['usuario'] = $usuario;
        $_SESSION['es_admin'] = false;

        header("location: bienvenidos.php");
        exit;
    }
} else {
    echo '
    <script>
        alert("El usuario no existe");
        window.location = "../index.php";
    </script>
    ';
    exit;
}
?>
