<?php
// Conexión a la base de datos

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admincontrasenas";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos enviados desde el formulario de registro
$username = $_POST['username'];
$password = $_POST['password'];

// Aplicar password_hash() para encriptar la contraseña
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Consulta para insertar los datos del usuario en la tabla
$sql = "INSERT INTO usuarios (nombreU, contraU) VALUES ('$username', '$hashedPassword')";

if ($conn->query($sql) === TRUE) {
    echo " ¡Bienvenido!"." $username";
} else {
    echo "Error al registrar el usuario: " . $conn->error;
}

$conn->close();
?>
