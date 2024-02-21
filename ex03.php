Voici une implémentation en PHP des classes demandées :

php
<?php

// Classe abstraite Personne
abstract class Personne {
    protected $nom;
    protected $prenom;

    // Constructeur
    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    // Méthode abstraite à implémenter dans les classes dérivées
    abstract public function afficher();
}

// Classe Client dérivée de Personne
class Client extends Personne {
    private $adresse;

    // Constructeur
    public function __construct($nom, $prenom, $adresse) {
        parent::__construct($nom, $prenom);
        $this->adresse = $adresse;
    }

    // Méthode pour afficher les coordonnées complètes
    public function setCoord() {
        echo "Nom: $this->nom, Prénom: $this->prenom, Adresse: $this->adresse \n";
    }

    // Implémentation de la méthode afficher
    public function afficher() {
        $this->setCoord();
    }
}

// Classe Electeur dérivée de Personne
class Electeur extends Personne {
    private $bureau_de_vote;
    private $vote;

    // Constructeur
    public function __construct($nom, $prenom, $bureau_de_vote) {
        parent::__construct($nom, $prenom);
        $this->bureau_de_vote = $bureau_de_vote;
        $this->vote = false;
    }

    // Méthode pour enregistrer le vote
    public function avoter() {
        $this->vote = true;
        echo "$this->prenom $this->nom a voté. \n";
    }

    // Implémentation de la méthode afficher
    public function afficher() {
        echo "Nom: $this->nom, Prénom: $this->prenom, Bureau de vote: $this->bureau_de_vote \n";
    }
}

// Instanciation des objets et tests des méthodes définies
$client = new Client("Hachimi", "Laila", "123 Rue de la Liberté");
$client->afficher();

$electeur = new Electeur("Benmir", "Yannir", "Ecole primaire");
$electeur->afficher();
$electeur->avoter();

?>
