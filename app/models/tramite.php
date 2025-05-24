<?php
class Tramite {
  private $conexion;

  public function __construct($conexion) {
    $this->conexion = $conexion;
  }

  public function insertar($tipo, $descripcion, $id_usuario) {
    $stmt = $this->conexion->prepare("INSERT INTO tramite (TIPO_TRAMITE, DESCRIPCION, ID_USUARIO) VALUES (?, ?, ?)");
    $stmt->execute([$tipo, $descripcion, $id_usuario]);
    return true;
  }
}
