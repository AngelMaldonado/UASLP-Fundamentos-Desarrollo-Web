<?php
// importar la base de datos
require 'includes/config/database.php';
$bd = conectarDB();

// consultar
$query = "SELECT * FROM propiedades";
if (isset($limite)) {
    $query = $query . " LIMIT ${limite}";
}

// obtener resultados
$resultado = mysqli_query($bd, $query);
?>

<div class="contenedor-anuncios">
    <?php while ($propiedad = mysqli_fetch_assoc($resultado)): ?>
      <div class="anuncio">
        <img src="<?php echo '/imagenes/' . $propiedad['imagen']; ?>" alt="anuncio" loading="lazy">
        <div class="contenido-anuncio">
          <h3><?php echo $propiedad['titulo']; ?></h3>
          <p><?php echo $propiedad['descripcion']; ?></p>
          <p class="precio">$<?php echo $propiedad['precio']; ?></p>

          <ul class="iconos-caracteristicas">
            <li>
              <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
              <p><?php echo $propiedad['wc']; ?></p>
            </li>
            <li>
              <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento"
                   loading="lazy">
              <p><?php echo $propiedad['estacionamiento']; ?></p>
            </li>
            <li>
              <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono dormitorio"
                   loading="lazy">
              <p><?php echo $propiedad['habitaciones']; ?></p>
            </li>
          </ul>
          <a class="boton-amarillo-block" href="anuncio.php?id=<?php echo $propiedad['id']; ?>">Ver Propiedad</a>
        </div><!-- .contenido-anuncio -->
      </div><!-- .anuncio -->
    <?php endwhile; ?>
</div><!-- .contenedor-anuncios -->

<?php
// cerrar conexión
mysqli_close($bd);
?>
