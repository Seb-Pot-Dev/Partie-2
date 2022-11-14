<h1>Exercice 4</h1>
<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
On admet que l’URL de la page Wikipédia de la capitale adopte la forme : https://fr.wikipedia.org/wiki/
Le tableau passé en argument sera le suivant :</p>

<p>$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");</p>
<br>
<h2>Résultats:</h2>
<br>
<?php
$capitales=[
    "France"=> "Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome",
    "Espagne"=>"Madrid"
];
@session_start();

function afficherTableHTML($capitales){
    ksort($capitales); // trier par ordre alphabétique de A-Z sur la clé "key"
    $result= 
    "<table border=1>
    <thead>
        <tr>
            <th>Pays</th>
            <th>Capitales</th>
            <th>Lien Wiki</th>
        </tr>
    </thead>
    <tbody>";
    foreach($capitales as $pays=>$capitale)
    $result.= // La concaténation "." avant le égal permet de concatener et de ne pas remplacer le contenu de $result, mais de lui rajouter des éléments.
        "<tr>
            <td>".mb_strtoupper($pays)."</td>
            <td>".ucfirst($capitale)."</td>
            <td><a href='https://fr.wikipedia.org/wiki/$capitale' target='_blank'>Lien</a></td>
        </tr>";
        $result.="</tbody></table>";
return $result;
}
echo afficherTableHTML($capitales);