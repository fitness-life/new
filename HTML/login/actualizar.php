
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>actualizar</title>
    <link rel="Stylesheet" href="estilos.css">
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial;
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 10vh;
    background: url(../login/men.jpg) no-repeat;
    background-size: cover;
}
.formulariou{
    position: relative;
    width: 380px;
    height: 420px;
    background: #1c1c1c;
    border-radius: 8px;
    overflow: hidden;
    margin-top: 100px;
}
.formulariou::before{
    content: "";
    position: absolute;
    top: -50%;
    left: -50%;
    width: 380px;
    height: 420px;
    background: linear-gradient(0deg, transparent, white,white);
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
    animation-delay: -3s;
}
.formulariou::after{
    content: "";
    position: absolute;
    top: -50%;
    left: -50%;
    width: 380px;
    height: 420px;
    background: linear-gradient(0deg, transparent, white,white);
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
}
@keyframes animate{
    0%{
        transform: rotate(0deg);
    }
    100%{
        transform: rotate(360deg);
    }
}
form{
    position: absolute;
    inset: 2px;
    border-radius: 8px;
    background: #28292d;
    z-index: 10;
    padding: 50px 40px;
    display: flex;
    flex-direction: column;
}
form h2{
    color:#45f3ff ;
    font-weight: 500;
    text-align: center;
    letter-spacing: 0.1em;
}
.inputBox{
    position: relative;
    width: 300px;
    margin-top: 35px;
}
.inputBox input{
    position: relative;
    width: 100%;
    padding: 20px 10px 10px;
    background: transparent;
    border: none;
    outline: none;
    color: white;
    font-size: 1em;
    letter-spacing: 0..5em;
}
.inputBox span{
    position: absolute;
    left: 0;
    padding: 20px 10px 10px;
    font-size: 1em;
    color: #8f8f8f;
    pointer-events: none;
    letter-spacing: 0.05em;
    transition: 0.5s;
}
.inputBox input:valid > span,
.inputBox input:focus > span
{
    color: #45f3ff;
    transform: translateX(0px) translateY(-34px);
    font-size: 0.75em;
}
.inputBox i{
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 2px;
    background: #45f3ff;
    border-radius: 4px;
    transition: 0.5s;
    pointer-events: none;
    z-index: 9;
}
.inputBox input:valid > i,
.inputBox input:focus > i{
    height: 44px;
}
.links{
    display: flex;
    justify-content: space-between;
}
.links a{
    margin: 10px 0;
    font-size: 0.75em;
    color: #8f8f8f;
    text-decoration: none;
}
.links a:hover,
.links a:nth-child(2)
{
    color: #45f3ff;
}
input[type="submit"]
{
    border: none;
    outline: none;
    background: #45f3ff;
    padding: 11px 25px;
    width: 100px;
    margin-top: 10px;
    border-radius: 4px;
    font-weight: 600;
    cursor: pointer;
    margin: auto;
}
input[type="submit"]:active
{
    opacity: 0.4;
}
::placeholder{
    color: white;
}
    </style>
</head>
<body>
<?php
include('../conexion.php');
$conexion = conexion();
$ID_miembros=$_GET['ID_miembros'];
$sql = "SELECT * FROM miembros WHERE ID_miembros='$ID_miembros'";
$query = mysqli_query($conexion, $sql);
$row=mysqli_fetch_array($query);
?>
            <div class="formulariou">
                <form action="editar.php" method="post">
                    <h2>Registra Nuevos Miembros</h2><br>
                    <input style="padding: 2px;" type="hidden" name="ID_miembros" value="<?= $row['ID_miembros']?>">
                    <input style="padding: 2px;" type="text" name="tipo_documento" id="" Placeholder="Digite el documento" value="<?= $row['tipo_documento']?>"><br>
                    <input style="padding: 2px;" type="text" name="nombres" id="" Placeholder="Digite el nombre"  value="<?= $row['nombres']?>"><br>
                    <input style="padding: 2px;" type="text" name="apellidos" id="" Placeholder="Digite los apellidos"  value="<?= $row['apellidos']?>"><br>
                    <input style="padding: 2px;" type="text" name="direccion" id="" Placeholder="Digite la dirección"  value="<?= $row['direccion']?>"><br>
                    <input style="padding: 2px;" type="number" name="telefono" id="" Placeholder="Digite el telefono" value="<?= $row['telefono']?>"><br>
                    <input style="padding: 2px;" type="email" name="correo" id="" Placeholder="Digite el correo" value="<?= $row['correo']?>"><br>
                    <input type="submit" value="guardar">
                </form>
            </div>
</body>
</html>