<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Modificar Producto</title>
</head>
<body class="bg-light">

    <?php
    include "config/conexion.php";
    $producto_id = $_REQUEST['producto_id'];

    // Obtener el producto actual
    $sql = "SELECT * FROM producto WHERE producto_id = $producto_id";
    $resultado = $conexion->query($sql);
    $Fila = $resultado->fetch_assoc();

    // Obtener categorías para el dropdown
    $categorias_query = "SELECT categoria_id, categoria_nombre FROM categoria";
    $categorias_resultado = $conexion->query($categorias_query);

    // Obtener servicios para el dropdown
    $servicios_query = "SELECT servicio_id, tiposervicio FROM servicio";
    $servicios_resultado = $conexion->query($servicios_query);
    ?>

    <div class="container mt-4">
        <div class="card shadow-lg p-4">
            <center>
                <h1 class="mb-4">Modificar Producto</h1>
            </center>

            <form action="EditarProducto.php?producto_id=<?php echo $Fila['producto_id']?>" method="POST" enctype="multipart/form-data">

                <!-- Imagen actual -->
                <div class="text-center mb-3">
                    <img id="preview" src="<?php echo htmlspecialchars($Fila['producto_foto']); ?>" class="border rounded shadow-sm" style="width: 150px; height: 200px;" alt="Imagen">
                </div>

                <!-- Input para subir una nueva imagen -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Seleccionar Nueva Imagen</label>
                    <input type="file" class="form-control" name="ImagenProducto" id="imagenInput" accept="image/*">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Código</label>
                    <input type="text" class="form-control" name="producto_codigo" value="<?php echo htmlspecialchars($Fila['producto_codigo']); ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Nombre</label>
                    <input type="text" class="form-control" name="producto_nombre" value="<?php echo htmlspecialchars($Fila['producto_nombre']); ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Precio de Compra</label>
                    <input type="number" class="form-control" name="producto_precio_compra" value="<?php echo htmlspecialchars($Fila['producto_precio_compra']); ?>" step="0.01" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Precio de Venta</label>
                    <input type="number" class="form-control" name="producto_precio_venta" value="<?php echo htmlspecialchars($Fila['producto_precio_venta']); ?>" step="0.01" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Stock</label>
                    <input type="number" class="form-control" name="producto_stock" value="<?php echo htmlspecialchars($Fila['producto_stock']); ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Marca</label>
                    <input type="text" class="form-control" name="producto_marca" value="<?php echo htmlspecialchars($Fila['producto_marca']); ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Modelo</label>
                    <input type="text" class="form-control" name="producto_modelo" value="<?php echo htmlspecialchars($Fila['producto_modelo']); ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Estado</label>
                    <input type="text" class="form-control" name="producto_estado" value="<?php echo htmlspecialchars($Fila['producto_estado']); ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Color</label>
                    <input type="text" class="form-control" name="producto_color" value="<?php echo htmlspecialchars($Fila['producto_color']); ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Fecha de Ingreso</label>
                    <input type="date" class="form-control" name="fecha_ingreso" value="<?php echo htmlspecialchars($Fila['fecha_ingreso']); ?>" required>
                </div>

                <!-- Selector de categoría -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Seleccionar Categoría</label>
                    <select class="form-select" name="categoria_id" required>
                        <?php while ($categoria = $categorias_resultado->fetch_assoc()) { ?>
                            <option value="<?php echo $categoria['categoria_id']; ?>" <?php if ($categoria['categoria_id'] == $Fila['categoria_id']) echo 'selected'; ?>>
                                <?php echo htmlspecialchars($categoria['categoria_nombre']); ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <!-- Selector de servicio -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Seleccionar Servicio</label>
                    <select class="form-select" name="servicio_id" required>
                        <?php while ($servicio = $servicios_resultado->fetch_assoc()) { ?>
                            <option value="<?php echo $servicio['servicio_id']; ?>" <?php if ($servicio['servicio_id'] == $Fila['servicio_id']) echo 'selected'; ?>>
                                <?php echo htmlspecialchars($servicio['tiposervicio']); ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <!-- Botones -->
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    <a href="index.php" class="btn btn-secondary">Regresar</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('imagenInput').addEventListener('change', function(event) {
            const preview = document.getElementById('preview');
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>

</body>
</html>