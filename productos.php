<?php
include 'db_connection.php'; // Asegúrate de incluir tu conexión a la base de datos

// Manejar búsqueda
$search = isset($_GET['search']) ? $_GET['search'] : '';

// Preparar la consulta para obtener los productos
$sql = "SELECT * FROM productos WHERE name LIKE ?";
$stmt = $conn->prepare($sql);
$searchTerm = "%$search%";
$stmt->bind_param("s", $searchTerm);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
</head>
<body>
    <h1>Lista de Productos</h1> 
    
    <!-- Formulario de búsqueda -->
    <form method="get" action="">
        <input type="text" name="search" placeholder="Buscar por nombre" value="<?php echo htmlspecialchars($search); ?>">
        <button type="submit">Buscar</button>
    </form>

    <div class="productos">
        <?php while ($product = $result->fetch_assoc()): ?>
            <div class="producto">
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" style="width:100px;">
                <h5><?php echo $product['name']; ?></h5>
                <p>Precio: $<?php echo $product['price']; ?></p>
                <form method="post" action="favoritos.php">
                    <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                    <input type="hidden" name="action" value="add">
                    <button type="submit">Agregar a Favoritos</button>
                </form>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>