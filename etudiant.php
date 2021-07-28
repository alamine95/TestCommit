<?php
//Créer une classe Etudiant (avec ses propriétés école et niveau et des méthodes nécessaires) qui hérite de la classe Personne
include('exercicePOO.php');

class etudiants extends Personne {
    private $ecole;
    private $niveau;

    public function __construct($ecole, $niveau)
    {
        $this->ecole=$ecole;
        $this->niveau=$niveau;
    }

    public function getEtudiant()
    {
        $etu=" $this->ecole $this->niveau <br />";
        return $etu;
    }

    public function setEcole($ecole)
    {
       return "$this->ecole=$ecole <br />";
    }

    public function setNiveau($niveau)
    {
       return "$this->niveau=$niveau <br />";
    }

}

$perso1 = new personne("Faye ","Marie","23ans");
echo $perso1->getpersonne();

$perso2 = new etudiants("G-15","2 eme année");
echo $perso2->getEtudiant();
//Changer l'école et l'afficher
echo $perso2->setEcole("ESMT");