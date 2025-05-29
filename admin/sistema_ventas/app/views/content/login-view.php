<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/user.jpg" rel="icon"> 
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="path/to/your/styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> 
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100vh;
            overflow: hidden;
        }

        .main-container {
            position: relative;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            overflow: hidden;
            background-color: #000; /* Color de respaldo */
        }

        /* Video de fondo */
        video {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ajusta el video */
            transform: translate(-50%, -50%);
            z-index: -1; /* Detrás del contenido */
        }

        /* Caja del formulario */
        .box {
            background: rgba(255, 255, 255, 0.2); /* Blanco translúcido */
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            z-index: 1; /* Por encima del video */
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: #fff;
            text-align: center;
        }

        /* Estilos para los campos del formulario */
        .field {
            margin-bottom: 15px;
        }

        .input {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
        }

        .button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head> 
<body>

    <div class="main-container">
        <!-- Video de fondo -->
        <video autoplay muted loop>
            <source src="img/video8.mp4" type="video/mp4">
            <source src="img/video8.webm" type="video/webm">
            <source src="img/video8.ogg" type="video/ogg">
            Tu navegador no soporta video.
        </video>

        <!-- Formulario de inicio de sesión -->
        <form class="box login" action="" method="POST" autocomplete="off">
            <p class="has-text-centered">
                <i class="fas fa-user-circle fa-5x"></i> 
            </p><br>
            <h3 class="title is-5 has-text-centered"><b>Inicia sesión con tu cuenta</b></h3>

            <?php
                if(isset($_POST['login_usuario']) && isset($_POST['login_clave'])){
                    $insLogin->iniciarSesionControlador();
                }
            ?>

            <div class="field">
                <label class="label"><i class="fas fa-user-secret"></i> &nbsp; Usuario</label>
                <div class="control">
                    <input class="input" type="text" name="login_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required>
                </div>
            </div>

            <div class="field">
                <label class="label"><i class="fas fa-key"></i> &nbsp; Password</label>
                <div class="control">
                    <input class="input" type="password" name="login_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required>
                </div>
            </div>

            <p class="has-text-centered mb-4 mt-3">
                <button type="submit" class="button">INGRESAR</button>
            </p>
        </form>
    </div>

</body>
</html>
