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
					<a class="text-body mr-3" href="servicios.html">Servicios</a>
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

	<!-- SLIDER CATEGORÍAS -->
	<div class="container-fluid bg-dark mb-30">
		<div class="row px-xl-5">
			<div class="col-lg-3 d-none d-lg-block">
				<a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse"
					href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
					<h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categorias</h6>
					<i class="fa fa-angle-down text-dark"></i>
				</a>
				<nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light"
					id="navbar-vertical" style="width: calc(100% - 30px); z-index: 19;">
					<div class="navbar-nav w-100">
						<div class="nav-item dropdown dropright">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dormitorios <i
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
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Cocinas <i
									class="fa fa-angle-right float-right mt-1"></i></a>
							<div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
								<a href="" class="dropdown-item">Mesas para Cocin</a>
								<a href="" class="dropdown-item">Sillas y Bancos</a>
								<a href="" class="dropdown-item">Muebles para Electrodomésticos</a>
								<a href="" class="dropdown-item">Bar y Mini Bares</a>
							</div>
						</div>
						<div class="nav-item dropdown dropright">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Oficinas <i
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
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Salas<i
									class="fa fa-angle-right float-right mt-1"></i></a>
							<div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
								<a href="" class="dropdown-item">Sofás y Seccionales</a>
								<a href="" class="dropdown-item">Sillones y Butacas</a>
								<a href="" class="dropdown-item">Muebles para TV</a>
								<a href="" class="dropdown-item">Vitrinas y Consolas</a>
							</div>
						</div>
						<div class="nav-item dropdown dropright">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Comedores <i
									class="fa fa-angle-right float-right mt-1"></i></a>
							<div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
								<a href="" class="dropdown-item">Mesas de Comedor</a>
								<a href="" class="dropdown-item">Sillas de Comedor</a>
								<a href="" class="dropdown-item">Bancos para Comedor</a>
								<a href="" class="dropdown-item">Buffets y Credenzas</a>
							</div>
						</div>
						<div class="nav-item dropdown dropright">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Jardín y Exteriores <i
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
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Infantiles <i
									class="fa fa-angle-right float-right mt-1"></i></a>
							<div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
								<a href="" class="dropdown-item">Camas Infantiles</a>
								<a href="" class="dropdown-item">Escritorios para Niños</a>
								<a href="" class="dropdown-item">Cajoneras y Estanterías Infantiles</a>
								<a href="" class="dropdown-item">Sillas para Niños</a>
								<a href="" class="dropdown-item">Mesas de Juego</a>
							</div>
						</div>
						<div class="dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Terraza
								<i class="fa fa-angle-right float-right mt-1"></i>
							</a>
							<div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
								<a href="" class="dropdown-item">Muebles de Exterior</a>
								<a href="" class="dropdown-item">Sombrillas y Toldos</a>
								<a href="" class="dropdown-item">Sillas y Mesas de Jardín</a>
								<a href="" class="dropdown-item">Decoración para Terraza</a>
								<a href="" class="dropdown-item">Cojines y Textiles Exteriores</a>
							</div>
						</div>

						<div class="dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Baño
								<i class="fa fa-angle-right float-right mt-1"></i>
							</a>
							<div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
								<a href="" class="dropdown-item">Muebles de Baño</a>
								<a href="" class="dropdown-item">Espejos</a>
								<a href="" class="dropdown-item">Accesorios de Baño</a>
								<a href="" class="dropdown-item">Cestas de Almacenamiento</a>
								<a href="" class="dropdown-item">Textiles de Baño</a>
							</div>
						</div>

						<div class="dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tendencias
								<i class="fa fa-angle-right float-right mt-1"></i>
							</a>
							<div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
								<a href="" class="dropdown-item">Estilos de Decoración</a>
								<a href="" class="dropdown-item">Nuevos Productos</a>
								<a href="" class="dropdown-item">Consejos de Estilo</a>
								<a href="" class="dropdown-item">Inspiración para el Hogar</a>
								<a href="" class="dropdown-item">Ofertas y Promociones</a>
							</div>
						</div>
				</nav>
			</div>
			<!-- FIN DEL SLIDER CATEGORÍAS -->

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
								<a href="productos_favoritos.php">
									<i class="fas fa-heart text-primary"></i></a>
								<span class="badge text-secondary border border-secondary rounded-circle"
									style="padding-bottom: 5px;">Favoritos</span>
							</a>
							<a href="cart.php" class="btn px-0 ml-3">
								<a href="shop.php">
								<i class="fas fa-shopping-cart text-primary"></i>
								<span class="badge text-secondary border border-secondary rounded-circle"
									style="padding-bottom: 5px;">Carrito</span>
							</a>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- FIN DEL SLIDER CABEZERA -->


	<!-- Breadcrumb Start -->
	<div class="container-fluid">
		<div class="row px-xl-5">
			<div class="col-12">
				<nav class="breadcrumb bg-light mb-30">
					<a class="breadcrumb-item text-dark" href="#">Inicio</a>
					<a class="breadcrumb-item text-dark" href="#">Tienda</a>
					<span class="breadcrumb-item active">Carrito de Compra</span>
				</nav>
			</div>
		</div>
	</div>
	<!-- Breadcrumb End -->


	<!-- Cart Start -->
	<!DOCTYPE html>
	<html lang="es">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Carrito de Compras</title>
		<link rel="stylesheet" href="estilos.css"> <!-- Asegúrate de enlazar tu archivo CSS -->
		<style>
			body {
				font-family: Arial, sans-serif;
				background-color: #f8f9fa;
				/* Fondo claro */
			}

			.btn-naranja {
				background-color: #ffd334;
				/* Color de fondo amarillo-naranja */
				color: black;
				/* Color del texto blanco */
				border: none;
				/* Sin borde */
				padding: 10px 10px;
				/* Espaciado interno */
				cursor: pointer;
				/* Cursor de puntero */
				border-radius: 5px;
				/* Bordes redondeados */
				transition: background-color 0.3s;
				/* Transición suave */
			}

			.btn-naranja:hover {
				background-color: #ffd334;
				/* Color más oscuro al pasar el mouse */
			}
		</style>
	</head>

	<!DOCTYPE html>
