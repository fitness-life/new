<?php
include('../conexion.php');
$conexion = conexion();

$where="";

if (!empty($_POST)) {
    $valor=$_POST['busqueda'];
    if (!empty($valor)) {
        $where="WHERE ID_producto LIKE '%$valor%'";
    }
}

$sql = "SELECT * FROM productos $where";
$query = mysqli_query($conexion, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de productos</title>
    <link rel="Stylesheet" href="estilos.css">
    <style>
       body{
        background: url(../login/fondo.jpg) no-repeat;
        background-size: cover;
       }
       .login{
        display: flex;
        gap: 20px;
        justify-content: center;
        background-color:black;
        padding: 20px;
       }
       .login a{
        text-decoration: none;
        color:white;
        font-size: 20px;
       }
       h1{
        color: white;
        font-size: 30px;
       }
       .formulariou{
        background-color:transparent;
       }
       input{
        background: white;
        padding: 5px;
        margin: 10px;
        border-radius: 10px;
        box-shadow: 2px 4px 3px black;
       }
       .submit{
        background-color:black;
        color: white;
        padding: 10px;
        margin: 5px;
        
       }
       .tabla{
        background-color: transparent;
       }
       .tabla th{
        color:white;
       }
       .fro{
        color: white;
        text-decoration: none;
        padding: 15px;
       }h3{
        color: white;
        font-size: 25px;
       }
    </style>
</head>

<body>
    <div class="login">
        <a href="../crerrarsesion.php"> Cerrar sesion </a><br>
        <a href="registrousuarios.php"> Registrar nuevo usuario login </a><br>
        <a href="index.php"> Registrar nuevos Miembros </a>
    </div>
    <center>
        <div class="contenedor general">
            <h1>Registra Nuevos productos</h1>
            <div class="formulariou">
                <form action="guardarproducto.php" method="post">
                    <input type="hidden" name="ID_producto">
                    <input type="text" name="nombre_producto" id="" Placeholder="Nombre de nuevo producto"><br>
                    <input type="text" name="precio" id="" Placeholder="precio de nuevo producto"><br>
                    <input type="text" name="ID_categoria" id="" Placeholder="número de categoria"><br>
                    <input type="text" name="ID_proveedor" id="" Placeholder="ID proveedor"><br>
                    <input type="text" name="img" placeholder="Ingresar imagen URL"><br>
                    <input type="submit" value="guardar" class="submit">
                </form>
            </div>
            <br>
            <div class="buscador">
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                    <label for="buscador" style="color: white; "><b>Buscar en el CRUD:</b></label>
                    <input type="text" name="busqueda" id="busqueda">
                    <button type="submit">Buscar</button>
                </form>
            </div>

            <div class="tabla">

                <h3>Productos Ingresados</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Id producto</th>
                            <th>Nombre_Producto</th>
                            <th>Precio</th>
                            <th>categoria</th>
                            <th>id proveedor</th>
                            <th>Imagen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) : ?>
                            <tr>
                                <td class="fro"><?= $row['ID_producto'] ?></td>
                                <td class="fro"><?= $row['nombre_producto'] ?></td>
                                <td class="fro"><?= $row['precio'] ?></td>
                                <td style="color:white;"><?= $row['ID_categoria'] ?></td>
                                <td class="fro"><?= $row['ID_proveedor'] ?></td>
                                <td class="fro"><?= $row['img'] ?></td>
                                <td ><a class="fro" href="actualizar_carrito.php?ID_producto=<?= $row['ID_producto'] ?>">EDITAR</a></td>
                                <td ><a class="fro" href="eliminar_producto.php?ID_producto=<?= $row['ID_producto'] ?>">ELIMINAR</a></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </center>
</body>

</html>