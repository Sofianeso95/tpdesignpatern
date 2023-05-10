interface VoitureFactory {
    public function creerVoiture($marque, $modele, $annee, $couleur, $vitesseMax);
}

class Voiture {
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

class VoitureFactoryImpl implements VoitureFactory {
    public function creerVoiture($marque, $modele, $annee, $couleur, $vitesseMax) {
        return new Voiture($marque, $modele, $annee, $couleur, $vitesseMax);
    }
}
