<?php
include ('conexion.php');
$conexion=conexion();

$id=$_POST['ID_contactenos'];
$nombres=$_POST['Nombres'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$comentarios=$_POST['comentarios'];
$sql="INSERT INTO contactenos VALUES('$id', '$nombres', '$apellidos', '$telefono', '$correo', '$comentarios')";
$query=mysqli_query($conexion,$sql);

if ($query) {
    echo "<script> alert('el registro se guardo con exito!!! $nombres $apellidos '); location.href = 'Ftness Life.php' </script>";
} else {
    echo "error al guardar informacion";
}

?>