<html lang="es">  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Producto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
    <script>
        function mostrarMensaje(event) {
            event.preventDefault(); // Prevenir el comportamiento por defecto del formulario
            // Aquí puedes agregar la lógica para enviar el formulario usando AJAX si lo deseas

            // Mostrar el mensaje de éxito
            const mensajeDiv = document.getElementById('mensajeExito');
            mensajeDiv.classList.remove('is-hidden');

            // Simular un envío de formulario (puedes reemplazar esto con tu lógica AJAX)
            setTimeout(() => {
                document.getElementById('registroProductoForm').submit();
            }, 1000); // Simula un retraso de 1 segundo antes de enviar
        }
    </script>
</head>
<body>
    <div class="container">
        <h1 class="title has-text-centered">Registro de Producto</h1>

        <!-- Mensaje de éxito -->
        <div id="mensajeExito" class="notification is-success is-hidden">
            ¡Producto añadido al carrito con éxito!
        </div>

        <form id="registroProductoForm" action="http://localhost/sisventas/admin/sistema_ventas/app/ajax/productoAjax.php" method="POST" autocomplete="off" enctype="multipart/form-data" onsubmit="mostrarMensaje(event)">
            <input type="hidden" name="modulo_producto" value="registrar">
            <div class="columns">
                <div class="column">
                    <label class="label">Código de producto</label>
                    <input class="input" type="text" name="producto_codigo" pattern="[a-zA-Z0-9- ]{1,77}" maxlength="77" required>
                </div>
                <div class="column">
                    <label class="label">Nombre</label>
                    <input class="input" type="text" name="producto_nombre" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,100}" maxlength="100" required>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <label class="label">Precio de compra</label>
                    <input class="input" type="text" name="producto_precio_compra" pattern="[0-9.]{1,30}" maxlength="30" required>
                </div>
                <div class="column">
                    <label class="label">Precio de venta</label>
                    <input class="input" type="text" name="producto_precio_venta" pattern="[0-9.]{1,30}" maxlength="30" required>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <label class="label">Stock & existencias</label>
                    <input class="input" type="number" name="producto_stock" min="0" required>
                </div>
                <div class="column">
                    <label class="label">Marca</label>
                    <input class="input" type="text" name="producto_marca" pattern="[a-zA-Z0-9- ]{1,35}" maxlength="35" required>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <label class="label">Modelo</label>
                    <input class="input" type="text" name="producto_modelo" pattern="[a-zA-Z0-9- ]{1,35}" maxlength="35" required>
                </div>
                <div class="column">
                    <label class="label">Presentación del producto</label>
                    <div class="select">
                        <select name="producto_unidad" required>
                            <option value="Unidad" selected>Unidad</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <label class="label">Categoría</label>
                    <div class="select">
                        <select name="producto_categoria" required>
                            <option value="" selected>Seleccione una opción</option>
                            <option value="1">Silla</option>
                            <option value="2">Mesa</option>
                            <option value="3">Ropero</option>
                            <option value="4">Estantería</option>
                            <option value="5">Armario</option>
                            <option value="6">Cabecera</option>
                            <option value="7">Taburete</option>
                            <option value="8">Banco</option>
                            <option value="9">Escritorio</option>
                            <option value="10">Estante</option>
                            <option value="11">Librero</option>
                            <option value="12">Velador</option>
                            <option value="13">Comoda</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <label class="label">Foto o imagen del producto</label>
                    <div class="file">
                        <label class="file-label">
                            <input class="file-input" type="file" name="producto_foto" accept=".jpg, .png, .jpeg" required>
                            <span class="file-cta">
                                <span class="file-label">Seleccionar archivo...</span>
                            </span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="has-text-centered">
                <button type="reset" class="button is-light">Limpiar</button>
                <button type="submit" class="button is-info">Guardar</button>
            </div>
            <p class="has-text-centered pt-6">
                <small>Los campos marcados son obligatorios</small>
            </p>
        </form>
    </div>
