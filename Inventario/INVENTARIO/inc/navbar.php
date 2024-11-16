<nav class="navbar is-danger" role="navigation" aria-label="main navigation">

    <div class="navbar-brand">
        <a class="navbar-item" href="index.php?vista=home">
        <img src="./img/logo.png" width="75" height="34">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Usuarios</a>
                <div class="navbar-dropdown">
                    <div class="navbar-item">
                        Opciones de Usuarios
                    </div>
                    <hr class="navbar-divider">
                    <a href="index.php?vista=user_new" class="navbar-item">Nuevo</a>
                    <a href="index.php?vista=user_list" class="navbar-item">Lista</a>
                    <a href="index.php?vista=user_search" class="navbar-item">Buscar</a>

                </div>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Categorías</a>

                <div class="navbar-dropdown">
                    <div class="navbar-item">
                        Opciones de categorías
                    </div>
                    <hr class="navbar-divider">
                    <a href="index.php?vista=category_new" class="navbar-item">Nueva</a>
                    <a href="index.php?vista=category_list" class="navbar-item">Lista</a>
                    <a href="index.php?vista=category_search" class="navbar-item">Buscar</a>
                </div>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Productos</a>

                <div class="navbar-dropdown">
                    <div class="navbar-item">
                        Opciones de productos
                    </div>
                    <hr class="navbar-divider">
                    <a href="index.php?vista=product_new" class="navbar-item">Nuevo</a>
                    <a href="index.php?vista=product_list" class="navbar-item">Lista</a>
                    <a href="index.php?vista=product_category" class="navbar-item">Por categoría</a>
                    <a href="index.php?vista=product_search" class="navbar-item">Buscar</a>
                </div>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Reportes</a>

                <div class="navbar-dropdown">
                <div class="navbar-item">
                        Opciones de reportes
                    </div>
                    <hr class="navbar-divider">
                <a href="index.php?vista=reportes_new" class="navbar-item">Generar reporte</a>
                </div>
            </div>

        </div>

        <div class="navbar-end">

            <div class="navbar-item">
                <div class="buttons">
                    <a class="button is-danger is-light">
                        Acerca De
                    </a>
                    <a class="button is-danger is-light">
                        Ayuda
                    </a>
                    <a href="index.php?vista=user_update&user_id_up=<?php echo $_SESSION['id']; ?>" class="button is-danger is-light">
                        Mi cuenta
                    </a>

                    <a href="index.php?vista=logout" class="button is-danger is-light">
                        Salir
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>