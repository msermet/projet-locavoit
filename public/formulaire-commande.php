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
$idEdition = null;
$erreur=false;
if (!empty($_GET["id_edition"])) {
    $idEdition = filter_var($_GET["id_edition"],FILTER_VALIDATE_INT);
} else {
    $erreur=true;
}

$idProd = null;
if (!empty($_GET["id_prod"])) {
    $idProd = filter_var($_GET["id_prod"],FILTER_VALIDATE_INT);
} else {
    $erreur=true;
}

// Déterminer si le formulaire a été soumis
// Utilisation d'une variable superglobale $_SERVER
// $_SERVER : tableau associatif contenant des informations sur la requête HTTP
$erreurs = [];
$date_debut = "";
$date_fin = "";
$prenom_client = "";
$nom_client = "";
$email_client = "";
$adresse_client = "";
$ville_client = "";
$cp_client = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Le formulaire a été soumis !
    // Traiter les données du formulaire
    // Récupérer les valeurs saisies par l'utilisateur
    // Superglobale $_POST : tableau associatif
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];
    $prenom_client = $_POST['prenom_client'];
    $nom_client = $_POST['nom_client'];
    $email_client = $_POST['email_client'];
    $adresse_client = $_POST['adresse_client'];
    $ville_client = $_POST['ville_client'];
    $cp_client = $_POST['cp_client'];

    //Validation des données
    if (empty($date_fin)) {
        $erreurs['date_fin'] = "La date de retour est obligatoire";
    }
    if (date($date_fin)<date($date_debut)) {
        $erreurs['date'] = "La période choisie n'est pas correcte";
    }
    if (empty($prenom_client)) {
        $erreurs['prenom_client'] = "Le prénom est obligatoire";
    }
    if (empty($nom_client)) {
        $erreurs['nom_client'] = "Le nom est obligatoire";
    }
    if (empty($email_client)) {
        $erreurs['email_client'] = "L'email est obligatoire";
    } elseif (!filter_var($email_client, FILTER_VALIDATE_EMAIL)) {
        $erreurs['email_client'] = "L'email n'est pas valide";
    }
    if (empty($adresse_client)) {
        $erreurs['adresse_client'] = "L'adresse est obligatoire";
    }
    if (empty($cp_client)) {
        $erreurs['cp_client'] = "Le code postal est obligatoire";
    } elseif (!intval($cp_client)) {
        $erreurs['cp_client'] = "Le code postal doit être au format numérique";
    }
    if (empty($ville_client)) {
        $erreurs['ville_client'] = "La ville est obligatoire";
    }

    // Traiter les données
    if (empty($erreurs)) {
        // Traitement des données (insertion dans une base de données)
        // Rediriger l'utilisateur vers une autre page du site

        // Traitement des données (insertion dans une base de données)
        $date_debut=date("Y-m-d");
        postCommande($idProd,$id_client,$idEdition,$prenom_client,$nom_client,$email_client,$adresse_client,$ville_client,$cp_client,$date_debut,$date_fin);

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
                    <label for="nom_client" class="form-label fw-semibold text-black">Nom*</label>
                    <input type="text"
                           class="form-control <?= (isset($erreurs['nom_client'])) ? "border border-2 border-danger" : "" ?>"
                           id="nom_client" name="nom_client" value="<?= $nom_client ?>" placeholder="Saisir votre nom"
                           aria-describedby="emailHelp">
                    <?php if (isset($erreurs['nom_client'])) : ?>
                        <p class="form-text text-danger"><?= $erreurs['nom_client'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="prenom_client" class="form-label fw-semibold text-black">Prénom*</label>
                    <input type="text"
                           class="form-control <?= (isset($erreurs['prenom_client'])) ? "border border-2 border-danger" : "" ?>"
                           id="prenom_client" name="prenom_client" value="<?= $prenom_client ?>" placeholder="Saisir votre prénom"
                           aria-describedby="emailHelp">
                    <?php if (isset($erreurs['prenom_client'])) : ?>
                        <p class="form-text text-danger"><?= $erreurs['prenom_client'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="email_client" class="form-label fw-semibold text-black">Email de facturation*</label>
                    <input type="email"
                           class="form-control <?= (isset($erreurs['email_client'])) ? "border border-2 border-danger" : "" ?>"
                           id="email_client" name="email_client" value="<?= $email_client?>" placeholder="Saisir un email valide"
                           aria-describedby="emailHelp">
                    <?php if (isset($erreurs['email_client'])) : ?>
                        <p class="form-text text-danger"><?= $erreurs['email_client'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="adresse_client" class="form-label fw-semibold text-black">Adresse de facturation*</label>
                    <input type="text"
                           class="form-control <?= (isset($erreurs['adresse_client'])) ? "border border-2 border-danger" : "" ?>"
                           id="adresse_client" name="adresse_client" value="<?= $adresse_client?>" placeholder="Saisir votre adresse"
                           aria-describedby="emailHelp">
                    <?php if (isset($erreurs['adresse_client'])) : ?>
                        <p class="form-text text-danger"><?= $erreurs['adresse_client'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="ville_client" class="form-label fw-semibold text-black">Ville de facturation*</label>
                    <input type="text"
                           class="form-control <?= (isset($erreurs['ville_client'])) ? "border border-2 border-danger" : "" ?>"
                           id="ville_client" name="ville_client" value="<?= $ville_client?>" placeholder="Saisir votre ville"
                           aria-describedby="emailHelp">
                    <?php if (isset($erreurs['ville_client'])) : ?>
                        <p class="form-text text-danger"><?= $erreurs['ville_client'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="cp_client" class="form-label fw-semibold text-black">Code postal de facturation*</label>
                    <input type="number"
                           class="form-control <?= (isset($erreurs['cp_client'])) ? "border border-2 border-danger" : "" ?>"
                           id="cp_client" name="cp_client" value="<?= $cp_client?>" placeholder="Saisir votre code postal"
                           aria-describedby="emailHelp">
                    <?php if (isset($erreurs['cp_client'])) : ?>
                        <p class="form-text text-danger"><?= $erreurs['cp_client'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="date_fin" class="form-label fw-bold text-black">Date de retour*</label>
                    <input type="date"
                           class="form-control <?= (isset($erreurs['date_fin'])) ? "border border-2 border-danger" : "" ?>
                           form-control <?= (isset($erreurs['date'])) ? "border border-2 border-danger" : "" ?>"
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