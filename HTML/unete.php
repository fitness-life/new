<?php
include('conexion.php');
$conexion = conexion();
$sql = "SELECT * FROM planes";
$query = mysqli_query($conexion, $sql);
?>
<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Unete ahora!</title>
    <link rel="Stylesheet" href="../CSS/unete.css">
    <link rel="shortcut icon" href="../img/logo_fitnes life-Photoroom.png" type="image/x-icon">
</head>
<style>
    #video-fondo{
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh; 
        object-fit: cover;
        z-index: -1;
    }
</style>
<body>
<center>
    <video id="video-fondo" loop muted autoplay src="../IMAGENES/fondo_ftnes-life.mp4" type="video/mp4"></video>
            <div class="form">
                <form action="guardarunete.php" method="post">
                <h1>¡Unete ahora!</h1><br>
                    <input type="number" name="ID_plan" id="" placeholder="Documento de identidad" class="box" required>
                    <input type="text" name="nombre" id="" Placeholder="Nombres" class="box" required>
                    <input type="text" name="apellido" id="" Placeholder="Apellidos" class="box" required>
                    <input type="number" name="telefono" id="" Placeholder="Telefono" class="box" required>
                    <input type="email" name="correo" id="" Placeholder="Correo" class="box" required>
                    <label for="tipo_plan"></label>
                    <select name="tipo_plan" id="tipo_plan" class="box" required>
                        <option value="Plan Basico">Plan Basico</option>
                        <option value="Plan Semanal">Plan Semanal</option>
                        <option value="Plan Mensual">Plan Mensual</option>
                    </select>
                    <label for="metodo_pago"></label>
                    <select name="metodo_pago" id="metodo_pago" class="box" required >
                        <option value="Efectivo">Efectivo</option>
                        <option value="Targeta Credito">Tarjeta Credito</option>
                        <option value="Plan Mensual">Transferencia</option>
                    </select>
                    
                    <input type="submit" value="Enviar" class="submit">
                </form>
</center>
</body>
</html>