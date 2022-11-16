<h1>Exercice 9</h1>
<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de valeurs en paramètre ("Monsieur","Madame","Mademoiselle").
Exemple :
afficherRadio($nomsRadio);</p>

<?php

$nomsRadio= array("Masculin", "Feminin", "Autre");

afficherRadio($nomsRadio);

function afficherRadio($array){
    foreach($array as $input){
    echo"<input type=radio name=$input value=$input>$input<br>";
    }
}