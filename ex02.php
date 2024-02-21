Voici une implémentation en PHP des classes demandées :

php
<?php

// Classe DateNaissance
class DateNaissance {
    private $jour;
    private $mois;
    private $annee;

    // Constructeur
    public function __construct($jour, $mois, $annee) {
        $this->jour = $jour;
        $this->mois = $mois;
        $this->annee = $annee;
    }

    // Méthode toString
    public function __toString() {
        return "$this->jour/$this->mois/$this->annee";
    }
}

// Classe Personne
class Personne {
    protected $nom;
    protected $prenom;
    protected $dateNaissance;

    // Constructeur
    public function __construct($nom, $prenom, $dateNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
    }

    // Méthode Afficher
    public function afficher() {
        echo "Nom: $this->nom, Prénom: $this->prenom, Date de naissance: $this->dateNaissance \n";
    }
}

// Classe Employé
class Employe extends Personne {
    private $salaire;

    // Constructeur
    public function __construct($nom, $prenom, $dateNaissance, $salaire) {
        parent::__construct($nom, $prenom, $dateNaissance);
        $this->salaire = $salaire;
    }

    // Redéfinition de la méthode Afficher
    public function afficher() {
        parent::afficher();
        echo "Salaire: $this->salaire \n";
    }
}

// Classe Chef
class Chef extends Employe {
    private $service;

    // Constructeur
    public function __construct($nom, $prenom, $dateNaissance, $salaire, $service) {
        parent::__construct($nom, $prenom, $dateNaissance, $salaire);
        $this->service = $service;
    }

    // Redéfinition de la méthode Afficher
    public function afficher() {
        parent::afficher();
        echo "Service: $this->service \n";
    }
}

// Instanciation des objets et tests des méthodes définies
$dateNaissance = new DateNaissance(15, 6, 1990);
$personne = new Personne("Hachimi", "Laila", $dateNaissance);
$personne->afficher();

$employe = new Employe("Benmir", "Yannir", $dateNaissance, 3000);
$employe->afficher();

$chef = new Chef("Amine", "Redouan", $dateNaissance, 5000, "Ressources humaines");
$chef->afficher();

?>
