<?php
include "config/conexion.php";

// Obtener la cantidad total de detalles de venta
$total_detalles_query = "SELECT COUNT(*) as total 
                          FROM detalle_venta dv
                          JOIN venta v ON dv.venta_id = v.venta_id";
$total_resultado = $conexion->query($total_detalles_query);
$total_fila = $total_resultado->fetch_assoc();
$total_detalles = $total_fila['total'];

// Configuración de paginación
$detalles_por_pagina = 15; 
$total_paginas = ceil($total_detalles / $detalles_por_pagina);
$pagina_actual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$inicio = ($pagina_actual - 1) * $detalles_por_pagina;

// Obtener detalles de venta en la página actual
$sql = "SELECT dv.*, v.venta_fecha, dv.producto_nombre 
        FROM detalle_venta dv
        JOIN venta v ON dv.venta_id = v.venta_id
        LIMIT ?, ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("ii", $inicio, $detalles_por_pagina);
$stmt->execute();
$resultado = $stmt->get_result();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado de Detalles de Venta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container">

        <br>
        <center><h1>Listado de Detalles de Venta</h1></center>
        <br>

        <a href="NuevoDetalleVenta.php" class="btn btn-dark">Agregar Detalle de Venta</a>
        <a href="http://localhost/sisventas/admin/sistema_ventas/dashboard/" class="btn btn-info">Ir al Dashboard</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Venta ID</th>
                    <th scope="col">Producto ID</th>
                    <th scope="col">Nombre del Producto</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio Unitario</th>
                    <th scope="col">Subtotal</th>
                    <th scope="col">Descuento</th>
                    <th scope="col">Total</th>
                    <th scope="col">Fecha Venta</th> <!-- Nueva columna -->
                    <th scope="col">Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($Fila = $resultado->fetch_assoc()) { ?>
                <tr>
                    <th scope="row"><?php echo htmlspecialchars($Fila['detalle_id']); ?></th>
                    <td><?php echo htmlspecialchars($Fila['venta_id']); ?></td>
                    <td><?php echo htmlspecialchars($Fila['producto_id']); ?></td>
                    <td><?php echo htmlspecialchars($Fila['producto_nombre']); ?></td> <!-- Acceso al producto_nombre desde detalle_venta -->
                    <td><?php echo htmlspecialchars($Fila['cantidad']); ?></td>
                    <td><?php echo htmlspecialchars($Fila['precio_unitario']); ?></td>
                    <td><?php echo htmlspecialchars($Fila['subtotal']); ?></td>
                    <td><?php echo htmlspecialchars($Fila['descuento']); ?></td>
                    <td><?php echo htmlspecialchars($Fila['total']); ?></td>
                    <td><?php echo htmlspecialchars($Fila['venta_fecha']); ?></td> <!-- Mostrar la fecha de venta -->
                    <td>
                        <a href="Vista_Editar.php?detalle_id=<?php echo $Fila['detalle_id']; ?>" 
                            class="btn btn-warning">Editar</a>
                        <a href="EliminarDetalleVenta.php?detalle_id=<?php echo $Fila['detalle_id']; ?>" 
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