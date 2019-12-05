<?php

namespace App;

class Admin extends Collaborateur {
    /** @var String $fonction */
    private $fonction;

    protected $fillable =['fonction'];

    public function __construct($fonction){
        $this->fonction = $fonction;
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