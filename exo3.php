<?php
function transform($string_table)
{
    echo " Exercice 3 \n";
    foreach($string_table as $elt){
        echo ucfirst(strtolower($elt))."\n";
    }
}

// test
$test = array("marieKLman", "Kilian Mbaby", "antoine greizman");
transform($test);