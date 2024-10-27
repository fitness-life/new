<?php
include ('../conexion.php');
$conexion=conexion();

$ID_miembros=NULL;
$tipo_documento=$_POST['tipo_documento'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$sql="INSERT INTO miembros VALUES ('$ID_miembros', '$tipo_documento', '$nombres', '$apellidos', '$direccion', '$telefono' , '$correo')";
$query=mysqli_query($conexion,$sql);

if ($query) {
    echo "<script> alert('el registro se guardo con exito!!! '); 
        location.href = 'index.php' </script>";
} else {
    echo "error al guardar informacion";
}

?>