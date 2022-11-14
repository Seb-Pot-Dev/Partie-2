<h1>Exercice6</h1>
<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.</p>

<?php
$elements = array("Monsieur","Madame","Mademoiselle");
alimenterListeDeroulante($elements);

function alimenterListeDeroulante($tableau){
    $result= "<form action='action.php' method='post'>";
    foreach ($tableau as $input){
        $result.="<p>$input :<input type 'text' name='$input' /></p>";
    }
    $result.="<p><input type='submit' value ='OK'></p>";
    return $result;
}
echo alimenterListeDeroulante($tableau);
