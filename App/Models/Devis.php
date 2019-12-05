<?php

namespace App\Models;
use Arch\Model;

class Devis extends Model {


    /** @var Datetime $dateDevis */
    protected $dateDevis;

     /** @var Int $montant */
    protected $montant;

    protected $fillable = ['dateDevis','montant'];

    static protected $table = 'devis';

    public function __construct($attributes){
        parent::__construct($attributes);
    }

   public function setDateDevis($dateDevis){
        $this->dateDevis = $dateDevis;
        $this->save();
   }

   public function setMontant($montant){
        $this->montant = $montant;
        $this->save();
   }

   public function getDateDevis(){
       return $this->dateDevis;
   }

   public function getMontant(){
        return $this->montant;
    }
}










?>