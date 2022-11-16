<h1>Exercice 8</h1>
<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.
<br>
Exemple :
repeterImage($url,4);</p>

<?php

repeterImage("http://my.mobirise.com/data/userpic/764.jpg",4);

function repeterImage($url, $nbfois){
    echo str_repeat("<img src=$url>",$nbfois);
}

?>