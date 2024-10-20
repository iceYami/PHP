// Préstamo de Películas (prestamo.php)

<h2>Préstamo de Películas</h2>
<form method="POST" action="alquilar_pelicula.php">
    <select name="id_pelicula">
        <?php
        $sql = "SELECT * FROM peliculas WHERE disponible=1";
        $result = $conn->query($sql);
        while ($pelicula = $result->fetch_assoc()) {
            echo "<option value='" . $pelicula['id_pelicula'] . "'>" . $pelicula['titulo'] . "</option>";
        }
        ?>
    </select>
    <button type="submit">Alquilar</button>
</form>
