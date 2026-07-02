<?php

function listeProduit(array $produits):void{
    foreach ($produits as  $produit) {
    echo "Libelle : {$produit['libelle']} ";
    echo "Prix : {$produit['prix']} ";
    echo "Quantite : {$produit['quantite']}\n";
    }
}

?>