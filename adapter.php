interface IVoiture {
    public function getMarque();
    public function setMarque($marque);
    public function getModele();
    public function setModele($modele);
    public function getAnnee();
    public function setAnnee($annee);
    public function getCouleur();
    public function setCouleur($couleur);
    public function getVitesseMax();
    public function setVitesseMax($vitesseMax);
}

class Voiture implements IVoiture {
    private $marque;
    private $modele;
    private $annee;
    private $couleur;
    private $vitesseMax;

    public function __construct($marque, $modele, $annee, $couleur, $vitesseMax) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->couleur = $couleur;
        $this->vitesseMax = $vitesseMax;
    }

    public function getMarque() {
        return $this->marque;
    }

    public function setMarque($marque) {
        $this->marque = $marque;
    }

    public function getModele() {
        return $this->modele;
    }

    public function setModele($modele) {
        $this->modele = $modele;
    }

    public function getAnnee() {
        return $this->annee;
    }

    public function setAnnee($annee) {
        $this->annee = $annee;
    }

    public function getCouleur() {
        return $this->couleur;
    }

    public function setCouleur($couleur) {
        $this->couleur = $couleur;
    }

    public function getVitesseMax() {
        return $this->vitesseMax;
    }

    public function setVitesseMax($vitesseMax) {
        $this->vitesseMax = $vitesseMax;
    }
}

interface IVoitureElectrique {
    public function getAutonomie();
    public function setAutonomie($autonomie);
}

class VoitureElectrique implements IVoitureElectrique {
    private $autonomie;

    public function getAutonomie() {
        return $this->autonomie;
    }

    public function setAutonomie($autonomie) {
        $this->autonomie = $autonomie;
    }
}

class VoitureElectriqueAdapter implements IVoiture {
    private $voitureElectrique;

    public function __construct(VoitureElectrique $voitureElectrique) {
        $this->voitureElectrique = $voitureElectrique;
    }

    public function getMarque() {
        return null;
    }

    public function setMarque($marque) {
        // Do nothing
    }

    public function getModele() {
        return null;
    }

    public function setModele($modele) {
        // Do nothing
    }

    public function getAnnee() {
        return null;
    }

    public function setAnnee($annee) {
        // Do nothing
    }

    public function getCouleur() {
        return null;
    }

    public function setCouleur($couleur) {
        // Do nothing
    }

    public function getVitesseMax() {
        return null;
    }

    public function setVitesseMax($vitesseMax) {
        // Do nothing

    }
   
        public function getAutonomie() {
        return $this->voitureElectrique->getAutonomie();
    }

    public function setAutonomie($autonomie) {
        $this->voitureElectrique->setAutonomie($autonomie);
    }
}
