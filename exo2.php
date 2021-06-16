<?php
$adresses = array("jhon@gmail.com", "alain@yahoo.com", "martine@sfr.fr",
    "gigi@gmail.com", "aline@yahoo.com", "sophie@sfr.fr", "lili@yahoo.com",
    "philippe@hotmail.com");

$domains = array();
foreach($adresses as $elt) {
    $domain_name = substr(strrchr($elt, "@"), 1);
    array_push($domains, $domain_name);
    echo $domain_name."\n";
}

// stats
print_r(array_count_values($domains));