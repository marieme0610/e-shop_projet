<?php


function enregistrerProduit():void{
    global $produits;

    do {
    $tabErreurs = [];    
    $libelle = saisie("Entrer le libelle :\n");  
    isEmpty($libelle,$tabErreurs,"champ obligatoire");
    $prix = saisie("Entrer le prix du produit\n");
    isEmpty($prix,$tabErreurs,"champ obligatoire","prix");
    isPositif($prix,$tabErreurs,"Le prix doit etre positif\n","prix");
    $quantite = saisie("Entrer la quantite du produit\n");
    isEmpty($quantite,$tabErreurs,"champ obligatoire","quantite");
    isPositif($quantite,$tabErreurs,"La quantite doit etre positif\n","quantite");
    showErrors($tabErreurs);
    } while (!empty($tabErreurs));
    $getLenghtProduit = getLenghtProduit($produits);
    $gererateReference = gererateReference($getLenghtProduit);
    $newProduit = 
    [
        'reference' => $gererateReference,
        'libelle'=> $libelle,
        'prix'=> $prix,
        'quantite'=> $quantite,

    ];
    addNewProduit($produits,$newProduit);
}

function archivageProduit(){
global $produits;
global $produitsArchives;

do {
$tabErreurs = [];    
$reference = saisie("Entrer la reference du produit a archivé :\n");
isEmpty($reference,$tabErreurs,"champ obligatoire","prix");
showErrors($tabErreurs);
} while (!empty($tabErreurs));
$verifieReferenceDansProduit = verifieReferenceDansProduit($produits,$reference,'reference');
supprimerProduitPourArchive($verifieReferenceDansProduit,$produits,$produitsArchives);
var_dump($produitsArchives);
}

function listerProduit(){
global $produits,$produitsArchives;
listeProduit($produitsArchives);

}

?>