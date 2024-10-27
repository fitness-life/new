<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../IMAGENES/logo_fitnes life-photoroom.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/estilos_sesion.css">
    <title>Inicio de Sesiòn</title>
</head>
<body>
   <div class="box">
    <form action="validar2.php" method="post">
        <h2>Iniciar Sesiòn</h2>
        <div class="inputBox">
            <input type="text" required="required" placeholder="Usuario" name="usuario" id="">
            <i></i>
        </div>

        <div class="inputBox">
            <input type="password" required="required" placeholder="Contraseña" name="password" id="">
            <i></i>
        </div>
        <input type="submit" value="Iniciar">
    </form>
   </div>
</body>
</html>