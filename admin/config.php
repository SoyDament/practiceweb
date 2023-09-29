<?php
$host = "localhost"; // Cambia esto al host de tu base de datos
$user = "Dament"; // Cambia esto a tu nombre de usuario de la base de datos
$password = "Poro191019"; // Cambia esto a tu contraseña de la base de datos
$database = "raidsmg"; // Cambia esto al nombre de tu base de datos

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
