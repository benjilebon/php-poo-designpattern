<?php

namespace App\Models;
use Arch\Model;

class Competence extends Model {
        /** @var String $competences */
        protected $name;
        /** @var Int $experience */
        protected $competence;

        protected $fillable = ['name','competence'];

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