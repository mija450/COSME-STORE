<section class="full-width navLateral scroll" id="navLateral">
    <div class="full-width navLateral-body" style="background-image: url('https://w.wallhaven.cc/full/gp/wallhaven-gp3vql.jpg'); background-size: cover; background-position: center; position: relative;">
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.5);"></div> <!-- Capa oscura -->
        
        <div class="full-width navLateral-body-logo has-text-centered titles is-uppercase" style="padding: 15px; background-color: #5d9b9b; color: #fff; font-weight: bold;">
            Sistema de ventas
        </div> 
        
        <figure class="full-width" style="height: 77px; display: flex; justify-content: center; align-items: center;">
            <div class="navLateral-body-cl" style="padding: 10px;">
                <?php
                    if (is_file("./app/views/fotos/".$_SESSION['foto'])) {
                        echo '<img class="is-rounded img-responsive" src="'.APP_URL.'app/views/fotos/'.$_SESSION['foto'].'" style="border-radius: 50%; width: 50px; height: 50px;">';
                    } else {
                        echo '<img class="is-rounded img-responsive" src="'.APP_URL.'app/views/fotos/default.png" style="border-radius: 50%; width: 50px; height: 50px;">';
                    }
                ?> 
            </div>
            <figcaption class="navLateral-body-cr" style="text-align: center; padding: 10px;">
                <span style="display: block; font-size: 16px; font-weight: bold; color: #fff;"><?php echo $_SESSION['nombre']; ?></span>
                <small style="font-size: 14px; color: #fff;"><?php echo $_SESSION['usuario']; ?></small>
            </figcaption>
        </figure>
        
        <div class="full-width titles navLateral-body-tittle-menu has-text-centered is-uppercase" style="background-color: #5d9b9b; color: #fff; padding: 15px;">
            <i class="fas fa-th-large fa-fw"></i> &nbsp; <?php echo APP_NAME; ?>
        </div>
        
        <nav class="full-width" style="padding: 15px;">
            <ul class="full-width list-unstyle menu-principal">
                <li class="full-width">
                    <a href="<?php echo APP_URL; ?>dashboard/" class="full-width" style="display: flex; align-items: center; padding: 10px 15px; text-decoration: none; color: #5d9b9b;">
                        <div class="navLateral-body-cl" style="width: 30px; text-align: center;">
                            <i class="fab fa-dashcube fa-fw" style="color: #5d9b9b;"></i>
                        </div>
                        <div class="navLateral-body-cr">
                            Inicio
                        </div>
                    </a>
                </li>

				<li class="full-width divider-menu-h"></li>

				<li class="full-width">
					<a href="#" class="full-width btn-subMenu">
						<div class="navLateral-body-cl">
							<i class="fas fa-users fa-fw"></i>
						</div>
						<div class="navLateral-body-cr">
							USUARIOS
						</div>
						<span class="fas fa-chevron-down"></span>
					</a>
					<ul class="full-width menu-principal sub-menu-options">
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>userNew/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-cash-register fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Nuevo usuario
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>userList/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-clipboard-list fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Lista de usuarios
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>userSearch/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-search fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Buscar usuario
								</div>
							</a>
						</li>
					</ul>
				</li>

				<li class="full-width divider-menu-h"></li>

				<li class="full-width">
					<a href="#" class="full-width btn-subMenu">
						<div class="navLateral-body-cl">
							<i class="fas fa-address-book fa-fw"></i>
						</div>
						<div class="navLateral-body-cr">
							CLIENTES
						</div>
						<span class="fas fa-chevron-down"></span>
					</a>
					<ul class="full-width menu-principal sub-menu-options">
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>clientNew/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-male fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Nuevo cliente
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>clientList/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-clipboard-list fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Lista de clientes
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>clientSearch/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-search fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Buscar cliente
								</div>
							</a>
						</li>
					</ul>
				</li>

				<li class="full-width divider-menu-h"></li>

				<li class="full-width">
					<a href="#" class="full-width btn-subMenu">
						<div class="navLateral-body-cl">
							<i class="fas fa-tags fa-fw"></i>
						</div>
						<div class="navLateral-body-cr">
							CATEGORIAS
						</div>
						<span class="fas fa-chevron-down"></span>
					</a>
					<ul class="full-width menu-principal sub-menu-options">
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>categoryNew/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-tag fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Nueva categoría
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>categoryList/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-clipboard-list fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Lista de categorías
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>categorySearch/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-search fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Buscar categoría
								</div>
							</a>
						</li>
					</ul>
				</li>

				<li class="full-width divider-menu-h"></li>

				<li class="full-width">
					<a href="#" class="full-width btn-subMenu">
						<div class="navLateral-body-cl">
							<i class="fas fa-cubes fa-fw"></i>
						</div>
						<div class="navLateral-body-cr">
							PRODUCTOS
						</div>
						<span class="fas fa-chevron-down"></span>
					</a>
					<ul class="full-width menu-principal sub-menu-options">
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>producto/index.php" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-box fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Nuevo producto
								</div>
							</a>
						</li>
						
					</ul>
				</li>

				<li class="full-width divider-menu-h"></li>

				<li class="full-width">
					<a href="#" class="full-width btn-subMenu">
						<div class="navLateral-body-cl">
							<i class="fas fa-shopping-cart fa-fw"></i>
						</div>
						<div class="navLateral-body-cr">
							VENTAS
						</div>
						<span class="fas fa-chevron-down"></span>
					</a>
					<ul class="full-width menu-principal sub-menu-options">
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>saleNew/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-cart-plus fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Nueva venta
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>saleList/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-clipboard-list fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Lista de ventas
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>saleSearch/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-search-dollar fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Buscar venta
								</div>
							</a>
						</li>
					</ul>
				</li>
					


				<li class="full-width divider-menu-h"></li>

