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
$email_client = "";
$mdp_client = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Le formulaire a été soumis !
    // Traiter les données du formulaire
    // Récupérer les valeurs saisies par l'utilisateur
    // Superglobale $_POST : tableau associatif
    $email_client = $_POST['email_client'];
    $mdp_client = $_POST['mdp_client'];

    //Validation des données
    if (empty($email_client)) {
        $erreurs['email_client'] = "L'email est obligatoire";
    } elseif (!filter_var($email_client, FILTER_VALIDATE_EMAIL)) {
        $erreurs['email_client'] = "L'email n'est pas valide";
    } else {
        // Tester si l'adresse mail existe dans la BDD
        $client=getEmailUtilisateur($email_client);
        if (!$client) {
            // email n'existe pas
            $erreurs['identifiants'] = "Identifiants incorrects";
            print_r($client);
        } else {
            foreach ($client as $infoClient) {
                $pseudo_client=$infoClient["pseudo_client"];
                $id_client=$infoClient["id_client"];
            }
        }
    }
    if (empty($mdp_client)) {
        $erreurs['mdp_client'] = "Le mot de passe est obligatoire";
    } else {
        // Tester si le mot de passe correspond au mdp_utilisateur dans la BDD
        $mdpClient=array(getMdpClient($email_client));
        print_r($mdpClient);
        foreach ($mdpClient as $mdpHash) {
            foreach ($mdpHash as $hash) {
                if (password_verify($mdp_client, $hash)) {
                    // Démarrer/créer une session
                    session_start();    // PREMIERE INSTRUCTION
                    // Ajouter une variable de session "utilisateur"
                    $_SESSION['pseudo_client'] = $pseudo_client;
                    $_SESSION['email_client'] = $email_client;
                    $_SESSION['id_client'] = $id_client;
                    header("Location: ../index.php");
                    exit();
                } else {
                    $erreurs['identifiants'] = "Identifiants incorrects";
                }
            }

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
            padding: 60px 0;
        }

    </style>
    <title>LocaVoit - Connexion</title>
    <link rel="shortcut icon" href="assets/images/camera-reels.svg" />
</head>
<body class="bg-light">
<!--Insertion d'un menu-->
<?php require_once BASE_PROJET.'/src/_partials/header.php' ?>
<div class="container">
    <h1 class="border-bottom border-3 border-primary pt-5">Connexion</h1>
    <div class="w-50 mx-auto shadow my-5 p-4 rounded-5 bg-white">
        <form action="" method="post" novalidate>
            <div class="mb-3">
                <label for="email_client" class="form-label fw-semibold">Email*</label>
                <input type="email"
                      class="form-control <?= (isset($erreurs['email_client'])) ? "border border-2 border-danger" : "" ?> form-control <?= (isset($erreurs['email_existe'])) ? "border border-2 border-danger" : "" ?> form-control <?= (isset($erreurs['identifiants'])) ? "border border-2 border-danger" : "" ?>"
                      id="email_client" name="email_client" value="<?= ($erreurs) ? "" : $email_client ?>" placeholder="Saisir un email valide"
                      aria-describedby="emailHelp">
                <?php if (isset($erreurs['email_client'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['email_client'] ?></p>
                <?php endif; ?>
                <?php if (isset($erreurs['email_existe'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['email_existe'] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="mdp_client" class="form-label fw-semibold">Mot de passe*</label>
                <input type="password"
                       class="form-control <?= (isset($erreurs['mdp_client'])) ? "border border-2 border-danger" : "" ?> form-control <?= (isset($erreurs['identifiants'])) ? "border border-2 border-danger" : "" ?>"
                       id="mdp_client" name="mdp_client" value="<?= ($erreurs) ? "" : $mdp_client ?>" placeholder="Saisir votre mot de passe"
                       aria-describedby="emailHelp">
                <?php if (isset($erreurs['mdp_client'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['mdp_client'] ?></p>
                <?php endif; ?>
                <?php if (isset($erreurs['identifiants'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['identifiants'] ?></p>
                <?php endif; ?>
            </div>
            <div class="text-center pt-2">
                <button type="submit" class="btn btn-primary">Connexion</button>
            </div>
            <div class="pt-3">
                <p><span class="me-1">Vous ne possédez pas de compte ?</span><a href="creation-de-compte.php" class="link-underline-info text-black fw-semibold mt-5">Inscrivez vous !</a></p>
            </div>
        </form>
    </div>
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>