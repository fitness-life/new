<?php
include("../conexion.php");
$conexion=conexion();

$ID_miembros=$_GET['ID_miembros'];

$sql="DELETE FROM miembros WHERE ID_miembros='$ID_miembros'";

$resultado=mysqli_query($conexion,$sql);
if ($resultado) {
    header('Location: index.php');
} else {
    echo "ERROR AL ELIMINAR EL REGISTRO";
}

?>