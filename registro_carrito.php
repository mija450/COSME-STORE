<?php
// Mostrar todos los errores de PHP para depuración
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sisventas";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar que la carpeta 'uploads' exista
if (!is_dir('uploads')) {
    mkdir('uploads', 0777, true);
}

// Si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario
    $producto = $_POST['producto'] ?? null;
    $precio = $_POST['precio'] ?? null;
    $cantidad = $_POST['cantidad'] ?? 1;
    $total = $precio * $cantidad;

    // Procesar imagen
    $imagen = $_FILES['imagen']['name'] ?? null;
    $imagen_tmp = $_FILES['imagen']['tmp_name'] ?? null;
    $ruta_imagen = 'uploads/' . basename($imagen); // Asegúrate de que la ruta sea segura

    if ($imagen && $imagen_tmp) {
        if (move_uploaded_file($imagen_tmp, $ruta_imagen)) {
            // Preparar la consulta SQL
            $stmt = $conn->prepare("INSERT INTO registro_carrito (producto, imagen, precio, cantidad, total, fecha) VALUES (?, ?, ?, ?, ?, NOW())");
            if ($stmt === false) {
                die("Error al preparar la consulta: " . $conn->error);
            }

            // Vincular parámetros y ejecutar la consulta
            $stmt->bind_param("ssdds", $producto, $ruta_imagen, $precio, $cantidad, $total);

            if ($stmt->execute()) {
                // Redirigir a gracias.php
                header("Location: gracias.php");
                exit(); // Asegúrate de salir después de la redirección
            } else {
                echo "Error al guardar los datos: " . $stmt->error; // Mostrar error
            }

            // Cerrar la declaración
            $stmt->close();
        } else {
            echo "Lo siento, hubo un error al subir la imagen.";
        }
    } else {
        echo "Faltan campos requeridos.";
    }
}

// Cerrar la conexión
$conn->close();
?>