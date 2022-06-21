<div class="tarjetaUsuario">
    <img src="https://www.gravatar.com/avatar/200" alt="imagen-usuario">
    <h3>Nombre: </h3>
    <h3>Correo: </h3>
    <h3>Tel: </h3>
    <h3>Escuela: </h3>
    <h3>Estudios: </h3>
    <h3>Generación: </h3>
    <form action="/controllers/controladorUsuarios.php">
        <input type="hidden" name="_method" value="POST">
        <select class="cajaDesplegable -grande -normal" name="foto-agradecimiento" id="">
            <option value="cliente">Cliente</option>
            <option value="representante">Representante</option>
            <option value="administrador">Administrador</option>
        </select>
        <div>
            <a class="submit actualiza boton -positivo">
                <input type="hidden" value="Agregar">
                <h6>Guardar</h6>
            </a>
            <br>
            <a class="submit elimina boton -negativo">
                <input type="hidden" name="_method" value="DELETE">
                <h6>Eliminar</h6>
            </a>
        </div>
    </form>
</div>