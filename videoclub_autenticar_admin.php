13. Autenticación del Administrador (autenticar_admin.php)
<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];

    // Aquí se puede usar un email y contraseña fijos para el admin
    if ($email === 'admin@example.com' && $contrasena === 'admin123') {
        $_SESSION['admin'] = true;
        echo "Bienvenido, Administrador.";
    } else {
        echo "Credenciales incorrectas.";
    }
}
?>
