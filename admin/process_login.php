<?php
session_start();
require_once("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Realiza una consulta a la base de datos para verificar las credenciales
    $query = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // Inicio de sesión exitoso
        $_SESSION["username"] = $username;
        header("Location: index.php"); // Redirige a la página de inicio
    } else {
        // Inicio de sesión fallido
        header("Location: login.php?error=1"); // Redirige de nuevo al formulario de inicio de sesión con un mensaje de error
    }
}

$conn->close();
