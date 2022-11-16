<h1>Exercice5</h1>
<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs associés.</p>

<p>Exemple :
<!---$nomsInput = array("Nom","Prénom","Ville");
afficherInput($nomsInput);</p>

<form action="action.php" method="post">
<p>Votre nom : <input type="text" name="Nom" /></p>
<p>Votre prenom: <input type="text" name="Prenom" /></p>
<p>Votre ville: <input type="text" name="Ville" /></p>
<p><input type="submit" value="OK"></p>
</form>
--->
<?php 
$nomsInput=["Nom", "Prenom", "Ville"];
echo afficherInput($nomsInput);

function afficherInput($tableau){
    $result= "<form action='action.php' method='post'>";
    foreach ($tableau as $input){
        $result.="<p>$input :<input type 'text' name='$input' /></p>";
    }
    $result.="<p><input type='submit' value ='OK'></p>";
    return $result;  
}
