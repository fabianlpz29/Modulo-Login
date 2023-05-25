<?php
session_start(); //para poder enviar la variable sesion para la validacion
include_once 'ConexionPDO.php'; //incluimos la clase conexion
include_once 'Login.php'; //incluimos la clase login

$host = "localhost";
$dbname = "supermercado";
$usuario = "root";
$contrasena = "";
$conexion = new ConexionPDO($host, $dbname, $usuario, $contrasena);
$conexion->Conectar();

$error_msg = ""; // Variable para almacenar el mensaje de error

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Guardamos en estas variables los datos que envía el formulario
    $usuario = $_POST['usuario'];
    $password = MD5($_POST['password']);

    $login = new Login($conexion);

    if ($login->login($usuario, $password)) {
        $_SESSION['usuario'] = $usuario; //valida la sescion()
        header("Location: Dash.php");
        exit(); // Agregamos exit() para detener la ejecución después de redireccionar
    } else {
        $error_msg = "Nombre de usuario o contraseña incorrecta";
    }
}
//$conexion->Desconectar();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <form action="Index.php" method="post">
        <h2>Supermercado El Pastor</h2>
        <br>
        <label for="">Usuario</label>
        <input type="text" name="usuario" required autocomplete="off">
        <br>
        <label for="">Contraseña</label>
        <input type="password" name="password" required>
        <div class="error-message" style="color: red;"><?php echo $error_msg; ?></div>

        <button type="submit">Iniciar sesión</button>
    </form>

</body>

</html>