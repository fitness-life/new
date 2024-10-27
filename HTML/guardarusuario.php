<?php
include ('conexion.php');
$conexion=conexion();

$ID_miembros=NULL;
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$sql="INSERT INTO login VALUES('$ID_miembros', '$usuario', '$password')";
$query=mysqli_query($conexion,$sql);

if ($query) {
    echo "<script> alert('el usuario se guardo con exito!!!'); location.href = './login/index.php' </script>";
} else {
    echo "<script> alert('no se pudo guardar tu usuario!!!'); location.href = './login/index.php' </script>";
}
?>