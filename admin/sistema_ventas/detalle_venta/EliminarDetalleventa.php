<?php
include "config/conexion.php";

if (isset($_REQUEST['detalle_id'])) {
    $detalle_id = $_REQUEST['detalle_id'];

    // Verificar que el detalle_id sea un entero
    if (filter_var($detalle_id, FILTER_VALIDATE_INT)) {
        $sql = "DELETE FROM detalle_venta WHERE detalle_id = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("i", $detalle_id);

        if ($stmt->execute()) {
            header("Location: index.php");
            exit;
        } else {
            echo "No se pudo eliminar el dato: " . $stmt->error;
        }
    } else {
        echo "ID de detalle no válido.";
    }
} else {
    echo "No se proporcionó el ID de detalle.";
}
?>