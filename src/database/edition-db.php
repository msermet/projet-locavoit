<?php

require_once '../base.php';
require_once BASE_PATH.'/src/config/db-config.php';

function getEditionListe(): array
{
    $pdo = getConnexion();
    $requete = $pdo->prepare("SELECT * FROM edition ORDER BY id_edition");
    $requete->execute();
    return $requete->fetchAll(PDO::FETCH_ASSOC);
}

function getLibelleEdition($idEdition): array
{
    $pdo = getConnexion();
    $requete = $pdo->prepare("SELECT libelle_edition FROM edition WHERE id_edition=$idEdition;");
    $requete->execute();
    return $requete->fetch(PDO::FETCH_ASSOC);
}