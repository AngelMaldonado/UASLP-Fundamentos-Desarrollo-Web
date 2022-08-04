<?php include 'includes/templates/header.php'; ?>

<main class="contenedor seccion">
    <h1>Contacto</h1>

    <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp">
        <source srcset="build/img/destacada3.jpg" type="image/jpeg">
        <img src="build/img/destacada3.jpg" alt="Imagen de contacto" loading="lazy">
    </picture>

    <h2>Llene el formulario de contacto</h2>
    <form class="formulario">
        <fieldset>
            <legend>Información personal</legend>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" placeholder="Tu nombre">
            <label for="email">Nombre</label>
            <input type="email" id="email" placeholder="Tu email">
            <label for="telefono">Nombre</label>
            <input type="tel" id="telefono" placeholder="Tu telefono">
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje"></textarea>
        </fieldset>
        <fieldset>
            <legend>Información sobre la propiedad</legend>
            <label for="opciones">Vende o compra</label>
            <select id="opciones">
                <option value="" disabled selected>-- Seleccione --</option>
                <option value="Compra">Compra</option>
                <option value="Vende">Vende</option>
            </select>
            <label for="presupuesto">Precio o presupuesto</label>
            <input type="number" placeholder="Tu precio o presupuesto" id="presupuesto">
        </fieldset>
        <fieldset>
            <legend>Información sobre la propiedad</legend>
            <p>¿Cómo desea ser contactado?</p>
            <div class="forma-contacto">
                <label for="contactar-telefono">Teléfono</label>
                <input type="radio" value="telefono" name="contacto" id="contactar-telefono">
                <label for="contactar-email">E-mail</label>
                <input type="radio" value="email" name="contacto" id="contactar-email">
            </div>
            <p>Si eligió teléfono, elija la fecha y hora para ser contactado</p>
            <label for="fecha">Fombre</label>
            <input type="date" id="fecha">
            <label for="hora">Hora</label>
            <input type="time" id="hora" min="09:00" max="18:00">
        </fieldset>

        <input class="boton-verde" type="submit" value="Enviar">
    </form>
</main>

<?php include 'includes/templates/footer.php'; ?>
