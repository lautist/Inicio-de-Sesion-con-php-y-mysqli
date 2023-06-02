<?php 

    include 'conexion.php';
// Lo que estamos haciendo a continuacion es para comprabar si el usuario inicio sesion, en caso de no lo obilgara a iniciar
session_start();

// Si no existe realiza el siguiente codigo
if(!isset($_SESSION['usuario'])){
    echo '
    
    <script>
    alert("No se inicio sesion, porfavor inicie");
    window.location = "../index.php";
    </script>
    
    ';
    session_destroy();
    // Con esto hacemos que el codigo de abajo no se ejecute
    die();
}
//TOMO EL NOMBRE DEL USER PARA MOSTRARLO
$iduser = $_SESSION['usuario'];




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <h2>Bienvenidos al buzon de correo claro</h2>
    <h4>Bienvenido <?php echo $iduser ?></h4>
    <a href="../php/cerrar_sesion.php"><button>Cerrar Sesion</button></a>
</body>
</html>