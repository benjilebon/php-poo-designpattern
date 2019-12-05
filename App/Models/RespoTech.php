<?php

namespace App;

class RespoTech extends Collaborateur {
        /** @var String $departement */
        private $departement;

        protected $fillable = ['departement'];

        public function __construct($departement) {
            $this->departement = $departement;
        }
    
        public function setDepartement($departement) {
            $this->departement = $departement;
            $this->save();
        }

        public function getDepartement()
        {
            return $this->departement;
        }
}






?>