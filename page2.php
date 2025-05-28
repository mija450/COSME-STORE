<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MultiShop - Online Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Icono del sitio -->
    <link href="img/icon.png" rel="icon">

    <!-- Fuentes de Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Iconos vectoriales -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Estilos de bibliotecas -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Estilos personalizados de Bootstrap -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- MENÚ DE NAVEGACIÓN -->
    <div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center h-100">
                    <a class="text-body mr-3" href="acerca.html">Acerca de</a>
                    <a class="text-body mr-3" href="contact.php">Contacto</a>
                    <a class="text-body mr-3" href="centro_ayuda.html">Ayuda</a>
                    <a class="text-body mr-3" href="preguntas_frecuentes.html">Preguntas Frecuentes</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Mi
                            Cuenta</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="cuenta.php">Iniciar Sesión</a>
                            <!-- ACA ESTA EL LOGIN DE USUARIO -->
                            <a class="dropdown-item" href="registro_usuario.php">Registrarse</a>
                            <!-- ACA ESTA EL LOGIN DE USUARIO -->
                        </div>
                    </div>
                    <div class="btn-group mx-2">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle"
                            data-toggle="dropdown">Contactos</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">(+51) 951 402 341</button>
                            <button class="dropdown-item" type="button">MuebleriasCosme@gmail.com</button>
                            <button class="dropdown-item" type="button">CosmeHuari25@gmail.com</button>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle"
                            data-toggle="dropdown">Ayuda</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="centro_ayuda.html">Centro de Ayuda</a>
                            <!-- ACA ESTA EL LOGIN DE USUARIO -->
                            <a class="dropdown-item" href="horario_atencion.html">Horario de Atención</a>
                            <!-- ACA ESTA EL LOGIN DE USUARIO -->
                        </div>
                    </div>
                </div>
                <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-heart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle"
                            style="padding-bottom: 2px;">0</span>
                    </a>
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-shopping-cart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle"
                            style="padding-bottom: 2px;">0</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="" class="text-decoration-none">
                    <span class="h1 text-uppercase text-primary bg-dark px-2">Cosme</span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Store</span>
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Buscar Producto">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0">Servicio al Cliente</p>
                <h5 class="m-0">(+51) 951 402 341</h5>
            </div>
        </div>
    </div>
    <!-- FIN DEL MENÚ DE NAVEGACIÓN -->

    <!-- SLIDER CATEGORIAS -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse"
                    href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light"
                    id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">🛏️Dormitorios <i
                                    class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="" class="dropdown-item">Camas</a>
                                <a href="" class="dropdown-item">Cabeceras y Respaldos</a>
                                <a href="" class="dropdown-item">Mesas de Noche</a>
                                <a href="" class="dropdown-item">Roperos y Clósets</a>
                                <a href="" class="dropdown-item">Roperos y Clósets</a>
                                <a href="" class="dropdown-item">Espejos de Dormitorio</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">🍽️Cocinas <i
                                    class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="" class="dropdown-item">Mesas para Cocin</a>
                                <a href="" class="dropdown-item">Sillas y Bancos</a>
                                <a href="" class="dropdown-item">Muebles para Electrodomésticos</a>
                                <a href="" class="dropdown-item">Bar y Mini Bares</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">💼Oficinas <i
                                    class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="" class="dropdown-item">Escritorios</a>
                                <a href="" class="dropdown-item">Sillas de Oficina</a>
                                <a href="" class="dropdown-item">Estantes y Libreros</a>
                                <a href="" class="dropdown-item">Archivadores</a>
                                <a href="" class="dropdown-item">Muebles para Computadora</a>
                                <a href="" class="dropdown-item">Accesorios para Oficina</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">🛋️Salas de Estar<i
                                    class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="" class="dropdown-item">Sofás y Seccionales</a>
                                <a href="" class="dropdown-item">Sillones y Butacas</a>
                                <a href="" class="dropdown-item">Muebles para TV</a>
                                <a href="" class="dropdown-item">Vitrinas y Consolas</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">🍔Comedores <i
                                    class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="" class="dropdown-item">Mesas de Comedor</a>
                                <a href="" class="dropdown-item">Sillas de Comedor</a>
                                <a href="" class="dropdown-item">Bancos para Comedor</a>
                                <a href="" class="dropdown-item">Buffets y Credenzas</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">🌳Jardín y Exteriores <i
                                    class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="" class="dropdown-item">Mesas de Jardín</a>
                                <a href="" class="dropdown-item">Sillas y Bancos de Exterior</a>
                                <a href="" class="dropdown-item">Salas para Exteriores</a>
                                <a href="" class="dropdown-item">Hamacas y Columpios</a>
                                <a href="" class="dropdown-item">Sombrillas y Pérgolas</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">👶Niños y Adolescentes
                                <i class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="" class="dropdown-item">Camas Infantiles</a>
                                <a href="" class="dropdown-item">Escritorios para Niños</a>
                                <a href="" class="dropdown-item">Cajoneras y Estanterías Infantiles</a>
                                <a href="" class="dropdown-item">Sillas para Niños</a>
                                <a href="" class="dropdown-item">Mesas de Juego</a>
                            </div>
                        </div>
                </nav>
            </div>
            <!-- FIN DEL SLIDER CATEGORIAS -->

            <!-- SLIDER CABEZERA -->
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Multi</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Tienda</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link active">Inicio</a>
                            <a href="shop.php" class="nav-item nav-link">Tienda</a>
                            <a href="detail.php" class="nav-item nav-link">Detalles de la Compra</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pagos<i
                                        class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="cart.php" class="dropdown-item">Carrito de Compra</a>
                                    <a href="checkout.php" class="dropdown-item">Verificar</a>
                                </div>
                            </div>
                            <a href="contact.php" class="nav-item nav-link">Contacto</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="detail.php" class="btn px-0">
                                <i class="fas fa-heart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle"
                                    style="padding-bottom: 2px;">0</span>
                            </a>
                            <a href="cart.php" class="btn px-0 ml-3">
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle"
                                    style="padding-bottom: 2px;">0</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- FIN DEL SLIDER CABEZERA -->


    <!-- Inicio de la ruta de navegación -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active">Shop List</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Fin de la ruta de navegación -->


    <!-- Inicio de la tienda -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <!-- Inicio de la barra lateral de la tienda -->
            <div class="col-lg-3 col-md-4">
                <!-- Inicio del precio -->
                <!-- Inicio de la tienda -->





                <!DOCTYPE html>
                <html lang="es">

                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Filtrado de Productos</title>
                    <link rel="stylesheet" href="styles.css"> <!-- Si tienes un CSS externo -->
                    <style>
                        #filtros {
                            padding: 20px;
                            /* Espaciado interno */
                            border-radius: 5px;
                            /* Esquinas redondeadas (opcional) */
                            margin-bottom: 20px;
                            /* Espacio inferior (opcional) */
                        }

                        #filtros h4 {
                            margin-top: 20px;
                            /* Espacio superior para los encabezados */
                            margin-bottom: 10px;
                            /* Espacio inferior para los encabezados */
                        }

                        #filtros label {
                            display: block;
                            /* Cada etiqueta en una nueva línea */
                            margin-bottom: 5px;
                            /* Espacio entre las etiquetas */
                        }
                    </style>
                </head>

                <body>
                <div id="filtros">
                    <h3><b>FILTRAR POR PRECIO</b></h3>
                        <label><input type="checkbox" class="filter" data-filter="precio" value="S/0-S/100"> S/0.00 -
                            S/100.00</label>
                        <label><input type="checkbox" class="filter" data-filter="precio" value="S/100-S/200"> S/100.00 -
                            S/200.00</label>
                        <label><input type="checkbox" class="filter" data-filter="precio" value="S/200-S/300"> S/200.00 -
                            S/300.00</label>
                        <label><input type="checkbox" class="filter" data-filter="precio" value="S/300-S/400"> S/300.00
                            - S/400.00</label>
                            <label><input type="checkbox" class="filter" data-filter="precio" value="S/400-S/500"> S/400.00 -
                            S/500.00</label>
                        <label><input type="checkbox" class="filter" data-filter="precio" value="S/500-S/600"> S/500.00 -
                            S/600.00</label>
                        <label><input type="checkbox" class="filter" data-filter="precio" value="S/600-S/700"> S/600.00 -
                            S/700.00</label>
                        <label><input type="checkbox" class="filter" data-filter="precio" value="S/700-S/800"> S/700.00
                            - S/800.00</label>
                            <label><input type="checkbox" class="filter" data-filter="precio" value="S/800-S/900"> S/800.00 -
                            S/900.00</label>
                        <label><input type="checkbox" class="filter" data-filter="precio" value="S/900-S/1000"> S/900.00 -
                            S/1000.00</label>
                        <label><input type="checkbox" class="filter" data-filter="precio" value="S/1000-S/1100"> S/1000.00
                            - S/1100.00</label>
                            <label><input type="checkbox" class="filter" data-filter="precio" value="S/1100-S/1200"> S/1100.00
                            - S/1200.00</label>
                            <label><input type="checkbox" class="filter" data-filter="precio" value="S/1200-S/1500"> S/1200.00 -
                            S/1500.00</label>
                        <label><input type="checkbox" class="filter" data-filter="precio" value="S/1500-S/2000"> S/1500.00 -
                            S/2000.00</label>
                        <label><input type="checkbox" class="filter" data-filter="precio" value="S/2000-S/5000"> S/2000.00
                            - S/5000.00</label>
                        <label><input type="checkbox" class="filter" data-filter="precio" value="S/5000+"> S/5.000+</label><br>

                        <h3><b>FILTRAR POR COLOR</b></h3>
                        <label><input type="checkbox" class="filter" data-filter="color" value="Negro"> Negro</label>
                        <label><input type="checkbox" class="filter" data-filter="color" value="Blanco"> Blanco</label>
                        <label><input type="checkbox" class="filter" data-filter="color" value="Naranja"> Naranja</label>
                        <label><input type="checkbox" class="filter" data-filter="color" value="Beige"> Beige</label>
                        <label><input type="checkbox" class="filter" data-filter="color" value="Amarillo"> Amarillo</label>
                        <label><input type="checkbox" class="filter" data-filter="color" value="Rojo"> Rojo</label>
                        <label><input type="checkbox" class="filter" data-filter="color" value="Marrón oscuro"> Marrón oscuro</label><br>

                        <h3><b>RESEÑA DEL PRODUCTO</b></h3>
                        <label><input type="checkbox" class="filter" data-filter="reseña" value="unaestrella"> ⭐</label>
                        <label><input type="checkbox" class="filter" data-filter="reseña" value="dosestrellas">
                            ⭐⭐</label>
                        <label><input type="checkbox" class="filter" data-filter="reseña" value="tresestrellas">
                            ⭐⭐⭐</label>
                        <label><input type="checkbox" class="filter" data-filter="reseña" value="cuatroestrellas">
                            ⭐⭐⭐⭐</label>
                        <label><input type="checkbox" class="filter" data-filter="reseña" value="cincoestrellas">
                            ⭐⭐⭐⭐⭐</label><br>

                        <h2><b>MATERIAL</b></h2>
                        <label><input type="checkbox" class="filter" data-filter="material" value="Madera Sólida">
                            Madera Sólida</label>
                        <label><input type="checkbox" class="filter" data-filter="material" value="MDF"> MDF</label>
                        <label><input type="checkbox" class="filter" data-filter="material" value="Madera Compensada">
                            Madera Compensada</label>
                        <label><input type="checkbox" class="filter" data-filter="material" value="Acabado en Barniz">
                            Acabado en Barniz</label>
                        <label><input type="checkbox" class="filter" data-filter="material" value="Metal"> Metal</label>
                    </div>
                    <!-- Agrega más productos según sea necesario -->

                    <script src="script.js"></script> <!-- Enlaza tu archivo script.js -->
                </body>

                </html>
                <!-- Fin de la talla -->
            </div>
            <!-- Fin de la barra lateral de la tienda -->


