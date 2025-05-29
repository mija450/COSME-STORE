<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
    <style>
        body {
            background-color: #eef2f7;
        }
        .container {
            margin-top: 20px;
            padding: 20px;
        }
        .card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            transition: transform 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card-icon {
            width: 80px;
            height: auto;
            margin-bottom: 10px;
        }
        .card-title {
            font-size: 1.5em;
            color: #363636;
        }
        .card-text {
            color: #949494;
            font-size: 1em;
        }
        .columns {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="title has-text-centered"><b>Panel de Control</b></h1>
    <div class="columns is-multiline">
        <?php
            require_once 'config.php'; // Incluir la configuración de la base de datos

            function obtenerConteo($consulta) {
                global $conn; // Usar la conexión de la base de datos
                try {
                    $stmt = $conn->query("SELECT * FROM " . $consulta);
                    return $stmt ? $stmt->rowCount() : 0;
                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                    return 0;
                }
            }

            $totals = [
                'Usuarios' => [
                    'img' => 'https://fececo.org.ar/wp-content/uploads/2022/06/personas-usuarios.png',
                    'count' => obtenerConteo("usuario WHERE usuario_id!='1' AND usuario_id!='".$_SESSION['id']."'")
                ],
                'Clientes' => [
                    'img' => 'https://www.freeiconspng.com/uploads/customers-icon-12.png',
                    'count' => obtenerConteo("cliente WHERE cliente_id!='1'")
                ],
                'Categorías' => [
                    'img' => 'https://icon-library.com/images/categories-icon/categories-icon-5.jpg',
                    'count' => obtenerConteo("categoria")
                ],
                'Productos' => [
                    'img' => 'https://pngimg.com/uploads/box/box_PNG137.png', 
                    'count' => obtenerConteo("producto")
                ],
                'Ventas' => [
                    'img' => 'https://cdn.creazilla.com/cliparts/7815106/shopping-cart-clipart-lg.png',
                    'count' => obtenerConteo("venta")
                ]
            ];
        ?>
        <?php foreach ($totals as $key => $value): ?>
            <div class="column is-4">
                <div class="card">
                    <figure class="image is-128x128">
                        <img class="card-icon" src="<?= $value['img']; ?>" alt="<?= $key; ?>">
                    </figure>
                    <h2 class="card-title"><?= ucfirst($key); ?></h2>
                    <h3 class="card-count"><?= $value['count']; ?></h3>
                    <p class="card-text">Total <?= ucfirst($key); ?>: <?= $value['count']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div> 

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>