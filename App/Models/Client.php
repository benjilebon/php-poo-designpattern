<?php

namespace App\Models;

use App\Collaborateur;
use Arch\Model;

class Client extends Model {
    /** @var String $nomSociete */
    protected $nomSociete;
    /** @var String $nomContact */
    protected $nomContact;
    /** @var Int $numeroContact */
    protected $numeroContact;
    
    protected $fillable = ['nomSociete','nomContact','numeroContact'];

    static protected $table = 'clients';

    public function __construct($attributes){
        parent::__construct($attributes);
    }

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