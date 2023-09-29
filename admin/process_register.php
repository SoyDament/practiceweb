<?php
require_once("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Verifica si el nombre de usuario ya existe en la base de datos
    $check_query = "SELECT * FROM usuarios WHERE username = '$username'";
    $check_result = $conn->query($check_query);

    if ($check_result->num_rows > 0) {
        // El nombre de usuario ya está en uso
        header("Location: register.php?error=1"); // Redirige de nuevo al formulario de registro con un mensaje de error
    } else {
        // Registra al nuevo usuario en la base de datos
        $insert_query = "INSERT INTO usuarios (username, password) VALUES ('$username', '$password')";
        if ($conn->query($insert_query) === TRUE) {
            // Registro exitoso
            header("Location: login.php"); // Redirige al formulario de inicio de sesión después del registro exitoso
        } else {
            // Error en el registro
            header("Location: register.php?error=2"); // Redirige de nuevo al formulario de registro con un mensaje de error
        }
    }
}

$conn->close();
