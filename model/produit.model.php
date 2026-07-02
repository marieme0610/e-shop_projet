<?php
$produits =
[
    ['ref' => 'REF001','libelle' => 'sac','prix' => 3500,'quantite' => 500],
    ['ref' => 'REF002','libelle' => 'parfum','prix' => 9000,'quantite' => 70]
];


function getLenghtProduit(array $produits):int{
    $lenght = count($produits) +1; 
    return $lenght;
}

function addNewProduit(array &$produits ,array $newProduit):array{
  return  $produits[]=$newProduit;
}
var_dump($produits)
?>