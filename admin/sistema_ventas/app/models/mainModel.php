<?php

namespace app\models;
use \PDO;

if (file_exists(__DIR__ . "/../../config/server.php")) {
    require_once __DIR__ . "/../../config/server.php";
}

class mainModel {

    private $server = DB_SERVER;
    private $db = DB_NAME;
    private $user = DB_USER;
    private $pass = DB_PASS;

    /*----------  Funcion conectar a BD  ----------*/
    protected function conectar() {
        try {
            $conexion = new PDO("mysql:host=" . $this->server . ";dbname=" . $this->db, $this->user, $this->pass);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARACTER SET utf8");
            return $conexion;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    /*----------  Funcion ejecutar consultas  ----------*/
    protected function ejecutarConsulta($consulta, $parametros = []) {
        try {
            $conexion = $this->conectar();
            $sql = $conexion->prepare($consulta);
            foreach ($parametros as $clave => $valor) {
                $sql->bindValue($clave, $valor);
            }
            $sql->execute();
            return $sql;
        } catch (PDOException $e) {
            die("Error al ejecutar la consulta: " . $e->getMessage() . " en la consulta: " . $consulta);
        }
    }

    /*----------  Funcion limpiar cadenas  ----------*/
    public function limpiarCadena($cadena) {
        $palabras = ["<script>", "</script>", "<script src", "<script type=", "SELECT * FROM", "SELECT ", " SELECT ", "DELETE FROM", "INSERT INTO", "DROP TABLE", "DROP DATABASE", "TRUNCATE TABLE", "SHOW TABLES", "SHOW DATABASES", "<?php", "?>", "--", "^", "<", ">", "==", ";", "::"];
        $cadena = trim($cadena);
        $cadena = stripslashes($cadena);
        foreach ($palabras as $palabra) {
            $cadena = str_ireplace($palabra, "", $cadena);
        }
        return trim(stripslashes($cadena));
    }

    /*----------  Funcion verificar datos (expresion regular) ----------*/
    protected function verificarDatos($filtro, $cadena) {
        return !preg_match("/^" . $filtro . "$/", $cadena);
    }

    /*----------  Funcion para ejecutar una consulta INSERT preparada  ----------*/
    protected function guardarDatos($tabla, $datos) {
        try {
            $query = "INSERT INTO $tabla (" . implode(", ", array_column($datos, 'campo_nombre')) . ") VALUES (" . implode(", ", array_column($datos, 'campo_marcador')) . ")";
            $sql = $this->conectar()->prepare($query);
            foreach ($datos as $clave) {
                $sql->bindParam($clave["campo_marcador"], $clave["campo_valor"]);
            }
            $sql->execute();
            return $sql;
        } catch (PDOException $e) {
            die("Error al guardar los datos: " . $e->getMessage());
        }
    }

    /*---------- Funcion seleccionar datos ----------*/
    public function seleccionarDatos($tipo, $tabla, $campo, $id) {
        $tipo = $this->limpiarCadena($tipo);
        $tabla = $this->limpiarCadena($tabla);
        $campo = $this->limpiarCadena($campo);
        $id = $this->limpiarCadena($id);
        $sql = $this->conectar()->prepare($tipo == "Unico" ? "SELECT * FROM $tabla WHERE $campo=:ID" : "SELECT $campo FROM $tabla");
        if ($tipo == "Unico") {
            $sql->bindParam(":ID", $id);
        }
        $sql->execute();
        return $sql;
    }

    /*----------  Funcion para ejecutar una consulta UPDATE preparada  ----------*/
    protected function actualizarDatos($tabla, $datos, $condicion) {
        $set = implode(", ", array_map(function($clave) {
            return $clave["campo_nombre"] . "=" . $clave["campo_marcador"];
        }, $datos));
        $query = "UPDATE $tabla SET $set WHERE " . $condicion["condicion_campo"] . "=" . $condicion["condicion_marcador"];
        $sql = $this->conectar()->prepare($query);
        foreach ($datos as $clave) {
            $sql->bindParam($clave["campo_marcador"], $clave["campo_valor"]);
        }
        $sql->bindParam($condicion["condicion_marcador"], $condicion["condicion_valor"]);
        $sql->execute();
        return $sql;
    }

    /*---------- Funcion eliminar registro ----------*/
    protected function eliminarRegistro($tabla, $campo, $id) {
        $sql = $this->conectar()->prepare("DELETE FROM $tabla WHERE $campo=:id");
        $sql->bindParam(":id", $id);
        $sql->execute();
        return $sql;
    }

    /*---------- Paginador de tablas ----------*/
    protected function paginadorTablas($pagina, $numeroPaginas, $url, $botones) {
        $tabla = '<nav class="pagination is-centered is-rounded" role="navigation" aria-label="pagination">';
        $tabla .= $pagina <= 1 ? '<a class="pagination-previous is-disabled" disabled><i class="fas fa-arrow-alt-circle-left"></i> &nbsp; Anterior</a><ul class="pagination-list">' : '<a class="pagination-previous" href="' . $url . ($pagina - 1) . '/"><i class="fas fa-arrow-alt-circle-left"></i> &nbsp; Anterior</a><ul class="pagination-list"><li><a class="pagination-link" href="' . $url . '1/">1</a></li><li><span class="pagination-ellipsis">&hellip;</span></li>';
        
        // Inicializar la variable $ci
        $ci = 0;

        for ($i = $pagina; $i <= $numeroPaginas && $ci < $botones; $i++) {
            $tabla .= $pagina == $i ? '<li><a class="pagination-link is-current" href="' . $url . $i . '/">' . $i . '</a></li>' : '<li><a class="pagination-link" href="' . $url . $i . '/">' . $i . '</a></li>';
            $ci++;
        }
        
        $tabla .= $pagina == $numeroPaginas ? '</ul><a class="pagination-next is-disabled" disabled><i class="fas fa-arrow-alt-circle-right"></i> &nbsp; Siguiente</a>' : '<li><span class="pagination-ellipsis">&hellip;</span></li><li><a class="pagination-link" href="' . $url . $numeroPaginas . '/">' . $numeroPaginas . '</a></li></ul><a class="pagination-next" href="' . $url . ($pagina + 1) . '/"><i class="fas fa-arrow-alt-circle-right"></i> &nbsp; Siguiente</a>';
        $tabla .= '</nav>';
        return $tabla;
    }

    /*----------  Funcion generar select ----------*/
    public function generarSelect($datos, $campo_db) {
        $select = '';
        foreach ($datos as $key => $row) {
            $checked = $campo_db == $row ? 'selected=""' : '';
            $select .= '<option value="' . $row . '" ' . $checked . '>' . ($key + 1) . ' - ' . $row . ($checked ? ' (Actual)' : '') . '</option>';
        }
        return $select;
    }

    /*----------  Funcion generar codigos aleatorios  ----------*/
    protected function generarCodigoAleatorio($longitud, $correlativo) {
        $codigo = "";
        $caracter = "Letra";
        for ($i = 1; $i <= $longitud; $i++) {
            $codigo .= $caracter == "Letra" ? strtoupper(chr(rand(ord("a"), ord("z")))) : rand(0, 9);
            $caracter = $caracter == "Letra" ? "Numero" : "Letra";
        }
        return $codigo . "-" . $correlativo;
    }

    /*----------  Limitar cadenas de texto  ----------*/
    public function limitarCadena($cadena, $limite, $sufijo) {
        return strlen($cadena) > $limite ? substr($cadena, 0, $limite) . $sufijo : $cadena;
    }
}