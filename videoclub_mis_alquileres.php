// Listado de Alquileres (mis_alquileres.php)
<h2>Mis Alquileres</h2>
<table>
    <tr>
        <th>Título</th>
        <th>Fecha de Alquiler</th>
        <th>Fecha de Devolución</th>
    </tr>
    <?php
    session_start();
    include 'config.php';

    $id_usuario = $_SESSION['usuario_id'];
    $sql = "SELECT p.titulo, a.fecha_alquiler, a.fecha_devolucion FROM alquileres a JOIN peliculas p ON a.id_pelicula = p.id_pelicula WHERE a.id_usuario='$id_usuario'";
    $result = $conn->query($sql);

    while ($alquiler = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $alquiler['titulo'] . "</td>
                <td>" . $alquiler['fecha_alquiler'] . "</td>
                <td>" . ($alquiler['fecha_devolucion'] ? $alquiler['fecha_devolucion'] : 'No devuelta') . "</td>
              </tr>";
    }
    ?>
</table>
