<h1>Exercice 6</h1>
<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.</p>

<?php
$civilite = array("Monsieur","Madame","Mademoiselle");
$statut=array("salarié", "étudiant", "chomeur");

alimenterListeDeroulante($civilite);
alimenterListeDeroulante($statut);

function alimenterListeDeroulante($tableau){
    echo '<select>';
    foreach($tableau as $input){
    echo '<option value=' .$input . '>' . $input . '</option>';
    }
    echo '</select>';
}