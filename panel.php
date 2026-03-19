<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: form_login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Panel</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
  <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['username']); ?></h1>

  <p>Has iniciado sesión correctamente.</p>

  <a href="logout.php">Cerrar sesión</a>
</body>
</html>
