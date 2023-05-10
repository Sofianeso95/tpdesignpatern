class Voiture implements SplSubject {
    private $vitesse;
    private $kilometrage;
    private $observateurs = array();

    public function setVitesse($vitesse) {
        $this->vitesse = $vitesse;
        $this->notify();
    }

    public function setKilometrage($kilometrage) {
        $this->kilometrage = $kilometrage;
        $this->notify();
    }

    public function attach(SplObserver $observateur) {
        $this->observateurs[] = $observateur;
    }

    public function detach(SplObserver $observateur) {
        $key = array_search($observateur, $this->observateurs, true);
        if ($key !== false) {
            unset($this->observateurs[$key]);
        }
    }

    public function notify() {
        foreach ($this->observateurs as $observateur) {
            $observateur->update($this);
        }
    }
}
