<?php

namespace App\Models;
use App\Models\Collaborateur;

class ExpertTech extends Collaborateur {
    /** @var String $departement */
    protected $departement;

    /** @var String $competences */
    protected $competences;

     /** @var String $disponible */
    protected $disponible;


    protected $fillable = ['name', 'firstname', 'birthDate', 'address', 'maritalStatus', 'salary', 'yearsInCompany','departement', 'competences', 'disponible'];


    static protected $table = 'expert_tech';

    public function __construct($attributes){
        parent::__construct($attributes);
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