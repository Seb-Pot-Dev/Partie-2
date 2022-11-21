<h1>Exercice 15</h1>
<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une adresse e-mail a le bon format.</p>

<?php

$email="sebastien.pothee.dev@gmail.com";

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "L'adresse e-mail est valide";
}else{
    echo "L'adresse e-mail est invalide";
}

?>