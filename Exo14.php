<h1>Exercice 14</h1>
<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).</p>

<?php


class Voiture
{
    private $_marque;
    private $_modele;

    public function __construct($marque, $modele)
    {
        $this->_marque = $marque;
        $this->_modele = $modele;
    }
    public function getMarque()
    {
        return $this->_marque;
    }

    public function getModele()
    {
        return $this->_modele;
    }
    public function getinfo()
    {
        echo "Infos du véhicule<br>**************** <br>";
        echo "Nom et modèle du véhicule : " . $this->getMarque() . " " . $this->getModele() . "<br>";
    }
}

class VoitureElectrique extends Voiture
{
    private $_autonomie;

    public function __construct($marque, $modele, $autonomie)
    {
        parent::__construct($marque, $modele);
        $this->_autonomie = $autonomie;
    }
    public function getautonomie()
    {
        return $this->_autonomie;
    }
    public function getinfoelec()
    {
        echo "Infos du véhicule<br>**************** <br>";
        echo "Nom et modèle du véhicule : " . $this->getMarque() . " " . $this->getModele() . " avec une autonomie de : " . $this->getautonomie() . " km<br>";
    }
}


$v1 = new Voiture("Peugeot", "408");
$ve2 = new VoitureElectrique("BMW", "i3", 1000);
$v1->getinfo() . "<br>";
echo "<br>";
$ve2->getinfoelec() . "<br>";
?>