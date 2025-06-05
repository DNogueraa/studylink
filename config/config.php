<?php
// Detecta si estás en local o en producción automáticamente
$protocolo = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$host = $_SERVER['HTTP_HOST'];
$baseFolder = ''; // AJUSTA esto si el proyecto no está en esa carpeta
define('BASE_URL', $protocolo . '://' . $host . $baseFolder);


// Parámetros de conexión
$host = 'localhost';
$dbname = 'studylink';
$username = 'root';
$password = '';

try {
    // Crear conexión PDO
    $conexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Configurar errores PDO como excepciones
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Mostrar mensaje de error si no se conecta
    die("Error de conexión: " . $e->getMessage());
}
?>
