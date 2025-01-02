<?php
// Iniciar la sesión
session_start();

// Eliminar todas las variables de la sesión
session_unset();

// Destruir la sesión
session_destroy();

// Redirigir a la página principal o a una página de inicio de sesión
header("Location: index.php");
exit();
?>
