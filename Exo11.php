<h1>Exercice 11</h1>
<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres)
à partir d’une chaîne de caractère représentant une date.</p>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<?php
setlocale(LC_TIME, 'fr_FR');
date_default_timezone_set('Europe/Paris');
echo DateTime::('%A %d %B %Y, %H:%M');

// $date="2018-02-23";

// function formaterDateFr($dt){
//    $dt= DateTime::createFromFormat('Y/m/d', $date);
//    echo $dt->format('Y-m-d H:i:s');
// }

// formaterDateFr($date)

?>