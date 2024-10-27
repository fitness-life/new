<?php 
include ('conexion.php');
$conexion=conexion();

$usuario=$_POST['usuario'];
$password=$_POST['password'];

$sql="SELECT * FROM login WHERE usuario='$usuario' AND password='$password'";
$query=mysqli_query($conexion,$sql);
$consulta=mysqli_num_rows($query);

if ($consulta) {
    echo "<script> alert('Bienvenido $usuario '); 
            location.href = './login/index.php' </script>";
} else {
    echo "No se encuentra este usuario";
} 

mysqli_free_result($query);
mysqli_close($conexion);

?>