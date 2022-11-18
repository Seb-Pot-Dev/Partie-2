<h1>Exercice 13</h1>
<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un véhicule.</p>

<?php
Class Voiture
{
    private $_marque;
    private $_modele;
    private $_nbPortes;
    private $_vitesseActuelle;

    public function __construct($marque, $modele, $nbportes, $vitesseActuelle)
    {
        $this->_marque=$marque;
        $this->_modele=$modele;
        $this->_nbportes=$nbportes;
        $this->_vitesseActuelle=$vitesseActuelle;
    }
    public function getInfo(){
        return ($this->_marque);
        return $this->_modele;
        return $this->_nbPortes;
        return $this->_vitesseActuelle;

    }
    
    public function demarrer(){

    }
    
    public function accelerer(){

    }

    public function stopper(){

    }

    public function caract(){

    }


}

$v1= new Voiture("Peugeot", "408", "5", "0");
echo $v1->getInfo();
?>