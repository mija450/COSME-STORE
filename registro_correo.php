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
    $correo = $_POST['correo'] ?? null;

    // Verificar que el correo no esté vacío
    if (!$correo) {
        die("Falta ingresar el correo electrónico.");
    }

    // Preparar la consulta SQL
    $stmt = $conn->prepare("INSERT INTO registro_correo (correo, fecha) VALUES (?, NOW())");
    if ($stmt === false) {
        die("Error al preparar la consulta: " . $conn->error);
    }

    // Vincular parámetros y ejecutar la consulta
    $stmt->bind_param("s", $correo);

    if ($stmt->execute()) {
        // Redirigir a la página de agradecimiento
        header("Location: gracias.php");
        exit();
    } else {
        echo "Error al guardar los datos: " . $stmt->error;
    }

    // Cerrar la declaración
    $stmt->close();
}

// Cerrar la conexión
$conn->close();
?>
