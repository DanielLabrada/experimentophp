<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>Crear cuenta</h1>
 <form action="signup_process.php" method="post">
  <label>Usuario:
    <input type="text" name="username" required>
  </label><br><br>

  <label>Contraseña:
    <input type="password" name="password" required>
  </label><br><br>

  <button type="submit">Registrarse</button>
</form>

</body>
</html>
