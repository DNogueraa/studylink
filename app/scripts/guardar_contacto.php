<?php
require_once __DIR__ . '/../../config/config.php';
require_once __DIR__ . '/../models/usuario.php';
require_once __DIR__ . '/../models/tramite.php';

function limpiar($valor) {
  return htmlspecialchars(trim($valor), ENT_QUOTES, 'UTF-8');
}

// Paso 1: Recibir datos
$nombre = limpiar($_POST['nombre'] ?? '');
$apellido = limpiar($_POST['apellido'] ?? '');
$email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
$telefono = limpiar($_POST['telefono'] ?? '');
$pais = limpiar($_POST['pais'] ?? '');
$tramite = limpiar($_POST['tramite'] ?? '');
$descripcion = limpiar($_POST['nota'] ?? '');

// Paso 2: Validación avanzada
$errores = [];

if (!$nombre || !preg_match("/^[a-zA-ZÁÉÍÓÚÑáéíóúñ\s]{2,50}$/", $nombre)) {
  $errores[] = "Nombre no válido.";
}

if (!$apellido || !preg_match("/^[a-zA-ZÁÉÍÓÚÑáéíóúñ\s]{2,50}$/", $apellido)) {
  $errores[] = "Apellido no válido.";
}

if (!$email) {
  $errores[] = "Correo electrónico no válido.";
}

if (!$telefono || !preg_match("/^\d{8,15}$/", $telefono)) {
  $errores[] = "Número de teléfono inválido.";
}

if (!$pais || strlen($pais) > 50) {
  $errores[] = "País no válido.";
}

if (!$tramite || strlen($tramite) > 50) {
  $errores[] = "Tipo de trámite inválido.";
}

if (strlen($descripcion) > 500) {
  $errores[] = "La descripción es demasiado larga.";
}

if (preg_match("/(drop|alter|delete|insert|update)/i", $descripcion)) {
  $errores[] = "La descripción contiene términos no permitidos.";
}

// Paso 3: ¿Hay errores?
if (!empty($errores)) {
  // Mostrar alertas desde la misma página
  session_start();
  $_SESSION['errores'] = $errores;
  header("Location: ../views/contactanos.php");
  exit;
}

// Paso 4: Insertar en BD
$usuarioModel = new Usuario($conexion);
$usuarioExistente = $usuarioModel->buscarPorEmail($email);

if ($usuarioExistente) {
  $id_usuario = $usuarioExistente['ID'];
} else {
  $id_usuario = $usuarioModel->insertar($nombre, $apellido, $email, $telefono, $pais);
}

$tramiteModel = new Tramite($conexion);
$tramiteModel->insertar($tramite, $descripcion, $id_usuario);

session_start();
$_SESSION['mensaje'] = "¡Gracias! Tu mensaje fue enviado correctamente.";
header("Location: ../views/contactanos.php");
exit;