<li class="full-width">
	<a href="#" class="full-width btn-subMenu">
		<div class="navLateral-body-cl">
			<i class="fas fa-cubes fa-fw"></i>
		</div>
		<div class="navLateral-body-cr">
			DETALLE VENTA
		</div>
		<span class="fas fa-chevron-down"></span>
	</a>
	<ul class="full-width menu-principal sub-menu-options">
		<li class="full-width">
			<a href="<?php echo APP_URL; ?>detalle_venta/index.php" class="full-width">
				<div class="navLateral-body-cl">
					<i class="fas fa-box fa-fw"></i>
				</div>
				<div class="navLateral-body-cr">
					Nuevo detalle venta 
				</div>
			</a>
		</li>
		
	</ul>
</li>



				<li class="full-width divider-menu-h"></li>

				<li class="full-width">
					<a href="#" class="full-width btn-subMenu">
						<div class="navLateral-body-cl">
							<i class="fas fa-cogs fa-fw"></i>
						</div>
						<div class="navLateral-body-cr">
							CONFIGURACIONES
						</div>
						<span class="fas fa-chevron-down"></span>
					</a>
					<ul class="full-width menu-principal sub-menu-options">
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL."userUpdate/".$_SESSION['id']."/"; ?>" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-user-tie fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Mi cuenta
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL."userPhoto/".$_SESSION['id']."/"; ?>" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-camera"></i>
								</div>
								<div class="navLateral-body-cr">
									Mi foto 
								</div>
							</a>
						</li>
					</ul>
				</li>

				<li class="full-width divider-menu-h"></li>

				<li class="full-width mt-5">
					<a href="<?php echo APP_URL."logOut/"; ?>" class="full-width btn-exit" >
						<div class="navLateral-body-cl">
							<i class="fas fa-power-off"></i>
						</div>
						<div class="navLateral-body-cr">
							Cerrar sesión
						</div>
					</a>
				</li>

			</ul>
		</nav>
	</div>
</section>