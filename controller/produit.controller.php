<?php


function enregistrerProduit(){
    global $produits;

    do {
    $tabErreurs = [];    
    $libelle = saisie("Entrer votre nom :\n");  
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
    var_dump($produits);


}



?>