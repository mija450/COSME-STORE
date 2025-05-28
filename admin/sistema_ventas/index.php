<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Title -->
    <title>sisventas</title>
    
    <!-- Favicon -->
    <link rel="icon" href="../img/icon.png" type="image/png">

    <!-- Otros enlaces y scripts -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- Agrega otros enlaces aquí según sea necesario -->
</head>
<body>

 
<?php

require_once "./config/app.php";
require_once "./autoload.php";

/*---------- Iniciando sesión ----------*/
require_once "./app/views/inc/session_start.php";

if (isset($_GET['views'])) {
    $url = explode("/", $_GET['views']);
} else {
    $url = ["login"];
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once "./app/views/inc/head.php"; ?>
</head>
<body>
    <?php
    use app\controllers\viewsController;
    use app\controllers\loginController;

    $insLogin = new loginController();
    $viewsController = new viewsController();
    $vista = $viewsController->obtenerVistasControlador($url[0]);

    // Corregido: se eliminó el código erróneo
    if ($vista == "login" || $vista == "404") {
        require_once "./app/views/content/" . $vista . "-view.php";
    } else {
    ?>
    <main class="page-container">
    <?php
        // Cerrar sesión
        if ((!isset($_SESSION['id']) || $_SESSION['id'] == "") || (!isset($_SESSION['usuario']) || $_SESSION['usuario'] == "")) {
            $insLogin->cerrarSesionControlador();
            exit();
        }
        require_once "./app/views/inc/navlateral.php";
    ?>      
        <section class="full-width pageContent scroll" id="pageContent">
            <?php
            require_once "./app/views/inc/navbar.php";
            require_once $vista;
            ?>
        </section>
    </main>
    <?php
    }

    require_once "./app/views/inc/script.php"; 
    ?>
</body>
</html>