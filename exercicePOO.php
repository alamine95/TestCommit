<?php 
class Personne {
    private $nom;
    private $prenom;
    private $age;
    
    public function __construct($nom, $prenom, $age)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->age = $age;
    }

    public function getpersonne()
    {
        $perso=" $this->nom $this->prenom  $this->age <br />";
        return $perso;
    }

    public function setage($age)
    {
       return "$this->age=$age <br />";
    }

    public function setnom($nom)
    {
       return "$this->nom=$nom <br />";
    }

    public function setprenom($prenom)
    {
       return "$this->prenom=$prenom <br />";
    }
}

//

/*
$perso1 = new personne("Faye ","Marie","23ans");
echo $perso1->getpersonne();
//Donner à Marie un âge de 28 ans
echo $perso1->setage("28ans");

$perso2 = new personne("Sarr ","Aliou","30ans");
echo $perso2->getpersonne();

//changer le nom et le prénom d’Aliou Sarr en Thomas Faye
echo $perso2->setnom("Faye");
echo $perso2->setprenom("Thomas ");

*/