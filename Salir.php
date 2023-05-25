<?php
//para poder destruir la sesion tenemos primero que inciar la sesion
session_start();
session_destroy(); //esta funcion elimina todas las sesiones
header('Location:Index.php');//una vez destruida la sesion que redirija al login
exit();
?>