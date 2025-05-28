<?php include('conexion.php');

if ($_POST["buscar"] == '1'){

    $query = "SELECT * FROM articulos WHERE nombre != '' ";

    if ($_POST["color"] != 'Todos') {
        $query .= "AND color = '".$_POST["color"]."' ";
    }

    if ($_POST["modelo"] != 'Todos') {
        $query .= "AND modelo = '".$_POST["modelo"]."' ";
    }

    if ($_POST["precio"] != 'Todos') {
        $query .= "ORDER BY precio ".$_POST["precio"]." ";
    }

    // Filtrado por reseña
    if (isset($_POST["reseña"]) && $_POST["reseña"] != 'Todas') {
        $query .= "AND reseña = '".$_POST["reseña"]."' ";
    }

    $result = $conexion->query($query);

    while ($row = $result->fetch_assoc()) {
        echo '
        <div id="mi_div" class="col-4 product-item" data-precio="'.$row["precio"].'" data-color="'.$row["color"].'" data-material="'.$row["material"].'" data-reseña="'.$row["reseña"].'">
            <div class="card shadow-sm">
                <img src="img/'.$row["img"].'.jpg">
                <div class="card-body">
                    <p class="card-text">'.$row["nombre"].' '.$row["color"].' '.$row["modelo"].'</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Detalles</button>
                            <button id="al_carro" type="submit" class="btn btn-sm btn-outline-secondary">Añadir al carrito</button>
                        </div>
                        <small class="text-muted">'. $row["precio"].'$</small>
                    </div>
                </div>
            </div>
        </div>';
    }
}
?>