<?php
require_once '../base.php';
require_once BASE_PROJET . '/src/database/edition-db.php';
$editions = getEditionListe();

// Démarrer/créer une session
session_start();    // PREMIERE INSTRUCTION
// Récupérer la variable de session "utilisateur"
$pseudo_client = null;
if (isset($_SESSION["pseudo_client"])) {
    $pseudo_client = $_SESSION["pseudo_client"];
}


?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.flatly.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        section {
            padding: 60px 0;
        }

    </style>
    <title>LocaVoit</title>
    <link rel="shortcut icon" href="./assets/images/logo-locavoit.png" />
</head>
<body id="style-15">
<div class="scrollbar" id="style-15">
    <div class="force-overflow"></div>
</div>
<main>
    <!--Insertion d'un menu-->
    <?php require_once BASE_PROJET.'/src/_partials/header.php' ?>
    <section class="bg-light"></section>
    <!--    Présentation-->
    <section id="presentation" class="bg-light">
        <div class="container">
            <div class="row text-center text-black">
                <div id="cadre-pre" class="col-md-7 col-xl-7 text-md-start pt-5 shadow rounded-5 p-5">
                    <?php if (isset($_SESSION['pseudo_client'])) : ?>
                        <p class="fw-bold pt-5 me-5 fs-5 text-end">Heureux de vous revoir <span class="text-primary"><?= $pseudo_client ?></span> !</p>
                    <?php endif; ?>
                    <h1>LocaVoit - Location de véhicules</h1>
                    <h3 class="pt-3">Roulez avec aisance, choisissez votre excellence.</h3>
                    <p class="pt-3 fs-6">LocaVoit propose des services de location de voiture en France avec trois gammes de véhicules : Classique, Confort et Sportive. Notre priorité est de vous offrir des options de qualité, adaptées à tous les besoins, avec un service client attentif. Réservez dès maintenant pour un voyage sans souci avec LocaVoit.
                    </p>
                    <div class="pt-3 text-center">
                        <a href="<?php BASE_PROJET?>/index.php#pied-de-page"><button class="btn btn-success fs-6 shadow border-2 border-dark text-black" type="button">Une question à nous poser ?</button></a>
                    </div>
                </div>
                <div class="col-md-5">
                    <img id="img-presentation" class="d-md-block d-none mx-auto pt-5" src="./assets/images/logo-locavoit.png" alt="Logo Spotify" />
                </div>
            </div>
        </div>
    </section>

    <style>
        #cadre-pre {
            background-color: #aab7b8;
        }
    </style>
    <div class="border-top border-4"></div>
    <!--    activités-->
    <section id="activites">
        <div class="container">
            <div class="text-center text-black">
                <h1>Nos activités</h1>
                <p class="text-center fs-5 fw-lighter">Vous permettant de louer un véhicule chez nous en toute sérénité !</p>
            </div>
            <div class="row pt-5 align-items-center">
                <div class="col-lg-6 col-xl-6 text-center">
                    <img class="d-lg-block my-auto mx-auto rounded-5 img-fluid mb-4 shadow" src="./assets/images/206+.png" alt="206 +" />
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item shadow">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Gérer l’entretien et le rachat de véhicules
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Notre entreprise se spécialise dans la location de voitures et met l'accent sur la gestion efficace de l'entretien et du rachat de véhicules. Nous assurons un entretien rigoureux de notre flotte pour garantir la sécurité et la satisfaction de nos clients, tout en recherchant activement les meilleures opportunités pour renouveler notre parc automobile avec des modèles modernes et fiables.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Gérer le stock de véhicule
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    En tant qu'entreprise de location de voitures, notre deuxième activité consiste à gérer efficacement notre stock de véhicules. Nous veillons à maintenir un inventaire bien organisé et diversifié, en nous assurant d'avoir toujours une sélection de véhicules disponibles pour répondre aux besoins de nos clients. Notre priorité est de garantir la disponibilité et la variété des voitures, afin d'offrir à nos clients un choix optimal lors de la réservation de leur véhicule idéal.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
                                    Gérer la satisfaction client
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Une autre facette essentielle de notre entreprise est la gestion proactive de la satisfaction client. Nous mettons tout en œuvre pour offrir une expérience de location de voitures exceptionnelle, en restant à l'écoute des besoins de nos clients, en traitant rapidement leurs demandes et en garantissant leur satisfaction à chaque étape de leur parcours avec nous. Notre engagement envers la qualité du service client se reflète dans chaque interaction, visant à dépasser les attentes et à fidéliser notre clientèle.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="border-top border-3"></div>
    <!--    Tarifs-->
    <section id="tarifs" class="bg-light">
        <div class="container">
            <div class="text-center text-black">
                <h1>Tarifs de location</h1>
                <p class="text-center fs-5 fw-lighter pb-4">Choisir le plan adapté à vos besoins</p>
            </div>
            <!-- cartes-->
            <div class="container text-center pt-5">
                <div class="row align-items-center">
                    <?php foreach ($editions as $edition) : ?>
                        <?php if($edition["id_edition"]==2): ?>
                            <div class="col-xs-12 col-lg-6 col-xl-5 col-xxl-4 mb-5">
                                <div class="card border-danger text-center bg-white border-2 shadow" style="width: 26rem;">
                                    <div class="card-header text-center fw-bold text-danger">
                                        Laissez vous tenter <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><style>@keyframes pulsate{0%,to{transform:scale(1)}50%{transform:scale(.9)}}</style><g style="animation:pulsate .5s ease-in-out infinite both;transform-origin:center center" stroke-width="1.5"><path stroke="#0A0A30" d="M11.515 6.269l.134.132a.5.5 0 00.702 0l.133-.132A4.44 4.44 0 0115.599 5c.578 0 1.15.112 1.684.33a4.41 4.41 0 011.429.939c.408.402.733.88.954 1.406a4.274 4.274 0 010 3.316 4.331 4.331 0 01-.954 1.405l-6.36 6.259a.5.5 0 01-.702 0l-6.36-6.259A4.298 4.298 0 014 9.333c0-1.15.464-2.252 1.29-3.064A4.439 4.439 0 018.401 5c1.168 0 2.288.456 3.114 1.269z"/><path stroke="#265BFF" stroke-linecap="round" stroke-linejoin="round" d="M15.5 7.5c.802.304 1.862 1.43 2 2"/></g></svg>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="mt-3 fw-bold"><?= $edition["libelle_edition"] ?></h3>
                                        <p id="vert" class="mt-3 fw-bold fs-2"><?= $edition["prix_mini_edition"] ?>€ - <?= $edition["prix_maxi_edition"] ?>€ / jour</p>
                                        <p class="mt-3 fw-semi fs-6"><?= $edition["description_edition"] ?></p>
                                        <a class="btn btn-primary fw-semibold mt-3" href="vehicules-loc.php?id=<?= $edition["id_edition"] ?>" role="button">Voir les véhicules disponibles</a>
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="col-xs-12 col-lg-6 col-xl-5 col-xxl-4 mb-5">
                                <div class="card border-dark text-center border-2 bg-white shadow" style="width: 26rem;">
                                    <div class="card-body">
                                        <h3 class="mt-3 fw-bold"><?= $edition["libelle_edition"] ?></h3>
                                        <p id="vert" class="mt-3 fw-bold fs-2"><?= $edition["prix_mini_edition"] ?>€ - <?= $edition["prix_maxi_edition"] ?>€ / jour</p>
                                        <p class="mt-3 fw-semi fs-6"><?= $edition["description_edition"] ?></p>
                                        <a class="btn btn-primary fw-semibold mt-3" href="vehicules-loc.php?id=<?= $edition["id_edition"] ?>" role="button">Voir les véhicules disponibles</a>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <style>
        #vert {
            color: #0f7864;
        }
    </style>
    <div class="border-top border-3"></div>
    <!--    Organigramme-->
    <section id="organigramme">
        <div class="container text-center text-black">
            <h1 class="text-center">Organigramme de notre société !</h1>
            <p class="text-center fs-5 fw-lighter">Voici tous les membres prêts à vous accueillir</p>
            <img src="./assets/images/organigramme.png" class="img-fluid" alt="">
        </div>
    </section>
    <div class="border-top border-3"></div>
    <!--    Fiches de poste-->
    <section id="fichesdeposte" class="bg-light">
        <div class="container text-center text-black">
            <h1 class="text-center">Fiches de poste de nos membres</h1>
            <p class="text-center fs-5 fw-lighter">N'hésitez pas à regarder !</p>
            <div id="carouselExampleCaptions" class="carousel carousel-dark slide m-5">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="100">
                        <img src="./assets/images/mariodasilva.jpg" class="w-75" alt="...">
                        <div class="carousel-caption">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success fw-bold text-black mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                                Fiche de poste
                            </button>


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel1">Mario Da Silva</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img class="w-100" src="./assets/images/fichedeposte-mariodasilva.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="100">
                        <img src="./assets/images/hugorey.jpg" class="w-75" alt="...">
                        <div class="carousel-caption">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success fw-bold text-black mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal5">
                                Fiche de poste
                            </button>


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel2">Hugo Rey</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img class="w-100" src="./assets/images/fichedeposte-hugorey.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/images/sophie-fon.jpg" class="w-75" alt="...">
                        <div class="carousel-caption">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success fw-bold text-black mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal6">
                                Fiche de poste
                            </button>


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel3">Sophie Fon</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img class="w-100" src="./assets/images/fichedeposte-sophiefon.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/images/fabricedesjean.jpg" class="w-75" alt="...">
                        <div class="carousel-caption">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success fw-bold text-black mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal7">
                                Fiche de poste
                            </button>


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel4">Fabrice Desjean</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img class="w-100" src="./assets/images/fichedeposte-fabricedesjean.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/images/jeromecorneille.jpg" class="w-75" alt="...">
                        <div class="carousel-caption">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success fw-bold text-black mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal8">
                                Fiche de poste
                            </button>


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel5">Jérôme Corneille</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img class="w-100" src="./assets/images/fichedeposte-jeromecorneille.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev text-dark" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <div class="border-top border-3"></div>
    <!--    Contact-->
</main>
<?php require_once BASE_PROJET.'/src/_partials/footer.php' ?>

<script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!-- uiverse.io = site cool -->