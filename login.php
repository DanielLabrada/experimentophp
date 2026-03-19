<?php
session_start();
require 'config.php'; // conexión a la base de datos

// Recoger datos del formulario
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Buscar el usuario en la base de datos
$stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
$stmt->execute([$username]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Comprobar si existe y si la contraseña coincide
if ($user && $password === $user['password']) {

    // Guardar datos en la sesión
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];

    // Redirigir al panel
    header("Location: panel.php");
    exit;
} else {
    echo "Usuario o contraseña incorrectos";
    echo "<br>";
    echo "<br>";
    echo "<a href='form_login.php'><button>Volver al login</button></a>";
}
