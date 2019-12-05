<?php

namespace App;

use App\Collaborateur;

class Client extends Collaborateur {
    /** @var String $nomSociete */
    private $nomSociete;
    /** @var String $nomContact */
    private $nomContact;
    /** @var Int $numeroContact */
    private $numeroContact;
    
    protected $fillable = ['nomSociete','nomContact','numeroContact'];

    public function setNomSociete($nomSociete)
    {
        $this->nomSociete = $nomSociete;
        $this->save();
    }

    public function getNomSociete()
    {
        return $this->nomSociete;
    }

    public function setNomContact($nomContact)
    {
        $this->nomContact = $nomContact;
        $this->save();
    }

    public function getNomContact()
    {
        return $this->nomContact;
    }

    public function setNumeroContact($numeroContact)
    {
        $this->numeroContact = $numeroContact;
        $this->save();
    }

    public function getNumeroContact()
    {
        return $this->numeroContact;
    }
}




?>