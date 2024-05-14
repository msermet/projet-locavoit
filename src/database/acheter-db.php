<?php

require_once '../base.php';
require_once BASE_PATH.'/src/config/db-config.php';

function postCommande($idProd,$idClient,$idEdition,$prenom,$nom,$email,$adresse,$ville,$cp,$dateDepart,$dateRetour): void
{
    $pdo = getConnexion();
    $requete = $pdo->prepare('INSERT INTO acheter (id_prod,id_client,id_edition,prenom_client,nom_client,email_client,adresse_client,ville_client,cp_client,date_commande,date_retour) VALUES (?,?,?,?,?,?,?,?,?,?,?)');
    $requete->bindParam(1, $idProd);
    $requete->bindParam(2, $idClient);
    $requete->bindParam(3, $idEdition);
    $requete->bindParam(4, $prenom);
    $requete->bindParam(5, $nom);
    $requete->bindParam(6, $email);
    $requete->bindParam(7, $adresse);
    $requete->bindParam(8, $ville);
    $requete->bindParam(9, $cp);
    $requete->bindParam(10, $dateDepart);
    $requete->bindParam(11, $dateRetour);
    $requete->execute();
}

function getCommandesClient($id) : array|bool
{
    $pdo = getConnexion();
    $recuperation = $pdo->prepare("SELECT id_prod,id_client,id_edition,prenom_client,nom_client,email_client,adresse_client,ville_client,cp_client,DATE_FORMAT(date_commande,'%d/%m/%Y') AS date_fr,date_retour FROM acheter WHERE id_client=?");
    $recuperation->execute([$id]);
    return $recuperation->fetchAll(PDO::FETCH_ASSOC);
}

function getDesignationCommande($idProd) : array|bool
{
    $pdo = getConnexion();
    $recuperation = $pdo->prepare("SELECT designation_prod FROM produit WHERE id_prod=?");
    $recuperation->execute([$idProd]);
    return $recuperation->fetch(PDO::FETCH_ASSOC);
}

function getEditionCommande($idEdition) : array|bool
{
    $pdo = getConnexion();
    $recuperation = $pdo->prepare("SELECT libelle_edition FROM edition WHERE id_edition=?");
    $recuperation->execute([$idEdition]);
    return $recuperation->fetch(PDO::FETCH_ASSOC);
}