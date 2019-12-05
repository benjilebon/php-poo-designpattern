<?php

namespace App\Models;
use App\Models\Collaborateur;

class RespoTech extends Collaborateur {
        /** @var String $departement */
        protected $departement;

        protected $fillable = ['name','firstname','departement'];

        static protected $table = 'respo_tech';

        public function __construct($attributes){
            parent::__construct($attributes);
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