<?php
require_once __DIR__ . '/../../config/config.php';
require_once __DIR__ . '/../models/BlogModel.php';

class BlogController {
    private $modelo;

    public function __construct($conexion) {
        $this->modelo = new BlogModel($conexion);
    }

    /**
     * Obtener los últimos posts para mostrar en el index (carrusel)
     */
    public function obtenerPostsRecientes($limite = 3) {
        return $this->modelo->obtenerUltimosPosts($limite);
    }

    /**
     * Obtener todos los datos necesarios para la vista del blog
     */
    public function obtenerDatosParaVista($id = null) {
        // Obtener post principal
        if ($id !== null) {
            $entradaPrincipal = $this->modelo->obtenerPostPorId($id);
        } else {
            $entradaPrincipal = $this->modelo->obtenerPostMasReciente();
        }

        // Obtener sugerencia diferente al post principal
        $sugerencia = $this->modelo->obtenerSugerencia($entradaPrincipal['id']);

        // Obtener los 3 más recientes para el carrusel
        $carruselPosts = $this->modelo->obtenerUltimosPosts(3);

        return [
            'entradaPrincipal' => $entradaPrincipal,
            'sugerencia' => $sugerencia,
            'carruselPosts' => $carruselPosts
        ];
    }
}
