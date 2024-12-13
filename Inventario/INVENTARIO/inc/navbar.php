<nav class="navbar is-danger" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="index.php?vista=home">
            <img src="http://localhost/confecciones-marybet/inventario/INVENTARIO/img/logo.png" width="35" height="100">
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">

            <!-- Usuarios (Solo Administrador) -->
            <?php if ($_SESSION['usuario_rol'] == 'Administrador'): ?>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">Usuarios</a>
                    <div class="navbar-dropdown">
                        <div class="navbar-item">Opciones de Usuarios</div>
                        <hr class="navbar-divider">
                        <a href="index.php?vista=user_new" class="navbar-item">Nuevo</a>
                        <a href="index.php?vista=user_list" class="navbar-item">Lista</a>
                        <a href="index.php?vista=user_search" class="navbar-item">Buscar</a>
                    </div>
                </div>
                <?php else: ?>
                <script>
                    function mostrarMensaje() {
                        alert("Sólo el administrador puede modificar esta función.");
                    }
                </script>
            <?php endif; ?>

            <!-- Categorías (Disponible para ambos roles) -->
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Categorías</a>
                <div class="navbar-dropdown">
                    <div class="navbar-item">Opciones de Categorías</div>
                    <hr class="navbar-divider">
                    <a href="index.php?vista=category_new" class="navbar-item">Nueva</a>
                    <a href="index.php?vista=category_list" class="navbar-item">Lista</a>
                    <a href="index.php?vista=category_search" class="navbar-item">Buscar</a>
                </div>
            </div>

            <!-- Productos (Disponible para ambos roles) -->
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Productos</a>
                <div class="navbar-dropdown">
                    <div class="navbar-item">Opciones de Productos</div>
                    <hr class="navbar-divider">
                    <a href="index.php?vista=product_new" class="navbar-item">Nuevo</a>
                    <a href="index.php?vista=product_list" class="navbar-item">Lista</a>
                    <a href="index.php?vista=product_category" class="navbar-item">Por categoría</a>
                    <a href="index.php?vista=product_search" class="navbar-item">Buscar</a>
                </div>
            </div>

            <!-- Reportes (Disponible para ambos roles) -->
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Reportes</a>
                <div class="navbar-dropdown">
                    <div class="navbar-item">Opciones de Reportes</div>
                    <hr class="navbar-divider">
                    <a href="index.php?vista=reportes_new" class="navbar-item">Generar Reporte</a>
                </div>
            </div>

            <!-- Notificaciones (Solo Administrador) -->
            <?php if ($_SESSION['usuario_rol'] == 'Administrador'): ?>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">Notificaciones</a>
                    <div class="navbar-dropdown">
                        <div class="navbar-item">Opciones de Notificaciones</div>
                        <hr class="navbar-divider">
                        <a href="index.php?vista=config_notificaciones" class="navbar-item">Modificar Notificaciones</a>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a href="index.php?vista=acerca_de" class="button is-danger is-light">Acerca De</a>
                    <a href="index.php?vista=ayuda" class="button is-danger is-light">Ayuda</a>
                    <a href="index.php?vista=soporte" class="button is-danger is-light">¿Necesitas soporte?</a>
                    <!-- Mi cuenta (Solo Administrador) -->
                    <?php if ($_SESSION['usuario_rol'] == 'Administrador'): ?>
                        <a href="index.php?vista=user_update&user_id_up=<?php echo $_SESSION['id']; ?>" class="button is-danger is-light">Mi cuenta</a>
                    <?php endif; ?>
                    <a href="index.php?vista=logout" class="button is-danger is-light">Salir</a>
                </div>
            </div>
        </div>
    </div>
</nav>
