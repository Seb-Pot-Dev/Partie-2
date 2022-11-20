<h1>Exercice 10</h1>
<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire complet qui contient les informations suivantes : <br> champs de texte avec nom, prénom, adresse e-mail, ville, sexe <br> et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : <br> « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
<br> Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation (submit).</p>

<h2> RESULTATS </h2>

<?php

$champtxt=array("Nom", "Prenom", "Addresse e-mail", "Ville", "Sexe");
$champlist=array("Développeur Logiciel", "Designer Web", "Intégrateur", "Chef de projet");


generForm($champlist,$champtxt);

function generForm($champlist,$champtxt){
    echo generChamp($champtxt);
    echo generList($champlist);
}

$nomsInput=["Nom", "Prenom", "Ville"];

function generChamp($tableau){
    $result="<form action='action.php' method='post'>";
    foreach ($tableau as $input){
        $result.="<p>$input :<input type='text' name='$input' /></p>";
    }
    return $result;  
}
function generList($tableau){
    $result="<select>";
    foreach($tableau as $input){
        $result.="<option value='$input'>$input</option>";
    }
        $result.="</select><p><input type='submit' value ='OK'></p></form>";
return $result;
}






?>