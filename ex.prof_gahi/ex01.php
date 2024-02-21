
<?php

class CompteBancaire {
    private $numeroCompte;
    private $nom;
    private $solde;

    // Constructeur
    public function __construct($numeroCompte, $nom, $solde) {
        $this->numeroCompte = $numeroCompte;
        $this->nom = $nom;
        $this->solde = $solde;
    }

    // Méthode de versement
    public function versement($montant) {
        if ($montant > 0) {
            $this->solde += $montant;
            echo "Versement de $montant DH effectué avec succès. \n";
        } else {
            echo "Le montant du versement doit être supérieur à zéro. \n";
        }
    }

    // Méthode de retrait
    public function retrait($montant) {
        if ($montant > 0 && $montant <= $this->solde) {
            $this->solde -= $montant;
            echo "Retrait de $montant DH effectué avec succès. \n";
        } else {
            echo "Le montant du retrait est invalide ou dépasse le solde disponible. \n";
        }
    }

    // Méthode toString
    public function __toString() {
        return "Numéro de compte : $this->numeroCompte, Nom : $this->nom, Solde : $this->solde DH \n";
    }
}

// Test de la classe CompteBancaire
$compte1 = new CompteBancaire("123456789", "mouna elamiri", 1000);
echo $compte1; // Affichage des détails du compte

$compte1->versement(500); // Effectuer un versement
$compte1->retrait(200); // Effectuer un retrait

echo $compte1; // Affichage mis à jour des détails du compte

?> 