<?php
require_once '../base.php';
require_once BASE_PROJET . '/src/database/acheter-db.php';
require_once BASE_PROJET . '/src/database/client-db.php';

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

$idCommande = null;
$erreur=false;
if (!empty($_GET["id_commande"])) {
    $idCommande = filter_var($_GET["id_commande"],FILTER_VALIDATE_INT);
} else {
    $erreur=true;
}

$commande=getCommandeClient($idCommande);

if ($commande["id_client"]!=$id_client) {
    $erreur=true;
}

$infosClient=getInfosClient($id_client);

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
    <style type="text/css">
        @media print {
            #header,#footer,#btnImprimer{
                display:none;
            }
            #divimprimer {
                display: block;
            }

        }
    </style>
    <title>LocaVoit - Ma location</title>
    <link rel="shortcut icon" href="./assets/images/logo-locavoit.png" />
</head>
<body class="bg-light">
<!--Insertion d'un menu-->
<div id="header">
    <?php require_once BASE_PROJET.'/src/_partials/header.php' ?>
</div>
<section class="container">
    <h1 class="border-bottom border-3 border-primary pt-5">Ma location</h1>
    <div class="w-100 mx-auto shadow my-5 p-4 bg-white rounded-5 text-black">
        <?php if (empty($erreur)): ?>
            <div class="invoice" id="divimprimer">
                <div class="row">
                    <div class="col-6">
                        <img id="img-presentation" class="mx-auto w-25 mb-5" src="./assets/images/logo-locavoit.png" alt="Logo Locavoit" />
                    </div>
                    <div class="col-6">
                        <h1 class="document-type display-4 fs-1"><?= getEditionCommande($commande["id_edition"])["libelle_edition"] ?></h1>
                        <p class="text-right fs-4"><strong th:text="${invoiceReference}"><?= getDesignationCommande($commande["id_prod"])["designation_prod"] ?></strong></p>
                        <p class="text-right fs-5"><strong th:text="${invoiceReference}">Commande n°<?= $idCommande ?></strong></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p class="addressMySam">
                            <strong>LocaVoit</strong><br/>
                            3 Rue Gustave Courbet<br/>
                            70150 Marnay France
                        </p>
                    </div>
                    <div class="col-3">
                        <br/><br/><br/>
                        <p class="addressDriver">
                            <span th:text="${driver.getAddress()}">Client (inscrit sur LocaVoit) :</span><br/>
                            <strong th:text="${driver.getCompanyName()}"><?= $infosClient['prenom_client'] ?> <?= $infosClient['nom_client'] ?></strong><br/>
                            <span th:text="${driver.getAddress()}"><?= $infosClient['adresse_client'] ?></span><br/>
                            <span th:text="${driver.getZipCode()}"><?= $infosClient['cp_client'] ?></span> <span
                                th:text="${driver.getCity()}"><?= $infosClient['ville_client'] ?></span>
                        </p>

                    </div>
                    <div class="col-3">
                        <br/><br/><br/>
                        <p class="addressDriver">
                            <span th:text="${driver.getAddress()}">Loueur du véhicule :</span><br/>
                            <strong th:text="${driver.getCompanyName()}"><?= $commande['prenom_client'] ?> <?= $commande['nom_client'] ?></strong><br/>
                            <span th:text="${driver.getAddress()}"><?= $commande['adresse_client'] ?></span><br/>
                            <span th:text="${driver.getZipCode()}"><?= $commande['cp_client'] ?></span> <span
                                    th:text="${driver.getCity()}"><?= $commande['ville_client'] ?></span>
                        </p>

                    </div>
                </div>
                <br/>
                <br/>
                <h6>Frais de services LocaVoit du <span th:text="${start}"><?= $commande['date_fr'] ?></span> au <span th:text="${end}"><?= $commande['date_retour'] ?></span>
                </h6>
                <br/>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Description</th>
                        <!--<th>Quantité</th>-->
                        <!--<th>Unité</th>-->
                        <!--<th>PU TTC</th>-->
                        <th></th>
                        <th class="text-right"></th>
                        <th class="text-right">Total TTC</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php if ($commande["nb_jours"]==0) : ?>
                            <td>Frais de location chez LocaVoit pour une durée de moins de 24 heures</span></td>
                            <!--<td>13</td>-->
                            <!--<td>Kilomètres</td>-->
                            <!--<td class="text-right">1,20€</td>-->
                            <td></td>
                            <td class="text-right" th:text="${summaryDriverClientsPayment.get('mysamHT')}"></td>
                            <td class="text-right" th:text="${totalTTC}"><?= getPrixCommande($commande["id_prod"])["prix_prod"]?>€</td>
                        <?php elseif ($commande["nb_jours"]==1) : ?>
                            <td>Frais de location chez LocaVoit pour une durée de <?= $commande["nb_jours"] ?> jour</span></td>
                            <!--<td>13</td>-->
                            <!--<td>Kilomètres</td>-->
                            <!--<td class="text-right">1,20€</td>-->
                            <td></td>
                            <td class="text-right" th:text="${summaryDriverClientsPayment.get('mysamHT')}"></td>
                            <td class="text-right" th:text="${totalTTC}"><?= getPrixCommande($commande["id_prod"])["prix_prod"]?>€</td>
                        <?php else : ?>
                            <td>Frais de location chez LocaVoit pour une durée de <?= $commande["nb_jours"] ?> jours</span></td>
                            <!--<td>13</td>-->
                            <!--<td>Kilomètres</td>-->
                            <!--<td class="text-right">1,20€</td>-->
                            <td></td>
                            <td class="text-right" th:text="${summaryDriverClientsPayment.get('mysamHT')}"></td>
                            <td class="text-right" th:text="${totalTTC}"><?= $commande["nb_jours"]*getPrixCommande($commande["id_prod"])["prix_prod"]?>€</td>
                        <?php endif; ?>
                    </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-8">
                    </div>
                    <div class="col-4">
                        <table class="table table-sm text-right">
                            <tr>
                                <td><strong>Total TTC</strong></td>
                                <?php if ($commande["nb_jours"]==0) : ?>
                                    <td class="text-right" th:text="${totalTTC}"><?= getPrixCommande($commande["id_prod"])["prix_prod"]?>€</td>
                                <?php else : ?>
                                    <td class="text-right" th:text="${totalTTC}"><?= $commande["nb_jours"]*getPrixCommande($commande["id_prod"])["prix_prod"]?>€</td>
                                <?php endif; ?>
                            </tr>
                        </table>
                    </div>
                </div>

                <p class="conditions">
                    En votre aimable règlement
                    <br/>
                    Et avec nos remerciements.
                    <br/><br/>
                    Conditions de paiement : paiement à réception de facture.
                    <br/>
                    Aucun escompte consenti pour règlement anticipé.
                    <br/>
                    Règlement par virement bancaire ou carte bancaire.
                    <br/><br/>
                    En cas de retard de paiement, indemnité forfaitaire pour frais de recouvrement : 40 euros (art. L.4413
                    et
                    L.4416 code du commerce).
                </p>

                <br/>
                <br/>
                <br/>
                <br/>

                <p class="bottom-page text-right">
                    LocaVoit<br/>
                    3 Rue Gustave Courbet - 70150 MARNAY <br/>07 68 72 58 23
                </p>
            </div>
        <?php else: ?>
            <p class="text-secondary fw-bold">Aucune commande ne correspond à cette demande...</p>
        <?php endif; ?>
        <input id="btnImprimer" type="button" value="Imprimer" onclick="window.print()">
    </div>
</section>
<div id="footer">
    <?php require_once BASE_PROJET.'/src/_partials/footer.php' ?>
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>