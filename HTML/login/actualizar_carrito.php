<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>actualizar carrito</title>
    <link rel="Stylesheet" href="estilos.css">
    <style>
        body{
            background: url(../login/fondo.jpg) no-repeat;
            background-size: cover;
        }
        .formulariou{
            position: absolute;
            top: 250px;
            background-color: transparent;
            margin-left: 150px;
        }
        input{
            box-shadow: 2px 4px 3px black ;
            border: 1px solid black;
            border-radius: 10px;
            margin: 10px;
            padding: 5px;
        }
        h1{
            float: left;
            color:white;
            position: absolute;
            top: 150px;
            margin-left:150px;
        }
        .submit{
         margin-left: 65px;
         padding: 5px;
        }
    </style>
</head>
<body>
<?php
include('../conexion.php');
$conexion = conexion();
$ID_producto=$_GET['ID_producto'];
$sql = "SELECT * FROM productos WHERE ID_producto='$ID_producto'";
$query = mysqli_query($conexion, $sql);
$row=mysqli_fetch_array($query);
?>
            <h1>Editar Productos</h1>
            <div class="formulariou">
                <form action="editar_producto.php" method="post">
                    <input  type="hidden" name="ID_producto" value="<?= $row['ID_producto'] ?>">
                    <input type="text" name="nombre_producto" id="" value="<?=$row ['nombre_producto']?>" placeholder="Nombre de nuevo producto"><br>
                    <input type="text" name="precio" id="" value="<?=$row ['precio']?>" Placeholder="precio de nuevo producto"><br>
                    <input type="text" name="ID_categoria" id="" value="<?=$row ['ID_categoria']?>" Placeholder="número de categoria"><br>
                    <input type="text" name="ID_proveedor" id="" value="<?=$row ['ID_proveedor']?>" Placeholder="ID proveedor"><br>
                    <input type="text" name="img" value="<?=$row ['img']?>" placeholder="Ingresar imagen URL"><br>
                    <input type="submit" value="guardar" class="submit">
                </form>
            </div>
</body>
</html>