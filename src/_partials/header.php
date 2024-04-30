<!--    Barre de navigation-->
<header>
    <nav class="navbar navbar-expand-lg bg-primary shadow border-top border-bottom border-success border-2 fixed-top" style="width: 100%">
        <div class="container-fluid">
            <a class="navbar-brand fs-3 fw-bold text-light" href="<?php BASE_PROJET?>/index.php"><img height="50" src="<?php BASE_PROJET?>/assets/images/logo-locavoit.png" alt="Logo Spotify"/><span class="ms-2">LocaVoit</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-end flex-grow-1">
                    <li class="nav-item">
                        <a class="nav-link active fs-5 me-3 text-light fw-semibold" aria-current="page" href="<?php BASE_PROJET?>/index.php#activites">Nos activités</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-5 me-3 text-light fw-semibold" aria-current="page" href="<?php BASE_PROJET?>/index.php#tarifs">Les tarifs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-5 me-3 text-light fw-semibold" aria-current="page" href="<?php BASE_PROJET?>/index.php#organigramme">Organigramme de notre société</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-5 me-3 text-light fw-semibold" aria-current="page" href="<?php BASE_PROJET?>/index.php#fichesdeposte">Nos membres</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-5 me-3 text-light fw-semibold" aria-current="page" href="<?php BASE_PROJET?>/index.php#pied-de-page">Nos informations</a>
                    </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0 justify-content-end flex-grow-1 pe-3">
                    <?php if (empty($_SESSION)) : ?>
                        <li class="nav-item">
                            <a class="btn btn-info fw-bold border-2 me-3" role="button" href="<?php BASE_PROJET?>/connexion.php">Se connecter</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-info fw-bold border-2" role="button" href="<?php BASE_PROJET?>/creation-de-compte.php">Créer un compte</a>
                        </li>
                    <?php else : ?>
                        <?php if (isset($_SESSION['pseudo_client'])) : ?>
                            <ul class="nav nav-pills">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle fw-semibold bg-dark text-light" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="bi bi-person-circle me-2"></i><?= $pseudo_client ?></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li class="nav-item">
                                            <a class="dropdown-item fw-bold text-center text-danger" role="button" href="<?php BASE_PROJET?>/deconnexion.php"><i class="bi bi-box-arrow-right me-2"></i>Se déconnecter</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        <?php endif; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>

