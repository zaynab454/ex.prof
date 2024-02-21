<?php

abstract class Personne {
    protected $nom;
    protected $prenom;

    
    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    abstract public function afficher();
}


class Client extends Personne {
    private $adresse;


    public function __construct($nom, $prenom, $adresse) {
        parent::__construct($nom, $prenom);
        $this->adresse = $adresse;
    }


    public function setCoord() {
        echo "Nom: $this->nom, Prénom: $this->prenom, Adresse: $this->adresse \n";
    }


    public function afficher() {
        $this->setCoord();
    }
}


class Electeur extends Personne {
    private $bureau_de_vote;
    private $vote;


    public function __construct($nom, $prenom, $bureau_de_vote) {
        parent::__construct($nom, $prenom);
        $this->bureau_de_vote = $bureau_de_vote;
        $this->vote = false;
    }


    public function avoter() {
        $this->vote = true;
        echo "$this->prenom $this->nom a voté. \n";
    }

    public function afficher() {
        echo "Nom: $this->nom, Prénom: $this->prenom, Bureau de vote: $this->bureau_de_vote \n";
    }
}


$client = new Client("Hachimi", "Laila", "123 Rue de la Liberté");
$client->afficher();

$electeur = new Electeur("Benmir", "Yannir", "Ecole primaire");
$electeur->afficher();
$electeur->avoter();

?>
