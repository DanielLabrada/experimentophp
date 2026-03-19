<?php
$host = 'localhost';      // Dirección del servidor MySQL
$db   = 'login_demo';     // Nombre de tu base de datos
$user = 'root';           // Usuario de MySQL (en local suele ser root)
$pass = '';               // Contraseña (en XAMPP normalmente está vacía)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}


















































