<?php

namespace App;

class Competences extends Model {
        /** @var String $competences */
        private $competences;
        /** @var Int $experience */
        private $experience;

        protected $fillable = ['competences','experience'];

        public function __construct($departement) {
            $this->departement = $departement;
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