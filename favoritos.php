<?php
session_start();
include 'db_connection.php'; // Asegúrate de incluir tu conexión a la base de datos

// Verifica la conexión a la base de datos
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Manejar la acción de agregar a favoritos
if (isset($_POST['action']) && $_POST['action'] === 'add') {
    $productId = $_POST['product_id'];
    $favoritoFecha = date('Y-m-d'); // Fecha actual para insertar

    // Inserta el producto en la tabla favoritos
    $sql = "INSERT INTO favorito (producto_id, favorito_fecha) VALUES (?, ?) ON DUPLICATE KEY UPDATE producto_id = producto_id";
    $stmt = $conn->prepare($sql);

    // Verifica si hubo un error al preparar la consulta
    if ($stmt === false) {
        die("Error en la preparación de la consulta: " . $conn->error);
    }

    // Enlaza los parámetros
    $stmt->bind_param("is", $productId, $favoritoFecha);
    if ($stmt->execute()) {
        // Redirigir a mensaje_favoritos.php después de agregar
        header("Location: mensaje_favoritos.php?added=true&product_id=" . $productId);
        exit; // Asegúrate de salir después de redirigir
    } else {
        echo "Error al agregar a favoritos: " . $stmt->error;
        exit;
    }
}

// Obtener todos los productos favoritos
$favoriteProducts = [];
$sqlFavorites = "SELECT * FROM favorito"; // Usa el nombre correcto de la tabla
$resultFavorites = $conn->query($sqlFavorites);

if ($resultFavorites) {
    while ($favorite = $resultFavorites->fetch_assoc()) {
        $productId = $favorite['producto_id']; // Usa el nombre correcto de la columna
        
        // Obtener detalles del producto usando el product_id
        $sqlProduct = "SELECT * FROM productos WHERE id = ?";
        $stmtProduct = $conn->prepare($sqlProduct);

        // Verifica si hubo un error al preparar la consulta
        if ($stmtProduct === false) {
            die("Error en la preparación de la consulta del producto: " . $conn->error);
        }

        $stmtProduct->bind_param("i", $productId);
        $stmtProduct->execute();
        $resultProduct = $stmtProduct->get_result();

        if ($resultProduct && $resultProduct->num_rows > 0) {
            $favoriteProducts[] = $resultProduct->fetch_assoc(); // Almacena el producto en el array
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos Favoritos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .productos-favoritos {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .producto {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            width: calc(33.333% - 20px);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .producto img {
            max-width: 100%;
            border-radius: 10px;
            margin-bottom: 15px;
        }
        .producto h5 {
            margin: 10px 0;
            font-size: 18px;
        }
        .producto p {
            margin: 5px 0;
            color: #888;
        }
    </style>
</head>
<body>
    <h1>Productos Favoritos</h1>
    <div class="productos-favoritos">
        <?php if (empty($favoriteProducts)): ?>
            <p>No hay productos favoritos.</p>
        <?php else: ?>
            <?php foreach ($favoriteProducts as $product): ?>
                <div class="producto">
                    <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" style="width:100px;">
                    <h5><?php echo $product['name']; ?></h5>
                    <p>Precio: $<?php echo $product['price']; ?></p>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</body>
</html>