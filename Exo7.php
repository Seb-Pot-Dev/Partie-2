<h1>Exercice 7</h1>
<p>Créer une fonction perso. permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.</p>



<?php

$choix=["Choix 1", "Choix 2", "Choix 3"];


function generCheckbox($tableau){
    
    foreach($tableau as $input){

echo"<input type=checkbox name=$input value=$input>$input<br>";
}
}

generCheckbox($choix);
?>