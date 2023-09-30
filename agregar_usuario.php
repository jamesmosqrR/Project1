<?php
// Conexión a la base de datos - igual que en login.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admincontrasenas";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión - igual que en login.php
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
    echo "Registro exitoso. ¡Bienvenido!";
} else {
    echo "Error al registrar el usuario: " . $conn->error;
}

$conn->close();
?>