<!-- Inicio de filtros categoria -->
            <!-- Inicio del producto de la tienda -->
            <div class="col-lg-9 col-md-8">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div>
                                <button class="btn btn-sm btn-light"><i class="fa fa-th-large"></i></button>
                                <button class="btn btn-sm btn-light ml-2"><i class="fa fa-bars"></i></button>
                            </div>
                            <div class="ml-2">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-light dropdown-toggle"
                                        data-toggle="dropdown">Clasificación</button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Último</a>
                                        <a class="dropdown-item" href="#">Más Popular</a>
                                        <a class="dropdown-item" href="#">Mejor Clasificación</a>
                                    </div>
                                </div>
                                <div class="btn-group ml-2">
                                    <button type="button" class="btn btn-sm btn-light dropdown-toggle"
                                        data-toggle="dropdown">Demostración</button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">10</a>
                                        <a class="dropdown-item" href="#">20</a>
                                        <a class="dropdown-item" href="#">30</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
    <!-- Producto 13 -->
    <div class="col-lg-3 col-md-6 col-sm-6 pb-1">
        <div class="product-item bg-light mb-4" data-precio="S/300-S/400" data-color="Beige" data-material="Madera Sólida" data-reseña="tresestrellas">
            <div class="product-img position-relative overflow-hidden">
                <img class="img-fluid w-100" src="img/p13.jpg" alt="Banco de Madera para Jardín">
                <div class="product-action">
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                    <form method="post" action="favoritos.php" style="display:inline;">
                        <input type="hidden" name="product_id" value="1">
                        <input type="hidden" name="action" value="add">
                        <button type="submit" class="btn btn-outline-dark btn-square">
                            <i class="far fa-heart"></i>
                        </button>
                    </form>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                </div>
            </div>
            <div class="text-center py-4">
            <a class="h6 text-decoration-none text-truncate" href="">Cabezera para cama de Madera con repisa</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>S/359.99</h5>
                            <h6 class="text-muted ml-2"><del>S/379.99</del></h6>
                        </div>
                <div class="d-flex align-items-center justify-content-center mb-1">
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="far fa-star text-primary mr-1"></small>
                    <small class="far fa-star text-primary mr-1"></small>
                    <small>(99)</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Producto 14 -->
    <div class="col-lg-3 col-md-6 col-sm-6 pb-1">
        <div class="product-item bg-light mb-4" data-precio="S/0-S/100" data-color="Beige" data-material="Madera Sólida" data-reseña="unaestrella">
            <div class="product-img position-relative overflow-hidden">
                <img class="img-fluid w-100" src="img/p14.jpg" alt="Escritorio de Madera con Cajones">
                <div class="product-action">
                    <form method="post" action="favoritos.php" style="display:inline;">
                        <input type="hidden" name="product_id" value="4">
                        <input type="hidden" name="action" value="add">
                        <button type="submit" class="btn btn-outline-dark btn-square">
                            <i class="far fa-heart"></i>
                        </button>
                    </form>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                </div>
            </div>
            <div class="text-center py-4">
            <a class="h6 text-decoration-none text-truncate" href="">Cabezera o respaldo de madera para cama</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>S/79.99</h5>
                            <h6 class="text-muted ml-2"><del>S/99.99</del></h6>
                        </div>
                <div class="d-flex align-items-center justify-content-center mb-1">
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star-half-alt text-primary mr-1"></small>
                    <small>(1)</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Producto 15 -->
    <div class="col-lg-3 col-md-6 col-sm-6 pb-1">
        <div class="product-item bg-light mb-4" data-precio="S/200-S/300" data-color="Beige" data-material="Madera Sólida" data-reseña="cuatroestrellas">
            <div class="product-img position-relative overflow-hidden">
                <img class="img-fluid w-100" src="img/p15.jpg" alt="Silla de Jardín">
                <div class="product-action">
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                    <form method="post" action="favoritos.php" style="display:inline;">
                        <input type="hidden" name="product_id" value="3">
                        <input type="hidden" name="action" value="add">
                        <button type="submit" class="btn btn-outline-dark btn-square">
                            <i class="far fa-heart"></i>
                        </button>
                    </form>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                </div>
            </div>
            <div class="text-center py-4">
            <a class="h6 text-decoration-none text-truncate" href="">Tarima 2 Plazas Madera Capirona de Madera</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>S/249.99</h5>
                            <h6 class="text-muted ml-2"><del>S/269.99</del></h6>
                        </div>
                <div class="d-flex align-items-center justify-content-center mb-1">
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="far fa-star text-primary mr-1"></small>
                    <small>(50)</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Producto 16 -->
    <div class="col-lg-3 col-md-6 col-sm-6 pb-1">
        <div class="product-item bg-light mb-4" data-precio="S/0-S/100" data-color="Beige" data-material="Madera Sólida" data-reseña="cincoestrellas">
            <div class="product-img position-relative overflow-hidden">
                <img class="img-fluid w-100" src="img/p16.jpg" alt="Sofá de Tela">
                <div class="product-action">
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                    <form method="post" action="favoritos.php" style="display:inline;">
                        <input type="hidden" name="product_id" value="5">
                        <input type="hidden" name="action" value="add">
                        <button type="submit" class="btn btn-outline-dark btn-square">
                            <i class="far fa-heart"></i>
                        </button>
                    </form>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                </div>
            </div>
            <div class="text-center py-4">
            <a class="h6 text-decoration-none text-truncate" href="">Mesa De Madera Con Formica </a>
						<div class="d-flex align-items-center justify-content-center mt-2">
							<h5>S/89.99</h5>
							<h6 class="text-muted ml-2"><del>S/99.99</del></h6>
						</div>
                <div class="d-flex align-items-center justify-content-center mb-1">
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small>(10)</small>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">

    <!-- Producto 17 -->
    <div class="col-lg-3 col-md-6 col-sm-6 pb-1">
        <div class="product-item bg-light mb-4" data-precio="S/300-S/400" data-color="Negro" data-material="Madera Sólida" data-reseña="tresestrellas">
            <div class="product-img position-relative overflow-hidden">
                <img class="img-fluid w-100" src="img/p17.jpg" alt="Banco de Madera para Jardín">
                <div class="product-action">
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                    <form method="post" action="favoritos.php" style="display:inline;">
                        <input type="hidden" name="product_id" value="1">
                        <input type="hidden" name="action" value="add">
                        <button type="submit" class="btn btn-outline-dark btn-square">
                            <i class="far fa-heart"></i>
                        </button>
                    </form>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                </div>
            </div>
            <div class="text-center py-4">
            <a class="h6 text-decoration-none text-truncate" href="">Librero de madera con 4 divisones 2 cajas </a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>S/359.99</h5>
                            <h6 class="text-muted ml-2"><del>S/379.99</del></h6>
                        </div>
                <div class="d-flex align-items-center justify-content-center mb-1">
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="far fa-star text-primary mr-1"></small>
                    <small class="far fa-star text-primary mr-1"></small>
                    <small>(99)</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Producto 18 -->
    <div class="col-lg-3 col-md-6 col-sm-6 pb-1">
        <div class="product-item bg-light mb-4" data-precio="S/100-S/200" data-color="Amarillo" data-material="Madera Sólida" data-reseña="unaestrella">
            <div class="product-img position-relative overflow-hidden">
                <img class="img-fluid w-100" src="img/p18.jpg" alt="Escritorio de Madera con Cajones">
                <div class="product-action">
                    <form method="post" action="favoritos.php" style="display:inline;">
                        <input type="hidden" name="product_id" value="4">
                        <input type="hidden" name="action" value="add">
                        <button type="submit" class="btn btn-outline-dark btn-square">
                            <i class="far fa-heart"></i>
                        </button>
                    </form>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                </div>
            </div>
            <div class="text-center py-4">
            <a class="h6 text-decoration-none text-truncate" href="">Silla De Comer de madera Para Niña</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>S/199.99</h5>
                            <h6 class="text-muted ml-2"><del>S/219.99</del></h6>
                        </div>
                <div class="d-flex align-items-center justify-content-center mb-1">
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star-half-alt text-primary mr-1"></small>
                    <small>(1)</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Producto 19 -->
    <div class="col-lg-3 col-md-6 col-sm-6 pb-1">
        <div class="product-item bg-light mb-4" data-precio="S/100-S/200" data-color="Beige" data-material="Madera Sólida" data-reseña="cuatroestrellas">
            <div class="product-img position-relative overflow-hidden">
                <img class="img-fluid w-100" src="img/p19.jpg" alt="Silla de Jardín">
                <div class="product-action">
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                    <form method="post" action="favoritos.php" style="display:inline;">
                        <input type="hidden" name="product_id" value="3">
                        <input type="hidden" name="action" value="add">
                        <button type="submit" class="btn btn-outline-dark btn-square">
                            <i class="far fa-heart"></i>
                        </button>
                    </form>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                </div>
            </div>
            <div class="text-center py-4">
            <a class="h6 text-decoration-none text-truncate" href="">Bajo Mesada y Alacena de madera</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>S/119.99</h5>
                            <h6 class="text-muted ml-2"><del>S/129.99</del></h6>
                        </div>
                <div class="d-flex align-items-center justify-content-center mb-1">
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="far fa-star text-primary mr-1"></small>
                    <small>(50)</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Producto 20 -->
    <div class="col-lg-3 col-md-6 col-sm-6 pb-1">
        <div class="product-item bg-light mb-4" data-precio="S/200-S/300" data-color="Negro" data-material="Madera Sólida" data-reseña="cincoestrellas">
            <div class="product-img position-relative overflow-hidden">
                <img class="img-fluid w-100" src="img/p20.jpg" alt="Sofá de Tela">
                <div class="product-action">
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                    <form method="post" action="favoritos.php" style="display:inline;">
                        <input type="hidden" name="product_id" value="5">
                        <input type="hidden" name="action" value="add">
                        <button type="submit" class="btn btn-outline-dark btn-square">
                            <i class="far fa-heart"></i>
                        </button>
                    </form>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                </div>
            </div>
            <div class="text-center py-4">
            <a class="h6 text-decoration-none text-truncate" href="">Velador de Madera Capirona</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>S/259.99</h5>
                            <h6 class="text-muted ml-2"><del>S/279.99</del></h6>
                        </div>
                <div class="d-flex align-items-center justify-content-center mb-1">
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small>(10)</small>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">

    <!-- Producto 21 -->
    <div class="col-lg-3 col-md-6 col-sm-6 pb-1">
        <div class="product-item bg-light mb-4" data-precio="S/0-S/100" data-color="Beige" data-material="Madera Sólida" data-reseña="tresestrellas">
            <div class="product-img position-relative overflow-hidden">
                <img class="img-fluid w-100" src="img/p21.jpg" alt="Banco de Madera para Jardín">
                <div class="product-action">
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                    <form method="post" action="favoritos.php" style="display:inline;">
                        <input type="hidden" name="product_id" value="1">
                        <input type="hidden" name="action" value="add">
                        <button type="submit" class="btn btn-outline-dark btn-square">
                            <i class="far fa-heart"></i>
                        </button>
                    </form>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                </div>
            </div>
            <div class="text-center py-4">
            <a class="h6 text-decoration-none text-truncate" href="">Bancas altas con espaldar ideal para barra en acabado natural</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>S/89.99</h5>
                            <h6 class="text-muted ml-2"><del>S/99.99</del></h6>
                        </div>
                <div class="d-flex align-items-center justify-content-center mb-1">
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="far fa-star text-primary mr-1"></small>
                    <small class="far fa-star text-primary mr-1"></small>
                    <small>(99)</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Producto 22 -->
    <div class="col-lg-3 col-md-6 col-sm-6 pb-1">
        <div class="product-item bg-light mb-4" data-precio="S/200-S/300" data-color="Beige" data-material="Madera Sólida" data-reseña="unaestrella">
            <div class="product-img position-relative overflow-hidden">
                <img class="img-fluid w-100" src="img/p22.jpg" alt="Escritorio de Madera con Cajones">
                <div class="product-action">
                    <form method="post" action="favoritos.php" style="display:inline;">
                        <input type="hidden" name="product_id" value="4">
                        <input type="hidden" name="action" value="add">
                        <button type="submit" class="btn btn-outline-dark btn-square">
                            <i class="far fa-heart"></i>
                        </button>
                    </form>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                </div>
            </div>
            <div class="text-center py-4">
            <a class="h6 text-decoration-none text-truncate" href="">Mesa maciza de Madera en acabado wash</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>S/199.99</h5>
                            <h6 class="text-muted ml-2"><del>S/219.99</del></h6>
                        </div>
                <div class="d-flex align-items-center justify-content-center mb-1">
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star-half-alt text-primary mr-1"></small>
                    <small>(1)</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Producto 23 -->
    <div class="col-lg-3 col-md-6 col-sm-6 pb-1">
        <div class="product-item bg-light mb-4" data-precio="S/200-S/300" data-color="Beige" data-material="Madera Sólida" data-reseña="cuatroestrellas">
            <div class="product-img position-relative overflow-hidden">
                <img class="img-fluid w-100" src="img/p23.jpg" alt="Silla de Jardín">
                <div class="product-action">
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                    <form method="post" action="favoritos.php" style="display:inline;">
                        <input type="hidden" name="product_id" value="3">
                        <input type="hidden" name="action" value="add">
                        <button type="submit" class="btn btn-outline-dark btn-square">
                            <i class="far fa-heart"></i>
                        </button>
                    </form>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                </div>
            </div>
            <div class="text-center py-4">
            <a class="h6 text-decoration-none text-truncate" href="">Silla perezosa plegable en madera reclinable</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>S/289.99</h5>
                            <h6 class="text-muted ml-2"><del>S/299.99</del></h6>
                        </div>
                <div class="d-flex align-items-center justify-content-center mb-1">
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="far fa-star text-primary mr-1"></small>
                    <small>(50)</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Producto 24 -->
    <div class="col-lg-3 col-md-6 col-sm-6 pb-1">
        <div class="product-item bg-light mb-4" data-precio="S/100-S/200" data-color="Beige" data-material="Madera Sólida" data-reseña="cincoestrellas">
            <div class="product-img position-relative overflow-hidden">
                <img class="img-fluid w-100" src="img/p24.jpg" alt="Sofá de Tela">
                <div class="product-action">
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                    <form method="post" action="favoritos.php" style="display:inline;">
                        <input type="hidden" name="product_id" value="5">
                        <input type="hidden" name="action" value="add">
                        <button type="submit" class="btn btn-outline-dark btn-square">
                            <i class="far fa-heart"></i>
                        </button>
                    </form>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                </div>
            </div>
            <div class="text-center py-4">
            <a class="h6 text-decoration-none text-truncate" href="">Sillas de Madera</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>S/119.00</h5>
                            <h6 class="text-muted ml-2"><del>S/129.99</del></h6>
                        </div>
                <div class="d-flex align-items-center justify-content-center mb-1">
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small>(10)</small>
                </div>
            </div>
        </div>
    </div>
