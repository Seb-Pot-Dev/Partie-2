<h1>Exercice 13</h1>
<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un véhicule.</p>

<?php
Class Voiture
{
    private $_marque;
    private $_modele;
    private $_nbPortes;
    private $_vitesseActuelle;
    private $_etat;
    

    public function __construct($marque, $modele, $nbPortes, $vitesseActuelle, $etat)
    {
        $this->_marque=$marque;
        $this->_modele=$modele;
        $this->_nbPortes=$nbPortes;
        $this->_vitesseActuelle=$vitesseActuelle; 
        $this->_etat=$etat;
    }
    
    public function getMarque(){
        return $this->_marque;
    }
    
    public function getModele(){
        return $this->_modele;
    }
    
    public function getnbPortes(){
        return $this->_nbPortes;
    }
    
    public function getvitesseActuelle(){
        return $this->_vitesseActuelle;  
    }
    public function getphrasevitesse(){
        return "La vitesse du véhicule ".$this->_marque." ".$this->_modele." est de ".$this->_vitesseActuelle." km / h";
    }
    
   
    public function getEtat(){
        if ($this->_etat==1){
            return 'est demarré';
        }
        else {
            return 'est stoppé';
        }
    }

    public function demarrer(){
        if ($this->_etat==0){
        $this->_etat=1;
        return "Le véhicule ".$this->_marque." ".$this->_modele." démarre.";
        }
        else{
        return "Le véhicule est déjà démarré";
        }
    }

    public function accelerer($speed){
        if ($this->_etat==1){
        $this->_vitesseActuelle+=$speed;
        return "Le véhicule ".$this->_marque." ".$this->_modele." accélère de ".$speed." km / h";
        }
        else{
        return "Le véhicule ".$this->_marque." ".$this->_modele." veut accélérer de ".$speed." km / h<br>Pour accélérer il faut démarrer le véhicule ".$this->_marque." ".$this->_modele."!";
        }
    }

    public function stopper(){
        if ($this->_etat==1){
        $this->_vitesseActuelle=0;
        $this->_etat=0;
        return "Le véhicule ".$this->_marque." ".$this->_modele." est stoppé";
        }
        else{
            return "Le véhicule ".$this->_marque." ".$this->_modele." est déjà stoppé";
        }
    }

    public function getinfo(){
        echo "Infos du véhicule<br>**************** <br>";
        echo "Nom et modèle du véhicule : ".$this->getMarque()." ".$this->getModele()."<br>";
        echo "Nombre de portes : ".$this->getnbPortes()."<br>";
        echo "Le véhicule ".$this->getMarque()." ".$this->getEtat()."<br>"; //pourquoi demarrer passe en 1er?...
        echo "Sa vitesse actuelle est de : ".$this->getvitesseActuelle()."km/h <br>";
    }

    public function ralentir($vitesse){
    if ($this->_etat==1){
    $this->_vitesseActuelle-=$vitesse;
    return "Le véhicule ".$this->_marque." ".$this->_modele." ralenti de ".$vitesse." km / h ";
    }
}
}
$v1= new Voiture("Peugeot", "408", 5, 0, 0);
$v2= new Voiture ("Citroën", "C4", 3, 0, 0);


echo "Actions en cours :<br>**************<br>";
echo $v1->demarrer()."<br>";
echo $v1->accelerer(50)."<br>";
echo $v1->ralentir(25)."<br>";
echo $v2->demarrer()."<br>";
echo $v2->stopper()."<br>";
echo $v2->accelerer(20)."<br>";
echo $v2->getphrasevitesse()."<br>";


echo "<br><br>";
echo $v1->getinfo()."<br>";
echo "<br><br>";
echo $v2->getinfo()."<br>";








?>