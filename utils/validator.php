<?php

function isUnique(string $value,array $datas,array &$tabError ,string $smsError,string $key = 'libelle'):void{
    foreach ($datas as  $data) {
        if($data[$key] == $value){
            $tabError[$key]["Pas unique"] = $smsError;
        }
    }
}

function isEmpty(string $value,array &$tabError ,string $smsError,string $key = 'libelle'):void{
    if(empty($value)){
        $tabError[$key]["Pas vide"] = $smsError;
    }
}

function isPositif(string $value,array &$tabError ,string $smsError,string $key = 'libelle'):void{
    if($value < 0){
        $tabError[$key]["Negatif"] = $smsError;
    }
}

?>