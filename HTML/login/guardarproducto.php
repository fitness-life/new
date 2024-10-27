<?php
include ('../conexion.php');
$conexion=conexion();

$ID_producto=NULL;
$nombre_producto=$_POST['nombre_producto'];
$precio=$_POST['precio'];
$ID_categoria=$_POST['ID_categoria'];
$ID_proveedor=$_POST['ID_proveedor'];
$img = $_POST['img'];
$sql="INSERT INTO productos  VALUES ('$ID_producto', '$nombre_producto','$precio', '$ID_categoria', '$ID_proveedor', '$img')";
$query=mysqli_query($conexion,$sql);

if ($query) {
    echo "<script> alert('el producto se guardo con exito!!! '); 
        location.href = 'index.php' </script>";
} else {
    echo "error al guardar la informacion";
}

?>