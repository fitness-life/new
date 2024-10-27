<?php
function conexion(){
    $host= 'sql206.byethost6.com';
    $user= 'b10_37597752';
    $pass='diesel220';
    $bd='b10_37597752_b10_37597752_';
    $conexion=mysqli_connect($host,$user,$pass,$bd);
    mysqli_select_db($conexion,$bd);
    return $conexion;
}
?>