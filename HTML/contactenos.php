<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/estilocontac.css">
    <link rel="shortcut icon" href="../IMAGENES/logo_fitnes life-Photoroom.png" type="image/x-icon">
    <title>Contactenos</title>
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
  <video id="video-fondo" loop muted autoplay src="../IMAGENES/fondo_ftnes-life.mp4" type="video/mp4"></video>
    <form action="guardar.php" class="form" method="post">
        <h1>Contactenos</h1>
        <input type="number" name="ID_contactenos" id="" placeholder="Documento de identidad" class="box" required>
        <input type="text" name="Nombres" id="" placeholder="Nombres" class="box" required>
        <input type="text" name="apellidos" id="" placeholder="Apellidos" class="box" required>
        <input type="number" name="telefono" id="" placeholder="Teléfono" class="box" required>
        <input type="email" name="correo" id="" placeholder="Correo" class="box" required>
        <input type="text" name="comentarios" id="" placeholder="Cuentanos tu experiencia" class="box" required>
        <input type="submit"  value="Enviar" id="" class="submit" required>

    </form> 
</body>
</html>