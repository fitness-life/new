<?php
include("../conexion.php");
$conexion=conexion();

$ID_producto=$_GET['ID_producto'];

$sql="DELETE FROM productos WHERE ID_producto='$ID_producto'";

$resultado=mysqli_query($conexion,$sql);
if ($resultado) {
    header('Location: index.php');
} else {
    echo "ERROR AL ELIMINAR EL REGISTRO";
}

?>