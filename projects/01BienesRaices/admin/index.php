<?php
// Importar la conexion
require '../includes/config/database.php';
$db = conectarDB();

// Escribir query
$query = "SELECT * FROM propiedades";

// Consultar la BD
$resultadoConsulta = mysqli_query($db, $query);

// Muestra mensaje condicional
$resultado = $_GET['resultado'] ?? null;
require '../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Administrador de Bienes Raices</h1>
    <?php if (intval($resultado) === 1): ?>
        <p class="alerta exito">
            Anuncio creado correctamente
        </p>
    <?php endif; ?>

    <a class="boton boton-verde" href="/admin/propiedades/crear.php">Nueva Propiedad</a>
    <table class="propiedades">
        <thead>
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Imagen</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody> <!-- Mostrar los resultados -->
        <?php while ($propiedad = mysqli_fetch_assoc($resultadoConsulta)): ?>
            <tr>
                <td><?php echo $propiedad['id']; ?></td>
                <td><?php echo $propiedad['titulo']; ?></td>
                <td><img class="imagen-tabla" src="/imagenes/<?php echo $propiedad['imagen']; ?>"></td>
                <td>$ <?php echo $propiedad['precio']; ?></td>
                <td>
                    <a class="boton-rojo-block" href="#">Eliminar</a>
                    <a class="boton-amarillo-block" href="#">Actualizar</a>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</main>

<?php
// Cerrar la conexión
mysqli_close($db);

incluirTemplate('footer');
?>
