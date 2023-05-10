<?php


    $conexion = mysqli_connect("localhost", " root", " ", "login_register_db" );

    echo 'test';
    if ($conexion){
        echo 'Se conecto a la base de datos';
    }else{
        echo 'No se a podido conectar';
    }
?>