<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .cuenta-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .cuenta-container h2 {
            margin-bottom: 20px;
        }
        .form-control {
            margin-bottom: 15px;
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .btn-cuenta {
            background-color: #FFC107;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
        }
        .links {
            margin-top: 15px;
            text-align: center;
        }
        .links a {
            color: #007bff;
            text-decoration: none;
        }
        .links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="cuenta-container">
        <h2>Iniciar Sesión</h2>
        <form action="cuenta.php" method="POST">
            <input type="email" name="email" placeholder="Correo Electrónico" class="form-control" required>
            <input type="password" name="password" placeholder="Contraseña" class="form-control" required>
            <button type="submit" class="btn-cuenta">Iniciar Sesión</button>
        </form>
        <div class="links">
            <p>¿No tienes una cuenta? <a href="registro_usuario.php">Registrarse</a></p>
        </div>
    </div>

    <?php
    session_start();

    // Conectar a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "sisventas";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Capturar datos del formulario
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Consulta para verificar el usuario
        $sql = "SELECT * FROM usuarios_registrados WHERE email = ?";
        $stmt = $conn->prepare($sql);

        // Verificar si la consulta se preparó correctamente
        if (!$stmt) {
            die("Error en la preparación de la consulta: " . $conn->error);
        }

        // Vincular parámetros y ejecutar la consulta
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Verificar si el usuario existe
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            // Verificar la contraseña
            if (password_verify($password, $user['password'])) {
                $_SESSION['username'] = $user['nombre']; // Guardar el nombre en la sesión
                header("Location: index.php"); // Redirigir a la página de bienvenida
                exit();
            } else {
                echo "<p style='color:red;'>Correo electrónico o contraseña incorrectos.</p>";
            }
        } else {
            echo "<p style='color:red;'>Correo electrónico o contraseña incorrectos.</p>";
        }

        // Cerrar la declaración
        $stmt->close();
    }

    // Cerrar la conexión
    $conn->close();
    ?>
</body>
</html>