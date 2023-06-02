


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sistema CRUD</h1>
    <a href="../php/cerrar_sesion.php"><button>Cerrar Sesion</button></a>

    <div class="mostrarUsuarios">

    <h1>Tabla de Usuarios</h1>
    <table>
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Aquí va tu código de conexión a la base de datos
            include 'conexion.php';
            // Realizar la consulta para obtener los datos de la tabla de usuarios
            $query = "SELECT usuario, nombre, correo FROM usuarios";
            $resultado = mysqli_query($conexion, $query);

            // Verificar si la consulta fue exitosa
            if ($resultado && mysqli_num_rows($resultado) > 0) {
                // Recorrer los resultados y mostrar los datos en la tabla
                while ($fila = mysqli_fetch_assoc($resultado)) {
                    echo "<tr>";
                    echo "<td>".$fila['usuario']."</td>";
                    echo "<td>".$fila['nombre']."</td>";
                    echo "<td>".$fila['correo']."</td>";
                    echo "<td>";
                    echo "<a href='editar.php?usuario=".$fila['usuario']."'>Editar</a> ";
                    echo "<a href='eliminar.php?usuario=".$fila['usuario']."'>Eliminar</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr>";
                echo "<td colspan='4'>No se encontraron registros</td>";
                echo "</tr>";
            }

            // Cerrar la conexión a la base de datos
            mysqli_close($conexion);
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>