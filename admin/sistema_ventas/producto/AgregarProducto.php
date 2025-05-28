<?php 
include "config/conexion.php";

// Verificar si se han enviado datos del formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $codigo = $_POST['producto_codigo'];
    $nombre = $_POST['producto_nombre'];
    $precio_compra = $_POST['producto_precio_compra'];
    $precio_venta = $_POST['producto_precio_venta'];
    $stock = $_POST['producto_stock'];
    $marca = $_POST['producto_marca'];
    $modelo = $_POST['producto_modelo'];
    $estado = $_POST['producto_estado'];
    $color = $_POST['producto_color'];
    $fecha_ingreso = $_POST['fecha_ingreso'];
    $categoria_id = $_POST['categoria_id'];
    $servicio_id = $_POST['servicio_id']; // Nuevo campo para el servicio

    // Verificar si se ha subido una imagen
    if ($_FILES['ImagenProducto']['size'] > 0) {
        // Subir la nueva imagen
        $nombre_img = uniqid() . "_" . $_FILES['ImagenProducto']['name'];
        $ruta_img = "imagenes/" . $nombre_img;
        
        if (move_uploaded_file($_FILES['ImagenProducto']['tmp_name'], $ruta_img)) {
            // Imagen subida correctamente
        } else {
            echo "Error al subir la imagen.";
            exit;
        }
    } else {
        echo "No se ha subido ninguna imagen.";
        exit;
    }

    // Insertar en la base de datos
    $sql = "INSERT INTO producto (
                producto_foto, 
                producto_codigo, 
                producto_nombre, 
                producto_precio_compra, 
                producto_precio_venta, 
                producto_stock, 
                producto_marca, 
                producto_modelo, 
                producto_estado, 
                producto_color, 
                fecha_ingreso, 
                categoria_id, 
                servicio_id
            ) VALUES (
                '$ruta_img', 
                '$codigo', 
                '$nombre', 
                '$precio_compra', 
                '$precio_venta', 
                '$stock', 
                '$marca', 
                '$modelo', 
                '$estado', 
                '$color', 
                '$fecha_ingreso', 
                '$categoria_id', 
                '$servicio_id'
            )";

    if ($conexion->query($sql)) {
        header('Location: index.php');
        exit;
    } else {
        echo "No se pudo insertar el producto: " . $conexion->error;
    }
}
?>