// Alquiler de Películas (alquilar_pelicula.php)

<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_usuario = $_SESSION['usuario_id'];
    $id_pelicula = $_POST['id_pelicula'];

    // Comprobar disponibilidad
    $sql_check = "SELECT * FROM peliculas WHERE id_pelicula='$id_pelicula' AND disponible=1";
    $result_check = $conn->query($sql_check);

    if ($result_check->num_rows > 0) {
        // Registrar alquiler
        $sql_alquilar = "INSERT INTO alquileres (id_usuario, id_pelicula) VALUES ('$id_usuario', '$id_pelicula')";
        $sql_update = "UPDATE peliculas SET disponible=0 WHERE id_pelicula='$id_pelicula'";

        if ($conn->query($sql_alquilar) === TRUE && $conn->query($sql_update) === TRUE) {
            echo "Película alquilada con éxito.";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Película no disponible.";
    }
}
?>
