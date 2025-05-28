<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .registro-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .registro-container h2 {
            margin-bottom: 20px;
        }
        .form-control {
            margin-bottom: 15px;
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .btn-registro {
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
    <div class="registro-container">
        <h2>Registro de Usuario</h2>
        <form action="registro_usuario.php" method="POST">
            <input type="email" name="email" placeholder="Correo Electrónico (solo Gmail)" class="form-control" required>
            <input type="password" name="password" placeholder="Contraseña" class="form-control" required>
            <input type="password" name="confirm_password" placeholder="Confirmar Contraseña" class="form-control" required>
            <button type="submit" class="btn-registro">Registrar</button>
        </form>
        <div class="links">
            <p>¿Ya tienes una cuenta? <a href="cuenta.php">Iniciar Sesión</a></p>
        </div>
    </div>

    <?php
    // Manejar el registro
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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

        // Capturar datos del formulario
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        // Validar que el correo sea de Gmail
        if (!preg_match("/^[a-zA-Z0-9._%+-]+@gmail\.com$/", $email)) {
            echo "<p style='color:red;'>Por favor, utiliza un correo de Gmail.</p>";
            exit();
        }

        // Validar que las contraseñas coincidan
        if ($password !== $confirm_password) {
            echo "<p style='color:red;'>Las contraseñas no coinciden.</p>";
            exit();
        }

        // Hashear la contraseña
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Consulta para insertar el nuevo usuario
        $sql = "INSERT INTO usuarios_registrados (email, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);

        // Verificar si la consulta se preparó correctamente
        if (!$stmt) {
            die("Error en la preparación de la consulta: " . $conn->error);
        }

        // Vincular parámetros y ejecutar la consulta
        $stmt->bind_param("ss", $email, $hashed_password);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "<p>Registro exitoso. Puedes iniciar sesión ahora.</p>";
            // Redirigir a la página de inicio de sesión
            header("Location: gracias.php");
            exit();
        } else {
            echo "<p style='color:red;'>Error al registrar: " . $stmt->error . "</p>";
        }

        // Cerrar la declaración y la conexión
        $stmt->close();
        $conn->close();
    }
    ?>
</body>
</html>