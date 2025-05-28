<?php
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

// Comprobar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo_electronico = $_POST['correo_electronico'];
    $numero_telefono = $_POST['numero_telefono'];
    $direccion = $_POST['direccion'];
    $codigo_postal = $_POST['codigo_postal'];
    $pais = $_POST['pais'];
    $estado = $_POST['estado'];
    $ciudad = $_POST['ciudad'];
    $crear_cuenta = isset($_POST['crear_cuenta']) ? 1 : 0;
    $enviar_direccion_diferente = isset($_POST['enviar_direccion_diferente']) ? 1 : 0;
    $subtotal = isset($_POST['subtotal']) ? $_POST['subtotal'] : 0.0;
    $envio = isset($_POST['envio']) ? $_POST['envio'] : 0.0;
    $total = isset($_POST['total']) ? $_POST['total'] : 0.0;
    $metodo_pago = isset($_POST['metodo_pago']) ? $_POST['metodo_pago'] : null;

    // Preparar y ejecutar la consulta de inserción
    $sql = "INSERT INTO registro_envio (nombre, apellido, correo_electronico, numero_telefono, direccion, codigo_postal, pais, estado, ciudad, crear_cuenta, enviar_direccion_diferente, subtotal, envio, total, metodo_pago) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Error en la preparación de la consulta: " . $conn->error);
    }

    // Cadena de tipos que corresponde a las variables
    $stmt->bind_param("ssssssssssiidds", 
        $nombre, 
        $apellido, 
        $correo_electronico, 
        $numero_telefono, 
        $direccion, 
        $codigo_postal, 
        $pais, 
        $estado, 
        $ciudad, 
        $crear_cuenta, 
        $enviar_direccion_diferente, 
        $subtotal, 
        $envio, 
        $total, 
        $metodo_pago
    );

    // Ejecutar la consulta
    if ($stmt->execute()) {
        // Redirigir con mensaje de éxito
        header("Location: gracias.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Cerrar la declaración y la conexión
    $stmt->close();
}

$conn->close();
?>
