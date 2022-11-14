<h1>Exercice 1</h1>
<p>Créer une fonction perso "convertirMajRouge()" permettant de transformer une chaîne de caractère passée en argument en majuscule et en rouge</p>

<?php
$texte="ahahahaha";

function ConvertirMajRouge($texte)// Fonction pour transformer l'argument $texte en MAJ puis retourner cette MAJ avec une couleur red
{
    $texte=mb_strtoupper($texte);
    return "<p style='color: red'>$texte</p>";
}

echo ConvertirMajRouge($texte);
//
function ConvertirMajColor($texte, $color) //Fonction pour transformer l'argument $texte en une couleur $color, il suffit alors d'appeler la function('mon autre texte', 'macouleur')
{

    $texte=mb_strtoupper($texte);
    return "<p style='color:$color'>$texte</p>";
}

echo ConvertirMajColor('un autre texte', 'cyan');

?>