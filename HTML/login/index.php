<?php
include('../conexion.php');
$conexion = conexion();

$where="";

if (!empty($_POST)) {
    $valor=$_POST['busqueda'];
    if (!empty($valor)) {
        $where="WHERE ID_miembros LIKE '%$valor%'";
    }
}

$sql = "SELECT * FROM miembros $where";
$query = mysqli_query($conexion, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro usuarios</title>
    <link rel="stylesheet" href="#">
    <style>
        body{
            background: url(../login/fondo.jpg) no-repeat;
            background-size: cover;
            
        }
        .login{
            background-color: white;

        }
        .login a{
            text-decoration: none;
        }
        h1{
            color: white;
        }
        .que{
            margin: 10px;
            padding: 5px;
            border-radius: 4px;
        }
       .fro{
        padding: 15px;
       }
    </style>
</head>

<body>
    <div class="login" style="display: flex; gap:20px; font-size:20px; justify-content:center; background-color: black; padding:20px; border:2px solid black; box-shadow:2px 2px 2px white;" >
        <a href="../crerrarsesion.php" style="color: white;"> Cerrar sesión </a><br>
        <a href="registrousuarios.php" style="color: white;"> Registrar nuevo usuario login </a><br>
        <a href="carrito.php" style="color: white;"> Carrito de Compras </a>
    </div>
    <center>
        <div class="contenedor general">
            <h1>Registra Nuevos Miembros</h1>
            <div class="formulariou">
                <form action="guardarlogin.php" method="post">
                    <input type="hidden" name="ID_miembros ">
                    <input type="text" name="tipo_documento" id="" Placeholder="Digite el documento" style="margin:10px; padding:5px; border-radius:10px;" required><br>
                    <input type="text" name="nombres" id="" Placeholder="Digite el nombre" style="margin:10px; padding:5px; border-radius:10px;" required><br>
                    <input type="text" name="apellidos" id="" Placeholder="Digite los apellidos" style="margin:10px; padding:5px; border-radius:10px;" required><br>
                    <input type="text" name="direccion" id="" Placeholder="Digite la dirección" style="margin:10px; padding:5px; border-radius:10px;" required><br>
                    <input type="number" name="telefono" id="" Placeholder="Digite el telefono" style="margin:10px; padding:5px; border-radius:10px;" required><br>
                    <input type="email" name="correo" id="" Placeholder="Digite el correo"  style="margin:10px; padding:5px; border-radius:10px;" required><br>
                    <input type="submit" value="guardar" class="que">
                </form>
            </div>
            <br>
            <div class="buscador">
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                    <label for="buscador" style="color: white;"><b>Buscar en el CRUD:</b></label>
                    <input type="text" name="busqueda" id="busqueda">
                    <button type="submit">Buscar</button>
                </form>
            </div>

            <div class="tabla">

                <h3 style="color: white; font-size:30px;">usuarios registrados</h3>
                <table>
                    <thead>
                        <tr>
                            <th style="color: white; font-size:20px;">Id</th>
                            <th style="color: white; font-size:20px;">Documento</th>
                            <th style="color: white; font-size:20px;">Nombres</th>
                            <th style="color: white; font-size:20px;">Apellidos</th>
                            <th style="color: white; font-size:20px;">Dirección</th>
                            <th style="color: white; font-size:20px;">telefono</th>
                            <th style="color: white; font-size:20px;">correo</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) : ?>
                            <tr>
                                <td class="fro" style="color:white;"><?= $row['ID_miembros'] ?></td>
                                <td class="fro" style="color: white;"><?= $row['tipo_documento'] ?></td>
                                <td class="fro" style="color: white;"><?= $row['nombres'] ?></td>
                                <td class="fro" style="color: white;"><?= $row['apellidos'] ?></td>
                                <td class="fro" style="color: white;"><?= $row['direccion'] ?></td>
                                <td class="fro" style="color: white;"><?= $row['telefono'] ?></td>
                                <td class="fro" style="color: white;"><?= $row['correo'] ?></td>
                                <td><a class="fro" style="color: white; font-size:20px; text-decoration:none;" href="actualizar.php?ID_miembros=<?= $row['ID_miembros'] ?>">EDITAR</a></td>
                                <td><a class="fro" style="color: white; font-size:20px; text-decoration:none;" href="eliminar.php?ID_miembros=<?= $row['ID_miembros'] ?>">ELIMINAR</a></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </center>
</body>
</html>