</div>

                    <div class="col-12">
                        <nav>
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled"><a class="page-link" href="#">Anterior</a></li>
                                <li class="page-item active"><a class="page-link" href="shop.php">1</a></li>
                                <li class="page-item"><a class="page-link" href="page2.php">2</a></li>
                                <li class="page-item active"><a class="page-link" href="page2.php">Siguiente</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin del producto de la tienda -->
    </div>
    </div>
    <!-- Fin de la tienda -->
    <!-- SLIDER INFORMACIÓN DE CONTACTO -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4"><b>ACERCA DE</b></h5>
                <p class="mb-4">Nuestro estudio de diseño ayuda a los clientes a tomar decisiones inteligentes y evitar
                    errores costosos. Permita que nuestros diseñadores y arquitectos hagan realidad el espacio de sus
                    sueños.</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>San Sebastian, Alto Qosqo, CA San
                    Hilarion</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>MuebleriasCosme@gmail.com,
                    CosmeHuari25@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>(+51) 951 402 341</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4"><b>Ofrecemos</b></h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Nuestra
                                tienda</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Detalles de la
                                tienda</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Carro de la
                                compra</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Verificar</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contáctenos</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4"><b>Servicios</b></h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Tapizados</a>
                            <a class="text-secondary mb-2" href="#"><i
                                    class="fa fa-angle-right mr-2"></i>Restauración</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Pintura</a>
                            <a class="text-secondary mb-2" href="#"><i
                                    class="fa fa-angle-right mr-2"></i>Tratamientos</a>
                            <a class="text-secondary mb-2" href="#"><i
                                    class="fa fa-angle-right mr-2"></i>Recubrimiento</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Instalaciones</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4"><b>Contáctanos!</b></h5>
                        <p>Contáctanos y mantente al tanto de nuestras últimas ofertas y promociones.</p>
                        <form method="post" action="registro_correo.php">
                            <div class="input-group">
                                <input type="email" class="form-control" name="correo" placeholder="Ingresar Email"
                                    required>
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">Ingresar</button>
                                </div>
                            </div>
                        </form>
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Siguenos en nuestras Redes Sociales</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; <a class="text-primary" href="#">2024 Cosme Store.</a>Todos los derechos reservados.
                    Diseño y desarrollo por Cosme Store.
                    by
                    <a class="text-primary" href="https://htmlcodex.com">HTML Codex</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- FIN DEL SLIDER INFORMACIÓN DE CONTACTO -->


    <!-- SLIDER BOTÓN DE WHATSAPP -->
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Centro de Ayuda</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f8f9fa;
                padding: 20px;
            }

            /* Estilos del contenedor del botón */
            .whatsapp-container {
                position: fixed;
                bottom: 24px;
                left: 24px;
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: #25D366;
                border-radius: 50%;
                padding: 20px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
                text-decoration: none;
                color: white;
                font-size: 24px;
                font-family: Arial, sans-serif;
                animation: slideIn 0.5s ease-out;
                transition: transform 0.2s ease-in-out;
            }

            .whatsapp-icon {
                width: 60px;
                height: 60px;
            }

            @keyframes slideIn {
                0% {
                    left: -100px;
                    opacity: 0;
                }

                100% {
                    left: 24px;
                    opacity: 1;
                }
            }

            .whatsapp-container:hover {
                background-color: #075e54;
                transform: scale(1.1);
            }

            .contacts-popup {
                display: none;
                position: fixed;
                bottom: 120px;
                left: 24px;
                background-color: #fff;
                border: 2px solid #25D366;
                border-radius: 10px;
                padding: 20px;
                width: 300px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
                z-index: 1000;
                display: flex;
                flex-direction: column;
                align-items: flex-start;
            }

            .contact-card {
                background-color: #e9ecef;
                border-radius: 8px;
                padding: 10px;
                margin-bottom: 10px;
                display: flex;
                align-items: center;
            }

            .contact-info {
                margin-left: 10px;
            }

            .contact-name {
                font-weight: bold;
                margin-bottom: 5px;
                color: green;
                /* Color verde para el nombre */
            }

            .contact-role {
                margin-bottom: 5px;
                color: black;
                /* Color negro para el rol */
            }

            .contact-availability {
                color: gray;
            }
        </style>
    </head>

    <body>

        <div class="contacts-popup" id="contactsPopup">
            <h3 style="color: green;">WhatsApp Chat</h3>

            <div class="contact-card">
                <a href="https://chat.whatsapp.com/KpMHzxL0wFwDlyXQLQxTl4" class="contact-link">
                    <img src="img/user.jpg" alt="Cosme Huari Quispe" class="whatsapp-icon">
                    <div class="contact-info">
                        <div class="contact-name">Cosme Huari Quispe</div>
                        <div class="contact-role">Dueño</div>
                        <div class="contact-availability">Disponible de 9:00am - 6:00pm</div>
                    </div>
                </a>
            </div>

            <div class="contact-card">
                <a href="https://chat.whatsapp.com/KpMHzxL0wFwDlyXQLQxTl4" class="contact-link">
                    <img src="img/user.jpg" alt="Administrador" class="whatsapp-icon">
                    <div class="contact-info">
                        <div class="contact-name">Corporativo</div>
                        <div class="contact-role">Gerencia</div>
                        <div class="contact-availability">Disponible de 9:00am - 6:00pm</div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Contenedor del botón de WhatsApp con solo el icono -->
        <a href="#" class="whatsapp-container" id="whatsappButton" aria-label="Chat WhatsApp">
            <img src="img/WhatsApp_icon.png" alt="WhatsApp" class="whatsapp-icon">
        </a>

        <!-- Reproductor de sonido (oculto) -->
        <audio id="notificationSound" src="audio/notificacion.mp3"></audio>

        <script>
            // Mostrar/ocultar el popup de contactos cuando se hace clic en el botón de WhatsApp
            document.querySelector('.whatsapp-container').addEventListener('click', function (event) {
                event.preventDefault(); // Prevenir el enlace de abrir WhatsApp inmediatamente
                var contactsPopup = document.getElementById('contactsPopup');
                if (contactsPopup.style.display === 'flex') {
                    contactsPopup.style.display = 'none'; // Ocultar el popup
                } else {
                    contactsPopup.style.display = 'flex'; // Mostrar el popup
                }

                // Reproducir el sonido de notificación
                var notificationSound = document.getElementById('notificationSound');
                notificationSound.play(); // Reproduce el sonido
            });
        </script>

        <!-- Volver al inicio -->
        <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

        <!-- Bibliotecas de JavaScript -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Contacto con archivo Javascript -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Plantilla Javascript -->
        <script src="js/main.js"></script>

    </body>

    </html>