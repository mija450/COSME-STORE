<?php
namespace app\controllers;

use PDO;
use PDOException;

class Controller {
    private $conn;

    public function __construct($connection) {
        $this->conn = $connection;
    }

    public function seleccionarDatos($tipo, $tabla, $columnas, $id) {
        try {
            if ($tipo == "Normal") {
                $stmt = $this->conn->prepare("SELECT $columnas FROM $tabla");
                $stmt->execute();
                return $stmt;
            } elseif ($tipo == "Unico") {
                $stmt = $this->conn->prepare("SELECT $columnas FROM $tabla WHERE categoria_id = :id LIMIT 1");
                $stmt->bindParam(':id', $id);
                $stmt->execute();
                return $stmt;
            }
        } catch (PDOException $e) {
            echo "Error en la consulta: " . $e->getMessage();
            return null;
        }
    }

    public function listarProductoControlador($pagina, $limite, $categoria_id) {
        try {
            $offset = ($pagina - 1) * $limite;
            $stmt = $this->conn->prepare("SELECT * FROM producto WHERE categoria_id = :categoria_id LIMIT :limite OFFSET :offset");
            $stmt->bindParam(':categoria_id', $categoria_id);
            $stmt->bindValue(':limite', (int)$limite, PDO::PARAM_INT);
            $stmt->bindValue(':offset', (int)$offset, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error al listar productos: " . $e->getMessage();
            return [];
        }
    }
}
?>