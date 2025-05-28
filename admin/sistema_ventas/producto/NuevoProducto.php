<?php
include "config/conexion.php";

// Obtener categorías desde la base de datos
$categorias_query = "SELECT categoria_id, categoria_nombre FROM categoria";
$categorias_resultado = $conexion->query($categorias_query);

// Obtener servicios desde la base de datos
$servicios_query = "SELECT servicio_id, tiposervicio FROM servicio";
$servicios_resultado = $conexion->query($servicios_query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Nuevo Producto</title>
    <style>
        #preview {
            width: 250px;
            height: 150px;
            object-fit: contain;
            display: none; /* Ocultar por defecto */
        }
    </style>
</head>
<body class="bg-light">
    <div class="container mt-4">
        <h1 class="text-center mb-4">Registrar Nuevo Producto</h1>
        <form action="AgregarProducto.php" method="POST" enctype="multipart/form-data">

            <!-- Input para subir una imagen -->
            <div class="mb-3">
                <label class="form-label fw-bold">Seleccionar Imagen</label>
                <input type="file" class="form-control" name="ImagenProducto" accept="image/*" required id="imageInput">
                <img id="preview" class="mt-2" alt="Previsualización de Imagen">
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Código</label>
                <input type="text" class="form-control" name="producto_codigo" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Nombre</label>
                <input type="text" class="form-control" name="producto_nombre" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Precio de Compra</label>
                <input type="number" class="form-control" name="producto_precio_compra" step="0.01" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Precio de Venta</label>
                <input type="number" class="form-control" name="producto_precio_venta" step="0.01" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Stock</label>
                <input type="number" class="form-control" name="producto_stock" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Marca</label>
                <input type="text" class="form-control" name="producto_marca" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Modelo</label>
                <input type="text" class="form-control" name="producto_modelo" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Estado</label>
                <input type="text" class="form-control" name="producto_estado" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Color</label>
                <input type="text" class="form-control" name="producto_color" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Fecha de Ingreso</label>
                <input type="date" class="form-control" name="fecha_ingreso" required>
            </div>

            <!-- Selector de categoría -->
            <div class="mb-3">
                <label class="form-label fw-bold">Seleccionar Categoría</label>
                <select class="form-select" name="categoria_id" required>
                    <?php while ($categoria = $categorias_resultado->fetch_assoc()) { ?>
                        <option value="<?php echo $categoria['categoria_id']; ?>">
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
                        <option value="<?php echo $servicio['servicio_id']; ?>">
                            <?php echo htmlspecialchars($servicio['tiposervicio']); ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <!-- Botones -->
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Registrar Producto</button>
                <a href="index.php" class="btn btn-secondary">Regresar</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('imageInput').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.getElementById('preview');
                    preview.src = e.target.result;
                    preview.style.display = 'block'; // Mostrar la imagen
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>
</html>