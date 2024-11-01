<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>guardar nuevo usuario</title>
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
.login{
    position: relative;
    width: 380px;
    height: 420px;
    background: #1c1c1c;
    border-radius: 8px;
    overflow: hidden;
    margin-top: 100px;
}
.login::before{
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
.login::after{
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
.inputBox label{
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

    <div class="login">
        <form action="../guardarusuario.php" method="post">
            <h1>Guardar usuario</h1><br>
            <label for=""><b>Nuevo Usuario</b></label><br>
            <input style="padding: 5px;" type="text" name="usuario" id="" placeholder="Ingrese Su Usuario"><br>
            <label for=""><b>Contraseña</b></label><br>
            <input style="padding: 5px;" type="text" name="password" id="" placeholder="Ingrese Su Password"><br>
            <input type="submit" value="guardar" class="submit">
        </form>
        </div>
</body>
</html>
