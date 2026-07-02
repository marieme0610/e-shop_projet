<?php
$produits =
[
    ['reference' => 'REF001','libelle' => 'sac','prix' => 3500,'quantite' => 500],
    ['reference' => 'REF002','libelle' => 'parfum','prix' => 9000,'quantite' => 70]
];

$produitsArchives = [];


function getLenghtProduit(array $produits):int{
    $lenght = count($produits) +1; 
    return $lenght;
}

function addNewProduit(array &$produits ,array $newProduit):array{
  return  $produits[]=$newProduit;
}

function verifieReferenceDansProduit(array $produits,string $ref):int{
    foreach ($produits as $indexProd => $produit) {
        if($produit['reference'] == $ref){
             return $indexProd;
        }
    }
    
    return -1; 
} 

function supprimerProduitPourArchive(int $indexProduit, array &$produits,array &$produitsArchives):array{
    $produitsArchives = array_splice($produits,$indexProduit,1);
    return $produitsArchives;
}
?>