<?php
if (!empty($_POST))
{
    print_r($_POST);
    echo " Confirmation de vos \n coordonnées ";
    $missing = array();
    if(isset($_POST['nom']) && !empty($_POST['nom']))
    {
        $nom = $_POST['nom'];
    }
    else
    {
        array_push($missing, "nom");
    }

}
else
{
    echo "Il manque quelques valeurs ! \n S'il vous plaît entrez: ";
    print_r($missing);
    foreach($missing as $elt){
        echo $elt.", ";
    }
}