</body>
</html>

		<script>
			document.querySelectorAll('input[name="precio"], input[name="cantidad"]').forEach(input => {
				input.addEventListener('input', function () {
					const precio = parseFloat(document.querySelector('input[name="precio"]').value) || 0;
					const cantidad = parseInt(document.querySelector('input[name="cantidad"]').value) || 0;
					const total = precio * cantidad;
					document.querySelector('input[name="total"]').value = total.toFixed(2);
				});
			});
		</script>
	</body>

	</html>
	<!-- Cart End -->
 

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








	
	<!-- Button WhatsApp -->
<style>
    .whatsapp-container {
        position: fixed;
        bottom: 24px;
        right: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #25D366;
        border-radius: 50%; /* Forma de círculo */
        width: 100px; /* Tamaño del botón */
        height: 100px; /* Tamaño del botón */
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        text-decoration: none;
        color: white;
        font-size: 24px;
        font-family: Arial, sans-serif;
        z-index: 1000; /* Asegura que esté delante de otros elementos */
        transition: background-color 0.3s; /* Efecto de transición */
    }
    .whatsapp-icon {
        width: 80px;
        height: 80px;
    }
    .whatsapp-container:hover {
        background-color: #25D366; /* Color al pasar el mouse */
    }
    .profile-image {
        display: none; /* Oculto por defecto */
        position: fixed;
        bottom: 80px; /* Ajusta la posición */
        right: 24px; /* Debe alinearse con el botón */
        width: 100px; /* Tamaño de la imagen */
        height: 100px; /* Tamaño de la imagen */
        border-radius: 50%; /* Redondeado */
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
    }
</style>

<!-- Contenedor del botón de WhatsApp -->
<a href="https://api.whatsapp.com/send?phone=51963983266&text=Hola!%20necesito%20más%20información%20acerca%20de%20los%20productos!%20" class="whatsapp-container" target="_blank" onclick="showProfileImage()" aria-label="Chat WhatsApp">
    <img src="img/WhatsApp_icon.png" alt="WhatsApp" class="whatsapp-icon">
</a>














<!-- ASISTENTE IA -->
<?php

// Inicializar mensajes solo una vez
if (!isset($_SESSION['messages'])) {
    $_SESSION['messages'] = [];
    $_SESSION['messages'][] = "<div class='message bot-message'><strong>Bot:</strong> ¡Hola! 👋 ¿En qué puedo ayudarte hoy?</div>";
}

$chatOpen = false;

