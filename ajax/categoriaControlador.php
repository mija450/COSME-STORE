<?php
	require_once "../config/APP.php";
	include "../vistas/inc/session_start.php";

	if(isset($_POST['modulo_catalogo'])){

		/*--------- Instancia al controlador - Instance to controller ---------*/
		require_once "../controladores/CatalogoControlador.php";
        $ins_catalogo = new catalogoControlador();
        

        /*--------- Registrar catalogo - Register client ---------*/
        if($_POST['modulo_catalogo']=="registro"){
            echo $ins_catalogo->registrar_catalogo_controlador();
		}

        /*--------- Eliminar catalogo - Delete category ---------*/
        if($_POST['modulo_catalogo']=="eliminar"){
            echo $ins_catalogo->eliminar_catalogo_controlador();
		}

        /*--------- Actualizar catalogo - Update category ---------*/
        if($_POST['modulo_catalogo']=="actualizar"){
            echo $ins_catalogo->actualizar_catalogo_controlador();
        }

	}else{
		session_destroy();
		header("Location: ".SERVERURL."index/");
	}