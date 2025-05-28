<?php 
include "config/conexion.php";

// Verificar si se han enviado datos del formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $venta_id = $_POST['venta_id'];
    $producto_ids = $_POST['producto_id'];
    $producto_nombres = $_POST['producto_nombre'];
    $cantidades = $_POST['cantidad'];
    $precios_unitarios = $_POST['precio_unitario'];
    $descuentos = $_POST['descuento'];
    $subtotales = $_POST['subtotal'];
    $totales = $_POST['total'];
    
    // Preparar y ejecutar la inserción para cada producto
    foreach ($producto_ids as $index => $producto_id) {
        $producto_nombre = $producto_nombres[$index];
        $cantidad = $cantidades[$index];
        $precio_unitario = $precios_unitarios[$index];
        $descuento = $descuentos[$index];
        $subtotal = $subtotales[$index];
        $total = $totales[$index];

        // Insertar en la base de datos
        $sql = "INSERT INTO detalle_venta (
                    venta_id, 
                    producto_id, 
                    producto_nombre, 
                    cantidad, 
                    precio_unitario, 
                    descuento, 
                    subtotal, 
                    total
                ) VALUES (
                    '$venta_id', 
                    '$producto_id', 
                    '$producto_nombre', 
                    '$cantidad', 
                    '$precio_unitario', 
                    '$descuento', 
                    '$subtotal', 
                    '$total'
                )";

        if (!$conexion->query($sql)) {
            echo "No se pudo insertar el detalle de venta: " . $conexion->error;
        }
    }

    // Redirigir a la página principal después de la inserción
    header('Location: index.php');
    exit;
}
?>