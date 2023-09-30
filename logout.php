<?php
// Iniciamos la sesión en la parte superior del archivo logout.php
session_start();

// Destruir todas las variables de sesión
session_unset();

// Destruir la sesión
session_destroy();

// Redireccionar al inicio o a otra página después de cerrar sesión
header("Location: index.php");
exit();
?>
