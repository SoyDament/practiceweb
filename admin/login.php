<!DOCTYPE html>
<html>

<head>
    <title>Iniciar Sesión</title>
    <!-- Agrega tus enlaces a hojas de estilo y scripts aquí -->
</head>

<body>
    <h1>Iniciar Sesión</h1>
    <form method="post" action="process_login.php">
        <label for="username">Nombre de Usuario:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Iniciar Sesión">
    </form>
</body>

</html>