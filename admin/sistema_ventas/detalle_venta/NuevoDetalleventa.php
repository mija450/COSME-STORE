<?php
include "config/conexion.php";

// Obtener productos desde la base de datos
$productos_query = "SELECT producto_id, producto_nombre FROM producto";
$productos_resultado = $conexion->query($productos_query);

// Obtener ventas desde la base de datos
$ventas_query = "SELECT venta_id, venta_codigo FROM venta";
$ventas_resultado = $conexion->query($ventas_query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Nuevo Detalle de Venta</title>
    <script>
        function agregarProducto() {
            const contenedor = document.getElementById('productos');
            const nuevoProducto = document.createElement('div');
            nuevoProducto.classList.add('mb-3', 'producto');
            nuevoProducto.innerHTML = `
                <div class="input-group">
                    <select class="form-select" name="producto_id[]" required onchange="actualizarNombre(this)">
                        <option value="">Seleccionar Producto</option>
                        <?php 
                        $productos_resultado->data_seek(0); // Reinicia el puntero del resultado
                        while ($producto = $productos_resultado->fetch_assoc()) { ?>
                            <option value="<?php echo $producto['producto_id']; ?>" data-nombre="<?php echo htmlspecialchars($producto['producto_nombre']); ?>">
                                <?php echo htmlspecialchars($producto['producto_nombre']); ?>
                            </option>
                        <?php } ?>
                    </select>
                    <input type="text" class="form-control" name="producto_nombre[]" placeholder="Descripción" readonly>
                    <input type="number" class="form-control" name="cantidad[]" placeholder="Cantidad" required oninput="calcularValores(this)">
                    <input type="number" class="form-control" name="precio_unitario[]" placeholder="Precio Unitario" step="0.01" required oninput="calcularValores(this)">
                    <input type="number" class="form-control" name="descuento[]" placeholder="Descuento" step="0.01" oninput="calcularValores(this)">
                    <input type="number" class="form-control" name="subtotal[]" placeholder="Subtotal" readonly>
                    <input type="number" class="form-control" name="total[]" placeholder="Total" readonly>
                    <button class="btn btn-danger" type="button" onclick="eliminarProducto(this)">Eliminar</button>
                </div>
            `;
            contenedor.appendChild(nuevoProducto);
        }

        function eliminarProducto(button) {
            const producto = button.parentElement.parentElement;
            producto.remove();
        }

        function actualizarNombre(select) {
            const nombreInput = select.parentElement.querySelector('input[name="producto_nombre[]"]');
            const selectedOption = select.options[select.selectedIndex];
            nombreInput.value = selectedOption.dataset.nombre; // Establece el nombre del producto en el campo de descripción
            calcularValores(select); // Recalcula valores si se selecciona un nuevo producto
        }

        function calcularValores(input) {
            const productoDiv = input.closest('.producto');
            const cantidad = productoDiv.querySelector('input[name="cantidad[]"]').value || 0;
            const precioUnitario = productoDiv.querySelector('input[name="precio_unitario[]"]').value || 0;
            const descuento = productoDiv.querySelector('input[name="descuento[]"]').value || 0;

            const subtotal = cantidad * precioUnitario;
            const total = subtotal - descuento;

            productoDiv.querySelector('input[name="subtotal[]"]').value = subtotal.toFixed(2);
            productoDiv.querySelector('input[name="total[]"]').value = total.toFixed(2);
        }
    </script>
</head>
<body class="bg-light">
    <div class="container mt-4">
        <h1 class="text-center mb-4">Registrar Nuevo Detalle de Venta</h1>
        <form action="AgregarDetalleVenta.php" method="POST">

            <!-- Selector de venta -->
            <div class="mb-3">
                <label class="form-label fw-bold">Seleccionar Venta</label>
                <select class="form-select" name="venta_id" required>
                    <?php while ($venta = $ventas_resultado->fetch_assoc()) { ?>
                        <option value="<?php echo $venta['venta_id']; ?>">
                            <?php echo htmlspecialchars($venta['venta_codigo']); ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <!-- Contenedor de productos -->
            <div id="productos">
                <div class="mb-3 producto">
                    <div class="input-group">
                        <select class="form-select" name="producto_id[]" required onchange="actualizarNombre(this)">
                            <option value="">Seleccionar Producto</option>
                            <?php 
                            $productos_resultado->data_seek(0); // Reinicia el puntero del resultado
                            while ($producto = $productos_resultado->fetch_assoc()) { ?>
                                <option value="<?php echo $producto['producto_id']; ?>" data-nombre="<?php echo htmlspecialchars($producto['producto_nombre']); ?>">
                                    <?php echo htmlspecialchars($producto['producto_nombre']); ?>
                                </option>
                            <?php } ?>
                        </select>
                        <input type="text" class="form-control" name="producto_nombre[]" placeholder="Descripción" readonly>
                        <input type="number" class="form-control" name="cantidad[]" placeholder="Cantidad" required oninput="calcularValores(this)">
                        <input type="number" class="form-control" name="precio_unitario[]" placeholder="Precio Unitario" step="0.01" required oninput="calcularValores(this)">
                        <input type="number" class="form-control" name="descuento[]" placeholder="Descuento" step="0.01" oninput="calcularValores(this)">
                        <input type="number" class="form-control" name="subtotal[]" placeholder="Subtotal" readonly>
                        <input type="number" class="form-control" name="total[]" placeholder="Total" readonly>
                        <button class="btn btn-danger" type="button" onclick="eliminarProducto(this)">Eliminar</button>
                    </div>
                </div>
            </div>

            <button type="button" class="btn btn-secondary" onclick="agregarProducto()">Agregar Otro Producto</button>

            <div class="d-flex justify-content-between mt-3">
                <button type="submit" class="btn btn-primary">Registrar Detalle</button>
                <a href="index.php" class="btn btn-secondary">Regresar</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>