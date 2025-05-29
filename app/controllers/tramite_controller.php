<?php
header('Content-Type: application/json');

require_once __DIR__ . '/../../config/config.php'; // aquí ya se crea $conexion
require_once __DIR__ . '/../models/tramite.php';

$identificador = trim($_POST['identificador'] ?? '');
$email = trim($_POST['email'] ?? '');

// Validación básica
if (empty($identificador) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo json_encode(["success" => false, "error" => "Datos inválidos"]);
  exit;
}

// Crear instancia del modelo con la conexión ya existente
$model = new Tramite($conexion);

$tramite = $model->obtenerTramite($identificador);


if ($tramite) {
  $usuario = $model->obtenerUsuario($tramite['ID_USUARIO'], $email);

  if ($usuario) {
    $gestor = $model->obtenerGestor($tramite['ID_GESTOR']);

    // Si no hay gestor, mostrar "No asignado"
    $gestorInfo = [
      "nombre" => $gestor['NOMBRE'] ?? "No asignado",
      "apellido" => $gestor['APELLIDO'] ?? "",
      "email" => $gestor['EMAIL'] ?? ""
    ];

    // ✅ Ahora es seguro acceder a $gestor['...']
    echo json_encode([
      "success" => true,
      "tramite" => [
        "estado" => $tramite['ESTADO'] ?? 'No definido',
        "fecha_inicio" => $tramite['FECHA_INICIO'],
        "fecha_actualizacion" => $tramite['FECHA_ACTUALIZACION'],
        "tipo_tramite" => $tramite['TIPO_TRAMITE']
      ],
      "usuario" => [
        "nombre" => $usuario['NOMBRE'],
        "apellido" => $usuario['APELLIDO'],
        "email" => $usuario['EMAIL']
      ],
      "gestor" => $gestorInfo
      ]);
    exit;
  }
}


echo json_encode(["success" => false, "error" => "Trámite o usuario no encontrados"]);
