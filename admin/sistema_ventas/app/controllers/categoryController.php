<?php

namespace app\controllers;
use app\models\mainModel;

class categoryController extends mainModel {

    /*----------  Controlador registrar categoría  ----------*/
    public function registrarCategoriaControlador() {

        # Almacenando datos
        $nombre = $this->limpiarCadena($_POST['categoria_nombre']);

        # Verificando campos obligatorios
        if ($nombre == "") {
            $alerta = [
                "tipo" => "simple",
                "titulo" => "Ocurrió un error inesperado",
                "texto" => "No has llenado todos los campos que son obligatorios",
                "icono" => "error"
            ];
            return json_encode($alerta);
            exit();
        }

        # Verificando integridad de los datos
        if ($this->verificarDatos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{4,50}", $nombre)) {
            $alerta = [
                "tipo" => "simple",
                "titulo" => "Ocurrió un error inesperado",
                "texto" => "El NOMBRE no coincide con el formato solicitado",
                "icono" => "error"
            ];
            return json_encode($alerta);
            exit();
        }

        # Verificando nombre #
        $check_nombre = $this->ejecutarConsulta("SELECT categoria_nombre FROM categoria WHERE categoria_nombre = :nombre", ['nombre' => $nombre]);
        if ($check_nombre->rowCount() > 0) {
            $alerta = [
                "tipo" => "simple",
                "titulo" => "Ocurrió un error inesperado",
                "texto" => "El NOMBRE ingresado ya se encuentra registrado, por favor elija otro",
                "icono" => "error"
            ];
            return json_encode($alerta);
            exit();
        }

        # Preparar datos para registrar
        $categoria_datos_reg = [
            [
                "campo_nombre" => "categoria_nombre",
                "campo_marcador" => ":Nombre",
                "campo_valor" => $nombre
            ],
        ];

        # Intentar registrar la categoría
        $registrar_categoria = $this->guardarDatos("categoria", $categoria_datos_reg);

        if ($registrar_categoria) {
            $alerta = [
                "tipo" => "limpiar",
                "titulo" => "Categoría registrada",
                "texto" => "La categoría " . $nombre . " se registró con éxito",
                "icono" => "success"
            ];
        } else {
            $alerta = [
                "tipo" => "simple",
                "titulo" => "Ocurrió un error inesperado",
                "texto" => "No se pudo registrar la categoría, por favor intente nuevamente",
                "icono" => "error"
            ];
        }

        return json_encode($alerta);
    }

    /*----------  Controlador listar categorías  ----------*/
    public function listarCategoriaControlador($pagina, $registros, $url, $busqueda) {

        $pagina = $this->limpiarCadena($pagina);
        $registros = $this->limpiarCadena($registros);
        $url = $this->limpiarCadena($url);
        $url = APP_URL . $url . "/";
        $busqueda = $this->limpiarCadena($busqueda);
        $tabla = "";

        $pagina = (isset($pagina) && $pagina > 0) ? (int)$pagina : 1;
        $inicio = ($pagina > 0) ? (($pagina * $registros) - $registros) : 0;

        if (isset($busqueda) && $busqueda != "") {
            $consulta_datos = "SELECT * FROM categoria WHERE categoria_nombre LIKE :busqueda ORDER BY categoria_nombre ASC LIMIT $inicio, $registros";
            $consulta_total = "SELECT COUNT(categoria_id) FROM categoria WHERE categoria_nombre LIKE :busqueda";
            $parametros = ['busqueda' => "%$busqueda%"];
        } else {
            $consulta_datos = "SELECT * FROM categoria ORDER BY categoria_nombre ASC LIMIT $inicio, $registros";
            $consulta_total = "SELECT COUNT(categoria_id) FROM categoria";
            $parametros = [];
        }

        $datos = $this->ejecutarConsulta($consulta_datos, $parametros);
        $datos = $datos->fetchAll();
        $total = $this->ejecutarConsulta($consulta_total, $parametros);
        $total = (int)$total->fetchColumn();
        $numeroPaginas = ceil($total / $registros);

        $tabla .= '
            <div class="table-container">
            <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                <thead>
                    <tr>
                        <th class="has-text-centered">#</th>
                        <th class="has-text-centered">Nombre</th>
                        <th class="has-text-centered">Actualizar</th>
                        <th class="has-text-centered">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
        ';

        if ($total >= 1 && $pagina <= $numeroPaginas) {
            $contador = $inicio + 1;
            foreach ($datos as $rows) {
                $tabla .= '
                    <tr class="has-text-centered">
                        <td>' . $contador . '</td>
                        <td>' . $rows['categoria_nombre'] . '</td>
                        <td>
                            <a href="' . APP_URL . 'categoryUpdate/' . $rows['categoria_id'] . '/" class="button is-success is-rounded is-small">
                                <i class="fas fa-sync fa-fw"></i>
                            </a>
                        </td>
                        <td>
                            <form class="FormularioAjax" action="' . APP_URL . 'app/ajax/categoriaAjax.php" method="POST" autocomplete="off">
                                <input type="hidden" name="modulo_categoria" value="eliminar">
                                <input type="hidden" name="categoria_id" value="' . $rows['categoria_id'] . '">
                                <button type="submit" class="button is-danger is-rounded is-small">
                                    <i class="far fa-trash-alt fa-fw"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                ';
                $contador++;
            }
        } else {
            $tabla .= '
                <tr class="has-text-centered">
                    <td colspan="4">
                        No hay registros en el sistema
                    </td>
                </tr>
            ';
        }

        $tabla .= '</tbody></table></div>';

        ### Paginación ###
        if ($total > 0 && $pagina <= $numeroPaginas) {
            $tabla .= '<p class="has-text-right">Mostrando categorías de un total de <strong>' . $total . '</strong></p>';
            $tabla .= $this->paginadorTablas($pagina, $numeroPaginas, $url, 7);
        }

        return $tabla;
    }

