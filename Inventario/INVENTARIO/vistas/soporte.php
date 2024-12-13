

<div class="container pb-6 pt-6 notification is-danger is-light is-rounded">
	<div class="center">
		<h1 class="title">Bienvenid@ a soporte, <?php echo $_SESSION['nombre']." ".$_SESSION['apellido']; ?>!</h1>
        <p>¿Deseas enviar una solicitud ante algún incoveniente o actualización?</p>
        <p>Puedes enviarnos un correo con los siguientes datos y te responderemos a la brevedad!</p>
    </div>
    <div>
        <form id="soporte-form" onsubmit="enviarCorreo(); return false;">
            <div class="field">
                <label>Nombre del solicitante</label>
                <div class="control">
                    <input class="input is-danger" type="text" id="nombre" placeholder="Escribe tu nombre aquí" required>
                </div>
            </div>

            <div class="field">
                <label>Descripción detallada del problema o mejora</label>
                <div class="control">
                    <textarea class="textarea is-danger" id="descripcion" placeholder="Describe el problema o mejora aquí" required></textarea>
                </div>
            </div>

            <div class="field">
                <label>Prioridad estimada</label>
                <div class="control">
                    <div class="select is-danger">
                        <select id="prioridad" required>
                            <option value="Baja">Baja</option>
                            <option value="Media">Media</option>
                            <option value="Alta">Alta</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="field">
                <label>Fecha aproximada del problema</label>
                <div class="control">
                    <input class="input is-danger" type="date" id="fecha" required>
                </div>
            </div>

            <div class="center">
                <button type="submit" class="button is-large is-danger animado">
                    ¡Enviar solicitud!
                </button>
            </div>
        </form>

        <script>
        function enviarCorreo() {
            const nombre = document.getElementById('nombre').value;
            const descripcion = document.getElementById('descripcion').value;
            const prioridad = document.getElementById('prioridad').value;
            const fecha = document.getElementById('fecha').value;

            // Construcción del correo
            const subject = encodeURIComponent("Solicitud de soporte: Problema o mejora");
            const body = encodeURIComponent(
                `Nombre del solicitante: ${nombre}\n\n` +
                `Descripción detallada del problema o mejora:\n${descripcion}\n\n` +
                `Prioridad estimada: ${prioridad}\n\n` +
                `Fecha aproximada del problema: ${fecha}`
            );

            // Redirige al cliente de correo
            window.location.href = `mailto:soporteconfeccionesmarybet@gmail.cl?subject=${subject}&body=${body}`;
        }
        </script>

    </div>
</div>

