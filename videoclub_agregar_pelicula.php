// Formulario para Agregar Películas (agregar_pelicula.php)

<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login_admin.php");
    exit();
}
?>
<h2>Agregar Película</h2>
<form method="POST" action="guardar_pelicula.php">
    <input type="text" name="titulo" placeholder="Título" required>
    <button type="submit">Agregar</button>
</form>
