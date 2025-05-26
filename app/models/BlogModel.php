<?php

class BlogModel {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    /**
     * Obtener los últimos N posts publicados
     * @param int $limite número de posts a recuperar
     * @return array
     */
    public function obtenerUltimosPosts($limite = 3) {
        $sql = "SELECT id, titulo, imagen, resumen FROM posts_blog ORDER BY fecha_publicacion DESC LIMIT :limite";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindValue(':limite', (int)$limite, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Obtener un post completo por su ID (opcional para blog.php)
     */
    public function obtenerPostPorId($id) {
        $sql = "SELECT * FROM posts_blog WHERE id = :id";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Obtener el post más reciente
     */

    public function obtenerPostMasReciente() {
        $sql = "SELECT * FROM posts_blog ORDER BY fecha_publicacion DESC LIMIT 1";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
    /*  Siempre devuelve el post más reciente que no sea el principal.
    
    public function obtenerSugerencia($excluirId) {
        $sql = "SELECT * FROM posts_blog WHERE id != :id ORDER BY fecha_publicacion DESC LIMIT 1";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindParam(':id', $excluirId, PDO::PARAM_INT);
        $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
*/
    public function obtenerSugerencia($excluirId) {
        $sql = "SELECT id, titulo, imagen, resumen FROM posts_blog WHERE id != :id ORDER BY RAND() LIMIT 1";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindParam(':id', $excluirId, PDO::PARAM_INT);
        $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}



}
