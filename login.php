<?php
// Iniciamos la sesión en la parte superior del archivo login.php
session_start();

// Conexión a la base de datos - igual que en registro.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admincontrasenas";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión - igual que en registro.php
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos enviados desde el formulario de login
$username = $_POST['username'];
$password = $_POST['password'];

// Consulta para obtener el hash de la contraseña del usuario
$sql = "SELECT contraU FROM usuarios WHERE nombreU = '$username'";

$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    // Verificar la contraseña utilizando password_verify()
    if (password_verify($password, $row['contraU'])) {
        // Usuario válido, se ha encontrado una coincidencia
        echo "¡Bienvenido, " . $username . "!";

        // Iniciar la sesión y guardar el nombre de usuario
        $_SESSION['username'] = $username;
    } else {
        // Usuario no válido
        echo "Credenciales incorrectas. Por favor, intenta de nuevo.";
    }
} else {
    // Usuario no válido
    echo "Credenciales incorrectas. Por favor, intenta de nuevo.";
}

$conn->close();
?>
