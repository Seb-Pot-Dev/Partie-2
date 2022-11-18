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


$date1="2013-03-15";

// Afficher date du jour en français
$formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);

    echo ucfirst($formatter->format(date_create($date1)))."<br>";
"<br>";


//Afficher date var en anglais
$date=date_create($date1);

    echo date_format($date,'l jS \of F Y');

?>