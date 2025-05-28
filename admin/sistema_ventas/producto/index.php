<?php
include "config/conexion.php";

// Obtener la cantidad total de productos
$total_productos_query = "SELECT COUNT(*) as total FROM producto";
$total_resultado = $conexion->query($total_productos_query);
$total_fila = $total_resultado->fetch_assoc();
$total_productos = $total_fila['total'];

// Configuración de paginación
$productos_por_pagina = 15; // Cambia este valor si deseas más o menos productos por página
$total_paginas = ceil($total_productos / $productos_por_pagina);
$pagina_actual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$inicio = ($pagina_actual - 1) * $productos_por_pagina;

// Obtener productos en la página actual con JOIN para categorías y servicios
$sql = "SELECT p.*, c.categoria_nombre, s.tiposervicio 
        FROM producto p
        LEFT JOIN categoria c ON p.categoria_id = c.categoria_id
        LEFT JOIN servicio s ON p.servicio_id = s.servicio_id
        LIMIT $inicio, $productos_por_pagina";
$resultado = $conexion->query($sql);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container">

        <br>
        <center><h1>Listado de Productos</h1></center>
        <br>       
        <a href="NuevoProducto.php" class="btn btn-dark">Agregar Producto</a>
        
        <!-- Botón para redirigir al dashboard -->
        <a href="http://localhost/sisventas/admin/sistema_ventas/dashboard/" class="btn btn-info">Ir al Dashboard</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Código</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio de Compra</th>
                    <th scope="col">Precio de Venta</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Color</th>
                    <th scope="col">Fecha de Ingreso</th>
                    <th scope="col">Categoría</th> <!-- Nombre de categoría -->
                    <th scope="col">Servicio</th>  <!-- Nombre de servicio -->
                    <th scope="col">Imagen</th>
                    <th scope="col">Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($Fila = $resultado->fetch_assoc()) { ?>
                <tr>
                    <th scope="row"><?php echo htmlspecialchars($Fila['producto_id']); ?></th>
                    <td><?php echo htmlspecialchars($Fila['producto_codigo']); ?></td>
                    <td><?php echo htmlspecialchars($Fila['producto_nombre']); ?></td>
                    <td><?php echo htmlspecialchars($Fila['producto_precio_compra']); ?></td>
                    <td><?php echo htmlspecialchars($Fila['producto_precio_venta']); ?></td>
                    <td><?php echo htmlspecialchars($Fila['producto_stock']); ?></td>
                    <td><?php echo htmlspecialchars($Fila['producto_marca']); ?></td>
                    <td><?php echo htmlspecialchars($Fila['producto_modelo']); ?></td>
                    <td><?php echo htmlspecialchars($Fila['producto_estado']); ?></td>
                    <td><?php echo htmlspecialchars($Fila['producto_color']); ?></td>
                    <td><?php echo htmlspecialchars($Fila['fecha_ingreso']); ?></td>
                    <td><?php echo htmlspecialchars($Fila['categoria_nombre']); ?></td> <!-- Mostrar nombre de categoría -->
                    <td><?php echo htmlspecialchars($Fila['tiposervicio']); ?></td> <!-- Mostrar nombre de servicio -->
                    <td>
                    <img style="width: 250px; height: 150px; object-fit: contain;" 
                        src="<?php echo htmlspecialchars($Fila['producto_foto']); ?>" 
                        alt="Imagen">
                    </td>
                    <td>
                        <a href="Vista_Editar.php?producto_id=<?php echo $Fila['producto_id']; ?>" 
                            class="btn btn-warning">Editar</a>
                        <a href="EliminarProducto.php?producto_id=<?php echo $Fila['producto_id']; ?>" 
                            class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

        <!-- Paginador -->
        <nav>
            <ul class="pagination justify-content-center">
                <?php for ($i = 1; $i <= $total_paginas; $i++) { ?>
                    <li class="page-item <?php if ($i == $pagina_actual) echo 'active'; ?>">
                        <a class="page-link" href="?pagina=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>