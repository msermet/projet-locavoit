<?php
require_once '../base.php';
require_once BASE_PROJET.'/src/database/client-db.php';

session_start();
if (!empty($_SESSION)) {
    header("Location: ../index.php");
}
?>

<?php
// Déterminer si le formulaire a été soumis
// Utilisation d'une variable superglobale $_SERVER
// $_SERVER : tableau associatif contenant des informations sur la requête HTTP
$erreurs = [];
$pseudo_client = "";
$prenom_client = "";
$nom_client = "";
$email_client = "";
$mdp = "";
$mdp_confirmation = "";
$adresse_client = "";
$ville_client = "";
$cp_client = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Le formulaire a été soumis !
    // Traiter les données du formulaire
    // Récupérer les valeurs saisies par l'utilisateur
    // Superglobale $_POST : tableau associatif
    $pseudo_client = $_POST['pseudo_client'];
    $prenom_client = $_POST['prenom_client'];
    $nom_client = $_POST['nom_client'];
    $email_client = $_POST['email_client'];
    $mdp = $_POST['mdp'];
    $mdp_confirmation = $_POST['mdp_confirmation'];
    $adresse_client = $_POST['adresse_client'];
    $ville_client = $_POST['ville_client'];
    $cp_client = $_POST['cp_client'];


    //Validation des données
    if (empty($pseudo_client)) {
        $erreurs['pseudo_client'] = "Le pseudo est obligatoire";
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
    if (empty($mdp)) {
        $erreurs['mdp'] = "Le mot de passe est obligatoire";
    }
    if (empty($mdp_confirmation)) {
        $erreurs['mdp_confirmation'] = "La confirmation du mot de passe est obligatoire";
    }
    if ($mdp_confirmation!=$mdp) {
        $erreurs['mdp_egaux'] = "Les mots de passe saisis ne sont pas identiques";
    } elseif (14<strlen($mdp) || 8>strlen($mdp)) {
        $erreurs['mdp_longueur'] = "Le mot de passe doit être compris entre 8 et 14 caractères.";
    } elseif (!preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', $mdp)) {
        $erreurs['mdp'] = "Votre mot de passe doit contenir un chiffre, une minuscule, une majuscule";
    }
    if (empty($adresse_client)) {
        $erreurs['adresse_client'] = "L'adresse est obligatoire";
    }
    if (empty($ville_client)) {
        $erreurs['ville_client'] = "La ville est obligatoire";
    }
    if (empty($cp_client)) {
        $erreurs['cp_client'] = "Le code postal est obligatoire";
    } elseif (!intval($cp_client)) {
        $erreurs['cp_client'] = "Le code postal doit être au format numérique";
    }


    // Tester si l'adresse mail n'existe pas déjà dans la BDD
    $client=getEmailUtilisateur($email_client);
    if ($client) {
        // email existe
        $erreurs['email_existe'] = "Un compte existe déjà avec cet email !";
    } else {
        // email n'existe pas
        // Traiter les données
        if (empty($erreurs)) {
            // Traitement des données (insertion dans une base de données)
            postUtilisateur($pseudo_client,$prenom_client,$nom_client,$email_client,$mdp,$adresse_client,$ville_client,$cp_client);

            $client=getEmailUtilisateur($email_client);
            foreach ($client as $infoClient) {
                $pseudo_client=$infoClient["pseudo_client"];
                $id_client=$infoClient["id_client"];
            }

            $_SESSION['pseudo_client'] = $pseudo_client;
            $_SESSION['email_client'] = $email_client;
            $_SESSION['id_client'] = $id_client;
            // Rediriger l'utilisateur vers une autre page du site
            header("Location: ../index.php");
            exit();
        }
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
    <link rel="stylesheet" href="./assets/css/bootstrap.min.flatly.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        section {
            padding: 100px 0;
        }

    </style>
    <title>LocaVoit - Inscription</title>
    <link rel="shortcut icon" href="./assets/images/logo-locavoit.png" />
</head>
<body class="bg-light">
<!--Insertion d'un menu-->
<?php require_once BASE_PROJET.'/src/_partials/header.php' ?>
<section class="container">
    <h1 class="border-bottom border-3 border-primary pt-5">Inscription</h1>
    <div class="w-50 mx-auto shadow mt-5 p-4 rounded-5 bg-white">
        <form action="" method="post" novalidate>
            <div class="mb-3">
                <label for="pseudo_client" class="form-label fw-semibold">Pseudo*</label>
                <input type="text"
                       class="form-control <?= (isset($erreurs['pseudo_client'])) ? "border border-2 border-danger" : "" ?>"
                       id="pseudo_client" name="pseudo_client" value="<?= $pseudo_client ?>" placeholder="Saisir votre pseudo"
                       aria-describedby="emailHelp">
                <?php if (isset($erreurs['pseudo_client'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['pseudo_client'] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="prenom_client" class="form-label fw-semibold">Prénom*</label>
                <input type="text"
                       class="form-control <?= (isset($erreurs['prenom_client'])) ? "border border-2 border-danger" : "" ?>"
                       id="prenom_client" name="prenom_client" value="<?= $prenom_client ?>" placeholder="Saisir votre prénom"
                       aria-describedby="emailHelp">
                <?php if (isset($erreurs['prenom_client'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['prenom_client'] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="nom_client" class="form-label fw-semibold">Nom*</label>
                <input type="text"
                       class="form-control <?= (isset($erreurs['nom_client'])) ? "border border-2 border-danger" : "" ?>"
                       id="nom_client" name="nom_client" value="<?= $nom_client ?>" placeholder="Saisir votre nom"
                       aria-describedby="emailHelp">
                <?php if (isset($erreurs['nom_client'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['nom_client'] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="email_client" class="form-label fw-semibold">Email*</label>
                <input type="email"
                       class="form-control <?= (isset($erreurs['email_client'])) ? "border border-2 border-danger" : "" ?>
                       form-control <?= (isset($erreurs['email_existe'])) ? "border border-2 border-danger" : "" ?>"
                       id="email_client" name="email_client" value="<?= $email_client?>" placeholder="Saisir un email valide"
                       aria-describedby="emailHelp">
                <?php if (isset($erreurs['email_client'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['email_client'] ?></p>
                <?php endif; ?>
                <?php if (isset($erreurs['email_existe'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['email_existe'] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="adresse_client" class="form-label fw-semibold">Adresse*</label>
                <input type="text"
                       class="form-control <?= (isset($erreurs['adresse_client'])) ? "border border-2 border-danger" : "" ?>"
                       id="adresse_client" name="adresse_client" value="<?= $adresse_client?>" placeholder="Saisir votre adresse"
                       aria-describedby="emailHelp">
                <?php if (isset($erreurs['adresse_client'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['adresse_client'] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="ville_client" class="form-label fw-semibold">Ville*</label>
                <input type="text"
                       class="form-control <?= (isset($erreurs['ville_client'])) ? "border border-2 border-danger" : "" ?>"
                       id="ville_client" name="ville_client" value="<?= $ville_client?>" placeholder="Saisir votre ville"
                       aria-describedby="emailHelp">
                <?php if (isset($erreurs['ville_client'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['ville_client'] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="cp_client" class="form-label fw-semibold">Code postal*</label>
                <input type="number"
                       class="form-control <?= (isset($erreurs['cp_client'])) ? "border border-2 border-danger" : "" ?>"
                       id="cp_client" name="cp_client" value="<?= $cp_client?>" placeholder="Saisir votre code postal"
                       aria-describedby="emailHelp">
                <?php if (isset($erreurs['cp_client'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['cp_client'] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="mdp" class="form-label fw-semibold">Mot de passe*</label>
                <button type="button" class="btn float-end" data-bs-toggle="modal"
                        data-bs-target="#exampleModal5">
                    <i class="bi bi-info-circle"></i>
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel5"
                     aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel5">Les caractéristiques de votre mot de passe </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <ul>
                                    <li>
                                        Votre mot de passe doit contenir entre 8 et 14 caractères
                                    </li>
                                    <li>
                                        Il doit contenir au moins une minuscule, une majuscule et un chiffre
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="password"
                       class="form-control <?= (isset($erreurs['mdp'])) ? "border border-2 border-danger" : "" ?>
                       form-control <?= (isset($erreurs['mdp_egaux'])) ? "border border-2 border-danger" : "" ?>
                       form-control <?= (isset($erreurs['mdp_longueur'])) ? "border border-2 border-danger" : "" ?>"
                       id="mdp" name="mdp" value="<?= ($erreurs) ? "" : $mdp ?>" placeholder="Saisir votre mot de passe"
                       aria-describedby="emailHelp">
                <?php if (isset($erreurs['mdp'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['mdp'] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="mdp_confirmation" class="form-label fw-semibold">Confirmation du mot de passe*</label>
                <input type="password"
                       class="form-control <?= (isset($erreurs['mdp_confirmation'])) ? "border border-2 border-danger" : "" ?>
                       form-control <?= (isset($erreurs['mdp_egaux'])) ? "border border-2 border-danger" : "" ?>
                       form-control <?= (isset($erreurs['mdp_longueur'])) ? "border border-2 border-danger" : "" ?>"
                       id="mdp_confirmation"
                       name="mdp_confirmation" value="<?= ($erreurs) ? "" : $mdp ?>" placeholder="Saisir votre mot de passe à nouveau"
                       aria-describedby="emailHelp">
                <?php if (isset($erreurs['mdp_confirmation'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['mdp_confirmation'] ?></p>
                <?php elseif (isset($erreurs['mdp_longueur'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['mdp_longueur'] ?></p>
                <?php elseif (isset($erreurs['mdp_egaux'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['mdp_egaux'] ?></p>
                <?php endif; ?>
            </div>
            <div class="text-center pt-2">
                <button type="submit" class="btn btn-primary">Inscription</button>
            </div>
            <div class="pt-3">
                <p><span class="me-1">Vous possédez déjà un compte ?</span><a href="connexion.php" class="link-underline-info text-black fw-semibold mt-5">Connectez vous !</a></p>
            </div>
        </form>
    </div>
</section>

<?php require_once BASE_PROJET.'/src/_partials/footer.php' ?>

<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>