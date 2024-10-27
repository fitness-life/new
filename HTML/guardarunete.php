<?php
include ('conexion.php');
$conexion=conexion();

$ID_plan=$_POST['ID_plan'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$tipo_plan=$_POST['tipo_plan'];
$metodo_pago=$_POST['metodo_pago'];
$sql="INSERT INTO planes VALUES('$ID_plan', '$nombre', '$apellido', '$telefono', '$correo', '$tipo_plan', '$metodo_pago')";
$query=mysqli_query($conexion,$sql);

if ($query) {
    echo "<script> alert('el registro se guardo con exito!!! $nombre $apellido '); location.href = 'Ftness Life.php' </script>";
} else {
    echo "<script> alert('no se pudo guardar tu registro!!! $nombre $apellido '); location.href = 'unete.php' </script>";
}

?>