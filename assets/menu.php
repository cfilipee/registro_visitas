<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css" integrity="sha512-G/T7HQJXSeNV7mKMXeJKlYNJ0jrs8RsWzYG7rVACye+qrcUhEAYKYzaa+VFy6eFzM2+/JT1Q+eqBbZFSHmJQew==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- <link rel="stylesheet" href="assets/CSS/styles.css"> -->

<!--Nav Bar-->
<nav class="navbar  navbar-expand-lg navbar-light" id="nav" style="background-color: #7430F9;">

    <a class="navbar-brand" href="listar_clientes.php">
        <img src="./assets/img/file-earmark-person.svg" width="45" />
        <span class="d-inline-block  text-light p-2" style="max-width: 200px">Visitas Gabinete</span>
    </a>

    <button class="navbar-toggler text text-warning" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon "></span>
    </button>

    <div class="collapse navbar-collapse ml-3" id="conteudoNavbarSuportado">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown mr-2">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    RELATÓRIOS
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <a class="dropdown-item" href="#">Visitas por mês</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Exportar</a>
                    <div class="dropdown-divider"></div>
                </div>
            </li>
            <li class="nav-item mr-2">
                <a class="nav-link text text-white" href="sair.php" data-bs-toggle="tooltip" data-bs-placement="botton" title="SAIR DO SISTEMA">
                    SAIR&nbsp;
                    <i class="fas fa-sign-out-alt text text-danger"></i>
                </a>
            </li>


        </ul>
    </div>

</nav>
