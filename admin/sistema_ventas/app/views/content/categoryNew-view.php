<?php
// Verificar si se ha enviado el formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['modulo_categoria']) && $_POST['modulo_categoria'] == 'registrar') {
    // Aquí iría tu lógica para registrar la categoría en la base de datos
    // ...

    // Suponiendo que la inserción fue exitosa, establece esta variable
    $registro_exitoso = true; // Cambia esta variable según el resultado del registro

    if ($registro_exitoso) {
        echo "<div class='notification is-success'>
                  <button class='delete'></button>
                  ¡La categoría se ha registrado correctamente!
              </div>";
    } else {
        echo "<div class='notification is-danger'>
                  <button class='delete'></button>
                  Hubo un error al registrar la categoría. Por favor, inténtalo de nuevo.
              </div>";
    }
}

// Verificar si se ha enviado el formulario de eliminación
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['eliminar_categoria'])) {
    // Aquí iría tu lógica para eliminar los datos de la base de datos
    // ...

    // Si la eliminación fue exitosa
    $eliminacion_exitosa = true; // Cambia esta variable según el resultado de la eliminación

    if ($eliminacion_exitosa) {
        echo "<div class='notification is-success'>
                  <button class='delete'></button>
                  ¡La categoría se ha eliminado correctamente!
              </div>";
    } else {
        echo "<div class='notification is-danger'>
                  <button class='delete'></button>
                  Hubo un error al eliminar la categoría. Por favor, inténtalo de nuevo.
              </div>";
    }
}
?>

<div class="container is-fluid mb-6">
    <h1 class="title">Categorías</h1>
    <h2 class="subtitle"><i class="fas fa-tag fa-fw"></i> &nbsp; Nueva categoría</h2>
</div>

<div class="container pb-6 pt-6">
    <form class="FormularioAjax" action="<?php echo APP_URL; ?>app/ajax/categoriaAjax.php" method="POST" autocomplete="off">
        <input type="hidden" name="modulo_categoria" value="registrar">
        <div class="columns">
            <div class="column">
                <div class="control">
                    <label>Nombre <?php echo CAMPO_OBLIGATORIO; ?></label>
                    <input class="input" type="text" name="categoria_nombre" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{4,50}" maxlength="50" required>
                </div>
            </div>
        </div>
        <p class="has-text-centered">
            <button type="reset" class="button is-link is-light is-rounded"><i class="fas fa-paint-roller"></i> &nbsp; Limpiar</button>
            <button type="submit" class="button is-info is-rounded"><i class="far fa-save"></i> &nbsp; Guardar</button>
        </p>
        <p class="has-text-centered pt-6">
            <small>Los campos marcados con <?php echo CAMPO_OBLIGATORIO; ?> son obligatorios</small>
        </p>
    </form>
</div>