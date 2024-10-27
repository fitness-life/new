<?php
include ('../conexion.php');
$conexion=conexion();

$ID_producto=$_POST['ID_producto'];
$nombre_producto=$_POST['nombre_producto'];
$precio=$_POST['precio'];
$ID_categoria=$_POST['ID_categoria'];
$ID_proveedor=$_POST['ID_proveedor'];
$img=$_POST['img'];

$sql="UPDATE productos SET nombre_producto='$nombre_producto', precio='$precio', ID_categoria='$ID_categoria', ID_proveedor='$ID_proveedor', img='$img' WHERE ID_producto='$ID_producto'";
$query=mysqli_query($conexion,$sql);

if ($query) {
    header("Location: index.php");
} else {
    echo "error al actualizar la informacion";
}

?>