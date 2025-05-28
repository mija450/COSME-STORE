<?php
include "config/conexion.php";
$Id = $_REQUEST['producto_id'];
$sql = "DELETE FROM producto Where producto_id = $Id";
$resultado = $conexion -> query($sql);

if($resultado){
    header("Location: index.php");
}else{
    echo "No se elimino el dato";
}
?>