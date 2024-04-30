<?php

require_once '../base.php';
require_once BASE_PATH.'/src/config/db-config.php';

function getEmailUtilisateur($email_utilisateur): array
{
    $pdo = getConnexion();
    $recuperation = $pdo->prepare("SELECT * FROM client WHERE email_client=?");
    $recuperation->execute([$email_utilisateur]);
    $utilisateur=$recuperation->fetchAll(PDO::FETCH_ASSOC);
    return $utilisateur;
}
function postUtilisateur($pseudo,$prenom,$nom,$email,$mdp,$adresse,$ville,$cp): void
{
    $pdo = getConnexion();
    $mdp_Hash = password_hash($mdp, PASSWORD_DEFAULT);
    $requete = $pdo->prepare('INSERT INTO client (pseudo_client,prenom_client,nom_client,email_client,mdp_client,adresse_client,ville_client,cp_client) VALUES (?,?,?,?,?,?,?,?)');
    $requete->bindParam(1, $pseudo);
    $requete->bindParam(2, $prenom);
    $requete->bindParam(3, $nom);
    $requete->bindParam(4, $email);
    $requete->bindParam(5, $mdp_Hash);
    $requete->bindParam(6, $adresse);
    $requete->bindParam(7, $ville);
    $requete->bindParam(8, $cp);
    $requete->execute();
}

function getMdpClient($email) : array|bool
{
    $pdo = getConnexion();
    $recuperation = $pdo->prepare("SELECT mdp_client FROM client WHERE email_client=?");
    $recuperation->execute([$email]);
    $mdp=$recuperation->fetch(PDO::FETCH_ASSOC);
    return $mdp;
}