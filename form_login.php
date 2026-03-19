<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
  <h1>Iniciar sesión</h1>
<!-- Esto solo se verá en la rama -->
  <form action="login.php" method="post">
    <label>Usuario:
      <input type="text" name="username" required>
    </label><br><br>

    <label>Contraseña:
      <input type="password" name="password" required>
    </label><br><br>

    <button type="submit">Entrar</button>
  </form>
</body>
</html>
