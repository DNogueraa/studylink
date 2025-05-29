<?php
class Tramite
{
  private $conexion;

  public function __construct($conexion)
  {
    $this->conexion = $conexion;
  }

  public function insertar($tipo, $descripcion, $id_usuario)
  {
    $stmt = $this->conexion->prepare("INSERT INTO tramite (TIPO_TRAMITE, DESCRIPCION, ID_USUARIO) VALUES (?, ?, ?)");
    $stmt->execute([$tipo, $descripcion, $id_usuario]);
    return true;
  }

  public function obtenerTramite($identificador)
  {
    $stmt = $this->conexion->prepare("
    SELECT ESTADO, FECHA_INICIO, FECHA_ACTUALIZACION, TIPO_TRAMITE, ID_USUARIO, ID_GESTOR
    FROM tramite
    WHERE identificador_publico = ?
    LIMIT 1
  ");
    $stmt->execute([$identificador]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }


  public function obtenerUsuario($id_usuario, $email)
  {
    $stmt = $this->conexion->prepare("
    SELECT NOMBRE, APELLIDO, EMAIL
    FROM usuario
    WHERE ID = ? AND EMAIL = ?
    LIMIT 1
  ");
    $stmt->execute([$id_usuario, $email]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }


  public function obtenerGestor($id_gestor)
  {
    $stmt = $this->conexion->prepare("
    SELECT NOMBRE, APELLIDO, EMAIL
    FROM gestor
    WHERE ID = ?
    LIMIT 1
  ");
    $stmt->execute([$id_gestor]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }



}
