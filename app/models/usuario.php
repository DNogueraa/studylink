<?php
class Usuario {
  private $conexion;

  public function __construct($conexion) {
    $this->conexion = $conexion;
  }

  public function buscarPorEmail($email) {
    $stmt = $this->conexion->prepare("SELECT ID FROM usuario WHERE EMAIL = ?");
    $stmt->execute([$email]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function insertar($nombre, $apellido, $email, $telefono, $pais) {
    $stmt = $this->conexion->prepare("INSERT INTO usuario (NOMBRE, APELLIDO, EMAIL, NUMERO_TELEFONO, pais) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$nombre, $apellido, $email, $telefono, $pais]);
    return $this->conexion->lastInsertId();
  }
}
