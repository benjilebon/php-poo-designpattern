<?php

namespace App\Models;

use App\Models\Collaborateur;

class Admin extends Collaborateur {
    /** @var String $fonction */
    protected $fonction;

    protected $fillable = ['name', 'firstname', 'birthDate', 'address', 'maritalStatus', 'salary', 'yearsInCompany', 'fonction'];

    static protected $table = 'admin';

    public function __construct($attributes){
        parent::__construct($attributes);
    }

    public function setFonction($fonction){
        $this->fonction = $fonction;
        $this->save();
    }

    public function getFonction(){
        return $this->fonction;
    }

}






?>