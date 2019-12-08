<?php

namespace App\Models;
use App\Models\Collaborateur;

class Competences extends Model {
        /** @var String $competences */
        protected $competences;
        /** @var Int $experience */
        protected $experience;

        protected $fillable = ['name', 'firstname','experience','competences','departement'];

        static protected $table = 'competences';

        public function __construct($attributes){
            parent::__construct($attributes);
        }
    
        public function setDepartement($departement) {
            $this->departement = $departement;
            $this->save();
        }

        public function setExperience($experience)
        {
            $this->experience = $experience;
            $this->save();
        }

        public function getDepartement()
        {
            return $this->departement;
        }

        public function getExperience()
        {
            return $this->experience;
        }
}
?>