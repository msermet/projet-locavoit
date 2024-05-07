<?php
require_once '../base.php';

session_start();
if (empty($_SESSION)) {
    header("Location: ../index.php");
}
$pseudo_client = null;
if (isset($_SESSION["pseudo_client"])) {
    $pseudo_client = $_SESSION["pseudo_client"];
}

$idEdition = null;
$erreur=false;
if (!empty($_GET["id_edition"])) {
    $idEdition = filter_var($_GET["id_edition"],FILTER_VALIDATE_INT);
} else {
    $erreur=true;
}

// Déterminer si le formulaire a été soumis
// Utilisation d'une variable superglobale $_SERVER
// $_SERVER : tableau associatif contenant des informations sur la requête HTTP
$erreurs = [];
$date_debut = "";
$date_fin = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Le formulaire a été soumis !
    // Traiter les données du formulaire
    // Récupérer les valeurs saisies par l'utilisateur
    // Superglobale $_POST : tableau associatif
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];

    //Validation des données
    if (empty($date_debut)) {
        $erreurs['date_debut'] = "La date de départ est obligatoire";
    }
    if (empty($date_fin)) {
        $erreurs['date_fin'] = "La date de retour est obligatoire";
    }
    if (date($date_fin)<date($date_debut)) {
        $erreurs['date'] = "La période choisie n'est pas correcte";
    }

    // Traiter les données
    if (empty($erreurs)) {
        // Traitement des données (insertion dans une base de données)
        // Rediriger l'utilisateur vers une autre page du site
        header("Location: ../index.php");
        exit();
    }
}

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
    <?php if (!$erreur): ?>
        <h1 class="border-bottom border-3 border-primary pt-5">Réservation du véhicule</h1>
        <div class="w-50 mx-auto shadow my-5 p-4 bg-white rounded-5 text-white">
            <form action="" method="post" novalidate>
                <div class="mb-3">
                    <label for="date_debut" class="form-label fw-bold text-black">Date de départ*</label>
                    <input type="date"
                           class="form-control <?= (isset($erreurs['date_debut'])) ? "border border-3 border-danger" : "" ?>"
                           id="date_debut" name="date_debut" value="<?= $date_debut ?>" placeholder="Saisir une date de départ"
                           aria-describedby="emailHelp">
                    <?php if (isset($erreurs['date_debut'])) : ?>
                        <p class="form-text text-danger fw-bold"><?= $erreurs['date_debut'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="date_fin" class="form-label fw-bold text-black">Date de retour*</label>
                    <input type="date"
                           class="form-control <?= (isset($erreurs['date_fin'])) ? "border border-3 border-danger" : "" ?>"
                           id="date_fin" name="date_fin" value="<?= $date_fin ?>" placeholder="Saisir une date de retour"
                           aria-describedby="emailHelp">
                    <?php if (isset($erreurs['date_fin'])) : ?>
                        <p class="form-text text-danger fw-bold"><?= $erreurs['date_fin'] ?></p>
                    <?php endif; ?>
                </div>
                <?php if (isset($erreurs['date'])) : ?>
                    <p class="form-text text-danger fw-bold"><?= $erreurs['date'] ?></p>
                <?php endif; ?>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary fw-bold">Valider</button>
                </div>
                <p class="pt-4 fw-semibold text-success">* : Le champ est obligatoire.</p>
            </form>
        </div>
    <?php else : ?>
        <div class=" text-center text-bg-danger shadow-lg rounded mt-5">
            <h1>Edition introuvable...</h1>
            <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
            </svg>
        </div>
    <?php endif; ?>
</section>
<?php require_once BASE_PROJET.'/src/_partials/footer.php' ?>

<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>