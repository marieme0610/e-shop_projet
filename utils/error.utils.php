<?php
function showErrors($tabErreurs){
foreach ($tabErreurs as  $tabErreur) {
       foreach ($tabErreur as $error) {
        echo $error."\n";
       }
    }
}

?>