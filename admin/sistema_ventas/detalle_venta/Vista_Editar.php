<?php
include "config/conexion.php";

// Obtener el ID del detalle
$detalle_id = $_REQUEST['detalle_id'] ?? null;

// Verificar que se haya proporcionado un detalle_id
if ($detalle_id) {
    // Obtener el detalle de la venta
    $sql = "SELECT * FROM detalle_venta WHERE detalle_id = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("i", $detalle_id);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $fila = $resultado->fetch_assoc();

    // Obtener ventas para el dropdown
    $ventas_query = "SELECT venta_id, venta_codigo FROM venta";
    $ventas_resultado = $conexion->query($ventas_query);

    // Obtener productos para el dropdown
    $productos_query = "SELECT producto_id, producto_nombre FROM producto";
    $productos_resultado = $conexion->query($productos_query);
} else {
    echo "No se ha seleccionado ningún detalle.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Editar Detalle de Venta</title>
    <script>
        function calcularValores() {
            const cantidad = parseFloat(document.getElementById('cantidad').value) || 0;
            const precioUnitario = parseFloat(document.getElementById('precio_unitario').value) || 0;
            const descuento = parseFloat(document.getElementById('descuento').value) || 0;

            const subtotal = cantidad * precioUnitario;
            const total = subtotal - descuento;

            document.getElementById('subtotal').value = subtotal.toFixed(2);
            document.getElementById('total').value = total.toFixed(2);
        }
    </script>
</head>
<body class="bg-light">

    <div class="container mt-4">
        <h1 class="text-center mb-4">Editar Detalle de Venta</h1>

        <form action="ActualizarDetalle.php" method="POST">

            <input type="hidden" name="detalle_id" value="<?php echo $fila['detalle_id']; ?>">

            <!-- Selector de venta -->
            <div class="mb-3">
                <label class="form-label fw-bold">Seleccionar Venta</label>
                <select class="form-select" name="venta_id" required>
                    <?php while ($venta = $ventas_resultado->fetch_assoc()) { ?>
                        <option value="<?php echo $venta['venta_id']; ?>" <?php if ($venta['venta_id'] == $fila['venta_id']) echo 'selected'; ?>>
                            <?php echo htmlspecialchars($venta['venta_codigo']); ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <!-- Selector de producto -->
            <div class="mb-3">
                <label class="form-label fw-bold">Seleccionar Producto</label>
                <select class="form-select" id="producto_id" name="producto_id" required>
                    <?php while ($producto = $productos_resultado->fetch_assoc()) { ?>
                        <option value="<?php echo $producto['producto_id']; ?>" <?php if ($producto['producto_id'] == $fila['producto_id']) echo 'selected'; ?>>
                            <?php echo htmlspecialchars($producto['producto_nombre']); ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Descripción</label>
                <input type="text" class="form-control" name="producto_nombre" value="<?php echo htmlspecialchars($fila['producto_nombre']); ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Cantidad</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" value="<?php echo $fila['cantidad']; ?>" required oninput="calcularValores()">
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Precio Unitario</label>
                <input type="number" class="form-control" id="precio_unitario" name="precio_unitario" value="<?php echo $fila['precio_unitario']; ?>" step="0.01" required oninput="calcularValores()"> <!-- Se removió readonly -->
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Descuento</label>
                <input type="number" class="form-control" id="descuento" name="descuento" value="<?php echo $fila['descuento']; ?>" step="0.01" oninput="calcularValores()">
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Subtotal</label>
                <input type="number" class="form-control" id="subtotal" name="subtotal" value="<?php echo $fila['subtotal']; ?>" readonly>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Total</label>
                <input type="number" class="form-control" id="total" name="total" value="<?php echo $fila['total']; ?>" readonly>
            </div>

            <div class="d-flex justify-content-between mt-3">
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                <a href="index.php" class="btn btn-secondary">Regresar</a>
            </div>
        </form>
    </div>

</body>
</html>