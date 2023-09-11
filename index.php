<?php 
session_start();

if(isset($_SESSION['usuario'])){
    header("location: /php/bienvenidos.php");
}

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
    <div class="con"  >
        <h1 class="title">Iniciar Sesion</h1>
        <form action="php/login_usuario_be.php" method="POST" >
            <div class="in">
                <label for="username">Username </label>
                <input type="text" placeholder="Enter Username" name="username_dato" required class="input-style">

                <label for="psw">Password</label>
                <input type="password" placeholder="Enter Password" name="contrasena" required class="input-style">
            </div>
        <button class="btn-is" type="submit">Iniciar</button>
        </form>

    </div>

    <div  class="register" style="display: none;">
        <h1 class="title-r">Registro</h1>
        <form action="php/registro_usuarios_be.php" method="POST" >
        <div class="register-in">   
                <label for="name">Name</label>
                <input type="text" placeholder="Ingrese su nombre" name="nombre" class="input-style">

                <label for="email">Correo Electronico</label>
                <input type="email" placeholder="Ingrese su E-mail" name="correo" required class="input-style">

                <label for="username">Username </label>
                <input type="text" placeholder="Enter Username" name="username_dato" required class="input-style">

                <label for="psw">Password</label>
                <input type="password" placeholder="Enter Password" name="contrasena" required class="input-style">
        </div>
        <button class="btn-is">Registro</button>
        </form>
    </div>

    <button  class="btn-cs">Registrarse</button> 
    <script src="app.js"></script>
</body>
</html>