<?php
include ('../conexion.php');
$conexion=conexion();

$ID_miembros=$_POST['ID_miembros'];
$tipo_documento=$_POST['tipo_documento'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$sql="UPDATE miembros SET tipo_documento='$tipo_documento', nombres='$nombres', apellidos='$$apellidos', direccion='$direccion', telefono='$telefono', correo='$correo' WHERE ID_miembros='$ID_miembros'";
$query=mysqli_query($conexion,$sql);

if ($query) {
    header("Location: index.php");
} else {
    echo "error al actualizar la informacion";
}

?>