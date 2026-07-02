<?php
$commandes = 
[
    ['client' => 1,'date' => '06/02/2026','montant' => 0,'etat' => 'PAYER',
    'produits' => [
                    ['quantite' => 12,'indexPoduit' => 0],
                    ['quantite' => 7,'indexPoduit' => 0]
                  ],
    'paiement'=>'reference1'
    ],
    ['client' => 1,'date' => '06/10/2026','montant' => 0,'etat' => 'IMPAYER',
    'produits' => [
                    ['quantite' => 3,'indexPoduit' => 1],
                    ['quantite' => 4,'indexPoduit' => 0]
                  ],
    'paiement'=> null
    ]
];

$paiements = [
    0=>['date'=>'20/06/2026','reference'=>'reference1',
    'facture'=>['date'=>'14/06/2026','reference'=>1],
    ]
];




?>