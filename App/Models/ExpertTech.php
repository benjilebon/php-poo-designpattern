<?php

namespace App;

class ExpertTech extends Collaborateur {
    /** @var String $departement */
    private $departement;

    /** @var Array $competences */
    private $competences;

     /** @var Boolean $disponible */
    private $disponible;


    protected $fillable = ['departement', 'competences', 'disponible'];

    public function __construct($departement) {
        $this->departement = $departement;
    }

    public function setDepartement($p) {
        $this->departement = $p;
        $this->save();
    }

    public function setCompetences($p) {
        $this->competences = $p;
        $this->save();
    }

    public function setDisponible($p) {
        $this->disponible = $p;
        $this->save();
    }

    
    public function getDepartement() {
        return $this->departement;
    }

    public function getCompetences() {
        return $this->competences;
    }

    public function getDisponible() {
        return $this->disponible;
    }

}






?>