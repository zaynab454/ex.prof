<?php

class CompteBancaire {
    private $numeroCompte;
    private $nom;
    private $solde;


    public function __construct($numeroCompte, $nom, $solde) {
        $this->numeroCompte = $numeroCompte;
        $this->nom = $nom;
        $this->solde = $solde;
    }


    public function versement($montant) {
        if ($montant > 0) {
            $this->solde += $montant;
            echo "Versement de $montant DH effectué avec succès. \n";
        } else {
            echo "Le montant du versement doit être supérieur à zéro. \n";
        }
    }


    public function retrait($montant) {
        if ($montant > 0 && $montant <= $this->solde) {
            $this->solde -= $montant;
            echo "Retrait de $montant DH effectué avec succès. \n";
        } else {
            echo "Le montant du retrait est invalide ou dépasse le solde disponible. \n";
        }
    }

 
    public function __toString() {
        return "Numéro de compte : $this->numeroCompte, Nom : $this->nom, Solde : $this->solde DH \n";
    }
}


$compte1 = new CompteBancaire("123456789", "mouna elamiri", 1000);
echo $compte1; // Affichage des détails du compte

$compte1->versement(500); // C'est le fait d'effectuer un versement
$compte1->retrait(200); // C'est d'effectuer un retrait

echo $compte1; // L'affichage mis à jour des détails du compte

?> 