<?php



function gererateReference(int $lenght){
    $concat;
    if($lenght <= 9){
        $concat = "REF00";
        return $concat.$lenght;
    }
    else if($lenght <= 99){
        $concat = "REF0";
        return $concat.$lenght;
    }
    else{
        $concat = "";
        return $concat.$lenght;
    }
}

?>