// Procesar envíos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $chatOpen = true;
    if (isset($_POST['user-input'])) {
        $userInput = trim($_POST['user-input']);
        if ($userInput !== '') {
            $_SESSION['messages'][] = "<div class='message user-message'><strong>Yo:</strong> " . htmlspecialchars($userInput) . "</div>";
            $_SESSION['messages'][] = "<div class='message bot-message'><strong>Bot:</strong> Gracias por tu mensaje. Para más información comunícate al 963983266.</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asistente de Chat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/emoji-mart@latest/dist/browser.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .chat-container {
            position: fixed;
            bottom: 20px;
            left: 20px;
            width: 350px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            display: none;
            flex-direction: column;
            background: white;
            z-index: 9999;
        }
        .chat-header {
            background-color: #ffd333;
            color: white;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .chat-header img {
            width: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .close-chat {
            background: none;
            border: none;
            color: white;
            font-size: 20px;
            cursor: pointer;
        }
        .chat-body {
            padding: 10px;
            max-height: 300px;
            overflow-y: auto;
            flex: 1;
            background-color: #f9f9f9;
        }
        .message {
            margin: 5px 0;
            padding: 10px;
            border-radius: 10px;
            max-width: 80%;
            word-wrap: break-word;
            line-height: 1.5;
        }
        .user-message {
            background: #dcf8c6;
            margin-left: auto;
        }
        .bot-message {
            background: #efefef;
        }
        .chat-footer {
            display: flex;
            align-items: center;
            padding: 10px;
            background: white;
            border-top: 1px solid #ccc;
            position: relative;
        }
        .chat-footer input {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 5px;
        }
        .emoji-button {
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
            margin-right: 5px;
        }
        .emoji-picker-container {
            position: absolute;
            bottom: 50px;
            left: 10px;
            display: none;
            z-index: 10000;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .toggle-chat {
            background-color: #ffd333;
            color: black;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
            position: fixed;
            bottom: 80px;
            left: 20px;
            z-index: 9998;
        }
    </style>
</head>
<body>

<!-- Botón para abrir el chat -->
<button class="toggle-chat" onclick="openChat()">Chat ahora</button>

<!-- Caja del chat -->
<div class="chat-container" id="chatbox" style="<?php echo ($chatOpen || isset($_SESSION['chat_open'])) ? 'display: flex;' : ''; ?>">
    <div class="chat-header">
        <div style="display: flex; align-items: center;">
            <img src="img/bot.png" alt="Bot">
            <h2>Asistente Bot</h2>
        </div>
        <button class="close-chat" onclick="closeChat()">✖</button>
    </div>
    <div class="chat-body" id="chat-body">
        <?php
        // Mostrar mensajes almacenados
        foreach ($_SESSION['messages'] as $message) {
            echo $message;
        }
        ?>
    </div>
    <div class="chat-footer">
        <button type="button" class="emoji-button" onclick="toggleEmojiPicker()">😊</button>
        <div class="emoji-picker-container" id="emoji-picker"></div>
        <form method="POST" action="">
            <input type="text" name="user-input" id="user-input" placeholder="Escribe un mensaje..." autocomplete="off" required>
            <button type="submit"><i class="fas fa-paper-plane"></i></button>
        </form>
    </div>
</div>

<script>
    // Función para abrir el chat
    function openChat() {
        document.getElementById('chatbox').style.display = 'flex';
    }

    // Función para cerrar el chat
    function closeChat() {
        document.getElementById('chatbox').style.display = 'none';
    }

    // Auto scroll hasta el final de la conversación
    var chatBody = document.getElementById('chat-body');
    chatBody.scrollTop = chatBody.scrollHeight;

    // Mostrar/Ocultar el selector de emojis
    function toggleEmojiPicker() {
        var picker = document.getElementById('emoji-picker');
        picker.style.display = picker.style.display === 'block' ? 'none' : 'block';
    }

    // Crear e insertar el selector de emojis (similar a un teclado)
    document.addEventListener("DOMContentLoaded", function () {
        const pickerContainer = document.getElementById('emoji-picker');
        const inputField = document.getElementById('user-input');

        const picker = new EmojiMart.Picker({
            set: 'native',
            onEmojiSelect: emoji => {
                inputField.value += emoji.native;
            }
        });

        pickerContainer.appendChild(picker);
    });
</script>

</body>
</html>
<!-- ASISTENTE IA -->
