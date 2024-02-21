<?php

class DateNaissance {
    private $jour;
    private $mois;
    private $annee;


    public function __construct($jour, $mois, $annee) {
        $this->jour = $jour;
        $this->mois = $mois;
        $this->annee = $annee;
    }


    public function __toString() {
        return "$this->jour/$this->mois/$this->annee";
    }
}


class Personne {
    protected $nom;
    protected $prenom;
    protected $dateNaissance;


    public function __construct($nom, $prenom, $dateNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
    }


    public function afficher() {
        echo "Nom: $this->nom, Prénom: $this->prenom, Date de naissance: $this->dateNaissance \n";
    }
}


class Employe extends Personne {
    private $salaire;

    
    public function __construct($nom, $prenom, $dateNaissance, $salaire) {
        parent::__construct($nom, $prenom, $dateNaissance);
        $this->salaire = $salaire;
    }


    public function afficher() {
        parent::afficher();
        echo "Salaire: $this->salaire \n";
    }
}


class Chef extends Employe {
    private $service;


    public function __construct($nom, $prenom, $dateNaissance, $salaire, $service) {
        parent::__construct($nom, $prenom, $dateNaissance, $salaire);
        $this->service = $service;
    }


    public function afficher() {
        parent::afficher();
        echo "Service: $this->service \n";
    }
}


$dateNaissance = new DateNaissance(15, 6, 1990);
$personne = new Personne("Hachimi", "Laila", $dateNaissance);
$personne->afficher();

$employe = new Employe("Benmir", "Yannir", $dateNaissance, 3000);
$employe->afficher();

$chef = new Chef("Amine", "Redouan", $dateNaissance, 5000, "Ressources humaines");
$chef->afficher();

?>