    /*----------  Controlador eliminar categoría  ----------*/
    public function eliminarCategoriaControlador() {
        $id = $this->limpiarCadena($_POST['categoria_id']);

        # Verificando categoría #
        $datos = $this->ejecutarConsulta("SELECT * FROM categoria WHERE categoria_id = :id", ['id' => $id]);
        if ($datos->rowCount() <= 0) {
            $alerta = [
                "tipo" => "simple",
                "titulo" => "Ocurrió un error inesperado",
                "texto" => "No hemos encontrado la categoría en el sistema",
                "icono" => "error"
            ];
            return json_encode($alerta);
            exit();
        } else {
            $datos = $datos->fetch();
        }

        # Intentando eliminar la categoría
        $eliminarCategoria = $this->eliminarRegistro("categoria", "categoria_id", $id);
        if ($eliminarCategoria) {
            $alerta = [
                "tipo" => "recargar",
                "titulo" => "Categoría eliminada",
                "texto" => "La categoría " . $datos['categoria_nombre'] . " ha sido eliminada del sistema correctamente",
                "icono" => "success"
            ];
        } else {
            $alerta = [
                "tipo" => "simple",
                "titulo" => "Ocurrió un error inesperado",
                "texto" => "No hemos podido eliminar la categoría " . $datos['categoria_nombre'] . " del sistema, por favor intente nuevamente",
                "icono" => "error"
            ];
        }

        return json_encode($alerta);
    }

    /*----------  Controlador actualizar categoría  ----------*/
    public function actualizarCategoriaControlador() {
        $id = $this->limpiarCadena($_POST['categoria_id']);

        # Verificando categoría #
        $datos = $this->ejecutarConsulta("SELECT * FROM categoria WHERE categoria_id = :id", ['id' => $id]);
        if ($datos->rowCount() <= 0) {
            $alerta = [
                "tipo" => "simple",
                "titulo" => "Ocurrió un error inesperado",
                "texto" => "No hemos encontrado la categoría en el sistema",
                "icono" => "error"
            ];
            return json_encode($alerta);
            exit();
        } else {
            $datos = $datos->fetch();
        }

        # Almacenando datos
        $nombre = $this->limpiarCadena($_POST['categoria_nombre']);

        # Verificando campos obligatorios #
        if ($nombre == "") {
            $alerta = [
                "tipo" => "simple",
                "titulo" => "Ocurrió un error inesperado",
                "texto" => "No has llenado todos los campos que son obligatorios",
                "icono" => "error"
            ];
            return json_encode($alerta);
            exit();
        }

        # Verificando integridad de los datos #
        if ($this->verificarDatos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{4,50}", $nombre)) {
            $alerta = [
                "tipo" => "simple",
                "titulo" => "Ocurrió un error inesperado",
                "texto" => "El NOMBRE no coincide con el formato solicitado",
                "icono" => "error"
            ];
            return json_encode($alerta);
            exit();
        }

        # Verificando nombre #
        if ($datos['categoria_nombre'] != $nombre) {
            $check_nombre = $this->ejecutarConsulta("SELECT categoria_nombre FROM categoria WHERE categoria_nombre = :nombre", ['nombre' => $nombre]);
            if ($check_nombre->rowCount() > 0) {
                $alerta = [
                    "tipo" => "simple",
                    "titulo" => "Ocurrió un error inesperado",
                    "texto" => "El NOMBRE ingresado ya se encuentra registrado, por favor elija otro",
                    "icono" => "error"
                ];
                return json_encode($alerta);
                exit();
            }
        }

        # Preparar datos para actualizar
        $categoria_datos_up = [
            [
                "campo_nombre" => "categoria_nombre",
                "campo_marcador" => ":Nombre",
                "campo_valor" => $nombre
            ],
        ];

        $condicion = [
            "condicion_campo" => "categoria_id",
            "condicion_marcador" => ":ID",
            "condicion_valor" => $id
        ];

        if ($this->actualizarDatos("categoria", $categoria_datos_up, $condicion)) {
            $alerta = [
                "tipo" => "recargar",
                "titulo" => "Categoría actualizada",
                "texto" => "Los datos de la categoría " . $datos['categoria_nombre'] . " se actualizaron correctamente",
                "icono" => "success"
            ];
        } else {
            $alerta = [
                "tipo" => "simple",
                "titulo" => "Ocurrió un error inesperado",
                "texto" => "No hemos podido actualizar los datos de la categoría " . $datos['categoria_nombre'] . ", por favor intente nuevamente",
                "icono" => "error"
            ];
        }

        return json_encode($alerta);
    }
}