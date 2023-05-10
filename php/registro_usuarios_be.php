<?php
    include 'conexion.php';
    // tomamos el nombre de cada name del HTML y le damos el nombre de la variable
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $usuario = $_POST['username_dato'];
    $contrasena = $_POST['contrasena'];

    // Encriptar contraseña
    $contrasena = hash('sha512', $contrasena);

    // Aca comenzamos a agregar a la tabla los datos del usuario
    $query = "INSERT INTO usuarios(nombre, correo, usuario, contrasena)
                 VALUES('$nombre' , '$correo', '$usuario', '$contrasena' )";


    // Verificamos en la base si el usuario ya existe
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");

    //Aca verifiacmos si el usuario existe y le preguntamos si es mayor a 0, en caso de que exista el id del usuario va a ser mayor que 0
    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
        <script>
            alert("Este usuario ya esta registrado.");
            window.location = "../index.php";
        </script>


        ';
        exit();
    }
    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
        <script>
            alert("Este correo ya esta registrado.");
            window.location = "../index.php";
        </script>


        ';
        exit();
    }


    // Ejecutamos el codigo cuando se suba al archivo
    $ejecutar = mysqli_query($conexion , $query);


    // Una vez subido lo mandamos a la pagina redicionando 
    if($ejecutar){
       echo '
        <script>
            window.location = "../index.php";
        </script>
        ';
    }else{}


    // Cerramos la conxion con la base de datos
    mysqli_close($conexion);
?>