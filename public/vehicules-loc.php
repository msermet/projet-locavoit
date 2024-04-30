<?php
require_once '../base.php';
require_once BASE_PROJET . '/src/database/produit-db.php';
require_once BASE_PROJET . '/src/database/edition-db.php';

// Démarrer/créer une session
session_start();    // PREMIERE INSTRUCTION
// Récupérer la variable de session "utilisateur"
$pseudo_client = null;
if (isset($_SESSION["pseudo_client"])) {
    $pseudo_client = $_SESSION["pseudo_client"];
}

$idEdition = null;
$erreur=false;
if (isset($_GET["id"])) {
    $idEdition = filter_var($_GET["id"],FILTER_VALIDATE_INT);
    $produits = getProduitListe($idEdition);

    if ($produits==null) {
        $erreur=true;
    }
} else {
    $erreur=true;
}

if (!$erreur) {
    $libelleEdition=getLibelleEdition($idEdition);
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

    <section class=" container">
        <?php if (!$erreur): ?>
            <div class="pt-5">
                <h1 class="border-bottom border-primary border-3 mt-5 m-2 fw-semibold text-dark"><?= $libelleEdition["libelle_edition"] ?></h1>
            </div>
            <!-- cartes-->
            <section class="mt-4">
                <div class="container text-center">
                    <div class="row ">
                        <?php foreach ($produits as $produit) : ?>
                            <div class="col-xs-12 col-lg-6 col-xl-5 col-xxl-4">
                                <div class="card border-dark mb-5 text-center border-2 container bg-white shadow" style="width: 26rem;">
                                    <div class="card-body">
                                        <img height="250px" width="350px" class="rounded-2" src="<?= $produit["image_prod"] ?>" alt="">
                                        <p class="mt-3 fw-bold fs-6"><?= $produit["designation_prod"] ?></p>
                                        <p class="mt-3 fw-bold fs-6"><?= $produit["commentaire_prod"] ?></p>
                                        <p class="mt-3 fw-bold fs-6"><?= $produit["prix_prod"] ?>€ ta mere</p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        <?php else : ?>
            <div class=" text-center text-bg-danger shadow-lg rounded mt-5">
                <h1>Edition introuvable...</h1>
                <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                </svg>
            </div>
        <?php endif; ?>
    </section>
</main>

<?php require_once BASE_PROJET.'/src/_partials/footer.php' ?>

<script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>