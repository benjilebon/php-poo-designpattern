<?php

namespace App;

class Devis extends Model {
    /** @var String $nombreDevis */
    public $nombreDevis;

    /** @var Datetime $dateDevis */
    public $dateDevis;

     /** @var Int $montant */
    public $montant;

    protected $fillable = ['nombreDevis','dateDevis','montant'];

   public function setNombreDevis($nombreDevis){
       $this->nombreDevis = $nombreDevis;
       $this->save();
   }

   public function setDateDevis($dateDevis){
        $this->dateDevis = $dateDevis;
        $this->save();
   }

   public function setMontant($montant){
        $this->montant = $montant;
        $this->save();
   }

   public function getNombreDevis(){
       return $this->nombreDevis;
   }

   public function getDateDevis(){
       return $this->dateDevis;
   }

   public function getMontant(){
        return $this->montant;
    }
}










?>