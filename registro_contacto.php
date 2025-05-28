<?php
// Mostrar todos los errores de PHP para depuración
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tienda";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario
    $nombre = $_POST['nombre'] ?? null;
    $email = $_POST['email'] ?? null;
    $telefono = $_POST['telefono'] ?? null; // Nuevo campo
    $tema = $_POST['tema'] ?? null; // Nuevo campo
    $mensaje_usuario = $_POST['mensaje'] ?? null;

    // Verificar que los campos no estén vacíos
    if (!$nombre || !$email || !$mensaje_usuario) {
        echo "Faltan campos requeridos.";
    } else { 
        // Preparar la consulta SQL
        $sql = "INSERT INTO contactos (nombre, email, telefono, tema, mensaje) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            die("Error al preparar la consulta: " . $conn->error);
        }

        // Vincular parámetros y ejecutar la consulta
        $stmt->bind_param("sssss", $nombre, $email, $telefono, $tema, $mensaje_usuario);

        if ($stmt->execute()) {
            // Redirigir a la página de gracias (opcional)
            header("Location: gracias.php");
            exit();
        } else {
            echo "Error al registrar: " . $stmt->error; // Mensaje de error
        }

        // Cerrar la declaración
        $stmt->close();
    }
}

// Cerrar la conexión
$conn->close();
?>