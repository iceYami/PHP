//Configuración de Conexión a la Base de Datos (config.php)

<?php
$servername = "localhost";
$username = "root"; // Ajustar según sea necesario
$password = ""; // Ajustar según sea necesario
$dbname = "videoclub";

// Estableciendo conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobando la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
