<?php

require_once '../base.php';
require_once BASE_PATH.'/src/config/db-config.php';

function getProduitListe($idEdition): array
{
    $pdo = getConnexion();
    $requete = $pdo->prepare("SELECT * FROM produit WHERE id_edition=$idEdition;");
    $requete->execute();
    return $requete->fetchAll(PDO::FETCH_ASSOC);
}