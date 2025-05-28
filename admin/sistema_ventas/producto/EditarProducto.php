<?php 
include "config/conexion.php";

$producto_id = $_REQUEST['producto_id'];

// Obtener la información actual del producto
$sql = "SELECT * FROM producto WHERE producto_id = $producto_id";
$resultado = $conexion->query($sql);
$Fila = $resultado->fetch_assoc();

// Obtener la imagen actual en caso de que no se suba una nueva
$imagen_actual = $Fila['producto_foto'];

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

    // Verificar si se ha subido una nueva imagen
    if ($_FILES['ImagenProducto']['size'] > 0) {
        // Subir la nueva imagen
        $nombre_img = uniqid() . "_" . $_FILES['ImagenProducto']['name'];
        $ruta_img = "imagenes/" . $nombre_img;
        
        if (move_uploaded_file($_FILES['ImagenProducto']['tmp_name'], $ruta_img)) {
            // Si se sube correctamente, puedes eliminar la imagen anterior si lo deseas
            unlink($imagen_actual); 
        } else {
            echo "Error al subir la imagen.";
            exit;
        }
    } else {
        // Mantener la imagen existente si no se sube una nueva
        $ruta_img = $imagen_actual;
    }

    // Actualizar la base de datos con la nueva información
    $sql = "UPDATE producto SET 
                producto_foto='$ruta_img', 
                producto_codigo='$codigo', 
                producto_nombre='$nombre',
                producto_precio_compra='$precio_compra', 
                producto_precio_venta='$precio_venta',
                producto_stock='$stock', 
                producto_marca='$marca', 
                producto_modelo='$modelo', 
                producto_estado='$estado', 
                producto_color='$color', 
                fecha_ingreso='$fecha_ingreso', 
                categoria_id='$categoria_id',
                servicio_id='$servicio_id'  -- Agregar el campo servicio_id
            WHERE producto_id=$producto_id";

    if ($conexion->query($sql)) {
        header('Location: index.php');
        exit;
    } else {
        echo "No se pudo editar el dato: " . $conexion->error;
    }
}
?>