<?php
require_once '../base.php';
require_once BASE_PROJET . '/src/database/acheter-db.php';

session_start();
if (empty($_SESSION)) {
    header("Location: ../connexion.php");
}
$pseudo_client = null;
if (isset($_SESSION["pseudo_client"])) {
    $pseudo_client = $_SESSION["pseudo_client"];
}
$id_client = null;
if (isset($_SESSION["id_client"])) {
    $id_client = $_SESSION["id_client"];
}

$commandes=getCommandesClient($id_client);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/css/bootstrap.min.flatly.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gluten:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        section {
            padding: 100px 0;
        }

    </style>
    <title>Réservation</title>
</head>
<body class="bg-light">
<!--Insertion d'un menu-->
<?php require_once BASE_PROJET.'/src/_partials/header.php' ?>

<section class="container">
    <h1 class="border-bottom border-3 border-primary pt-5">Mes commandes</h1>
    <div class="w-50 mx-auto shadow my-5 p-4 bg-white rounded-5 text-white">
        <?php if (!empty($commandes)): ?>
            <p class="text-secondary fw-bold">Commande la plus récente :</p>
            <div class="list-group">
                <?php foreach ($commandes as $commande) : ?>
                    <div class="list-group-item list-group-item-action text-black p-4">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1 fw-semibold fs-5"><?= getEditionCommande($commande["id_edition"])["libelle_edition"] ?></h5>
                            <small class="fst-italic fs-6 fw-semibold"><?= $commande["date_fr"] ?></small>
                        </div>
                        <small class="float-end"><a id="fondVert" class="btn fw-bold fs-6 text-light" role="button" href="details-commande.php?id_commande=<?= $commande["id_commande"] ?>">Détails</a></small>
                        <p class="mb-1 fs-5"><?= getDesignationCommande($commande["id_prod"])["designation_prod"] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="text-secondary fw-bold">Vous n'avez passé aucune commande...</p>
        <?php endif; ?>
    </div>
</section>
<?php require_once BASE_PROJET.'/src/_partials/footer.php' ?>

<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>