<?php 

include 'conexion.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$pass = $_POST['password'];


$sql = "INSER INTO (nombre,email,clave) VALUES ('$nombre','$email','$pass')";

$query = mysqli_query($conn,$sql) or die('Error al crear usuario: '. mysqli_connect_error());

if($query){
    session_start();
    $_SESSION['nombre'] = $nombre;
    $_SESSION['email'] = $email;
    header('Location: inventario.php');
}

?>

<!DOCTYPE html>

<html lang="es">

<head>
    <title>Registrarse - Inventario</title>
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <link rel="stylesheet" href="css/index.css?v=echo(rand());">
    <link rel="stylesheet" href="css/login-style.css?v=echo(rand());">
</head>

<body>
    <nav>
        <div id="nav-container">
            <span  id="nav-logo"><h3><a href="index.php" id="logo-text">Inventario</a></h3></span>
            <ul>
 
                <li><a href="login.php" class="nav-item">Login</a></li>
                <li><a href="registro.php" class="nav-item">Registrarse</a></li>
            </ul>
        </div>
    </nav>

    <div id="login-card">
        <div id="login-content">
            <form action="registro.php" method="post">
                <label for="txtNombre">Username</label>
                <input type="text" name="nombre" id="txtNombre" required>

                <label for="txtMail">Correo</label>
                <input type="email" name="email" id="txtMail" required>

                <label for="txtPassword">Contraseña</label>
                <input type="password" name="password" id="txtPassword" required>
                <input type="submit" value="Loguearse">
            </form>
        </div>
    </div>
    
    <div id="footer">
        <h3 id="footer-title">Pie de página</h3>
        <div class="row">
            <ul id="col1">
            <li class="column-opt">Opción</li>
            <li class="column-opt">Opción</li>
            <li class="column-opt">Opción</li>
            <li class="column-opt">Opción</li>
            </ul>
            <ul id="col2">
                <li class="column-opt">Opción</li>
                <li class="column-opt">Opción</li>
                <li class="column-opt">Opción</li>
                <li class="column-opt">Opción</li>
            </ul>
        </div>
    </div>
</body>
</html>