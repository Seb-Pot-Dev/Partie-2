<h1>Exercice 3</h1>
<p>Soit le tableau suivant:<br>
<br>
    $capitales=array("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>Rome")<br>
<br>
    Réaliser un algo permettant d’afficher le tableau HTML suivant (notez que le nom du pays s’affichera<br>
     en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée.<br>
<br>
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales)
</p>
<h2>Resultat</h2>

<!--<table border=1>
     Entête du tableau 
    <thead>
        <tr>
            <th>Pays</th>
            <th>Capitales</th>
        </tr>
    </thead>
     Corps du tableau 
    <body>
        <tr>
            <td>France</td>
            <td>Paris</td>
        </tr>
            <td>Allemagne</td>
            <td>Berlin</td>
        <tr>
            <td>USA</td>
            <td>Washington</td>
        </tr>
            <td>Italie</td>
            <td>Rome</td>
    </body>
    </table>
--->
<?php

$capitales=[
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome"
];


foreach($capitales as $key => $val){
    echo "Le pays $key a pour capitale :  $val <br>";
}
"<br>";
"<br>";


function afficherTableHTML($capitales){
    ksort($capitales); // trier par ordre alphabétique de A-Z sur la clé "key"
    $result= 
    "<table border=1>
    <thead>
        <tr>
            <th>Pays</th>
            <th>Capitales</th>
        </tr>
    </thead>
    <tbody>";
    foreach($capitales as $key=>$value)
    $result.= // La concaténation "." avant le égal permet de concatener et de ne pas remplacer le contenu de $result, mais de lui rajouter des éléments.
        "<tr>
            <td>".mb_strtoupper($key)."</td>
            <td>".ucfirst($value)."</td>
        </tr>";
        $result.="</tbody></table>";
return $result;
}
echo afficherTableHTML($capitales);

?>