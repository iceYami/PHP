// Devolución de Películas (devolucion.php)

<h2>Devolución de Películas</h2>
<form method="POST" action="devolver_pelicula.php">
    <select name="id_alquiler">
        <?php
        $id_usuario = $_SESSION['usuario_id'];
        $sql = "SELECT a.id_alquiler, p.titulo FROM alquileres a JOIN peliculas p ON a.id_pelicula = p.id_pelicula WHERE a.id_usuario='$id_usuario' AND a.fecha_devolucion IS NULL";
        $result = $conn->query($sql);
        while ($alquiler = $result->fetch_assoc()) {
            echo "<option value='" . $alquiler['id_alquiler'] . "'>" . $alquiler['titulo'] . "</option>";
        }
        ?>
    </select>
    <button type="submit">Devolver</button>
</form>
