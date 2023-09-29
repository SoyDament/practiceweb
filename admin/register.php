<!DOCTYPE html>
<html>

<head>
    <title>Registrarse</title>
    <!-- Agrega tus enlaces a hojas de estilo y scripts aquí -->
</head>

<body>
    <h1>Registrarse</h1>
    <form method="post" action="process_register.php">
        <label for="username">Nombre de Usuario:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br>

        <!-- Agrega más campos según tus requisitos de registro -->

        <input type="submit" value="Registrarse">
    </form>
</body>

</html>