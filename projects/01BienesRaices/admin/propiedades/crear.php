<?php
// Base de datos
require '../../includes/config/database.php';

$db = conectarDB();

// Consultar para obtener los vendedores
$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);

// Arreglo de mensajes de errores
$errores = [];

$titulo = '';
$precio = '';
$descripcion = '';
$habitaciones = '';
$wc = '';
$estacionamiento = '';
$vendedorId = '';

// Ejecuta el código después de que el usuario envía el formulario
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $habitaciones = $_POST['habitaciones'];
    $wc = $_POST['wc'];
    $estacionamiento = $_POST['estacionamiento'];
    $vendedorId = $_POST['vendedor'];
    $creado = date('Y/m/d');

    if(!$titulo) {
        $errores[] = "Debes añadir un título";
    }
    if(!$precio) {
        $errores[] = "El precio es obligatorio";
    }
    if(strlen($descripcion) < 50) {
        $errores[] = "La descripción es obligatoria y debe tener al menos 50 caracteres";
    }
    if(!$habitaciones) {
        $errores[] = "El número de habitaciones es obligatorio";
    }
    if(!$wc) {
        $errores[] = "El número de baños es obligatorio";
    }
    if(!$estacionamiento) {
        $errores[] = "El número de estacionamientos es obligatorio";
    }
    if(!$vendedorId) {
        $errores[] = "Elige un venedor";
    }

    // Revisar que el arreglo de errores esté vacío
    if(empty($errores)) {
        // Insertar en la base de datos
        $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, creado, vendedores_id) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedorId')";

        // echo $query;

        $resultado = mysqli_query($db, $query);

        if($resultado) {
            // Redireccionar al usuario
            header('Location: /admin');
        }
    }
}

require '../../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Crear</h1>

    <a class="boton boton-verde" href="/admin">Volver</a>

    <?php foreach($errores as $error): ?>
    <div class="alerta error">
        <?php echo $error; ?>
    </div>
    <?php endforeach; ?>

    <form class="formulario" method="post" action="/admin/propiedades/crear.php">
        <fieldset>
            <legend>Información General</legend>
            <label for="titulo">Título de la propiedad:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Título Propiedad" value="<?php echo $titulo;?>">

            <label for="precio">Precio de la propiedad:</label>
            <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio?>">

            <label for="imagen">Precio de la propiedad:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png">

            <label for="descripcion">Descripción de la propiedad:</label>
            <textarea id="descripcion" name="descripcion"><?php echo $descripcion;?></textarea>
        </fieldset>
        <fieldset>
            <legend>Información Propiedad</legend>
            <label for="habitaciones">Habitaciones:</label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="Número de habitaciones. Ej: 3" min="1" max="9" value="<?php echo $habitaciones;?>">

            <label for="wc">Baños:</label>
            <input type="number" id="wc" name="wc" placeholder="Número de baños. Ej: 3" min="1" max="9" value="<?php echo $wc;?>">

            <label for="estacionamiento">Estacionamiento:</label>
            <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Número de estacionamientos. Ej: 3" min="1" max="9" value="<?php echo $estacionamiento;?>">
        </fieldset>
        <fieldset>
            <legend>Vendedor</legend>

            <label>
                <select name="vendedor">
                    <option value="">-- Seleccione un vendedor --</option>
                    <?php while($vendedor = mysqli_fetch_assoc($resultado)):?>
                        <option
                            <?php echo $vendedorId === $vendedor['id'] ? 'selected' : '';?>
                            value="<?php echo $vendedor['id'];?>">
                            <?php echo $vendedor['nombre'] . ' ' . $vendedor['apellido'];?>
                        </option>
                    <?php endwhile;?>
                </select>
            </label>
        </fieldset>
        <input class="boton boton-verde" type="submit" value="Crear Propiedad">
    </form>
</main>

<?php incluirTemplate('footer'); ?>
