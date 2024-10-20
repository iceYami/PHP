// Guardar Película en la Base de Datos (guardar_pelicula.php)
<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];

    $sql = "INSERT INTO peliculas (titulo) VALUES ('$titulo')";

    if ($conn->query($sql) === TRUE) {
        echo "Película agregada exitosamente.";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
