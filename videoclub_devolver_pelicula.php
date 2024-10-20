// Procesar la Devolución (devolver_pelicula.php)
<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_alquiler = $_POST['id_alquiler'];

    $sql_update = "UPDATE alquileres SET fecha_devolucion=CURRENT_TIMESTAMP WHERE id_alquiler='$id_alquiler'";
    $sql_pelicula = "UPDATE peliculas SET disponible=1 WHERE id_pelicula=(SELECT id_pelicula FROM alquileres WHERE id_alquiler='$id_alquiler')";

    if ($conn->query($sql_update) === TRUE && $conn->query($sql_pelicula) === TRUE) {
        echo "Película devuelta correctamente.";
    } else {
        echo "Error en la devolución: " . $conn->error;
    }
}
?>
