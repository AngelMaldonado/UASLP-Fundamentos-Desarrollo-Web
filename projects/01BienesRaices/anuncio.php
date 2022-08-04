<?php include 'includes/templates/header.php'; ?>

<main class="contenedor seccion contenido-centrado">
    <h1>Casa con Alberca</h1>
    <picture>
        <source srcset="build/img/destacada.webp" type="image/webp">
        <source srcset="build/img/destacada.jpg" type="image/jpeg">
        <img src="build/img/destacada.jpg" alt="Imagen de la propiedad" loading="lazy">
    </picture>

    <div class="resumen-propiedad">
        <p class="precio">$3,000,000</p>
        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                <p>3</p>
            </li>
            <li>
                <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento"
                     loading="lazy">
                <p>3</p>
            </li>
            <li>
                <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono dormitorio" loading="lazy">
                <p>4</p>
            </li>
        </ul>

        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Mus mauris vitae ultricies leo integer malesuada. Pharetra pharetra massa massa
            ultricies. Congue nisi vitae suscipit tellus. Mollis aliquam ut porttitor leo a diam sollicitudin
            tempor. Nam aliquam sem et tortor consequat id porta. Quam quisque id diam vel. Donec massa sapien
            faucibus et molestie. Sed odio morbi quis commodo odio aenean sed. Amet est placerat in egestas erat.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Amet dictum sit amet justo donec enim diam vulputate. Enim sed faucibus turpis in
            eu mi. Nibh cras pulvinar mattis nunc sed blandit libero. Cras tincidunt lobortis feugiat vivamus at
            augue eget arcu.
        </p>
    </div>
</main>

<?php include 'includes/templates/footer.php'; ?>
