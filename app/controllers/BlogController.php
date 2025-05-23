<?php
require_once __DIR__ . '/../../config/config.php';
require_once __DIR__ . '/../models/BlogModel.php';


class BlogController {
    private $modelo;

    public function __construct($conexion) {
        $this->modelo = new BlogModel($conexion);
    }

    /**
     * Obtener los últimos posts para mostrar en el index
     */
    public function obtenerPostsRecientes($limite = 3) {
        return $this->modelo->obtenerUltimosPosts($limite);
    }
}
