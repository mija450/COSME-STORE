<?php 
include "config/conexion.php";

// Verificar si se han enviado datos del formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $detalle_id = $_POST['detalle_id'];
    $venta_id = $_POST['venta_id'];
    $producto_id = $_POST['producto_id'];
    $producto_nombre = $_POST['producto_nombre'];
    $cantidad = $_POST['cantidad'];
    $descuento = $_POST['descuento'];
    $precio_unitario = $_POST['precio_unitario'];
    
    // Calcular subtotal y total
    $subtotal = $cantidad * $precio_unitario;
    $total = $subtotal - $descuento;

    // Actualizar la base de datos con la nueva información
    $sql = "UPDATE detalle_venta SET 
                venta_id=?, 
                producto_id=?, 
                producto_nombre=?, 
                cantidad=?, 
                precio_unitario=?, 
                subtotal=?, 
                total=? 
            WHERE detalle_id=?";

    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("iisddssi", $venta_id, $producto_id, $producto_nombre, $cantidad, $precio_unitario, $subtotal, $total, $detalle_id);

    if ($stmt->execute()) {
        header('Location: index.php');
        exit;
    } else {
        echo "No se pudo editar el dato: " . $stmt->error;
    }
}
?>