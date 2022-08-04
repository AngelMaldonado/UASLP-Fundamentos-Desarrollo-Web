<?php
require '../../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Crear</h1>

    <a class="boton boton-verde" href="/admin">Volver</a>

    <form class="formulario">
        <fieldset>
            <legend>Información General</legend>
            <label for="titulo">Título de la propiedad:</label>
            <input type="text" id="titulo" placeholder="Título Propiedad">

            <label for="precio">Precio de la propiedad:</label>
            <input type="number" id="precio" placeholder="Precio Propiedad">

            <label for="imagen">Precio de la propiedad:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png">">

            <label for="descripcion">Descripción de la propiedad:</label>
            <textarea id="descripcion"></textarea>
        </fieldset>
        <fieldset>
            <legend>Información Propiedad</legend>
            <label for="habitaciones">Habitaciones:</label>
            <input type="number" id="habitaciones" placeholder="Número de habitaciones. Ej: 3" min="1" max="9">

            <label for="wc">Baños:</label>
            <input type="number" id="wc" placeholder="Número de baños. Ej: 3" min="1" max="9">

            <label for="estacionamiento">Estacionamiento:</label>
            <input type="number" id="estacionamiento" placeholder="Número de estacionamientos. Ej: 3" min="1" max="9">
        </fieldset>
        <fieldset>
            <legend>Vendedor</legend>

            <label>
                <select>
                    <option value="1">Angel</option>
                    <option value="2">Karen</option>
                </select>
            </label>
        </fieldset>
        <input class="boton boton-verde" type="submit" value="Crear Propiedad">
    </form>
</main>

<?php incluirTemplate('footer'); ?>
